<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function home(){

        return view('frontend.home');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function gallery(){
        return view('frontend.gallery');
    }
    
    public function room(){
        return view('frontend.room');
    }

    public function service(){
        return view('frontend.services');
    }

  
    
}
