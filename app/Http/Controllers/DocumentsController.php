<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('admin-pages.documents.index', compact('documents'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Document $document)
    {
        return view('admin-pages.documents.edit', ['document' => $document]);
    }

    public function update(Request $request, Document $document)
    {
        $ext = $request->document->extension();
        $name = Str::before($request->type, '.');
        Storage::disk('pub')->putFileAs('/files/', $request->document, $name . "." . $ext);
        $document->update(['path' => $name . "." . $ext]);
        return redirect('/documents')->with(['message' => 'Dokument izmenjen']);
    }

    public function destroy($id)
    {
        //
    }
}
