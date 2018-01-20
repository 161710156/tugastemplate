	<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/quote', function () {
    return view('quotes');
});
Route::get('/paragrap', function () {
    return view('paragrap');
});
Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('data','SiswaController@sudoku');
