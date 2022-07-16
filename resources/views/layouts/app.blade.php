<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VENTAS CAMIRI</title>

         <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>

    <body>
        @include('layouts.header')
        <main class="primary-background">
            <div class="container"></div>
            <div class="row">
                <div class="col s12 m12 l12 l12 xl10 offset-xl1">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
