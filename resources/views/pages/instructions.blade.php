<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">
            <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-yellow-500">{{ $page->title }}</h1><hr>
             <div class="flex flex-wrap py-4 ">
                <div class="w-full ck-content">
                    {!! $page->content !!}
                </div>
             </div>
        </div>
    </div>

</x-guest-layout>
