<x-guest-layout>

    <x-slot name="title">Journal of Quality and Systems Engineering | {{ $currentIssue->title }}</x-slot>
    <x-slot name="description">{{ $currentIssue->description }}</x-slot>
    <x-slot name="keywords">{{ $currentIssue->keywords }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

            <div class="flex flex-wrap py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 text-newyellow">{{ $currentIssue->title }}</h1>
                    <hr>
                    <div class="flex py-4 flex-col sm:flex-row">
                        <img class="sm:h-52" src="{{ asset('/images/'.$currentIssue->image) }}" alt="{{ $currentIssue->title }}">
                        <div class="px-0 sm:px-10 pt-4 sm:pt-0">
                            {!! $currentIssue->description !!}
                        </div>
                    </div>
                    <hr>
                    <div class="flex flex-wrap -m-4 text-center mt-2">
                        @foreach($articles as $article)
                        <div class="px-4 w-full">
                            <div class="flex flex-wrap text-left border-b py-4">
                                <h3 class="w-full title-font font-medium text-xl">
                                    <a class="text-center text-newyellow hover:text-gray-600 transition-all" href="/article/{{ $article->slug }}"> {{
                                        $article->title }} </a>
                                </h3>
                                <p class="w-full text-lg mt-3">{{ $article->authors_names }} - {{ $article->doi }}</p>
                                <a href="/article/{{ $article->slug }}" class="text-lg px-4 py-3 mt-3 mr-4 bg-gray-100 hover:bg-newyellow hover:text-gray-800 transition-all">View
                                    More <i class="fas fa-arrow-right ml-2"></i> </a>
                                <a href="{{ asset('/articles_pdf/'.$article->pdf) }}" target="_blank" class="text-lg px-4 py-3 mt-3 mr-4 bg-gray-100 hover:bg-newyellow hover:text-gray-800 transition-all">Download
                                    <i class="fas fa-download ml-2"></i> </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
