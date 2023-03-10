<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        //Employee Model
        //$data = Employee::all();
        //$data = Employee::where('age', '>', 0)->get();
        //$data = Employee::where('first_name', 'LIKE', 'Al%')->get();
        //$data = Employee::select()->where('age', '>', 0)->groupBy('id')->get();
        //$data = Employee::select()->where('age', '>=', 0)->count();

        //$data = DB::select('select * from employees');
        $data = Employee::paginate(10);
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

    function create()
    {
        return view('employee.create');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
        ]);

        Employee::create($validated);

        return redirect()->route('employee.index');
    }

    function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index');
    }
}
