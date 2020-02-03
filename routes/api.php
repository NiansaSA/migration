<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'PetugasController@register');
Route::post('login', 'PetugasController@login');
Route::get('/', function(){
    return Auth::user()->level;
})->middleware('jwt.verify');

Route::get('user', 'PetugasController@getAuthenticatedUser')->middleware('jwt.verify');

#buku
Route::get('/index','BukuController@index')->middleware('jwt.verify');
Route::post('/simpan','BukuController@store')->middleware('jwt.verify');
Route::put('/ubah/{id}','BukuController@update')->middleware('jwt.verify');
Route::delete('/hapus/{id}','BukuController@destroy')->middleware('jwt.verify');
Route::get('/tampil','BukuController@tampil')->middleware('jwt.verify');

#anggota
Route::get('/index_anggota','AnggotaController@index')->middleware('jwt.verify');
Route::post('/simpan_anggota','AnggotaController@store')->middleware('jwt.verify');
Route::put('/ubah_anggota/{id}','AnggotaController@update')->middleware('jwt.verify');
Route::delete('/hapus_anggota/{id}','AnggotaController@destroy')->middleware('jwt.verify');
Route::get('/tampil_anggota','AnggotaController@tampil')->middleware('jwt.verify');

#peminjaman
Route::get('/index_peminjaman','PeminjamanController@index')->middleware('jwt.verify');
Route::post('/simpan_peminjaman','PeminjamanController@store')->middleware('jwt.verify');
Route::put('/ubah_peminjaman/{id}','PeminjamanController@update')->middleware('jwt.verify');
Route::delete('/hapus_peminjaman/{id}','PeminjamanController@destroy')->middleware('jwt.verify');
Route::get('/tampil_peminjaman','PeminjamanController@tampil')->middleware('jwt.verify');

#peminjaman
Route::post('/simpan_detail','PeminjamanController@simpan')->middleware('jwt.verify');
Route::put('/ubah_detail/{id}','PeminjamanController@ubah')->middleware('jwt.verify');
Route::delete('/hapus_detail/{id}','PeminjamanController@hapus')->middleware('jwt.verify');
