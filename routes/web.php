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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setting', [App\Http\Controllers\HomeController::class, 'changeSetting'])->name('changeSetting');
Route::post('/setting', [App\Http\Controllers\HomeController::class, 'saveSetting'])->name('saveSetting');
Route::post('/getData', [App\Http\Controllers\HomeController::class, 'getData']);
Route::post('/', [App\Http\Controllers\HomeController::class, 'alertSave'])->name('alert_save');
