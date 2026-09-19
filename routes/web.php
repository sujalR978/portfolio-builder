<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PortfoliosController;
use Illuminate\Foundation\Auth\User;

// ==========================================
// PUBLIC PAGES
// ==========================================

Route::get('/', function () {
    return view('landing_page.home');
});

Route::get('/home', function () {
    return view('landing_page.home');
});

Route::get('/about', function () {
    return view('landing_page.about');
});


// ==========================================
// CONTACT
// ==========================================

Route::get('/contact', function () {
    return view('landing_page.contact');
});

Route::post('/contact', [ContactController::class, 'contact'])
    ->name('contact');


// ==========================================
// OTHER PUBLIC PAGES
// ==========================================

Route::get('/how_it_works', function () {
    return view('landing_page.how_it_works');
});

Route::get('/forgot_password', function () {
    return view('landing_page.forgot_password');
});


// ==========================================
// REGISTER
// ==========================================

Route::get('/register', function () {
    return view('landing_page.register');
})->name('register.form');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');


// ==========================================
// LOGIN
// ==========================================

Route::get('/log_in', function () {
    return view('landing_page.log_in');
})->name('login.form');

Route::post('/log_in', [AuthController::class, 'log_in'])
    ->name('log_in');


// ==========================================
// LOGOUT
// ==========================================

Route::post('/home', [AuthController::class, 'log_out'])
    ->name('log_out');


// ==========================================
// USER PAGES
// ==========================================

Route::get('/dashboard', function () {
    return view('main.dashboard');
})->middleware('auth');

Route::get('/profile', function () {
    return view('main.profile');
})->middleware('auth');

Route::get('/create_project', function () {
    return view('main.create_project');
})->middleware('auth');

Route::get('/explor', function () {
    return view('main.explor');
})->middleware('auth');

Route::get('/feedback', function () {
    return view('main.feedback');
})->middleware('auth');

Route::get('/feedback', function () {
    return view('main.feedback');
})->name('feedback.form');

Route::post('/feedback', [FeedbackController::class, 'feedback'])
    ->name('feedback');





// ==========================================
// update methods
// ==========================================




Route::post('/profile/update/{id}', [AuthController::class, 'updateName'])->name('profile.update');

Route::post('/profile/delete/{id}', [AuthController::class, 'deleteAccount'])->name('profile.delete');









// ==========================================
// ADMIN PAGES
// ==========================================
Route::get('/admin_dashboard', [AuthController::class, 'adminDashboard']);

Route::get('/admin_inquiry',[ContactController::class, 'adminInquiry']);


Route::get('/admin_feedback',[FeedbackController::class, 'adminFeedback']);





Route::delete('/admin/user/{user}', [AuthController::class, 'deleteUser'])
    ->name('admin.user.delete');

Route::delete('/admin/contact/{contact}',[ContactController::class,'deleteContact'])
    ->name('admin.contect.delete');




    // user wizerd


Route::post('/portfolios',[PortfoliosController::class,'storeOrUpdate'])
    ->name('portfolio.store');