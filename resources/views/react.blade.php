<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Testing React JS</title>

    </head>
    <body>
        React component
        <div id="root" style="outline:solid;
                        background-color:black;
                        color:#5ed3f3;
                        width:50%;
                        padding:1em;
                        margin:1em;">
        </div>

        {{-- React JS --}}
        <script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>

        {{-- Babel JS --}}
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

        <script id="reactScript" type="text/babel" src="js/exampleDeleteMe.js" greeting="{{$greeting}}">

        </script>
    </body>
</html>
