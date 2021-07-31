@extends('layouts/userLayout')

@section('content')

    <div id="userList" data-users="{{ $users }}"></div>

    {{-- Show "Empty table" button only if there are users --}}
    @if($users->count() !== 0)
        <form action={{ route('users.destroyall') }} method="post">
            @csrf
            @method('delete')

            <div class="text-center">
                <button class="btn btn-danger" type="submit">
                    Empty Table
                </button>
            </div>
        </form>
    @endif

@endsection
