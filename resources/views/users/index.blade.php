@extends('layouts/userLayout')

@section('content')

    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $users->first()->first_name }}</td>
            <td>{{ $users->first()->last_name }}</td>
            <td>{{ $users->first()->email }}</td>
        </tr>
    </table>
@endsection
