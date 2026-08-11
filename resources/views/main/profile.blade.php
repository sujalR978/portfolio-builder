@extends('layouts.master')

@section('title', 'My Profile & Settings - Portfolio Builder')

@section('content')

<!-- ==========================================
     PROFILE HERO & STATS BANNER
=========================================== -->
<section class="pb-profile-hero py-5">
    <div class="container py-2">
        <div class="pb-profile-card bg-white rounded-5 p-4 p-md-5 border shadow-sm">
            <div class="row align-items-center g-4">
                
                <!-- User Avatar & Info -->
                <div class="col-lg-6 d-flex align-items-center gap-4">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop" class="rounded-circle object-fit-cover border border-3 border-primary shadow-sm" width="96" height="96" alt="Profile Avatar">
                        <span class="position-absolute bottom-0 end-0 bg-success p-2 border border-2 border-white rounded-circle"></span>
                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <h2 class="fw-bold text-dark mb-0 fs-3">{{ session('user_email', 'john@example.com') }}</h2>
                            <span class="badge bg-primary rounded-pill text-white small">Pro Member</span>
                        </div>
                        <p class="text-muted small mb-2">Member since August 2026</p>
                        <a href="#profile-edit" class="small text-primary text-decoration-none fw-semibold">Edit Info &rarr;</a>
                    </div>
                </div>

                <!-- Live Metrics / Stats -->
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-4 col-6">
                            <div class="pb-profile-stat-box p-3 rounded-4 border text-center bg-light">
                                <h3 class="fw-bold text-primary mb-0 display-6">08</h3>
                                <p class="text-muted small mb-0 fw-semibold">Projects Created</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="pb-profile-stat-box p-3 rounded-4 border text-center bg-light">
                                <h3 class="fw-bold text-primary mb-0 display-6">02</h3>
                                <p class="text-muted small mb-0 fw-semibold">Published Sites</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="pb-profile-stat-box p-3 rounded-4 border text-center bg-light">
                                <h3 class="fw-bold text-primary mb-0 display-6">1.4K</h3>
                                <p class="text-muted small mb-0 fw-semibold">Total Profile Views</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SETTINGS & MANAGEMENT MAIN CONTENT
