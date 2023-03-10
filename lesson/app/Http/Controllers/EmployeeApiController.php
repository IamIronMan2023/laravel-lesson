<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeApiController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function show($id)
    {
        return Employee::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
        ]);

        Employee::create($validated);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return $employee;
    }

    public function destroy($id)
    {
        Employee::destroy($id);
    }
}
