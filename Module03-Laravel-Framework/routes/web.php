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
//Route::get('/Module03/{name?}', function ($name = null) {
//
//    if ($name) {
//
//        echo 'Hello ' . $name . '!';
//
//    } else {
//
//        echo 'Hello World!';
//
//    }
//
//});
;
//Login
//Route::post('/login', function (Illuminate\Http\Request $request) {
//    if ($request->username == 'admin'
//        && $request->password == 'admin') {
//        return view('welcome_admin');
//    }
//
//    return view('login_error');
//});

//DiscountAmount
//Route::get('/show', function () {
//    return view('show');
//});
//Route::post('/discount', function (Illuminate\Http\Request $request) {
//    $listPrice = $request->listPrice;
//    $discountPercent = $request->discountPercent;
//    $discountAmount = $listPrice * $discountPercent * 0.1;
////    dd($discountAmount);
//        return view('discount', compact(['discountAmount']));
//});
//
//dictionary
Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/show_dictionary', function (Illuminate\Http\Request $request) {
    $dictionary = $request->dictionary;
    $texts[] = array('ga'=>'chicken','cho'=>'dog');
//    $max = null;
    foreach ($texts as $text){
        $max = $text[$dictionary];
    }
    return view('show_dictionary',compact(['dictionary','max']));
});
