<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;



class EmployeeApiController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return $data;
    }

    public function show($id)
    {
        $data = Employee::findOrFail($id);
        return $data;
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
        ]);

        return Employee::create($validated);
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
        return response('successfully deleted', 200);
    }
}
