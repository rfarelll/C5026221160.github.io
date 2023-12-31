<?php

use Illuminate\Support\Facades\Route;

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
Route::get('blog', function () {
    return view('blog');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('meet1', function () {
    return view('meet1');
});
Route::get('meet2', function () {
    return view('meet2');
});
Route::get('meet3', function () {
    return view('meet3');
});
Route::get('meet4-1', function () {
    return view('meet4-1');
});
Route::get('meet4-2', function () {
    return view('meet4-2');
});
Route::get('meet5-1', function () {
    return view('meet5-1');
});
Route::get('meet5-2', function () {
    return view('meet5-2');
});
Route::get('meet6', function () {
    return view('meet6');
});
Route::get('meet7', function () {
    return view('meet7');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\Dosen@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home') ;
});

Route::get('/blog/tentang', function () {
    return view('tentang') ;
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


//Route Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//Route Database Flashdisk
Route::get('/flashdisk','App\Http\Controllers\FlashdiskController@index');
Route::get('/flashdisk/tambah','App\Http\Controllers\FlashdiskController@tambah');
Route::post('/flashdisk/store','App\Http\Controllers\FlashdiskController@store');
Route::get('/flashdisk/edit/{kodeflashdisk}','App\Http\Controllers\FlashdiskController@edit');
Route::post('/flashdisk/update','App\Http\Controllers\FlashdiskController@update');
Route::get('/flashdisk/hapus/{kodeflashdisk}','App\Http\Controllers\FlashdiskController@hapus');
Route::get('/flashdisk/view/{kodeflashdisk}','App\Http\Controllers\FlashdiskController@view');

//Route Keranjang Belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//Route Soal CC
Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::post('/kategori/hasil', 'App\Http\Controllers\KategoriController@hasil');
