<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Issue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $issue_id = $request->query('issue_id');
        $articles = Article::where('issue_id', $issue_id)->get();
        $issue = Issue::find($issue_id);
        return view('admin-pages.articles.index', ['articles' => $articles, 'issue' => $issue]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create($request->except(['file']));

        try{
            $filename = Str::snake($request->title).".pdf";
           // Storage::putFileAs("public/articles", $request->file, $filename);
            Storage::disk('pub')->putFileAs('/articles_pdf/',$request->file,$filename);
            $article->pdf = $filename;
            $article->slug = Str::slug($article->title);
            $article->save();
            $request->session()->flash('message', 'Članak je uspešno sačuvan');
        } catch(\Exception $e){
            $request->session()->flash('message', 'Došlo je do greške. Pokušajte ponovo.');
        }

        return redirect('/articles?issue_id='.$article->issue_id);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article = Article::findorFail($article->id);
        return view('admin-pages.articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article = Article::findOrFail($article->id);

        try{
            if($request->file){
                $filename = Str::snake($request->title).".pdf";
                Storage::disk('pub')->putFileAs("/articles_pdf/", $request->file, $filename);
                $article->pdf = $filename;
            }

            $article->update($request->except(['file']));
            $article->slug = Str::slug($article->title);
            $article->save();
            $request->session()->flash('message', 'Članak je uspešno izmenjen');
        } catch(\Exception $e){
            
            $request->session()->flash('message', 'Došlo je do greške. Pokušajte ponovo.');
        }

        return redirect('/articles?issue_id='.$article->issue_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
