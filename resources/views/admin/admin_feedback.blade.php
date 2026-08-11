@extends('layouts.master')

@section('title', 'Review Records Moderation')

@section('content')

<!-- ==========================================
     REVIEW MODERATION MAIN CONTAINER (THEME ADAPTIVE)
=========================================== -->
<div class="pb-mod-wrapper min-vh-100 pb-admin-bg-soft py-4 py-xl-5">
    <div class="container-xl">
        
        <!-- HEADER TITLE & SEARCH FILTER -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
            <div>
                <h2 class="fw-bold text-dark fs-3 mb-1 pb-ts-heading">Review Records Moderation</h2>
                <p class="text-muted small mb-0">Review, approve, or reject user submissions before they are published.</p>
            </div>

            <div class="d-flex align-items-center gap-2">
                <!-- Search Box -->
                <div class="input-group pb-ts-input-group" style="max-width: 280px;">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </span>
                    <input type="text" class="form-control border-start-0 ps-1 pb-ts-input extra-small" placeholder="Search reviews...">
                </div>
                <!-- Filter Button -->
                <button type="button" class="btn btn-sm rounded-3 fw-semibold pb-ts-btn-outline p-2 d-flex align-items-center justify-content-center" title="Filter Reviews" style="width: 38px; height: 38px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                </button>
            </div>
        </div>

        <!-- METRICS OVERVIEW CARDS -->
        <div class="row g-3 mb-4">
            
            <!-- Pending Reviews -->
            <div class="col-md-4">
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">Pending Reviews</span>
                        <div class="d-flex align-items-baseline gap-2">
                            <h3 class="fw-bold text-dark mb-0 fs-2 pb-ts-heading">42</h3>
                            <span class="small text-warning fw-semibold">↑ 12%</span>
                        </div>
                    </div>
                    <div class="pb-mod-stat-icon rounded-circle d-flex align-items-center justify-content-center bg-warning-subtle text-warning border border-warning-subtle" style="width: 52px; height: 52px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
                    </div>
                </div>
            </div>

            <!-- Approved Today -->
            <div class="col-md-4">
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">Approved Today</span>
                        <div class="d-flex align-items-baseline gap-2">
                            <h3 class="fw-bold text-dark mb-0 fs-2 pb-ts-heading">156</h3>
                            <span class="small text-primary fw-semibold">↑ 5%</span>
                        </div>
                    </div>
                    <div class="pb-mod-stat-icon rounded-circle d-flex align-items-center justify-content-center bg-primary-subtle text-primary border border-primary-subtle" style="width: 52px; height: 52px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                </div>
            </div>

            <!-- Rejected Today -->
            <div class="col-md-4">
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">Rejected Today</span>
                        <div class="d-flex align-items-baseline gap-2">
                            <h3 class="fw-bold text-dark mb-0 fs-2 pb-ts-heading">8</h3>
                            <span class="small text-muted fw-semibold">↓ 2%</span>
                        </div>
                    </div>
                    <div class="pb-mod-stat-icon rounded-circle d-flex align-items-center justify-content-center bg-danger-subtle text-danger border border-danger-subtle" style="width: 52px; height: 52px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                    </div>
                </div>
            </div>

        </div>

        <!-- REVIEWS LIST SECTION -->
        <div class="d-flex flex-column gap-3 mb-4">
            
            <!-- REVIEW CARD 1 (PENDING) -->
            <div class="pb-ts-card bg-white rounded-4 border shadow-sm overflow-hidden">
                <div class="p-4">
                    <!-- User Header -->
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=120&auto=format&fit=crop" class="rounded-circle object-fit-cover border" width="48" height="48" alt="Alex Chen Avatar">
                            <div>
                                <h6 class="fw-bold text-dark mb-0 pb-ts-heading">Alex Chen</h6>
                                <span class="text-muted extra-small">user.alex@example.com</span>
                            </div>
                        </div>

                        <!-- Rating & Status Badge -->
                        <div class="d-flex align-items-center gap-3">
                            <div class="pb-mod-stars text-warning fs-5">
                                ★★★★<span class="text-muted opacity-50">★</span>
                            </div>
                            <span class="badge bg-warning-subtle text-warning border border-warning-subtle rounded-pill px-3 py-1 fw-semibold extra-small">Pending</span>
                            <span class="small text-muted">Oct 24, 2023</span>
                        </div>
                    </div>

                    <!-- Review Quote Body -->
                    <p class="text-secondary small mb-3 p-3 rounded-3 border pb-ts-subcard pb-ts-border-subtle" style="line-height: 1.6;">
                        "The new dashboard features are incredibly intuitive. I was able to set up my entire workflow in under an hour. However, I did notice a slight lag when exporting large datasets. Overall, a solid update."
                    </p>

                    <!-- Card Actions -->
                    <div class="d-flex align-items-center justify-content-end gap-2 pt-2 border-top pb-ts-border-subtle">
                        <button type="button" class="btn btn-sm rounded-3 px-3 fw-semibold pb-ts-btn-outline d-inline-flex align-items-center gap-1.5">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span>View Details</span>
                        </button>
                        <button type="button" class="btn btn-sm rounded-3 px-3 fw-semibold pb-ts-btn-danger-outline d-inline-flex align-items-center gap-1">
                            ✕ Reject
                        </button>
                        <button type="button" class="btn btn-sm btn-primary rounded-3 px-4 fw-bold text-white shadow-sm pb-ts-btn-main d-inline-flex align-items-center gap-1">
                            ✓ Approve
                        </button>
                    </div>
                </div>
            </div>

            <!-- REVIEW CARD 2 (APPROVED) -->
            <div class="pb-ts-card bg-white rounded-4 border shadow-sm overflow-hidden">
                <div class="p-4">
                    <!-- User Header -->
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary-subtle text-primary fw-bold d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; font-size: 0.95rem;">
                                SJ
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-0 pb-ts-heading">Sarah Jenkins</h6>
                                <span class="text-muted extra-small">s.jenkins@corporate.inc</span>
                            </div>
                        </div>

                        <!-- Rating & Status Badge -->
                        <div class="d-flex align-items-center gap-3">
                            <div class="pb-mod-stars text-warning fs-5">
                                ★★★★★
                            </div>
                            <span class="badge bg-info-subtle text-info border border-info-subtle rounded-pill px-3 py-1 fw-semibold extra-small">Approved</span>
                            <span class="small text-muted">Oct 23, 2023</span>
                        </div>
                    </div>

                    <!-- Review Quote Body -->
                    <p class="text-secondary small mb-3 p-3 rounded-3 border pb-ts-subcard pb-ts-border-subtle" style="line-height: 1.6;">
                        "Absolutely flawless execution on the recent integration update. It saved our team countless hours this week."
                    </p>

                    <!-- Card Actions -->
                    <div class="d-flex align-items-center justify-content-end gap-2 pt-2 border-top pb-ts-border-subtle">
                        <button type="button" class="btn btn-sm rounded-3 px-3 fw-semibold pb-ts-btn-outline d-inline-flex align-items-center gap-1.5">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span>View Details</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- FOOTER PAGINATION -->
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 pt-2">
            <span class="small text-muted">Showing 1 to 10 of 42 entries</span>

            <nav>
                <ul class="pagination pagination-sm mb-0 gap-1">
                    <li class="page-item disabled"><a class="page-link rounded-3 pb-ts-btn-outline" href="#">&larr;</a></li>
                    <li class="page-item active"><a class="page-link rounded-3 pb-ts-btn-main" href="#">1</a></li>
                    <li class="page-item"><a class="page-link rounded-3 pb-ts-btn-outline" href="#">2</a></li>
                    <li class="page-item"><a class="page-link rounded-3 pb-ts-btn-outline" href="#">3</a></li>
                    <li class="page-item disabled"><span class="page-link border-0 text-muted">...</span></li>
                    <li class="page-item"><a class="page-link rounded-3 pb-ts-btn-outline" href="#">&rarr;</a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>

@endsection