<?php

namespace Mass\User\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mass\User\Models\User;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_user_can_see_form_register(): void
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }

    /**
     * a user can register
     * @return void
     */
    public function test_user_can_register()
    {

        $response = $this->post(route('register'), [
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'mobile' => '98936606163',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ]);

        $response->assertRedirect(route('home'));

        $this->assertCount(1, User::all());
    }

    /**
     * user must be verified account
     * @return void
     */
    public function test_user_have_to_verify_account()
    {
        $this->post(route('register'), [
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'mobile' => '98936606163',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ]);

        $response = $this->get(route('home'));

        $response->assertRedirect(route('verification.notice'));
    }

    public function test_verified_user_can_see_home_page()
    {
        $this->registerNewUser();

        $this->assertAuthenticated();

        auth()->user()->markEmailAsVerified();

        $response = $this->get(route('home'));

        $response->assertOk();
    }

    /**
     * @return void
     */
    public function registerNewUser()
    {
        $this->post(route('register'), [
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'mobile' => '98936606163',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ]);
    }


}
