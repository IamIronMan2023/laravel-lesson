<?php

namespace Tests\Unit;

use App\Repositories\EmployeeRepository;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeRepositoryTest extends TestCase
{
    private $employeeRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->employeeRepository = new EmployeeRepository;
    }

    public function test_all()
    {
        $this->assertTrue(count($this->employeeRepository->all()) > 0);
    }

    public function test_findById()
    {
        $employee = $this->employeeRepository->findById(5);
        $this->assertTrue($employee != null);
    }
}
