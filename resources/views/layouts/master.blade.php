@php
    use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Anti-Flicker Theme Script -->
    <script>
        const savedTheme = localStorage.getItem('pb-theme') || 'light';
        document.documentElement.setAttribute('data-bs-theme', savedTheme);
    </script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>@yield('title', 'Portfolio Builder')</title>
</head>

<body>

    {{-- ==========================================
         HEADER
    ========================================== --}}

    @if(session('is_admin'))

        {{-- ADMIN HEADER --}}
        @include('admin.admin_header')

    @elseif(Auth::check())

        {{-- LOGGED-IN USER HEADER --}}
        @include('main.user_header')

    @else

        {{-- PUBLIC / GUEST HEADER --}}
        @include('layouts.header')

    @endif


    {{-- ==========================================
         PAGE CONTENT
    ========================================== --}}

    @yield('content')


    {{-- ==========================================
         FOOTER
    ========================================== --}}

    @if(session('is_admin'))

        {{-- ADMIN FOOTER --}}
        @include('admin.admin_footer')

    @elseif(Auth::check())

        {{-- LOGGED-IN USER FOOTER --}}
        @include('main.user_footer')

    @else

        {{-- PUBLIC / GUEST FOOTER --}}
        @include('layouts.footer')

    @endif


    {{-- ==========================================
         THEME SWITCHER
    ========================================== --}}

    <script>
        function switchTheme(themeName) {
            document.documentElement.setAttribute('data-bs-theme', themeName);
            localStorage.setItem('pb-theme', themeName);
        }
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>