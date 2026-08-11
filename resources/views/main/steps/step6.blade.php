<div class="pb-ts-slide" data-slide="6">
    
    <!-- PAGE TITLE HEADER -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark fs-3 mb-2 pb-ts-heading">Education & Certifications</h2>
        <p class="text-muted small mx-auto mb-0 fs-6" style="max-width: 580px;">
            Build your professional profile by showcasing your academic background and specialized expertise.
        </p>
    </div>

    <!-- 1. EDUCATION CARD (REQUIRED SECTION) -->
    <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm mb-4">
        <!-- Section Header -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom pb-ts-border-subtle flex-wrap gap-2">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-3 bg-primary text-white p-2 d-flex align-items-center justify-content-center shadow-sm" style="width: 42px; height: 42px;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                </div>
                <div>
                    <h5 class="fw-bold text-dark mb-0 pb-ts-heading">Education</h5>
                    <span class="extra-small text-muted fw-bold tracking-wider text-uppercase">REQUIRED SECTION</span>
                </div>
            </div>
            <button type="button" class="btn rounded-3 px-3 py-2 fw-semibold extra-small pb-ts-btn-outline d-inline-flex align-items-center gap-1" onclick="addEducationRow()">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                <span>Add Institution</span>
            </button>
        </div>

        <!-- Dynamic Education Rows Container -->
        <div id="educationRowsContainer">
            <!-- Row 0 -->
            <div class="p-3 bg-light rounded-4 border mb-3 position-relative pb-ts-subcard" data-edu-index="0">
                <div class="row g-3">
                    <div class="col-md-5">
                        <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">School / University</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" class="form-control pb-ts-input" name="education[0][school]" placeholder="e.g. Stanford University" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Degree</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" class="form-control pb-ts-input" name="education[0][degree]" placeholder="e.g. B.S. Computer Science" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Year Graduated</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" class="form-control pb-ts-input" name="education[0][year]" placeholder="YYYY" maxlength="4" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. CERTIFICATIONS CARD (OPTIONAL SECTION) -->
    <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm mb-4">
        <!-- Section Header -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom pb-ts-border-subtle flex-wrap gap-2">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-3 text-white p-2 d-flex align-items-center justify-content-center shadow-sm" style="width: 42px; height: 42px; background-color: #0284C7;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                </div>
                <div>
                    <h5 class="fw-bold text-dark mb-0 pb-ts-heading">Certifications</h5>
                    <span class="extra-small text-muted fw-bold tracking-wider text-uppercase">OPTIONAL SECTION</span>
                </div>
            </div>
            <button type="button" class="btn rounded-3 px-3 py-2 fw-semibold extra-small pb-ts-btn-outline d-inline-flex align-items-center gap-1" onclick="addCertificationRow()">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                <span>Add Certification</span>
            </button>
        </div>

        <!-- Dynamic Certifications Rows Container -->
        <div id="certificationsRowsContainer">
            <!-- Row 0 -->
            <div class="p-3 bg-light rounded-4 border mb-3 position-relative pb-ts-subcard" data-cert-index="0">
                <div class="row g-3">
                    <div class="col-md-5">
                        <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Certificate Name</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" class="form-control pb-ts-input" name="certifications[0][name]" placeholder="e.g. AWS Solutions Architect">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Issuing Organization</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" class="form-control pb-ts-input" name="certifications[0][organization]" placeholder="e.g. Amazon Web Services">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Year Issued</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" class="form-control pb-ts-input" name="certifications[0][year]" placeholder="YYYY" maxlength="4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAVIGATION BUTTONS -->
    <div class="d-flex align-items-center justify-content-between my-4">
        <button type="button" class="btn btn-outline-secondary rounded-3 px-4 py-2 fw-semibold bg-white pb-ts-btn-outline d-inline-flex align-items-center gap-2" onclick="changeSlide(-1)">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            <span>Previous Step</span>
        </button>

        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-link text-muted text-decoration-none p-0 small fw-semibold" onclick="changeSlide(1)">
                Skip for now
            </button>
            <button type="button" class="btn btn-primary rounded-3 px-4 py-2 fw-bold shadow-sm text-white pb-ts-btn-main d-inline-flex align-items-center gap-2" onclick="changeSlide(1)">
                <span>Next Step</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </button>
        </div>
    </div>

    <!-- BOTTOM INFORMATIONAL & AI SUGGESTION CARDS -->
    <div class="row g-3 mt-2">
        <!-- Profile Verification Info Card -->
        <div class="col-md-7">
            <div class="p-4 rounded-4 border bg-white shadow-sm h-100 d-flex align-items-center gap-3 pb-ts-card">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&auto=format&fit=crop" class="rounded-circle object-fit-cover flex-shrink-0" width="64" height="64" alt="Verification Specialist">
                <div>
                    <h6 class="fw-bold text-dark mb-1 small pb-ts-label">Profile Verification</h6>
                    <p class="extra-small text-muted mb-0" style="line-height: 1.5;">
                        Adding your educational background increases your project visibility by 45% within the TachSaaS enterprise network. Certified specialists are prioritized for high-impact portfolios.
                    </p>
                </div>
            </div>
        </div>

        <!-- AI Suggestion Blue Banner -->
        <div class="col-md-5">
            <div class="p-4 rounded-4 text-white shadow-sm h-100 d-flex flex-column justify-content-between position-relative overflow-hidden" style="background: linear-gradient(135deg, #0284C7 0%, #1D4ED8 100%);">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v3m0 12v3M3 12h3m12 0h3m-3.5-6.5l-2.1 2.1m-8.8 8.8l-2.1 2.1m0-13l2.1 2.1m8.8 8.8l2.1 2.1"/></svg>
                    <span class="badge bg-white bg-opacity-20 text-white rounded-pill px-3 py-1 extra-small fw-semibold">AI Suggestion</span>
                </div>
                <p class="extra-small mb-0 fw-medium" style="line-height: 1.5;">
                    Users with your skill profile often list "Google Cloud Professional" certifications.
                </p>
            </div>
        </div>
    </div>

