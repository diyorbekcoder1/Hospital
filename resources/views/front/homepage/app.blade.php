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
<div class="banner-area banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content">
                    <span>The Home of Your Hope</span>
                    <h1>Your Good Health is Our Responsibility</h1>
                    <p>Get your appointment through online and remain safe at your home. Because your safety is our first priority.</p>
                    <div class="banner-btn">
                        <a href="{{route('appointment-view')}}" class="appointment-btn">Request Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-img">
        <img src="assetss/img/home-one/home-one-img.png" alt="Images">
    </div>
    <div class="banner-shape">
        <div class="shape1">
            <img src="assetss/img/home-one/shape1.png" alt="Images">
        </div>
        <div class="shape2">
            <img src="assetss/img/home-one/shape2.png" alt="Images">
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Banner Bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-bottom-card">
                    <i class='flaticon-call'></i>
                    <div class="content">
                        <span>Get Emergency Service At 24/7</span>
                        <h3><a href="tel:+8-(123)-456-789-12">+8 (123) 456 789 12</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Bottom End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assetss/img/about-img/about-img.png" alt="Images">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>We Are Your Trusted Friend</h2>
                        <p>Medizo is a trusted name of Medical Services who is always at your side and your health is our first priority.</p>
                        <p>
                            Medizo Care will be administered through plan-based customizable programs that incorporate partnership between
                            family members and the care givers for long term illness or disease management.
                        </p>
                    </div>
                    <div class="about-card">
                        <i class='flaticon-24-hours bg-one'></i>
                        <div class="content">
                            <span>24/7 Support</span>
                            <p>Our medical team of  different department for long term illness writers and editors makes all the </p>
                        </div>
                    </div>

                    <div class="about-card">
                        <i class='flaticon-ambulance-2 bg-two'></i>
                        <div class="content">
                            <span>Emergency Support</span>
                            <p>Our medical team of  different department for long term illness writers and editors makes all the</p>
                        </div>
                    </div>

                    <div class="about-btn">
                        <a href="#" class="default-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Appointment Area -->
<div class="appointment-area appointment-bg pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xxl-5">
                <div class="appointment-img">
                    <img src="assetss/img/appointment/appointment-img.png" alt="Images">
                </div>
            </div>

            <div class="col-lg-6 col-xxl-7">
                <div class="appointment-from">
                    <h2>Get Your Appointment</h2>
                    <p>Online Easily During This Corona Pandemic</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Select Departments</option>
                                        <option value="">Dental Care</option>
                                        <option value="">Cardiology</option>
                                        <option value="">Neurology</option>
                                        <option value="">Orthopedics</option>
                                        <option value="">Medicine</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Select Doctor</option>
                                        <option value="">Dr. James Adult</option>
                                        <option value="">Dr. James Alison</option>
                                        <option value="">Dr. Peter Adlock</option>
                                        <option value="">Dr. Jelin Alis</option>
                                        <option value="">Dr. Josh Taylor</option>
                                        <option value="">Dr. Steven Smith</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Select Specialist</option>
                                        <option value="">Cardiologists</option>
                                        <option value="">Dermatologists</option>
                                        <option value="">Endocrinologists</option>
                                        <option value="">Gastroenterologists</option>
                                        <option value="">Allergists</option>
                                        <option value="">Immunologists</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker">
                                        <input type="text" class="form-control" placeholder="Select Time">
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Book An Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="appointment-shape">
        <img src="assetss/img/appointment/appointment-shape.png" alt="Images">
    </div>
</div>
<!-- Appointment Area End -->

<!-- Service Area -->
<section class="service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Services That We Provide</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                We provide excellent services for your ultimate good health. Here some of the services are included
                for your better understand that we are always at your side.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html"><img src="assetss/img/services/service-img1.jpg" alt="Images"></a>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-doctor"></i>
                        </div>
                        <h3><a href="service-details.html">Medical Counselling</a></h3>
                        <div class="content">
                            <p>We provide  wide range of medical counselling by the professional doctor & therapist.</p>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="assetss/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assetss/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html"><img src="assetss/img/services/service-img2.jpg" alt="Images"></a>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-syringe"></i>
                        </div>
                        <h3><a href="service-details.html">Laboratory Test</a></h3>
                        <div class="content">
                            <p>We provide  wide range of medical counselling by the professional doctor & therapist.</p>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="assetss/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assetss/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html"><img src="assetss/img/services/service-img3.jpg" alt="Images"></a>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-male"></i>
                        </div>
                        <h3><a href="service-details.html">Surgical Operation</a></h3>
                        <div class="content">
                            <p>We provide  wide range of medical counselling by the professional doctor & therapist.</p>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="assetss/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assetss/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html"><img src="assetss/img/services/service-img4.jpg" alt="Images"></a>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-stethoscope-1"></i>
                        </div>
                        <h3><a href="service-details.html">Medical Treatment</a></h3>
                        <div class="content">
                            <p>We provide  wide range of medical counselling by the professional doctor & therapist.</p>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="assetss/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assetss/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html"><img src="assetss/img/services/service-img5.jpg" alt="Images"></a>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-caduceus-symbol"></i>
                        </div>
                        <h3><a href="service-details.html">Pharmacy Service</a></h3>
                        <div class="content">
                            <p>We provide  wide range of medical counselling by the professional doctor & therapist.</p>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="assetss/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assetss/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html"><img src="assetss/img/services/service-img6.jpg" alt="Images"></a>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-ambulance-2"></i>
                        </div>
                        <h3><a href="service-details.html">Emergency Service</a></h3>
                        <div class="content">
                            <p>We provide  wide range of medical counselling by the professional doctor & therapist.</p>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="assetss/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assetss/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-dots">
        <img src="assetss/img/services/service-dots.png" alt="">
    </div>
