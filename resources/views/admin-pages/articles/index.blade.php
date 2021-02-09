<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Članci') }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Članci' }}</x-slot>

    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-2">Članci za "{{ $issue->title }}"</h1>

        <div class="w-1/2 sm:w-1/6">
            <a href="{{ route('articles.create', [ 'issue_id' => $issue->id ]) }}" class="w-full bg-white cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Novi članak
            </a>
        </div>

        @if(Session::has('message'))
            <div class="message flex justify-center items-center my-4 font-medium py-3 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
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

        <div class="w-full mt-6">
            <!-- <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> All articles
            </p> -->
            <div class="bg-white overflow-auto">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Članak</th>
                            <th class="w-1/3 text-right py-3 px-4 uppercase font-semibold text-sm">Opcije</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($articles as $article)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $article->title }}</td>
                            <td class="w-1/3 text-right py-3 px-4">
                                <a href="{{ route('articles.edit', $article->id)}}"><i class="fas fa-edit text-blue-500"></i></a>
                                <a href="{{ route('articles.destroy', $article->id)}}"><i class="fas fa-trash text-red-500"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</x-app-layout>
