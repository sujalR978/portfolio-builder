<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100 p-3">

<main class="w-100" style="max-width: 448px;">
    <div class="card shadow-sm border p-4">

        <!-- Branding & Header -->
        <div class="d-flex flex-column align-items-center text-center mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
                <div class="bg-primary rounded d-flex align-items-center justify-content-center text-white" style="width:40px;height:40px;">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <span class="fw-bold fs-5 text-primary">TechSaaS Core</span>
            </div>
            <h1 class="h4 fw-bold mb-1">Welcome Back</h1>
            <p class="text-secondary mb-0">Sign in to access your dashboard and workspace.</p>
        </div>

        <!-- Login Form -->
        <form action="#" method="POST">
            @csrf
            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold small">Email Address</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@company.com" required>
                    <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
                </div>
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold small">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Remember & Forgot -->
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label small text-secondary" for="remember">Remember me</label>
                </div>
                <a href="#" class="small text-decoration-none">Forgot Password?</a>
            </div>

            <!-- Primary Action -->
            <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 py-2">
                Sign In <i class="bi bi-arrow-right"></i>
            </button>
        </form>

        <!-- Divider -->
        <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="px-3 text-secondary small">Or continue with</span>
            <hr class="flex-grow-1">
        </div>

        <!-- Social Login -->
        <div class="row g-2">
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

        <!-- Account Toggle Footer -->
        <div class="text-center mt-4">
            <p class="text-secondary small mb-0">
                Don't have an account?
                <a href="#" class="fw-bold text-decoration-none">Sign Up</a>
            </p>
        </div>

        <!-- Subtle Footer Links -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
            <a href="#" class="text-secondary small text-decoration-none">Privacy Policy</a>
            <a href="#" class="text-secondary small text-decoration-none">Terms of Service</a>
            <a href="#" class="text-secondary small text-decoration-none">Help Center</a>
        </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const input = document.getElementById('password');
        const icon = this.querySelector('i');
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        icon.classList.toggle('bi-eye');
        icon.classList.toggle('bi-eye-slash');
    });
</script>
</body>
</html>