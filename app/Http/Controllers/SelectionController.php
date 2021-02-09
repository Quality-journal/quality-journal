<?php

namespace App\Http\Controllers;

use App\Models\Selection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $selections=Selection::all();
        return view('admin-pages.selection.index',['selections'=>$selections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.selection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selection = Selection::create($request->all());
        $selection->slug = Str::slug($selection->title);
        $selection->save();
        return redirect('/selections')->with(['message'=>'Selection created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function show(Selection $selection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function edit(Selection $selection)
    {
        return view('admin-pages.selection.edit',['selection'=>$selection]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selection $selection)
    {
        $selection->update($request->all());
        return redirect('/selections')->with(['message'=>'Selection edited!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selection $selection)
    {
        $selection->delete();
        return redirect('/selections')->with(['message'=>'Selection deleted!']);
    }
}
