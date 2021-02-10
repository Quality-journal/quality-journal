<x-guest-layout>

    <x-slot name="title">{{ $article->title }}</x-slot>
    <x-slot name="description">{{ $article->description }}</x-slot>
    <x-slot name="keywords">{{ $article->keywords }}</x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-1 pb-4 text-orange">{{ $article->title }}</h1><hr>

                    <h2 class="text-xl font-semibold my-2 mb-2">Paper's information</h2><hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->content !!}
                    </div>

                    <h2 class="text-xl font-semibold my-2 mb-2">Authors</h2><hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->authors !!}
                    </div>

                    <h2 class="text-lg font-semibold my-2 mb-2">Abstract</h2><hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->abstract !!}
                    </div>

                    <h2 class="text-xl font-semibold my-2 mb-2">References</h2><hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->reference !!}
                    </div>

                    @if($article->recognitions != null || $article->recognitions != '')
                    <h2 class="text-xl font-semibold my-2 mb-2">Recognitions</h2><hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->recognitions !!}
                    </div>
                    @endif

                    <hr>

                    <div class="mt-8">
                        <div @click='toggle = !toggle' class="bg-gray-200 px-4 py-4 cursor-pointer w-full sm:w-1/3 mb-4 sm:mb-0">How to cite this paper <i class="fas fa-chevron-down ml-2"></i></div>

                        <div v-show='toggle' class="bg-gray-200 pl-2 py-4 relative z-10 mb-4 sm:mb-0">
                            <p>Info about how to cite this paper</p>
                        </div>

                        <div class="w-full sm:w-2/3 float-right mt-3">
                            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-900 text-white mr-10 mb-10 flex-shrink-0 cursor-pointer">
                                <div class="font-bold text-center"><a href="{{ asset('/articles_pdf/'.$article->pdf) }}" target="_blank"><i class="fas fa-download"></i><br>PDF</a></div>
                            </div>

                            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-orange text-white mr-10 mb-10 flex-shrink-0">
                                <div class="text-center">
                                    <span class="font-bold">150</span><br>
                                    <span class="text-sm">Views</span>
                                </div>
                            </div>

                            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-orange text-white mb-10 flex-shrink-0">
                                <div class="text-center">
                                    <span class="font-bold">105</span>
                                    <br><span class="text-sm">Downloads</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
             </div>
        </div>
    </div>

</x-guest-layout>
