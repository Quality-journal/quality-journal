<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit page') }}
        </h2>
    </x-slot>

    <main class="w-full flex-grow p-6">

        <p class="text-xl pb-4 flex items-center">
            <i class="fas fa-list mr-3"></i> Edit "About"
        </p>
        <div>
            <form method="POST" action="{{ route('pages.update', 1) }}" class="p-10 bg-white rounded shadow-xl">
                @csrf
                <div class="mt-2">
                    <label class="block text-gray-600 mb-4" for="content">Content</label>
                    <textarea class="editor" id="content" name="content" required></textarea>
                </div>
                <div class="mt-6">
                    <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">Submit</button>
                </div>
            </form>
        </div>
    </main>

    @include('components.ckeditor')

</x-app-layout>
