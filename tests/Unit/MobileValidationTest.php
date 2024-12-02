<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Validator;
use Mass\User\Rules\ValidMobileRule;
use PHPUnit\Framework\TestCase;

class MobileValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_mobile_is_not_valid(): void
    {
        $rule = new ValidMobileRule();

        $isValid = true;

        $rule->validate('mobile', '91222021', function () use (&$isValid) {
            $isValid = false;
        });

        $this->assertFalse($isValid);

    }

    public function test_mobile_is_valid()
    {
        $rule = new ValidMobileRule();

        $isValid = true;

        $rule->validate('mobile', '9122202123', function () use (&$isValid) {
            $isValid = false;
        });

        $this->assertTrue($isValid);
    }
}
