<x-guest-layout>

    <x-slot name="title">Journal of Quality Engineering | {{ $page->title }}</x-slot>
    <x-slot name="description">{{ $page->description }}</x-slot>
    <x-slot name="keywords">{{ $page->keywords }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white min-h-screen">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">
            <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-yellow-500">{{ $page->title }}</h1>
            <hr>

            <div class="flex flex-col sm:flex-row py-4 justify-between space-y-4">
                <div class="ck-content w-full sm:w-3/4">
                    {!! $page->content !!}
                </div>
                <a href="mailto:nstanojevic@m-sci.rs" class="m-5 btn btn-blue">
                    <div class="bg-gray-600 p-5 text-white text-lg">
                        Start submission <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
        </div>
    </div>

</x-guest-layout>
