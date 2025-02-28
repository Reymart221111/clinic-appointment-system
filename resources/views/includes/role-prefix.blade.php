@php
    use App\Enums\UserRoles; 

    $user = Auth::user();

    $rolePrefix = match($user->role) {
        UserRoles::ADMIN->value => 'admin.',
        UserRoles::EMPLOYEE->value => 'employee.',
    };
@endphp