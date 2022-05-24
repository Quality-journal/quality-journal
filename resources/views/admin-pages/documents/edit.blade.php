<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Izmena dokumenta' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Izmena dokumenta' }}</x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between mb-2">
            <p class="text-sm sm:text-xl pb-4">
                <i class="fas fa-edit mr-2"></i> Izmeni dokument "{{ $document->title }}"
            </p>
            <span class="pb-4">
                <a href="{{ route('documents.index') }}" class="px-4 py-1 text-xs sm:text-base text-white font-light tracking-wider bg-gray-900 rounded"><i class="hidden sm:inline-block fas fa-arrow-left"></i> Nazad</a>
            </span>
        </div>

        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method='POST' action="{{route('documents.update', $document)}}" enctype='multipart/form-data'>
                @csrf
                @method('PUT')

                <div class="flex flex-col mt-5">
                    <div>
                        <label class="block text-gray-600 mb-1" for="document">Document</label>
                        <input class="w-full sm:w-1/4 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="document" name="document" type="file" aria-label="document" accept="document">
                        <input type="hidden" name="type" value="{{ $document->path }}">
                    </div>
                    <div class="w-full sm:w-1/4 mt-4">
                        <label class="text-sm">Current file:</label><br>
                        <span class="font-italic text-xs md:text-sm text-blue-500 hover:text-blue-600"><a href="/files/{{ $document->path }}" target="_blank">{{ $document->title }}</a></span>
                    </div>
                </div>


                <div class="mt-5">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Upload</button>
                </div>
            </form>
        </div>

    </main>

</x-app-layout>
