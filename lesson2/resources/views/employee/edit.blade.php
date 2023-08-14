<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Edit</title>
</head>

<body>
    <h1>Edit Employee</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @method('PUT')
        @csrf
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" required="required" value="{{ $employee->first_name }}" />
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" required="required" value="{{ $employee->last_name }}" />
        </p>
        <p>
            <label>Age</label>
            <input type="number" name="age" required="required" value="{{ $employee->age }}" />
        </p>
        <p>
            <label>Email Address</label>
            <input type="email" name="email" required="required" value="{{ $employee->email }}" />
        </p>
        <p>
            <label>Gender</label>
            <select name="gender" value="{{ $employee->gender }}" required focus>
                <option value="Male" {{$employee->gender == 'Male'? 'selected': ''}}>Male</option>
                <option value="Female" {{$employee->gender == 'Female'? 'selected': ''}}>Female</option>
            </select>
        </p>

        <input type="submit" value="Update" />
        <a href="{{url()->previous()}}">Back</a>
    </form>

    @if($errors -> any())
    <div style="color: red;">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif


</body>

</html>