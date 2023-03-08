@include('partials.header')

<h1>Employee Detail</h1>
{{-- <h3>Id : {{ $id }}</h3> --}}
<h3>First Name : {{ $employee->first_name }}</h3>
<h3>Last Name: {{ $employee->last_name }}</h3>
<h3>Age: {{ $employee->age }}</h3>
<h3>Email: {{ $employee->email }}</h3>

@if (Auth::user())
    <p>
        <a href="{{ route('employee.edit', ['id' => $employee->id]) }}" class="button">Edit</a>
    </p>

    <p>
        <a href="{{ route('employee.index') }}" class="button">Employee List</a>
    </p>

    <form action="{{ route('employee.delete', $employee) }}" method='POST' id="myform">
        @method('DELETE')
        @csrf
        <a href="#" onclick="document.getElementById('myform').submit()">Delete</a>
    </form>
@endif

@include('partials.footer')
