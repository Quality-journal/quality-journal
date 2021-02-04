<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Selekcije') }}
        </h2>
    </x-slot>

    <main class="w-full flex-grow p-6 min-h-screen">
        <h1 class="text-3xl text-black pb-6">Selekcije izdanja</h1>

        <div class="w-1/2 sm:w-1/6">
            <a href="{{ route('selections.create') }}" class="w-full bg-white cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Nova selekcija izdanja
            </a>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-10 mx-auto">

                <div class="flex flex-wrap -m-4 text-center">

                    <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
                        <div class="bg-white px-4 py-6 rounded-lg">
                            @foreach($selections as $selection)
                                <div class="float-right"><a href="{{ route('selections.edit', ['selection'=>$selection->id]) }}"><i class="fas fa-edit"></i></a></div>
                                <div class="w-24 h-24 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0"><h4 class="text-2xl font-bold">{{ $selection->title }}</h4></div><br>
                                @foreach($selection->issues as $issue)
                                <div class="flex justify-between border-b-2 py-2">
                                    <a class="py-2 px-2" href="{{route('issues.edit', ['issue'=>$issue->id])}}">{{ $issue->title }}</a>
                                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="{{ route('articles.index', ['issue_id' => $issue->id]) }}">Articles</a>
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

</x-app-layout>
