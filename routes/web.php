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
Route::get('/userpage', [App\Http\Controllers\UserController::class, 'idx'])->name('userpage');
Route::get('/uuser', [App\Http\Controllers\UserController::class, 'user'])->name('uuser');
Route::put('/updateuser', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('deleteuser',[RoomController::class,'destroy']);

