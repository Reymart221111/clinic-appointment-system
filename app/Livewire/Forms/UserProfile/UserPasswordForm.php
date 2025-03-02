<?php

namespace App\Livewire\Forms\UserProfile;

use App\Rules\Password\HasLetter;
use App\Rules\Password\HasNumber;
use App\Rules\Password\HasSymbol;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Form;

class UserPasswordForm extends Form
{
    public $old_password;
    public $new_password;
    public $confirm_password;

    public function rules(): array
    {
        return [
            'old_password' => ['required', 'string'],
            'new_password' => [
                'required',
                'string',
                'min:8',
                new HasLetter,
                new HasNumber,
                new HasSymbol,
                Password::defaults(),
            ],
            'confirm_password' => 'required|same:new_password',
        ];
    }

    public function resetFields()
    {
        $this->old_password = '';
        $this->new_password = '';
        $this->confirm_password = '';
    }

    public function updatePassword()
    {
        $validated = $this->validate();

        if (!Hash::check($validated['old_password'], auth()->user()->password)) {
            throw new Exception('The current password is incorrect.');
        }

        auth()->user()->update([
            'password' => Hash::make($validated['new_password'])
        ]);

        $this->reset();
    }
}
