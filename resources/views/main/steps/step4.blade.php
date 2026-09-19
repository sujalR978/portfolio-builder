<div class="pb-ts-slide" data-slide="4">
    
    <!-- PAGE TITLE HEADER -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark fs-3 mb-2 pb-ts-heading">Professional Experience</h2>
        <p class="text-muted small mb-0 fs-6">Highlight your career journey. This section is optional but helps in building a more complete portfolio.</p>
    </div>

    <!-- MAIN CARD CONTAINER -->
    <div class="pb-ts-card bg-white p-4 p-sm-5 rounded-4 border shadow-sm mb-4">

        <!-- DYNAMIC EXPERIENCE ITEMS CONTAINER -->
        <div id="experienceItemsContainer">
            
            @php
                // Pre-load existing experiences from database if editing, or old input if validation failed, else default to one empty array
                $savedExperiences = old('experiences', isset($portfolio->experiences) && is_array($portfolio->experiences) ?$portfolio->experiences : [[]]);
                if (empty($savedExperiences)) {$savedExperiences = [[]];
                }
            @endphp

            @foreach($savedExperiences as $index =>$exp)
                <!-- Experience Item -->
                <div class="pb-ts-exp-item position-relative ps-4 mb-4 border-start border-3 border-primary" data-exp-index="{{ $index }}">
                    <!-- Delete Item Circle Badge -->
                    <button type="button" class="btn btn-sm btn-light border rounded-circle position-absolute top-0 start-0 translate-middle text-muted shadow-sm pb-ts-remove-exp-btn" onclick="removeExperienceItem(this)" title="Remove Experience" style="width: 28px; height: 28px; padding: 0; display: flex; align-items: center; justify-content: center;">
                        &times;
                    </button>

                    <div class="row g-3 mb-3">
                        <!-- Company Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Company Name</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" name="experiences[{{ $index }}][company]" value="{{ $exp['company'] ?? '' }}" placeholder="e.g. Acme Corp">
                            </div>
                        </div>

                        <!-- Role / Title -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Role / Title</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" name="experiences[{{ $index }}][role]" value="{{ $exp['role'] ?? '' }}" placeholder="e.g. Senior Frontend Engineer">
                            </div>
                        </div>

                        <!-- Start Date -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Start Date</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                </span>
                                <input type="date" class="form-control border-start-0 ps-2 pb-ts-input" name="experiences[{{ $index }}][start_date]" value="{{ $exp['start_date'] ?? '' }}">
                            </div>
                        </div>

                        <!-- End Date + Checkbox -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">End Date</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                </span>
                                <input type="date" class="form-control border-start-0 ps-2 pb-ts-input exp-end-date" name="experiences[{{ $index }}][end_date]" value="{{ $exp['end_date'] ?? '' }}" {{ isset($exp['current']) &&$exp['current'] ? 'disabled' : '' }}>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input exp-current-check" type="checkbox" name="experiences[{{ $index }}][current]" id="currentWork_{{ $index }}" value="1" {{ isset($exp['current']) &&$exp['current'] ? 'checked' : '' }} onchange="toggleEndDate(this)">
                                <label class="form-check-label extra-small text-muted fw-semibold" for="currentWork_{{ $index }}">
                                    I currently work here
                                </label>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-12">
                            <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Description</label>
                            <textarea class="form-control pb-ts-textarea" name="experiences[{{ $index }}][description]" rows="3" placeholder="Briefly describe your key achievements and responsibilities...">{{ $exp['description'] ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Add Experience Button -->
        <div class="pt-2 mb-4">
            <button type="button" class="btn rounded-3 px-3 py-2 fw-bold small d-inline-flex align-items-center gap-2 pb-ts-btn-outline" onclick="addExperienceItem()">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                <span>Add Experience</span>
            </button>
        </div>

        <!-- Divider -->
        <hr class="my-4 pb-ts-border-subtle">

        <!-- Card Footer Actions -->
        <div class="d-flex align-items-center justify-content-between">
            <button type="button" class="btn btn-link text-muted text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 p-0" onclick="changeSlide(-1)">
                &larr; Back
            </button>

            <div class="d-flex align-items-center gap-2">
                <button type="button" class="btn rounded-3 px-4 fw-semibold pb-ts-btn-outline" onclick="changeSlide(1)">
                    Skip for now
                </button>
                <button type="button" class="btn btn-primary rounded-3 px-4 fw-bold shadow-sm text-white pb-ts-btn-main" onclick="changeSlide(1)">
                    Save and Continue
                </button>
            </div>
        </div>

    </div>

    <!-- BOTTOM FEATURE CARDS (3 Columns) -->
    <div class="row g-3">
        <!-- Feature 1 -->
        <div class="col-md-4">
            <div class="p-3 rounded-4 border bg-white shadow-sm text-center h-100 pb-ts-feature-card">
                <div class="text-secondary mb-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                </div>
                <span class="extra-small fw-bold text-muted d-block">Validated Credentials</span>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
            <div class="p-3 rounded-4 border bg-white shadow-sm text-center h-100 pb-ts-feature-card">
                <div class="text-secondary mb-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v3m0 12v3M3 12h3m12 0h3m-3.5-6.5l-2.1 2.1m-8.8 8.8l-2.1 2.1m0-13l2.1 2.1m8.8 8.8l2.1 2.1"/></svg>
                </div>
                <span class="extra-small fw-bold text-muted d-block">AI-Optimized Descriptions</span>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
            <div class="p-3 rounded-4 border bg-white shadow-sm text-center h-100 pb-ts-feature-card">
                <div class="text-secondary mb-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                </div>
                <span class="extra-small fw-bold text-muted d-block">Global Reach</span>
            </div>
        </div>
    </div>

</div>

<!-- SLIDE 4 INTERACTIVE JAVASCRIPT -->
<script>
    // Initialize expCount based on how many items were loaded from DB/old input to prevent duplicate array indexes
    let expCount = document.querySelectorAll('.pb-ts-exp-item').length || 1;

    function toggleEndDate(checkbox) {
        const item = checkbox.closest('.pb-ts-exp-item');
        const endDateInput = item.querySelector('.exp-end-date');
        if (checkbox.checked) {
            endDateInput.value = '';
            endDateInput.disabled = true;
        } else {
            endDateInput.disabled = false;
        }
    }

    function addExperienceItem() {
        const container = document.getElementById('experienceItemsContainer');
        const index = expCount++;

        const newItem = document.createElement('div');
        newItem.className = 'pb-ts-exp-item position-relative ps-4 mb-4 border-start border-3 border-primary';
        newItem.setAttribute('data-exp-index', index);

        newItem.innerHTML = `
            <button type="button" class="btn btn-sm btn-light border rounded-circle position-absolute top-0 start-0 translate-middle text-muted shadow-sm pb-ts-remove-exp-btn" onclick="removeExperienceItem(this)" title="Remove Experience" style="width: 28px; height: 28px; padding: 0; display: flex; align-items: center; justify-content: center;">
                &times;
            </button>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Company Name</label>
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" name="experiences[${index}][company]" placeholder="e.g. Acme Corp">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Role / Title</label>
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" name="experiences[${index}][role]" placeholder="e.g. Senior Frontend Engineer">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Start Date</label>
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        </span>
                        <input type="date" class="form-control border-start-0 ps-2 pb-ts-input" name="experiences[${index}][start_date]">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">End Date</label>
                    <div class="input-group pb-ts-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        </span>
                        <input type="date" class="form-control border-start-0 ps-2 pb-ts-input exp-end-date" name="experiences[${index}][end_date]">
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input exp-current-check" type="checkbox" name="experiences[${index}][current]" id="currentWork_${index}" value="1" onchange="toggleEndDate(this)">
                        <label class="form-check-label extra-small text-muted fw-semibold" for="currentWork_${index}">
                            I currently work here
                        </label>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label fw-bold text-dark small mb-2 pb-ts-label">Description</label>
                    <textarea class="form-control pb-ts-textarea" name="experiences[${index}][description]" rows="3" placeholder="Briefly describe your key achievements and responsibilities..."></textarea>
                </div>
            </div>
        `;

        container.appendChild(newItem);
    }

    function removeExperienceItem(btn) {
        const item = btn.closest('.pb-ts-exp-item');
        const container = document.getElementById('experienceItemsContainer');
        if (container.querySelectorAll('.pb-ts-exp-item').length > 1) {
            item.remove();
        } else {
            item.querySelectorAll('input, textarea').forEach(i => {
                if (i.type === 'checkbox') i.checked = false;
                else i.value = '';
                if (i.classList.contains('exp-end-date')) i.disabled = false;
            });
        }
    }
</script>