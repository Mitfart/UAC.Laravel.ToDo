<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
*/

Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/store', [TodoController::class, 'store'])->name('todos.store');

Route::get('/todos/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::post('/todos/change', [TodoController::class, 'change'])->name('todos.change');
