<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Repositories\EmployeeMySqlRepository;
use App\Models\Employee;

class EmployeeRepositoryTest extends TestCase
{
    private $employeeRepository;

    public function setUp(): void
    {
        parent::setup();
        $this->employeeRepository = new EmployeeMySqlRepository;
    }

    public function test_all()
    {
        $this->assertTrue(count($this->employeeRepository->all()) > 0);
    }

    public function test_findById()
    {
        $employee = $this->employeeRepository->findbyId(5);
        $this->assertTrue($employee != null);
    }
}
