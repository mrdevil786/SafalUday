<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} - @yield('website-page-title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="Safaluday NGO, Non-Profit Organization, Community Development, Social Services, Education for All, Healthcare Initiatives, Environmental Conservation, Volunteer Opportunities, Empowering Women, Child Welfare Programs, Rural Development, Charity Organization, Support for Underprivileged, Health Camps, Educational Workshops"
        name="keywords">
    <meta
        content="Safaluday NGO is dedicated to community development through education, healthcare, and environmental conservation. Join us in empowering women, supporting child welfare programs, and driving rural development. Volunteer or donate to make a difference today!"
        name="description">

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
                            <a href=""><i class="fab fa-twitter"></i></a>
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
            <a href="/" class="navbar-brand"><img src="{{asset('website/assets/logo/Figmalogosvg.svg')}}" alt=""></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link @yield('website-active-home')">Home</a>
                    <a href="/about" class="nav-item nav-link @yield('website-active-about')">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">What We Do</a>
                        <div class="dropdown-menu">
                            <a href="/organization" class="dropdown-item">Skill Development</a>
                            <a href="/ngo" class="dropdown-item">Carrer Development</a>
                            <a href="/service" class="dropdown-item">Primary Education</a>
                            <a href="/team" class="dropdown-item">Safal 30</a>
                            <a href="/volunteer" class="dropdown-item">Women Empowerment</a>
                            <a href="/volunteer" class="dropdown-item">Mentor / Mentee</a>
                            <a href="/volunteer" class="dropdown-item">Protect Environment</a>
                            <a href="/volunteer" class="dropdown-item">Uplift Community</a>
                            <a href="/volunteer" class="dropdown-item">Connecticum Series</a>
                            <a href="/volunteer" class="dropdown-item">Events</a>
                        </div>
                    </div>
                    {{-- <a href="/program" class="nav-item nav-link @yield('website-active-program')">Programs</a> --}}
                    {{-- <a href="/event" class="nav-item nav-link @yield('website-active-event')">Events</a> --}}
                    <a href="/donate" class="nav-item nav-link @yield('website-active-donate')">Donate</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Get Involved</a>
                        <div class="dropdown-menu">
                            <a href="/organization" class="dropdown-item">Contribute</a>
                            <a href="/ngo" class="dropdown-item">Volunteers</a>
                            <a href="/service" class="dropdown-item">Collaborators</a> 
                        </div>
                    </div>
                    {{-- <a href="/partner" class="nav-item nav-link @yield('website-active-partner')">Get Involved</a> --}}
                    <a href="/contact" class="nav-item nav-link @yield('website-active-contact')">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
