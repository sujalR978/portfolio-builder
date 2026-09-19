<div class="pb-ts-slide" data-slide="7">
    
    <!-- PAGE TITLE HEADER -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark fs-3 mb-2 pb-ts-heading">Additional Details</h2>
        <p class="text-muted small mx-auto mb-0 fs-6" style="max-width: 580px;">
            Provide optional context to make your project portfolio stand out. You can skip any field that doesn't apply.
        </p>
    </div>

    <!-- MAIN CARD CONTAINER -->
    <div class="pb-ts-card bg-white p-4 p-sm-5 rounded-4 border shadow-sm mb-4">
        
        <!-- CARD SECTION HEADER -->
        <h4 class="fw-bold text-dark fs-5 mb-4 pb-ts-heading">Personal Branding</h4>

        <!-- 1. SOCIAL LINKS SECTION -->
        <div class="mb-4">
            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Social Links</label>
            <div class="row g-3">
                <!-- LinkedIn URL -->
                <div class="col-md-6">
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                        </span>
                        <input type="url" class="form-control border-start-0 ps-2 pb-ts-input" name="social_links[linkedin]" placeholder="LinkedIn URL">
                    </div>
                </div>

                <!-- Twitter / Alternate Email -->
                <div class="col-md-6">
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"/></svg>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" name="social_links[twitter]" placeholder="Twitter / X Handle">
                    </div>
                </div>

                <!-- GitHub / Portfolio -->
                <div class="col-md-6">
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                        </span>
                        <input type="url" class="form-control border-start-0 ps-2 pb-ts-input" name="social_links[github]" placeholder="GitHub / Portfolio">
                    </div>
                </div>

                <!-- Personal Website -->
                <div class="col-md-6">
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </span>
                        <input type="url" class="form-control border-start-0 ps-2 pb-ts-input" name="social_links[website]" placeholder="Personal Website">
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. LANGUAGES & HOBBIES SECTION -->
        <div class="row g-3 mb-4">
            <!-- Languages Field + Dynamic Pills -->
            <div class="col-md-6">
                <label for="languageInput" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Languages</label>
                <div class="input-group pb-ts-input-group mb-2">
                    <input type="text" class="form-control ps-3 pb-ts-input" id="languageInput" name="languages[]" placeholder="e.g. English, Japanese, French" onkeydown="handleLanguageKeyPress(event)">
                </div>
                <!-- Interactive Language Tags Output Container -->
                <div id="languageTagsContainer" class="d-flex flex-wrap gap-2 pt-1">
                    <span class="badge bg-primary-subtle text-primary border rounded-pill px-3 py-1 extra-small fw-bold d-inline-flex align-items-center gap-1 pb-ts-lang-pill">
                        English
                        <button type="button" class="btn-close ms-1" style="font-size: 0.55rem;" onclick="this.parentElement.remove()" aria-label="Remove"></button>
                    </span>
                    <span class="badge bg-primary-subtle text-primary border rounded-pill px-3 py-1 extra-small fw-bold d-inline-flex align-items-center gap-1 pb-ts-lang-pill">
                        German
                        <button type="button" class="btn-close ms-1" style="font-size: 0.55rem;" onclick="this.parentElement.remove()" aria-label="Remove"></button>
                    </span>
                </div>
            </div>

            <!-- Hobbies Field -->
            <div class="col-md-6">
                <label for="hobbiesInput" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Hobbies</label>
                <div class="input-group pb-ts-input-group">
                    <input type="text" class="form-control ps-3 pb-ts-input" id="hobbiesInput" name="hobbies[]" placeholder="e.g. Generative Art, Sailing">
                </div>
            </div>
        </div>

        <!-- 3. ACHIEVEMENTS & AWARDS SECTION -->
        <div class="mb-4">
            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Achievements & Awards</label>
            
            <!-- Achievements List Container -->
            <div id="achievementsContainer" class="d-flex flex-column gap-2 mb-3">
                
                <!-- Achievement Item 1 -->
                <div class="p-3 bg-light rounded-4 border d-flex align-items-center justify-content-between gap-3 pb-ts-subcard pb-ts-achievement-item">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-3 bg-primary-subtle text-primary p-2 d-flex align-items-center justify-content-center shadow-sm" style="width: 44px; height: 44px; flex-shrink: 0;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-2.34"/><path d="M14 14.66V17c0 .55.45 1 1 1h2c.55 0 1-.45 1-1v-2.34"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/></svg>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0 small pb-ts-label">Top 1% UI Contributor 2023</h6>
                            <p class="extra-small text-muted mb-0">Recognized by Global Design Council</p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-link text-muted p-0 border-0" onclick="this.closest('.pb-ts-achievement-item').remove()" title="Delete Achievement">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                    </button>
                </div>

            </div>

            <!-- Dashed Add Achievement Button -->
            <div class="p-3 rounded-4 text-center border-dashed position-relative pb-ts-dashed-box cursor-pointer" onclick="openAddAchievementModal()">
                <div class="d-flex align-items-center justify-content-center gap-2 text-muted fw-semibold small">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    <span>Add Another Achievement</span>
                </div>
            </div>
        </div>

        <!-- CARD FOOTER ACTIONS -->
        <div class="d-flex align-items-center justify-content-between pt-3 border-top pb-ts-border-subtle mt-4">
            <button type="button" class="btn rounded-3 px-4 py-2 fw-semibold pb-ts-btn-outline" onclick="changeSlide(-1)">
                Back
            </button>

            <div class="d-flex align-items-center gap-3">
                <button type="button" class="btn btn-link text-muted text-decoration-none p-0 small fw-semibold" onclick="changeSlide(1)">
                    Skip for Now
                </button>
                <button type="button" class="btn btn-primary rounded-3 px-4 py-2 fw-bold shadow-sm text-white pb-ts-btn-main" onclick="changeSlide(1)">
                    Continue
                </button>
            </div>
        </div>

    </div>

