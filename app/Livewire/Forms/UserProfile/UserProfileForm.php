<?php

namespace App\Livewire\Forms\UserProfile;

use Illuminate\Support\Facades\Auth;
use Livewire\Form;

class UserProfileForm extends Form
{
    public $first_name;
    public $last_name;
    public $email;

    public function mount()
    {
        $user = Auth::user();
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
    }

    public function rules()
    {
        return [
            "first_name" => ["required", "string", "max:255"],
            "last_name" => ["required", "string", "max:255"],
            "email" => ["required", "string", "email", "max:255"],
        ];
    }

    public function update()
    {
        $validatedData = $this->validate();
        Auth::user()->update($validatedData);
    }
}