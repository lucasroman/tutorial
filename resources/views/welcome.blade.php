@extends('layouts/userLayout')

@section('title', '- Welcome')

@section('content')

    <div class="px-4">
        <h2 class="pb-2 border-bottom">Active features</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <a class="anchor-without-style" href="{{ route('users.create')}}">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0
                        me-3">
                        @include('icons.welcome', ['icon' => 'user', ])
                    </div>
                    <div>
                        <h2>Users management</h2>
                        <p>Use a React form to create a new user.</p>
                    </div>
                </div>
            </a>
            <a class="anchor-without-style" href={{ route('todoList') }}>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        @include('icons.welcome', ['icon' => 'task'])
                    </div>
                    <div>
                        <h2>Make a task list</h2>
                        <p>Dynamic task list example in React.</p>
                    </div>
                </div>
            </a>

            <a class="anchor-without-style" href="#">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        @include('icons.welcome', ['icon' => 'react', ])
                    </div>
                    <div>
                        <h2>Feature three</h2>
                        <p>asdfasdf</p>
                    </div>
                </div>
            </a>
        </div>
        <a  href="{{ route('users.index') }}">Users list (temporal)</a>
    </div>

@endsection
