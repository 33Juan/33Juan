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
<<<<<<< HEAD

Route::post('/checking', [App\Http\Controllers\HomeController::class, 'store'])->name('checking.store');
=======
>>>>>>> a8bb7d62ba8a50e8fb412879e9af2f2264a0df60

Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');

Route::get('/fichajes', [App\Http\Controllers\HomeController::class, 'fichajes'])->name('fichajes');


Auth::routes();
