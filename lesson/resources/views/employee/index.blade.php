@include('partials.header', ['title' => 'Employees'])
<ul>
    @foreach ($employees as $employee)
        <li> {{ $employee->first_name }} {{ $employee->last_name }}</li>
    @endforeach
</ul>
@include('partials.header')
