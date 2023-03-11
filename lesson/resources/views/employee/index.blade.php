@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employee List</h1>
        <table class="table">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @if (Auth::user())
                <a href="{{ route('employee.create') }}">New</a>
            @endif


            @foreach ($employees as $employee)
                <tr>
                    <td> {{ $employee->full_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>
                        <a href="{{ route('employee.show', ['id' => $employee->id]) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $employees->links() }}
    </div>
@endsection
