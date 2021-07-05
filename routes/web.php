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

Route::view('/todo', 'todo/todoList')->name('todoList');

Route::get('/dynamictext', function() {
    return '<h3 style="font-family:arial"><span style="color:#00ff00">&#10003;</span> Url to dynamic text component is working! &#128077;</h3>';
});
