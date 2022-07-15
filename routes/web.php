<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    Route::get('kelas', 'KelasController@index')->name('kelas');
    Route::get('kelas/create', 'KelasController@create')->name('kelas.create');
    Route::post('kelas', 'KelasController@insert')->name('kelas.store');
    Route::get('kelas/edit/{kelas}', 'KelasController@edit')->name('kelas.edit');
    Route::put('kelas', 'KelasController@update')->name('kelas.update');
    Route::delete('kelas', 'KelasController@delete')->name('kelas.delete');

    Route::get('siswa', 'SiswaController@index')->name('siswa');
    Route::get('siswa/create', 'SiswaController@create')->name('siswa.create');
    Route::post('siswa', 'SiswaController@insert')->name('siswa.store');
    Route::get('siswa/edit/{siswa}', 'SiswaController@edit')->name('siswa.edit');
    Route::put('siswa', 'SiswaController@update')->name('siswa.update');
    Route::delete('siswa', 'SiswaController@delete')->name('siswa.delete');

    Route::get('transaksi', 'TransaksiController@index')->name('transaksi');
    Route::get('transaksi/create', 'TransaksiController@create')->name('transaksi.create');
    Route::post('transaksi', 'TransaksiController@insert')->name('transaksi.store');
    Route::get('transaksi/edit/{transaksi}', 'TransaksiController@edit')->name('transaksi.edit');
    Route::put('transaksi', 'TransaksiController@update')->name('transaksi.update');
    Route::delete('transaksi', 'TransaksiController@delete')->name('transaksi.delete');

    Route::get('user', 'userController@index')->name('user');
    Route::get('user/create', 'userController@create')->name('user.create');
    Route::post('user', 'userController@insert')->name('user.store');
    Route::get('user/edit/{user}', 'userController@edit')->name('user.edit');
    Route::put('user', 'userController@update')->name('user.update');
    Route::delete('user', 'userController@delete')->name('user.delete');
});

