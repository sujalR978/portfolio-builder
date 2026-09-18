@extends('layouts.master')

@section('title', 'Submit Feedback - Portfolio Builder')

@section('content')
@auth
<!-- ==========================================
     FEEDBACK HERO SECTION
=========================================== -->
<section class="pb-feedback-hero py-5 text-center position-relative">
    <div class="container py-4 position-relative z-1">
        <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm mb-4 pb-feedback-badge">
            <span class="badge bg-primary rounded-pill me-2 text-white">We Value Your Input</span>
            <span class="small fw-semibold text-muted">Help Us Improve</span>
        </div>
        
        <h1 class="display-3 fw-bold text-dark mb-3">
            Your feedback shapes our <span class="text-primary">future</span>
        </h1>
        
        <p class="lead text-muted mx-auto mb-5" style="max-width: 680px;">
            Found a bug, want a new feature, or have thoughts on our templates? Let us know! We read every submission.
        </p>
    </div>
</section>

<!-- ==========================================
     FEEDBACK FORM SECTION
=========================================== -->
<section class="py-5 pb-feedback-bg-soft">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-8 pb-feedback-fade-up">
                
                <div class="pb-feedback-card bg-white p-4 p-sm-5 rounded-4 border shadow-sm">
                    
                    <!-- Alert Message if submitted -->
                    @if(session('success'))
                        <div class="alert alert-success rounded-3 mb-4 d-flex align-items-center gap-2" role="alert">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- 1. EXPERIENCE RATING -->
                        <div class="mb-4 text-center">
                            <label class="form-label fw-bold text-dark d-block mb-2">How would you rate your overall experience?</label>
                            
                   <div class="pb-feedback-rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5" title="1 stars">★</label>

    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4" title="2 stars">★</label>

    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3" title="3 stars">★</label>

    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2" title="4 stars">★</label>

    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1" title="5 star">★</label>
</div>
                        </div>

                        <!-- 2. USER DETAILS -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="fbName" class="form-label fw-semibold small text-dark">Your Name</label>
                                <input type="text" class="form-control pb-feedback-input" id="fbName" name="name" placeholder="John Doe" value="{{ Auth::user()->firstName}} {{Auth::user()->lastName}}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fbEmail" class="form-label fw-semibold small text-dark">Email Address</label>
                                <input type="email" class="form-control pb-feedback-input" id="fbEmail" name="email" placeholder="john@example.com" value="{{ Auth::user()->email }}" required>
                            </div>
                        </div>

                        <!-- 3. FEEDBACK TYPE CATEGORY -->
                        <div class="mb-3">
                            <label for="fbCategory" class="form-label fw-semibold small text-dark">Feedback Category</label>
                            <select class="form-select pb-feedback-input" id="fbCategory" name="category" required>
                                <option value="" selected disabled>Select a category...</option>
                                <option value="general">General Feedback</option>
                                <option value="bug">Report a Bug</option>
                                <option value="feature">Request a Feature</option>
                                <option value="design">UI/UX Design Suggestion</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- 4. FEEDBACK MESSAGE -->
                        <div class="mb-3">
                            <label for="fbMessage" class="form-label fw-semibold small text-dark">Your Feedback & Suggestions</label>
                            <textarea class="form-control pb-feedback-input" id="fbMessage" name="message" rows="5" placeholder="Tell us what you love, or what we can do better..." required></textarea>
                        </div>

                        <!-- 5. ATTACHMENT UPLOAD (OPTIONAL) -->
                        <div class="mb-4">
                            <label for="fbAttachment" class="form-label fw-semibold small text-dark">Attach Screenshot (Optional)</label>
                            <input class="form-control pb-feedback-input" type="file" id="fbAttachment" name="attachment" accept="image/*">
                            <div class="form-text small text-muted">Supports PNG, JPG, or GIF up to 5MB.</div>
                        </div>

                        <!-- SUBMIT BUTTON -->
                        <button type="submit" class="btn btn-primary btn-lg pb-feedback-btn-pill w-100 fw-bold shadow-sm">
                            Submit Feedback &rarr;
                        </button>

                    </form>

                </div>

            </div>
        </div>
    </div>
</section>
@endauth
@endsection