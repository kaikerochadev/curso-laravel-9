<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('welcome');
});
