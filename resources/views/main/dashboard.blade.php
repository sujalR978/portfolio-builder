@extends('layouts.master')

@section('title', 'Creator Dashboard - Portfolio Builder')

@section('content')

<!-- ==========================================
     DASHBOARD TOP WELCOME BANNER
=========================================== -->
<section class="pb-dash-hero py-4 border-bottom pb-ts-border-subtle">
    <div class="container-xl">
        <div class="row align-items-center g-3">
            <div class="col-md-7">
                <div class="d-inline-flex align-items-center px-3 py-1 rounded-pill border pb-ts-subcard pb-ts-border-subtle shadow-sm mb-2">
                    <span class="badge bg-primary rounded-pill me-2 text-white">Live</span>
                    <span class="small fw-semibold text-muted">portfolio.build/{{ session('username', 'janedoe') }}</span>
                </div>
                <h1 class="fw-bold text-dark fs-2 mb-1 pb-ts-heading">
                    Welcome back, <span class="text-primary">{{ session('user_name', 'Jane') }}</span> 👋
                </h1>
                <p class="text-muted small mb-0">Manage your portfolio projects, track visitor stats, and tweak your design preferences.</p>
            </div>
            
            <div class="col-md-5 text-md-end d-flex gap-2 justify-content-md-end flex-wrap">
                <a href="/{{ session('username', 'janedoe') }}" target="_blank" class="btn rounded-3 px-3 py-2 fw-semibold pb-ts-btn-outline d-inline-flex align-items-center gap-1.5">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    <span>View Live Site</span>
                </a>
                <a href="#customizer" class="btn btn-primary rounded-3 px-3 py-2 fw-bold text-white shadow-sm pb-ts-btn-main d-inline-flex align-items-center gap-1.5">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    <span>Edit Portfolio</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     METRICS & QUICK STATS CARDS
