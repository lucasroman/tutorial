@extends('layouts/userLayout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <h3>Something went wrong :(</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
