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
            <a href="{{ route('articles.create', [ 'issue_id' => $issue->id ]) }}"
                class="w-full bg-white cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Novi članak
            </a>
        </div>

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

        <div class="w-full mt-6">
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
                            <td class="flex space-x-4 justify-end text-right py-3 px-4">
                                <a href="{{ route('articles.edit', $article->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg></a>
                                <form action="{{ route('articles.destroy', $article->id)}}" method="POST" id="deleteForm-{{ $article->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirmDelete(event, '{{ $article->id }}')"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="text-red-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="{{ asset('css/tingle.css') }}">
    <script src="{{ asset('js/tingle.min.js') }}"></script>

    <script>
        function confirmDelete(event, articleId){
            event.preventDefault()
            let id = articleId;

            var modal = new tingle.modal({
                footer: true,
                stickyFooter: false,
                closeMethods: ['overlay', 'button', 'escape'],
                closeLabel: "Close",
                cssClass: ['custom-class-1', 'custom-class-2'],
                onOpen: function() {
                    modal.setContent(`
                        <div class="flex flex-col items-center space-y-4">
                        <svg class="text-red-500 h-16 w-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        <h3 class="text-lg">
                            Ukloni članak?
                        </h3>
                    </div>`);

                    modal.addFooterBtn('Odustani', 'mx-2 px-3 py-2 rounded-md bg-gray-600 hover:bg-gray-800 transition-all text-white dark:text-white-200', function() {
                        modal.destroy();
                    });
                    modal.addFooterBtn('Ukloni', 'mx-2 px-3 py-2 rounded-md bg-red-600 hover:bg-red-800 transition-all text-white dark:text-white-200', function() {
                        document.getElementById('deleteForm-' + id).submit();
                        modal.close();
                    });
                },
            });
            modal.open()
        }
    </script>

</x-app-layout>
