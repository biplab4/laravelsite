<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.add-gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'description' => 'required|unique:galleries',
            'image' => 'required',


        ]);

        $gallery = new Gallery();
        $gallery->description = $validated['description'];
        $gallery->save();

        if (request('image')) {
            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $gallery->images()->create(['path' => $path]);
        }

        return redirect()->route('gallery.index')->with('success', 'Image has been successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrfail($id);
        return view('gallery.edit-gallery',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'description' => 'required',
            
            // 'image' => 'required'

        ]);
        $gallery = Gallery::findOrFail($id);
        $gallery->description = $validated['description'];

        if (request('image')) {

            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $gallery->images()->updateOrCreate(
                [
                    'imageable_id' => $gallery->id,
                    'imageable_type' => Gallery::class,
                ],
                ['path' => $path]
            );
        }
   
        $gallery->save();
        return redirect()->route('gallery.index')->with('success','Image has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gallery::findOrFail($id)->delete();
        return redirect()->route('gallery.index')->with('danger','Image has been succesfully deleted');
    }
}
