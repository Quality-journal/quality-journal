<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

                    <hr>

                    <div class="mt-8">
                        <span @click='toggle = !toggle' class="bg-gray-200 px-4 py-4 cursor-pointer">How to cite this paper <i class="fas fa-chevron-down ml-2"></i></span>
                        <div v-show='toggle' class="bg-gray-200 px-4 py-4">
                            <p>Info about how to cite this paper</p>
                        </div>
                    </div>

                </div>
             </div>
        </div>
    </div>

</x-guest-layout>
