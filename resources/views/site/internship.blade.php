@extends('site.layout.main')

@section('website-page-title', 'Internship')

@section('website-active-internship', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Internships</h2>
                </div>
                <div class="col-12">
                    <a href="#">Home</a>
                    <a href="#">Internship</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>How You Can Be an</p>
                <h2>Intern to Safal Uday Educational And Social Welfare Society!</h2>
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
                <img src="{{ asset('website/assets/img/internship.webp') }}" alt="Image">
            </div>
            <div class="contact-form">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form name="sentMessage" novalidate="novalidate" method="POST" action="{{ route('internship.store') }}"
                    enctype="multipart/form-data">
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
                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Your Number"
                            required="required" data-validation-required-message="Please enter your number"
                            value="{{ old('mobile') }}" />
                        <p class="help-block text-danger">
                            @error('mobile')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Your Address"
                            required="required" data-validation-required-message="Please enter your address"
                            value="{{ old('address') }}" />
                        <p class="help-block text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="control-group">
                        <input type="file" class="form-control" id="resume" name="resume" placeholder="Your Resume"
                            required="required" data-validation-required-message="Please enter your address"
                            value="{{ old('resume') }}" style="height: 100%;" />
                        <p class="help-block text-danger">
                            @error('resume')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>

                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Join Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
