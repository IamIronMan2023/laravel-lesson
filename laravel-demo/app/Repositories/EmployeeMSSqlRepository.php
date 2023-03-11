<?php

namespace App\Repositories;

use App\Repositories\EmployeeRepositoryInterface;

use App\Models\Employee;


class EmployeeMSSqlRepository implements EmployeeRepositoryInterface
{


    public function all()
    {
        return Employee::paginate(10);
    }

    public function findById($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->first_name = 'davy';
        return $employee;
    }

    public function update($id)
    {
        $validated = request()->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
        ]);

        $employee = Employee::where('id', $id);
        $employee->update($validated);
    }

    public function store()
    {
        $validated = request()->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
        ]);

        Employee::create($validated);
    }

    public function delete($id)
    {
        //add 
        Employee::destroy($id);
    }
}
