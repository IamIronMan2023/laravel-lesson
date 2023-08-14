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
            <input type="text" required="required" name="first_name" />
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" required="required" name="last_name" />
        </p>
        <p>
            <label>Email Address</label>
            <input type="email" required="required" name="email" />
        </p>
        <p>
            <label>Age</label>
            <input type="number" required="required" name="age" />
        </p>
        <p>
            <label>Gender</label>
            <select name="gender" required focus>
                <option selected disabled value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </p>

        <input type="submit" value="Save" />
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