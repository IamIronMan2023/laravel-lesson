<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return view('employee.index', ['employees' => $data]);
    }

    public function show(Employee $employee)
    {
        return view('employee.show', ['employee' => $employee]);
    }


    public function create()
    {
        return view('employee.create');
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', ['employee' => $employee]);
    }

    public function store(Request $request)
    {
        Employee::create(request()->all());
        return redirect()->route('employees.index');
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update(request()->all());
        return redirect()->route('employees.show', ['employee' => $employee->id]);
    }

    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect()->route('employees.index');
    }
}
