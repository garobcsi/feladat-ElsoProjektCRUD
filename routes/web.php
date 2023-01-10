<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
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

Route::get('/', [PhoneController::class, 'index'])->name("home");
Route::get('/phones/{id}',[PhoneController::class, 'show'])->whereNumber("id")->name('phones.show');
Route::get('/phones/create', [PhoneController::class, 'create'])->name('phones.create');
Route::post('/phones', [PhoneController::class, 'store'])->name('phones.store');
Route::delete('/phones/{id}',[PhoneController::class, 'destroy'])->name('phones.destroy');
