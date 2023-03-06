@include('partials.header')

<h1>Employee Detail</h1>
{{-- <h3>Id : {{ $id }}</h3> --}}
<h3>First Name : {{ $first_name }}</h3>
<h3>Last Name: {{ $last_name }}</h3>
<h3>Email: {{ $email }}</h3>

<p>
    <a href="{{ route('employee.edit', ['id' => $id]) }}">Edit</a>
</p>
<p>
    <a href="{{ route('employee.index') }}">Employee List</a>
</p>


@include('partials.footer')
