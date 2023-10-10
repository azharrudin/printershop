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
Route::get('/home', [\App\Http\Controllers\Printer::class, "home"]);

Route::prefix('/items')->group(function () {
Route::get('/fetch', [\App\Http\Controllers\Printer::class, "fetch"]);
});

