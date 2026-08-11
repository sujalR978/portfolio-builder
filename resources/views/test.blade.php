<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TechSaaS Core | Build Your Professional Portfolio</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Geist:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-tertiary-fixed-variant": "#004c6e",
                    "on-secondary-fixed": "#07006c",
                    "on-primary-container": "#eeefff",
                    "tertiary-fixed": "#c9e6ff",
                    "secondary-fixed-dim": "#c0c1ff",
                    "inverse-primary": "#b4c5ff",
                    "secondary-fixed": "#e1e0ff",
                    "secondary": "#4648d4",
                    "on-tertiary-fixed": "#001e2f",
                    "surface-variant": "#d9e3f7",
                    "surface-container-low": "#eff3ff",
                    "primary": "#004ac6",
                    "primary-container": "#2563eb",
                    "inverse-surface": "#273140",
                    "surface-dim": "#d0daef",
                    "outline-variant": "#c3c6d7",
                    "on-error-container": "#93000a",
                    "background": "#f9f9ff",
                    "on-secondary-fixed-variant": "#2f2ebe",
                    "on-surface": "#121c2a",
                    "tertiary-fixed-dim": "#89ceff",
                    "tertiary-container": "#0074a6",
                    "on-surface-variant": "#434655",
                    "secondary-container": "#6063ee",
                    "surface-container": "#e6eeff",
                    "on-primary-fixed": "#00174b",
                    "surface-container-highest": "#d9e3f7",
                    "primary-fixed-dim": "#b4c5ff",
                    "surface-container-high": "#dee9fd",
                    "on-error": "#ffffff",
                    "outline": "#737686",
                    "on-primary-fixed-variant": "#003ea8",
                    "error": "#ba1a1a",
                    "surface-container-lowest": "#ffffff",
                    "on-primary": "#ffffff",
                    "primary-fixed": "#dbe1ff",
                    "surface-tint": "#0053db",
                    "on-tertiary": "#ffffff",
                    "on-secondary-container": "#fffbff",
                    "on-background": "#121c2a",
                    "inverse-on-surface": "#ebf1ff",
                    "on-tertiary-container": "#e4f2ff",
                    "error-container": "#ffdad6",
                    "surface": "#f9f9ff",
                    "on-secondary": "#ffffff",
                    "tertiary": "#005a82",
                    "surface-bright": "#f9f9ff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "sm": "8px",
                    "3xl": "64px",
                    "xs": "4px",
                    "xl": "32px",
                    "lg": "24px",
                    "gutter": "24px",
                    "margin-mobile": "16px",
                    "base": "4px",
                    "margin-desktop": "32px",
                    "md": "16px",
                    "2xl": "48px"
            },
            "fontFamily": {
                    "code": ["Geist"],
                    "label-sm": ["Geist"],
                    "display": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "label-md": ["Geist"],
                    "body-md": ["Inter"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "body-lg": ["Inter"],
                    "headline-lg": ["Hanken Grotesk"],
                    "body-sm": ["Inter"]
            },
            "fontSize": {
                    "code": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                    "display": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(229, 231, 235, 0.5);
      }
      .hero-gradient {
        background: radial-gradient(circle at 50% 50%, rgba(37, 99, 235, 0.05) 0%, rgba(249, 249, 255, 1) 70%);
      }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md selection:bg-primary-container selection:text-on-primary-container">
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30 shadow-sm">
<div class="max-w-7xl mx-auto px-margin-desktop h-20 flex items-center justify-between">
<div class="font-headline-md text-headline-md font-bold text-primary">TechSaaS Core</div>
<div class="hidden md:flex items-center gap-xl">
<a class="text-primary font-semibold border-b-2 border-primary py-1 transition-opacity duration-200" href="#">Product</a>
<a class="text-on-surface-variant hover:text-primary transition-opacity duration-200" href="#">Features</a>
<a class="text-on-surface-variant hover:text-primary transition-opacity duration-200" href="#">How it Works</a>
<a class="text-on-surface-variant hover:text-primary transition-opacity duration-200" href="#">Pricing</a>
</div>
<div class="flex items-center gap-md">
<button class="hidden md:block font-label-md text-label-md text-on-surface-variant hover:opacity-80 active:scale-95 transition-all">Log In</button>
<button class="bg-primary-container text-on-primary-container px-lg py-sm rounded-lg font-label-md text-label-md hover:opacity-90 active:scale-95 transition-all shadow-sm">Get Started</button>
</div>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative overflow-hidden hero-gradient pt-3xl pb-2xl px-margin-mobile md:px-margin-desktop">
<div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-2xl items-center">
<div class="z-10 text-center lg:text-left">
<h1 class="font-display text-display mb-md text-on-background leading-tight">
                        Build Your Professional <span class="text-primary">Portfolio</span> in Minutes
                    </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-xl max-w-xl mx-auto lg:mx-0">
                        Turn your experience, projects, and skills into a stunning personal website. No coding required. The most efficient way for architects of tech to showcase their work.
                    </p>
<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-md">
<button class="w-full sm:w-auto bg-primary text-on-primary px-3xl py-md rounded-xl font-headline-md text-headline-md hover:shadow-lg hover:shadow-primary/20 transition-all active:scale-95">
                            Get Started Now
                        </button>
<button class="w-full sm:w-auto border border-outline px-3xl py-md rounded-xl font-headline-md text-headline-md hover:bg-surface-container-low transition-all">
                            View Samples
                        </button>
</div>
</div>
<div class="relative group">
<div class="absolute -inset-4 bg-primary/5 rounded-3xl blur-3xl group-hover:bg-primary/10 transition-colors duration-500"></div>
<div class="relative glass-card rounded-2xl p-sm shadow-2xl">
<img class="rounded-xl w-full shadow-inner object-cover aspect-video" data-alt="A sleek, high-fidelity user interface of a professional portfolio dashboard showing clean project cards, skill progress bars in electric blue, and a minimalist sidebar. The aesthetic is modern corporate with generous whitespace, soft shadows, and a clear information hierarchy on a pure white surface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIgLH1LbTkK7aX3A-jlwqhCgFlQSjW-c21EtfZl-_s10tN_gRHvWe7B5pU8cbSk4I74PJcXazLO_liVT7i4uEf9XEyg82iLWowJsMi6mF-lq_nbj6JpiE1oxyOVlrH6c3Sd-CW3BZA4ddSF0bN-8RHtNSExHPwYpxCIWdubV7pgJFlN10B3EErZfmmyhgwCpJ37UhOt9WuN5WKGKsWGJHfj1si5pQrUySzcZ3xcpkjScCiI_82xExzfscAO9lJMgvQd7U5vaE2kXY"/>
</div>
<!-- Floating Badge -->
<div class="absolute -bottom-6 -left-6 glass-card p-md rounded-xl shadow-xl hidden md:flex items-center gap-sm animate-bounce">
<div class="w-10 h-10 bg-primary-container rounded-full flex items-center justify-center text-on-primary-container">
<span class="material-symbols-outlined">rocket_launch</span>
</div>
<div>
<p class="font-label-md text-label-md font-bold">100% Automated</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Setup in &lt; 5 mins</p>
</div>
</div>
</div>
</div>
</section>
<!-- Features Section (Bento Grid) -->
<section class="py-3xl px-margin-mobile md:px-margin-desktop max-w-7xl mx-auto">
<div class="text-center mb-2xl">
<h2 class="font-headline-lg text-headline-lg mb-sm">Engineered for Excellence</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Focus on your work while we handle the presentation.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg h-full">
<!-- Automated Layouts -->
<div class="md:col-span-2 bg-surface-container-lowest border border-outline-variant p-2xl rounded-2xl shadow-sm hover:shadow-md transition-shadow">
<div class="flex flex-col h-full justify-between">
<div>
<span class="material-symbols-outlined text-primary text-3xl mb-md">auto_awesome_motion</span>
<h3 class="font-headline-md text-headline-md mb-md">Automated Layouts</h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">Our intelligent engine arranges your content perfectly across all devices. Never worry about responsiveness or spacing again.</p>
</div>
<div class="mt-xl rounded-xl overflow-hidden border border-outline-variant/30">
<img class="w-full h-48 object-cover" data-alt="A technical visualization of responsive web design layouts being automatically rearranged for mobile, tablet, and desktop screens. The style is minimalist with blue and gray wireframes on a clean white background, conveying structural precision and architectural reliability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAT-rvkDtsLp4h1mwmjfRq1O-bB86Wvf0O2oCW9wta9ttN2TIR5taeP2_2OYeBoe_5uqdaTrLgAItgYhpr1tulmsBx0vwkA2WaxMYLG_ez-qDHGHKUOpA_rgAdkNoq1zYSdnpN21JUtNSiP7GIiVcIjwj-OitqzvnKWultD_s2MUSHnr462cQ7EPcB5wdox_jICcsf2RFIq0nww8KI3tL_w3i6bBZb2s__8fNy69C2y78KsPiTjYHnl8NWN9_8uqP2g3wh7jlS6KiY"/>
</div>
</div>
</div>
<!-- Customizable Themes -->
<div class="bg-primary text-on-primary p-2xl rounded-2xl shadow-lg flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-3xl mb-md">palette</span>
<h3 class="font-headline-md text-headline-md mb-md">Customizable Themes</h3>
<p class="font-body-sm text-body-sm opacity-90">Personalize every detail with our curated theme engine. Match your professional brand with impeccable typography and color palettes.</p>
</div>
<div class="flex gap-sm mt-xl">
<div class="w-8 h-8 rounded-full bg-white/20 border border-white/40"></div>
<div class="w-8 h-8 rounded-full bg-white/40 border border-white/40"></div>
<div class="w-8 h-8 rounded-full bg-white/60 border border-white/40"></div>
<div class="w-8 h-8 rounded-full bg-white border border-white/40"></div>
</div>
</div>
<!-- Project Showcasing -->
<div class="md:col-span-3 bg-surface-container-low p-2xl rounded-2xl border border-outline-variant flex flex-col md:flex-row items-center gap-xl">
<div class="md:w-1/2">
<span class="material-symbols-outlined text-primary text-3xl mb-md">inventory_2</span>
<h3 class="font-headline-md text-headline-md mb-md">Project Showcasing</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Highlight your best work with high-fidelity case study templates. Include GitHub links, live demos, and detailed technical breakdowns with ease.</p>
</div>
<div class="md:w-1/2 w-full grid grid-cols-2 gap-md">
<div class="h-32 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant"></div>
<div class="h-32 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant"></div>
</div>
</div>
</div>
</section>
<!-- How it Works -->
<section class="py-3xl bg-surface-container-lowest relative overflow-hidden">
<div class="max-w-7xl mx-auto px-margin-desktop">
<div class="text-center mb-2xl">
<h2 class="font-headline-lg text-headline-lg mb-sm">Your New Site in 3 Steps</h2>
</div>
<div class="grid md:grid-cols-3 gap-2xl relative">
<!-- Connector line -->
<div class="hidden md:block absolute top-12 left-0 w-full h-[2px] bg-outline-variant/30 z-0"></div>
<!-- Step 1 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center mb-lg border-4 border-white shadow-md">
<span class="font-display text-headline-lg text-primary">1</span>
</div>
<h4 class="font-headline-md text-headline-md mb-sm">Input your details</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Import from LinkedIn or GitHub, or fill in our intuitive form.</p>
</div>
<!-- Step 2 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center mb-lg border-4 border-white shadow-md">
<span class="font-display text-headline-lg text-primary">2</span>
</div>
<h4 class="font-headline-md text-headline-md mb-sm">Choose a style</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Select from our library of designer themes and layouts.</p>
</div>
<!-- Step 3 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mb-lg border-4 border-white shadow-lg">
<span class="material-symbols-outlined text-on-primary text-4xl">check_circle</span>
</div>
<h4 class="font-headline-md text-headline-md mb-sm">Publish your portfolio</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Get a custom link and launch your professional presence instantly.</p>
</div>
</div>
</div>
</section>
<!-- Testimonial Section -->
<section class="py-3xl px-margin-mobile md:px-margin-desktop">
<div class="max-w-4xl mx-auto">
<div class="glass-card rounded-3xl p-2xl md:p-3xl text-center relative shadow-xl overflow-hidden border border-primary/10">
<div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16"></div>
<span class="material-symbols-outlined text-primary text-5xl mb-xl opacity-20">format_quote</span>
<p class="font-display text-headline-lg italic text-on-background mb-xl leading-relaxed">
                        "TechSaaS Core completely changed how I approach my job search. I built a site that normally takes weeks in less than 30 minutes. It's the standard for modern developers."
                    </p>
<div class="flex items-center justify-center gap-md">
<img class="w-16 h-16 rounded-full border-2 border-primary object-cover" data-alt="A professional headshot of a software developer in their 30s, looking confident with a slight smile. The background is a soft-focus modern office environment. High-quality lighting, professional aesthetic, captured with a shallow depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA81_fFGt60y_zd0WxGrNHGccVQItfPN6RHsiQddPZ391UoqGlzIlmFcloChqE0araHT3FdA9otOpS_a9iyhoRCtnC0I204IEi3Aol2RXViGMjhvLVjVDEVVFxrfgcYc0kUjJMzl5FQIyr_AWP1cjqsrke4aarG5KHnR6Hv5Z5qsyzWuKEHS94KwC9ugwRBW7_WayDF3KUPhOnnLRGyp7NHX8lwbBM2ZLeeOb3ROOtckL7fx5WtE0e4Bvim5Mc_kJ4et08f3FVT3LM"/>
<div class="text-left">
<p class="font-headline-md text-headline-md leading-none">Marcus Thorne</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Senior Full-Stack Engineer</p>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Footer Section -->
<section class="py-3xl bg-inverse-surface text-inverse-on-surface text-center px-margin-mobile">
<div class="max-w-3xl mx-auto">
<h2 class="font-display text-display mb-md">Ready to get hired?</h2>
<p class="font-body-lg text-body-lg mb-xl opacity-80">Join 50,000+ professionals who trust TechSaaS Core to build their brand.</p>
<button class="bg-primary text-on-primary px-3xl py-md rounded-xl font-headline-md text-headline-md hover:scale-105 transition-all">Create My Portfolio</button>
</div>
</section>
</main>
<!-- Footer Component -->
<footer class="bg-surface-container-lowest border-t border-outline-variant w-full py-2xl">
<div class="max-w-7xl mx-auto px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-lg">
<div class="font-headline-md text-headline-md font-bold text-on-surface">TechSaaS Core</div>
<div class="flex gap-xl">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Terms of Service</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Contact Us</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Documentation</a>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant opacity-70">
                © 2024 TechSaaS Core. All rights reserved.
            </div>
</div>
</footer>
<script>
        // Simple scroll reveal or micro-interactions
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', function(e) {
                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;
                let ripples = document.createElement('span');
                ripples.style.left = x + 'px';
                ripples.style.top = y + 'px';
                // (Note: Optional decorative effect without extra libs)
            });
        });
    </script>
</body></html>