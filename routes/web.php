<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'adduser');
Route::post('/add', [UserController::class, 'addUser'])->name('adduser');
