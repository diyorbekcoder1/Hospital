<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    @include('front.layout.partials.meta')
</head>
<body class="travel_home">
@include('front.layout.partials.header')
@yield('content')
<!--content body end-->
<!--footer start-->
@include('front.layout.partials.footer')
<!--footer end-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6"> <span>Stay Connected with Us - </span> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> <a href=""><i class="fa fa-rss"></i></a> </div>
            <div class="col-md-6 col-sm-6 text-right"> <span>Travellers@2016. All Right Reserved</span> </div>
        </div>
    </div>
</div>
</div>
@include('front.layout.partials.javascript')
</body>
</html>
