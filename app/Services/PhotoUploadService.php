<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class PhotoUploadService
{
    public function upload($photoFile, $photoName, $photoPath, $existingPhotoPath = null)
    {
        if ($existingPhotoPath && Storage::disk('public')->exists($existingPhotoPath)) {
            Storage::disk('public')->delete($existingPhotoPath);
        }

        return $photoFile->storeAs($photoPath, $photoName, 'public');
    }
}
