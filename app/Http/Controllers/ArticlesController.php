<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin-pages.articles.index', ['articles' => $articles]);
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
        $article = new Article();
        $article->title = $request->title;
        $article->info = $request->info;
        $article->doi = $request->doi;
        $article->content = $request->content;
        $article->authors = $request->authors;
        $article->abstract = $request->abstract;
        $article->recognitions = $request->recognitions;
        $article->reference = $request->reference;
        $article->authors_names = $request->authors_names;
        $article->issue_id = $request->issue;

        try{
            $filename = Str::snake($request->title).".pdf";
            Storage::putFileAs("public/articles", $request->file, $filename);
            $article->pdf = $filename;
            $article->save();
            $request->session()->flash('message', 'Članak je uspešno sačuvan');
        } catch(\Exception $e){
            $request->session()->flash('message', 'Došlo je do greške. Pokušajte ponovo.');
        }

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin-pages.articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->title = $request->title;
        $article->info = $request->info;
        $article->doi = $request->doi;
        $article->content = $request->content;
        $article->authors = $request->authors;
        $article->abstract = $request->abstract;
        $article->recognitions = $request->recognitions;
        $article->reference = $request->reference;
        $article->authors_names = $request->authors_names;
        $article->issue_id = $request->issue;

        try{
            if($request->file){
                $filename = Str::snake($request->title).".pdf";
                Storage::putFileAs("public/articles", $request->file, $filename);
                $article->pdf = $filename;
            }

            $article->save();
            $request->session()->flash('message', 'Članak je uspešno izmenjen');
        } catch(\Exception $e){
            dd($e);
            $request->session()->flash('message', 'Došlo je do greške. Pokušajte ponovo.');
        }

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
