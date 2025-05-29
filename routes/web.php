<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\UsersSessionController;
use Illuminate\Support\Facades\Route;

Route::get("test", function () {
    dispatch(
        function () {
            logger("Hello from the queue!");
        }
    )->delay(5);
    return 'Done';
});


Route::view('/', 'home');
Route::view('/contact', 'contact');
// Route::resource('jobs', JobController::class);
Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])
    ->middleware('auth');

Route::post('/jobs', [JobController::class, 'store']);

Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])
    ->middleware('auth')
    ->can('edit', 'job');


Route::delete('/jobs/{job}', [JobController::class, 'delete'])
    ->middleware('auth')
    ->can('edit', 'job');


Route::get('/register', [RegisteredUsersController::class, 'create']);
Route::post('/register', [RegisteredUsersController::class, 'store']);

Route::get('/login', [UsersSessionController::class, 'create'])->name('login');
Route::post('/login', [UsersSessionController::class, 'store'])->middleware('throttle:4,1');
Route::post('/logout', [UsersSessionController::class, 'destroy']);
