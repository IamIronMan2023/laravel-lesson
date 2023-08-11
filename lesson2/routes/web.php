<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Query\IndexHint;
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
    return view('welcome');
});


/* Get */
// Route::get('/welcome', function () {
//     return "Hello World!";
// });

/* HTTP Methods */
// Route::post();
// Route::put(); //change all database field
// Route::patch(); //change specific field
// Route::delete();

/* Match */
// Route::match(['get', 'post'], '/', function () {
//     return 'POST and GET';
// });

/* Any */
// Route::any('/welcome', function () {
//     return "Welcome!";
// });

/* View */
// Route::view('/welcome', 'welcome');


/* Redirection */

// Route::get(
//     '/about',
//     function () {
//         return "About Page";
//     }
// );
// Route::redirect('/welcome', '/about');

/* Access to Request*/
// Route::get('/list-users', function (Request $request) {
//     dd($request);
//     return null;
// });


/* Returning Response*/
// Route::get('/list-users', function (Request $request) {
//     return response("Hello World", 200)->header('Content-Type', 'text/plain');
//     //return response("Hello World", 200);
// });


/*Parameterize url*/
// Route::get('/user/{id}/{action}', function ($id, $action) {
//     return response($action . " " . $id, 200);
//     //return response("Hello World", 200);
// });


/*Returning JSON data */
// Route::get('/process', function () {
//     return response()->json(['firstName' => 'Juan', 'lastName' => 'Dela Cruz', 'age' => 20]);
//     //return response("Hello World", 200);
// });


/*Download data */
// Route::get('/download', function () {
//     $file_name = "download-file.txt";
//     $path = public_path() . "/" . $file_name;
//     $header = array('Content-type: application/text-plain');
//     return response()->download($path, $file_name, $header);
// });


Route::get('/employees', [EmployeeController::class, 'index']);
