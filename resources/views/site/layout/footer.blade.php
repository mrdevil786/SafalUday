<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Our Head Office</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Nadeem Colony near Bhairav Mandir Road,
                        Saharanpur, UP (110027)</p>
                    <p><i class="fa fa-phone-alt"></i>+91 97611-33546</p>
                    <p><i class="fa fa-envelope"></i>info@safaluday.org</p>
                    <div class="footer-social">
                        <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-custom" href="https://www.facebook.com/profile.php?id=6156056633717"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-custom" href="https://www.linkedin.com/company/safaluday-ngo/mycompany/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-custom" href="https://www.instagram.com/safaluday_ngo/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                    <a href="">Popular Causes</a>
                    <a href="">Upcoming Events</a>
                    <a href="">Latest Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Useful Links</h2>
                    <a href="{{route('site.terms-of-service')}}">Terms of use</a>
                    <a href="{{route('site.privacy-policy')}}">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <input class="form-control" placeholder="Email goes here" name="email" type="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button class="btn btn-custom" type="submit">Submit</button>
                        <label>Don't worry, we don't spam!</label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#">{{ env('APP_NAME') }}</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Developed By <a href="#">{{ env('DEVLOPED_BY') }}</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('website/assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/parallax/parallax.min.js') }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('website/assets/mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('website/assets/mail/contact.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('website/assets/js/main.js') }}"></script>
</body>

</html>
