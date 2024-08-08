@extends('site.layout.main')

@section('website-page-title', 'Program')

@section('website-active-program', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Programs</h2>
                </div>
                <div class="col-12">
                    <a href="#">Home</a>
                    <a href="#">Programs</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <!--<p>Our Programs</p> -->
                <h2>Our Programs</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-1.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Skill Development</a></h3>
                            {{-- <p>
                                The advancement of society depends on women's empowerment. It entails giving them the tools
                                and chances they need to succeed, improving their general quality of life, and advancing
                                gender equality.
                            </p> --}}
                            <ol>
                                <li>Enhancing abilities and competencies.</li>
                                <li>Involves assessment, training, practice, and feedback.</li>
                                <li>Accessible to students, professionals, job seekers, entrepreneurs, and lifelong
                                    learners.</li>
                                <li>Achieve personal and professional growth.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-2.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Carrer Development</a></h3>
                            {{-- <p>
                                The secret to a prosperous future is to uplift the youth. It is essential to arm them with
                                information and abilities. Effective approaches to education and community involvement are
                                examined in this article..
                            </p> --}}
                            <ol>
                                <li>Enhancing skills, knowledge, and experiences for career growth.</li>
                                <li>Involves self-assessment, goal setting, training, and networking.</li>
                                <li>Accessible to individuals at any career stage, including students, professionals, and
                                    job
                                    seekers.</li>
                                <li>Achieve career advancement and fulfillment.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-3.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Primary Education</a></h3>
                            {{-- <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p> --}}
                            <ol>
                                <li>Foundational education typically for children aged 5-11.</li>
                                <li>Covers basic subjects like reading, writing, math, and social studies.</li>
                                <li>Children in the early stages of their educational journey.</li>
                                <li>Develop fundamental skills and knowledge for future learning.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-4.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Safal 30</a></h3>
                            {{-- <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p> --}}
                            <ol>
                                <li>Coaching boosts girls' confidence and exam performance.</li>
                                <li>One-on-one coaching offers personalized guidance.</li>
                                <li>Specialized tutors help girls excel in math, science, or languages.</li>
                                <li>Female coaches motivate girls to pursue their goals.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-5.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Women Empowerment</a></h3>
                            {{-- <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p> --}}
                            <ol>
                                <li>Enhancing women's social, economic, and political power.</li>
                                <li>Through education, legal rights, economic opportunities, and social support.</li>
                                <li>Society, governments, organizations, and individuals.</li>
                                <li>Achieve gender equality and enable women to make independent choices and participate
                                    fully
                                    in all aspects of life.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-6.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Mentor / Mentee</a></h3>
                            {{-- <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p> --}}
                            <ol>
                                <li>A supportive and developmental partnership.</li>
                                <li>Mentor provides guidance, advice, and knowledge to the mentee.</li>
                                <li>Experienced individuals (mentors) and those seeking growth (mentees).</li>
                                <li>Foster personal and professional development for the mentee.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-7.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Protect Environment</a></h3>
                            {{-- <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p> --}}
                            <ol>
                                <li>Actions to preserve and sustain the natural world.</li>
                                <li>Involves reducing pollution, conserving resources, and promoting sustainability.</li>
                                <li>Individuals, communities, governments, and organizations.</li>
                                <li>Ensure a healthy planet for current and future generations.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-8.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Uplift Community</a></h3>
                            {{-- <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p> --}}
                            <ol>
                                <li>Improving the well-being and quality of life for community members.</li>
                                <li>Through education, economic development, social services, and community engagement.</li>
                                <li>Individuals, organizations, local governments, and community groups.</li>
                                <li>Create a supportive and thriving environment for all community members.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item program">
                        {{-- <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-9.jpg') }}" alt="Image">
                        </div> --}}
                        <div class="blog-text">
                            <h3><a href="#">Connecticum Series</a></h3>
                            {{-- <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p> --}}
                            <ol>
                                <li>An initiative under SAFAL UDAY aimed at personal and professional growth.</li>
                                <li>Features events, workshops, and discussions led by experts and successful individuals.
                                </li>
                                <li>Open to anyone seeking motivation, skills development, and networking opportunities.
                                </li>
                                <li>To inspire and equip participants with the knowledge and tools for success.</li>
                            </ol>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <!-- <p>Our Programs</p> -->
                <h2>Our Events</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-1.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Drawing Competition</a></h3>
                            <p>
                                The advancement of society depends on women's empowerment. It entails giving them the tools
                                and chances they need to succeed, improving their general quality of life, and advancing
                                gender equality.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-2.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Health Camp</a></h3>
                            <p>
                                The secret to a prosperous future is to uplift the youth. It is essential to arm them with
                                information and abilities. Effective approaches to education and community involvement are
                                examined in this article..
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-3.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Workshop for Girls</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-4.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Cleanliness Drive</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-5.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Health & Hygiene Sessions</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-6.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Food Distribution</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-7.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Connecticum Classes</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-8.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Domestic Violence</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('website/assets/img/program-9.jpg') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Blood Donation Drive</a></h3>
                            <p>

                                Individual efforts, like using reusable bags and conserving water, might seem minor, but
                                they accumulate into substantial environmental benefits. Every eco-friendly choice
                                contributes to a healthier Earth.
                            </p>
                        </div>
                        {{-- <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->



@endsection
