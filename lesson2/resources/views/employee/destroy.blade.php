<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee</title>
</head>

<body>
    <h1>Delete Employee {{ $employee->first_name }}</h1>
    <form action="{{ route('employees.destroy', $employee->id) }}" method='POST'>
        @method('DELETE')
        @csrf

        <button type="submit">Delete</button>
        <a href="{{ route('employees.index') }}">
            <button>Cancel</button>
        </a>
    </form>

</body>

</html>