<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
</head>

<body>
    <div class="container">
        <h1>Employee List</h1>
        <table class="table">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
            </tr>

            @foreach ($employees as $employee)
            <tr>
                <td> {{ $employee->first_name }}</td>
                <td> {{ $employee->last_name }}</td>
                <td> {{ $employee->age }}</td>
                <td>{{ $employee->email }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>