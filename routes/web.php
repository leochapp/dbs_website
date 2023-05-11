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

Route::get('https://lchappuis.fr/dbs_website/public/', function () {
    return view('home');
});

Route::get('https://lchappuis.fr/dbs_website/public/contact', function(){
    return view('contact');
});

Route::get('https://lchappuis.fr/dbs_website/public/portfolio', function(){
    return view('portfolio');
});

Route::get('https://lchappuis.fr/dbs_website/public/anciens', function(){
    return view('anciens');
});

Route::get('https://lchappuis.fr/dbs_website/public/matos', function(){
    return view('matos');
});

Route::get('https://lchappuis.fr/dbs_website/public/legals', function(){
    return view('legals');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('https://lchappuis.fr/dbs_website/public/admin', function(){
    Voyager::routes();
});

Route::post('/envoyer-email', 'App\Http\Controllers\EmailController@envoyerEmail')->name('envoyer-email');
