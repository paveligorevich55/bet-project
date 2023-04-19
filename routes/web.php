<?php

use App\Http\Controllers\panel\BookmakerController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\IndexController;
use App\Http\Controllers\panel\LinkController;
use App\Http\Controllers\panel\PostController;
use App\Http\Controllers\panel\ProfileController;
use App\Http\Controllers\panel\PromoController;
use App\Http\Controllers\panel\UserController;
use Illuminate\Support\Facades\Route;


// Website Routes

Route::get("/sitemap.xml", function() { return response()->file('sitemap.xml'); });
Route::get("/robots.txt", function() { return response()->file('robots.txt'); });

Route::get('/', function () {
    return view('layouts.app');
})->middleware('event');
Route::get('/back', function () {
    return redirect()->back();
})->middleware('event');
Route::get('/custom/{shortURLKey}', '\AshAllenDesign\ShortURL\Controllers\ShortURLController');





// Admin Dashboard panel Routes

Route::group(['prefix' => 'dashboard',  'middleware' => ['auth']], function (){

    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::put('/profile/{userProfile}/update', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    Route::resource('user', UserController::class);
    Route::resource('bookmaker', BookmakerController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('link', LinkController::class);
    Route::resource('promo', PromoController::class);

    Route::controller(\App\Http\Controllers\panel\SettingsController::class)->group(function (){
        Route::get('/settings', 'index')->name('settings');
        Route::put('/settings/{setting}/update', 'update')->name('settings.update');
        Route::post('/settings', 'store')->name('settings.store');
    });

    Route::controller(\App\Http\Controllers\panel\WebmasterController::class)->group(function () {
       Route::get('/webmaster', 'index')->name('webmaster');
       Route::put('/webmaster/{webmaster}/update', 'update')->name('webmaster.update');
       Route::post('/webmaster', 'store')->name('webmaster.store');
    });




});


require __DIR__.'/auth.php';
