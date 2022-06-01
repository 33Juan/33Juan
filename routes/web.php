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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/checking', [App\Http\Controllers\HomeController::class, 'checking'])->name('checking');

Route::post('/checking', [App\Http\Controllers\HomeController::class, 'store'])->name('checking.store');

Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');

Route::get('/fichajes', [App\Http\Controllers\HomeController::class, 'fichajes'])->name('fichajes');

// Route::get('/fichajes{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('show');

Route::put('/fichajes/{picaje}', [App\Http\Controllers\HomeController::class, 'update'])->name('fichajes.update');


Route::get('/fichajes{picaje}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('fichajes.edit');

Auth::routes();
