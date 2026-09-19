<div class="pb-ts-slide" data-slide="3">
    
    <!-- PAGE TITLE HEADER -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark fs-3 mb-2 pb-ts-heading">Define Project Expertise</h2>
        <p class="text-muted small mb-0 fs-6">Specify the core competencies and technical proficiencies required for this project.</p>
    </div>

    <!-- MAIN CARD CONTAINER -->
    <div class="pb-ts-card bg-white p-4 p-sm-5 rounded-4 border shadow-sm mb-4">

        <!-- Skill Controls Row -->
        <div class="row g-3 align-items-end mb-4">
            <!-- Skill Name Input -->
            <div class="col-md-5">
                <label for="skillNameInput" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Skill Name</label>
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </span>
                    <input type="text" name="skills[0][name]" class="form-control border-start-0 ps-2 pb-ts-input" id="skillNameInput" placeholder="e.g. React.js, Python, AWS">
                </div>
            </div>

            <!-- Proficiency Range Slider -->
            <div class="col-md-5">
                <label for="skillProficiencySlider" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Proficiency</label>
                <div class="d-flex align-items-center gap-2 p-2 rounded-3 border pb-ts-slider-box">
                    <input type="range" name="skills[0][proficiency]" class="form-range flex-grow-1 px-2" id="skillProficiencySlider" min="1" max="5" value="3" oninput="updateSliderValue(this.value)">
                    <span id="sliderValueBadge" class="badge bg-white text-primary border shadow-sm px-2 py-1 fs-6 fw-bold pb-ts-badge">3</span>
                </div>
            </div>

            <!-- Working Add Button -->
            <div class="col-md-2">
                <button type="button" class="btn btn-primary w-100 fw-bold rounded-3 py-2 d-flex align-items-center justify-content-center gap-1 shadow-sm pb-ts-btn-main" onclick="handleAddSkill()">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    Add
                </button>
            </div>
        </div>

        <!-- Competencies Box -->
        <div class="mb-4">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="small fw-bold text-muted text-uppercase tracking-wider">Required Competencies</span>
                <span id="competenciesCounter" class="small text-muted fw-semibold">0 added</span>
            </div>

            <!-- Dashed Container -->
            <div id="competenciesDashedBox" class="p-4 rounded-4 text-center border-dashed position-relative pb-ts-dashed-box" style="min-height: 140px;">

                <!-- Empty State -->
                <div id="competenciesEmptyState" class="d-flex flex-column align-items-center justify-content-center py-3">
                    <div class="mb-2 opacity-50 text-muted">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 8V21H3V8"/><path d="M1 3H23V8H1Z"/><path d="M10 12H14"/></svg>
                    </div>
                    <p class="small mb-0 text-muted">No skills added yet</p>
                </div>

                <!-- Skills Badges Output List -->
                <div id="competenciesList" class="d-flex flex-wrap gap-2 text-start"></div>

            </div>
        </div>

        <!-- Information Notice Banner -->
        <div class="p-3 rounded-3 d-flex align-items-start gap-3 pb-ts-info-banner">
            <div class="text-primary flex-shrink-0 mt-1 pb-ts-info-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            </div>
            <p class="small mb-0 pb-ts-info-text" style="font-size: 0.875rem; line-height: 1.4;">
                Providing specific skills helps our AI engine match your project with the most compatible technical stacks and talent profiles.
            </p>
        </div>

    </div>

    <!-- BOTTOM NAVIGATION BUTTONS -->
    <div class="d-flex align-items-center justify-content-between mt-4">
        <button type="button" class="btn btn-link text-muted text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 p-0" onclick="changeSlide(-1)">
            &larr; Back to Timeline
        </button>

        <div class="d-flex align-items-center gap-2">
            <button type="button" class="btn btn-outline-secondary rounded-3 px-4 fw-semibold bg-white pb-ts-btn-outline" onclick="changeSlide(1)">
                Skip for now
            </button>
            <button type="button" class="btn btn-primary rounded-3 px-4 fw-bold shadow-sm text-white pb-ts-btn-main" onclick="changeSlide(1)">
                Continue to Step 4
            </button>
        </div>
    </div>

</div>