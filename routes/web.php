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

if(empty(Session::get('sayfa'))){
	Session::put('sayfa',1);
}
Auth::routes();
/*Route::get('/', function () {
    return view('layouts.giris');
});array('as'=>'giris','uses'=>'ulasController@giris')*/


//Route::get('login',array('as'=>'login','uses'=>'UserController@login'));



Route::get('/',array('as'=>'giris','uses'=>'ulasController@giris'));

Route::get('/logout',array('as'=>'logout','uses'=>'ulasController@logout'));
Route::get('/personel',array('as'=>'personel','uses'=>'ulasController@personel'));
Route::post('/personelIslem',array('as'=>'personelIslem','uses'=>'ulasController@personelIslem'));

//Route::post('/postLogin',array('as'=>'postLogin','uses'=>'ulasController@postLogin'));
///Route::post('/postLogin',array('as'=>'postLogin','uses'=>'ulasController@postLogin'));

Route::get('/profil',array('as'=>'profil','uses'=>'UserController@profil'));

Route::get('/personel/sil/{id?}',array('as'=>'personelSil','uses'=>'ulasController@personelSil'));
Route::get('/personel/guncelle/{id?}',array('as'=>'personelSil','uses'=>'ulasController@personelGuncelle'));

Route::get('/departmanlar',array('as'=>'departmanlar','uses'=>'ulasController@departmanlar'));



///Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@home')->name('home');
