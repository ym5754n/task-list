<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tasks;

use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;


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

Route::get('/', Tasks\IndexController::class);

Route::middleware('auth')->group(function() {
    Route::post('logout', Logout\LogoutController::class)->name('auth.logout.logout');

    Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function() {
        Route::get('/', Tasks\IndexController::class)->name('index');
        Route::post('/', Tasks\StoreTasksController::class)->name('store');
        Route::get('create', Tasks\CreateTasksController::class)->name('create');
        Route::get('{id}', Tasks\ShowTasksController::class)->name('show');
        Route::get('{id}/edit', Tasks\EditTasksController::class)->name('edit');
        Route::put('{id}', Tasks\UpdateTasksController::class)->name('update');
        Route::delete('{id}', Tasks\DestroyTasksController::class)->name('destroy');    
    });
});

Route::middleware('guest')->group(function() {
    Route::get('register', Register\IndexController::class)->name('auth.register.index');
    Route::post('register', Register\RegisterController::class)->name('auth.register.register');
    Route::get('login', Login\IndexController::class)->name('auth.login.index');
    Route::post('login', Login\LoginController::class)->name('auth.login.login');
});