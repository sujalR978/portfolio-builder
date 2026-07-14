<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<!-- Top Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">TechSaaS Core</a>
        <div class="d-none d-md-flex gap-4">
            <a class="nav-link text-secondary" href="#">Product</a>
            <a class="nav-link text-secondary" href="#">Solutions</a>
            <a class="nav-link text-secondary" href="#">Pricing</a>
            <a class="nav-link text-secondary" href="#">Resources</a>
        </div>
        <button class="btn btn-link text-primary text-decoration-none">Sign In</button>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-grow-1 d-flex align-items-center justify-content-center px-3 py-5">
    <div class="w-100" style="max-width: 480px;">

        <div class="card shadow-sm border p-4 p-md-5">

            <!-- Icon & Header -->
            <div class="text-center mb-4">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center text-primary mb-3" style="width:64px;height:64px;">
                    <i class="bi bi-shield-lock fs-3"></i>
                </div>
                <h1 class="h4 fw-bold mb-2">Reset Password</h1>
                <p class="text-secondary mb-0">Enter your email address and we'll send you a link to reset your password.</p>
            </div>

            <!-- Form -->
            <form id="resetForm">
                <div class="mb-3" id="formFields">
                    <label for="email" class="form-label fw-semibold small">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 py-2" id="submitBtn">
                    <span id="submitBtnText">Send Reset Link</span>
                    <i class="bi bi-arrow-right" id="submitBtnIcon"></i>
                </button>
            </form>

            <!-- Success Message (hidden by default) -->
            <div class="d-none alert alert-primary bg-light border d-flex align-items-start gap-3 mt-3" id="successMessage">
                <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                <div>
                    <p class="fw-bold text-primary mb-0 small">Link sent!</p>
                    <p class="text-secondary small mb-0">Check your inbox for instructions to reset your password.</p>
                </div>
            </div>

            <!-- Back to Login -->
            <div class="border-top pt-3 mt-4 text-center">
                <a href="#" class="text-secondary text-decoration-none small d-inline-flex align-items-center gap-1">
                    <i class="bi bi-arrow-left"></i> Back to Login
                </a>
            </div>
        </div>

        <p class="text-center text-secondary small mt-3">Secure account recovery by TechSaaS Core.</p>
    </div>
</main>

<!-- Footer -->
<footer class="bg-white border-top">
    <div class="container py-4 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
        <div class="fw-bold small text-uppercase">TechSaaS Core</div>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            <a href="#" class="text-secondary text-decoration-none small">Privacy Policy</a>
            <a href="#" class="text-secondary text-decoration-none small">Terms of Service</a>
            <a href="#" class="text-secondary text-decoration-none small">Cookie Policy</a>
            <a href="#" class="text-secondary text-decoration-none small">Security</a>
        </div>
        <div class="text-secondary small">© {{ date('Y') }} TechSaaS Core. All rights reserved.</div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('resetForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const btn = document.getElementById('submitBtn');
        const btnText = document.getElementById('submitBtnText');
        const btnIcon = document.getElementById('submitBtnIcon');
        const success = document.getElementById('successMessage');
        const fields = document.getElementById('formFields');

        btn.disabled = true;
        btnText.textContent = 'Sending...';
        btnIcon.className = 'spinner-border spinner-border-sm';

        setTimeout(() => {
            btn.classList.add('d-none');
            fields.classList.add('opacity-50');
            success.classList.remove('d-none');
        }, 1500);
    });

    // Visual feedback on email input validity
    document.getElementById('email').addEventListener('input', function () {
        if (this.checkValidity()) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        } else {
            this.classList.remove('is-valid');
        }
    });
</script>
</body>
</html>