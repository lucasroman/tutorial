<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        {{-- Font Awesome Pro 5.15.3 --}}
        <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@0ac23ca/css/all.css" rel="stylesheet" type="text/css" />

        {{-- Own style --}}
        <link rel="stylesheet" href="{{ asset('css/tutorial.css') }}">

        <title>Tutorial React JS @yield('title', '(Untitled)')</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark mb-7 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <i class="fab fa-react fa-stack-1x fa-inverse fa-fw"
                        id="react-icon"></i>
                    <h3 id="navbar-title">
                        React JS examples
                    </h3>
                </a>
            </div>
        </nav>

        <div class="container mt-5 py-5">
            @yield('content')
        </div>

        <footer class="footer py-3 mt-5 bg-dark fixed-bottom">
            <div class="container">
                <i>Developed by <b>Lucas Roman</b></i>
            </div>
        </footer>

        {{-- Bootstrap script (bundle) --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
