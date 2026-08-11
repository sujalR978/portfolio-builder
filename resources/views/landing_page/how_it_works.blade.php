@extends('layouts.master')

@section('title', 'How It Works - Portfolio Builder')

@section('content')
<!-- ==========================================
     HOW IT WORKS HERO SECTION
=========================================== -->
<section class="pb-works-hero py-5 text-center position-relative">
    <div class="container py-4 position-relative z-1">
        <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm mb-4 pb-works-badge">
            <span class="badge bg-primary rounded-pill me-2 text-white">Simple Process</span>
            <span class="small fw-semibold text-muted">No Coding Required</span>
        </div>
        
        <h1 class="display-3 fw-bold text-dark mb-3">
            Build your portfolio in <span class="text-primary">4 easy steps</span>
        </h1>
        
        <p class="lead text-muted mx-auto mb-5 pe-lg-2" style="max-width: 680px;">
            From choosing a template to going live on a custom domain, our intuitive builder streamlines your personal brand setup.
        </p>

        <!-- Video / Interface Preview Card -->
        <div class="pb-works-preview-card mx-auto rounded-4 p-2 shadow-lg position-relative overflow-hidden" style="max-width: 960px;">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Platform Interactive Walkthrough">
            
            <!-- Play Button Overlay -->
            <a href="#step-1" class="pb-works-play-btn position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center text-decoration-none shadow-lg">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="ms-1"><path d="M8 5v14l11-7z"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ==========================================
     STEP-BY-STEP DETAILED FLOW
=========================================== -->
<section class="py-5 pb-works-bg-soft">
    <div class="container py-5">
        
        <!-- STEP 1 -->
        <div id="step-1" class="row align-items-center g-5 mb-5 pb-5">
            <div class="col-lg-6 pb-works-fade-up">
                <div class="pb-works-step-pill d-inline-flex align-items-center justify-content-center fw-bold text-white bg-primary rounded-pill mb-3">
                    01
                </div>
                <h2 class="fw-bold fs-1 text-dark mb-3">Select a Designed Template</h2>
                <p class="text-muted lead mb-4 pe-lg-4">
                    Choose from a curated collection of high-converting, responsive templates specifically crafted for developers, designers, product managers, and creators.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Optimized for all mobile and desktop browsers
                    </li>
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Pre-configured light, dark, and high-contrast modes
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 pb-works-fade-right">
                <div class="pb-works-card bg-white p-3 rounded-4 shadow-sm border">
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Template selection screen">
                </div>
            </div>
        </div>

        <!-- STEP 2 -->
        <div id="step-2" class="row align-items-center g-5 my-5 pb-5 flex-lg-row-reverse">
            <div class="col-lg-6 pb-works-fade-up">
                <div class="pb-works-step-pill d-inline-flex align-items-center justify-content-center fw-bold text-white bg-primary rounded-pill mb-3">
                    02
                </div>
                <h2 class="fw-bold fs-1 text-dark mb-3">Import or Input Your Content</h2>
                <p class="text-muted lead mb-4 pe-lg-4">
                    Connect your GitHub, LinkedIn, or Behance accounts to auto-fill your project history and work experience in seconds.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        One-click repository and project syncing
                    </li>
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Built-in AI writing assistant for bios & job summaries
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 pb-works-fade-right">
                <div class="pb-works-card bg-white p-3 rounded-4 shadow-sm border">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Import data tool">
                </div>
            </div>
        </div>

        <!-- STEP 3 -->
        <div id="step-3" class="row align-items-center g-5 my-5 pb-5">
            <div class="col-lg-6 pb-works-fade-up">
                <div class="pb-works-step-pill d-inline-flex align-items-center justify-content-center fw-bold text-white bg-primary rounded-pill mb-3">
                    03
                </div>
                <h2 class="fw-bold fs-1 text-dark mb-3">Customize Theme & Layout</h2>
                <p class="text-muted lead mb-4 pe-lg-4">
                    Fine-tune colors, drag-and-drop sections, upload your resume PDF, and customize typography to match your style.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Real-time live preview while typing
                    </li>
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Flexible layout reordering with zero code
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 pb-works-fade-right">
                <div class="pb-works-card bg-white p-3 rounded-4 shadow-sm border">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Customizer editor interface">
                </div>
            </div>
        </div>

        <!-- STEP 4 -->
        <div id="step-4" class="row align-items-center g-5 mt-5 flex-lg-row-reverse">
            <div class="col-lg-6 pb-works-fade-up">
                <div class="pb-works-step-pill d-inline-flex align-items-center justify-content-center fw-bold text-white bg-primary rounded-pill mb-3">
                    04
                </div>
                <h2 class="fw-bold fs-1 text-dark mb-3">Publish & Export PDF</h2>
                <p class="text-muted lead mb-4 pe-lg-4">
                    Publish directly to a custom web domain or generate a polished PDF version of your portfolio with a single click.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Free SSL certificate and fast global CDN hosting
                    </li>
                    <li class="d-flex align-items-center text-muted fw-medium">
                        <svg class="text-primary me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Print-ready PDF generator built-in
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 pb-works-fade-right">
                <div class="pb-works-card bg-white p-3 rounded-4 shadow-sm border">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Published dashboard screen">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     CALL TO ACTION BANNER
=========================================== -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="pb-works-cta-banner text-white text-center rounded-5 py-5 px-4 position-relative overflow-hidden shadow-lg">
            <div class="position-relative z-1 py-4">
                <h2 class="fw-bold display-5 mb-3 text-white">Ready to create yours?</h2>
                <p class="text-white-50 mb-4 lead">Start building your custom portfolio today. No credit card required.</p>
                <a href="/register" class="btn btn-primary btn-lg pb-works-btn-pill px-5 py-3 fw-bold shadow">
                    Get Started Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection