<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PortfoliosController;
use App\Models\Portfolios;
use Illuminate\Support\Facades\Auth;

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
// USER PAGES (AUTH GUARDED)
// ==========================================


    
    Route::get('/dashboard', function () {
        $portfolios = Portfolios::where('user_id', Auth::id())->get();
        return view('main.dashboard', compact('portfolios'));
    })->name('dashboard');

    Route::get('/profile', function () {
         $portfolios = Portfolios::where('user_id', Auth::id())->get();
        return view('main.profile', compact('portfolios'));

    })->name('profile');

    // Use PortfoliosController create method for a clean blank wizard
    Route::get('/create_project', [PortfoliosController::class, 'create'])
        ->name('portfolio.create');

Route::get('/explor', [PortfoliosController::class, 'index'])->middleware('auth')->name('explor');

    Route::get('/feedback', function () {
        return view('main.feedback');
    })->name('feedback.form');

    Route::post('/feedback', [FeedbackController::class, 'feedback'])
        ->name('feedback');

    // Profile Actions
    Route::post('/profile/update/{id}', [AuthController::class, 'updateName'])
        ->name('profile.update');

    Route::post('/profile/delete/{id}', [AuthController::class, 'deleteAccount'])
        ->name('profile.delete');

    // Portfolio Management (Create, Edit, Update, Delete)
    Route::post('/portfolios', [PortfoliosController::class, 'storeOrUpdate'])
        ->name('portfolio.store');

    Route::get('/portfolios/{id}/edit', [PortfoliosController::class, 'edit'])
        ->name('portfolio.edit');

    Route::post('/portfolios/{id}/update', [PortfoliosController::class, 'storeOrUpdate'])
        ->name('portfolio.update');

    Route::post('/dashboard/delete/{id}', [PortfoliosController::class, 'deletePortfolios'])
        ->name('portfolios.delete');




// ==========================================
// ADMIN PAGES
// ==========================================

Route::get('/admin_dashboard', [AuthController::class, 'adminDashboard']);
Route::get('/admin_inquiry', [ContactController::class, 'adminInquiry']);
Route::get('/admin_feedback', [FeedbackController::class, 'adminFeedback']);

Route::delete('/admin/user/{user}', [AuthController::class, 'deleteUser'])
    ->name('admin.user.delete');

Route::delete('/admin/contact/{contact}', [ContactController::class, 'deleteContact'])
    ->name('admin.contect.delete');