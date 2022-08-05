<?php

use App\Http\Controllers\InstansiController;
use App\Http\Controllers\UserController;
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
Route::get('/register',  [UserController::class, 'register']);
Route::get('/login',  [UserController::class, 'login']);

Route::post('/user/register', [UserController::class, 'store']);
Route::post('/user/login', [UserController::class, 'auth']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/instansi',  [InstansiController::class, 'index']);
Route::get('/instansi/create',  [InstansiController::class, 'create']);
Route::post('/instansi',  [InstansiController::class, 'store']);
Route::get('/instansi/{instansi}/edit',  [InstansiController::class, 'edit']);
Route::put('/instansi/{instansi}',  [InstansiController::class, 'update']);
