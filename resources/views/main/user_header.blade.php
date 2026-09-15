<!-- ==========================================
     EXECUTIVE LOGGED-IN USER NAVBAR
=========================================== -->
<header class="pb-header-wrapper w-100 py-3">
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg pb-navbar px-3 py-2 shadow-sm">
            
            <!-- Brand Logo -->
            <a href="{{ url('/dashboard') }}" class="navbar-brand pb-brand d-flex align-items-center text-decoration-none">
                <div class="pb-brand-icon-bg me-2 d-flex align-items-center justify-content-center">
                    <svg class="pb-brand-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 12 12 17 22 12"></polyline>
                        <polyline points="2 17 12 22 22 17"></polyline>
                    </svg>
                </div>
                <span class="pb-brand-title fw-bold">Portfolio<span class="text-primary">Builder</span></span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler pb-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#pbUserNavbarContent" aria-controls="pbUserNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links & Actions -->
            <div class="collapse navbar-collapse" id="pbUserNavbarContent">
                
                <!-- Center Links -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 pt-2 pt-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link pb-link {{ request()->is('dashboard') ? 'active fw-bold text-primary' : '' }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/explor') }}" class="nav-link pb-link {{ request()->is('explor') ? 'active fw-bold text-primary' : '' }}">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/feedback') }}" class="nav-link pb-link {{ request()->is('feedback') ? 'active fw-bold text-primary' : '' }}">Feedback</a>
                    </li>
                </ul>

                <!-- Right Side CTA & Profile Group -->
                <div class="d-flex align-items-center gap-3 pt-3 pt-lg-0 pb-cta-group">
                    
                    <!-- Create Project CTA Button -->
                    <a href="{{ url('/create_project') }}" class="btn pb-btn-cta text-white fw-semibold d-inline-flex align-items-center justify-content-center shadow-sm">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        <span class="ms-1.5">New Project</span>
                    </a>

                    <!-- Profile Dropdown -->
                    <div class="dropdown">
                        <button class="btn p-0 border-0 d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center shadow-sm" style="width: 38px; height: 38px; font-size: 0.9rem;">
                                {{ strtoupper(substr(session('user_name', 'U'), 0, 1)) }}
                            </div>
                            <span class="fw-semibold small text-dark d-none d-xl-inline-block">{{ session('user_name', 'Account') }}</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-muted d-none d-xl-inline-block"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-4 mt-2 p-2" style="min-width: 200px;">
                            <li class="px-3 py-2 border-bottom mb-1">
                                <span class="d-block fw-bold text-dark small">{{ session('user_name', 'User') }}</span>
                                <span class="d-block text-muted extra-small">Member</span>
                            </li>
                            <li>
                                <a class="dropdown-item rounded-3 small py-2 d-flex align-items-center gap-2" href="{{ url('/profile') }}">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded-3 small py-2 d-flex align-items-center gap-2" href="{{ url('/dashboard') }}">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                                    <span>My Projects</span>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider my-1"></li>
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