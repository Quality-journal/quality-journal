<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Pages</h1>

        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> All pages
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Page</th>
                            <th class="w-1/3 text-right py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">Instruction for authors</td>
                            <td class="w-1/3 text-right py-3 px-4"><a href="{{ route('pages.edit', 1)}}"><i class="fas fa-edit"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</x-app-layout>
