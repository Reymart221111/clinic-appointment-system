<?php

namespace App\Livewire\Forms\UserProfile;

use App\Services\PhotoUploadService;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserProfileImageForm extends Form
{
    public $image;

    public function rules()
    {
        return [
            'image' => ['required', 'image', 'max:10240'],
        ];
    }

    public function updateImage(PhotoUploadService $photoUploadService)
    {
        $validatedData = $this->validate();
        $photoFile = $validatedData['image'];
        
        $photoName = 'profile-' . auth()->id() . '.' . $photoFile->getClientOriginalExtension();
        $photoPath = 'images/users';
    
        $uploadedFilePath = $photoUploadService->upload(
            $photoFile,
            $photoName,
            $photoPath,
            auth()->user()->image_path
        );
    
        auth()->user()->update([
            'image_path' => $uploadedFilePath,
        ]);
    }
}
