<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexTasksController;
use App\Http\Controllers\CreateTasksController;
use App\Http\Controllers\StoreTasksController;
use App\Http\Controllers\ShowTasksController;
use App\Http\Controllers\EditTasksController;
use App\Http\Controllers\UpdateTasksController;
use App\Http\Controllers\DestroyTasksController;

use App\Http\Controllers\Auth\Register\ShowRegisterController;
use App\Http\Controllers\Auth\Register\RegisterController;
use App\Http\Controllers\Auth\Login\ShowLoginController;
use App\Http\Controllers\Auth\Login\LoginController;
use App\Http\Controllers\Auth\Logout\LogoutController;


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

Route::middleware('auth')->group(function() {
    Route::post('logout', LogoutController::class)->name('auth.logout.logout');

    Route::get('tasks', IndexTasksController::class)->name('tasks.index');
    Route::get('tasks/create', CreateTasksController::class)->name('tasks.create');
    Route::post('tasks', StoreTasksController::class)->name('tasks.store');
    Route::get('tasks/{id}', ShowTasksController::class)->name('tasks.show');
    Route::get('tasks/{id}/edit', EditTasksController::class)->name('tasks.edit');
    Route::put('tasks/{id}', UpdateTasksController::class)->name('tasks.update');
    Route::delete('tasks/{id}', DestroyTasksController::class)->name('tasks.destroy');
});

Route::middleware('guest')->group(function() {
    Route::get('register', ShowRegisterController::class)->name('auth.register.showRegister');
    Route::post('register', RegisterController::class)->name('auth.register.register');
    Route::get('login', ShowLoginController::class)->name('auth.login.showLogin');
    Route::post('login', LoginController::class)->name('auth.login.login');
});