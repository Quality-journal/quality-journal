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
        fontColor: {
            colors: [
                {
                    color: 'hsl(0, 0%, 0%)',
                    label: 'Black'
                },
                {
                    color: 'hsl(0, 0%, 30%)',
                    label: 'Dim grey'
                },
                {
                    color: 'hsl(0, 0%, 60%)',
                    label: 'Grey'
                },
                {
                    color: 'hsl(0, 0%, 90%)',
                    label: 'Light grey'
                },
                {
                    color: 'hsl(0, 0%, 100%)',
                    label: 'White',
                    hasBorder: true
                },
                {
                    color: 'hsl(0, 75%, 60%)',
                    label: 'Red'
                },
                {
                    color: '#f59e0b',
                    label: 'Orange'
                },
                {
                    color: 'hsl(60, 75%, 60%)',
                    label: 'Yellow'
                },
                {
                    color: 'hsl(90, 75%, 60%)',
                    label: 'Light green'
                },
                {
                    color: 'hsl(120, 75%, 60%)',
                    label: 'Green'
                },
                {
                    color: 'hsl(150, 75%, 60%)',
                    label: 'Aquamarine'
                },
                {
                    color: 'hsl(180, 75%, 60%)',
                    label: 'Turquoise'
                },
                {
                    color: 'hsl(210, 75%, 60%)',
                    label: 'Light blue'
                },
                {
                    color: 'hsl(240, 75%, 60%)',
                    label: 'Blue'
                },
                {
                    color: 'hsl(270, 75%, 60%)',
                    label: 'Purple'
                }
	        ]
                }
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
    .ck-content p {
        margin: 0;
    }

    .ck-content {
        min-height: 300px;
    }

    .ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable,
    .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners {
        padding-left: 30px;
    }
</style>
