<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Font Awesome Pro 5.15.3 --}}
        <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@0ac23ca/css/all.css" rel="stylesheet" type="text/css" />

        {{-- Bootstrap 5.0.1 style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        {{-- Own style --}}
        <link rel="stylesheet" href="{{ asset('css/tutorial.css') }}">

        <title>Tutorial React JS @yield('title', '(Untitled)')</title>
    </head>
    <body>
        <a class="navbar-brand" href="{{ route('welcome') }}">
        <nav class="navbar navbar-dark bg-dark mb-7 fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <i class="fab fa-react fa-2x fa-inverse"
                        style="color:#61dafb;vertical-align: text-top;"></i>
                    </div>
                    <div class="col">
                        <h2 style="color:#61dafb;">
                            React JS examples
                        </h2>
                    </div>
                </div>

            </div>
        </nav>
        </a>
        <div class="container mt-5 py-5">
            @yield('content')
        </div>

        <footer class="footer py-3 mt-5 bg-dark fixed-bottom">
            <div class="container">
                <i>Developed by <b>Lucas Roman</b></i>
            </div>
        </footer>

        <script src="/js/app.js" defer></script>
    </body>
</html>
