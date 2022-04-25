<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Apanel\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\MessageCatalogue;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/room', [HomeController::class, 'room'])->name('room');
Route::get('/service', [HomeController::class, 'service'])->name('service');



Route::prefix('apanel')->group(function(){
//Apanel
Route::get('/overview', [DashboardController::class, 'index'])->name('overview');
Route::resource('/rooms', RoomController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/messages', MessageController::class);
Route::resource('/banners', BannerController::class);
Route::resource('/gallery',GalleryController::class);
});
