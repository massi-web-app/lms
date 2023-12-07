<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    public function test_user_can_see_register_form()
    {
        $response=$this->get('/register');
        $response->assertStatus(200);
    }

}
