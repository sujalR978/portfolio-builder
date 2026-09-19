<div class="pb-ts-slide" data-slide="8">
    
    <!-- PAGE TITLE HEADER -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark fs-3 mb-2 pb-ts-heading">Choose your starting point</h2>
        <p class="text-muted small mx-auto mb-0 fs-6" style="max-width: 600px;">
            Select a pre-configured template to accelerate your project deployment. Each template is optimized for specific performance metrics.
        </p>
    </div>

    <!-- Hidden Input for Form Submission (Updated name to match controller/database: template_name) -->
    <input type="hidden" name="template_name" id="selectedTemplateInput" value="enterprise_hub">

    <!-- TEMPLATES GRID -->
    <div class="row g-4 mb-4">
        
        <!-- Template 1: Enterprise Hub (Selected by Default) -->
        <div class="col-md-6 col-lg-4">
            <div class="pb-ts-card bg-white rounded-4 border border-2 border-primary shadow-sm h-100 d-flex flex-column justify-content-between overflow-hidden pb-ts-template-card active-template" onclick="selectTemplateCard('enterprise_hub', this)">
                
                <!-- Preview Header / Image -->
                <div class="position-relative bg-light p-3 text-center border-bottom pb-ts-template-preview">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop" class="img-fluid rounded-3 border shadow-sm object-fit-cover w-100" style="height: 140px;" alt="Enterprise Hub">
                    <div class="position-absolute top-0 end-0 m-2 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm check-badge" style="width: 24px; height: 24px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                </div>

                <!-- Body Content -->
                <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h5 class="fw-bold text-dark mb-0 pb-ts-heading fs-6">Enterprise Hub</h5>
                            <span class="badge bg-primary-subtle text-primary fw-bold px-2 py-1 extra-small rounded-2">POPULAR</span>
                        </div>
                        <p class="text-secondary extra-small mb-3" style="line-height: 1.5;">
                            Full-scale SaaS architecture with multi-tenancy support, advanced RBAC, and integrated billing modules.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-1 mb-3">
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">Full-Stack</span>
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">Stripe API</span>
                        </div>
                    </div>

                    <!-- Button Action -->
                    <button type="button" class="btn btn-primary w-100 rounded-3 py-2 fw-bold extra-small template-action-btn pb-ts-btn-main">
                        Selected Template
                    </button>
                </div>

            </div>
        </div>

        <!-- Template 2: Agile Starter -->
        <div class="col-md-6 col-lg-4">
            <div class="pb-ts-card bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between overflow-hidden pb-ts-template-card" onclick="selectTemplateCard('agile_starter', this)">
                
                <!-- Preview Header / Image -->
                <div class="position-relative bg-light p-3 text-center border-bottom pb-ts-template-preview">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" class="img-fluid rounded-3 border shadow-sm object-fit-cover w-100" style="height: 140px;" alt="Agile Starter">
                    <div class="position-absolute top-0 end-0 m-2 bg-primary text-white rounded-circle d-none align-items-center justify-content-center shadow-sm check-badge" style="width: 24px; height: 24px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                </div>

                <!-- Body Content -->
                <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                    <div>
                        <div class="mb-2">
                            <h5 class="fw-bold text-dark mb-0 pb-ts-heading fs-6">Agile Starter</h5>
                        </div>
                        <p class="text-secondary extra-small mb-3" style="line-height: 1.5;">
                            Lean, performance-optimized template for MVPs and rapid prototyping. Focus on core user journeys.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-1 mb-3">
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">Next.js</span>
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">Tailwind</span>
                        </div>
                    </div>

                    <!-- Button Action -->
                    <button type="button" class="btn btn-outline-secondary w-100 rounded-3 py-2 fw-semibold extra-small pb-ts-btn-outline template-action-btn">
                        Select This
                    </button>
                </div>

            </div>
        </div>

        <!-- Template 3: Data Analytics -->
        <div class="col-md-6 col-lg-4">
            <div class="pb-ts-card bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between overflow-hidden pb-ts-template-card" onclick="selectTemplateCard('data_analytics', this)">
                
                <!-- Preview Header / Image -->
                <div class="position-relative bg-light p-3 text-center border-bottom pb-ts-template-preview">
                    <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?q=80&w=600&auto=format&fit=crop" class="img-fluid rounded-3 border shadow-sm object-fit-cover w-100" style="height: 140px;" alt="Data Analytics">
                    <div class="position-absolute top-0 end-0 m-2 bg-primary text-white rounded-circle d-none align-items-center justify-content-center shadow-sm check-badge" style="width: 24px; height: 24px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                </div>

                <!-- Body Content -->
                <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                    <div>
                        <div class="mb-2">
                            <h5 class="fw-bold text-dark mb-0 pb-ts-heading fs-6">Data Analytics</h5>
                        </div>
                        <p class="text-secondary extra-small mb-3" style="line-height: 1.5;">
                            Heavy-duty visualization suite with pre-built D3.js components and real-time streaming capability.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-1 mb-3">
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">BI Tools</span>
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">Real-time</span>
                        </div>
                    </div>

                    <!-- Button Action -->
                    <button type="button" class="btn btn-outline-secondary w-100 rounded-3 py-2 fw-semibold extra-small pb-ts-btn-outline template-action-btn">
                        Select This
                    </button>
                </div>

            </div>
        </div>

        <!-- Template 4: Marketplace Engine -->
        <div class="col-md-6 col-lg-4">
            <div class="pb-ts-card bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between overflow-hidden pb-ts-template-card" onclick="selectTemplateCard('marketplace_engine', this)">
                
                <!-- Preview Header / Image -->
                <div class="position-relative bg-light p-3 text-center border-bottom pb-ts-template-preview">
                    <img src="https://images.unsplash.com/photo-1556742049-0a670f4a4591?q=80&w=600&auto=format&fit=crop" class="img-fluid rounded-3 border shadow-sm object-fit-cover w-100" style="height: 140px;" alt="Marketplace Engine">
                    <div class="position-absolute top-0 end-0 m-2 bg-primary text-white rounded-circle d-none align-items-center justify-content-center shadow-sm check-badge" style="width: 24px; height: 24px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                </div>

                <!-- Body Content -->
                <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                    <div>
                        <div class="mb-2">
                            <h5 class="fw-bold text-dark mb-0 pb-ts-heading fs-6">Marketplace Engine</h5>
                        </div>
                        <p class="text-secondary extra-small mb-3" style="line-height: 1.5;">
                            Scalable infrastructure for multi-vendor platforms with secure escrow and review systems.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-1 mb-3">
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">E-commerce</span>
                            <span class="badge bg-light text-secondary border px-2 py-1 extra-small rounded-2 pb-ts-subcard">Auth</span>
                        </div>
                    </div>

                    <!-- Button Action -->
                    <button type="button" class="btn btn-outline-secondary w-100 rounded-3 py-2 fw-semibold extra-small pb-ts-btn-outline template-action-btn">
                        Select This
                    </button>
                </div>

            </div>
        </div>

        <!-- Template 5: Blank Canvas -->
        <div class="col-md-6 col-lg-4">
            <div class="pb-ts-card bg-light p-4 rounded-4 border-dashed shadow-sm h-100 d-flex flex-column align-items-center justify-content-center text-center pb-ts-dashed-box pb-ts-template-card cursor-pointer" style="min-height: 320px;" onclick="selectTemplateCard('blank_canvas', this)">
                <div class="position-relative">
                    <div class="rounded-circle bg-primary-subtle text-primary p-3 mb-3 d-flex align-items-center justify-content-center shadow-sm mx-auto" style="width: 52px; height: 52px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </div>
                    <div class="position-absolute top-0 start-100 translate-middle bg-primary text-white rounded-circle d-none align-items-center justify-content-center shadow-sm check-badge" style="width: 24px; height: 24px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                </div>
                <h5 class="fw-bold text-dark mb-2 pb-ts-heading fs-6">Blank Canvas</h5>
                <p class="text-secondary extra-small mb-0" style="max-width: 220px; line-height: 1.5;">
                    Start from scratch with a clean, unconfigured environment. Recommended for expert users.
                </p>
            </div>
        </div>

    </div>

    <!-- CARD FOOTER ACTIONS -->
    <div class="d-flex align-items-center justify-content-between pt-4 border-top pb-ts-border-subtle mt-4">
        <button type="button" class="btn btn-link text-muted text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 p-0" onclick="changeSlide(-1)">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            <span>Previous</span>
        </button>

        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn rounded-3 px-4 py-2 fw-semibold pb-ts-btn-outline" onclick="previewCurrentTemplate()">
                Preview Template
            </button>
            <button type="button" class="btn btn-primary rounded-3 px-4 py-2 fw-bold shadow-sm text-white pb-ts-btn-main" onclick="changeSlide(1)">
                Next Step
            </button>
        </div>
    </div>

