<?php

namespace App\Providers;

use App\Enums\UserRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RolePrefixServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $user = Auth::user();
            $rolePrefix = null;

            if ($user) {
                $rolePrefix = match ($user->role) {
                    UserRoles::ADMIN->value => 'admin.',
                    UserRoles::EMPLOYEE->value => 'employee.',
                    default => ''
                };
            }

            $view->with('rolePrefix', $rolePrefix);
        });
    }
}
