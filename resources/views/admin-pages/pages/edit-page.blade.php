<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Izmena stranice' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Izmena stranice' }}</x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between mb-2">
            <p class="text-xl pb-4">
                <i class="fas fa-edit mr-2"></i> Izmena stranice "{{ $page->title }}"
            </p>
            <span  class="pb-4">
                <a href="{{ route('pages.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i>  Nazad</a>
            </span>
        </div>

        <div class="leading-loose">
            <form method="POST" action="{{ route('pages.update', $page->id) }}" class="p-10 bg-white rounded shadow-xl">
                @csrf
                @method('PUT')

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="description">Description</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="description" name="description">{{ $page->description }}</textarea>
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="keywords">Keywords</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="keywords" name="keywords" type="text" value="{{ $page->keywords }}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="content">Content</label>
                    <textarea class="editor" id="content" name="content">{{ $page->content }}</textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">Submit</button>
                </div>
            </form>
        </div>
    </main>

    @include('components.ckeditor')

</x-app-layout>
