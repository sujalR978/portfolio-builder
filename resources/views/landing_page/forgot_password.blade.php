@extends('layouts.master')

@section('title', 'Forgot Password - Portfolio Builder')

@section('content')

<!-- ==========================================
     FORGOT PASSWORD SECTION
=========================================== -->
<section class="pb-auth-section py-5 min-vh-100 d-flex align-items-center">
    <div class="container py-4">
        <div class="row justify-content-center align-items-center g-5">
            
            <!-- LEFT COLUMN: BRAND PROMO / PREVIEW CARD (DESKTOP) -->
            <div class="col-lg-6 d-none d-lg-block pb-auth-fade-right">
                <div class="pb-auth-promo-card p-5 rounded-5 border shadow-sm position-relative overflow-hidden">
                    <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm mb-4 pb-auth-badge">
                        <span class="badge bg-primary rounded-pill me-2 text-white">Account Recovery</span>
                        <span class="small fw-semibold text-muted">Portfolio Builder</span>
                    </div>

                    <h2 class="display-5 fw-bold text-dark mb-3">
                        Reset and secure your <span class="text-primary">account</span>
                    </h2>
                    <p class="text-muted lead mb-4 pe-xl-4">
                        Forgot your password? No problem. Enter your email address and we'll instantly send you a secure password reset link.
                    </p>

                    <!-- Reset / Security Unsplash Image Mockup -->
                    <div class="pb-auth-mockup-wrapper rounded-4 border overflow-hidden shadow-sm mt-4">
                        <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100" alt="Account Security and Password Reset Interface">
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: RESET FORM -->
            <div class="col-lg-5 col-md-8 pb-auth-fade-up">
                <div class="pb-auth-card bg-white p-4 p-sm-5 rounded-4 border shadow-sm">
                    
                    <div class="text-center text-sm-start mb-4">
                        <h3 class="fw-bold text-dark mb-1 fs-2">Reset Password</h3>
                        <p class="text-muted small">Enter your email address to receive recovery steps.</p>
                    </div>

                    <!-- Session Status Alert -->
                    @if (session('status'))
                        <div class="alert alert-success small rounded-3 mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- FORM -->
                    <form action="#" method="POST">
                        @csrf
                        
                        <!-- Email Input -->
                        <div class="mb-4">
                            <label for="recoveryEmail" class="form-label fw-semibold small text-dark">Email Address</label>
                            <input type="email" class="form-control pb-auth-input" id="recoveryEmail" name="email" placeholder="name@example.com" required autofocus>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-lg pb-auth-btn-pill w-100 fw-bold shadow-sm mb-4">
                            Send Reset Link &rarr;
                        </button>

                        <!-- Back to Login Link -->
                        <div class="text-center">
                            <a href="{{url('/log_in')}}" class="small text-muted text-decoration-none fw-semibold d-inline-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                                Back to Log In
                            </a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection