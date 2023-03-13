<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use WithFaker;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
    }

    public function test_register(): void
    {
        global $name;
        global $email;
        global $password;

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
        global $email;
        global $password;

        $response = $this->post(
            '/login',
            [
                'email' => $email,
                'password' => $password,
            ]
        );
        $response->assertRedirect('/home', 'successfully login');
    }
}
