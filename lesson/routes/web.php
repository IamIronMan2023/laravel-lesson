<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

//Note: Original code

Route::get('/', function () {
    return view('welcome');
});


//----------Routes return string------
//Notes: You can return string rather than view

// Route::get('/', function () {
//     return "Hello World!";
// });

// Route::get('/home', function () {
//     return "Home";
// });

// Route::get('/about', function () {
//     return "About";
// });



//----------Different Routes
//Note: double colon means its static method or properties
/*
Route::get();
Route::post();
Route::put(); //for update and edit, replace whole data
Route::patch(); //for update and edit, replace partial data, not use often put is better
Route::delete();
Route::option();
*/


//----------Route match
// Route::match(['get', 'post'], '/', function () {
//     return 'Route Match GET and POST Request';
// });

//Will show error if GET request is access
//Show error message
// Route::match(['post'], '/', function () {
//     return 'Route Match POST Request';
// });

//----------Route any
// Route::any('/', function () {
//     return 'Route Any';
// });

//----------Shorten Route call no function
//Route::view('/welcome', 'welcome');

//----------Redirection
// Route::get('/', function () {
//     return 'Redirected';
// });

// Route::redirect('/welcome', '/');


//----------Request
// Route::get(
//     '/users',
//     function (Request $request) {
//         dd($request);
//         return null;
//     }
// );

//----------Response
//Notes: Website for http status codes https://developer.mozilla.org/en-US/docs/Web/HTTP/Status 

Route::get('/fetch-data', function () {
    return response('Hello World!', 200)
        ->header('Content-Type', 'text/plain');
});

//----------Response with parameter
Route::get('/fetch-data/{id}', function ($id) {
    return response($id, 200)
        ->header('Content-Type', 'text/plain');
});

//----------Response with multiple parameter
Route::get('/fetch-data/{id}/{page}', function ($id, $page) {
    return response($id . ' ' . $page, 200)
        ->header('Content-Type', 'text/plain');
});


//----------Response with json
Route::get('/request-json', function () {
    return response()
        ->json(['first_name' => 'Juan', 'last_name' => 'Dela Cruz']);
});


//----------Response with download
Route::get('/request-download', function () {
    $path = public_path() . '/download-file.txt';
    $name = 'download-file.txt';
    $header = array('Content-Type: application/text-plain');

    return response()->download($path, $name, $header);
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/userList', [UserController::class, 'list']);

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employee/{id}', [EmployeeController::class, 'index']);


Route::post('/store', [EmployeeController::class, 'store']);
