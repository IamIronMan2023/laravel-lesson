@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Employee Create</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div class="mb-3 col-md-4">
            <label class="form-label">First Name</label>
            <input class="form-control" type="text" required="required" name="first_name" />
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Last Name</label>
            <input class="form-control" type="text" required="required" name="last_name" />
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Email Address</label>
            <input class="form-control" type="email" required="required" name="email" />
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Age</label>
            <input class="form-control" type="number" required="required" name="age" />
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender" required focus>
                <option selected disabled value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-3 col-md-4">
            <input class="btn btn-primary" type="submit" value="Save" />
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