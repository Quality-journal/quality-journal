<x-guest-layout>

    <x-slot name="title">Science of Maintenance | {{ $article->title }}</x-slot>
    <x-slot name="description">{{ $article->description }}</x-slot>
    <x-slot name="keywords">{{ $article->keywords }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

            <div class="flex flex-col-reverse sm:flex-row py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-1 pb-4 text-yellow-500">{{ $article->title }}</h1>
                    <hr>

                    <h2 class="text-xl font-semibold my-2 mb-2">Scientific paper information</h2>
                    <hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->content !!}
                    </div>

                    <h2 class="text-xl font-semibold my-2 mb-2">Authors</h2>
                    <hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->authors !!}
                    </div>

                    <h2 class="text-lg font-semibold my-2 mb-2">Keywords</h2>
                    <hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->keywords !!}
                    </div>

                    <h2 class="text-lg font-semibold my-2 mb-2">Abstract</h2>
                    <hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->abstract !!}
                    </div>

                    <div class="mt-4 flex flex-col sm:flex-row justify-between items-center">
                        <div class="w-full sm:w-2/3">
                            <div @click='toggle = !toggle' class="bg-gray-100 px-4 py-4 cursor-pointer w-full sm:w-1/2 mb-4 sm:mb-0">How to cite this
                                paper <i class="fas fa-chevron-down ml-2"></i></div>

                            <div v-show='toggle' class="w-full sm:w-3/4 bg-gray-100 pl-2 py-4 relative z-10 mb-4 sm:mb-0">
                                <p>{{ $article->howto }}</p>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/3 flex justify-center float-right mt-3">
                            <div
                                class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-600 text-white mr-10 mb-10 flex-shrink-0 cursor-pointer">
                                <div class="font-bold text-center"><a href="{{ asset('/articles_pdf/'.$article->pdf) }}" target="_blank"><i
                                            class="fas fa-download"></i><br>PDF</a></div>
                            </div>
                        </div>
                    </div>


                    @if($article->recognitions != null || $article->recognitions != '')
                    <h2 class="text-xl font-semibold my-2 mb-2">Acknowledgement</h2>
                    <hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->recognitions !!}
                    </div>
                    @endif

                    <h2 class="text-xl font-semibold my-2 mb-2">References</h2>
                    <hr>
                    <div class="ck-content mt-4 mb-5">
                        {!! $article->reference !!}
                    </div>

                    <hr>



                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
