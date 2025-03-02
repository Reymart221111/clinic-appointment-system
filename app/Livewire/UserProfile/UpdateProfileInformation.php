<?php

namespace App\Livewire\UserProfile;

use App\Livewire\Forms\UserProfile\UserProfileForm;
use App\Traits\LivewireHandleUpdateEventTrait;
use App\Traits\LivewireLiveValidationTrait;
use Livewire\Component;

class UpdateProfileInformation extends Component
{
    use LivewireLiveValidationTrait, LivewireHandleUpdateEventTrait;

    public UserProfileForm $form;

    public function mount()
    {
        $this->form->mount();
    }

    public function updateProfileInformation()
    {
        try {
            $this->form->update();

            $this->dispatch("updated-event", [
                "is_success" => true,
                "message" => "Profile information updated successfully."
            ]);
        } catch (\Exception $e) {
            $this->dispatch("updated-event", [
                "is_success" => false,
                "message" => "Error: " . $e->getMessage()
            ]);
        }
    }

    public function render()
    {
        return view("livewire.user-profile.update-profile-information");
    }
}
