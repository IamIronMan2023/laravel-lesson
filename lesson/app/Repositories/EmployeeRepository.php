<?php

namespace App\Repositories;

use App\Models\Employee;


class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::paginate(10);
    }

    public function findById($id)
    {
        return Employee::findOrFail($id);
    }

    public function update($id)
    {
        $validated = request()->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
            "age" => ['required']
        ]);

        $employee = Employee::where('id', $id);
        $employee->update($validated);
    }
}
