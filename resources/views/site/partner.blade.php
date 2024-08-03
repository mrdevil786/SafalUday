@extends('site.layout.main')

@section('website-page-title', 'Helpers')

@section('website-active-partner', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Helpers</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Helpers</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- Advisor Commitee starts --}}
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Volunteers</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-13.png') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Suhail Saeed Usmani</h2>
                            <p>Noida, UP, India</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/suhailsaeedusmani/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-4.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Muba Khan</h2>
                            <p>Lucknow, UP, India.</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/muba-khan-55330a261/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-2.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Asna Shoib</h2>
                            <p>Lucknow, UP, India</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/asna-shoib-6688a1248/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-3.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Mariyam Fatima</h2>
                            <p>Lucknow, UP, India</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/mariyam-fatima-482826260/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Advisor Commitee ends --}}

    <!-- Collaborators Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>Meet Our</p>
                <h2>Our Collaborators</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-4.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Virina Foundation</h3>
                            <p>Lucknow</p>
                        </div>
                    </div>
                    {{-- <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div> --}}
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-2.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Prime Care Hospital</h3>
                            <p>Lucknow</p>
                        </div>
                    </div>
                    {{-- <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div> --}}
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-3.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Medison Hospital </h3>
                            <p>Lucknow</p>
                        </div>
                    </div>
                    {{-- <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div> --}}
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-1.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Modern Science Classes</h3>
                            <p>Lucknow</p>
                        </div>
                    </div>
                    {{-- <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Collaborators End -->




@endsection
