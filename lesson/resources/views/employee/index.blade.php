@include('partials.header')
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<h1>Employee List</h1>
<table style="width:50%">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <a href="{{ route('employee.create') }}">New</a>

    @foreach ($employees as $employee)
        <tr>
            <td> {{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->email }}</td>
            <td>
                <a href="{{ route('employee.show', ['id' => $employee->id]) }}">View</a>
            </td>
            {{-- <td><a href={{ '/employee/' . $employee->id }}>View</a></td> --}}
            {{-- <td><a href="{{ url('employee/' . $employee->id) }}">View</a></td> --}}

        </tr>
    @endforeach
</table>

@include('partials.footer')
