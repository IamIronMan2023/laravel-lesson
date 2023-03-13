<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use WithFaker;

    public function test_register(): void
    {
        $name = $this->faker->name();
        $email = $this->faker->unique()->safeEmail();
        $password = 'password123';

        $response = $this->post(
            '/register',
            [
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'password_confirmation' => $password,
            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }

    public function test_login(): void
    {
        $response = $this->post(
            "/login",
            [
                'email' => 'dyabut@email.com',
                'password' => "password123"
            ]
        );
        $response->assertRedirect('/home');
    }
}
