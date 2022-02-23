<x-guest-layout>

    <x-slot name="title">Journal of Quality Engineering | {{ ucfirst($page->title) }}</x-slot>
    <x-slot name="description">{{ $page->description }}</x-slot>
    <x-slot name="keywords">{{ $page->keywords }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

            <div class="flex flex-wrap py-4">

                <div class="w-full sm:w-1/4 px-4 bg-gray-200 py-2 mt-3">
                    <p class="text-lg font-semibold mb-1 text-yellow-500 text-left">About the journal</p>
                    <a href="/editorial-board" class="ml-5 p-2 hover:text-yellow-500 transition-all @if (Route::is('editorialOffice')) text-yellow-500 @endif">Editorial
                        board</a><br>
                    <a href="/ethics-and-policy" class="ml-5 p-2 hover:text-yellow-500 transition-all @if (Route::is('ethicsAndPolicy')) text-yellow-500 @endif">Ethics
                        and policy</a><br>
                    <a href="/review-process" class="ml-5 p-2 hover:text-yellow-500 transition-all @if (Route::is('reviewers')) text-yellow-500 @endif">Review
                        process</a><br>
                    <a href="/publishing-council" class="ml-5 p-2 hover:text-yellow-500 transition-all @if (Route::is('publishingCouncil')) text-yellow-500 @endif">Publishing
                        council</a><br>
                </div>

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-yellow-500">{{ $title }}</h1>
                    <hr>

                    @if(Route::is('reviewers'))
                    <div class="bg-gray-100 w-full px-4 py-2 mt-3">
                        <p>{!! $page->gratitude !!}</p>
                    </div>
                    @endif

                    <div class="mt-3 ck-content h-auto">{!! $page->content !!}</div>
                </div>
            </div>

        </div>
    </div>

</x-guest-layout>
