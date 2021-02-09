@extends('layouts/user')

@section('content')
<form action="#">
    <label>First name: </label><br>
        <input type="text" name="firstName"><br>

    <label>Last name: </label><br>
        <input type="text" name="lastName"><br>

    <input type="submit" name="create">
</form>
@env('local')
    <div>
        You are on <span class="blink_me">local</span> environment.
    </div>
@endenv
@endsection
