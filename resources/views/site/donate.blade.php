@extends('site.layout.main')

@section('website-page-title', 'Donate')

@section('website-active-donate', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Donate Now</h2>
                </div>
                <div class="col-12">
                    <a href="#">Home</a>
                    <a href="#">Donate</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Donate Start -->
    <div class="container">
        <div class="donate" data-parallax="scroll" data-image-src="{{ asset('website/assets/img/donate.jpg') }}">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p>Donate Now</p>
                            <h2>Empower dreams, donate to sculpt a brighter future.</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                With your donation, you can fuel hopes for a better future. Your contributions have a long-lasting effect that raises hopes and promotes development all around the world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        <form action="{{ route('donate.process') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="amount" placeholder="Enter amount"
                                    required="required" min="1" />
                            </div>
                            <button type="submit" class="btn btn-custom">Donate Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

@endsection
