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
                <span class="input-group-text bg-white border-end-0 text-muted pe-1">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </span>
                <input type="text" class="form-control bg-white border-start-0 ps-1 small pb-exp-input" placeholder="Search portfolios, creators, or styles...">
            </div>

            <!-- Right Utilities -->
            <div class="d-flex align-items-center gap-3">
                <button type="button" class="btn btn-link text-muted p-0 border-0" title="Help">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                </button>
                <button type="button" class="btn btn-link text-muted p-0 border-0" title="Notifications">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                </button>
                <a href="/create_project" class="btn btn-primary btn-sm rounded-pill px-3 py-2 fw-bold text-white shadow-sm">+ Create Project</a>
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=120&auto=format&fit=crop" class="rounded-circle border" width="36" height="36" alt="User Avatar">
            </div>
        </div>

        <!-- HERO HEADING -->
        <div class="mb-4">
            <h1 class="fw-bold text-dark display-5 mb-2">Explore the Ecosystem</h1>
            <p class="text-muted lead fs-6 mb-0">Discover top-tier portfolios built by our community. Filter by industry or style to find your next inspiration.</p>
        </div>

        <!-- CATEGORY FILTERS & SORTING BAR -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3 border-bottom pb-3">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <button type="button" class="btn btn-primary rounded-pill px-4 btn-sm fw-bold">All Templates</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill px-3 btn-sm fw-semibold bg-white text-dark">Minimal</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill px-3 btn-sm fw-semibold bg-white text-dark">Creative</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill px-3 btn-sm fw-semibold bg-white text-dark">Corporate</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill px-3 btn-sm fw-semibold bg-white text-dark">Developer</button>
            </div>

            <div class="d-flex align-items-center gap-2">
                <span class="small text-muted fw-semibold">SORT BY:</span>
                <select class="form-select form-select-sm border-0 bg-transparent fw-bold text-primary pe-4 cursor-pointer" style="width: auto;">
                    <option selected>Most Popular</option>
                    <option>Newest First</option>
                    <option>Top Rated</option>
                </select>
            </div>
        </div>

        <!-- PORTFOLIO GRID -->
        <div class="row g-4 mb-5">
            
            <!-- Card 1: Minimal Architecture -->
            <div class="col-md-6 col-lg-4">
                <div class="pb-exp-card bg-white rounded-4 border shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Minimal Architecture Portfolio">
                            <span class="badge bg-white text-dark fw-bold position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm small">MINIMAL</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-3">Structure & Light Architecture</h5>
                        </div>
                    </div>
                    <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=120&auto=format&fit=crop" class="rounded-circle object-fit-cover" width="32" height="32" alt="Elena Rossi Avatar">
                            <span class="small fw-semibold text-dark">Elena Rossi</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Digital Agency -->
            <div class="col-md-6 col-lg-4">
                <div class="pb-exp-card bg-white rounded-4 border shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Neon Pulse Agency">
                            <span class="badge bg-white text-dark fw-bold position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm small">CREATIVE</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-3">Neon Pulse Digital Agency</h5>
                        </div>
                    </div>
                    <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=120&auto=format&fit=crop" class="rounded-circle object-fit-cover" width="32" height="32" alt="Marcus Thorne Avatar">
                            <span class="small fw-semibold text-dark">Marcus Thorne</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Strategic Wealth -->
            <div class="col-md-6 col-lg-4">
                <div class="pb-exp-card bg-white rounded-4 border shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Corporate Dashboard">
                            <span class="badge bg-white text-dark fw-bold position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm small">CORPORATE</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-3">Strategic Wealth & Equity</h5>
                        </div>
                    </div>
                    <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=120&auto=format&fit=crop" class="rounded-circle object-fit-cover" width="32" height="32" alt="Arthur Vance Avatar">
                            <span class="small fw-semibold text-dark">Arthur Vance</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 4: Full Stack Engineer -->
            <div class="col-md-6 col-lg-4">
                <div class="pb-exp-card bg-white rounded-4 border shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Developer Hub">
                            <span class="badge bg-white text-dark fw-bold position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm small">DEVELOPER</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-3">Full Stack Engineer Hub</h5>
                        </div>
                    </div>
                    <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=120&auto=format&fit=crop" class="rounded-circle object-fit-cover" width="32" height="32" alt="Sarah Jenkins Avatar">
                            <span class="small fw-semibold text-dark">Sarah Jenkins</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 5: Photography -->
            <div class="col-md-6 col-lg-4">
                <div class="pb-exp-card bg-white rounded-4 border shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Photography Moments">
                            <span class="badge bg-white text-dark fw-bold position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm small">CREATIVE</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-3">Ethereal Moments Photography</h5>
                        </div>
                    </div>
                    <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=120&auto=format&fit=crop" class="rounded-circle object-fit-cover" width="32" height="32" alt="Chloe Bennett Avatar">
                            <span class="small fw-semibold text-dark">Chloe Bennett</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 6: Pixel Perfect UX -->
            <div class="col-md-6 col-lg-4">
                <div class="pb-exp-card bg-white rounded-4 border shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="UX Solutions">
                            <span class="badge bg-white text-dark fw-bold position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm small">MINIMAL</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-3">Pixel Perfect UX Solutions</h5>
                        </div>
                    </div>
                    <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=120&auto=format&fit=crop" class="rounded-circle object-fit-cover" width="32" height="32" alt="David Kim Avatar">
                            <span class="small fw-semibold text-dark">David Kim</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold">View</a>
                    </div>
                </div>
            </div>

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