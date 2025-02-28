<?php

namespace App\Http\Controllers;

use App\Enums\UserRoles;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
        $this->authService->createDefaultAdmin();
    }

    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();
        $this->authService->loginUser($credentials);
        return $this->redirectBasedOnRole();
    }

    private function redirectBasedOnRole(): RedirectResponse
    {
        $user = Auth::user();
        return match ($user->role) {
            UserRoles::ADMIN->value => redirect()->intended('admin/dashboard'),
            UserRoles::EMPLOYEE->value => redirect()->intended('employee/dashboard'),
        };
    }
}
