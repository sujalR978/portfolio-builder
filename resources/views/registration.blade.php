<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<!-- Top App Bar -->
<header class="bg-white shadow-sm d-flex justify-content-between align-items-center px-4 py-3">
    <div class="fw-bold fs-5 text-primary">TechSaaS Core</div>
    <div class="d-flex align-items-center gap-4">
        <nav class="d-none d-md-flex gap-4">
            <a href="#" class="text-secondary text-decoration-none small">Product</a>
            <a href="#" class="text-secondary text-decoration-none small">Solutions</a>
            <a href="#" class="text-secondary text-decoration-none small">Pricing</a>
        </nav>
         <a href="#" class="text-primary text-decoration-none fw-semibold small">Log In</a>
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow-1 d-flex align-items-center justify-content-center px-3 py-5">
    <div class="w-100" style="max-width: 520px;">
        <div class="card shadow-sm border p-4 p-md-5">

            <!-- Header -->
            <div class="text-center mb-4">
                <h1 class="h3 fw-bold mb-1">Create Account</h1>
                <p class="text-secondary mb-0">Experience the power of efficient SaaS architecture.</p>
            </div>

            <!-- Social Sign Up -->
            <div class="row g-2 mb-4">
                <div class="col-6">
                    <button class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-google"></i> Google
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-github"></i> GitHub
                    </button>
                </div>
            </div>

            <div class="d-flex align-items-center mb-4">
                <hr class="flex-grow-1">
                <span class="px-3 text-secondary small text-uppercase">Or register with email</span>
                <hr class="flex-grow-1">
            </div>

            <!-- Registration Form -->
            <form action="#" method="POST" id="registerForm">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold small">Full Name</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold small">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label fw-semibold small">Phone Number</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-telephone"></i></span>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1 (555) 000-0000">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold small">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label small text-secondary" for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 py-2" id="submitBtn">
                    <span id="submitBtnText">Create Account</span>
                    <i class="bi bi-arrow-right" id="submitBtnIcon"></i>
                </button>
            </form>

            <div class="text-center mt-4">
                <p class="text-secondary small mb-0">
                    Already have an account?
                    <a href="#" class="fw-bold text-decoration-none">Sign In</a>
                </p>
            </div>
        </div>

        <p class="text-center text-secondary small mt-3">
            By signing up, you agree to our
            <a href="#" class="text-decoration-underline">Terms of Service</a> and
            <a href="#" class="text-decoration-underline">Privacy Policy</a>.
        </p>
    </div>
</main>

<!-- Footer -->
<footer class="bg-white border-top px-4 py-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
    <div class="text-secondary small">© {{ date('Y') }} TechSaaS Core. All rights reserved.</div>
    <div class="d-flex gap-4">
        <a href="#" class="text-secondary text-decoration-none small">Privacy Policy</a>
        <a href="#" class="text-secondary text-decoration-none small">Terms of Service</a>
        <a href="#" class="text-secondary text-decoration-none small">Help Center</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Password visibility toggle
    document.getElementById('togglePassword').addEventListener('click', function () {
        const input = document.getElementById('password');
        const icon = this.querySelector('i');
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        icon.classList.toggle('bi-eye');
        icon.classList.toggle('bi-eye-slash');
    });

    // Submit button loading state (remove preventDefault if you want real submission)
    document.getElementById('registerForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const btn = document.getElementById('submitBtn');
        const btnText = document.getElementById('submitBtnText');
        const btnIcon = document.getElementById('submitBtnIcon');

        btn.disabled = true;
        btnText.textContent = 'Processing...';
        btnIcon.className = 'spinner-border spinner-border-sm';

        setTimeout(() => {
            btn.disabled = false;
            btnText.textContent = 'Create Account';
            btnIcon.className = 'bi bi-arrow-right';
            alert('Registration simulation complete.');
        }, 1500);
    });
</script>
</body>
</html>