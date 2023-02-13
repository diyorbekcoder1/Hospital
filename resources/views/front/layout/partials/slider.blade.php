<div class="slider_tab_main">

    <div class="full_width home_slider">
        <div class="example">
            <article class="content" style="width:100%; float:left;">
                <div id="rev_slider_116_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="layer-animations" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

                    <div id="rev_slider_116_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul style="width:100% !important;" class="home_3_slide">
                            @foreach($sliders as $slider)
                            <li data-index="rs-391" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Smooth Mask" data-description="">
                                <img src="{!! url($slider->path) !!}" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            @endforeach
{{--                            <li data-index="rs-392" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Smooth Mask" data-description="">--}}
{{--                                <img src="{{ asset('front/images/slider/slider2.png') }}" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="home_tabs_search">
        <div class="full_width slider_form_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_tabs">
                            <div class="wsa_tab">
                                <ul>
                                    <li> <a href="#building_search"><i class="fa fa-building-o"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full_width slider_content_wrap">
            <div class="container">
                <!-- first content_start -->
                <div id="building_search" class="main_content_form">
                    <!-- tab_search form start -->
                    <form>
                        <div class="pull_left check_in_field">
                            <label>Дата</label>
                            <input type="text" id="Check_in_date_tab" placeholder="dd/mm/yyyy">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="pull_left room_select_field">
                            <label>ВЗРОСЛЫЕ</label>
                            <select  class="form-control selectpicker" data-live-search="true" id="search_adults" >
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="pull_left room_select_field">
                            <label>ДЕТИ</label>
                            <select class="form-control selectpicker" data-live-search="true" id="search_kids">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="pull_left submit_field">
                            <input type="search" placeholder="SEARCH" class="search_tabs">
                            <button class="btn tab_search" type="submit"> <i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </form>
                    <!-- tab_search form End -->
                </div>

            </div>
        </div>
    </div>
    <!-- slider tab section End -->

</div>
<section id="main-slider" class="no-margin" style="display:none;">
    <div class="carousel slide wet-asphalt">
        @if($sliders->count() > 0)
            <ol class="carousel-indicators">
                    <?php
                    $active = true;
                    $i = 0;
                    ?>
                @foreach($sliders as $slider)
                    <li data-target="#main-slider" data-slide-to="{!! $i++ !!}" class="{!! (($active) ? 'active' : null) !!}"></li>
                        <?php $active = false; ?>
                @endforeach
            </ol>
            <div class="carousel-inner">
                    <?php $active = true; ?>
                @foreach($sliders as $slider)
                    <div class="item {!! (($active) ? 'active' : null) !!}" style='background-image: url("{!! url($slider->path) !!}")'>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content centered">
                                        <h2 class="animation animated-item-1">{!! $slider->title !!}</h2>
                                        <p class="animation animated-item-2">{!! $slider->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $active = false; ?>
                @endforeach
                @else
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#main-slider"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div style='background-image: url("{!! url('assets/images/default_slider.png') !!}")' class="item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="carousel-content centered" style="margin-top: 265px;">
                                            <h2 class="animation animated-item-1">Lorem ipsum</h2>
                                            <p class="animation animated-item-2">Aenean ornare erat sed semper gravida</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.item-->
                    </div>
                @endif
            </div>
    </div>
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section>
