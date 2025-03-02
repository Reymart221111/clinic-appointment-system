<?php

namespace App\Rules\Password;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class HasLetter implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/[a-zA-Z]/', $value)) {
            $fail("The :attribute must contain at least one letter.");
        }
    }
}