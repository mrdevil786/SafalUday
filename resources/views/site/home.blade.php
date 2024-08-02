@extends('site.layout.main')

@section('website-page-title', 'Home')

@section('website-active-home', 'active')

@section('website-main-section')

    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('website/assets/img/carousel-1.jpg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Empowering communities, igniting change</h1>
                        <p>
                            Through mentorship and the acquisition of digital skills, education and internet access promote
                            equality, inclusivity, and women's empowerment.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="/donate" id="donation">Donate Now</a>
                            {{-- <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch
                                Video</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('website/assets/img/carousel-2.jpg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Uniting hearts, transforming lives.</h1>
                        <p>
                            Bringing people together, changing lives. encouraging positive change, valuing diversity, and
                            empowering people for a prosperous society.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="/donate" id="donation">Donate Now</a>
                            {{-- <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch
                                Video</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('website/assets/img/carousel-3.jpg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Creating a brighter tomorrow, together.</h1>
                        <p>
                            Collaborate and innovate to empower communities, build resilience, and build a sustainable
                            future.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="/donate" id="donation">Donate Now</a>
                            {{-- <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch
                                Video</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


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


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>Our missions are healthcare and youth empowerment. Come change with us!</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Skill Development</h3>
                            <p>Developing skills entails determining skill gaps and filling them with focused training that
                                promotes flexibility and growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-social-care"></i>
                        </div>
                        <div class="service-text">
                            <h3>Youth Empowerment</h3>
                            <p>Empowerment of youth fosters skill development, self-assurance, and active participation in
                                society.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>Career Guidance</h3>
                            <p>Career counseling assists people in identifying possibilities, establishing objectives, and
                                selecting a vocation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                        <div class="service-text">
                            <h3>Healthcare</h3>
                            <p>The goals of healthcare are to prevent disease, diagnose conditions, treat patients, and
                                facilitate recovery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Education</h3>
                            <p>People are empowered by education, which also develops critical thinking skills and opens
                                doors to success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="service-text">
                            <h3>Environment</h3>
                            <p>The environment gives us the resources, water, and air that we need for our continued
                                existence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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
                                <a class="btn btn-custom" href="{{ $team->profile_link }}"><i
                                        class="fab fa-linkedin"></i>Connect</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Causes End -->

    {{-- Team Start --}}
    {{-- <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Meet Our Team</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-1.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Sadaf Zuberi</h2>
                            <p>Founder</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/sadaf-zuberi-a72310b8/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-6.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Subuhi Kashif Ali Khan</h2>
                            <p>Program Head</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-9.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Rida Sagheer</h2>
                            <p>Chief Operation Officer</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/dr-rida-sagheer-b2775b75/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-7.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Suhail Saeed Usmani</h2>
                            <p>Developer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/suhailsaeedusmani/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-2.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Asna Shoib</h2>
                            <p>Content Writer & Social Media Manager</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/asna-shoib-6688a1248/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-3.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Mariyam Fatima</h2>
                            <p>Content Writer</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/mariyam-fatima-482826260/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-4.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Muba Khan</h2>
                            <p>Web Developer & Graphic Designer</p>
                            <div class="team-social">
                                <a href="https://www.linkedin.com/in/muba-khan-55330a261/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-10.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Muba Khan</h2>
                            <p>Graphic Designer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-11.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Muba Khan</h2>
                            <p>Graphic Designer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/team-5.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Aisha Badruddin</h2>
                            <p>Operation Officer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Team End --}}


    <!-- Donate Start -->
    <div class="donate" data-parallax="scroll" data-image-src="{{ asset('website/assets/img/donate.jpg') }}">
        <div class="container" id="donation">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p>Donate Now</p>
                            <h2>Empower dreams, donate to sculpt a brighter future.</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                With your donation, you can fuel hopes for a better future. Your contributions have a
                                long-lasting effect that raises hopes and promotes development all around the world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        <form>
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" />
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-custom active">
                                    <input type="radio" name="options" checked> ₹10
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> ₹20
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> ₹30
                                </label>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->



    {{-- Event Start --}}
    {{-- <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Upcoming Events</p>
                <h2>Be ready for our upcoming charity events</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="{{ asset('website/assets/img/event-1.jpg') }}" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>01-Jan-45</p>
                                <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                <p><i class="fa fa-map-marker-alt"></i>New York</p>
                            </div>
                            <div class="event-text">
                                <h3>Lorem ipsum dolor sit</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non
                                    vulpte liqum metus tortor
                                </p>
                                <a class="btn btn-custom" href="">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="{{ asset('website/assets/img/event-2.jpg') }}" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>01-Jan-45</p>
                                <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                <p><i class="fa fa-map-marker-alt"></i>New York</p>
                            </div>
                            <div class="event-text">
                                <h3>Lorem ipsum dolor sit</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non
                                    vulpte liqum metus tortor
                                </p>
                                <a class="btn btn-custom" href="">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Event End --}}

    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                {{-- <p>Popular Causes</p> --}}
                <h2>Our Global Advisor</h2>
            </div>

            <div class="owl-carousel causes-carousel">
                @foreach ($teams as $team)
                    @if ($team->section == 2)
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{ asset($team->image) }}" alt="Image">
                            </div>
                            <div class="causes-text text-center">
                                <h3>{{ $team->name }}</h3>
                                <p>{{ $team->designation }}</p>
                            </div>
                            <div class="causes-btn">
                                <a class="btn btn-custom" href="{{ $team->profile_link }}"><i
                                        class="fab fa-linkedin"></i> Connect</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>


    {{-- Advisor Commitee starts --}}
    {{-- <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Advisor Commitee Board</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-1.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Prof. Gauhar Mehmood</h2>
                            <p>Civil Eng. Dept., Jamia Milia Islamia, S. Delhi</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-2.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Udayan Salim Banerjee</h2>
                            <p>Training Consultant, Noida, Uttar Pradesh, India.</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-3.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Dr. Ajax Kunju Mohamed</h2>
                            <p>SVP & MD, Nutragroup, Frankfurt, Germany</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-4.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Mohammad Saud Afzal</h2>
                            <p>Associate professor, IIT, West Bengal</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-11.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Dr. Sana Iqbal</h2>
                            <p>MBBS, DGO, Gynae, Medison Hospital, Lucknow</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-6.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Dr. Mohd Shuaib Siddiqui</h2>
                            <p>Asst. Prof., Business Mgmt, Univ. of Tabuk, Saudi Arabia</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-7.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Dr.Mohd Imran Khan</h2>
                            <p>BSc, BDS, MDS, 485/284 Jailors Compound, Daliganj, Lucknow, India</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-8.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Dr. Mohammad Hassan Baig</h2>
                            <p>CTO BNJ Biopharma, Seoul, South Korea</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-9.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Prashant Kumar Mishra</h2>
                            <p>STC, Kuwait</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-12.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Dr. Abdul Mabood</h2>
                            <p>Managing Director, Prime Care Hospital, Lucknow </p>
                            <div class="team-social">
                                <a
                                    href="https://www.linkedin.com/in/dr-abdul-mabood-68351b8b/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/mabood295?utm_source=qr&igsh=MWthOHA4eDBqeWM5eQ%3D%3D"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-13.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Muba Khan</h2>
                            <p>Web Developer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-14.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Muba Khan</h2>
                            <p>Web Developer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('website/assets/img/advisor-10.jpg') }}" alt="Advisor Committee Image">
                        </div>
                        <div class="team-text">
                            <h2>Dr. Kaneez Fatima</h2>
                            <p>Research Associate, Biotech, UPenn, USA</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Advisor Commitee ends --}}


    <!-- Volunteer Start -->
    <div class="volunteer" data-parallax="scroll" data-image-src="{{ asset('website/assets/img/volunteer.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="volunteer-form">
                        <form>
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" />
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Become a volunteer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="volunteer-content">
                        <div class="section-header">
                            <p>Become A Volunteer</p>
                            <h2>Sprout hope, join us as a volunteer and bloom with purpose!</h2>
                        </div>
                        <div class="volunteer-text">
                            <p>
                                Join our team as a volunteer and be part of something truly special. Your time and
                                dedication can make a real difference in the lives of others. Whether you're passionate
                                about helping the community, spreading kindness, or making a positive impact, volunteering
                                with us is a rewarding experience. Together, we can create meaningful change and work
                                towards a brighter future. Take the first step today and become our volunteer to contribute
                                your unique skills and make a lasting difference in the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer End -->


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


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact for any query</h2>
            </div>
            <div class="contact-img">
                <img src="{{ asset('website/assets/img/contact.jpg') }}" alt="Image">
            </div>
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name"
                            required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Blog Start -->
    {{-- <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Blog</p>
                <h2>Latest news & articles directly from our blog</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/blog-1.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Empowering Women: Building Opportunities for a Better Future</a></h3>
                            <p>
                                The advancement of society depends on women's empowerment. It entails giving them the tools
                                and chances they need to succeed, improving their general quality of life, and advancing
                                gender equality.
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/blog-2.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Youth Development: Giving the Next Generation More Power</a></h3>
                            <p>
                                The secret to a prosperous future is to uplift the youth. It is essential to arm them with
                                information and abilities. Effective approaches to education and community involvement are
                                examined in this article..
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/blog-3.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Little Actions, Big Results: Encouraging a Healthier Earth</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->

@endsection
