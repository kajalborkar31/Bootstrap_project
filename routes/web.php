<?php

use App\Http\Controllers\BootController;
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
Route::get('/form', function () {
    return view('form');
});
Route::get('/index', function () {
    return view('index');
});
Route::post('store',[BootController::class,'store'])->name('store');
Route::get('index',[BootController::class,'index'])->name('index');
Route::get('edit/{id}',[BootController::class,'edit'])->name('edit');
Route::post('update/{id}',[BootController::class,'update'])->name('update');
Route::get('delete/{id}',[BootController::class,'delete'])->name('delete');
