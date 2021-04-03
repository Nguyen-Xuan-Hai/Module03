<?php

use App\Http\Controllers\Bill_detailController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
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
    return view('home');
});
Route::prefix('products')->group(function (){
        Route::get('/',[ProductController::class,'index'])->name('products.index');
        Route::get('/create',[ProductController::class,'create'])->name('products.create');
        Route::post('/create',[ProductController::class,'store'])->name('products.store');
        Route::get('/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
        Route::post('/{id}/edit',[ProductController::class,'update'])->name('products.update');
        Route::get('/{id}/delete',[ProductController::class,'delete'])->name('products.delete');
    });
Route::prefix('customers')->group(function (){
    Route::get('/',[CustomerController::class,'index'])->name('customers.index');
    Route::get('/create',[CustomerController::class,'create'])->name('customers.create');
    Route::post('/create',[CustomerController::class,'store'])->name('customers.store');
    Route::get('/{id}/edit',[CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/{id}/edit',[CustomerController::class,'update'])->name('customers.update');
    Route::get('/{id}/delete',[CustomerController::class,'delete'])->name('customers.delete');
});
Route::prefix('bills')->group(function (){
    Route::get('/',[BillController::class,'index'])->name('bills.index');
    Route::get('/create',[BillController::class,'create'])->name('bills.create');
    Route::post('/create',[BillController::class,'store'])->name('bills.store');
    Route::get('/{id}/edit',[BillController::class,'edit'])->name('bills.edit');
    Route::post('/{id}/edit',[BillController::class,'update'])->name('bills.update');
    Route::get('/{id}/delete',[BillController::class,'delete'])->name('bills.delete');
});
Route::prefix('bill_details')->group(function (){
    Route::get('/',[Bill_detailController::class,'index'])->name('bill_details.index');
    Route::get('/create',[Bill_detailController::class,'create'])->name('bill_details.create');
    Route::post('/create',[Bill_detailController::class,'store'])->name('bill_details.store');
    Route::get('/{id}/edit',[Bill_detailController::class,'edit'])->name('bill_details.edit');
    Route::post('/{id}/edit',[Bill_detailController::class,'update'])->name('bill_details.update');
    Route::get('/{id}/delete',[Bill_detailController::class,'delete'])->name('bill_details.delete');
});


//Route::prefix('admin')->group(function () {
//    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
//    Route::prefix('users')->group(function () {
//        Route::get('/', [UserController::class, 'index'])->name('users.index');
//        Route::get('/create', [UserController::class, 'create'])->name('users.create');
//        Route::post('/create', [UserController::class, 'store'])->name('users.store');
//        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
//        Route::post('/{id}/edit', [UserController::class, 'update'])->name('users.update');
//        Route::get('/{id}/delete', [UserController::class, 'delete'])->name('users.delete');
//    });
//    Route::prefix('products')->group(function (){
//        Route::get('/',[ProductController::class,'index'])->name('products.index');
//        Route::get('/create',[ProductController::class,'create'])->name('products.create');
//        Route::post('/create',[ProductController::class,'store'])->name('products.store');
//        Route::get('/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
//        Route::post('/{id}/edit',[ProductController::class,'update'])->name('products.update');
//        Route::get('/{id}/delete',[ProductController::class,'delete'])->name('products.delete');
//    });
//});
