<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('services.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.add-service');
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
            'type' => 'required',
            'description' => 'required',
            'image' => 'required'

        ]);

        $service = new Service();
        $service->type = $validated['type'];
        $service->description = $validated['description'];
        $service->slug = Str::slug($validated['type']);
        $service->save();

        if (request('image')) {
            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $service->images()->create(['path' => $path]);
        }
        return redirect()->route('services.index')->with('success', 'Service has been successfully created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        // dd($service);
        $img = $service->images->path;
        return view('services.edit-service', compact('service' , 'img'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'type' => 'required',
            'description' => 'required',
            // 'image' => 'required'

        ]);

        $service = Service::findOrFail($id);
        if (request('image')) {

            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $service->images()->updateOrCreate(
                [
                    'imageable_id' => $service->id,
                    'imageable_type' => Service::class,
                ],
                ['path' => $path]
            );
        }

        $service->type = $validated['type'];
        $service->description = $validated['description'];
        $service->save();
        return redirect()->route('services.index')->with('success', 'Service Details has been successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        
        return redirect()->route('services.index')->with('danger','Service has been successfully removed!');
    }
}
