@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Employee</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3 col-md-4">
            <label class="form-label">First Name</label>
            <input class="form-control" type="text" name="first_name" required="required"
                value="{{ $employee->first_name }}" />
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Last Name</label>
            <input class="form-control" type="text" name="last_name" required="required"
                value="{{ $employee->last_name }}" />
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Age</label>
            <input class="form-control" type="number" name="age" required="required" value="{{ $employee->age }}" />
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Email Address</label>
            <input class="form-control" type="email" name="email" required="required" value="{{ $employee->email }}" />
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender" value="{{ $employee->gender }}" required focus>
                <option value="Male" {{$employee->gender == 'Male'? 'selected': ''}}>Male</option>
                <option value="Female" {{$employee->gender == 'Female'? 'selected': ''}}>Female</option>
            </select>
        </div>

        <div class="mb-3 col-md-4">
            <input class="btn btn-primary" type="submit" value="Update" />
            <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
        </div>
    </form>

    @if($errors -> any())
    <div style="color: red;">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
</div>
@endsection