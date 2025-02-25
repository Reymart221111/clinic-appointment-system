<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUpdateProfilePage()
    {
        $isUpdatingProfile = true;

        return view('contents.user-toggle.index', [
            'isUpdatingProfile' => $isUpdatingProfile,
        ]);
    }

    public function showUpdatePasswordPage()
    {
        $isUpdatingPassword = true;

        return view('contents.user-toggle.index', [
            'isUpdatingPassword' => $isUpdatingPassword,
        ]);
    }

    public function showUpdateProfilePicturePage()
    {
        $isUpdatingProfilePicture = true;

        return view('contents.user-toggle.index', [
            'isUpdatingProfilePicture' => $isUpdatingProfilePicture,
        ]);
    }
}
