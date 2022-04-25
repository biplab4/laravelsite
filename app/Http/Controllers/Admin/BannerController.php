<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.add-banner');
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

            'rank' => 'required|unique:banners',
            'image' => 'required',
            

        ]);

        $banner = new Banner();
        $banner->rank = $validated['rank'];
        $banner->save();
        
         



        if (request('image')) {
            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $banner->images()->create(['path' => $path]);
        }

        return redirect()->route('banners.index')->with('success', 'Banner has been successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('banner.edit-banner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'rank' => 'required',
            
            // 'image' => 'required'

        ]);
        $banner = Banner::findOrFail($id);
        $banner->rank = $validated['rank'];

        if (request('image')) {

            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $banner->images()->updateOrCreate(
                [
                    'imageable_id' => $banner->id,
                    'imageable_type' => Banner::class,
                ],
                ['path' => $path]
            );
        }
   
        $banner->save();
        return redirect()->route('banners.index')->with('success','Banner has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::findOrFail($id)->delete();
        
        return redirect()->route('banners.index')->with('danger','Banner has been successfully removed!');
    }
}
