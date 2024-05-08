<?php

use App\Http\Controllers\Backend;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::resource('/data',Backend::class);
Route::get('/index', [Backend::class, 'index']);

// Route untuk halaman login (GET)
Route::get('/', [AuthController::class, 'index'])->name('login');
// Route untuk proses login (POST)
Route::post('/', [AuthController::class, 'login']);

// Route untuk halaman register
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

