<?php

namespace Mass\User\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mass\User\Models\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic feature test example.
     */
    public function test_user_can_see_login(): void
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    public function test_user_can_login_by_email()
    {
        $user = $this->createNewUser();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => "12345678"
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('home'));
    }

    public function test_user_can_by_mobile()
    {

        $user = $this->createNewUser();

        $response = $this->post(route('login'), [
            'email' => $user->mobile,
            'password' => "12345678"
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('home'));

    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function createNewUser()
    {
        return User::query()->create([
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => '989351101112',
            'password' => bcrypt(12345678),
        ]);
    }
}