=========================================== -->
<section class="pb-profile-bg-soft py-5">
    <div class="container py-2">
        <div class="row g-4">
            
            <!-- LEFT COLUMN: NAVIGATION TABS & QUICK FAQS -->
            <div class="col-lg-4">
                <div class="pb-profile-card bg-white p-4 rounded-4 border shadow-sm mb-4">
                    <h5 class="fw-bold text-dark mb-3">Settings Menu</h5>
                    <div class="nav flex-column nav-pills pb-profile-nav-pills gap-2" id="v-pills-tab" role="tablist">
                        <button class="nav-link active d-flex align-items-center gap-3 text-start py-3 px-3 rounded-3" id="v-pills-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-info" type="button" role="tab">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            <span>Profile Information</span>
                        </button>
                        <button class="nav-link d-flex align-items-center gap-3 text-start py-3 px-3 rounded-3" id="v-pills-theme-tab" data-bs-toggle="pill" data-bs-target="#v-pills-theme" type="button" role="tab">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                            <span>Theme & Appearance</span>
                        </button>
                        <button class="nav-link d-flex align-items-center gap-3 text-start py-3 px-3 rounded-3" id="v-pills-faq-tab" data-bs-toggle="pill" data-bs-target="#v-pills-faq" type="button" role="tab">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            <span>Account FAQ</span>
                        </button>
                        <button class="nav-link text-danger d-flex align-items-center gap-3 text-start py-3 px-3 rounded-3" id="v-pills-danger-tab" data-bs-toggle="pill" data-bs-target="#v-pills-danger" type="button" role="tab">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                            <span>Danger Zone</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: TAB CONTENTS -->
            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                    
                    <!-- TAB 1: PROFILE INFO FORM -->
                    <div class="tab-pane fade show active" id="v-pills-info" role="tabpanel" id="profile-edit">
                        <div class="pb-profile-card bg-white p-4 p-md-5 rounded-4 border shadow-sm">
                            <h4 class="fw-bold text-dark mb-1">Personal Details</h4>
                            <p class="text-muted small mb-4">Update your basic profile information and public details.</p>

                            <form action="#" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold small text-dark">Full Name</label>
                                        <input type="text" class="form-control pb-profile-input" value="Jane Doe" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold small text-dark">Email Address</label>
                                        <input type="email" class="form-control pb-profile-input" value="{{ session('user_email', 'jane@example.com') }}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold small text-dark">Bio / Headline</label>
                                        <input type="text" class="form-control pb-profile-input" value="Senior Full Stack Developer & Open Source Contributor">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold small text-dark">Portfolio Domain Slug</label>
                                        <div class="input-group">
                                            <span class="input-group-text small text-muted">portfolio.build/</span>
                                            <input type="text" class="form-control pb-profile-input" value="janedoe">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold small text-dark">GitHub Username</label>
                                        <input type="text" class="form-control pb-profile-input" value="janedoe-dev">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <button type="submit" class="btn btn-primary pb-profile-btn-pill px-4 fw-bold shadow-sm">
                                            Save Changes &rarr;
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- TAB 2: THEME SWITCHER -->
                    <div class="tab-pane fade" id="v-pills-theme" role="tabpanel">
                        <div class="pb-profile-card bg-white p-4 p-md-5 rounded-4 border shadow-sm">
                            <h4 class="fw-bold text-dark mb-1">Appearance & Theme Preference</h4>
                            <p class="text-muted small mb-4">Choose your preferred workspace color mode.</p>

                            <div class="row g-3">
                                <!-- Light Mode Option -->
                                <div class="col-md-4">
                                    <div class="pb-profile-theme-card p-3 border rounded-4 text-center cursor-pointer active" onclick="setAppTheme('light')">
                                        <div class="rounded-3 p-3 bg-light border mb-2">
                                            <span class="d-block bg-white p-2 border rounded-2 shadow-sm mb-1"></span>
                                            <span class="d-block bg-primary p-1 rounded-pill w-50 mx-auto"></span>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-0">Light Theme</h6>
                                        <span class="small text-muted">Clean & Crisp</span>
                                    </div>
                                </div>

                                <!-- Dark Mode Option -->
                                <div class="col-md-4">
                                    <div class="pb-profile-theme-card p-3 border rounded-4 text-center cursor-pointer" onclick="setAppTheme('dark')">
                                        <div class="rounded-3 p-3 bg-dark border mb-2">
                                            <span class="d-block bg-secondary p-2 border border-secondary rounded-2 shadow-sm mb-1"></span>
                                            <span class="d-block bg-primary p-1 rounded-pill w-50 mx-auto"></span>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-0">Dark Theme</h6>
                                        <span class="small text-muted">Easy on the eyes</span>
                                    </div>
                                </div>

                                <!-- Premium Mode Option -->
                                <div class="col-md-4">
                                    <div class="pb-profile-theme-card p-3 border rounded-4 text-center cursor-pointer" onclick="setAppTheme('premium')">
                                        <div class="rounded-3 p-3 border mb-2" style="background-color: #050505;">
                                            <span class="d-block p-2 border border-warning rounded-2 shadow-sm mb-1" style="background: #121212;"></span>
                                            <span class="d-block p-1 rounded-pill w-50 mx-auto" style="background: #D4AF37;"></span>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-0">Premium Gold</h6>
                                        <span class="small text-muted">Luxury Obsidian</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 3: FAQ MANAGEMENT -->
                    <div class="tab-pane fade" id="v-pills-faq" role="tabpanel">
                        <div class="pb-profile-card bg-white p-4 p-md-5 rounded-4 border shadow-sm">
                            <h4 class="fw-bold text-dark mb-1">Frequently Asked Questions</h4>
                            <p class="text-muted small mb-4">Common questions about account management and projects.</p>

                            <div class="accordion pb-profile-faq" id="profileFaqAccordion">
                                <div class="accordion-item border rounded-3 mb-2 overflow-hidden">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#pf1">
                                            How many projects can I create?
                                        </button>
                                    </h2>
                                    <div id="pf1" class="accordion-collapse collapse show" data-bs-parent="#profileFaqAccordion">
                                        <div class="accordion-body text-muted small">
                                            Pro members can create unlimited projects and connect up to 5 custom domains.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border rounded-3 mb-2 overflow-hidden">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#pf2">
                                            How do I switch my portfolio's public theme?
                                        </button>
                                    </h2>
                                    <div id="pf2" class="accordion-collapse collapse" data-bs-parent="#profileFaqAccordion">
                                        <div class="accordion-body text-muted small">
                                            You can set your default theme in the "Theme & Appearance" tab or directly inside the live Portfolio Customizer editor.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border rounded-3 overflow-hidden">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#pf3">
                                            Can I export my projects to PDF?
                                        </button>
                                    </h2>
                                    <div id="pf3" class="accordion-collapse collapse" data-bs-parent="#profileFaqAccordion">
                                        <div class="accordion-body text-muted small">
                                            Yes! Navigate to your Dashboard and click "Export Resume PDF" to download an ATS-friendly layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 4: DANGER ZONE / DELETE ACCOUNT -->
                    <div class="tab-pane fade" id="v-pills-danger" role="tabpanel">
                        <div class="pb-profile-card bg-white p-4 p-md-5 rounded-4 border border-danger-subtle shadow-sm">
                            <div class="d-flex align-items-center gap-2 mb-2 text-danger">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                                <h4 class="fw-bold mb-0">Delete Account & Data</h4>
                            </div>
                            <p class="text-muted small mb-4">
                                Permanently delete your Portfolio Builder profile, custom domain mapping, and all <strong>8 created projects</strong>. This action cannot be undone.
                            </p>

                            <div class="p-3 bg-danger-subtle rounded-3 border border-danger-subtle mb-4">
                                <span class="small fw-semibold text-danger">Notice:</span> 
                                <span class="small text-danger">Deleting your account immediately unpublishes your active portfolios and cancels any active subscription.</span>
                            </div>

                            <button type="button" class="btn btn-danger pb-profile-btn-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                                Delete Account
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================
     DELETE ACCOUNT CONFIRMATION MODAL
