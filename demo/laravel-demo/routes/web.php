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
