@extends('site.layout.main')

@section('website-page-title', 'About')

@section('website-active-about','active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll"
                        data-image-src="{{ asset('website/assets/img/about.jpg') }}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Not for profit social organization</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Our organization is dedicated to catalyzing social change by implementing sustainable development projects, fostering community empowerment, and advocating for the marginalized. Through strategic partnerships and innovative solutions, we aim to address pressing social issues, promote equality, and improve the quality of life for individuals and communities in need. Our work spans across various sectors, including education, healthcare, environmental conservation, and livelihood enhancement, with a commitment to creating lasting impact and fostering a brighter future for all.
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                Empower people with digital learning, entrepreneurship, and education to every section of society. All people should have equal chances. Women should be empowered via skill development and mentorship. The digital divide should be closed by providing access to resources. Improve education, develop digital literacy, and build a prosperous, inclusive community where everyone can benefit. Have a constructive influence on people and communities.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                Through entrepreneurship and education, we empower people—women in particular—and promote equality of opportunity. We provide people with the necessary skills for the digital age by sparking creativity and bridging the digital divide. Our goal is to create a wide ripple effect of empowered individuals who uplift their communities, thereby catalyzing societal change. We support women's empowerment because it gives them the tools to overcome obstacles and fosters lifelong learning for ongoing development. Our goal is to leave a lasting legacy of empowerment by empowering people to achieve a better future with the information and skills they need to flourish.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="{{ asset('website/assets/img/facts.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-home"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">2</h3>
                            <p>Locations</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                            <p>Volunteers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">8</h3>
                            <p>Programs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">279</h3>
                            <p>Beneficaries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                {{-- <p>Popular Causes</p> --}}
                <h2>Meet Our Team</h2>
            </div>

            <div class="owl-carousel causes-carousel">
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-1.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Sadaf Zuberi</h3>
                        <p>Founder</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-9.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Dr. Rida Sageer</h3>
                        <p>Chief Operation Officer</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-6.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Subuhi Kashif Ali Khan</h3>
                        <p>Program Head</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-7.png') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Suhail Saeed USmani</h3>
                        <p>Technical Lead</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-5.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Aisha Badruddin</h3>
                        <p>Operation Manager</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-10.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Dr. Anil Kumar Verma</h3>
                        <p>Operation Manager</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-11.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Srijan Srivastava</h3>
                        <p>Legal Advisor</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-4.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Muba Khan</h3>
                        <p>Web Developer & Graphic Designer</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-2.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Asna Shoib</h3>
                        <p>Social Media Consultant</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/team-3.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-text text-center">
                        <h3>Mariyam Fatima</h3>
                        <p>Communication Associate</p>
                    </div>
                    <div class="causes-btn">
                        {{-- <a class="btn btn-custom">Learn More</a> --}}
                        <a class="btn btn-custom"><i class="fab fa-linkedin"></i> Join Now</a>
                    </div>
                </div>
                {{-- <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/causes-2.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> $100000</p>
                            <p><strong>Goal:</strong> $50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Lorem ipsum dolor sit</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non
                            vulputa</p>
                    </div>
                    <div class="causes-btn">
                        <a class="btn btn-custom">Learn More</a>
                        <a class="btn btn-custom">Donate Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/causes-3.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> $100000</p>
                            <p><strong>Goal:</strong> $50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Lorem ipsum dolor sit</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non
                            vulputa</p>
                    </div>
                    <div class="causes-btn">
                        <a class="btn btn-custom">Learn More</a>
                        <a class="btn btn-custom">Donate Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{ asset('website/assets/img/causes-4.jpg') }}" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> $100000</p>
                            <p><strong>Goal:</strong> $50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Lorem ipsum dolor sit</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non
                            vulputa</p>
                    </div>
                    <div class="causes-btn">
                        <a class="btn btn-custom">Learn More</a>
                        <a class="btn btn-custom">Donate Now</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
   <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>A Glimpse at</p>
                <h2>Our Success Stories</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-4.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Muba Khan</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-2.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Asna Shoib</h3>
                            <p>Content Writer</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-3.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Mariyam Fatima</h3>
                            <p>Content Writer</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/team-1.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Sadaf Zuberi</h3>
                            <p>Data Analyst</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


@endsection
