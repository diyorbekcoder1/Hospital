<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.partials.meta')
    @stack("style")
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('layouts.partials.header')
    <div class="page-body-wrapper sidebar-icon">
        @include('layouts.partials.sidebar')
         @yield('content')
            @include('layouts.partials.footer')
    </div>
</div>

@include('layouts.partials.javascript')
@stack("javascript")
</body>
</html>
