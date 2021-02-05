<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Izmena stranice') }}
        </h2>
    </x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between">
            <p class="text-xl pb-4">
                <i class="fas fa-edit mr-2"></i> Izmena stranice "{{ $page->title }}"
            </p>
            <span  class="pb-4">
                <a href="{{ route('pages.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i>  Nazad</a>
            </span>
        </div>

        <div>
            <form method="POST" action="{{ route('pages.update', $page->id) }}" class="p-10 bg-white rounded shadow-xl">
                @csrf
                @method('PUT')

                <div class="mt-2">
                    <label class="block text-gray-600 mb-4" for="content">Content</label>
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
