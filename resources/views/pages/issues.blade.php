<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 p-2 text-dark">{{ $currentSelection->title }}</h1><hr>
                    <div class="flex flex-wrap -m-4 text-center mt-2">
                        @foreach($issues as $issue)
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                <div class="bg-gray-200 px-4 py-6">
                                    <h3 class="title-font font-medium text-3xl text-gray-900">
                                        <a class="text-center hover:text-yellow-500" href="/issue/{{ $issue->slug }}"> {{ $issue->title }} </a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
             </div>
        </div>
    </div>

</x-guest-layout>
