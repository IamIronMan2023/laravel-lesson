<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
</head>

<body>

    @if (Auth::user())
        <a href="{{ route('employee.create') }}"> Add New Employee</a>        
    @endif

    <h1>Employee List</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td><a href="{{ route('employee.show', ['id' => $employee->id]) }}">View</a></td>
            </tr>
        @endforeach
    </table>

    {{ $employees->links() }}    
</body>

</html>
