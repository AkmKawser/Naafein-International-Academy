<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'NAAFEIN INTERNATIONAL ACADEMY')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS libs -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link href="{{ asset('assets/theme-4/css/style.css') }}" rel="stylesheet">

    <!-- Brand Color Variables -->
    <style>
        :root {
            --primary-color: #6a6c01;
            --secondary-color: #0c5fc6;
            --accent-color: #dc3545;
            --gold-color: #ffc107;
            --light-gray: #f8f9fa;
            --dark-navy: #717409;
            --deep-blue: #6a6c01;
            --surface: #f8fafc;
            --font-family: 'Outfit', sans-serif;
        }
        body {
            font-family: var(--font-family);
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Mobile Header -->
    @include('partials.header-mobile')

    <!-- Desktop Top Bar -->
    @include('partials.topbar')

    <!-- Desktop Logo Header -->
    @include('partials.header-desktop')

    <!-- Navigation Section -->
    @include('partials.navbar')

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Authentication & Install Modals -->
    @include('partials.modals.student-login')
    @include('partials.modals.teacher-login')
    @include('partials.modals.apk-install')

    <!-- Core Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        AOS.init({ duration: 800, once: true });
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
    </script>
    @stack('scripts')
</body>
</html>
