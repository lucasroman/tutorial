<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>React JS</title>

        {{-- React JS --}}
        <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>

        {{-- Babel JS --}}
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    </head>
    <body>
        

        <div id="root">

        </div>

        <script type="text/babel">
            const name = 'Luke Roman';
            const element = <h1>Hello, world {name}!</h1>;

            ReactDOM.render(
                element,
                document.getElementById('root')
            );
        </script>
    </body>
</html>
