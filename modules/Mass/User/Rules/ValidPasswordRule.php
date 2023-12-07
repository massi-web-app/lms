<?php

namespace Mass\User\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidPasswordRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/',$value,$matches);
        if (empty($matches)){
            $fail('رمز عبور معتبر نیست');
        }

    }
}
