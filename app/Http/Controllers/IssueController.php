<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Issue;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IssueController extends Controller
{
    public function index()
    {
        abort(404);
    }

    public function create()
    {
        $id = request()->selection_id;
        return view('admin-pages.issue.create', ['selection_id' => $id]);
    }

    public function store(Request $request)
    {
        try {
            $issue = Issue::create($request->except(['image']));
            $ext = $request->file('image')->getClientOriginalExtension();
            $filename = Str::snake($request->title) . "." . $ext;
            $originalImage = $request->file('image');
            Storage::disk('pub')->putFileAs('/images/', $originalImage, $filename);
            $issue->image = $filename;

            $issue->save();
            return redirect('/selections')->with(['message' => 'Izdanje kreirano.']);
        } catch (Throwable $e) {
            return back()->with(['error' => 'Greška prilikom kreiranja izdanja.']);
        }
    }

    public function show(Issue $issue)
    {
        abort(404);
    }

    public function edit(Issue $issue)
    {
        return view('admin-pages.issue.edit', ['issue' => $issue]);
    }

    public function update(Request $request, Issue $issue)
    {
        try {
            $issue->update($request->except(['image']));
            if ($request->file('image')) {
                $ext = $request->file('image')->getClientOriginalExtension();
                $filename = Str::snake($request->title) . "." . $ext;
                $originalImage = $request->file('image');
                Storage::disk('pub')->putFileAs('/images/', $originalImage, $filename);
                $issue->image = $filename;
                $issue->save();
            }

            return redirect('/selections')->with(['message' => 'Izdanje izmenjeno.']);
        } catch (Throwable $e) {
            return redirect('/selections')->with(['error' => 'Greška prilikom izmene izdanja.']);
        }
    }

    public function destroy(Issue $issue)
    {
        try {
            Storage::disk('pub')->delete('images/' . $issue->image);
            $issue->delete();
            return redirect('/selections')->with(['message' => 'Izdanje uklonjeno.']);
        } catch (Throwable $e) {
            return back()->with(['error' => 'Nije moguće brisanje izdanja koje ima članke. Ako želite da obrišete izdanje prvo uklonite sve pripadajuće članke.']);
        }
    }
}
