@extends('layouts.master')

@section('title', 'Contact Us - Portfolio Builder')

@section('content')

<!-- ==========================================
     CONTACT HERO SECTION
=========================================== -->
<section class="pb-contact-hero py-5 text-center position-relative">
    <div class="container py-4 position-relative z-1">
        <div class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm mb-4 pb-contact-badge">
            <span class="badge bg-primary rounded-pill me-2 text-white">Get In Touch</span>
            <span class="small fw-semibold text-muted">We're Here to Help</span>
        </div>
        
        <h1 class="display-3 fw-bold text-dark mb-3">
            Let’s start a <span class="text-primary">conversation</span>
        </h1>
        
        <p class="lead text-muted mx-auto mb-5" style="max-width: 680px;">
            Have a question about our templates, pricing, or custom domains? Send us a message and our support team will get back to you within 24 hours.
        </p>
    </div>
</section>

<!-- ==========================================
     FORM & INFO SECTION
=========================================== -->
<section class="py-5 pb-contact-bg-soft">
    <div class="container py-4">
        <div class="row g-5">
            
            <!-- LEFT: CONTACT FORM CARD -->
            <div class="col-lg-7 pb-contact-fade-up">
                <div class="pb-contact-card bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h3 class="fw-bold text-dark mb-2">Send us a message</h3>
                    <p class="text-muted small mb-4">Fill out the form below and we'll reply as soon as possible.</p>

                    <form action="{{route('contact')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="contactName" class="form-label fw-semibold small text-dark">Full Name</label>
                                <input type="text" name="name" class="form-control pb-contact-input" id="contactName" placeholder="John Doe" required>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <label for="contactEmail" class="form-label fw-semibold small text-dark">Email Address</label>
                                <input type="email" name="email" class="form-control pb-contact-input" id="contactEmail" placeholder="john@example.com" required>
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <label for="contactSubject" class="form-label fw-semibold small text-dark">Subject</label>
                                <input type="text" name="subject" class="form-control pb-contact-input" id="contactSubject" placeholder="How can we help you?" required>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label for="contactMessage" class="form-label fw-semibold small text-dark">Message</label>
                                <textarea class="form-control pb-contact-input" name="message" id="contactMessage" rows="5" placeholder="Write your message here..." required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg pb-contact-btn-pill w-100 fw-bold shadow-sm">
                                    Send Message &rarr;
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- RIGHT: DIRECT CONTACT INFO -->
            <div class="col-lg-5 pb-contact-fade-right">
                <div class="d-flex flex-column gap-4 h-100 justify-content-between">
                    
                    <!-- Card 1: Support Email -->
                    <div class="pb-contact-card bg-white p-4 rounded-4 border shadow-sm d-flex align-items-start gap-3">
                        <div class="pb-contact-icon-box text-primary flex-shrink-0">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Email Support</h5>
                            <p class="text-muted small mb-1">Our team is online 24/7 to answer your technical questions.</p>
                            <a href="mailto:support@portfoliobuilder.com" class="fw-semibold text-primary text-decoration-none">support@portfoliobuilder.com</a>
                        </div>
                    </div>

                    <!-- Card 2: Help Center -->
                    <div class="pb-contact-card bg-white p-4 rounded-4 border shadow-sm d-flex align-items-start gap-3">
                        <div class="pb-contact-icon-box text-primary flex-shrink-0">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Documentation & Knowledge Base</h5>
                            <p class="text-muted small mb-1">Explore tutorials and step-by-step guides on connecting custom domains.</p>
                            <a href="#" class="fw-semibold text-primary text-decoration-none">Visit Help Center &rarr;</a>
                        </div>
                    </div>

                    <!-- Card 3: Office Location / Image -->
                    <div class="pb-contact-card bg-white p-4 rounded-4 border shadow-sm">
                        <div class="pb-contact-icon-box text-primary mb-3">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Our Headquarters</h5>
                        <p class="text-muted small mb-3">100 Innovation Way, Suite 400<br>San Francisco, CA 94105</p>
                        <div class="rounded-3 overflow-hidden border">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop" class="img-fluid w-100" alt="Office workspace">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection