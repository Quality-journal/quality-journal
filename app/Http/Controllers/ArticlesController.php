<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Issue;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $issue_id = $request->query('issue_id');
        $articles = Article::where('issue_id', $issue_id)->get();
        $issue = Issue::find($issue_id);
        return view('admin-pages.articles.index', ['articles' => $articles, 'issue' => $issue]);
    }

    public function create()
    {
        return view('admin-pages.articles.create');
    }

    public function store(Request $request)
    {
        $article = Article::create($request->except(['file']));

        try {
            $filename = Str::snake($request->title) . ".pdf";
            Storage::disk('pub')->putFileAs('/articles_pdf/', $request->file, $filename);
            $article->pdf = $filename;
            $article->slug = Str::slug($article->title);
            $article->save();
            $request->session()->flash('message', 'Članak je uspešno sačuvan.');
        } catch (Throwable $e) {
            $request->session()->flash('error', 'Došlo je do greške. Pokušajte ponovo.');
        }

        return redirect('/articles?issue_id=' . $article->issue_id);
    }

    public function show(Article $article)
    {
        abort(404);
    }

    public function edit(Article $article)
    {
        $article = Article::findorFail($article->id);
        return view('admin-pages.articles.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $article = Article::findOrFail($article->id);

        try {
            if ($request->file) {
                Storage::disk('pub')->delete('articles_pdf/' . $article->pdf);

                $filename = Str::snake($request->title) . ".pdf";
                Storage::disk('pub')->putFileAs("/articles_pdf/", $request->file, $filename);
                $article->pdf = $filename;
            }

            $article->update($request->except(['file']));
            $article->slug = Str::slug($article->title);
            $article->save();
            $request->session()->flash('message', 'Članak je uspešno izmenjen.');
        } catch (Throwable $e) {
            $request->session()->flash('error', 'Došlo je do greške. Pokušajte ponovo.');
        }

        return redirect('/articles?issue_id=' . $article->issue_id);
    }

    public function destroy(Request $request, Article $article)
    {
        try {
            Storage::disk('pub')->delete('articles_pdf/' . $article->pdf);
            $article->delete();
            $request->session()->flash('message', 'Članak uklonjen.');
        } catch (Throwable $e) {
            $request->session()->flash('error', 'Došlo je do greške. Pokušajte ponovo.');
        }

        return redirect('/articles?issue_id=' . $article->issue_id);
    }
}
