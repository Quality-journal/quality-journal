<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=request()->selection_id;
        return view('admin-pages.issue.create',['selection_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $issue=Issue::create($request->except(['image']));
        $ext=$request->file('image')->getClientOriginalExtension();
        $filename = Str::snake($request->title).".".$ext;
        $originalImage = $request->file('image');
        Storage::disk('pub')->putFileAs('/images/',$originalImage,$filename);
        $issue->image = $filename;

        $issue->save();
        return redirect('/selections')->with(['message'=>'Issue created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        return view('admin-pages.issue.edit',['issue'=>$issue]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        $issue->update($request->except(['image']));

        if($request->file('image')){
            $ext=$request->file('image')->getClientOriginalExtension();
            $filename = Str::snake($request->title).".".$ext;
            $originalImage = $request->file('image');
            Storage::disk('pub')->putFileAs('/images/',$originalImage,$filename);
            $issue->image = $filename;

            $issue->save();
        }

        return redirect('/selections')->with(['message'=>'Issue edited!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect('/selections')->with(['message'=>'Issue deleted!']);
    }
}
