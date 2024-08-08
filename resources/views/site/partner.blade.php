@extends('site.layout.main')

@section('website-page-title', 'Partners')

@section('website-active-partner', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Become a Volunteer</h2>
                </div>
                <div class="col-12">
                    <a href="#">Home</a>
                    <a href="#">Volunteer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Become a </p>
                <h2>Volunteer</h2>
            </div>
            <div class="contact-img">
                <img src="{{ asset('website/assets/img/become_volunteer.webp') }}" alt="Image">
            </div>
            <div class="contact-form">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form name="sentMessage" novalidate="novalidate" method="POST" action="{{ route('send.message') }}">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                            required="required" data-validation-required-message="Please enter your name"
                            value="{{ old('name') }}" />
                        <p class="help-block text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email"
                            value="{{ old('email') }}" />
                        <p class="help-block text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject"
                            value="{{ old('subject') }}" />
                        <p class="help-block text-danger">
                            @error('subject')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" name="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message">{{ old('message') }}</textarea>
                        <p class="help-block text-danger">
                            @error('message')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Collaborators Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                {{-- <p>Meet Our</p> --}}
                <h2>Our Collaborators</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/collab-2.jpg') }}" alt="Image">
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
                        <img src="{{ asset('website/assets/img/collab-3.jpg') }}" alt="Image">
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
                        <img src="{{ asset('website/assets/img/collab-1.jpg') }}" alt="Image">
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
                        <img src="{{ asset('website/assets/img/collab-5.png') }}" alt="Image">
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

                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="{{ asset('website/assets/img/collab-4.jpg') }}" alt="Image">
                        <div class="testimonial-name">
                            <h3>Vidya Additives Science Academy</h3>
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
