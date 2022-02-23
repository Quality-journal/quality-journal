<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin-pages.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Storage::disk('pub')->put('/images', $request->image);
        Image::create($request->except('image') + ['path' => $path]);

        return redirect('/photos')->with(['message' => 'Photo created!']);
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
    public function edit(Image $photo)
    {
        return view('admin-pages.images.edit', ['image' => $photo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $photo)
    {
        if ($request->has('image')) {
            $path = Storage::disk('pub')->put('/images', $request->image);
            Storage::disk('pub')->delete($photo->path);
        } else {
            $path = $photo->path;
        }

        $photo->update([
            'position' => $request->position,
            'link' => $request->link,
            'path' => $path
        ]);

        return redirect('/photos')->with(['message' => 'Photo updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $photo)
    {
        Storage::disk('pub')->delete($photo->path);
        $photo->delete();
        return redirect('/photos')->with(['message' => 'Photo deleted!']);
    }
}
