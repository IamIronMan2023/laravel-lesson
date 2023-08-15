@if($errors -> any())
<div style="color: red;">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif