@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employee Profile</h1>
        <h3>{{ $employee->id }}</h3>
        <h3>{{ $employee->first_name }} {{ $employee->last_name }}</h3>
        <h3>{{ $employee->email }}</h3>

        <p>
            <a href="{{ route('employee.index') }}" class="button">Employee List</a>
        </p>

        @if (Auth::user())
            <p>
                <a href="{{ route('employee.edit', $employee->id) }}" class="button">Edit</a>
            </p>
            <p>

            <form action="{{ route('employee.destroy', $employee) }}" method="POST" id="deleteForm">
                @method('DELETE')
                @csrf
                <a href="#" onclick="document.getElementById('deleteForm').submit()">Delete</a>
            </form>

            </p>
        @endif
    </div>
@endsection
