<?php

namespace App\Services;

use App\Enums\UserRoles;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    private $defaultUserId = 1;

    public function loginUser(array $credentials): void
    {
        $user = User::where('email', $credentials['email'])->first();
        $this->validateCredentials($user, $credentials);
        Auth::login($user);
        $this->regenerateSession();
    }

    public function createDefaultAdmin(): void
    {
        if (!User::where('id', $this->defaultUserId)->exists()) {
            User::create([
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@mail.com',
                "password" => bcrypt('admin12345'),
                'role' => UserRoles::ADMIN->value
            ]);

            return;
        }
    }

    private function regenerateSession(): void
    {
        request()->session()->regenerate();
    }

    private function validateCredentials(?User $user, array $credentials): void
    {
        if (!$user) {
            abort(back()->withErrors([
                'email' => 'Email address does not match records!'
            ])->onlyInput('email'));
        }
        
        if (!Hash::check($credentials['password'], $user->password)) {
            abort(back()->withErrors([
                'password' => 'Password is incorrect!'
            ])->onlyInput('email'));
        }
    }
}
