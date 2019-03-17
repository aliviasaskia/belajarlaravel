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

Route::get('kategori', function(){
	return "Hello Kategori";
});

Route::resource('kategori', 'KategoriController');
Route::get('layout', function (){
    return view('layout.master');
});
Route::get('dashboard', function (){
    return view('dashboard.index');
});
Route::get('dashboard2', function (){
    return view('dashboard.dashboard');
});

Route::get('tabel', function(){
    return view('category.index');
});

Route::get('query', 'KategoriController@search');
Route::get('/hapus/destroy/{id}','KategoriController@destroy');
Route::post('/datakategori/update','KategoriController@update');
Route::get('/edit/edit/{id}','KategoriController@edit');
Route::post('/inputdata/store','KategoriController@store');

