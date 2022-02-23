<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Selekcije izdanja' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Selekcije izdanja' }}</x-slot>

    <main class="w-full flex-grow p-6 min-h-screen">
        <h1 class="text-3xl text-black pb-6">Selekcije izdanja</h1>

        @if(Session::has('message'))
        <div class="message flex justify-center items-center my-4 font-medium py-3 px-2 bg-white rounded-md text-green-700 border border-green-300 ">
            <div class="ml-2">
                <i class="fas fa-check"></i>
            </div>
            <div class="font-normal max-w-full flex-initial pl-2">
                {{ session('message') }}
            </div>
            <div class="flex flex-auto flex-row-reverse mr-4">
                <span class="close-message cursor-pointer pt-1"><i class="fas fa-times"></i></span>
            </div>
        </div>
        @endif

        <div class="w-full sm:w-1/6">
            <a href="{{ route('selections.create') }}"
                class="w-full bg-white cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Nova selekcija izdanja
            </a>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-10 mx-auto">

                <div class="flex flex-wrap -m-4 text-center">

                    @foreach($selections as $selection)
                    <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
                        <div class="bg-white px-4 py-6 rounded-lg">
                            <div class="float-right"><a href="{{ route('selections.edit', ['selection'=>$selection->id]) }}"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="w-24 h-24 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                                <h4 class="text-2xl font-bold">{{ $selection->title }}</h4>
                            </div><br>
                            @foreach($selection->issues as $issue)
                            <div class="flex justify-between border-b-2 py-2">
                                <a class="py-2 px-2 font-bold" href="{{route('issues.edit', ['issue'=>$issue->id])}}">{{ $issue->title }}</a>
                                <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                                    href="{{ route('articles.index', ['issue_id' => $issue->id]) }}">Članci</a>
                            </div>
                            @endforeach
                            <div class="flex justify-between py-2">
                                <a href="{{ route('issues.create',['selection_id'=>$selection->id]) }}"
                                    class="w-full bg-gray-100 cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-plus mr-3"></i> Novo izdanje
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

    </main>

</x-app-layout>
