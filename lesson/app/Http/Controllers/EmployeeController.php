<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return view('employee.index', ['employees' => $data]);
    }

    public function show($id)
    {
        //---sending single record
        $data = Employee::where('id', $id)->first();
        return view('employee.show', $data);
    }


    public function edit($id)
    {
        $data = Employee::findOrFail($id);
        return view('employee.edit', ['employee' => $data]);
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
        ]);

        $employee->update($validated);

        return redirect()->route('employee.show', ['id' => $employee->id]);
    }

    public function create()
    {

        return view('employee.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
        ]);

        Employee::create($validated);

        return redirect()->route('employee.index');
    }
}
