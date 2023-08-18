<?php

namespace App\Repositories;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

interface EmployeeRepositoryInterface
{
    public function all();
    public function update(EmployeeRequest $employeeRequest, Employee $employee);
    public function store(EmployeeRequest $employeeRequest);
    public function destroy(Employee $employee);
}
