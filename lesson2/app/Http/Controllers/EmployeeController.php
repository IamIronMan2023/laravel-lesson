<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        //$data = Employee::all();
        $employees = Employee::paginate(10);
        return view('employee.index', ['employees' => $employees]);
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

    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.show', ['employee' => $employee->id]);
    }

    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect()->route('employees.index');
    }
}
