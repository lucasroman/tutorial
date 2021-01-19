<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>React JS</title>

    </head>
    <body>
        {{-- <div id="in" style="display: none;">{{ $greeting }} </div> --}}

        <div id="root"></div>

        {{-- React JS --}}
        <script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>

        {{-- Babel JS --}}
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

        <script id="reactScript" type="text/babel" src="js/exampleDeleteMe.js" greeting="{{$greeting}}">

        </script>
    </body>
</html>
