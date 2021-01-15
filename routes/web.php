<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form', [App\Http\Controllers\UserController::class, 'index'])->name('form');
Route::post('createuser',[UserController::class,'store']);

Route::get('/requests', [App\Http\Controllers\RequestController::class, 'index'])->name('requests');
Route::get('/request', [App\Http\Controllers\RequestController::class, 'req'])->name('request');
Route::post('createreq', [App\Http\Controllers\RequestController::class, 'store']);
Route::get('/hospitals', [App\Http\Controllers\HosController::class, 'index'])->name('hospitals');
Route::delete('deletereq', [App\Http\Controllers\RequestController::class, 'destroy']);