<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');    
    Route::get('/new-test', 'App\Http\Controllers\TestController@newTest')->name('new-test');
    Route::post('/next-question', 'App\Http\Controllers\TestController@nextQuestion')->name('next-question');
    
    Route::get('/preview-message', function () {
        return view('preview-message');
    })->name('preview-message');   

});

require __DIR__.'/auth.php';

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome') ;

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');  

Route::get('/about-tests', function () {
    return view('about-tests');
})->name('about-tests');

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); 

Route::post('/contact', function () {
    //TODO hay que armar la logica de contacto.
    return view('welcome');
})->name('contact-post'); 
