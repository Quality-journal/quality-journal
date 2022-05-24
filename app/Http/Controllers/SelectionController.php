<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Selection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SelectionController extends Controller
{
    public function index()
    {
        $selections = Selection::all();
        return view('admin-pages.selection.index', ['selections' => $selections]);
    }

    public function create()
    {
        return view('admin-pages.selection.create');
    }

    public function store(Request $request)
    {
        try {
            $selection = Selection::create($request->all());
            $selection->slug = Str::slug($selection->title);
            $selection->save();
            return redirect('/selections')->with(['message' => 'Selekcija izdanja kreirana.']);
        } catch (Throwable $e) {
            return redirect('/selections')->with(['error' => 'Greška prilikom kreiranja selekcije izdanja.']);
        }
    }

    public function show(Selection $selection)
    {
        abort(404);
    }

    public function edit(Selection $selection)
    {
        return view('admin-pages.selection.edit', ['selection' => $selection]);
    }

    public function update(Request $request, Selection $selection)
    {
        try {
            $selection->update($request->all());
            return redirect('/selections')->with(['message' => 'Selekcija izdanja izmenjena.']);
        } catch (Throwable $e) {
            return redirect('/selections')->with(['error' => 'Greška prilikom izmene selekcije izdanja.']);
        }
    }

    public function destroy(Selection $selection)
    {
        try {
            $selection->delete();
            return redirect('/selections')->with(['message' => 'Selekcija izdanja uklonjena.']);
        } catch (Throwable $e) {
            return back()->with(['error' => 'Nije moguće brisanje selekcije izdanja koja ima pripadajuća izdanja. Ako želite da obrišete selekciju prvo uklonite sva njena izdanja.']);
        }
    }
}
