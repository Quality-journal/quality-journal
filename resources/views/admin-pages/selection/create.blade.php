<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Kreiranje selekcije izdanja' }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Kreiranje nove selekcije' }}</x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between mb-2">
            <p class="text-xl pb-4">
                <i class="fas fa-plus mr-2"></i> Kreiraj novu selekciju izdanja
            </p>
            <span class="pb-4">
                <a href="{{ route('selections.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i>  Nazad</a>
            </span>
        </div>

        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method='POST' action="{{route('selections.store')}}">
                @csrf

                <div class="mt-5" >
                    <label class="block text-gray-600 mb-1" for="title">Title</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="title" name="title" type="text" required="" aria-label="title" value="{{old('title')}}">
                </div>

                <div class="mt-5">
                    <label class="block text-gray-600 mb-1" for="order">Order</label>
                    <input class="w-full sm:w-1/5 px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="order" name="order" type="number" min="1" required="" aria-label="order" value="{{old('order')}}">
                </div>

                <div class="mt-5">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Create</button>
                </div>
            </form>
        </div>

    </main>

</x-app-layout>
