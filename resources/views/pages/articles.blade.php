<x-guest-layout>

    <x-slot name="title">{{ $currentIssue->title }}</x-slot>
    <x-slot name="description">{{ $currentIssue->description }}</x-slot>
    <x-slot name="keywords">{{ $currentIssue->keywords }}</x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 text-dark">Journal of Quality Engineering</h1><hr>

                    <div class="flex py-4">
                        <img class="h-52" src="{{ asset('/images/'.$currentIssue->image) }}" alt="{{ $currentIssue->title }}">
                        <h2 class="px-10 py-2 font-semibold text-2xl">{{ $currentIssue->title }}</h2>
                    </div>

                    <hr>

                    <div class="flex flex-wrap -m-4 text-center mt-2">
                        @foreach($articles as $article)
                            <div class="px-4 w-full">
                                <div class="flex flex-wrap text-left border-b py-4">
                                    <h3 class="w-full title-font font-medium text-xl">
                                        <a class="text-center text-orange hover:text-yellow-700" href="/article/{{ $article->slug }}"> {{ $article->title }} </a>
                                    </h3>
                                    <p class="w-full text-lg mt-3">{{ $article->authors_names }}</p>
                                    <a href="/article/{{ $article->slug }}" class="text-lg px-4 py-3 mt-3 mr-4 bg-gray-200 hover:bg-orange hover:text-white">View More <i class="fas fa-arrow-right ml-2"></i> </a>
                                    <a href="{{ asset('/articles_pdf/'.$article->pdf) }}" target="_blank" class="text-lg px-4 py-3 mt-3 mr-4 bg-gray-200 hover:bg-orange hover:text-white">Download <i class="fas fa-download ml-2"></i> </a>
                                    <div>
                                        <p class="mt-3">Downloads: 100</p>
                                        <p>Views: 250</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
             </div>
        </div>
    </div>

</x-guest-layout>
