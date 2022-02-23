<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Izmena izdanja' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Izmena izdanja' }}</x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between mb-2">
            <p class="text-xl pb-4">
                <i class="fas fa-edit mr-2"></i> Izmeni izdanje "{{ $issue->title }}"
            </p>
            <span class="pb-4">
                <a href="{{ route('selections.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i
                        class="fas fa-arrow-left"></i> Nazad</a>
            </span>
        </div>

        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method='POST' action="{{route('issues.update',['issue'=>$issue->id])}}" enctype='multipart/form-data'>
                @csrf
                @method('PUT')

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="title">Title</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="title" name="title" type="text" required=""
                        aria-label="title" value="{{$issue->title}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="slug">Slug</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="slug" name="slug" type="text" required=""
                        aria-label="slug" value="{{$issue->slug}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="description">Description</label>
                    <textarea class=" editor w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="description" name="description" type="text"
                        aria-label="description">{!!$issue->description!!}</textarea>
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="order">Order</label>
                    <input class="w-full sm:w-1/5 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="order" name="order" type="number" required=""
                        min="1" aria-label="order" value="{{$issue->order}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="image">Current image</label>
                    <img class="h-28 mt-2 mb-4" src="{{ asset('/images/'.$issue->image) }}">

                    <label class="block text-gray-600 mb-1" for="image">New image</label>
                    <input class="w-full sm:w-1/4 px-5 py-2 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" aria-label="image"
                        accept="image">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="date">Date</label>
                    <input class="w-full sm:w-1/4 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="date" name="date" type="date" required=""
                        aria-label="date" value="{{$issue->date}}">
                </div>

                <input type="hidden" value="{{$issue->selection_id}}" name="selection_id">

                <div class="mt-5">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Edit</button>
                </div>
            </form>
        </div>

    </main>

    @include('components.ckeditor')

</x-app-layout>
