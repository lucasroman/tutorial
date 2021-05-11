@extends('layouts/userLayout')

@section('content')

    @php
        print_r($users->first());
    @endphp

@endsection
