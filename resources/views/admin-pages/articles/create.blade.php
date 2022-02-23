<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kreiraj novi članak') }}
        </h2>
    </x-slot>

    <x-slot name="title">{{ 'Kreiranje članka' }}</x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between mb-2">
            <p class="text-xl pb-4">
                <i class="fas fa-plus mr-2"></i> Kreiraj novi članak
            </p>
            <span class="pb-4">
                <a href="{{ route('articles.index', [ 'issue_id' => Request::get('issue_id') ]) }}"
                    class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i> Nazad</a>
            </span>
        </div>

        <div>
            <form method="POST" action="{{ route('articles.store') }}" class="p-10 bg-white rounded shadow-xl" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="issue_id" value="{{ Request::get('issue_id') }}">
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="title">Title</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="title" name="title" type="text" required
                        value="{{ old('title') }}">
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="doi">DOI</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="doi" name="doi" type="text" required
                        value="{{ old('doi') }}">
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="content">Scientific paper informations</label>
                    <textarea class="editor" id="content" name="content">{{ old('content') }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="authors">Authors</label>
                    <textarea class="editor" id="authors" name="authors">{{ old('authors') }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="authors_names">Authors (Only names)</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="authors_names" name="authors_names" type="text" required
                        value="{{ old('authors_names') }}">
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="keywords">Keywords</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="keywords" name="keywords" type="text" required
                        value="{{ old('keywords') }}">
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="abstract">Abstract</label>
                    <textarea class="editor" id="abstract" name="abstract">{{ old('abstract') }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="howto">How to cite this paper</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="howto" name="howto" type="text"
                        value="{{ old('howto') }}">
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="recognitions">Acknowledgement</label>
                    <textarea class="editor" id="recognitions" name="recognitions">{{ old('recognitions') }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="reference">Reference</label>
                    <textarea class="editor" id="reference" name="reference">{{ old('reference') }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="pdf">PDF</label>
                    <div class="flex w-1/6 h-1/6 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                            <i class="fas fa-upload"></i>
                            <span class="mt-2 text-base leading-normal" id="selected_file">Select a PDF file</span>
                            <input type='file' id="file" name="file" class="hidden" accept="application/pdf" required />
                        </label>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">Submit</button>
                </div>
            </form>
        </div>
    </main>

    @include('components.ckeditor')

    <script>
        document.getElementById("file").addEventListener("change", function(e){
			let file = document.getElementById('file').files[0];
			if(file)
				document.getElementById('selected_file').textContent = file.name;
		});
    </script>

</x-app-layout>
