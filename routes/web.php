<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HoutelController;
use App\Http\Controllers\RoomController;
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
    return view('home.index');
});

Route::get('/bank', [BankController::class, 'index']);
Route::get('/City', [CityController::class, 'index']);
Route::get('/houtel', [HoutelController::class, 'index']);
Route::get('/room', [RoomController::class, 'index']);

//tambah data
Route::get('/City/tambah', [CityController::class, 'create']);
Route::get('/houtel/tambah', [HoutelController::class, 'create']);
Route::get('/room/tambah', [RoomController::class, 'create']);
Route::get('/bank/tambah', [BankController::class, 'create']);

Route::post('/city/store', [CityController::class, 'store']);
Route::post('/houtel/store', [HoutelController::class, 'store']);
Route::post('/room/store', [RoomController::class, 'store']);
Route::post('/bank/store', [BankController::class, 'store']);