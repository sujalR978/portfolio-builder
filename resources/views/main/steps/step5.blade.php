<div class="pb-ts-slide" data-slide="5">
    
    <!-- PAGE TITLE HEADER -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark fs-3 mb-2 pb-ts-heading">Featured Projects</h2>
        <p class="text-muted small mx-auto mb-0 fs-6" style="max-width: 620px;">
            Showcase your best work. These projects will be prominently displayed on your generated portfolio to highlight your technical expertise and problem-solving skills.
        </p>
    </div>

    <!-- FEATURED PROJECTS LIST CONTAINER -->
    <div id="featuredProjectsContainer" class="d-flex flex-column gap-3 mb-4">
        
        <!-- Project Item 1 -->
        <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm pb-ts-project-card" data-project-id="1">
            <div class="row align-items-center g-4">
                <!-- Thumbnail -->
                <div class="col-md-4 col-lg-4">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop" class="img-fluid rounded-3 border object-fit-cover w-100" style="max-height: 160px;" alt="CloudScale Optimizer">
                </div>
                <!-- Details -->
                <div class="col-md-8 col-lg-8">
                    <div class="d-flex align-items-start justify-content-between mb-2">
                        <h5 class="fw-bold text-dark mb-0 pb-ts-heading">CloudScale Optimizer</h5>
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn btn-link text-muted p-0 border-0" title="Edit Project">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                            </button>
                            <button type="button" class="btn btn-link text-muted p-0 border-0" onclick="deleteProjectCard(this)" title="Delete Project">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                            </button>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3">
                        An automated resource allocation engine for Kubernetes clusters that reduced cloud spend by 35% across 200+ microservices.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        <span class="badge bg-primary-subtle text-primary fw-bold px-2 py-1 extra-small rounded-2">GOLANG</span>
                        <span class="badge bg-primary-subtle text-primary fw-bold px-2 py-1 extra-small rounded-2">KUBERNETES</span>
                        <span class="badge bg-primary-subtle text-primary fw-bold px-2 py-1 extra-small rounded-2">TERRAFORM</span>
                    </div>
                    <a href="https://github.com/tachsaas/cloudscale" target="_blank" class="extra-small text-primary fw-semibold text-decoration-none d-inline-flex align-items-center gap-1">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                        <span>github.com/tachsaas/cloudscale</span>
                    </a>
                </div>
            </div>
        </div>

        

    </div>

    <!-- DASHED ADD PROJECT CARD -->
    <div class="p-5 rounded-4 text-center border-dashed position-relative mb-4 pb-ts-dashed-box cursor-pointer" onclick="openAddProjectModal()">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="rounded-circle bg-primary-subtle text-primary p-3 mb-3 d-flex align-items-center justify-content-center shadow-sm" style="width: 52px; height: 52px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </div>
            <h5 class="fw-bold text-dark mb-1 pb-ts-heading">Add Project</h5>
            <p class="text-muted extra-small mb-0">Include more items to show versatility</p>
        </div>
    </div>

    <!-- BOTTOM NAVIGATION BUTTONS -->
    <div class="d-flex align-items-center justify-content-between mt-4">
        <button type="button" class="btn btn-link text-muted text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 p-0" onclick="changeSlide(-1)">
            &larr; Back to Bio
        </button>

        <div class="d-flex align-items-center gap-2">
            <button type="button" class="btn rounded-3 px-4 fw-semibold pb-ts-btn-outline" onclick="changeSlide(1)">
                Save Draft
            </button>
            <button type="button" class="btn btn-primary rounded-3 px-4 fw-bold shadow-sm text-white pb-ts-btn-main" onclick="changeSlide(1)">
                Continue to Step 6
            </button>
        </div>
    </div>

</div>

<!-- ==========================================
     ADD PROJECT MODAL
=========================================== -->
<div class="modal fade" id="addProjectModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-4 shadow-lg pb-ts-card">
            <div class="modal-header border-bottom pb-ts-border-subtle p-4">
                <h5 class="modal-title fw-bold text-dark pb-ts-heading">Add New Featured Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="newProjectModalForm">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-bold text-dark small pb-ts-label">Project Title *</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                                </span>
                                <input type="text" name="projects[0][title]" id="modalProjectTitle" class="form-control border-start-0 ps-2 pb-ts-input" placeholder="e.g. AI Content Studio" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold text-dark small pb-ts-label">Short Description *</label>
                            <textarea id="modalProjectDesc" name="projects[0][description]" class="form-control pb-ts-textarea" rows="3" placeholder="Briefly describe what this project does and key achievements..." required></textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark small pb-ts-label">Tech Stack Tags (Comma Separated)</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                                </span>
                                <input type="text" name="projects[0][tech_stack]" id="modalProjectTags" class="form-control border-start-0 ps-2 pb-ts-input" placeholder="Vue.js, Laravel, Tailwind">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark small pb-ts-label">Project / Demo Link</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                                </span>
                                <input type="url" name="projects[0][demo_link]" id="modalProjectLink" class="form-control border-start-0 ps-2 pb-ts-input" placeholder="https://myproject.com">
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold text-dark small pb-ts-label">Image URL</label>
                            <div class="input-group pb-ts-input-group">
                                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                                </span>
                                <input type="url" name="projects[0][image_url]" id="modalProjectImg" class="form-control border-start-0 ps-2 pb-ts-input" placeholder="https://images.unsplash.com/...">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top pb-ts-border-subtle p-3">
                <button type="button" class="btn btn-secondary rounded-3 px-3 fw-semibold" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary rounded-3 px-4 fw-bold pb-ts-btn-main" onclick="saveNewProjectFromModal()">Add Project</button>
            </div>
        </div>
    </div>
