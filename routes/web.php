<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\ReflectionSubmissionController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Web Routes for JOURNAL here
|
*/

// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// Remember this is all for STUDENT Authentication
Route::get('/register', [StudentAuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [StudentAuthController::class, 'register'])->name('register');

Route::get('/login', [StudentAuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [StudentAuthController::class, 'login'])->name('login');

Route::post('/logout', [StudentAuthController::class, 'logout'])->name('logout');
Route::post('/reflection/submit', [ReflectionSubmissionController::class, 'submit'])->name('reflection.submit');

// Dashboards
Route::get('/student/dashboard', function () {
    return view('studentDashboard');
})->name('student.dashboard');

Route::get('/staff/dashboard', function () {
    return view('staffDashboard');
})->name('staff.dashboard');

// Fallback 'home' route to fix when theres redirection problems
Route::get('/home', function () {
    return redirect()->route('student.dashboard');
})->name('home');

Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
Route::get('/staff/student/{id}', [StaffController::class, 'viewStudent'])->name('staff.viewStudent');
