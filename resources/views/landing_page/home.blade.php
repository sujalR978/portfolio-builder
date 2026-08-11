@extends('layouts.master')

@section('title', 'Create Your Professional Portfolio')

@section('content')

<!-- ==========================================
     HERO SECTION
=========================================== -->
<section class="pb-land-hero py-5 overflow-hidden">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <!-- Left Text Content -->
            <div class="col-lg-6 pb-land-fade-up">
                <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm mb-4 pb-land-badge">
                    <span class="badge bg-primary rounded-pill me-2">New</span>
                    <span class="small fw-semibold text-muted">AI-Powered Templates</span>
                </div>
                
                <h1 class="display-4 fw-bold text-dark mb-4 lh-sm">
                    Build your professional portfolio in <span class="text-primary">minutes</span>
                </h1>
                
                <p class="lead text-muted mb-5 pe-lg-4">
                    Portfolio Builder helps you showcase your work with stunning, responsive portfolio templates designed for modern professionals. No coding required.
                </p>
                
                <div class="d-flex flex-wrap gap-3 align-items-center mb-4">
                    <a href="/register" class="btn btn-primary btn-lg pb-land-btn-pill px-4 py-3 fw-bold shadow-sm">Get Started &rarr;</a>
                    <a href="#demo" class="btn btn-dark btn-lg pb-land-btn-pill px-4 py-3 fw-bold text-white">View Demo</a>
                </div>
            </div>
            
            <!-- Right Floating App Preview -->
            <div class="col-lg-6 pb-land-fade-right">
                <div class="pb-land-mockup bg-white p-2 rounded-4 shadow-lg position-relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-3" alt="App Dashboard Mockup">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     STEPS SECTION
=========================================== -->
<section id="how-it-works" class="py-5 text-center bg-white">
    <div class="container py-4">
        <h2 class="fw-bold mb-3 fs-1">Go live in three simple steps</h2>
        <p class="text-muted mb-5 lead">Everything you need to launch your personal brand.</p>
        
        <div class="row g-4 pt-2">
            <!-- Step 1 -->
            <div class="col-md-4 pb-land-fade-up" style="animation-delay: 0.1s;">
                <div class="pb-land-step-num bg-primary text-white mx-auto mb-4 d-flex align-items-center justify-content-center fw-bold fs-4">1</div>
                <h3 class="fw-bold fs-5 mb-2">Choose a template</h3>
                <p class="text-muted small px-lg-3">Browse our library of high-performance templates tailored for designers, developers, and creators.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="col-md-4 pb-land-fade-up" style="animation-delay: 0.2s;">
                <div class="pb-land-step-num bg-primary text-white mx-auto mb-4 d-flex align-items-center justify-content-center fw-bold fs-4">2</div>
                <h3 class="fw-bold fs-5 mb-2">Import your data</h3>
                <p class="text-muted small px-lg-3">Connect your LinkedIn, GitHub, or Behance to instantly populate your portfolio with your latest work.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="col-md-4 pb-land-fade-up" style="animation-delay: 0.3s;">
                <div class="pb-land-step-num bg-primary text-white mx-auto mb-4 d-flex align-items-center justify-content-center fw-bold fs-4">3</div>
                <h3 class="fw-bold fs-5 mb-2">Publish & Share</h3>
                <p class="text-muted small px-lg-3">Host on a custom domain and share your professional URL with potential clients and employers.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     BENTO GRID FEATURES
