@extends('layouts/userLayout')

@section('content')

    <div id="userForm"></div>

@env('local')
    <div>
        You are on
        <b><span class="blink_me">{{env('APP_ENV')}}</span></b>
        environment.
    </div>
@endenv

<script defer type="text/babel" src="../js/userForm.js"></script>

@endsection
