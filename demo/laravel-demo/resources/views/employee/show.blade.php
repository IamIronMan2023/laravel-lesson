<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Profile</title>
</head>

<body>
    <h1>Employee Profile</h1>
    <h3>{{ $employee->id }}</h3>
    <h3>{{ $employee->first_name }} {{ $employee->last_name }}</h3>
    <h3>{{ $employee->email }}</h3>

    <p>
        <a href="{{ route('employee.index') }}" class="button">Employee List</a>
    </p>
    <p>
        <a href="{{ route('employee.edit', $employee->id) }}" class="button">Edit</a>
    </p>

</body>

</html>
