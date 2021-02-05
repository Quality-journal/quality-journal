
 <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script>
		var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor
			.create( allEditors[i],  {
				removePlugins: [ 'Title' ],
				toolbar: {
					items: [
						'|',
						'heading',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'alignment',
						'fontSize',
						'fontColor',
						'fontFamily',
						'horizontalLine',
						'|',
						'indent',
						'outdent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'removeFormat',
						'undo',
						'redo'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side',
						'linkImage'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableCellProperties',
						'tableProperties'
					]
				},
                licenseKey: '',
                fontSize: {
                    options: [
                        'tiny',
                        'small',
                        'big',
                        'huge',
                        8,
                        10,
                        12,
                        14,
                        'default',
                        18,
                        20,
                        22,
                        24
                    ],
                },
			} )
			.then( editor => {
				window.editor = editor;
			} )
			.catch( error => {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: eafvm8snd33a-xm0z2qkqxymw' );
				console.error( error );
			} );
		}
    </script>

    <style>
        .ck-content p { margin: 0; }
        .ck-content { min-height: 300px; }
		.ck-rounded-corners .ck.ck-editor__main > .ck-editor__editable, .ck.ck-editor__main > .ck-editor__editable.ck-rounded-corners { padding-left: 30px; }

    </style>
