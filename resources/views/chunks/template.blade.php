<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        @yield('content')
        <script src="{{ mix('/js/script.js')}}"></script>
        @stack('script')
    </body>
</html>