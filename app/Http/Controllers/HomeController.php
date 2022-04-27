<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;
use App\Models\Room;

class HomeController extends Controller
{

    public function layout()
    {
        $room = Room::all();
        // dd($room);
        return view('layouts.app', compact('room'));
    }

    public function home()
    {
        $room = Room::all();
        return view('frontend.home', compact('room'));
    }

    public function contact()
    {
        $room = Room::all();
        return view('frontend.contact',compact('room'));
    }

    public function gallery()
    {
        $gallery = Gallery::with('images')->get();
        $room = Room::all();
        // dd($images);
        return view('frontend.gallery', compact('gallery','room'));
    }

    public function room()
    {
        $room = Room::all();
        // $aroom = Room::findOrFail($id);
        return view('frontend.room', compact('room'));
    }

    public function service()
    {
        $room = Room::all();
        return view('frontend.services', compact('room'));
    }

    public function standard(){
        return view('frontend.rooms.standard-room');
    }
    public function deluxe(){
        return view('frontend.rooms.deluxe');
    }
    public function superdeluxe(){
        return view('frontend.rooms.super-deluxe');
    }
    public function suite(){
        return view('frontend.rooms.suite');
    }
}
