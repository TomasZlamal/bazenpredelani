<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('index');
Route::view('/dostupnost', 'dostupnost')->name('dostupnost');
Route::view('/bazen', 'bazen')->name('bazen');
Route::view('/wellness', 'wellness')->name('wellness');
Route::view('/cenik', 'cenik')->name('cenik');
Route::view('/kontakt', 'kontakt')->name('kontakt');
Route::view('/caste-otazky', 'faq')->name('faq');
Route::view('/dokumenty', 'dokumenty')->name('dokumenty');

Route::view('/sluzby', 'sluzby')->name('sluzby');
Route::prefix('/sluzby')->group(function () {
	Route::view('/ubytovani', 'ubytovani')->name('ubytovani');
	Route::view('/modni-salon', 'modni-salon')->name('modni-salon');
});


// prehled komponentu
//Route::view('/komponenty', 'komponenty');

// Aktuality
//Route::view('/clanek{slug}', 'clanek');
