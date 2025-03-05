<?php

namespace App\Livewire\UserProfile;

use App\Livewire\Forms\UserProfile\UserProfileImageForm;
use App\Services\PhotoUploadService;
use App\Traits\LivewireHandleUpdateEventTrait;
use App\Traits\LivewireLiveValidationTrait;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateUserProfileImage extends Component
{
    use LivewireLiveValidationTrait, LivewireHandleUpdateEventTrait, WithFileUploads;

    public UserProfileImageForm $form;
    public string $profileImageUrl;

    public function mount()
    {
        $this->profileImageUrl = auth()->user()->profile_photo_url ?? asset('Images/Umay.jpg');
    }

    public function updateImage(PhotoUploadService $photoUploadService)
    {
        try {
            $this->form->updateImage($photoUploadService);;

            $this->dispatch('updated-event', [
                'is_success' => true,
                'message' => 'Profile image updated successfully!',
            ]);
        } catch (\Exception $e) {
            $this->dispatch('updated-event', [
                'is_success' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ]);
        }
    }

    public function render()
    {
        return view('livewire.user-profile.update-user-profile-image');
    }
}
