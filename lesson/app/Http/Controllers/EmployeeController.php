<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use App\Repositories\EmployeeRepository;

class EmployeeController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        //$this->middleware('auth');
        //$this->middleware('auth', ['except' => ['index']]);
        $this->employeeRepository = $employeeRepository;
    }

    public function index()
    {
        //$data = Employee::all();
        //$data = Employee::where('age', '>', 0)->get();
        //$data = Employee::where('first_name', 'LIKE', 'al%')->get();
        //$data = Employee::select()->where('age', '>', 0)->get();
        //$data = Employee::select()->where('age', '>', 0)->groupBy('id')->get();
        //$data = Employee::where('age', '>=', '0')->count();

        //$data = DB::select('select * from employees');
        //dd($data);

        //---Pagination
        $data = $this->employeeRepository->all();

        return view('employee.index', ['employees' => $data]);
    }

    public function show($id)
    {
        $data = Employee::findOrFail($id);
        //$data->full_name = 'davy yabut';
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
            "age" => ['required']
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

    public function destroy(Request $request, Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
