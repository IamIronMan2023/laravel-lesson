@include('partials.header')

<h1>Edit Employee</h1>

{{-- <form action="/employee/{{ $employee->id }}" method="POST"> --}}
<form action="{{ route('employee.update', $employee) }}" method="POST">
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

@include('partials.footer')
