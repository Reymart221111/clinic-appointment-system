<?php

namespace App\Livewire\UserProfile;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class SectionHeader extends Component
{
    #[On('updated-event')]
    public function render()
    {
        $user = Auth::user();
        $userFullName = $user->full_name;
        $userProfileImage = asset('storage/' . $user->image_path) ?? asset('Images/no-profile.png');

        return view('livewire.user-profile.section-header', [
            'userFullName' => $userFullName,
            'userProfileImage' => $userProfileImage,
        ]);
    }
}
