<!-- ==========================================
     EXECUTIVE LOGGED-IN USER FOOTER
=========================================== -->
<footer class="pb-footer-wrapper mt-auto pt-5 pb-4">
    <div class="container-xl">
        
        <!-- TOP CREATOR CTA CARD -->
        <div class="pb-footer-cta-card p-4 p-md-5 mb-5 shadow-sm rounded-5 d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4">
            <div>
                <h3 class="fw-bold mb-2 text-dark">Ready to publish your next project?</h3>
                <p class="text-muted mb-0">Use our multi-step wizard to quickly update your portfolio or generate a fresh PDF resume.</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="{{ url('/create_project') }}" class="btn pb-btn-cta text-white fw-semibold text-nowrap px-4 py-2.5 shadow-sm d-inline-flex align-items-center gap-2">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    <span>Create New Project</span>
                </a>
            </div>
        </div>

        <!-- MAIN FOOTER NAVIGATION GRID -->
        <div class="row g-4 mb-5">
            
            <!-- Brand Info Column -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ url('/dashboard') }}" class="navbar-brand pb-brand d-flex align-items-center text-decoration-none mb-3">
                    <div class="pb-brand-icon-bg me-2 d-flex align-items-center justify-content-center">
                        <svg class="pb-brand-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 12 12 17 22 12"></polyline>
                            <polyline points="2 17 12 22 22 17"></polyline>
                        </svg>
                    </div>
                    <span class="pb-brand-title fw-bold">Portfolio<span class="text-primary">Builder</span></span>
                </a>
                <p class="text-muted small pe-lg-4 mb-4">
                    Your personal portfolio workspace. Craft stunning project showcases, customize layouts, and export PDFs effortlessly.
                </p>
                <div class="d-flex align-items-center gap-2">
                    <a href="#" class="pb-social-icon d-flex align-items-center justify-content-center text-decoration-none" aria-label="Twitter/X">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                    </a>
                    <a href="#" class="pb-social-icon d-flex align-items-center justify-content-center text-decoration-none" aria-label="GitHub">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    </a>
                    <a href="#" class="pb-social-icon d-flex align-items-center justify-content-center text-decoration-none" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                </div>
            </div>

            <!-- Workspace Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="fw-bold text-dark mb-3 pb-footer-heading">Workspace</h6>
                <ul class="list-unstyled pb-footer-links d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/dashboard') }}" class="text-decoration-none">Dashboard</a></li>
                    <li><a href="{{ url('/create_project') }}" class="text-decoration-none">Project Wizard</a></li>
                    <li><a href="{{ url('/explor') }}" class="text-decoration-none">Explore Showcase</a></li>
                    <li><a href="{{ url('/profile') }}" class="text-decoration-none">Account Settings</a></li>
                </ul>
            </div>

            <!-- Support & Feedback -->
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="fw-bold text-dark mb-3 pb-footer-heading">Support</h6>
                <ul class="list-unstyled pb-footer-links d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/feedback') }}" class="text-decoration-none">Submit Feedback</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-decoration-none">Help &amp; Contact</a></li>
                    <li><a href="{{ url('/about') }}" class="text-decoration-none">Platform Info</a></li>
                </ul>
            </div>

            <!-- Account Summary Card -->
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-bold text-dark mb-3 pb-footer-heading">Signed In As</h6>
                <div class="p-3 bg-light rounded-4 border pb-ts-subcard">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center shadow-sm" style="width: 42px; height: 42px; flex-shrink: 0;">
                            {{ strtoupper(substr(session('user_name', 'U'), 0, 1)) }}
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold text-dark mb-0 small text-truncate">{{ session('user_name', 'Active User') }}</h6>
                            <span class="extra-small text-muted d-block">User Member</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <hr class="my-4" style="border-color: rgba(15, 23, 42, 0.08);">

        <!-- BOTTOM COPYRIGHT & THEME SWITCHER BAR -->
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 text-center text-md-start">
            <p class="small text-muted mb-0">
                &copy; {{ date('Y') }} <strong>Portfolio Builder</strong>. Logged-In User Workspace.
            </p>

            <!-- Embedded Theme Switcher Pill -->
            <div class="pb-theme-switcher-footer d-inline-flex align-items-center p-1 rounded-pill border">
                <button type="button" class="btn btn-sm rounded-pill pb-theme-btn border-0 py-1 px-3" onclick="switchTheme('light')">
                    Light
                </button>
                <button type="button" class="btn btn-sm rounded-pill pb-theme-btn border-0 py-1 px-3" onclick="switchTheme('dark')">
                    Dark
                </button>
                <button type="button" class="btn btn-sm rounded-pill pb-theme-btn border-0 py-1 px-3" onclick="switchTheme('premium')">
                    Premium
                </button>
            </div>

            <div class="d-flex align-items-center gap-3 small text-muted">
                <span class="d-inline-flex align-items-center"><span class="pb-status-dot me-2"></span> Cloud Connected</span>
            </div>
        </div>

    </div>
</footer>