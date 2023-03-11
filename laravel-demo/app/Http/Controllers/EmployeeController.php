<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeeRepositoryInterface;
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
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->employeeRepository = $employeeRepository;
    }

    public function index()
    {
        $data = $this->employeeRepository->all();
        return view('employee.index', ['employees' => $data]);
    }

    public function show($id)
    {
        $data = $this->employeeRepository->findById($id);
        return view('employee.show', ['employee' => $data]);
    }

    public function edit($id)
    {
        $data = $this->employeeRepository->findById($id);
        return view('employee.edit', ['employee' => $data]);
    }

    public function update(Request $request, $id)
    {
        $this->employeeRepository->update($id);
        return redirect()->route('employee.show', ['id' => $id]);
    }

    function create()
    {
        return view('employee.create');
    }

    function store(Request $request)
    {
        $this->employeeRepository->store();
        return redirect()->route('employee.index');
    }

    function destroy($id)
    {
        $this->employeeRepository->delete($id);
        return redirect()->route('employee.index');
    }
}
