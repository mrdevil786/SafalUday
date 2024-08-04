<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} - @yield('website-page-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Safaluday NGO, Non-Profit Organization, Community Development, Social Services, Education for All, Healthcare Initiatives, Environmental Conservation, Volunteer Opportunities, Empowering Women, Child Welfare Programs, Rural Development, Charity Organization, Support for Underprivileged, Health Camps, Educational Workshops">
    <meta name="description"
        content="Safaluday NGO is committed to enhancing community development through comprehensive education, healthcare services, and environmental conservation. Our initiatives empower women, support child welfare programs, and drive rural development. Join us as a volunteer or donate to make a significant impact today!">
    <meta name="author" content="Safaluday NGO">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ env('APP_NAME') }} - @yield('website-page-title')">
    <meta property="og:description"
        content="Safaluday NGO is committed to enhancing community development through comprehensive education, healthcare services, and environmental conservation. Our initiatives empower women, support child welfare programs, and drive rural development. Join us as a volunteer or donate to make a significant impact today!">
    <meta property="og:image" content="{{ asset('website/assets/img/about.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ env('APP_NAME') }} - @yield('website-page-title')">
    <meta name="twitter:description"
        content="Safaluday NGO is committed to enhancing community development through comprehensive education, healthcare services, and environmental conservation. Our initiatives empower women, support child welfare programs, and drive rural development. Join us as a volunteer or donate to make a significant impact today!">
    <meta name="twitter:image" content="{{ asset('website/assets/img/about.jpg') }}">

    <!-- Favicon -->
    <link href="{{ asset('favicon.png') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('website/assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('website/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>
                                <a href="tel:+9197611-33546" class="text-white">+91 97611-33546</a> |
                                <a href="tel:+9197211-28601" class="text-white">+91 97211-28601</a>
                            </p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p><a href="mailto:info@safaluday.org" class="text-white">info@safaluday.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61560566337175"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/safaluday-ngo/mycompany/"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/safaluday_ngo/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand"><img src="{{ asset('website/assets/logo/Figmalogosvg.svg') }}"
                alt="Safaluday Logo"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link @yield('website-active-home')">Home</a>
                    <a href="/about" class="nav-item nav-link @yield('website-active-about')">About</a>
                    <a href="/program" class="nav-item nav-link @yield('website-active-program')">Programs</a>
                    {{-- <a href="/event" class="nav-item nav-link @yield('website-active-event')">Events</a> --}}
                    <a href="/donate" class="nav-item nav-link @yield('website-active-donate')">Donate</a>
                    <a href="/partner" class="nav-item nav-link @yield('website-active-partner')">Helpers</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Partners</a>
                        <div class="dropdown-menu">
                            <a href="/organization" class="dropdown-item">Organizations</a>
                            <a href="/ngo" class="dropdown-item">NGOs</a>
                            <a href="/service" class="dropdown-item">What We Do</a>
                            <a href="/team" class="dropdown-item">Meet The Team</a>
                            <a href="/volunteer" class="dropdown-item">Volunteers</a>
                        </div>
                    </div> --}}
                    <a href="/contact" class="nav-item nav-link @yield('website-active-contact')">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
