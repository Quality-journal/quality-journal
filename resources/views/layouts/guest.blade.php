<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Quality Journal</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script>
            localStorage.setItem('locale', document.documentElement.lang);
        </script>
    </head>
    <body>
        <div id="app" class="font-sans text-gray-900 antialiased">

            <navigation-component></navigation-component>

            {{ $slot }}

            <footer-component></footer-component>

        </div>
    </body>
</html>
