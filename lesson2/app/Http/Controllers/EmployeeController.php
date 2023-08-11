<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // $data = Employee::paginate(10);
        $data = Employee::all();
        return view('employee.index', ['employees' => $data]);
    }
}
