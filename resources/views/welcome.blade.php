<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')     
    </head>
    <body class="antialiased">
        <h1> I exist </h1>
       
    {{-- <script src='/js/app.js'> </script> <script src="{{ asset('js/app.js') }}"></script> --}}
        
        @vite('resources/js/app.js')
    </body>
</html>