=========================================== -->
<section class="py-4 pb-admin-bg-soft min-vh-100">
    <div class="container-xl">
        <div class="row g-3 mb-4">
            
            <!-- Stat 1: Total Views -->
            <div class="col-sm-6 col-lg-3">
                <div class="pb-ts-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-semibold d-block mb-1">Total Profile Views</span>
                        <h3 class="fw-bold text-dark mb-0 pb-ts-heading">2,480</h3>
                        <span class="small text-success fw-semibold"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> +18.4% this week</span>
                    </div>
                    <div class="pb-dash-icon-box bg-primary-subtle text-primary rounded-3 flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 46px; height: 46px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                </div>
            </div>

            <!-- Stat 2: Active Projects -->
            <div class="col-sm-6 col-lg-3">
                <div class="pb-ts-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-semibold d-block mb-1">Active Projects</span>
                        <h3 class="fw-bold text-dark mb-0 pb-ts-heading">08</h3>
                        <span class="small text-muted">2 Drafts pending</span>
                    </div>
                    <div class="pb-dash-icon-box bg-primary-subtle text-primary rounded-3 flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 46px; height: 46px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                </div>
            </div>

            <!-- Stat 3: Downloads / PDF -->
            <div class="col-sm-6 col-lg-3">
                <div class="pb-ts-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-semibold d-block mb-1">Resume Downloads</span>
                        <h3 class="fw-bold text-dark mb-0 pb-ts-heading">142</h3>
                        <span class="small text-success fw-semibold"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> +8 today</span>
                    </div>
                    <div class="pb-dash-icon-box bg-primary-subtle text-primary rounded-3 flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 46px; height: 46px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    </div>
                </div>
            </div>

            <!-- Stat 4: Active Theme -->
            <div class="col-sm-6 col-lg-3">
                <div class="pb-ts-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-semibold d-block mb-1">Current Active Theme</span>
                        <h3 class="fw-bold text-dark mb-0 fs-5 pb-ts-heading">Premium Gold</h3>
                        <a href="#customizer" class="small text-primary fw-semibold text-decoration-none">Click to change &rarr;</a>
                    </div>
                    <div class="pb-dash-icon-box bg-primary-subtle text-primary rounded-3 flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 46px; height: 46px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                    </div>
                </div>
            </div>

        </div>

        <!-- ==========================================
             MAIN CONTENT: PROJECT MANAGEMENT & CUSTOMIZER
        =========================================== -->
        <div class="row g-4">
            
            <!-- LEFT MAIN: PROJECTS LIST & EDITOR -->
            <div class="col-lg-8">
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <div>
                            <h4 class="fw-bold text-dark mb-1 fs-4 pb-ts-heading">Your Projects</h4>
                            <p class="text-muted small mb-0">Add, edit, or reorder work showcased on your portfolio.</p>
                        </div>
                        <a href="{{ url('/create_project') }}" class="btn btn-primary rounded-3 btn-sm fw-bold px-3 py-2 pb-ts-btn-main d-inline-flex align-items-center gap-1">
                            <span>+ Add New Project</span>
                        </a>
                    </div>

                    <!-- Project Items List with Dynamic Theme Support -->
                    <div class="d-flex flex-column gap-3">
                        
                        <!-- Item 1 -->
                        <div class="p-3 rounded-4 border pb-ts-subcard pb-ts-border-subtle d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=200&auto=format&fit=crop" class="rounded-3 object-fit-cover border" width="60" height="60" alt="Project Thumbnail">
                                <div>
                                    <h6 class="fw-bold mb-1 small pb-ts-label">SaaS Analytics Dashboard</h6>
                                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill me-1 extra-small fw-bold">Laravel</span>
                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill extra-small fw-bold">Vue.js</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 ms-auto">
                                <button type="button" class="btn btn-sm rounded-3 px-3 fw-semibold pb-ts-btn-outline">Edit</button>
                                <button type="button" class="btn btn-sm rounded-3 px-2 pb-ts-btn-danger-outline">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="p-3 rounded-4 border pb-ts-subcard pb-ts-border-subtle d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=200&auto=format&fit=crop" class="rounded-3 object-fit-cover border" width="60" height="60" alt="Project Thumbnail">
                                <div>
                                    <h6 class="fw-bold mb-1 small pb-ts-label">AI Resume Builder Web App</h6>
                                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill me-1 extra-small fw-bold">React</span>
                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill extra-small fw-bold">Tailwind</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 ms-auto">
                                <button type="button" class="btn btn-sm rounded-3 px-3 fw-semibold pb-ts-btn-outline">Edit</button>
                                <button type="button" class="btn btn-sm rounded-3 px-2 pb-ts-btn-danger-outline">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="p-3 rounded-4 border pb-ts-subcard pb-ts-border-subtle d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?q=80&w=200&auto=format&fit=crop" class="rounded-3 object-fit-cover border" width="60" height="60" alt="Project Thumbnail">
                                <div>
                                    <h6 class="fw-bold mb-1 small pb-ts-label">E-Commerce Brand Redesign</h6>
                                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill me-1 extra-small fw-bold">Figma</span>
                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill extra-small fw-bold">Bootstrap 5</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 ms-auto">
                                <button type="button" class="btn btn-sm rounded-3 px-3 fw-semibold pb-ts-btn-outline">Edit</button>
                                <button type="button" class="btn btn-sm rounded-3 px-2 pb-ts-btn-danger-outline">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT SIDEBAR: QUICK ACTIONS & THEME SELECTOR -->
            <div class="col-lg-4">
                
                <!-- Quick Actions Widget -->
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm mb-4">
                    <h5 class="fw-bold text-dark mb-3 fs-5 pb-ts-heading">Quick Actions</h5>
                    <div class="d-flex flex-column gap-2">
                        <a href="{{ url('/profile') }}" class="btn text-start d-flex align-items-center justify-content-between p-3 rounded-3 fw-semibold pb-ts-btn-outline">
                            <span>Edit Profile Info</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                        <a href="#" class="btn text-start d-flex align-items-center justify-content-between p-3 rounded-3 fw-semibold pb-ts-btn-outline">
                            <span>Export Resume PDF</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        </a>
                        <a href="{{ url('/feedback') }}" class="btn text-start d-flex align-items-center justify-content-between p-3 rounded-3 fw-semibold pb-ts-btn-outline">
                            <span>Submit Feedback</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Fast Theme Switcher Widget -->
                <div id="customizer" class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm">
                    <h5 class="fw-bold text-dark mb-1 fs-5 pb-ts-heading">Site Mode Theme</h5>
                    <p class="text-muted small mb-3">Instantly switch workspace look.</p>

                    <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn border p-2 text-start rounded-3 d-flex align-items-center justify-content-between pb-ts-subcard pb-ts-border-subtle" onclick="setAppTheme('light')">
                            <span class="fw-semibold small pb-ts-label">Light Mode</span>
                            <span class="p-2 bg-light border rounded-circle"></span>
                        </button>
                        <button type="button" class="btn border p-2 text-start rounded-3 d-flex align-items-center justify-content-between pb-ts-subcard pb-ts-border-subtle" onclick="setAppTheme('dark')">
                            <span class="fw-semibold small pb-ts-label">Dark Mode</span>
                            <span class="p-2 bg-dark border rounded-circle"></span>
                        </button>
                        <button type="button" class="btn border p-2 text-start rounded-3 d-flex align-items-center justify-content-between pb-ts-subcard pb-ts-border-subtle" onclick="setAppTheme('premium')">
                            <span class="fw-semibold small pb-ts-label">Premium Obsidian Gold</span>
                            <span class="p-2 rounded-circle" style="background-color: #D4AF37;"></span>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<script>
    function setAppTheme(themeName) {
        document.documentElement.setAttribute('data-bs-theme', themeName);
        localStorage.setItem('pb_theme', themeName);
    }
</script>

@endsection