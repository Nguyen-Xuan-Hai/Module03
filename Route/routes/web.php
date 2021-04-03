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

//Route::get('/', function () {
//    echo "<h2>This is Home page</h2>";
//});
//Route::get('/about', function () {
//    echo "<h2>This is About page</h2>";
//});
//Route::get('/contact', function () {
//    echo "<h2>This is Contact page</h2>";
//});
//Route::get('/user', function () {
//    return view('user',['name'=>'Masud Alam']);
//});
//Route::get('user/{name}',function ($name){
//    echo "<h2>User name is $name</h2>";
//});
//Route::get('/user-name{name?}',function ($name = 'Sohel'){
//    echo "<h2>User name is $name</h2>";
//});
//Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
//Time zone
//Route::get('/',function (){
//    return view('index');
//});
//Route::get('/{timezone}',function ($timezone = null){
//   if (!empty($timezone)){
//       //Khoi tao gia tri gio theo mui gio UTC
//       $time = new DateTime(date('Y-m-d H:i:s'),new DateTimeZone('UTC'));
//       //Thay doi ve mui gio duocc chon
//       $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));
//       // Hiển thị giờ theo định dạng mong muốn
//       echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
//
//   }
//   return view('index');
//});
//Task managerment
// Tạo 1 nhóm route với tiền tố customer
//Route::prefix('customer')->group(function () {
//    Route::get('show', function () {
//        // Hiển thị danh sách khách hàng
//        return view('show');
//    });
//
//    Route::get('create', function () {
//        // Hiển thị Form tạo khách hàng
//    });
//
//    Route::post('store', function () {
//        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
//    });
//
//    Route::get('{id}/show', function () {
//        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
//    });
//
//    Route::get('{id}/edit', function () {
//        // Hiển thị Form chỉnh sửa thông tin khách hàng
//    });
//
//    Route::patch('{id}/update', function () {
//        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
//    });
//
//    Route::delete('{id}', function () {
//        // Xóa thông tin dữ liệu khách hàng
//    });
//});
//Task Manager 2
Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::prefix('users')->group(function () {
        Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::get('/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
        Route::post('/create', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
        Route::get('/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    });
});
