<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [\App\Http\Controllers\Printer::class, "login"]);
Route::get('/catalog', [\App\Http\Controllers\Printer::class, "catalog"]);
Route::get('/regist', [\App\Http\Controllers\Printer::class, "regist"]);

Route::get('/admin', function(){
    return view('admin.home');
});

Route::get('/kontrol', function(){
    return view('admin.kontrol_barang');
});


Route::prefix('/items')->group(function () {
    Route::get('/fetch', [\App\Http\Controllers\Printer::class, "fetch"]);
});

Route::prefix('/customer')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Printer::class, "regist"]);
    Route::get('/register', [\App\Http\Controllers\Printer::class, "regist"]);

});
