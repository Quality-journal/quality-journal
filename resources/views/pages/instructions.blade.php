<x-guest-layout>

    <x-slot name="title">{{ $page->title }}</x-slot>
    <x-slot name="description">{{ $page->description }}</x-slot>
    <x-slot name="keywords">{{ $page->keywords }}</x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">
            <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-orange">{{ $page->title }}</h1><hr>
            <div class="flex flex-wrap  py-4 md:flex-row">
                <div class="w-3/4 ck-content m-5">
                    {!! $page->content !!}
                </div>
                <a href="#" class="m-5 btn btn-blue">
                    <div class="bg-blue-500 p-5 text-white text-lg">
                     {{'Start submission '}} <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-guest-layout>
