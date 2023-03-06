@include('partials.header', ['title' => 'Employees'])
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table style="width:50%">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    @foreach ($employees as $employee)
        <tr>
            <td> {{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->email }}</td>
            <td><a href="{{ route('employee.show', ['id' => $employee->id]) }}">View</a>
                <a href="{{ route('employee.edit', ['id' => $employee->id]) }}">Edit</a>
            </td>
            {{-- <td><a href="{{ url('employee/' . $employee->id) }}">View</a></td> --}}

        </tr>
    @endforeach
</table>

@include('partials.footer')
