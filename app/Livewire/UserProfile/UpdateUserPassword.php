<?php

namespace App\Livewire\UserProfile;

use App\Livewire\Forms\UserProfile\UserPasswordForm;
use App\Traits\LivewireLiveValidationTrait;
use Exception;
use Livewire\Component;

class UpdateUserPassword extends Component
{
    use LivewireLiveValidationTrait;

    public UserPasswordForm $form;

    public function updatePassword()
    {
        try {
            $this->form->updatePassword();
            $this->reset();
            session()->flash('success', 'Password updated successfully.');
        } catch (Exception $e) {
            session()->flash('error', 'Error: ' . $e->getMessage());
        }
    }

    public function resetFields()
    {
        $this->resetErrorBag();
        $this->form->resetFields(); // Manually reset the form
    }

    public function render()
    {
        return view('livewire.user-profile.update-user-password');
    }
}
