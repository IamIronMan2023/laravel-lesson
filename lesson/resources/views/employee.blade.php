<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
</head>
<body>
    {{-- <ul>
        @foreach ($employees as $employee)
            <li>{{$employee->first_name}} {{$employee->last_name}}</li>
        @endforeach
    </ul> --}}

    {{-- <h1>Employee Profile</h1>
    <h3>{{$employees[0]->id}}</h3>    
    <h3>{{$employees[0]->first_name}} {{$employees[0]->last_name}}</h3>
    <h3>{{$employees[0]->email}}</h3>         --}}

    <h1>Employee Profile</h1>
    <h3>{{$id}}</h3>    
    <h3>{{$first_name}} {{$last_name}}</h3>
    <h3>{{$email}}</h3>

</body>
</html>