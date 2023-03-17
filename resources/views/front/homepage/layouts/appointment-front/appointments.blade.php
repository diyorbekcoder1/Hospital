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
