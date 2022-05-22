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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

// Route::get('profile', 'ProfileController@index');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');