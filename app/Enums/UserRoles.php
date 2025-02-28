<?php

namespace App\Enums;

enum UserRoles: string
{
    case ADMIN = 'admin';
    case EMPLOYEE = 'employee';

    public static function getRoles(): array
    {
        return array_column(self::cases(), 'value');
    }
}
