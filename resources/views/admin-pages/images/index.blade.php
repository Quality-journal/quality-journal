<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Slike za početnu stranicu' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Slike za početnu stranicu' }}</x-slot>

    <main class="w-full flex-grow p-6 min-h-screen">
        <h1 class="text-3xl text-black pb-6">Slike za početnu stranicu</h1>

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
            <a href="{{ route('photos.create') }}"
                class="w-full bg-white cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Nova slika
            </a>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-10 mx-auto">

                <div class="flex flex-wrap -m-4 text-center">


                    @foreach($images as $image)
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="bg-white px-4 py-6 rounded-lg">
                            <div class='inline-flex space-x-4 float-right'>
                                <a href="{{ route('photos.edit', $image->id) }}"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('photos.destroy', $image)}}" method="POST" id="deleteForm-{{ $image->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirmDelete(event, '{{ $image->id }}')"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="text-red-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg></button>
                                </form>
                            </div>
                            <img src="{{ asset($image->path) }}" alt="">
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </section>

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
                            Delete photo?
                        </h3>
                    </div>`);

                    modal.addFooterBtn('Cancel', 'mx-2 px-3 py-2 rounded-md bg-gray-600 hover:bg-gray-800 transition-all text-white dark:text-white-200', function() {
                        modal.destroy();
                    });
                    modal.addFooterBtn('Delete', 'mx-2 px-3 py-2 rounded-md bg-red-600 hover:bg-red-800 transition-all text-white dark:text-white-200', function() {
                        document.getElementById('deleteForm-' + id).submit();
                        modal.close();
                    });
                },
            });
            modal.open()
        }
    </script>

</x-app-layout>
