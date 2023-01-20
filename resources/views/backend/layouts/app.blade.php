<!DOCTYPE html>
<html lang="en">
<head>
@include('backend.layouts.partials.meta')
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
    @include('backend.layouts.partials.header')
    <div class="page-body-wrapper sidebar-icon">
        @include('backend.layouts.partials.sidebar')
         @yield('content')
         @include('backend.layouts.partials.footer')
    </div>
</div>

@include('backend.layouts.partials.javascript')
@stack("javascript")
</body>
</html>
