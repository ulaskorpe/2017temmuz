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



Route::get('/',array('as'=>'giris','uses'=>'girisController@giris'));

Route::get('/logout',array('as'=>'logout','uses'=>'ulasController@logout'));

Route::get('/personel',array('as'=>'personel','uses'=>'ulasController@personel'));
Route::post('/personelIslem',array('as'=>'personelIslem','uses'=>'ulasController@personelIslem'));
Route::get('/personel/sil/{id?}',array('as'=>'personelSil','uses'=>'ulasController@personelSil'));
Route::get('/personel/guncelle/{id?}',array('as'=>'personelGuncelle','uses'=>'ulasController@personelGuncelle'));


Route::get('/departmanlar',array('as'=>'departmanlar','uses'=>'departmanController@departmanlar'));
Route::post('/departmanIslem',array('as'=>'departmanIslem','uses'=>'departmanController@departmanIslem'));
Route::get('/departmanlar/guncelle/{id?}',array('as'=>'departmanGuncelle','uses'=>'departmanController@departmanGuncelle'));
Route::get('/departmanlar/sil/{id?}',array('as'=>'departmanSil','uses'=>'departmanController@departmanSil'));
Route::post('/departmanAtaveSil',array('as'=>'departmanAtaveSil','uses'=>'departmanController@departmanAtaveSil'));

//Route::post('/postLogin',array('as'=>'postLogin','uses'=>'ulasController@postLogin'));
///Route::post('/postLogin',array('as'=>'postLogin','uses'=>'ulasController@postLogin'));

Route::get('/profil',array('as'=>'profil','uses'=>'UserController@profil'));
Route::post('/profilUpdate',array('as'=>'profil','uses'=>'UserController@profilUpdate'));
Route::post('/profilSifre',array('as'=>'profil','uses'=>'UserController@profilSifre'));


Route::get('/dosyalar/{personel_id?}',array('as'=>'dosyalar','uses'=>'dosyaController@dosyalar'));
Route::post('/dosyaYukle',array('as'=>'dosyaYukle','uses'=>'dosyaController@dosyaYukle'));
Route::get('/dosyalar/sil/{id?}',array('as'=>'dosyaSil','uses'=>'dosyaController@dosyaSil'));

Route::get('/izinler/{personel_id?}',array('as'=>'izinler','uses'=>'izinController@izinler'));
Route::get('/izinler/guncelle/{id?}',array('as'=>'izinGuncelle','uses'=>'izinController@izinGuncelle'));
Route::get('/izinler/sil/{id?}',array('as'=>'izinSil','uses'=>'izinController@izinSil'));

Route::post('/izinIslem',array('as'=>'izinEkle','uses'=>'izinController@izinIslem'));
Route::get('/izinSil',array('as'=>'izinSil','uses'=>'izinController@izinSil'));




///Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/home', 'HomeController@home')->name('home');
