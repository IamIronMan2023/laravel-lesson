<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
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


// Route::middleware('auth')->group(function () {
Route::get('/employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show')->middleware('check-access:5');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
//});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');


Route::put('/employee/update/{employee}', [EmployeeController::class, 'update'])->name('employee.update');

Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::delete('/employee/delete/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/restricted', [App\Http\Controllers\HomeController::class, 'restrict'])->name('restricted');
