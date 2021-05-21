@extends('layouts/userLayout')

@section('content')
    <div id="userList"></div>

    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection
