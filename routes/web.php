<?php

use App\Http\Controllers\panel\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\PostController;
use App\Http\Controllers\panel\LinkController;
use App\Http\Controllers\panel\PromoController;
use App\Http\Controllers\panel\BookmakerController;
use App\Http\Controllers\panel\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Event;
use Illuminate\Support\Facades\Request;


// Website Routes

Route::get("/sitemap.xml", function() { return response()->file('sitemap.xml'); });
Route::get("/robots.txt", function() { return response()->file('robots.txt'); });

Route::get('/', function () {
    return view('layouts.app');
})->middleware('event');
Route::get('/back', function () {
    return redirect()->back();
})->middleware('event');






// Admin Dashboard panel Routes

Route::group(['prefix' => 'dashboard',  'middleware' => ['auth']], function (){

    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::put('/profile/{userProfile}/update', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
//        Route::put('/profile/{userProfile}/image', 'updateImage')->name('profile.avatar-update');
    });

    Route::resource('user', UserController::class);
    Route::resource('bookmaker', BookmakerController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('link', LinkController::class);
    Route::resource('promo', PromoController::class);


});


require __DIR__.'/auth.php';
