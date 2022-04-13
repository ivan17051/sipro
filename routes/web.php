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

Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/',function(){
        return redirect('/transaksi');
    });
    Route::put('/ubah-password', 'PasswordController@update');
    
    Route::get('/pegawai', 'DataMasterController@pegawai');
    Route::put('/pegawai', 'DataMasterController@storeUpdatePegawai')->name('pegawai.update');
    Route::delete('/pegawai', 'DataMasterController@deletePegawai')->name('pegawai.delete');
    
    Route::get('/barang', 'DataMasterController@golongan');
    Route::put('/barang', 'DataMasterController@storeUpdateGolongan')->name('golongan.update');
    
    Route::get('/stok', 'DataMasterController@jabatan');
    Route::put('/stok', 'DataMasterController@storeUpdateJabatan')->name('jabatan.update');
    
    Route::get('/transaksi', 'TransaksiController@index');
    Route::put('/transaksi', 'TransaksiController@storeUpdate')->name('transaksi.update');
    Route::delete('/transaksi', 'TransaksiController@delete')->name('transaksi.delete');
});