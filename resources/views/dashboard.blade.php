<x-app-layout>

    <x-slot name="title">{{ 'Dashboard' }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="w-full flex-grow p-6 min-h-screen">
        <h1 class="text-3xl text-black pb-6">Selekcije izdanja</h1>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-10 mx-auto">

                <div class="flex flex-wrap -m-4 text-center">

                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="bg-white px-4 py-6 rounded-lg">

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

</x-app-layout>