=========================================== -->
<div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content pb-profile-card rounded-4 border-0 shadow-lg p-3">
            <div class="modal-body text-center p-4">
                <div class="pb-profile-icon-box text-danger bg-danger-subtle mb-3 d-inline-flex align-items-center justify-content-center rounded-circle mx-auto" style="width: 60px; height: 60px;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                </div>

                <h4 class="fw-bold text-dark mb-2">Are you absolutely sure?</h4>
                <p class="text-muted small mb-4">This will permanently delete your account, project links, and settings. Type <strong>DELETE</strong> below to confirm.</p>

                <div class="mb-4 text-start">
                    <input type="text" class="form-control pb-profile-input" placeholder="Type DELETE to confirm">
                </div>

                <div class="d-flex flex-column flex-sm-row gap-2">
                    <button type="button" class="btn btn-outline-secondary rounded-pill w-100 py-2 fw-semibold" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    
                    <form action="#" method="POST" class="w-100">
                        @csrf
                        <button type="submit" class="btn btn-danger pb-profile-btn-pill w-100 py-2 fw-bold shadow-sm">
                            Permanently Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Theme switching helper function
    function setAppTheme(themeName) {
        document.documentElement.setAttribute('data-bs-theme', themeName);
        localStorage.setItem('pb_theme', themeName);
    }
</script>

@endsection