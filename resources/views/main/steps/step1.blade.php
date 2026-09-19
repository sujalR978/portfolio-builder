<div class="pb-ts-slide active" data-slide="1">
    
    <!-- HEADER -->
    <div class="text-center mb-4">
        <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill small mb-2 d-inline-block">STEP 1 OF 10</span>
        <h3 class="fw-bold text-dark fs-2 mb-2 pb-ts-heading">Project Basics</h3>
        <p class="text-muted small mx-auto" style="max-width: 480px;">
            Let's start with the foundations. These details will help us tailor the portfolio builder experience to your specific needs.
        </p>
    </div>

    <!-- MAIN CARD CONTAINER -->
    <div class="pb-ts-card bg-white p-4 p-sm-5 rounded-4 border shadow-sm mb-4">
        
        <!-- 1. Project Name Field -->
  <!-- 1. Project Name Field -->
<div class="mb-4">
    <label for="s1ProjectName" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Project Name *</label>
    <div class="input-group pb-ts-input-group">
        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
        </span>
        <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" id="s1ProjectName" name="project_name" placeholder="e.g. My Creative Journey 2026" required>
    </div>
    <div class="form-text extra-small text-muted mt-1">A unique title to identify your portfolio in your dashboard.</div>
    <div class="invalid-feedback">Please enter a project name.</div>
</div>

        <!-- 2. Portfolio Audience (Custom Interactive Radio Selector) -->
        <div class="mb-4">
            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Who is this portfolio for? *</label>
            <div class="row g-2">
                
                <div class="col-sm-4">
                    <input type="radio" class="btn-check" name="target_type" id="pfMyself" value="myself" checked>
                    <label class="pb-ts-option-card p-3 border rounded-3 text-center d-flex flex-column align-items-center justify-content-center cursor-pointer h-100" for="pfMyself">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mb-2 text-primary"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span class="fw-bold small text-dark d-block pb-ts-label">Myself</span>
                        <span class="extra-small text-muted">Personal Site</span>
                    </label>
                </div>

                <div class="col-sm-4">
                    <input type="radio" class="btn-check" name="target_type" id="pfClient" value="client">
                    <label class="pb-ts-option-card p-3 border rounded-3 text-center d-flex flex-column align-items-center justify-content-center cursor-pointer h-100" for="pfClient">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mb-2 text-primary"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span class="fw-bold small text-dark d-block pb-ts-label">Client</span>
                        <span class="extra-small text-muted">Freelance Work</span>
                    </label>
                </div>

                <div class="col-sm-4">
                    <input type="radio" class="btn-check" name="target_type" id="pfCompany" value="company">
                    <label class="pb-ts-option-card p-3 border rounded-3 text-center d-flex flex-column align-items-center justify-content-center cursor-pointer h-100" for="pfCompany">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mb-2 text-primary"><path d="M3 21h18"/><path d="M3 7v14"/><path d="M21 7v14"/><path d="M6 3h12l3 4H3l3-4z"/></svg>
                        <span class="fw-bold small text-dark d-block pb-ts-label">Company</span>
                        <span class="extra-small text-muted">Agency / Team</span>
                    </label>
                </div>

            </div>
        </div>

        <!-- 3. Visibility Selector -->
        <div class="mb-4">
            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Visibility</label>
            <div class="row g-2">
                <div class="col-6">
                    <input type="radio" class="btn-check" name="visibility" id="visPublic" value="public" checked>
                    <label class="btn btn-outline-primary pb-ts-toggle-btn rounded-3 py-2 px-3 fw-semibold border w-100 d-flex align-items-center justify-content-center gap-2" for="visPublic">
                        <span>🌐 Public</span>
                    </label>
                </div>

                <div class="col-6">
                    <input type="radio" class="btn-check" name="visibility" id="visPrivate" value="private">
                    <label class="btn btn-outline-primary pb-ts-toggle-btn rounded-3 py-2 px-3 fw-semibold border w-100 d-flex align-items-center justify-content-center gap-2" for="visPrivate">
                        <span>🔒 Private</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- 4. Informational Notice Banner -->
        <div class="p-3 rounded-3 d-flex align-items-start gap-3 pb-ts-info-banner">
            <div class="text-primary flex-shrink-0 mt-1 pb-ts-info-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            </div>
            <p class="small mb-0 pb-ts-info-text" style="font-size: 0.85rem; line-height: 1.5;">
                Public projects are visible to anyone with a link and can be discovered via <strong>TachSaaS Explore</strong>. You can change this setting at any time.
            </p>
        </div>

    </div>

    <!-- BOTTOM NAVIGATION BUTTONS FOR SLIDE 1 -->
    <div class="d-flex align-items-center justify-content-between mt-4">
        <button type="button" class="btn btn-link text-muted text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 p-0 opacity-50" disabled>
            &larr; Previous
        </button>

        <div class="d-flex align-items-center gap-2">
            <button type="button" class="btn rounded-3 px-4 fw-semibold pb-ts-btn-outline" onclick="changeSlide(1)">
                Skip for now
            </button>
            <button type="button" class="btn btn-primary rounded-3 px-4 fw-bold shadow-sm text-white pb-ts-btn-main" onclick="changeSlide(1)">
                Continue to Step 2 &rarr;
            </button>
        </div>
    </div>

</div>