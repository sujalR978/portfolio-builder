@extends('layouts.master')

@section('title', 'About Us - Portfolio Builder')

@section('content')

<!-- ==========================================
     ABOUT HERO SECTION
=========================================== -->
<section class="pb-about-hero py-5 text-center position-relative">
    <div class="container py-4 position-relative z-1">
        <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm mb-4 pb-about-badge">
            <span class="badge bg-primary rounded-pill me-2 text-white">Our Story</span>
            <span class="small fw-semibold text-muted">Empowering Creators</span>
        </div>
        
        <h1 class="display-3 fw-bold text-dark mb-3">
            We help professionals showcase their <span class="text-primary">brilliance</span>
        </h1>
        
        <p class="lead text-muted mx-auto mb-5" style="max-width: 720px;">
            Portfolio Builder was founded with a single mission: to eliminate the hassle of website building so developers, designers, and creators can focus on doing what they love.
        </p>

        <!-- Hero Mosaic Image Grid -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-8 col-lg-10">
                <div class="pb-about-card bg-white p-2 rounded-4 shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Our Team Collaborating">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     MISSION & VISION SECTION
=========================================== -->
<section class="py-5 pb-about-bg-soft">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <!-- Left Text Content -->
            <div class="col-lg-6 pb-about-fade-up">
                <h2 class="fw-bold fs-1 text-dark mb-4">Driven by simplicity, backed by powerful tech</h2>
                <p class="text-muted lead mb-4 pe-lg-3">
                    We believe your personal brand shouldn't require weeks of coding or expensive agency fees. Every professional deserves a clean, fast, and SEO-optimized portfolio that speaks for itself.
                </p>
                <div class="row g-4 mt-2">
                    <div class="col-6">
                        <div class="pb-about-stat-box p-3 rounded-4 bg-white border shadow-sm">
                            <h3 class="fw-bold text-primary display-6 mb-1">20K+</h3>
                            <p class="text-muted small mb-0 fw-semibold">Portfolios Created</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="pb-about-stat-box p-3 rounded-4 bg-white border shadow-sm">
                            <h3 class="fw-bold text-primary display-6 mb-1">99.9%</h3>
                            <p class="text-muted small mb-0 fw-semibold">Platform Uptime</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 pb-about-fade-right">
                <div class="pb-about-card bg-white p-3 rounded-4 shadow-sm border">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-3 w-100" alt="Team Brainstorming">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     CORE VALUES SECTION
=========================================== -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold fs-1 text-dark mb-3">Our Core Values</h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px;">The principles that guide every feature we build.</p>
        </div>

        <div class="row g-4">
            <!-- Value 1 -->
            <div class="col-md-4">
                <div class="pb-about-card bg-white p-4 p-md-5 h-100 border rounded-4 shadow-sm text-center">
                    <div class="pb-about-icon-box text-primary mx-auto mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <h3 class="fw-bold fs-4 text-dark mb-3">Speed First</h3>
                    <p class="text-muted small mb-0">From site load times to how quickly you can create a page—speed is at the center of everything we do.</p>
                </div>
            </div>

            <!-- Value 2 -->
            <div class="col-md-4">
                <div class="pb-about-card bg-white p-4 p-md-5 h-100 border rounded-4 shadow-sm text-center">
                    <div class="pb-about-icon-box text-primary mx-auto mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                    </div>
                    <h3 class="fw-bold fs-4 text-dark mb-3">Effortless Design</h3>
                    <p class="text-muted small mb-0">Beautiful layouts out-of-the-box so you never have to worry about color theory or alignment issues.</p>
                </div>
            </div>

            <!-- Value 3 -->
            <div class="col-md-4">
                <div class="pb-about-card bg-white p-4 p-md-5 h-100 border rounded-4 shadow-sm text-center">
                    <div class="pb-about-icon-box text-primary mx-auto mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <h3 class="fw-bold fs-4 text-dark mb-3">Data Privacy</h3>
                    <p class="text-muted small mb-0">Your content belongs to you. Export your portfolio or resume to PDF anytime with full security.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     MEET THE TEAM SECTION
=========================================== -->
<section class="py-5 pb-about-bg-soft">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold fs-1 text-dark mb-3">Meet the Minds Behind It</h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px;">A passionate team dedicated to making portfolio building seamless.</p>
        </div>

        <div class="row g-4">
            <!-- Member 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="pb-about-card bg-white p-4 rounded-4 border shadow-sm text-center">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=400&auto=format&fit=crop" class="rounded-circle mb-3 object-fit-cover shadow-sm" width="100" height="100" alt="Alex Morgan">
                    <h4 class="fw-bold text-dark mb-1 fs-5">Alex Morgan</h4>
                    <p class="text-primary small fw-semibold mb-3">Founder & CEO</p>
                    <p class="text-muted small mb-0">Former Product Designer passionate about minimal UI and developer tooling.</p>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="pb-about-card bg-white p-4 rounded-4 border shadow-sm text-center">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" class="rounded-circle mb-3 object-fit-cover shadow-sm" width="100" height="100" alt="David Chen">
                    <h4 class="fw-bold text-dark mb-1 fs-5">David Chen</h4>
                    <p class="text-primary small fw-semibold mb-3">Lead Architect</p>
                    <p class="text-muted small mb-0">Full-stack engineer obsessed with cloud performance and instant compilation.</p>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="pb-about-card bg-white p-4 rounded-4 border shadow-sm text-center">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&auto=format&fit=crop" class="rounded-circle mb-3 object-fit-cover shadow-sm" width="100" height="100" alt="Sarah Jenkins">
                    <h4 class="fw-bold text-dark mb-1 fs-5">Sarah Jenkins</h4>
                    <p class="text-primary small fw-semibold mb-3">Head of Design</p>
                    <p class="text-muted small mb-0">Crafts beautiful, accessible template designs tailored for modern SaaS products.</p>
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
        <div class="pb-about-cta-banner text-white text-center rounded-5 py-5 px-4 position-relative overflow-hidden shadow-lg">
            <div class="position-relative z-1 py-4">
                <h2 class="fw-bold display-5 mb-3 text-white">Join thousands of creators today</h2>
                <p class="text-white-50 mb-4 lead">Build your portfolio in minutes and share it with the world.</p>
                <a href="/register" class="btn btn-primary btn-lg pb-about-btn-pill px-5 py-3 fw-bold shadow">
                    Create Your Free Portfolio
                </a>
            </div>
        </div>
    </div>
</section>

@endsection