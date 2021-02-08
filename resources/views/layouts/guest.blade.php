<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Quality Journal</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        <style>
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
        <div id="app" class="font-sans text-gray-900 antialiased min-h-screen">
       

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
