<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your web development journey with Code Coach.">
    <meta name="keywords" content="html tutorial, learn html, web development, coding, programming">
    <meta name="author" content="Code Coach">
    
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <title>@yield('title', 'Code Coach - Learn to Code')</title>

    <!-- Bootstrap & Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Additional CSS -->
    @stack('styles')
</head>

<body>

    <div class="hero_area">
        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="{{ asset('images/hero-bg.png') }}" alt="Coding background">
            </div>
        </div>

        @include('partials.header')

        <main>
            @yield('content')
        </main>
    </div>

    @include('partials.footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')
</body>
</html>
