<?php

namespace Tests\Unit;

use App\Models\Employee;
use Exception;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertTrue;

class EmployeeTest extends TestCase
{
    use WithFaker;
    /**
     * A basic unit test example.
     */

    public function setUp(): void
    {
        parent::setUp();
        //disable auth or other middlewares
        $this->withoutMiddleware();
    }

    public function test_employee_store(): void
    {
        $email = fake()->safeEmail();
        $response = $this->call('POST', route('employees.store'),  [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => $email,
            'age' => fake()->numberBetween(18, 120),
            // 'age' => 500,
            'gender' => fake()->randomElement(['Male', "Female"])
        ]);

        $employee = Employee::where('email', $email)->first();
        assertNotNull($employee, 'Employee not created');
    }
}
