@include('partials.header')

<h1>Create Employee</h1>

<form action="{{ route('employee.store') }}" method="POST">
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
    <input type="submit" value="Save" />
</form>

@include('partials.footer')
