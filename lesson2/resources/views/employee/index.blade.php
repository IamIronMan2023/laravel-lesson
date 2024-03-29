@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Employee List</h1>
    <a href="{{ route('employees.create') }}">New</a>
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Active</th>
            <th>Action</th>
        </tr>

        @foreach ($employees as $employee)
        <tr>
            <td> {{ $employee->first_name }}</td>
            <td> {{ $employee->last_name }}</td>
            <td> {{ $employee->age }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->status }}</td>
            <td><a href="{{ route('employees.show', ['employee' => $employee->id]) }}">View</a></td>
        </tr>
        @endforeach
    </table>
    {{ $employees->links() }}
</div>
@endsection