<?php

namespace App\Http\Controllers;

use App\Models\Image as ModelsImage;


class HomeController extends Controller
{
    public function home(){

        return view('frontend.home');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function gallery(){
        $images = ModelsImage::all();
        // dd($images);
        return view('frontend.gallery', compact('images'));
    }
    
    public function room(){
        return view('frontend.room');
    }

    public function service(){
        return view('frontend.services');
    }

  
    
}
