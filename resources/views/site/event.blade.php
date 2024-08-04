@extends('site.layout.main')

@section('website-page-title', 'Event')

@section('website-active-event', 'active')

@section('website-main-section')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Upcoming Events</h2>
                </div>
                <div class="col-12">
                    <a href="#">Home</a>
                    <a href="#">Events</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Event Start -->
    <div class="event">
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
                                <p><i class="fa fa-calendar-alt"></i>01-Aug-24</p>
                                {{-- <p><i class="far fa-clock"></i>8:00 - 10:00</p> --}}
                                <p><i class="fa fa-map-marker-alt"></i>Lucknow</p>
                            </div>
                            <div class="event-text">
                                <h3>Volunteer Drive</h3>
                                <p>
                                    We are collecting volunteer who are eager to join our team and be a part of social society.
                                </p>
                                <a class="btn btn-custom" href="#">Join Now</a>
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
                                {{-- <p><i class="far fa-clock"></i>8:00 - 10:00</p> --}}
                                <p><i class="fa fa-map-marker-alt"></i>Saharanpur</p>
                            </div>
                            <div class="event-text">
                                <h3>Drawing Competition</h3>
                                <p>
                                    A Competition for children to discover their creativity and the way they make their decesions.
                                </p>
                                <a class="btn btn-custom" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->



@endsection
