<?php

namespace Mass\User\Tests\Unit;

use Mass\User\Rules\ValidPasswordRule;
use PHPUnit\Framework\TestCase;

class PasswordValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_password_should_not_be_less_than_character(): void
    {
        $rule = new ValidPasswordRule();

        $isValid = true;
        $rule->validate('password', '1234567', function () use (&$isValid) {
            $isValid = false;
        });
        $this->assertFalse($isValid);
    }

    public function test_password_should_be_include_number_character()
    {
        $rule = new ValidPasswordRule();

        $isValid = true;
        $rule->validate('password', '!@#AASDAasd', function () use (&$isValid) {
            $isValid = false;
        });
        $this->assertFalse($isValid);

    }
}