</div>

<!-- SLIDE 8 TEMPLATE SELECTION SCRIPT -->
<script>
    function selectTemplateCard(templateKey, cardEl) {
        // Set hidden input value
        document.getElementById('selectedTemplateInput').value = templateKey;

        // Reset all cards
        document.querySelectorAll('.pb-ts-template-card').forEach(card => {
            card.classList.remove('border-2', 'border-primary', 'active-template');
            
            // Reset check badge
            const badge = card.querySelector('.check-badge');
            if (badge) {
                badge.classList.add('d-none');
                badge.classList.remove('d-flex');
            }

            // Reset action button
            const btn = card.querySelector('.template-action-btn');
            if (btn) {
                btn.innerText = 'Select This';
                btn.className = 'btn btn-outline-secondary w-100 rounded-3 py-2 fw-semibold extra-small pb-ts-btn-outline template-action-btn';
            }
        });

        // Highlight selected card
        cardEl.classList.add('border-2', 'border-primary', 'active-template');

        // Show check badge
        const activeBadge = cardEl.querySelector('.check-badge');
        if (activeBadge) {
            activeBadge.classList.remove('d-none');
            activeBadge.classList.add('d-flex');
        }

        // Update action button if present
        const activeBtn = cardEl.querySelector('.template-action-btn');
        if (activeBtn) {
            activeBtn.innerText = 'Selected Template';
            activeBtn.className = 'btn btn-primary w-100 rounded-3 py-2 fw-bold extra-small template-action-btn pb-ts-btn-main';
        }
    }

    function previewCurrentTemplate() {
        const selectedKey = document.getElementById('selectedTemplateInput').value;
        alert('Opening preview for: ' + selectedKey.replace('_', ' ').toUpperCase());
    }
</script>