<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit article') }}
        </h2>
    </x-slot>

    <main class="w-full flex-grow p-6">

        <div class="flex justify-between">
            <p class="text-xl pb-4">
                <i class="fas fa-edit mr-2"></i> Edit article "{{ $article->title }}"
            </p>
            <span  class="pb-4">
                <a href="{{ route('articles.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i>  Back</a>
            </span>
        </div>

        <div>
            <form method="POST" action="{{ route('articles.update', $article->id) }}" class="p-10 bg-white rounded shadow-xl" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="issue_id" value="1">
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="title">Title</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="title" name="title" type="text" value="{{ $article->title }}" required>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="info">Info</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="info" name="info" type="text" value="{{ $article->info }}" required>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="doi">DOI</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="doi" name="doi" type="text" value="{{ $article->doi }}" required>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="content">Content</label>
                    <textarea class="editor" id="content" name="content">{{ $article->content }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="authors">Authors</label>
                    <textarea class="editor" id="authors" name="authors">{{ $article->authors }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="authors_names">Authors names</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-none" id="authors_names" name="authors_names" type="text" value="{{ $article->authors_names }}" required>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="abstract">Abstract</label>
                    <textarea class="editor" id="abstract" name="abstract">{{ $article->abstract }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="recognitions">Recognitions</label>
                    <textarea class="editor" id="recognitions" name="recognitions">{{ $article->recognitions }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="reference">Reference</label>
                    <textarea class="editor" id="reference" name="reference">{{ $article->reference }}</textarea>
                </div>
                <div class="mt-5">
                    <label class="block text-gray-600 mb-2" for="pdf">PDF</label>
                    <div class="flex">
                        <div class="w-full sm:w-1/6 items-center justify-center bg-grey-lighter">
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                                <i class="fas fa-upload"></i>
                                <span class="mt-2 text-base leading-normal" id="selected_file">Select a PDF file</span>
                                <input type='file' id="file" name="file" class="hidden" accept="application/pdf"/>
                            </label>
                        </div>
                        <div class="w-full sm:w-1/6 ml-20 mt-10">
                            <span class="font-italic text-xs md:text-sm mx-2 text-blue-500 hover:text-blue-600"><a href="/storage/articles/{{ $article->pdf }}" target="_blank">{{ $article->title }}</a></span>
                        </div>
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