</section>
<!-- Service Area End -->

<!-- Consultancy Area -->
<div class="consultancy-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="consultancy-img">
                    <img src="assetss/img/consultancy/consultancy-img.png" alt="Images">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="consultancy-content">
                    <h2>Need Online Consultancy?</h2>
                    <p>Just fill up the form and get consultation with the expert doctors of the world in a few minutes.</p>

                    <div class="consultancy-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">Choose Departments</option>
                                            <option value="">Dental Care</option>
                                            <option value="">Cardiology</option>
                                            <option value="">Neurology</option>
                                            <option value="">Orthopedics</option>
                                            <option value="">Medicine</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">Choose Doctor</option>
                                            <option value="">Dr. James Adult</option>
                                            <option value="">Dr. James Alison</option>
                                            <option value="">Dr. Peter Adlock</option>
                                            <option value="">Dr. Jelin Alis</option>
                                            <option value="">Dr. Josh Taylor</option>
                                            <option value="">Dr. Steven Smith</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Get Online Consultancy
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Consultancy Area End -->

<!-- Doctors Area -->
<div class="doctors-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>Meet Our Experts</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                We provide excellent services for your ultimate good health. Here some of the services are included
                for your better understand that we are always at your side.
            </p>
        </div>
        <div class="doctors-slider owl-carousel owl-theme pt-45">
            <div class="doctors-item">
                <div class="doctors-img">
                    <a href="doctors-details.html">
                        <img src="assetss/img/doctors/doctors-img1.png" alt="Images">
                    </a>
                </div>
                <div class="content">
                    <h3><a href="doctors-details.html">Norman Colins</a></h3>
                    <span>Surgeon, Сardiologist </span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="doctors-item">
                <div class="doctors-img">
                    <a href="doctors-details.html">
                        <img src="assetss/img/doctors/doctors-img2.png" alt="Images">
                    </a>
                </div>
                <div class="content">
                    <h3><a href="doctors-details.html">Dr. Peter Adlock</a></h3>
                    <span>Orthopedics Surgeon </span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="doctors-item">
                <div class="doctors-img">
                    <a href="doctors-details.html">
                        <img src="assetss/img/doctors/doctors-img3.png" alt="Images">
                    </a>
                </div>
                <div class="content">
                    <h3><a href="doctors-details.html">Sinthy Alina</a></h3>
                    <span>Gynecologist</span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="doctors-item">
                <div class="doctors-img">
                    <a href="doctors-details.html">
                        <img src="assetss/img/doctors/doctors-img4.png" alt="Images">
                    </a>
                </div>
                <div class="content">
                    <h3><a href="doctors-details.html">Dr. James Alison</a></h3>
                    <span>Neurologist</span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="doctors-shape">
        <div class="doctors-shape-1">
            <img src="assetss/img/doctors/doctors-shape1.png" alt="Images">
        </div>
        <div class="doctors-shape-2">
            <img src="assetss/img/doctors/doctors-shape2.png" alt="Images">
        </div>
    </div>
</div>
<!-- Doctors Area End -->

<!-- Emergency Area -->
<div class="emergency-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="emergency-content">
                    <h2>Get <b>Emergency</b> Care 24/7</h2>
                    <p>We are always at your side. We are 24 hours available for you in emergency situation.</p>
                    <div class="emergency-icon-content">
                        <i class="flaticon-24-hours-1"></i>
                        <h3><a href="tel:+8-(123)-456-789-12">+8 (123) 456 789 12</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="emergency-shape">
        <img src="assetss/img/emergency/emergency-shape.png" alt="Images">
    </div>
</div>
<!-- Emergency Area End -->

