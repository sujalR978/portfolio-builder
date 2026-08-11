<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;



// Home Page
Route::get('/', function () {
    return view('landing_page.home');
});
Route::get('/home', function () {
    return view('landing_page.home');
});

// Other Public Pages
Route::get('/about', function () {
    return view('landing_page.about');
});
Route::get('/contact', function () {
    return view('landing_page.contact');
});
Route::get('/how_it_works', function () {
    return view('landing_page.how_it_works');
});
Route::get('/forgot_password', function () {
    return view('landing_page.forgot_password');
});
Route::get('/register', function () {
    return view('landing_page.register');
});

// Admin Dashboard
    Route::get('/admin_dashboard', function () {
        if (!session('is_logged_in') || session('user_role') !== 'admin') {
            return redirect('/log_in')->withErrors(['email' => 'Admin authorization required.']);
        }
        return view('admin.admin_dashboard');
    });

    Route::get('/admin_feedback', function () {
    return view('admin.admin_feedback');
});
Route::get('/admin_inquiry', function () {
    return view('admin.admin_inquiry');
});


// User Dashboard
Route::get('/dashboard', function () {
    if (!session('is_logged_in')) {
        return redirect('/log_in')->withErrors(['email' => 'Please log in first.']);
    }
    return view('main.dashboard');
});

Route::get('/profile', function () {
    return view('main.profile');
});

Route::get('/create_project', function () {
    return view('main.create_project');
});

Route::get('/explor', function () {
    return view('main.explor');
});

Route::get('/feedback', function () {
    return view('main.feedback');
});


Route::get('/log_in', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/log_in', [AuthController::class, 'login']);
Route::post('/log_out', [AuthController::class, 'logout'])->name('logout');
Route::get('/log_out', [AuthController::class, 'logout']);

