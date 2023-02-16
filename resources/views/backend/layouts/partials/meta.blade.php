<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Hospital</title>

<!-- Global stylesheets -->
<link href="{{ asset('/assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('/assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
<link href="{{ asset('/assets/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="{{asset('/assets/demo/demo_configurator.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{asset('/assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
<script src="{{asset('/assets/demo/pages/uploader_bootstrap.js')}}"></script>
<script src="{{asset('/assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/uploaders/fileinput/fileinput.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
<script src="{{asset('/assets/js/app.js')}}"></script>
<script src="{{asset('/assets/demo/pages/dashboard.js')}}"></script>
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/streamgraph.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/sparklines.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/lines.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/areas.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/donuts.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/bars.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/progress.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/heatmaps.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/pies.js')}}"></script>--}}
{{--<script src="{{asset('/assets/demo/charts/pages/dashboard/bullets.js')}}"></script>--}}
<!-- /theme JS files -->
<style>
    body{padding-top:100px}
    .tagcloud{margin-bottom:-2px;overflow:hidden}
    .tagcloud a:before{background:none repeat scroll 0 0 #FFF;content:"";height:1px;left:0;position:absolute;top:0;width:100%}
    .tagcloud a:after{background:none repeat scroll 0 0 #FFF;bottom:-2px;content:"";height:1px;left:0;position:absolute;width:100%}
    .tagcloud a{background:none repeat scroll 0 0 #F7F6EF;border:1px solid #D6D6D6;border-radius:2px;color:#525252;display:inline-block;float:left;font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:12px!important;line-height:26px;margin-bottom:5px;margin-right:4px;position:relative;transition:all .2s ease-in-out 0;padding:0 12px}
    .tagcloud a:hover{background:none repeat scroll 0 0 #FFF;text-decoration:none}
    pre code{diplay:none}
    .label-arrow{position:relative;padding:.4em .6em .3em}
    .label-arrow-left{border-top-left-radius:0;border-bottom-left-radius:0;margin-left:10px}
    .label-arrow-left:before{right:100%;top:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;border-right-color:#999;margin-top:-10px;border-width:10px}
    h4 .label-arrow-left{margin-left:18px}
    h4 .label-arrow-left:before{margin-top:-13px;border-width:13px}
    a:hover{text-decoration:none}


    /*menu*/
    .dropdown-submenu{position:relative;}
    .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
    /*.dropdown-submenu:hover>.dropdown-menu{display:block;}*/
    .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
    .dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
    .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
    /*menu end*/
</style>

