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

Route::get('/','BerandaController@index')->name('index');
Route::get('/contact','BerandaController@contact')->name('contact');
Route::get('/about-us','BerandaController@about')->name('about');
Route::get('/service','BerandaController@layananpemesanan')->name('layananpemesanan');
Route::get('/signup','BerandaController@signup')->name('signup');
Route::get('/signin','BerandaController@signin')->name('signin');
Route::get('/profil-costumer/{id}','BerandaController@profilcost')->name('profilcost');
Route::get('/profil-studio/{id}','BerandaController@profilstud')->name('profilstud');
Route::Auth();
Route::get('/tes','testController@index');

Route::prefix('admin')->group(function(){
	Route::get('', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/penerimaan1','AdminController@status1')->name('admin.status.submit1');
	Route::post('/penerimaan2','AdminController@status2')->name('admin.status.submit2');
	
});
Route::prefix('studio')->group(function(){
	Route::get('', 'StudioController@index')->name('studio.dashboard');
	Route::get('/login','Auth\StudioLoginController@showLoginForm')->name('studio.login');
	Route::post('/login','Auth\StudioLoginController@login')->name('studio.login.submit');
	Route::get('/register','Auth\StudioRegisterController@showRegisterForm')->name('studio.register');
	Route::post('/registere','Auth\StudioRegisterController@register')->name('studio.register.submit');
	Route::get('/sunting-profile','StudioController@suntingProfilForm')->name('studio.suntingprofil');
	Route::post('/sunting-profilee','StudioController@suntingprofil')->name('studio.suntingprofil.submit');
	Route::get('/permintaan','StudioController@permintaan')->name('studio.permintaan');
	Route::post('/permintaane','StudioController@permintaane')->name('studio.permintaan.submit');
	Route::get('/layanan','StudioController@layanan')->name('studio.layanan');
	Route::post('/layanane','StudioController@postlayanan')->name('studio.postlayanan');
	Route::get('/galery','StudioController@galery')->name('studio.galery');
	Route::post('/galerye','StudioController@galerye')->name('studio.galery.submit');
	Route::get('/pelaksanaan','StudioController@pelaksanaan')->name('studio.pelaksanaan');
	Route::get('/selesai','StudioController@selesai')->name('studio.selesai');
	
});
Route::prefix('costumer')->group(function(){
	Route::get('', 'CostumerController@index')->name('costumer.dashboard');
	Route::get('/login','Auth\CostumerLoginController@showLoginForm')->name('costumer.login');
	Route::post('/login','Auth\CostumerLoginController@login')->name('costumer.login.submit');
	Route::get('/register','Auth\CostumerRegisterController@showRegisterForm')->name('costumer.register');
	Route::post('/registere','Auth\CostumerRegisterController@register')->name('costumer.register.submit');
	Route::get('/sunting-profile','CostumerController@suntingProfilForm')->name('costumer.suntingprofil');
	Route::post('/sunting-profilee','CostumerController@suntingprofil')->name('costumer.suntingprofil.submit');
	Route::get('/pemesanan','CostumerController@pemesanan')->name('costumer.pemesanan');
	Route::get('/status-pemesanan','CostumerController@statuspemesanan')->name('costumer.statuspemesanan');
	Route::get('/konfirmasi-pemesanan','CostumerController@konfirmasipemesanan')->name('costumer.konfirmasipemesanan');
	Route::post('/konfirmasi-pemesanane','CostumerController@konfirmasipemesanane')->name('costumer.konfirmasipemesanan.submit');
	Route::get('/selesai-pemesanan','CostumerController@selesaipemesanan')->name('costumer.selesaipemesanan');
	Route::post('/pesan','CostumerController@pesan')->name('costumer.pesan');
	Route::post('/pesane','CostumerController@pesen')->name('costumer.pesan.submit');
});
