<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Kreiranje izdanja' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Kreiranje izdanja' }}</x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between mb-2">
            <p class="text-xl pb-4">
                <i class="fas fa-plus mr-2"></i> Kreiraj novo izdanje
            </p>
            <span  class="pb-4">
                <a href="{{ route('selections.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i>  Nazad</a>
            </span>
        </div>

        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method='POST' action="{{route('issues.store')}}" enctype='multipart/form-data'>
                @csrf

                <div class="mt-5" >
                    <label class="block text-gray-600 mb-1" for="title">Title</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="title" name="title" type="text" aria-label="title" value="{{old('title')}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="slug">Slug</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="slug" name="slug" type="text" required="" aria-label="slug" value="{{old('slug')}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="description">Description</label>
                    <textarea class=" editor w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="description" name="description" type="text" aria-label="description" >{{old('description')}}</textarea>
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="order">Order</label>
                    <input class="w-full sm:w-1/5 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="order" name="order" type="number" min="1" required="" aria-label="order" value="{{old('order')}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="info">Info</label>
                    <textarea class="editor w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="info" name="info" type="text" aria-label="info" >{{old('info')}}</textarea>
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="keywords">Keywords</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="keywords" name="keywords" type="text" aria-label="keywords" >{{old('keywords')}}</textarea>
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="content">Content</label>
                    <textarea class="editor w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="content" name="content" type="text" aria-label="content" >{{old('content')}}</textarea>
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="image">Image</label>
                    <input class="w-full sm:w-1/4 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="image" name="image" type="file" required="" aria-label="image" value="{{old('image')}}" accept="image">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="date">Date</label>
                    <input class="w-full sm:w-1/4 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="date" name="date" type="date" required="" aria-label="date" value="{{old('date')}}">
                </div>

                <input type="hidden" value="{{$selection_id}}" name="selection_id">

                <div class="mt-5">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Create</button>
                </div>
            </form>
        </div>

    </main>

    @include('components.ckeditor')

</x-app-layout>
