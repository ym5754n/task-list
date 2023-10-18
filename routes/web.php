<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexTasksController;
use App\Http\Controllers\CreateTasksController;
use App\Http\Controllers\StoreTasksController;
use App\Http\Controllers\ShowTasksController;
use App\Http\Controllers\EditTasksController;
use App\Http\Controllers\UpdateTasksController;


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

Route::get('/', IndexTasksController::class);
Route::get('tasks', IndexTasksController::class)->name('tasks.index');
Route::get('tasks/create', CreateTasksController::class)->name('tasks.create');
Route::post('tasks', StoreTasksController::class)->name('tasks.store');
Route::get('tasks/show/{id}', ShowTasksController::class)->name('tasks.show');
Route::get('tasks/edit/{id}', EditTasksController::class)->name('tasks.edit');
Route::put('tasks/{id}', UpdateTasksController::class)->name('tasks.update');