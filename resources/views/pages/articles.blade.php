<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 text-dark">Journal of Quality Engineering</h1><hr>

                    <img src="{{ asset('/images/'.$currentIssue->image) }}" alt="{{ $currentIssue->title }}">
                    <h2>{{ $currentIssue->title }}</h2> <hr>

                    <div class="flex flex-wrap -m-4 text-center mt-2">
                        @foreach($articles as $article)
                            <div class="p-4 w-full">
                                <div class="bg-gray-200 px-4 py-6">
                                    <h3 class="title-font font-medium text-xl text-left text-gray-900">
                                        <a class="text-center hover:text-yellow-500" href="/article/{{ $article->slug }}"> {{ $article->title }} </a>
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
