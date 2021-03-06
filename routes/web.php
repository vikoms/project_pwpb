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


// Route::get('/signup/create', 'UserController@SignUp');
// Route::post('/signup', 'UserController@postSignUp');

Route::get('/', function () {
    return view('home.home');
});


Route::get('/data-dokter/{id}/edit', 'dokterController@edit');
Route::patch('/data-dokter/{id}', 'dokterController@update');
Route::delete('/data-dokter/{id}', 'dokterController@destroy');



// Route Pasien
Route::get('/pasien', 'pasienController@index');
Route::get('pasien/add-pasien', 'pasienController@input');
Route::post('/pasien', 'pasienController@store');
Route::get('/pasien/{id}/edit', "pasienController@edit");
Route::patch('/pasien/{id}', 'pasienController@update');
Route::delete('/pasien/{id}', 'pasienController@destroy');


//  Route Spesialis
Route::get('/data-spesialis', 'SpesialisController@index');


Route::get('/data-ruangan', 'RuanganController@index');
Route::post('/data-ruangan/add', 'RuanganController@store');
Route::patch('/data-ruangan/update', 'RuanganController@update');
Route::delete('/data-ruangan/delete', 'RuanganController@destroy');

// Data Gedung

Route::get('/data-gedung', 'GedungController@index');
Route::post('/data-gedung/add', 'GedungController@store');
Route::patch('/data-gedung/update', 'GedungController@update');
Route::delete('/data-gedung/delete', 'GedungController@destroy');

Route::get('main-pendaftaran', 'PendaftaranController@index');

Route::get('main-tempat-tidur', 'TempatTidurController@index');
Route::get('main-tempat-tidur/add', 'TempatTidurController@input');


Route::get('main-rawat-jalan', 'RawatJalanController@index');
Route::get('main-rawat-jalan/add', 'RawatJalanController@input');
