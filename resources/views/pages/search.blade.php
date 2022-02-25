<x-guest-layout>

    <x-slot name="title">{{ 'Search articles, issues, volumes' }}</x-slot>
    <x-slot name="description">{{ 'Search the site, find articles, issues, volumes, Journal of Quality and System Engineering, IIPP' }}</x-slot>
    <x-slot name="keywords">{{ 'search, find, articles, issues, volumes, journal, quality, system, engineering, iipp' }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 pb-6 bg-white w-full flex flex-col overflow-x-hidden">
        <div class="text-black bg-white flex items-center justify-center mt-20">
            <form id="form" action="{{ route('searching') }}" autocomplete="off" class="px-4 w-full sm:w-1/3">
                <div class="border rounded overflow-hidden flex">
                    <input id="input" type="text" name="search" class="px-4 py-2 border rounded w-full" placeholder="Search...">
                    <button id="button" class="flex items-center justify-center px-4 border-l">
                        <svg class="h-4 w-4 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="text-gray-600 bg-white min-h-screen flex-col items-center justify-center mt-5">
            @if(isset($results))
            @forelse($results as $res)
            <div class="w-full sm:w-3/4 px-8 mt-3 border-2 mx-auto text-center border-solid border-gray-300 hover:border-newyellow hover:text-gray-800">
                <a href="{{$res->url()}}">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 text-dark">{{ $res->title }}</h1>
                </a>
                <hr>
                <h3 class="my-1">Type : {{ explode('\\', get_class($res))[2] }}</h3>
                <hr>
                <h3 class="my-1">Title : {{ $res->title }}</h3>
            </div>
            @empty
            <div class="text-center text-3xl mt-10">No match!</div>
            @endforelse
            @endif
        </div>
    </div>

</x-guest-layout>
