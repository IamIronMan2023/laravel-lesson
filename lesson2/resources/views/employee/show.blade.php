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
        <a class="btn btn-primary" href="{{ route('employees.edit', ['employee' => $employee->id]) }}"
            class="button">Edit</a>
        <a class="btn btn-primary" href="{{ route('employees.index') }}" class="button">Employee List</a>

        <form action="{{ route('employees.destroy', $employee->id) }}" method='POST' id="myform">
            @method('DELETE')
            @csrf
            <a class="btn btn-primary" href="#" onclick="document.getElementById('myform').submit()">Delete</a>
        </form>

    </div>

</div>
@endsection