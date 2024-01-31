<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ejercicio1', function () {
//     return "Get OK";
// });

// Route::post('/ejercicio1/post', function () {
//     return "Post OK";
// });

// Route::put('/ejercicio1/put', function () {
//     return "Post OK";
// });

// Route::path('/ejercicio1/path', function () {
//     return "Path OK";
// });

// Route::delete('/ejercicio1/delete', function () {
//     return "Delete OK";
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