=========================================== -->
<section id="about" class="py-5 pb-land-bg-soft">
    <div class="container py-5">
        <div class="row g-4">
            
            <!-- Bento Box 1: Responsive Design (Large) -->
            <div class="col-lg-8">
                <div class="pb-land-bento bg-white h-100 p-4 p-md-5 d-flex flex-column justify-content-between">
                    <div>
                        <div class="pb-land-icon-box text-primary mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                        <h3 class="fw-bold fs-4 mb-2">Responsive Design</h3>
                        <p class="text-muted mb-4 pe-lg-5">Your portfolio will look impeccable on every device, from mobile phones to giant desktop monitors, automatically.</p>
                    </div>
                    <div class="bg-light rounded-4 p-2 border overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?q=80&w=1000&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Responsive Devices">
                    </div>
                </div>
            </div>

            <!-- Bento Box 2: Easy Customization (With Mockup Image) -->
            <div class="col-lg-4">
                <div class="pb-land-bento pb-land-bento-primary h-100 p-4 p-md-5 text-white d-flex flex-column justify-content-between position-relative overflow-hidden">
                    <div>
                        <div class="pb-land-icon-box pb-land-icon-white mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                        </div>
                        <h3 class="fw-bold fs-4 mb-2">Easy Customization</h3>
                        <p class="text-white-50 small mb-4">Intuitive drag-and-drop editor allows you to tweak every pixel without touching a line of code.</p>
                    </div>
                    
                    <!-- Image Mockup -->
                    <div class="pb-land-bento-img-wrapper rounded-3 overflow-hidden shadow">
                        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100 rounded-3" alt="Drag and Drop Customizer">
                    </div>
                </div>
            </div>

            <!-- Bento Box 3: Real-time Analytics (Small Left) -->
            <div class="col-lg-4">
                <div class="pb-land-bento bg-white h-100 p-4 shadow-sm">
                    <div class="pb-land-icon-box text-primary mb-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                    <h3 class="fw-bold fs-5 mb-2">Real-time Analytics</h3>
                    <p class="text-muted small mb-0">Understand your audience. Track who's viewing your portfolio and from where, all in a beautiful dashboard.</p>
                </div>
            </div>

            <!-- Bento Box 4: SEO Optimized (Wide Right) -->
            <div class="col-lg-8">
                <div class="pb-land-bento bg-white h-100 p-4 d-flex align-items-center">
                    <div class="me-4 flex-grow-1">
                        <div class="pb-land-icon-box text-primary mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </div>
                        <h3 class="fw-bold fs-5 mb-2">SEO Optimized</h3>
                        <p class="text-muted small mb-0">Get discovered by recruiters on Google. Our templates are built with SEO best practices right out of the box.</p>
                    </div>
                    <div class="d-none d-md-block bg-light rounded-4 p-3 text-center border" style="width: 180px;">
                        <div class="bg-primary rounded mb-2 w-75 mx-auto" style="height: 8px; opacity: 0.8;"></div>
                        <div class="bg-secondary rounded w-100 mb-2" style="height: 6px; opacity: 0.5;"></div>
                        <div class="bg-dark rounded w-50 mx-auto" style="height: 6px; opacity: 0.3;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================
     FAQ ACCORDION SECTION
=========================================== -->
<section id="contact" class="py-5 bg-white">
    <div class="container py-5" style="max-width: 750px;">
        <h2 class="fw-bold text-center mb-2 fs-1">Frequently Asked Questions</h2>
        <p class="text-muted text-center mb-5 lead">Got questions? We've got answers.</p>
        
        <div class="accordion pb-land-faq" id="faqAccordion">
            <!-- Question 1 -->
            <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm overflow-hidden">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed bg-white fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Is there a free trial?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted bg-white border-top">
                        Yes! You can build your portfolio entirely for free. You only upgrade if you want custom domains or high-res PDF downloads.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm overflow-hidden">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed bg-white fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Can I use my own domain?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted bg-white border-top">
                        Absolutely. Premium users can connect any domain they own (e.g., yourname.com) directly to their portfolio.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm overflow-hidden">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed bg-white fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Can I export my data?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted bg-white border-top">
                        Yes, you can export your entire portfolio into a cleanly formatted PDF file directly from your live dashboard at any time.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     BOTTOM CTA BANNER SECTION
=========================================== -->
<section class="py-5 pb-land-bg-soft">
    <div class="container">
        <div class="pb-land-cta-banner text-white text-center rounded-5 py-5 px-4 position-relative overflow-hidden shadow-lg">
            <div class="position-relative z-1 py-4">
                <h2 class="fw-bold display-5 mb-3">Ready to showcase your brilliance?</h2>
                <p class="text-white-50 mb-4 lead">Join thousands of professionals who have accelerated their careers with Portfolio Builder.</p>
                <a href="/register" class="btn btn-primary btn-lg pb-land-btn-pill px-5 py-3 fw-bold shadow">Create Your Portfolio</a>
            </div>
        </div>
    </div>
</section>

@endsection