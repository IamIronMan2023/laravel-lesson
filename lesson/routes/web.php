<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

/* Common routing names
    index = Show all data
    show = Show single data
    create = Show a form to a new data
    store = Store a data
    edit = Show a form to edit data
    update = update a data
    destroy = delete a data
*/


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/userList', [UserController::class, 'list']);

Route::middleware(['check-page:5'])->group(function () {
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index')->middleware(['check-page:5']);
});

Route::middleware(['auth'])->group(function () {
    //Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
});

Route::get('/employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show')->middleware(['auth', 'check-show-page:5']);
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');;

Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/edit/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/delete/{employee}', [EmployeeController::class, 'destroy'])->name('employee.delete');

Route::get('/restricted', [HomeController::class, 'restricted'])->name('home.restricted');

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
