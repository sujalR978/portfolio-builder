<!-- ==========================================
     EXECUTIVE ADMIN FOOTER
=========================================== -->
<footer class="pb-footer-wrapper mt-auto pt-5 pb-4">
    <div class="container-xl">
        
        <!-- TOP ADMIN SYSTEM NOTICE CARD -->
        <div class="pb-footer-cta-card p-4 p-md-5 mb-5 shadow-sm rounded-5 d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4 border border-primary-subtle">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-3 bg-primary-subtle text-primary p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <h4 class="fw-bold mb-1 text-dark">System Control Panel</h4>
                    <p class="text-muted mb-0 small">Manage user inquiries, platform feedback, and deployment statistics.</p>
                </div>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/admin_feedback') }}" class="btn pb-btn-cta text-white fw-semibold text-nowrap px-3 py-2 shadow-sm extra-small">
                    View Feedback
                </a>
                <a href="{{ url('/admin_inquiry') }}" class="btn btn-outline-secondary rounded-3 px-3 py-2 fw-semibold text-nowrap pb-ts-btn-outline extra-small">
                    View Inquiries
                </a>
            </div>
        </div>

        <!-- MAIN FOOTER NAVIGATION GRID -->
        <div class="row g-4 mb-5">
            
            <!-- Brand Info Column -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ url('/admin_dashboard') }}" class="navbar-brand pb-brand d-flex align-items-center text-decoration-none mb-3">
                    <div class="pb-brand-icon-bg me-2 d-flex align-items-center justify-content-center">
                        <svg class="pb-brand-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <span class="pb-brand-title fw-bold">Portfolio<span class="text-primary">Admin</span></span>
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle fw-bold ms-2 extra-small rounded-pill pb-admin-badge">PANEL</span>
                </a>
                <p class="text-muted small pe-lg-4 mb-0">
                    Administrative environment for monitoring application performance, responding to user tickets, and regulating platform activities.
                </p>
            </div>

            <!-- Management Links -->
            <div class="col-lg-3 col-md-6 col-6">
                <h6 class="fw-bold text-dark mb-3 pb-footer-heading">Administration</h6>
                <ul class="list-unstyled pb-footer-links d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/admin_dashboard') }}" class="text-decoration-none">Control Dashboard</a></li>
                    <li><a href="{{ url('/admin_feedback') }}" class="text-decoration-none">User Feedbacks</a></li>
                    <li><a href="{{ url('/admin_inquiry') }}" class="text-decoration-none">Customer Inquiries</a></li>
                </ul>
            </div>

            <!-- Active Admin Account Summary -->
            <div class="col-lg-5 col-md-6">
                <h6 class="fw-bold text-dark mb-3 pb-footer-heading">Authenticated Admin</h6>
                <div class="p-3 bg-light rounded-4 border pb-ts-subcard">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="pb-admin-avatar rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center shadow-sm" style="width: 40px; height: 40px; flex-shrink: 0;">
                                A
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-bold text-dark mb-0 small pb-ts-heading text-truncate">{{ session('user_name', 'Administrator') }}</h6>
                                <span class="extra-small text-muted d-block">Super Admin Privilege</span>
                            </div>
                        </div>
                        <form action="{{ route('log_out') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm rounded-3 extra-small fw-bold px-3 py-1.5">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <hr class="my-4" style="border-color: rgba(15, 23, 42, 0.08);">

        <!-- BOTTOM COPYRIGHT & THEME SWITCHER BAR -->
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 text-center text-md-start">
            <p class="small text-muted mb-0">
                &copy; {{ date('Y') }} <strong>Portfolio Builder</strong>. System Administration Console.
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
                <span class="d-inline-flex align-items-center"><span class="pb-status-dot me-2 bg-success"></span> Admin Session Active</span>
            </div>
        </div>

    </div>
</footer>