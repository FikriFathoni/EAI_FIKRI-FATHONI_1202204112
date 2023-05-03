<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarRoomController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/car-room', [CarRoomController::class, 'index']);
Route::get('/car-room/{id}', [CarRoomController::class, 'show']);
Route::post('/car-room', [CarRoomController::class, 'store']);
Route::put('/car-room/{id}', [CarRoomController::class, 'update']);
Route::get('/car-rooms/available', [CarRoomController::class, 'getAvailable']);
Route::get('/car-rooms/unavailable', [CarRoomController::class, 'getUnavailable']);
Route::delete('/car-room/{id}', [CarRoomController::class,'destroy']);