<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <main class="w-full flex-grow p-6 min-h-screen">
        <h1 class="text-3xl text-black pb-4">Pages</h1>

        @if(Session::has('message'))
            <div class="message flex justify-center items-center my-4 font-medium py-3 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                <div class="ml-2">
                    <i class="fas fa-check"></i>
                </div>
                <div class="font-normal max-w-full flex-initial pl-2">
                    {{ session('message') }}
                </div>
                <div class="flex flex-auto flex-row-reverse mr-4">
                    <span class="close-message cursor-pointer pt-1"><i class="fas fa-times"></i></span>
                </div>
            </div>
        @endif
        
        <div class="w-full mt-">
            <div class="bg-white overflow-auto">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Page</th>
                            <th class="w-1/3 text-right py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($pages as $page)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $page->title }}</td>
                            <td class="w-1/3 text-right py-3 px-4"><a href="{{ route('pages.edit', $page->id)}}"><i class="fas fa-edit text-blue-500"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</x-app-layout>
