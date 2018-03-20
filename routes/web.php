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
    return view('Home.index');
});
Route::get('/home2','HomeController@show');
Route::get('/hin','HomeController@index');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/gallery', function () {
    return view('admin.gallery');
});

Route::get('/test', function () {
    return view('test');
});


Route::resource('/salon', 'SalonController');

Route::resource('/jayegah', 'JaegahController');

Route::resource('/seminar', 'SeminarController');

Route::resource('/gallery', 'GalleryController');

Route::resource('/roidad', 'RoidadController');

Route::resource('/slider', 'SliderController');
