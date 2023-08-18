<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Repositories\EmployeeRepositoryInterface;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index()
    {
        //$data = Employee::all();
        $employees = $this->employeeRepository->all();
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
        $this->employeeRepository->store($request->all());
        return redirect()->route('employees.index');
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $this->employeeRepository->update($request->all(), $employee);
        return redirect()->route('employees.show', ['employee' => $employee->id]);
    }

    public function destroy(Employee $employee)
    {
        $this->employeeRepository->destroy($employee->id);
        return redirect()->route('employees.index');
    }
}
