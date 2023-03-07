<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /* Common controller functions
    index = Show all data
    show = Show single data

    create = Show a form to a new data
    store = Store a data

    edit = Show a form to edit data
    update = update a data

    destroy = delete a data
*/

    public function index()
    {
        $data = Employee::all();
        return view('employee.index', ['employees' => $data]);
    }

    public function show($id)
    {
        $data = Employee::findOrFail($id);
        return view('employee.show', ['employee' => $data]);
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
}
