<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">
                <div class="w-3/4 sm:w-1/4 px-4 bg-gray-200 py-2 mt-3">
                    <p class="text-2xl mb-5 text-dark border-b border-solid border-black text-center">Selections</p>
                    @foreach($selections as $selection)
                        <a href="/selection/{{ $selection->slug }}" class="ml-5 p-2 hover:text-yellow-500 font-bold">{{ $selection->title }}</a>
                    @endforeach
                </div>
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
