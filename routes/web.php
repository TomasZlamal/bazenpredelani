<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('index');
Route::view('/kontakty', 'nastym');
Route::view('/clanek', 'clanek');
Route::view('/komponenty', 'komponenty');
Route::view('/dostupnost', 'dostupnost')->name('dostupnost');
Route::view('/bazen', 'bazen')->name('bazen');
Route::view('/wellness', 'wellness')->name('wellness');
Route::view('/cenik', 'cenik')->name('cenik');
Route::view('/ubytovani', 'ubytovani')->name('ubytovani');
Route::view('/sluzby', 'sluzby')->name('sluzby');
