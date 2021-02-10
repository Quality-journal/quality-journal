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
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}" defer></script>

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        <style>
            body{background-color: #ededed;
                
                background-color: #eceaf0;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='152' height='152' viewBox='0 0 152 152'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='temple' fill='%23cdbfe2' fill-opacity='0.29'%3E%3Cpath d='M152 150v2H0v-2h28v-8H8v-20H0v-2h8V80h42v20h20v42H30v8h90v-8H80v-42h20V80h42v40h8V30h-8v40h-42V50H80V8h40V0h2v8h20v20h8V0h2v150zm-2 0v-28h-8v20h-20v8h28zM82 30v18h18V30H82zm20 18h20v20h18V30h-20V10H82v18h20v20zm0 2v18h18V50h-18zm20-22h18V10h-18v18zm-54 92v-18H50v18h18zm-20-18H28V82H10v38h20v20h38v-18H48v-20zm0-2V82H30v18h18zm-20 22H10v18h18v-18zm54 0v18h38v-20h20V82h-18v20h-20v20H82zm18-20H82v18h18v-18zm2-2h18V82h-18v18zm20 40v-18h18v18h-18zM30 0h-2v8H8v20H0v2h8v40h42V50h20V8H30V0zm20 48h18V30H50v18zm18-20H48v20H28v20H10V30h20V10h38v18zM30 50h18v18H30V50zm-2-40H10v18h18V10z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");

            }
            .ck-content .text-tiny {
                font-size: 0.75rem;
                line-height: 1rem;
            }

            .ck-content .text-small {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }

            .ck-content .text-big {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }

            .ck-content .text-huge {
                font-size: 1.5rem;
                line-height: 2rem;
            }
        </style>
    </head>
    <body>
        <div id="app" class="font-sans text-gray-900 antialiased min-h-screen md:w-3/4 mx-auto shadow-2xl">


            <navigation-component></navigation-component>
            @if(Session::has('message'))
            <div class="message flex justify-center items-center my-4 font-medium py-3 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
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
    </body>
</html>
