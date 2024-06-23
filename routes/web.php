<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AccountSettingsController;

// Route to display the landing page
Route::get('/', [LandingController::class, 'showLandingPage'])->name('landing.page');

// Route to display the form
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');

// Route to handle form submission
Route::post('/form-submit', [FormController::class, 'submitForm'])->name('form.submit');
Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('contact.submit');

// Routes for dynamic form fields
Route::get('/get-senatorial-districts/{state}', [FormController::class, 'getSenatorialDistricts']);
Route::get('/get-federal-constituencies/{district}', [FormController::class, 'getFederalConstituencies']);
Route::get('/get-lgas/{constituency}', [FormController::class, 'getLgas']);
Route::get('/get-wards/{lga}', [FormController::class, 'getWards']);
Route::get('/get-polling-units/{ward}', [FormController::class, 'getPollingUnits']);

// Authentication Routes
Auth::routes();

// Custom Authentication Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
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

// Ensure users are directed to the dashboard when logged in
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('console.dashboard');
    })->name('dashboard');

    Route::get('/tables', function () {
        return view('console.tables');
    })->name('tables');

    Route::get('/charts', function () {
        return view('console.charts');
    })->name('charts');

    Route::get('/forms', function () {
        return view('console.forms');
    })->name('forms');

    Route::get('/account-settings', [ProfileController::class, 'edit'])->name('account.settings');

    Route::get('account/settings', [AccountSettingsController::class, 'show'])->name('account.settings');
    Route::put('account/settings', [AccountSettingsController::class, 'update'])->name('profile.update');


    // Social Controllers
    Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.auth');
    Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
    Route::get('auth/disconnect/{provider}', [SocialAuthController::class, 'disconnect'])->name('social.disconnect');

    // Show profile
    Route::get('profile/{id?}', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    // Friends, messages, and posts
    Route::get('/friends', [FriendsController::class, 'index'])->name('friends.index');
    Route::post('/friends/add', [FriendsController::class, 'addFriend'])->name('friends.add');
    Route::post('/friends/remove', [FriendsController::class, 'removeFriend'])->name('friends.remove');

    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
    Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');

    Route::get('/messages', [MessagesController::class, 'index'])->name('messages.index');
    Route::post('/messages', [MessagesController::class, 'store'])->name('messages.store');

    // Get profile home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('posts', PostsController::class);
    Route::resource('messages', MessagesController::class);
});

// Email Verification Routes
Route::get('email/verify', [VerifyEmailController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// Logout Route
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

//Route to change last name once
Route::middleware(['auth'])->group(function () {
    Route::get('profile/settings', [AccountSettingsController::class, 'show'])->name('account.settings');
    Route::put('profile/update', [AccountSettingsController::class, 'update'])->name('profile.update');
});
