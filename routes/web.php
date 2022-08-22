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
    return redirect('/user');
});


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/user/edit/{user_id}',[App\Http\Controllers\UserController::class,'edit'])->name('edit');
Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/{user_id}', [App\Http\Controllers\UserController::class, 'destroy']);
