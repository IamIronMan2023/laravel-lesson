<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use WithFaker;

    public function test_register(): void
    {
        $name = $this->faker->name();
        $email = $this->faker->email();
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

        $response->assertRedirect('/home');
    }

    public function test_login(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        $response = $this->post(
            '/login',
            [
                'email' => 'dyabut@email.com',
                'password' => 'password123',
            ]
        );
        $response->assertRedirect('/home', 'successfully login');
    }
}
