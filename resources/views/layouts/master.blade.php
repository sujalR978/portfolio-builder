<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 1. Bootstrap CSS (Via CDN for instant loading) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Anti-Flicker Theme Script (Must be in head) -->
    <script>
        const savedTheme = localStorage.getItem('pb-theme') || 'light';
        document.documentElement.setAttribute('data-bs-theme', savedTheme);
    </script>

    <!-- css file -->
    <link rel="stylesheet" href= "{{ asset('css/style.css')}}">
    
    <title>Document</title>
</head>
<body>

    
    @if(session('is_logged_in'))
        @if(session('user_role') === 'admin')
            <!-- ADMIN NAVBAR -->
            @include('admin.admin_header')
        @else
            <!-- USER DASHBOARD NAVBAR -->
            @include('main.user_header')
        @endif
    @else
        <!-- GUEST / PUBLIC NAVBAR -->
        @include('layouts.header')
    @endif


@yield('content')

 
  
    @if(session('is_logged_in'))
        @if(session('user_role') === 'admin')
            <!-- ADMIN footer -->
            @include('admin.admin_footer')
        @else
            <!-- USER footer  -->
            @include('main.user_footer')
        @endif
    @else
        <!-- GUEST / PUBLIC footer -->
        @include('layouts.footer')
    @endif

<!-- Theme Switcher JS -->
    <script>
        function switchTheme(themeName) {
            document.documentElement.setAttribute('data-bs-theme', themeName);
            localStorage.setItem('pb-theme', themeName);
        }
    </script>
    <!-- 3. Bootstrap JS (Via CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>