<!-- ==========================================
     EXECUTIVE PROFESSIONAL NAVBAR
=========================================== -->
<header class="pb-header-wrapper w-100 py-3">
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg pb-navbar px-3 py-2 shadow-sm">
            
            <!-- Brand Logo -->
            <a href="{{url('/home')}}" class="navbar-brand pb-brand d-flex align-items-center text-decoration-none">
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
            <button class="navbar-toggler pb-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#pbNavbarContent" aria-controls="pbNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links & Actions -->
            <div class="collapse navbar-collapse" id="pbNavbarContent">
                
                <!-- Center Links -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 pt-2 pt-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/home')}}" class="nav-link pb-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/how_it_works')}}" class="nav-link pb-link">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/about')}}" class="nav-link pb-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/contact')}}" class="nav-link pb-link">Contact</a>
                    </li>
                </ul>

                <!-- Right Side CTA Group -->
                <div class="d-flex align-items-center gap-3 pt-3 pt-lg-0 pb-cta-group">
                    <a href="{{url('/log_in')}}" class="pb-btn-login text-decoration-none fw-semibold">Login</a>
                    
                    <!-- Primary Shimmer Button -->
                    <a href="{{url('/register')}}" class="btn pb-btn-cta text-white fw-semibold d-inline-flex align-items-center justify-content-center shadow-sm">
                        <span>Registration</span>
                        <svg class="ms-2 pb-btn-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

            </div>
            
        </nav>
    </div>
</header>