</div>

<!-- ==========================================
     ADD ACHIEVEMENT MODAL
=========================================== -->
<div class="modal fade" id="addAchievementModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg pb-ts-card">
            <div class="modal-header border-bottom pb-ts-border-subtle p-4">
                <h5 class="modal-title fw-bold text-dark pb-ts-heading">Add Achievement or Award</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="achievementModalForm">
                    <div class="mb-3">
                        <label class="form-label fw-bold text-dark small pb-ts-label">Achievement Title *</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" name="achievements[0][title]" id="modalAchieveTitle" class="form-control ps-3 pb-ts-input" placeholder="e.g. Top 1% UI Contributor 2023" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-dark small pb-ts-label">Issuer / Organization</label>
                        <div class="input-group pb-ts-input-group">
                            <input type="text" name="achievements[0][issuer]" id="modalAchieveIssuer" class="form-control ps-3 pb-ts-input" placeholder="e.g. Recognized by Global Design Council">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top pb-ts-border-subtle p-3">
                <button type="button" class="btn btn-secondary rounded-3 px-3 fw-semibold" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary rounded-3 px-4 fw-bold pb-ts-btn-main" onclick="saveAchievementFromModal()">Save Achievement</button>
            </div>
        </div>
    </div>
</div>

<!-- SLIDE 7 JAVASCRIPT LOGIC -->
<script>
    function handleLanguageKeyPress(event) {
        if (event.key === 'Enter' || event.key === ',') {
            event.preventDefault();
            const input = document.getElementById('languageInput');
            const val = input.value.replace(/,/g, '').trim();
            if (val) {
                addLanguageTag(val);
                input.value = '';
            }
        }
    }

    function addLanguageTag(name) {
        const container = document.getElementById('languageTagsContainer');
        const pill = document.createElement('span');
        pill.className = 'badge bg-primary-subtle text-primary border rounded-pill px-3 py-1 extra-small fw-bold d-inline-flex align-items-center gap-1 pb-ts-lang-pill';
        pill.innerHTML = `
            ${escapeHtml(name)}
            <button type="button" class="btn-close ms-1" style="font-size: 0.55rem;" onclick="this.parentElement.remove()" aria-label="Remove"></button>
        `;
        container.appendChild(pill);
    }

    function openAddAchievementModal() {
        const modalEl = document.getElementById('addAchievementModal');
        if (modalEl) {
            document.getElementById('achievementModalForm').reset();
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.show();
        }
    }

    function saveAchievementFromModal() {
        const titleEl = document.getElementById('modalAchieveTitle');
        const issuerEl = document.getElementById('modalAchieveIssuer');

        const title = titleEl ? titleEl.value.trim() : '';
        const issuer = issuerEl ? issuerEl.value.trim() : '';

        if (!title) {
            if (titleEl) titleEl.classList.add('is-invalid');
            return;
        }

        const container = document.getElementById('achievementsContainer');
        const item = document.createElement('div');
        item.className = 'p-3 bg-light rounded-4 border d-flex align-items-center justify-content-between gap-3 pb-ts-subcard pb-ts-achievement-item';
        item.innerHTML = `
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-3 bg-primary-subtle text-primary p-2 d-flex align-items-center justify-content-center shadow-sm" style="width: 44px; height: 44px; flex-shrink: 0;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-2.34"/><path d="M14 14.66V17c0 .55.45 1 1 1h2c.55 0 1-.45 1-1v-2.34"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/></svg>
                </div>
                <div>
                    <h6 class="fw-bold text-dark mb-0 small pb-ts-label">${escapeHtml(title)}</h6>
                    ${issuer ? `<p class="extra-small text-muted mb-0">${escapeHtml(issuer)}</p>` : ''}
                </div>
            </div>
            <button type="button" class="btn btn-link text-muted p-0 border-0" onclick="this.closest('.pb-ts-achievement-item').remove()" title="Delete Achievement">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
            </button>
        `;

        container.appendChild(item);

        const modalEl = document.getElementById('addAchievementModal');
        if (modalEl) {
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.hide();
        }
    }
</script>