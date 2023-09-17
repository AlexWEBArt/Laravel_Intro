<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo', [TodoController::class, 'store']);
Route::get('/todo/{id}', [TodoController::class, 'show']);

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

Route::post('/todo', 'TodoController@store')->name('todo.store');
Route::get('/todo/create', 'TodoController@create')->name('todo.create');
Route::get('/todo/{id}', [TodoController::class, 'show'])->name('todo.show');

Route::get('/', function () {
    return view('app');
});
