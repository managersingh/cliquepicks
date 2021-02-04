<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CLIQUEPICKS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <!--Custom Styles -->
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        
        <!-- jQuery library -->
        <script src="/js/jquery.min.js"></script>
        <!-- Bootstrap library -->
        <script src="/js/bootstrap.min.js"></script>

    </head>
<body>
    <div id="app">

            @yield('content')
    </div>
    
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
