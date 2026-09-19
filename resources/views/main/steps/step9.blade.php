<div class="pb-ts-slide" data-slide="9">
    
    <!-- TOP PROGRESS BAR (90%) -->
    <div class="mb-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <span class="small fw-semibold text-primary pb-ts-percent-text">Preparation Complete</span>
            <span class="small fw-bold text-primary pb-ts-percent-text">90%</span>
        </div>
        <div class="progress pb-ts-progress-track" style="height: 6px;">
            <div class="progress-bar bg-primary rounded-pill pb-ts-progress-bar" role="progressbar" style="width: 90%;"></div>
        </div>
    </div>

    <!-- MAIN TWO-COLUMN CARD CONTAINER -->
    <div class="pb-ts-card bg-white rounded-4 border shadow-sm overflow-hidden mb-4">
        <div class="row g-0">
            
            <!-- LEFT COLUMN: PROJECT SUMMARY -->
            <div class="col-md-6 border-end pb-ts-border-subtle p-4 p-lg-5">
                <h5 class="fw-bold text-dark mb-1 pb-ts-heading">Project Summary</h5>
                <p class="text-muted extra-small mb-4">Review your configurations before the final generation phase.</p>

                <div class="d-flex flex-column gap-3 mb-4">
                    
                    <!-- Detail 1: Project Name -->
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-3 bg-primary-subtle text-primary p-2 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 18 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                        </div>
                        <div>
                            <span class="extra-small text-muted fw-bold tracking-wider text-uppercase d-block">PROJECT NAME</span>
                            <h6 class="fw-bold text-dark mb-0 small pb-ts-label">TachSaaS Portfolio Builder 2026</h6>
                        </div>
                    </div>

                    <!-- Detail 2: Infrastructure -->
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-3 bg-primary-subtle text-primary p-2 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                        </div>
                        <div>
                            <span class="extra-small text-muted fw-bold tracking-wider text-uppercase d-block">INFRASTRUCTURE</span>
                            <h6 class="fw-bold text-dark mb-0 small pb-ts-label">Serverless Architecture (Node.js/AWS)</h6>
                        </div>
                    </div>

                    <!-- Detail 3: Auth Protocol -->
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-3 bg-primary-subtle text-primary p-2 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </div>
                        <div>
                            <span class="extra-small text-muted fw-bold tracking-wider text-uppercase d-block">AUTH PROTOCOL</span>
                            <h6 class="fw-bold text-dark mb-0 small pb-ts-label">OAuth 2.0 + MFA Enterprise</h6>
                        </div>
                    </div>

                </div>

                <hr class="my-4 pb-ts-border-subtle">

                <!-- Blueprint / Architecture Preview Thumbnail -->
                <div class="rounded-3 overflow-hidden border pb-ts-border-subtle mb-3">
                    <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?q=80&w=600&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 110px;" alt="Blueprint Preview">
                </div>

                <!-- Edit Details Link -->
                <a href="#" class="extra-small text-primary fw-bold text-decoration-none d-inline-flex align-items-center gap-1" onclick="changeSlide(-1); return false;">
                    <span>Edit Full Details</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                </a>

            </div>

            <!-- RIGHT COLUMN: SELECT DELIVERY -->
            <div class="col-md-6 p-4 p-lg-5 bg-light pb-ts-subcard d-flex flex-column justify-content-between">
                <div>
                    <h5 class="fw-bold text-dark mb-1 pb-ts-heading">Select Delivery</h5>
                    <p class="text-muted extra-small mb-4">How would you like to receive the generated artifacts?</p>

                    <input type="hidden" name="delivery_method" id="deliveryMethodInput" value="publish_pdf">

                    <div class="d-flex flex-column gap-3 mb-4">
                        
                        <!-- Option 1: Print PDF -->
                        <div class="p-3 bg-white rounded-4 border shadow-sm cursor-pointer pb-ts-delivery-card" onclick="selectDeliveryOption('pdf_only', this)">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="rounded-3 bg-primary-subtle text-primary p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 18 8"/></svg>
                                </div>
                                <h6 class="fw-bold text-dark mb-0 small pb-ts-label">Print PDF</h6>
                            </div>
                            <p class="extra-small text-muted mb-0" style="line-height: 1.5;">
                                Generate a high-fidelity technical specification document for internal review.
                            </p>
                        </div>

                        <!-- Option 2: Publish & PDF (Selected Default) -->
                        <div class="p-3 rounded-4 shadow-sm cursor-pointer pb-ts-delivery-card active-delivery-card text-white bg-primary" onclick="selectDeliveryOption('publish_pdf', this)" style="background-color: var(--bs-primary);">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-3 bg-white bg-opacity-20 text-white p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.71 1.26-1.5 1.5-2.5"/><path d="M12 15l-3-3 7.5-7.5c.83-.83 2.17-.83 3 0s.83 2.17 0 3L12 15z"/></svg>
                                    </div>
                                    <h6 class="fw-bold mb-0 small text-white">Publish &amp; PDF</h6>
                                </div>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="text-white"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </div>
                            <p class="extra-small text-white text-opacity-85 mb-0" style="line-height: 1.5;">
                                Finalize project structure and deploy to cloud while downloading documentation.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Estimated Time Counter -->
                <div class="text-center pt-2">
                    <span class="extra-small text-muted fw-semibold d-inline-flex align-items-center gap-1">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Estimated generation time: &lt; 2 minutes
                    </span>
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

      <button type="button" class="btn btn-success rounded-3 px-5 py-2 fw-bold shadow-sm text-white pb-ts-btn-main d-inline-flex align-items-center gap-2" onclick="document.getElementById('tachSaasProjectForm').submit();">
    <span>Finalize &amp; Deploy</span>
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
</button>
    </div>

</div>

<!-- SLIDE 9 SCRIPT -->
<script>
    function selectDeliveryOption(methodKey, cardEl) {
        document.getElementById('deliveryMethodInput').value = methodKey;

        document.querySelectorAll('.pb-ts-delivery-card').forEach(card => {
            card.classList.remove('active-delivery-card', 'bg-primary', 'text-white');
            card.classList.add('bg-white');
            
            const title = card.querySelector('h6');
            if (title) title.classList.remove('text-white');
            
            const desc = card.querySelector('p');
            if (desc) {
                desc.classList.remove('text-white', 'text-opacity-85');
                desc.classList.add('text-muted');
            }
        });

        cardEl.classList.remove('bg-white');
        cardEl.classList.add('active-delivery-card', 'bg-primary', 'text-white');

        const activeTitle = cardEl.querySelector('h6');
        if (activeTitle) activeTitle.classList.add('text-white');

        const activeDesc = cardEl.querySelector('p');
        if (activeDesc) {
            activeDesc.classList.remove('text-muted');
            activeDesc.classList.add('text-white', 'text-opacity-85');
        }
    }
</script>