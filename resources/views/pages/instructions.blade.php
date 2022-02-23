<x-guest-layout>

    <x-slot name="title">Journal of Quality Engineering | {{ $page->title }}</x-slot>
    <x-slot name="description">{{ $page->description }}</x-slot>
    <x-slot name="keywords">{{ $page->keywords }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">
            <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-yellow-500">{{ $page->title }}</h1>
            <hr>

            <div class="flex flex-col sm:flex-row py-4 justify-between space-y-4">
                <div class="ck-content w-full sm:w-3/4">
                    {!! $page->content !!}
                </div>
                <div class="w-full md:w-1/4 flex flex-row md:flex-col md:space-y-5 justify-around sm:justify-start items-center">
                    <div class="w-20 md:w-24 h-20 md:h-24 inline-flex items-center justify-center rounded-full text-xs md:text-sm bg-gray-600 text-white cursor-pointer hover:bg-opacity-90 transition-all">
                        <div class="font-bold text-center"><a href="{{ asset('/files/'.$documents[0]->path) }}" target="_blank"><i class="fas fa-download"></i><br>Authors guidlines</a></div>
                    </div>
                    <div class="w-20 md:w-24 h-20 md:h-24 inline-flex items-center justify-center rounded-full text-xs md:text-sm bg-gray-600 text-white cursor-pointer hover:bg-opacity-90 transition-all">
                        <div class="font-bold text-center"><a href="{{ asset('/files/'.$documents[1]->path) }}" target="_blank"><i class="fas fa-download"></i><br>Article template</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
