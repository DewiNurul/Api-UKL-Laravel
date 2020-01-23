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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

    //petugas
    Route::post('petugas', 'UserController@store');
    Route::put('petugas/{id}', 'UserController@ubah');
    Route::get('petugas', 'UserController@getAll');
    Route::get('login/check', 'UserController@getAuthenticatedUser');
    Route::delete('petugas/{id}', 'UserController@delete');

    Route::post('siswa', 'SiswaController@store');
    Route::put('siswa/{id}', 'SiswaController@ubah');
    Route::get('siswa', 'SiswaController@getAll');
    Route::delete('siswa/{id}', 'SiswaController@delete');

    Route::post('pelanggaran', 'PelanggaranController@store');
    Route::put('pelanggaran/{id}', 'PelanggaranController@update');
    Route::get('pelanggaran', 'PelanggaranController@index');
    Route::delete('pelanggaran/{id}', 'PelanggaranController@destroy');

    Route::post('poin', 'PoinSiswaController@store');
    Route::put('poin/{id}', 'PoinSiswaController@update');
    Route::get('poin', 'PoinSiswaController@index');
    Route::delete('poin/{id}', 'PoinSiswaController@destroy');
    Route::get('poin_siswa', 'PoinSiswaController@detail');
    Route::post('poin_siswa', 'PoinSiswaController@find');

    Route::get('beranda/statistik', 'DashBoardController@dashboard');