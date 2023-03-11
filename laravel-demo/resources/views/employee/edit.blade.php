<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employee</title>
</head>

<body>
    <h1>Edit Employee</h1>
    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @method('PUT')
        @csrf
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" required="required" value={{ $employee->first_name }} />
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" required="required" value={{ $employee->last_name }} />
        </p>
        <p>
            <label>Email Address</label>
            <input type="email" name="email" required="required" value={{ $employee->email }} />
        </p>
        <input type="submit" value="Update" />
    </form>

</body>

</html>
