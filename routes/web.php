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
Route::get('/login',[\App\Http\Controllers\logInController::class,'login']);
Route::post('/login',[\App\Http\Controllers\logInController::class,'login_check'])->name('login');

Route::get('/index',[\App\Http\Controllers\indexController::class,'index']);

Route::get('/students',[\App\Http\Controllers\adminController::class,'students']);
Route::get('/classes',[\App\Http\Controllers\adminController::class,'classes']);
