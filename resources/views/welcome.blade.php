<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>SPA Forum</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
            
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
