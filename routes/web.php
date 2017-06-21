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

/*Route::get('/', function () {
    return view('layouts.giris');
});*/

Route::get('/',array('as'=>'giris','uses'=>'ulasController@giris'));

Route::get('/personel',array('as'=>'personel','uses'=>'ulasController@personel'));
Route::post('/personelIslem',array('as'=>'personelIslem','uses'=>'ulasController@personelIslem'));

//Route::post('/postLogin',array('as'=>'postLogin','uses'=>'ulasController@postLogin'));
Route::post('/postLogin',array('as'=>'postLogin','uses'=>'ulasController@postLogin'));

Route::get('/profil',array('as'=>'profil','uses'=>'UserController@profil'));

Route::get('/personel/sil/{id?}',array('as'=>'personelSil','uses'=>'ulasController@personelSil'));
Route::get('/personel/guncelle/{id?}',array('as'=>'personelSil','uses'=>'ulasController@personelGuncelle'));


Auth::routes();

///Route::get('/home', 'HomeController@index')->name('home');
