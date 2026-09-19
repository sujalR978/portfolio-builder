@extends('layouts.master')

@section('title', 'Explore Portfolios - TachSaaS')

@section('content')

<!-- ==========================================
     EXPLORE PAGE MAIN CONTAINER (NO NAV BAR)
=========================================== -->
<div class="pb-exp-wrapper min-vh-100 pb-exp-bg-soft py-4 py-xl-5">
    <div class="container-xl">
        
        <!-- TOP UTILITY SEARCH BAR & ACTION BUTTON -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
            <!-- Search Input -->
            <div class="input-group" style="max-width: 420px;">
                 </div>

            <!-- Right Utilities -->
            <div class="d-flex align-items-center gap-3">
             <a href="{{ url('/profile') }}" class="btn btn-link text-muted p-0 border-0 text-decoration-none" title="Profile">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="10"/>
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
        <line x1="12" y1="17" x2="12.01" y2="17"/>
    </svg>
</a>
              
                <a href="/create_project" class="btn btn-primary btn-sm rounded-pill px-3 py-2 fw-bold text-white shadow-sm">+ Create Project</a>
                <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop' }}" 
        class="rounded-circle border" width="36" height="36" alt="User Avatar" >
            </div>
        </div>

        <!-- HERO HEADING -->
        <div class="mb-4">
            <h1 class="fw-bold text-dark display-5 mb-2">Explore the Ecosystem</h1>
            <p class="text-muted lead fs-6 mb-0">Discover top-tier portfolios built by our community. Filter by industry or style to find your next inspiration.</p>
        </div>

     
        <div class="row g-4 mb-5">
            
            @forelse($portfolios as $portfolio)
                @php
              
                    $templateBadge = strtoupper(str_replace('_', ' ', $portfolio->template_name ?? 'MINIMAL'));
                    
                    // Fallback background / preview image from first project or default
                    $projects = is_array($portfolio->projects) ? $portfolio->projects : [];
                    $previewImage = !empty($projects[0]['image_url']) ? $projects[0]['image_url'] : 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop';
                    
                  
                    $creatorAvatar = 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=120&auto=format&fit=crop';
                @endphp

                <!-- Dynamic Portfolio Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="pb-exp-card bg-white rounded-4 border shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="position-relative overflow-hidden">
                                <img src="{{ $previewImage }}" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="{{ $portfolio->project_name ?? 'Portfolio' }}">
                                <span class="badge bg-white text-dark fw-bold position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm small">{{ $templateBadge }}</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold text-dark mb-3">{{ $portfolio->project_name ?? 'Untitled Portfolio' }}</h5>
                                <p class="text-muted extra-small mb-0 text-truncate">{{ $portfolio->short_bio ?? 'Explore technical specifications and digital profile overview.' }}</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop' }}" class="rounded-circle object-fit-cover" width="32" height="32" alt="Creator Avatar">
                                <span class="small fw-semibold text-dark">{{ $portfolio->full_name ?? 'Community Creator' }}</span>
                            </div>
                            <!-- Link to a detail view or live preview route if available -->
                            <a href="#" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold">View</a>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State if no portfolios exist -->
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white rounded-4 border shadow-sm">
                        <h5 class="fw-bold text-dark mb-2">No Portfolios Found</h5>
                        <p class="text-muted small mb-3">Be the first member to deploy and share your project ecosystem with the community!</p>
                        <a href="{{ url('/create_project') }}" class="btn btn-primary btn-sm rounded-pill px-4 py-2 fw-bold text-white shadow-sm">+ Create Project</a>
                    </div>
                </div>
            @endforelse

        </div>
        <!-- FOOTER PAGINATION -->
        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination pagination-md gap-1">
                    <li class="page-item disabled"><a class="page-link rounded-3" href="#">&larr;</a></li>
                    <li class="page-item active"><a class="page-link rounded-3" href="#">1</a></li>
                    <li class="page-item"><a class="page-link rounded-3" href="#">2</a></li>
                    <li class="page-item"><a class="page-link rounded-3" href="#">3</a></li>
                    <li class="page-item disabled"><span class="page-link border-0">...</span></li>
                    <li class="page-item"><a class="page-link rounded-3" href="#">12</a></li>
                    <li class="page-item"><a class="page-link rounded-3" href="#">&rarr;</a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>

@endsection