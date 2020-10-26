<?php

use App\Http\Controllers\TodosController;
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

Route::get('/', [TodosController::class, 'index']);
Route::get('/todos/create', [TodosController::class, 'create'])->name('todos.create');
Route::get('/todos/{todo}', [TodosController::class, 'show'])->name('todos.show');
Route::post('/todos', [TodosController::class, 'store'])->name('todos.store');
