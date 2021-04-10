<?php

use App\Http\Controllers\ReactController;
use App\Http\Controllers\UserController;
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

Route::get('/react', ReactController::class);

Route::get('/users/create', [UserController::class, 'create']);

Route::get('/users', [UserController::class, 'index']);

Route::post('/users', [UserController::class, 'store']);

Route::view('/todo', 'todo/todoList')->name('todoList');
