<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliticalConnectionController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataInputController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PollingUnitController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ActivityController;

// Route to display the landing page
Route::get('/', [LandingController::class, 'showLandingPage'])->name('landing.page');

// Route to display the form
Route::get('/form', [StateController::class, 'showForm'])->name('form.show');

// Route to handle form submission
Route::post('/form-submit', [StateController::class, 'submitForm'])->name('form.submit');
Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('contact.submit');

// Routes for dynamic form fields
Route::get('/get-senatorial-districts/{state}', [LocationController::class, 'getSenatorialDistricts']);
Route::get('/get-federal-constituencies/{district}', [LocationController::class, 'getFederalConstituencies']);
Route::get('/get-lgas/{constituencyId}', [LocationController::class, 'getLGAs']);
Route::get('/get-wards/{lga}', [LocationController::class, 'getWards']);
Route::get('/get-polling-units/{ward}', [LocationController::class, 'getPollingUnits']);

// Authentication Routes
Auth::routes();
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/tables', function () {
        return view('console.tables');
    })->name('tables');

    Route::get('/charts', function () {
        return view('console.charts');
    })->name('charts');

    Route::get('/forms', function () {
        return view('console.forms');
    })->name('forms');

    Route::get('/profile-settings', [ProfileController::class, 'edit'])->name('profile.settings');
    
    // Social Controllers
    Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.auth');
    Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
    Route::get('auth/disconnect/{provider}', [SocialAuthController::class, 'disconnect'])->name('social.disconnect');

    // Show profile
    Route::get('profile/{id?}', [ProfileController::class, 'show'])->name('profile.show');

    // Friends, messages, and posts
    Route::get('/friends', [FriendsController::class, 'index'])->name('friends.index');
    Route::post('/friends/add', [FriendsController::class, 'addFriend'])->name('friends.add');
    Route::post('/friends/remove', [FriendsController::class, 'removeFriend'])->name('friends.remove');

    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
    Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
    Route::post('/posts/{post}/comments', [CommentsController::class, 'store'])->name('comments.store');

    Route::get('/messages', [MessagesController::class, 'index'])->name('messages.index');
    Route::post('/messages', [MessagesController::class, 'store'])->name('messages.store');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('throttle:6,1'); // Applying rate-limiting

    Route::resource('posts', PostsController::class);
    Route::resource('messages', MessagesController::class);

    // Route for the political connection page
    Route::get('/political-connection', [PoliticalConnectionController::class, 'index'])->name('political.connection');

    // Route for the photos page
    Route::get('/photos', function () {
        return view('console.photos');
    })->name('photos');

    // Route for the connections page
    Route::get('/connections', function () {
        return view('console.connections');
    })->name('connections');

    // Route for the groups page
    Route::get('/groups', function () {
        return view('console.groups');
    })->name('groups');

    // Route for displaying user activities
    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
});

// Route to datainput
Route::get('/datainput', [DataInputController::class, 'show'])->name('datainput');

// Polling Unit Input - Use the DataInputController for storing data
Route::post('/polling-unit/store', [DataInputController::class, 'store'])->name('polling-unit.store');

// User Poll Creation
Route::get('/create-poll', [PollController::class, 'create'])->name('poll.create');
Route::post('/create-poll', [PollController::class, 'store'])->name('poll.store');

// Poll Voting Route
Route::post('/polls/{poll}/vote', [PollController::class, 'vote'])->name('poll.vote');

// Route to view the generated poll page
Route::get('/polls/view/{fileName}', [PollController::class, 'viewPoll'])->name('poll.view');

// Route to vote count
Route::get('/polls/{id}/votes', [PollController::class, 'showVotes'])->name('poll.votes');

// Route to manage polls
Route::get('/view-page', [PollController::class, 'manage'])->name('poll.manage');

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

