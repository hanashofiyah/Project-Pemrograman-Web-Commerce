<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
// use Auth;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/pesan/{id}', [PesanController::class, 'index'])->name('pesan');
Route::post('/pesan/{id}', [PesanController::class, 'pesan']);

Route::get('/check-out', [PesanController::class, 'check_out'])->name('check_out');
Route::delete('/check-out/{id}', [PesanController::class, 'delete']);
Route::get('/konfirmasi-check-out', [PesanController::class, 'konfirmasi'])->name('konfirmasi');

// Route::get('profile', 'ProfileController@index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'update']);

Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/history/{id}', [HistoryController::class, 'detail']);