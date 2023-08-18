<?php

namespace App\Repositories;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::paginate(10);
    }

    public function update(EmployeeRequest $employeeRequest, Employee $employee)
    {
        $employee->update($employeeRequest->all());
    }

    public function store(EmployeeRequest $employeeRequest)
    {
        Employee::create($employeeRequest->all());
    }

    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
    }
}
