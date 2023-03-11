<?php

namespace App\Repositories;


use App\Models\Employee;
use App\Repositories\EmployeeRepositoryInterface;


class EmployeeMySqlRepository implements EmployeeRepositoryInterface
{

    public function all()
    {
        //Employee Model
        //$data = Employee::all();
        //$data = Employee::where('age', '>', 0)->get();
        //$data = Employee::where('first_name', 'LIKE', 'Al%')->get();
        //$data = Employee::select()->where('age', '>', 0)->groupBy('id')->get();
        //$data = Employee::select()->where('age', '>=', 0)->count();

        //$data = DB::select('select * from employees');

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