</div>

<!-- SLIDE 5 JAVASCRIPT LOGIC -->
<script>
    function deleteProjectCard(btn) {
        const card = btn.closest('.pb-ts-project-card');
        if (card) {
            card.remove();
        }
    }

    function openAddProjectModal() {
        const modalEl = document.getElementById('addProjectModal');
        if (modalEl) {
            resetModalInputs();
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.show();
        }
    }

    function resetModalInputs() {
        const form = document.getElementById('newProjectModalForm');
        if (form) {
            form.reset();
        }
        ['modalProjectTitle', 'modalProjectDesc', 'modalProjectTags', 'modalProjectLink', 'modalProjectImg'].forEach(id => {
            const el = document.getElementById(id);
            if (el) {
                el.value = '';
                el.classList.remove('is-invalid');
            }
        });
    }

    function saveNewProjectFromModal() {
        const titleEl = document.getElementById('modalProjectTitle');
        const descEl = document.getElementById('modalProjectDesc');
        const tagsEl = document.getElementById('modalProjectTags');
        const linkEl = document.getElementById('modalProjectLink');
        const imgEl = document.getElementById('modalProjectImg');

        const title = titleEl ? titleEl.value.trim() : '';
        const desc = descEl ? descEl.value.trim() : '';
        const tagsRaw = tagsEl ? tagsEl.value.trim() : '';
        const link = (linkEl && linkEl.value.trim()) ? linkEl.value.trim() : '#';
        const img = (imgEl && imgEl.value.trim()) ? imgEl.value.trim() : 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop';

        if (!title || !desc) {
            if (titleEl && !title) titleEl.classList.add('is-invalid');
            if (descEl && !desc) descEl.classList.add('is-invalid');
            return;
        }

        if (titleEl) titleEl.classList.remove('is-invalid');
        if (descEl) descEl.classList.remove('is-invalid');

        const tags = tagsRaw ? tagsRaw.split(',').map(t => t.trim().toUpperCase()) : ['PROJECT'];
        const container = document.getElementById('featuredProjectsContainer');

        const newCard = document.createElement('div');
        newCard.className = 'pb-ts-card bg-white p-4 rounded-4 border shadow-sm pb-ts-project-card';
        newCard.innerHTML = `
            <div class="row align-items-center g-4">
                <div class="col-md-4 col-lg-4">
                    <img src="${escapeHtml(img)}" class="img-fluid rounded-3 border object-fit-cover w-100" style="max-height: 160px;" alt="${escapeHtml(title)}">
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="d-flex align-items-start justify-content-between mb-2">
                        <h5 class="fw-bold text-dark mb-0 pb-ts-heading">${escapeHtml(title)}</h5>
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn btn-link text-muted p-0 border-0" title="Edit Project">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                            </button>
                            <button type="button" class="btn btn-link text-muted p-0 border-0" onclick="deleteProjectCard(this)" title="Delete Project">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                            </button>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3">${escapeHtml(desc)}</p>
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        ${tags.map(t => `<span class="badge bg-primary-subtle text-primary fw-bold px-2 py-1 extra-small rounded-2">${escapeHtml(t)}</span>`).join('')}
                    </div>
                    <a href="${escapeHtml(link)}" target="_blank" class="extra-small text-primary fw-semibold text-decoration-none d-inline-flex align-items-center gap-1">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                        <span>${escapeHtml(link)}</span>
                    </a>
                </div>
            </div>
        `;

        container.appendChild(newCard);

        // Hide modal & reset inputs completely
        const modalEl = document.getElementById('addProjectModal');
        if (modalEl) {
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.hide();
        }
        resetModalInputs();
    }

    // Attach event listener to clean up modal fields on close
    document.addEventListener('DOMContentLoaded', function() {
        const modalEl = document.getElementById('addProjectModal');
        if (modalEl) {
            modalEl.addEventListener('hidden.bs.modal', function () {
                resetModalInputs();
            });
        }
    });
</script>