<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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
    return '<h1>Hello World!</h1>';
});

Route::get('/home', function () {
    return '<h1>Home</h1>';
});


/*
  Route::get();
  Route::post();
  Route::put();
  Route::patch();
  Route::delete();
  Route::option();
*/


Route::match(['get', 'post'], '/get-post', function () {
    return 'Route match GET and POST';
});


Route::any('/any', function () {
    return 'Any Reqeust';
});

Route::view('/welcome', 'welcome');

Route::redirect('/redirect', '/');


// Route::get('/users', function (Request $request) {
//     dd($request);
//     return null;
// });

Route::get('/request-json', function () {
    return response()->json(['first_name' => 'Juan', 'last_name' => 'Dela Cruz']);
});


Route::get('/change-content-type', function () {
    return response('Change Content Type', 200)->header('Content-Type', 'text/plain');
});

Route::get('/request-download', function () {
    $path = public_path() . '/download-installer.txt';
    $name = "download-installer.txt";
    $header = array('Content-Type: application/text-plain');

    return response()->download($path, $name, $header);
});


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
