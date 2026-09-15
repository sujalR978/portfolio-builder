<!-- ==========================================
     EXECUTIVE ADMIN NAVBAR (THEME ADAPTIVE)
=========================================== -->
<header class="pb-header-wrapper w-100 py-3">
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg pb-navbar px-3 py-2 shadow-sm">
            
            <!-- Admin Brand Logo -->
            <a href="{{ url('/admin_dashboard') }}" class="navbar-brand pb-brand d-flex align-items-center text-decoration-none">
                <div class="pb-brand-icon-bg me-2 d-flex align-items-center justify-content-center">
                    <svg class="pb-brand-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <span class="pb-brand-title fw-bold">Portfolio<span class="text-primary">Admin</span></span>
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle fw-bold ms-2 extra-small rounded-pill pb-admin-badge">PANEL</span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler pb-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#pbAdminNavbarContent" aria-controls="pbAdminNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links & Actions -->
            <div class="collapse navbar-collapse" id="pbAdminNavbarContent">
                
                <!-- Center Links -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 pt-2 pt-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/admin_dashboard') }}" class="nav-link pb-link {{ request()->is('admin/dashboard') ? 'active fw-bold text-primary' : '' }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin_feedback') }}" class="nav-link pb-link {{ request()->is('admin/feedback') ? 'active fw-bold text-primary' : '' }}">Feedbacks</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin_inquiry') }}" class="nav-link pb-link {{ request()->is('admin/inquiry') ? 'active fw-bold text-primary' : '' }}">Inquiries</a>
                    </li>
                </ul>

                <!-- Right Side Admin Profile Group -->
                <div class="d-flex align-items-center gap-3 pt-3 pt-lg-0 pb-cta-group">
                    
                    <!-- Profile Dropdown -->
                    <div class="dropdown">
                        <button class="btn p-0 border-0 d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="pb-admin-avatar rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center shadow-sm" style="width: 38px; height: 38px; font-size: 0.9rem;">
                                A
                            </div>
                            <div class="text-start d-none d-xl-block">
                                <span class="d-block fw-bold small pb-ts-heading leading-none">{{ session('user_name', 'Admin') }}</span>
                                <span class="extra-small text-muted">System Administrator</span>
                            </div>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-muted d-none d-xl-inline-block"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-4 mt-2 p-2 pb-ts-card" style="min-width: 210px;">
                            <li class="px-3 py-2 border-bottom pb-ts-border-subtle mb-1">
                                <span class="d-block fw-bold small pb-ts-heading">{{ session('user_name', 'Administrator') }}</span>
                                <span class="d-block text-muted extra-small">admin@example.com</span>
                            </li>
                           
                            <li><hr class="dropdown-divider my-1 pb-ts-border-subtle"></li>
                            <li>
                                <form action="{{ route('log_out') }}" method="POST" class="m-0">
                                    @csrf
                                    <button type="submit" class="dropdown-item rounded-3 small py-2 text-danger fw-semibold d-flex align-items-center gap-2">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                                        <span>Log Out</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            
        </nav>
    </div>
</header>