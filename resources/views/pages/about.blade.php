<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

             <div class="flex flex-wrap py-4">
                <div class="w-3/4 sm:w-1/4 px-4 bg-gray-200 py-2 mt-3">
                <p class="text-2xl mb-5 text-blue-500 border-b border-solid border-black text-center">About the journal</p>
                    <a href="/editorial-office" class="ml-5 p-2 hover:text-blue-500">Editorial office</a><br>
                    <a href="/reviewers" class="ml-5 p-2 hover:text-blue-500">Reviewers</a><br>
                    <a href="/publishing-council" class="ml-5 p-2 hover:text-blue-500">Publishing council</a><br>
                    <a href="/ethics-and-policy" class="ml-5 p-2 hover:text-blue-500">Ethics and policy</a><br>
                </div>
                <div class="w-full sm:w-3/4 px-8">
                <h1 class="text-2xl font-semibold mt-2 pb-4 p-2  text-blue-500">{{ $title }}</h1><hr>
                    <p class="mt-3">{!!$page->content!!}</p>
                </div>
             </div>
        </div>
    </div>

</x-guest-layout>
