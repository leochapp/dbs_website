<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('contact', function(){
    return view('contact');
});

Route::get('portfolio', function(){
    return view('portfolio');
});

Route::get('anciens', function(){
    return view('anciens');
});

Route::get('matos', function(){
    return view('matos');
});

Route::get('legals', function(){
    return view('legals');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('*/admin', function(){
    Voyager::routes();
});

Route::post('/envoyer-email', 'App\Http\Controllers\EmailController@envoyerEmail')->name('envoyer-email');
