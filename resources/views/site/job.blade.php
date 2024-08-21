@extends('site.layout.main')

@section('website-page-title', 'Job')

@section('website-active-job', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Jobs</h2>
                </div>
                <div class="col-12">
                    <a href="#">Home</a>
                    <a href="#">Jobs</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>How You Can do</p>
                <h2>Job at Safal Uday Educational And Social Welfare Society!</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            {{-- <i class="flaticon-education"></i> --}}
                        </div>
                        <div class="service-text">
                            <h3>Volunteer</h3>
                            <p>Offer your time to support various initiatives and events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            {{-- <i class="flaticon-social-care"></i> --}}
                        </div>
                        <div class="service-text">
                            <h3>Donate</h3>
                            <p>Provide financial assistance to help fund projects and operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            {{-- <i class="flaticon-home"></i> --}}
                        </div>
                        <div class="service-text">
                            <h3>Partner</h3>
                            <p>Collaborate with us to enhance our programs and reach.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            {{-- <div class="section-header text-center">
                <p>Become a </p>
                <h2>Volunteer</h2>
            </div> --}}
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


@endsection
