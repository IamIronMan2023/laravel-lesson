<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Detail</title>
</head>

<body>
    <h1>Employee Detail</h1>
    <h3>First Name : {{ $employee->first_name }}</h3>
    <h3>Last Name: {{ $employee->last_name }}</h3>
    <h3>Age: {{ $employee->age }}</h3>
    <h3>Email: {{ $employee->email }}</h3>
    <h3>Gender: {{ $employee->gender }}</h3>

    <p>
        <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}" class="button">Edit</a>
    </p>

    <p>
        <a href="{{ route('employees.index') }}" class="button">Employee List</a>
    </p>

    <form action="{{ route('employees.destroy', $employee->id) }}" method='POST' id="myform">
        @method('DELETE')
        @csrf
        <a href="#" onclick="document.getElementById('myform').submit()">Delete</a>
    </form>


</body>

</html>