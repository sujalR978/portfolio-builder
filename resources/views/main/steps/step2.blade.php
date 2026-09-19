@auth
<div class="pb-ts-slide" data-slide="2">
    
    <!-- TOP BACK LINK -->
    <div class="mb-3 text-start">
        <button type="button" class="btn btn-link text-muted text-decoration-none p-0 small fw-semibold d-inline-flex align-items-center gap-1" onclick="changeSlide(-1)">
            &larr; Back to Project Type
        </button>
    </div>

    <!-- MAIN CARD CONTAINER -->
    <div class="pb-ts-card bg-white rounded-4 border shadow-sm p-4 p-sm-5 mb-4">
        
        <!-- CARD HEADER -->
        <div class="d-flex align-items-start justify-content-between mb-4 pb-3 border-bottom pb-ts-border-subtle">
            <div>
                <h4 class="fw-bold text-dark mb-1 pb-ts-heading">Personal Details</h4>
                <p class="text-muted small mb-0">Tell us more about yourself to personalize your portfolio experience.</p>
            </div>
            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center shadow-sm" style="width: 36px; height: 36px; flex-shrink: 0;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
        </div>

        <!-- PROFILE PHOTO SECTION -->
        <div class="d-flex align-items-center gap-4 mb-4 pb-4 border-bottom pb-ts-border-subtle flex-wrap">
        <div class="position-relative">
    <!-- Displays the uploaded profile image or falls back to Unsplash -->
    <img id="avatarPreviewImg" 
         src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop' }}" 
         class="rounded-circle object-fit-cover border border-3 border-primary shadow-sm" 
         width="96" height="96" 
         alt="Profile Photo">
         
    <!-- Edit Pencil Icon Button -->
    <label for="avatarFileInput" class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle p-1 d-flex align-items-center justify-content-center shadow-sm cursor-pointer" style="width: 26px; height: 26px; transform: translate(2px, 2px);">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
    </label>

    <!-- File Input (Note: name is set to "profile_image" to match your controller) -->
    <input type="file" id="avatarFileInput" name="profile_photo" class="d-none" accept="image/*" onchange="previewUserAvatar(this)">
</div>
            <div>
                <h6 class="fw-bold text-dark mb-1 pb-ts-label">Profile Photo</h6>
                <p class="text-muted extra-small mb-2">Recommended: 400×400px. JPG, PNG or WebP.</p>
                <div class="d-flex gap-2">
                    <label for="avatarFileInput" class="btn btn-primary btn-sm rounded-3 px-3 fw-bold text-white shadow-sm cursor-pointer pb-ts-btn-main">
                        Upload New
                    </label>
                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-3 px-3 fw-semibold pb-ts-btn-outline" onclick="removeUserAvatar()">
                        Remove
                    </button>
                </div>
            </div>
        </div>

        <!-- FORM INPUT GRID -->
        <div class="row g-3 mb-4">
            
            <!-- Full Name -->
            <div class="col-md-6">
                <label for="s2FullName" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Full Name *</label>
                <div class="input-group pb-ts-input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </span>
                    <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" id="s2FullName" name="full_name" placeholder="{{Auth::user()->firstName}} {{Auth::user()->lastName}}" required>
                </div>
            </div>

            <!-- Title / Role -->
            <div class="col-md-6">
                <label for="s2TitleRole" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Title / Role *</label>
                <div class="input-group pb-ts-input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </span>
                    <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" id="s2TitleRole" name="title_role" placeholder="Senior Product Designer" required>
                </div>
            </div>

            <!-- Email Address -->
            <div class="col-md-6">
                <label for="s2Email" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Email Address *</label>
                <div class="input-group pb-ts-input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </span>
                    <input type="email" class="form-control border-start-0 ps-2 pb-ts-input" id="s2Email" name="email" placeholder="{{Auth::user()->email}}" required>
                </div>
            </div>

            <!-- Phone Number -->
            <div class="col-md-6">
                <label for="s2Phone" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Phone Number</label>
                <div class="input-group pb-ts-input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.79 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </span>
                    <input type="tel" class="form-control border-start-0 ps-2 pb-ts-input" id="s2Phone" name="phone_number" placeholder="+1 (555) 000-0000">
                </div>
            </div>

            <!-- Location -->
            <div class="col-12">
                <label for="s2Location" class="form-label fw-bold text-dark small mb-2 pb-ts-label">Location</label>
                <div class="input-group pb-ts-input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </span>
                    <input type="text" class="form-control border-start-0 ps-2 pb-ts-input" id="s2Location" name="location" placeholder="San Francisco, CA">
                </div>
            </div>

            <!-- Short Bio with Character Counter -->
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <label for="s2Bio" class="form-label fw-bold text-dark small mb-0 pb-ts-label">Short Bio</label>
                    <span class="extra-small text-muted"><span id="bioCharCount">0</span>/300</span>
                </div>
                <textarea class="form-control pb-ts-textarea" id="s2Bio" name="short_bio" rows="4" maxlength="300" placeholder="Briefly describe your professional background and what drives your creativity..." oninput="document.getElementById('bioCharCount').innerText = this.value.length"></textarea>
            </div>

        </div>

        <!-- BOTTOM ACTION BUTTONS -->
        <div class="d-flex align-items-center justify-content-between pt-3 border-top pb-ts-border-subtle">
            <button type="button" class="btn btn-link text-muted small text-decoration-none p-0 fw-semibold" onclick="changeSlide(1)">
                Skip for now
            </button>
            <button type="button" class="btn btn-primary rounded-3 px-4 py-2 fw-bold text-white shadow-sm d-inline-flex align-items-center gap-2 pb-ts-btn-main" onclick="changeSlide(1)">
                <span>Next Step: Social Links</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </button>
        </div>

    </div>

    <!-- BOTTOM INFORMATIONAL CARDS -->
    <div class="row g-3">
        
        <!-- Info Card 1: Why do we need this? -->
        <div class="col-md-6">
            <div class="p-3 rounded-4 border bg-white shadow-sm h-100 d-flex align-items-start gap-3 pb-ts-bottom-info-card">
                <div class="text-primary flex-shrink-0 mt-1 pb-ts-info-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                </div>
                <div>
                    <h6 class="fw-bold text-dark mb-1 small pb-ts-label">Why do we need this?</h6>
                    <p class="extra-small text-muted mb-0" style="line-height: 1.5;">
                        This information is used to automatically generate your "About Me" section and footer contact details.
                    </p>
                </div>
            </div>
        </div>

        <!-- Info Card 2: Your Privacy -->
        <div class="col-md-6">
            <div class="p-3 rounded-4 border bg-white shadow-sm h-100 d-flex align-items-start gap-3 pb-ts-bottom-info-card">
                <div class="text-primary flex-shrink-0 mt-1 pb-ts-info-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <h6 class="fw-bold text-dark mb-1 small pb-ts-label">Your Privacy</h6>
                    <p class="extra-small text-muted mb-0" style="line-height: 1.5;">
                        Only the details you choose to publish will be visible on your final portfolio site.
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- SLIDE 2 AVATAR PREVIEW SCRIPT -->
<script>
    function previewUserAvatar(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('avatarPreviewImg').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function removeUserAvatar() {
        document.getElementById('avatarPreviewImg').src = 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop';
        document.getElementById('avatarFileInput').value = '';
    }
</script>
@endauth