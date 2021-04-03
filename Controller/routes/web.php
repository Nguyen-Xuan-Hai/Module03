<?php

use App\Http\Controllers\AuthController;
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

Route::get('Register', [AuthController::class,'showFromRegister'])->name('auth.showFromRegister');
Route::post('Register',[AuthController::class,'register'])->name('auth.register')->middleware('CheckAge');
