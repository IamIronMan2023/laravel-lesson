<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Employee</title>
</head>

<body>
    <h1>Create Employee</h1>
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" required="required" />
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" required="required" />
        </p>
        <p>
            <label>Email Address</label>
            <input type="email" name="email" required="required" />
        </p>
        <input type="submit" value="Save" />
    </form>

</body>

</html>
