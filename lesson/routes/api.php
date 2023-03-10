<?php

use App\Http\Controllers\EmployeeApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

//Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/employees', [EmployeeApiController::class, 'index']);
    Route::post('/logout', [LoginApiController::class, 'logout']);
});

Route::post('/login', [LoginApiController::class, 'login']);


Route::get('/employee/show/{id}', [EmployeeApiController::class, 'show']);
Route::post('/employee/store', [EmployeeApiController::class, 'store']);
Route::put('/employee/update/{id}', [EmployeeApiController::class, 'update']);
Route::delete('/employee/delete/{id}', [EmployeeApiController::class, 'destroy']);
