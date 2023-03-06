@include('partials.header')

<h1>Create Employee</h1>

<form action="{{ route('employee.store') }}" method="POST">
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

@include('partials.footer')
