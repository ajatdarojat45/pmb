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


Route::get('/', 'PublicController@index')->name('home');

Route::get('/home', function () {
    return view('publics.index');
});

Auth::routes();

Route::get('/home', 'PublicController@index')->name('home');
Route::get('/daftar', 'HomeController@daftar')->name('daftar');

Route::get('/desa/autoComplete', 'DesaController@autoComplete')->name('desa/autoComplete');

Route::get('/detailKelas/{id}', 'KelasController@detailKelas')->name('detailKelas');

Route::get('/peserta/serach', 'PesertaController@search')->name('peserta/search');
Route::post('/peserta/storeNew', 'PesertaController@storeNew')->name('peserta/storeNew');
Route::get('/peserta/berhasil/{code}', 'PesertaController@berhasil')->name('peserta/berhasil');
Route::post('/peserta/storeMember', 'PesertaController@storeMember')->name('peserta/storeMember');

Route::post('/payment/store', 'PaymentController@store')->name('payment/store');

Route::get('/daftarKelas', 'KelasController@daftarKelas')->name('daftarKelas');

Route::group(['middleware' => 'admin'], function(){
	Route::get('/dashboard', function () {
    	return view('dashboard');
	})->name('dashboard');

	Route::get('/peserta/{param}/index', 'PesertaController@index')->name('peserta/index');

	Route::get('/peraturan', 'KelasController@peraturan')->name('peraturan');
	Route::post('/updatePeraturan', 'KelasController@updatePeraturan')->name('updatePeraturan');

	Route::get('/payment/{stat}/index', 'PaymentController@index')->name('payment/index');
	Route::get('/payment/{id}/index/{stat}', 'PaymentController@validasi')->name('payment/validasi');

	Route::get('/kelas/index', 'KelasController@index')->name('kelas/index');
	Route::get('/kelas/create', 'KelasController@create')->name('kelas/create');
	Route::post('/kelas/store', 'KelasController@store')->name('kelas/store');
});
