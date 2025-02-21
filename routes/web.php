<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/student/login', function () {
    return view('studentLogin'); // This loads the Student Login page for us
})->name('student.login');

Route::post('/student/login', [StudentAuthController::class, 'login'])->name('student.authenticate');

Route::get('/student/register', function () {
    return view('studentRegister'); // This loads the Student Register page for us
})->name('student.register');

Route::post('/student/register', [StudentAuthController::class, 'register'])->name('student.register.submit');