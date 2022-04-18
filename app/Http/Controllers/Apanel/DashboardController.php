<?php

namespace App\Http\Controllers\Apanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.overview');
    }

    public function room(){
        return view('rooms.index');
    }
}
