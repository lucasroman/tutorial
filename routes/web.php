<?php

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
})->name('welcome');

Route::resource('users', UserController::class)->only([
    'index', 'create', 'store'
]);

Route::view('/todo', 'todo.todoList')->name('todoList');

Route::view('/dynamictext', 'dynamictext.dynamicText')->name('dynamicText');
