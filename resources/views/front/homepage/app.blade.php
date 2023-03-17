<!doctype html>
<html lang="zxx">
<head>
    @include('front.homepage.layouts.partials.meta')

    <title>Hospital</title>

</head>
<body>
<!-- Pre Loader -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner"></div>
        </div>
    </div>
</div>
<!-- End Pre Loader -->

<!-- Top Header Start -->
@include('front.homepage.layouts.partials.header')
<!-- Top Header End -->

<!-- Start Navbar Area -->
@include('front.homepage.layouts.partials.navbar')
<!-- End Navbar Area -->

<!-- Banner Area -->
@include('front.homepage.layouts.partials.banner')
<!-- Banner Area End -->

<!-- Banner Bottom -->
@include('front.homepage.layouts.partials.banner-bottom')
<!-- Banner Bottom End -->

<!-- About Area -->
@include('front.homepage.layouts.partials.about-area')
<!-- About Area End -->

<!-- Appointment Area -->
@include('front.homepage.layouts.partials.appointment')
<!-- Appointment Area End -->

<!-- Service Area -->
@include('front.homepage.layouts.partials.service-area')
<!-- Service Area End -->

<!-- Consultancy Area -->
@include('front.homepage.layouts.partials.consultancy-area')
<!-- Consultancy Area End -->

<!-- Doctors Area -->
@include('front.homepage.layouts.partials.doctors-area')
<!-- Doctors Area End -->

<!-- Emergency Area -->
@include('front.homepage.layouts.partials.emergency-area ')
<!-- Emergency Area End -->

<!-- Blog Area -->
@include('front.homepage.layouts.partials.blog-area ')
<!-- Blog Area End -->

<!-- Testimonials Area -->
@include('front.homepage.layouts.partials.testimonials-area')
<!-- Testimonials Area End -->

<!-- Brand Area -->
@include('front.homepage.layouts.partials.brand-area')
<!-- Brand Area End -->

<!-- Subscribe Area -->
@include('front.homepage.layouts.partials.subscribe-area')
<!-- Subscribe Area End -->

<!-- Footer Area -->
@include('front.homepage.layouts.partials.footer')
<!-- Footer Area End -->

<!-- Copy-Right Area -->
<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-text text-center">
            <p>
                Copyright ©2021 Medizo. All Rights Reserved by

            </p>
        </div>
    </div>
</div>
<!-- Copy-Right Area End -->

@include('front.homepage.layouts.partials.script')
<!-- Jquery Min JS -->


</body>
</html>
