<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeApiController;
use App\Http\Controllers\LoginApiController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/employees', [EmployeeApiController::class, 'index']);
    Route::get('/employee/show/{id}', [EmployeeApiController::class, 'show']);
    Route::post('/employee/create', [EmployeeApiController::class, 'store']);
    Route::put('/employee/update/{id}', [EmployeeApiController::class, 'update']);
    Route::delete('/employee/delete/{id}', [EmployeeApiController::class, 'destroy']);
    Route::post('/logout', [LoginApiController::class, 'logout']);
});

Route::post('/login', [LoginApiController::class, 'login']);
