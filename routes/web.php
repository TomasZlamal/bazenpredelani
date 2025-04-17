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
    return view('homepage');
});

Route::get('/bazen', function () {
    return view('bazen');
});
Route::get('/dostupnost', function () {
    return view('dostupnost');
});
Route::get('/sauna', function () {
    return view('sauna');
});
Route::get('/cenik', function () {
    return view('cenik');
});
Route::get('/ubytovani', function () {
    return view('ubytovani');
});
Route::get('/ostatnisluzby', function () {
    return view('sluzby');
});
Route::get("/kontakty", function () {
    return view('nastym');
});
Route::get("/clanek", function () {
    return view('clanek');
});
Route::get("/komponenty", function () {
    return view('komponenty');
});
Route::view('/', 'homepage')->name('index');
Route::view('/dostupnost', 'dostupnost')->name('dostupnost');
Route::view('/bazen', 'bazen')->name('bazen');
Route::view('/wellness', 'wellness')->name('wellness');
Route::view('/cenik', 'cenik')->name('cenik');
Route::view('/ubytovani', 'ubytovani')->name('ubytovani');
Route::view('/sluzby', 'sluzby')->name('sluzby');
