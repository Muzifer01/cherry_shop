<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class,'index']);
Route::get('/login', [LoginController::class,'login']);
Route::get('/register', [LoginController::class,'register']);
Route::get('/car_shop/{arg}', [LoginController::class,'car_shop']);
Route::get('/car_shop', [LoginController::class,'car_shop']);