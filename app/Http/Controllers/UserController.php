<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUpdateProfilePage()
    {
        $isUpdatingProfile = true;
        $title = 'Update Profile Information';

        return view('contents.user-toggle.index', [
            'isUpdatingProfile' => $isUpdatingProfile,
            'title' => $title,
        ]);
    }

    public function showUpdatePasswordPage()
    {
        $isUpdatingPassword = true;
        $title = 'Update Password';

        return view('contents.user-toggle.index', [
            'isUpdatingPassword' => $isUpdatingPassword,
            'title' => $title,
        ]);
    }

    public function showUpdateProfilePicturePage()
    {
        $isUpdatingProfilePicture = true;
        $title = 'Update Profile Picture';

        return view('contents.user-toggle.index', [
            'isUpdatingProfilePicture' => $isUpdatingProfilePicture,
            'title' => $title,
        ]);
    }
}
