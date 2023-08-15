@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Detail</h1>

    <div class="mb-3">
        <label class="form-label">First Name : {{ $employee->first_name }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name: {{ $employee->last_name }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Age: {{ $employee->age }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Email: {{ $employee->email }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Gender: {{ $employee->gender }}</label>
    </div>


    <div>
        <a class="btn btn-primary" href="{{ route('employees.edit', ['employee' => $employee->id]) }}">Edit</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Delete
        </button>

        <a class="btn btn-primary" href="{{ route('employees.index') }}">Employee List</a>
    </div>

</div>

<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Delete employee now?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection