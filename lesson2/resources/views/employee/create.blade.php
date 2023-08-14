<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Create</title>
</head>

<body>
    <h1>Employee Create</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" />
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" />
        </p>
        <p>
            <label>Email Address</label>
            <input type="email" name="email" />
        </p>
        <p>
            <label>Age</label>
            <input type="number" name="age" />
        </p>
        <input type="submit" value="Save" />
    </form>

</body>

</html>