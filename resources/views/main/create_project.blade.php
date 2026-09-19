@extends('layouts.master')

@section('title', 'Create Project Wizard')

@section('content')

<!-- ==========================================
     MAIN SLIDES CONTAINER (NO TOP NAVBAR)
=========================================== -->
<section class="py-5 pb-ts-wizard-bg min-vh-100 d-flex align-items-center">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

  <form id="tachSaasProjectForm" action="{{ isset($portfolio) && $portfolio->id ? route('portfolio.update', $portfolio->id) : route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


                    <!-- Include individual step files -->
                    @include('main.steps.step1')
                    @include('main.steps.step2')
                    @include('main.steps.step3')
                    @include('main.steps.step4')
                    @include('main.steps.step5')
                    @include('main.steps.step6')
                    @include('main.steps.step7')
                    @include('main.steps.step8')
                    @include('main.steps.step9')
                    @include('main.steps.step10')

                </form>

            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     JAVASCRIPT CONTROLLER
=========================================== -->
<script>
    let currentSlide = 1;
    const totalSlides = 10;

    // Handle Form Final Submission / Step Forward
    function handleNextClick() {
        if (currentSlide === totalSlides) {
            if (validateCurrentSlide(currentSlide)) {
                document.getElementById('tachSaasProjectForm').submit();
            }
        } else {
            changeSlide(1);
        }
    }

    // Slide Switcher Function
    function changeSlide(direction) {
        // If moving forward, validate current slide first
        if (direction === 1 && !validateCurrentSlide(currentSlide)) {
            return false;
        }

        // Hide currently active slide
        const activeEl = document.querySelector(`.pb-ts-slide[data-slide="${currentSlide}"]`);
        if (activeEl) {
            activeEl.classList.remove('active');
        }

        // Update current slide index safely
        currentSlide += direction;

        if (currentSlide < 1) currentSlide = 1;
        if (currentSlide > totalSlides) currentSlide = totalSlides;

        // Show target slide
        const nextEl = document.querySelector(`.pb-ts-slide[data-slide="${currentSlide}"]`);
        if (nextEl) {
            nextEl.classList.add('active');
        }

        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Robust Slide Validation
    function validateCurrentSlide(slideNum) {
        const slideEl = document.querySelector(`.pb-ts-slide[data-slide="${slideNum}"]`);
        if (!slideEl) return true;

        // Find required fields inside this slide only
        const requiredInputs = slideEl.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;

        requiredInputs.forEach(input => {
            if (input.type === 'file') {
                if (!input.files || input.files.length === 0) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            } else if (input.type === 'radio') {
                const radioName = input.name;
                const checkedRadio = slideEl.querySelector(`input[name="${radioName}"]:checked`);
                if (!checkedRadio) {
                    slideEl.querySelectorAll(`input[name="${radioName}"]`).forEach(r => r.classList.add('is-invalid'));
                    isValid = false;
                } else {
                    slideEl.querySelectorAll(`input[name="${radioName}"]`).forEach(r => r.classList.remove('is-invalid'));
                }
            } else {
                if (!input.value || !input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            }
        });

        return isValid;
    }

    // Step 3 Helper Functions: Add & Remove Skill Badges
    let skillsData = [];

    function updateSliderValue(val) {
        const badge = document.getElementById('sliderValueBadge');
        if (badge) badge.innerText = val;
    }

    function handleAddSkill() {
        const inputEl = document.getElementById('skillNameInput');
        const sliderEl = document.getElementById('skillProficiencySlider');
        if (!inputEl || !sliderEl) return;

        const name = inputEl.value.trim();
        const level = sliderEl.value;

        if (!name) {
            inputEl.classList.add('is-invalid');
            return;
        }
        inputEl.classList.remove('is-invalid');

        skillsData.push({ id: Date.now(), name, level });
        inputEl.value = '';

        renderSkills();
    }

    function renderSkills() {
        const emptyState = document.getElementById('competenciesEmptyState');
        const listEl = document.getElementById('competenciesList');
        const counterEl = document.getElementById('competenciesCounter');

        if (counterEl) counterEl.innerText = `${skillsData.length} added`;

        if (skillsData.length === 0) {
            if (emptyState) emptyState.style.display = 'flex';
            if (listEl) listEl.innerHTML = '';
            return;
        }

        if (emptyState) emptyState.style.display = 'none';

        if (listEl) {
            listEl.innerHTML = skillsData.map(item => `
                <div class="badge bg-white text-dark border shadow-sm rounded-pill px-3 py-2 d-inline-flex align-items-center gap-2 fs-6 fw-normal pb-ts-skill-tag">
                    <span class="fw-bold">${escapeHtml(item.name)}</span>
                    <span class="badge bg-primary text-white rounded-pill px-2 py-1 small pb-ts-lvl-pill">Level ${item.level}/5</span>
                    <button type="button" class="btn-close ms-1" style="font-size: 0.65rem;" onclick="removeSkill(${item.id})" aria-label="Remove"></button>
                </div>
            `).join('');
        }
    }

    function removeSkill(id) {
        skillsData = skillsData.filter(s => s.id !== id);
        renderSkills();
    }

    function escapeHtml(str) {
        return str.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
    }
</script>
<script>
    // Pre-load existing skills from database if editing, or old input if validation failed
    let skillsData = @json(old('skills', isset($portfolio->skills) ?$portfolio->skills : []));

    // Ensure array elements are formatted cleanly on page load
    if (!Array.isArray(skillsData)) {
        skillsData = [];
    } else {
        skillsData = skillsData.map((s, idx) => ({
            id: s.id || Date.now() + idx,
            name: s.name || s[0] || '',
            level: s.level || s[1] || '3'
        })).filter(s => s.name);
    }

    // Run render immediately when the script loads so existing badges appear
    document.addEventListener("DOMContentLoaded", function() {
        renderSkills();
    });

    function updateSliderValue(val) {
        const badge = document.getElementById('sliderValueBadge');
        if (badge) badge.innerText = val;
    }

    function handleAddSkill() {
        const inputEl = document.getElementById('skillNameInput');
        const sliderEl = document.getElementById('skillProficiencySlider');
        if (!inputEl || !sliderEl) return;

        const name = inputEl.value.trim();
        const level = sliderEl.value;

        if (!name) {
            inputEl.classList.add('is-invalid');
            return;
        }
        inputEl.classList.remove('is-invalid');

        skillsData.push({ id: Date.now(), name, level });
        inputEl.value = '';
        sliderEl.value = 3;
        updateSliderValue(3);

        renderSkills();
    }

    function renderSkills() {
        const emptyState = document.getElementById('competenciesEmptyState');
        const listEl = document.getElementById('competenciesList');
        const counterEl = document.getElementById('competenciesCounter');
        const hiddenContainer = document.getElementById('hiddenSkillsContainer');

        if (counterEl) counterEl.innerText = `${skillsData.length} added`;

        if (skillsData.length === 0) {
            if (emptyState) emptyState.style.display = 'flex';
            if (listEl) listEl.innerHTML = '';
            if (hiddenContainer) hiddenContainer.innerHTML = '';
            return;
        }

        if (emptyState) emptyState.style.display = 'none';

        if (listEl) {
            listEl.innerHTML = skillsData.map(item => `
                <div class="badge bg-white text-dark border shadow-sm rounded-pill px-3 py-2 d-inline-flex align-items-center gap-2 fs-6 fw-normal pb-ts-skill-tag">
                    <span class="fw-bold">${escapeHtml(item.name)}</span>
                    <span class="badge bg-primary text-white rounded-pill px-2 py-1 small pb-ts-lvl-pill">Level ${item.level}/5</span>
                    <button type="button" class="btn-close ms-1" style="font-size: 0.65rem;" onclick="removeSkill(${item.id})" aria-label="Remove"></button>
                </div>
            `).join('');
        }

        // Dynamically generate hidden input fields so Laravel receives the array on form submit
        if (hiddenContainer) {
            hiddenContainer.innerHTML = skillsData.map((item, index) => `
                <input type="hidden" name="skills[${index}][name]" value="${escapeHtml(item.name)}">
                <input type="hidden" name="skills[${index}][level]" value="${item.level}">
            `).join('');
        }
    }

    function removeSkill(id) {
        skillsData = skillsData.filter(s => s.id !== id);
        renderSkills();
    }

    function escapeHtml(str) {
        if (!str) return '';
        return String(str).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
    }
</script>

@endsection