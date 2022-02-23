<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    {!! RecaptchaV3::initJs() !!}

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <style>
        .grecaptcha-badge {
            visibility: hidden !important;
        }
    </style>
</head>

<body>
    <div id="app" class="font-sans text-gray-900 antialiased md:w-3/4 mx-auto shadow-2xl">
        <navigation-component></navigation-component>
        @if(Session::has('message'))
        <div class="message flex justify-center items-center my-4 font-medium py-3 px-2 bg-white rounded-md text-green-700 border border-green-300 ">
            <div class="ml-2">
                <i class="fas fa-check"></i>
            </div>
            <div class="font-normal max-w-full flex-initial pl-2">
                {{ session('message') }}
            </div>
            <div class="flex flex-auto flex-row-reverse mr-4">
                <span class="close-message cursor-pointer pt-1"><i class="fas fa-times"></i></span>
            </div>
        </div>
        @endif

        {{ $slot }}

        <footer-component></footer-component>
    </div>

    <script>
        document.querySelectorAll('.ck-content').forEach(function(element) {
            element.querySelectorAll('p').forEach(function(p){
                if(p.innerHTML === '&nbsp;' || p.innerHTML === ''){
                    p.style.fontSize = '0.5rem';
                }
            })
        })
    </script>
</body>

</html>
