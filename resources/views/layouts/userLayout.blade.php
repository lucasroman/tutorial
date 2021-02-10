<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tutorial React JS</title>
        <link rel="stylesheet" href="{{ asset('css/tutorial.css') }}">
    </head>
    <body>
        <div>
            @yield('content')
        </div>

        <footer><i>Developed by <b>Lucas Roman</b></i></footer>

        {{-- React JS --}}
        <script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>

        {{-- Babel JS --}}
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    </body>
</html>
