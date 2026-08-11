@extends('layouts.master')

@section('title', 'Contact Management - Inquiry Inbox')

@section('content')

<!-- ==========================================
     INQUIRY INBOX MAIN CONTAINER (THEME ADAPTIVE)
=========================================== -->
<div class="pb-inbox-wrapper min-vh-100 pb-admin-bg-soft p-3 p-md-4">
    <div class="container-fluid p-0">
        
        <!-- TOP UTILITY BAR (Search & Quick Action Icons) -->
        <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-3">
            <div class="input-group pb-ts-input-group" style="max-width: 360px;">
                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </span>
                <input type="text" class="form-control border-start-0 ps-1 pb-ts-input extra-small" placeholder="Search inquiries...">
            </div>

            <div class="d-flex align-items-center gap-3">
                <button type="button" class="btn btn-link text-muted p-0 border-0 position-relative" title="Notifications">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                </button>
                <button type="button" class="btn btn-link text-muted p-0 border-0" title="Help">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                </button>
            </div>
        </div>

        <!-- SPLIT INBOX CONTENT CARD -->
        <div class="pb-ts-card bg-white rounded-4 border shadow-sm overflow-hidden">
            <div class="row g-0">
                
                <!-- LEFT COLUMN: INBOX LIST -->
                <div class="col-md-5 col-xl-4 border-end pb-ts-border-subtle">
                    
                    <!-- Inbox Header -->
                    <div class="p-3 border-bottom pb-ts-border-subtle d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold text-dark mb-0 fs-5 pb-ts-heading">Inbox</h4>
                        <button type="button" class="btn btn-sm btn-link text-muted p-0 border-0" title="Filter Inquiries">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                        </button>
                    </div>

                    <!-- Inquiry Items List -->
                    <div class="list-group list-group-flush pb-inbox-list overflow-y-auto" style="max-height: 720px;">
                        
                        <!-- Item 1 (Active / Selected / Unread) -->
                        <a href="#" class="list-group-item list-group-item-action p-3 border-bottom pb-ts-border-subtle pb-inbox-item active-inbox-item">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="fw-bold text-dark small pb-ts-label">Eleanor Vance</span>
                                    <span class="badge bg-primary text-white rounded-pill extra-small">Unread</span>
                                </div>
                                <span class="extra-small text-muted">10:42 AM</span>
                            </div>
                            <h6 class="fw-bold text-dark mb-1 small text-truncate pb-ts-heading">Integration Issue with API v2</h6>
                            <p class="text-secondary extra-small mb-0 text-truncate">Hello, we are experiencing random timeouts when trying to hit the new endpoints. Could someone look into this?</p>
                        </a>

                        <!-- Item 2 (Replied) -->
                        <a href="#" class="list-group-item list-group-item-action p-3 border-bottom pb-ts-border-subtle pb-inbox-item">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="fw-bold text-dark small pb-ts-label">Marcus Thorne</span>
                                    <span class="badge bg-warning-subtle text-warning border border-warning-subtle rounded-pill extra-small">↵ Replied</span>
                                </div>
                                <span class="extra-small text-muted">Yesterday</span>
                            </div>
                            <h6 class="fw-bold text-dark mb-1 small text-truncate pb-ts-heading">Billing question regarding annual plan</h6>
                            <p class="text-secondary extra-small mb-0 text-truncate">I saw a charge on my card that doesn't match the invoice I received last week...</p>
                        </a>

                        <!-- Item 3 (Closed) -->
                        <a href="#" class="list-group-item list-group-item-action p-3 border-bottom pb-ts-border-subtle pb-inbox-item">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="fw-bold text-dark small pb-ts-label">Sarah Jenkins</span>
                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill extra-small">Closed</span>
                                </div>
                                <span class="extra-small text-muted">Oct 12</span>
                            </div>
                            <h6 class="fw-bold text-dark mb-1 small text-truncate pb-ts-heading">Feature Request: Custom Dashboards</h6>
                            <p class="text-secondary extra-small mb-0 text-truncate">It would be great if we could customize the layout of the main overview screen.</p>
                        </a>

                    </div>
                </div>

                <!-- RIGHT COLUMN: MESSAGE DETAIL & REPLY COMPOSER -->
                <div class="col-md-7 col-xl-8 d-flex flex-column justify-content-between pb-ts-card">
                    
                    <div>
                        <!-- Message Header -->
                        <div class="p-3 p-md-4 border-bottom pb-ts-border-subtle d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; font-size: 0.95rem;">
                                    EV
                                </div>
                                <div>
                                    <h5 class="fw-bold text-dark mb-1 fs-5 pb-ts-heading">Integration Issue with API v2</h5>
                                    <span class="text-muted small">Eleanor Vance &lt;eleanor.vance@example.com&gt;</span>
                                    <span class="text-muted extra-small d-block mt-1">Oct 14, 2023, 10:42 AM (2 hours ago)</span>
                                </div>
                            </div>

                            <!-- Header Actions -->
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-sm rounded-3 fw-semibold pb-ts-btn-outline d-inline-flex align-items-center gap-1.5 px-3 py-1.5">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                    <span>Mark Closed</span>
                                </button>
                                <button type="button" class="btn btn-sm rounded-3 pb-ts-btn-outline px-2.5 py-1.5" title="More Options">
                                    ⋮
                                </button>
                            </div>
                        </div>

                        <!-- Message Body Content -->
                        <div class="p-3 p-md-4">
                            <div class="p-4 rounded-4 border pb-ts-subcard pb-ts-border-subtle">
                                <p class="text-dark small mb-3 pb-ts-label">Hello Support Team,</p>
                                
                                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                    We are currently migrating to API v2 and are experiencing intermittent timeouts during peak hours. Specifically, the <code class="px-2 py-1 rounded border pb-ts-subcard text-primary">/users/batch</code> endpoint seems to hang for about 15-20 seconds before returning a 504 Gateway Timeout error.
                                </p>

                                <p class="text-secondary small mb-4" style="line-height: 1.6;">
                                    We've checked our side and the payload sizes are well within the documented limits. Could someone look into this as it's blocking our production rollout scheduled for next week?
                                </p>

                                <p class="text-dark small mb-4 pb-ts-label">
                                    Best regards,<br>
                                    <strong>Eleanor</strong>
                                </p>

                                <!-- Attachment Chip -->
                                <div class="p-2 px-3 rounded-3 border d-inline-flex align-items-center gap-2 shadow-sm pb-ts-card pb-ts-border-subtle">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-primary"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 18 8"/></svg>
                                    <span class="extra-small fw-semibold text-dark pb-ts-label">error_logs.txt</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- REPLY COMPOSER -->
                    <div class="p-3 p-md-4 border-top pb-ts-border-subtle">
                        <div class="rounded-4 border pb-ts-subcard pb-ts-border-subtle overflow-hidden">
                            
                            <!-- Editor Toolbar -->
                            <div class="p-2 border-bottom pb-ts-border-subtle pb-ts-card d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-sm btn-link text-muted p-1 border-0 fw-bold" title="Bold">B</button>
                                <button type="button" class="btn btn-sm btn-link text-muted p-1 border-0 fst-italic" title="Italic">I</button>
                                <button type="button" class="btn btn-sm btn-link text-muted p-1 border-0" title="Bullet List">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                                </button>
                                <div class="vr my-1"></div>
                                <button type="button" class="btn btn-sm btn-link text-muted p-1 border-0" title="Attach File">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/></svg>
                                </button>
                            </div>

                            <!-- Text Area Input -->
                            <textarea class="form-control border-0 bg-transparent p-3 small pb-ts-input" rows="4" placeholder="Type your reply to Eleanor..."></textarea>

                            <!-- Bottom Composer Action Buttons -->
                            <div class="p-3 border-top pb-ts-border-subtle pb-ts-card d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-sm btn-link text-muted text-decoration-none p-0 fw-semibold">Discard</button>
                                <button type="button" class="btn btn-primary btn-sm rounded-3 px-4 fw-bold text-white shadow-sm pb-ts-btn-main d-inline-flex align-items-center gap-2">
                                    <span>Send Reply</span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                </button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

@endsection