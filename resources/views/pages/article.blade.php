<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 text-dark">{{ $article->title }}</h1><hr>

                    <h3>Authors:</h3><hr>

                    <h3>Paper's information</h3><hr>

                    <h3>Abstract</h3><hr>

                    <h3>Reviews</h3><hr>

                    <h3>How to cite this paper, downloads, views, pdf block</h3><hr>

                </div>
             </div>
        </div>
    </div>

</x-guest-layout>
