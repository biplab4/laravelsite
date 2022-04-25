<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;


class HomeController extends Controller
{
    public function home(){

        return view('frontend.home');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function gallery(){
        $gallery = Gallery::with('images')->get();
        // dd($images);
        return view('frontend.gallery', compact('gallery'));
    }
    
    public function room(){
        return view('frontend.room');
    }

    public function service(){
        return view('frontend.services');
    }

  
    
}
