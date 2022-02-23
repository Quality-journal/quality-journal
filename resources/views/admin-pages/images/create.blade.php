<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Dodavanje slike' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Dodavanje slike' }}</x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between mb-2">
            <p class="text-xl pb-4">
                <i class="fas fa-plus mr-2"></i> Dodaj novu sliku
            </p>
            <span class="pb-4">
                <a href="{{ route('photos.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i
                        class="fas fa-arrow-left"></i> Nazad</a>
            </span>
        </div>

        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method='POST' action="{{route('photos.store')}}" enctype='multipart/form-data'>
                @csrf

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="link">Link</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="link" name="link" type="text" aria-label="link"
                        value="{{old('link')}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="position">Order</label>
                    <input class="w-full sm:w-1/5 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="position" name="position" type="number" min="1"
                        aria-label="position" value="{{old('position')}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="image">Image</label>
                    <input class="w-full sm:w-1/4 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="image" name="image" type="file" required=""
                        aria-label="image" value="{{old('image')}}" accept="image">
                </div>

                <div class="mt-5">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Create</button>
                </div>
            </form>
        </div>

    </main>

</x-app-layout>
