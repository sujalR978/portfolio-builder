@extends('layouts.master')

@section('title', 'Login - Portfolio Builder')

@section('content')

<!-- ==========================================
     LOGIN SECTION
=========================================== -->
<section class="pb-auth-section py-5 min-vh-100 d-flex align-items-center">
    <div class="container py-4">
        <div class="row justify-content-center align-items-center g-5">
            
            <!-- LEFT COLUMN: BRAND PROMO / PREVIEW CARD (DESKTOP) -->
            <div class="col-lg-6 d-none d-lg-block pb-auth-fade-right">
                <div class="pb-auth-promo-card p-5 rounded-5 border shadow-sm position-relative overflow-hidden">
                    <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm mb-4 pb-auth-badge">
                        <span class="badge bg-primary rounded-pill me-2 text-white">Welcome Back</span>
                        <span class="small fw-semibold text-muted">Portfolio Builder</span>
                    </div>

                    <h2 class="display-5 fw-bold text-dark mb-3">
                        Build, customize, and share your <span class="text-primary">portfolio</span>
                    </h2>
                    <p class="text-muted lead mb-4 pe-xl-4">
                        Log in to access your saved templates, live editing dashboard, and exported PDF resumes.
                    </p>

                    <!-- Mockup Preview -->
                    <div class="pb-auth-mockup-wrapper rounded-4 border overflow-hidden shadow-sm mt-4">
                        <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100" alt="Dashboard Preview">
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: LOGIN FORM -->
            <div class="col-lg-5 col-md-8 pb-auth-fade-up">
                <div class="pb-auth-card bg-white p-4 p-sm-5 rounded-4 border shadow-sm">
                    
                    <div class="text-center text-sm-start mb-4">
                        <h3 class="fw-bold text-dark mb-1 fs-2">Log in to your account</h3>
                        <p class="text-muted small">Welcome back! Please enter your details.</p>
                    </div>

                    <!-- ERROR NOTIFICATION ALERT -->
                    @if ($errors->any())
                        <div class="alert alert-danger py-2.5 px-3 rounded-3 small mb-4 d-flex align-items-center gap-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <!-- SOCIAL LOGIN BUTTONS -->
                    <div class="d-flex flex-column gap-2 mb-4">
                        <a href="#" class="btn pb-auth-social-btn d-flex align-items-center justify-content-center gap-2 border w-100 py-2 fw-semibold">
                            <svg width="18" height="18" viewBox="0 0 24 24"><path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.7 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.2 9 5 12 5z"/><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.6h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5 3.7-8.9z"/><path fill="#FBBC05" d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3s.2-1.6.4-2.3L1.9 7.3C.7 9.7 0 12.3 0 15s.7 5.3 1.9 7.7l3.7-2.9c-.3-.7-.5-1.5-.5-2.3z"/><path fill="#34A853" d="M12 23c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2.2-6.4-5.2L1.9 16c1.8 3.7 5.6 7 10.1 7z"/></svg>
                            Continue with Google
                        </a>
                        <a href="#" class="btn pb-auth-social-btn d-flex align-items-center justify-content-center gap-2 border w-100 py-2 fw-semibold">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            Continue with GitHub
                        </a>
                    </div>

                    <!-- DIVIDER -->
                    <div class="d-flex align-items-center mb-4">
                        <hr class="flex-grow-1 m-0" style="border-color: rgba(15, 23, 42, 0.1);">
                        <span class="px-3 text-muted small text-uppercase fw-semibold">Or with email</span>
                        <hr class="flex-grow-1 m-0" style="border-color: rgba(15, 23, 42, 0.1);">
                    </div>

                    <!-- FORM -->
                    <form action="{{ route('log_in') }}" method="POST">
                        @csrf
                        
                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label fw-semibold small text-dark">Email Address</label>
                            <input type="email" name="email" class="form-control pb-auth-input" id="loginEmail" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
                        </div>

                        <!-- Password Input -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="loginPassword" class="form-label fw-semibold small text-dark mb-0">Password</label>
                                <a href="{{ url('/forgot_password') }}" class="small text-primary text-decoration-none fw-semibold">Forgot password?</a>
                            </div>
                            <input type="password" name="password" class="form-control pb-auth-input" id="loginPassword" placeholder="••••••••" required>
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                            <label class="form-check-label small text-muted" for="rememberMe">
                                Remember me for 30 days
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-lg pb-auth-btn-pill w-100 fw-bold shadow-sm mb-3">
                            Log In 
                        </button>

                        <!-- Sign Up Redirect Link -->
                        <p class="text-center small text-muted mb-0">
                            Don't have an account? 
                            <a href="/register" class="text-primary text-decoration-none fw-bold">Sign up for free</a>
                        </p>
                    </form>

                   

                </div>
            </div>

        </div>
    </div>
</section>

@endsection