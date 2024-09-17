{{-- Footer Start --}}
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Our Head Office</h2>
                    <p>
                        <i class="fa fa-map-marker-alt"></i>
                        <a href="https://www.google.com/maps/place/Nadeem+calony/@29.9776196,77.525098,17z/data=!3m1!4b1!4m6!3m5!1s0x390eeb51aadcbd75:0x3a6462da09b27268!8m2!3d29.977615!4d77.5276729!16s%2Fg%2F11t5rx21nd?entry=ttu"
                            target="_blank" class="text-white">
                            11/2244, Lakhi Gate-1, Saharanpur, UP (247001)
                        </a>
                    </p>
                    <p><i class="fa fa-phone-alt"></i>
                        <a href="tel:+9197611-33546" class="text-white">+91 97611-33546</a>
                    </p>
                    <p><i class="fa fa-phone-alt"></i>
                        <a href="tel:+9197611-33546" class="text-white">+91 97211-28601</a>
                    </p>
                    <p><i class="fa fa-envelope"></i>
                        <a href="mailto:info@safaluday.org" class="text-white">info@safaluday.org</a>
                    </p>
                    <div class="footer-social">
                        <a class="btn btn-custom" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-custom" href="https://www.facebook.com/profile.php?id=6156056633717"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-custom" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-custom" href="https://www.linkedin.com/company/safaluday-ngo/mycompany/"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-custom" href="https://www.instagram.com/safaluday_ngo/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="/about">About Us</a>
                    <a href="/contact">Contact Us</a>
                    <a href="/program">Popular Causes</a>
                    <a href="/donate">Donate</a>
                    <a href="/job">Careers</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Useful Links</h2>
                    <a href="{{ route('site.terms-of-service') }}">Terms & Conditions</a>
                    <a href="{{ route('site.privacy-policy') }}">Privacy policy</a>
                    <a href="{{ route('site.refund-policy') }}">Refund Policy</a>
                    <a href="#">Help</a>
                    <a href="#">FQAs</a>
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
{{-- Footer End --}}

{{-- Back to top button --}}
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

{{-- Pre Loader --}}
<div id="loader" class="show">
    <div class="loader"></div>
</div>

{{-- JavaScript Libraries --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('website/assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('website/assets/lib/parallax/parallax.min.js') }}"></script>

{{-- Template Javascript --}}
<script src="{{ asset('website/assets/js/main.js') }}"></script>

{{-- Schema Markup --}}
<script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Safaluday Educational And Social Welfare Society",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('favicon.png') }}",
        "sameAs": [
        "https://www.facebook.com/safaluday",
        "https://www.twitter.com/safaluday",
        "https://www.instagram.com/safaluday"
        ],
        "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-800-555-5555",
        "contactType": "Customer Service"
          }
        }
</script>

</body>

</html>
