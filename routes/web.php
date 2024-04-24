<?php

use App\Http\Controllers\AdminController;
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
    return view('template.forms-basic-inputs');
});
Route::get('loginn',[AdminController::class,'logina']);
//dashboard
Route::get('dashboard',[AdminController::class,'dash']);


//buku
Route::get('buku',[AdminController::class,'databuku']);
Route::post('buku',[AdminController::class,'tbbukus']);
Route::get('bedit/{id}',[AdminController::class,'editbuku']);
Route::post('bedit/{id}',[AdminController::class,'editbukus']);
//pasok
Route::get('pasok',[AdminController::class,'datapasok']);
//kasir
Route::get('kasir',[AdminController::class,'datakasir']);
Route::get('tambahkasir',[AdminController::class,'tbkasir']);
Route::post('tambahkasir',[AdminController::class,'tbkasirs']);


