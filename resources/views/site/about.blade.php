@extends('site.layout.main')

@section('website-page-title', 'About')

@section('website-active-about', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
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
                        data-image-src="{{ asset('website/assets/img/about.webp') }}"></div>
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
                                Our organization is dedicated to catalyzing social change by implementing sustainable
                                development projects, fostering community empowerment, and advocating for the marginalized.
                                Through strategic partnerships and innovative solutions, we aim to address pressing social
                                issues, promote equality, and improve the quality of life for individuals and communities in
                                need. Our work spans across various sectors, including education, healthcare, environmental
                                conservation, and livelihood enhancement, with a commitment to creating lasting impact and
                                fostering a brighter future for all.
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                Empower people with digital learning, entrepreneurship, and education to every section of
                                society. All people should have equal chances. Women should be empowered via skill
                                development and mentorship. The digital divide should be closed by providing access to
                                resources. Improve education, develop digital literacy, and build a prosperous, inclusive
                                community where everyone can benefit. Have a constructive influence on people and
                                communities.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                Through entrepreneurship and education, we empower people—women in particular—and promote
                                equality of opportunity. We provide people with the necessary skills for the digital age by
                                sparking creativity and bridging the digital divide. Our goal is to create a wide ripple
                                effect of empowered individuals who uplift their communities, thereby catalyzing societal
                                change. We support women's empowerment because it gives them the tools to overcome obstacles
                                and fosters lifelong learning for ongoing development. Our goal is to leave a lasting legacy
                                of empowerment by empowering people to achieve a better future with the information and
                                skills they need to flourish.
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
                            <h3 class="facts-plus" data-toggle="counter-up">900</h3>
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
                <h2>Meet Our Team</h2>
            </div>

            <div class="owl-carousel causes-carousel">
                @foreach ($teams as $team)
                    @if ($team->section == 1)
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{ asset($team->image) }}" alt="Image">
                            </div>
                            <div class="causes-text text-center">
                                <h3>{{ $team->name }}</h3>
                                <p>{{ $team->designation }}</p>
                            </div>
                            <div class="causes-btn">
                                <a class="btn btn-custom" href="{{ $team->profile_link }}"><i class="fab fa-linkedin"></i>
                                    Connect</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Testimonial Start -->
    {{-- <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>A Glimpse at</p>
                <h2>Our Success Stories</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="https://i.pravatar.cc/150?img=1" alt="Image">
                        <div class="testimonial-name">
                            <h3>Nisha Singh</h3>
                            <p>IT Enginner</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Safal Uday helped me gain the skills I needed to transition into web development. Their training
                            programs were comprehensive and the mentorship was invaluable. Today, I work as a Web Developer
                            and
                            owe my success to the opportunities provided by Safal Uday.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="https://i.pravatar.cc/150?img=2" alt="Image">
                        <div class="testimonial-name">
                            <h3>Agastya Verma</h3>
                            <p>Content Writer</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            As a Content Writer, Safal Uday's support was pivotal in my career development. The workshops
                            and
                            resources they provided helped me refine my skills and gain confidence in my work. I am now
                            thriving in my field thanks to their guidance.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Image">
                        <div class="testimonial-name">
                            <h3>Anand Rao</h3>
                            <p>Content Writer</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Joining Safal Uday was a turning point in my career. Their focus on practical skills and
                            real-world applications made all the difference. I am grateful for their continuous support and
                            dedication to helping individuals like me succeed.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="https://i.pravatar.cc/150?img=4" alt="Image">
                        <div class="testimonial-name">
                            <h3>Arif Khan</h3>
                            <p>Data Analyst</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Safal Uday's programs equipped me with the analytical skills needed to excel as a Data Analyst.
                            Their personalized approach and focus on real-world applications gave me the confidence and
                            competence to thrive in my career. I highly recommend their programs to anyone looking to
                            advance their skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


@endsection