<!-- Blog Area -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our News & Updates</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                We provide excellent services for your ultimate good health. Here some of the services are included
                for your better understand that we are always at your side.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="assetss/img/blog/blog-img.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>
                                <i class="flaticon-calendar-1"></i>
                                August 31, 2020
                                <span>
                                            <a href="#">Healthcare</a>
                                        </span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html"> Lockdowns Leads to Fewer Peo - Ple Seeking Medical Care</a>
                        </h3>
                        <p>Victoria’s State of Emergency (SOE) measures resulted in almost 40 per cent less people prese nting to Alfred Health’s....</p>
                        <a href="blog-details.html" class="more-btn">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="assetss/img/blog/blog-img2.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>
                                <i class="flaticon-calendar-1"></i>
                                August 24, 2020
                                <span>
                                            <a href="#">Medicine</a>
                                        </span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html"> Emergency Medicine Research Course for the Doctors</a>
                        </h3>
                        <p>Victoria’s State of Emergency (SOE) measures resulted in almost 40 per cent less people prese nting to Alfred Health’s....</p>
                        <a href="blog-details.html" class="more-btn">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="blog-card-side">
                    <ul>
                        <li>
                            <i class="flaticon-calendar-1"></i>
                            August 24, 2020
                            <span>
                                        <a href="#">Medicine</a>
                                    </span>
                            <a href="blog-details.html">
                                <h3> Advance Care Planning Information Session - 2020</h3>
                            </a>
                        </li>

                        <li>
                            <i class="flaticon-calendar-1"></i>
                            August 30, 2020
                            <span>
                                        <a href="#">Medicine</a>
                                    </span>
                            <a href="blog-details.html">
                                <h3> New Hope for Brain Cancer Treatment in the World</h3>
                            </a>
                        </li>

                        <li>
                            <i class="flaticon-calendar-1"></i>
                            September 10, 2020
                            <span>
                                        <a href="#">Medicine</a>
                                    </span>
                            <a href="blog-details.html">
                                <h3> Drug Trial Aims to Clear Covid-19 Virus Faster</h3>
                            </a>
                        </li>

                        <li>
                            <i class="flaticon-calendar-1"></i>
                            September 20, 2020
                            <span>
                                        <a href="#">Medicine</a>
                                    </span>
                            <a href="blog-details.html">
                                <h3> Clinic to Measure Heart Health a After Covid-19</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="blog-more-btn">
                    <a href="#" class="default-btn">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-shape-icon">
        <i class="flaticon-dna"></i>
    </div>
</div>
<!-- Blog Area End -->

<!-- Testimonials Area -->
<div class="testimonials-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>Testimonials</span>
            <h2>Thoughts of Our Patients</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="testimonials-img">
                    <img src="assetss/img/testimonials/testimonials-img.jpg" alt="Images">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonials-slider-area">
                    <div class="testimonials-slider owl-carousel owl-theme">
                        <div class="testimonials-item">
                            <i class="flaticon-left-quote"></i>
                            <p>Medizo hospital for their professional competent and committed approach they deliver at all times, making me and other patients feel at ease during these anxious times. </p>
                            <div class="content">
                                <img src="assetss/img/testimonials/testimonials-client1.jpg" alt="Images">
                                <h3>Sinthy Alina</h3>
                                <span>Heart Patient</span>
                            </div>
                        </div>

                        <div class="testimonials-item">
                            <i class="flaticon-left-quote"></i>
                            <p>Medizo hospital for their professional competent and committed approach they deliver at all times, making me and other patients feel at ease during these anxious times. </p>
                            <div class="content">
                                <img src="assetss/img/testimonials/testimonials-client2.jpg" alt="Images">
                                <h3>Evanaa</h3>
                                <span>Diabetic Patient</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area End -->

<!-- Brand Area -->
<div class="brand-area brand-bg">
    <div class="container">
        <div class="brand-slider owl-carousel owl-theme">
            <div class="brand-item">
                <img src="assetss/img/brand/brand-img1.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assetss/img/brand/brand-img2.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assetss/img/brand/brand-img3.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assetss/img/brand/brand-img4.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assetss/img/brand/brand-img5.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assetss/img/brand/brand-img6.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assetss/img/brand/brand-img3.png" alt="Images">
            </div>
        </div>
    </div>
</div>
<!-- Brand Area End -->

<!-- Subscribe Area -->
<div class="subscribe-area ptb-100">
    <div class="container">
        <div class="newsletter-area">
            <h2>Subscribe Our <b>Newsletter</b></h2>
            <p>We are always at your side. We are 24 hours avail- able for you in emergency situation.</p>
            <form class="newsletter-form" data-toggle="validator" method="POST">
                <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
                <button class="subscribe-btn" type="submit">
                    Subscribe
                </button>
                <div id="validator-newsletter" class="form-result"></div>
            </form>
        </div>
    </div>
    <div class="subscribe-shape">
        <img src="assetss/img/subscribe-img/subscribe-shape.png" alt="Images">
    </div>
</div>
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
