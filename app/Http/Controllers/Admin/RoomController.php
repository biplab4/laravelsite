<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rooms = Room::all();
        $count = $rooms->count();
        return view('rooms.index',compact('rooms','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.add-room');
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
            'type' => 'required|unique:rooms',
            'description' => 'required',
            'charge' => 'required',
            'image' => 'required',
            

        ]);
         $cat = $request->input('facility');
         


        $room = new Room();
        $room->type = $validated['type'];
        $room->description = $validated['description'];
        $room->charge = $validated['charge'];
        $room->facility = $cat;
        $room->slug = Str::slug($validated['type']);
        $room->save();

        if (request('image')) {
            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $room->images()->create(['path' => $path]);
        }

        return redirect()->route('rooms.index')->with('success', 'Room has been successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $img = $room->images->path;
        // dd($room->facility);
        // $fac = $room->facility;
        return view('rooms.edit-room', compact('room','img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'type' => 'required',
            'description' => 'required',
            'charge' => 'required',
            // 'image' => 'required'

        ]);
        $facility = $request->input('facility');
        $room = Room::findOrFail($id);

        if (request('image')) {

            $path = Storage::putFileAs(
                'public/images',
                $request->file('image'),
                Carbon::now()->format('Y-m-d') . '-' . $request->file('image')->getClientOriginalName()
            );

            $room->images()->updateOrCreate(
                [
                    'imageable_id' => $room->id,
                    'imageable_type' => Room::class,
                ],
                ['path' => $path]
            );
        }
        $room->type = $validated['type'];
        $room->description = $validated['description'];
        $room->charge = $validated['charge'];
        $room->facility = $facility;
        $room->save();
        return redirect()->route('rooms.index')->with('success','Room Details has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Room::findOrFail($id)->delete();
        
        return redirect()->route('rooms.index')->with('danger','Room has been successfully removed!');
    }
}
