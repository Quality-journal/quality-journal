<x-guest-layout>

    <x-slot name="title">{{ $page->title }}</x-slot>
    <x-slot name="description">{{ $page->description }}</x-slot>
    <x-slot name="keywords">{{ $page->keywords }}</x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">

                <div class="w-3/4 sm:w-1/4 px-4 bg-gray-50 py-2 mt-3">
                    <p class="text-lg font-semibold mb-1 text-orange text-left">About the journal</p>
                    <a href="/editorial-office" class="ml-5 p-2 hover:text-orange @if (Route::is('editorialOffice')) text-orange @endif">Editorial office</a><br>
                    <a href="/reviewers" class="ml-5 p-2 hover:text-orange @if (Route::is('reviewers')) text-orange @endif">Reviewers</a><br>
                    <a href="/publishing-council" class="ml-5 p-2 hover:text-orange @if (Route::is('publishingCouncil')) text-orange @endif">Publishing council</a><br>
                    <a href="/ethics-and-policy" class="ml-5 p-2 hover:text-orange @if (Route::is('ethicsAndPolicy')) text-orange @endif">Ethics and policy</a><br>
                </div>

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-orange">{{ $title }}</h1><hr>

                    @if(Route::is('reviewers'))
                        <div class="bg-gray-200 w-full px-4 py-2 mt-3">
                            <p>Blok zahvalnosti</p>
                        </div>
                    @endif

                    <div class="mt-3 ck-content">{!! $page->content !!}</div>
                </div>
            </div>

        </div>
    </div>

</x-guest-layout>
