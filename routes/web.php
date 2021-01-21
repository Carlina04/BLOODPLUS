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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adminnav', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::get('/form', [App\Http\Controllers\UserController::class, 'index'])->name('form');
Route::post('createuser',[UserController::class,'store']);
Route::get('/userpage', [App\Http\Controllers\UserController::class, 'idx'])->name('userpage');
Route::get('/uuser', [App\Http\Controllers\UserController::class, 'user'])->name('uuser');
Route::put('/updateuser', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('deleteuser',[UserController::class,'destroy']);

Route::get('/allusers', [App\Http\Controllers\UserController::class, 'allusers'])->name('allusers');

Route::get('/myrequests', [App\Http\Controllers\RequestController::class, 'index'])->name('myrequests');
Route::get('/request', [App\Http\Controllers\RequestController::class, 'req'])->name('request');
Route::get('/allrequests', [App\Http\Controllers\RequestController::class, 'allreq'])->name('allrequests');
Route::post('createreq', [App\Http\Controllers\RequestController::class, 'store']);
Route::delete('deletereq', [App\Http\Controllers\RequestController::class, 'destroy']);

Route::get('/hospitals', [App\Http\Controllers\HosController::class, 'index'])->name('hospitals');
Route::get('/allhospitals', [App\Http\Controllers\HosController::class, 'allhos'])->name('allhospitals');
Route::get('/addhospital', [App\Http\Controllers\HosController::class, 'addhos'])->name('addhospital');
Route::get('/edithospital', [App\Http\Controllers\HosController::class, 'edithos'])->name('edithospital');
Route::post('addhos', [App\Http\Controllers\HosController::class, 'store']);
Route::delete('deletehos', [App\Http\Controllers\HosController::class, 'destroy']);
Route::put('edithos', [App\Http\Controllers\HosController::class, 'update']);
 