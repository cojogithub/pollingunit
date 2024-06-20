<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;

// Route to display the landing page
Route::get('/', [LandingController::class, 'showLandingPage'])->name('landing.page');

// Route to display the form
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');

// Route to handle form submission
Route::post('/form-submit', [FormController::class, 'submitForm'])->name('form.submit');
Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('form.submit');

// Routes for dynamic form fields
Route::get('/get-senatorial-districts/{state}', [FormController::class, 'getSenatorialDistricts']);
Route::get('/get-federal-constituencies/{district}', [FormController::class, 'getFederalConstituencies']);
Route::get('/get-lgas/{constituency}', [FormController::class, 'getLgas']);
Route::get('/get-wards/{lga}', [FormController::class, 'getWards']);
Route::get('/get-polling-units/{ward}', [FormController::class, 'getPollingUnits']);

// Authentication Routes
Auth::routes();

// Custom Authentication Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route to display the logged-in page
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Ensure homepage or landing page route is defined
Route::get('/landing', function () {
    return view('landing');
});

// Ensure users are directed to the dashboard when logged in
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('console.dashboard');
    })->name('dashboard');

    Route::get('/tables', function () {
        return view('tables');
    })->name('tables');
});

// Services section and nav links
Route::get('/election-coordination', function () {
    return view('election-coordination');
});
Route::get('/polling-unit-management', function () {
    return view('polling-unit-management');
});
Route::get('/fundraising', function () {
    return view('fundraising');
});
