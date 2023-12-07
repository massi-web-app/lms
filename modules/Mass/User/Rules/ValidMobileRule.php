<?php

namespace Mass\User\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidMobileRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
         preg_match('/^9[0-9]{9}/',$value,$matches);
         if (empty($matches)){
             $fail('تلفن همراه معتبر نیست');
         }

    }
}