</div>

<!-- SLIDE 6 DYNAMIC ROW SCRIPT -->
<script>
    let eduCount = 1;
    let certCount = 1;

    function addEducationRow() {
        const container = document.getElementById('educationRowsContainer');
        const index = eduCount++;

        const newRow = document.createElement('div');
        newRow.className = 'p-3 bg-light rounded-4 border mb-3 position-relative pb-ts-subcard';
        newRow.setAttribute('data-edu-index', index);
        newRow.innerHTML = `
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2" style="font-size: 0.75rem;" onclick="this.closest('.pb-ts-subcard').remove()" aria-label="Remove"></button>
            <div class="row g-3">
                <div class="col-md-5">
                    <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">School / University</label>
                    <div class="input-group pb-ts-input-group">
                        <input type="text" class="form-control pb-ts-input" name="education[${index}][school]" placeholder="e.g. Stanford University">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Degree</label>
                    <div class="input-group pb-ts-input-group">
                        <input type="text" class="form-control pb-ts-input" name="education[${index}][degree]" placeholder="e.g. B.S. Computer Science">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Year Graduated</label>
                    <div class="input-group pb-ts-input-group">
                        <input type="text" class="form-control pb-ts-input" name="education[${index}][year]" placeholder="YYYY" maxlength="4">
                    </div>
                </div>
            </div>
        `;
        container.appendChild(newRow);
    }

    function addCertificationRow() {
        const container = document.getElementById('certificationsRowsContainer');
        const index = certCount++;

        const newRow = document.createElement('div');
        newRow.className = 'p-3 bg-light rounded-4 border mb-3 position-relative pb-ts-subcard';
        newRow.setAttribute('data-cert-index', index);
        newRow.innerHTML = `
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2" style="font-size: 0.75rem;" onclick="this.closest('.pb-ts-subcard').remove()" aria-label="Remove"></button>
            <div class="row g-3">
                <div class="col-md-5">
                    <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Certificate Name</label>
                    <div class="input-group pb-ts-input-group">
                        <input type="text" class="form-control pb-ts-input" name="certifications[${index}][name]" placeholder="e.g. AWS Solutions Architect">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Issuing Organization</label>
                    <div class="input-group pb-ts-input-group">
                        <input type="text" class="form-control pb-ts-input" name="certifications[${index}][organization]" placeholder="e.g. Amazon Web Services">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold text-dark small mb-1 pb-ts-label">Year Issued</label>
                    <div class="input-group pb-ts-input-group">
                        <input type="text" class="form-control pb-ts-input" name="certifications[${index}][year]" placeholder="YYYY" maxlength="4">
                    </div>
                </div>
            </div>
        `;
        container.appendChild(newRow);
    }
</script>