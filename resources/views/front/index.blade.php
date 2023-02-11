@extends('front.layout.app')
@section('content')
    <div id="content_wrapper">
        <div class="clearfix"></div>

        <div class="slider_tab_main">
            <!-- Home first slider start -->
            <div class="full_width home_slider">
                <div class="example">
                    <article class="content" style="width:100%; float:left;">
                        <div id="rev_slider_116_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="layer-animations" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                            <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                            <div id="rev_slider_116_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                                <ul style="width:100% !important;" class="home_3_slide">
                                    <!-- SLIDE  -->
                                    <li data-index="rs-391" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Smooth Mask" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/slider/slider1.png" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER end -->

                                    </li>
                                    <!--slide-->


                                    <li data-index="rs-392" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Smooth Mask" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/slider/slider2.png" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->


                                        <!-- LAYER end -->

                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </article>
                </div>
                <!-- section end -->
            </div>
            <!-- Home first slider End -->

            <!-- slider tab section start -->

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

        </div><!-- slider main wrapper end -->
        <div class="full_width our_gallery_section">
            <div class="container">
                <div class="gallery_Sec_main">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading_team">
                                <h3>ЛУЧШИЕ ВИДЫ ТАШКЕНТА</h3>
                            </div>
                        </div>
                    </div>


                    <!-- item first -->
                    <div class="col-lg-4 col-sm-4 col-md-4 pad_left">
                        <div class="row">
                            <div class="gallery_thumb_wrapper">
                                <img src="http://placehold.it/386x235" alt="gallery thumb" class="img-responsive">
                                <div class="gallery_thumb_overlay">
                                    <a href="Tour_Gallery_3_Columns.html" class="see_all_link">see all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item first End -->

                    <!-- item second -->
                    <div class="col-lg-4 col-sm-4 col-md-4 pad_left">
                        <div class="row">
                            <div class="gallery_thumb_wrapper">
                                <img src="http://placehold.it/386x235" alt="gallery thumb" class="img-responsive">
                                <div class="gallery_thumb_overlay">
                                    <a href="Tour_Gallery_3_Columns.html" class="see_all_link">see all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item second  End-->

                    <!-- item thired -->
                    <div class="col-lg-4 col-sm-4 col-md-4 pad_left">
                        <div class="row">
                            <div class="gallery_thumb_wrapper">
                                <img src="http://placehold.it/386x235" alt="gallery thumb" class="img-responsive">
                                <div class="gallery_thumb_overlay">
                                    <a href="Tour_Gallery_3_Columns.html" class="see_all_link">see all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item thired End -->

                    <!-- item fourth -->
                    <div class="col-lg-4 col-sm-4 col-md-4 pad_left">
                        <div class="row">
                            <div class="gallery_thumb_wrapper">
                                <img src="http://placehold.it/386x235" alt="gallery thumb" class="img-responsive">
                                <div class="gallery_thumb_overlay">
                                    <a href="Tour_Gallery_3_Columns.html" class="see_all_link">see all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item fourth End -->
                    <!-- item fifth  -->
                    <div class="col-lg-4 col-sm-4 col-md-4 pad_left">
                        <div class="row">
                            <div class="gallery_thumb_wrapper">
                                <img src="http://placehold.it/386x235" alt="gallery thumb" class="img-responsive">
                                <div class="gallery_thumb_overlay">
                                    <a href="Tour_Gallery_3_Columns.html" class="see_all_link">see all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item fifth End -->
                    <!-- item six -->
                    <div class="col-lg-4 col-sm-4 col-md-4 pad_left">
                        <div class="row">
                            <div class="gallery_thumb_wrapper">
                                <img src="http://placehold.it/386x235" alt="gallery thumb" class="img-responsive">
                                <div class="gallery_thumb_overlay">
                                    <a href="Tour_Gallery_3_Columns.html" class="see_all_link">see all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item six End -->

                </div>

            </div>
        </div>
        <!-- feature section start -->
        <div class="full_width home_video_section_scnd">
            <div class="video_overlay">
                <div class="container">
                    <div class="row">
                        <div class="video_popup">
                            <a class="popup_video_swm youtube_play" href="https://youtu.be/AS_lYmmWon0">
                                <i class="fa fa-play"></i>
                            </a>
                            <h3 class="video_text">Watch Our Tourist Experience</h3> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full_width our_feature_section">
            <div class="container">
                <div class="row row_top">
                    <div class="heading_team">
                        <h3>ПОЧЕМУ ВЫБРАТЬ ПУТЕШЕСТВИЕ</h3>

                    </div>
                    <div class="why_choose_Travelite">
                        <div class="col-md-3 col-sm-6">
                            <div class="best_feature_wrapper">
                                <div class="best_feature_icon"><i class="fa fa-car"></i><span class="icon_overlay"></span></div>
                                <h3>Более 1000 автомобилей</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="best_feature_wrapper">
                                <div class="best_feature_icon"><i class="fa fa-users"></i><span class="icon_overlay"></span></div>
                                <h3>Предложения для группового бронирования</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="best_feature_wrapper">
                                <div class="best_feature_icon"><i class="fa fa-headphones"></i><span class="icon_overlay"></span></div>
                                <h3>24/7 Служба поддержки клиентов</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="best_feature_wrapper">
                                <div class="best_feature_icon"><i class="fa fa-life-ring"></i><span class="icon_overlay"></span></div>
                                <h3>Самые низкие цены и безопасность</h3>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!-- our feature section start -->


        <!-- customer says section start -->
        <div class="full_width customer_says_section">
            <div class="container">
                <div class="row row_top">
                    <div class="heading_team">
                        <h3>НАШИ ГИДЫ</h3>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="slick_crousel">
                            <div class="slick_items">
                                <img src="http://placehold.it/217x214/222222" alt="crousel">
                                <div class="content_bg">
                                    <h4>Камалов Рахматхон Акзамович</h4>
                                    <p>узбекский язык.</p>
                                </div>
                            </div>
                            <div class="slick_items"><img src="http://placehold.it/217x214" alt="crousel">
                                <div class="content_bg">
                                    <h4>Аудинова Аэлита Аркадиевна</h4>
                                    <p>русский, итальянский языки</p>
                                </div>
                            </div>
                            <div class="slick_items">
                                <img src="http://placehold.it/217x214/222222" alt="crousel">
                                <div class="content_bg">
                                    <h4>Арипова Дильноза Максудовна</h4>
                                    <p>русский, английский языки.</p>
                                </div>
                            </div>
                            <div class="slick_items"><img src="http://placehold.it/217x214/222222" alt="crousel">
                                <div class="content_bg">
                                    <h4>Каскенов Тимур Гайдарович</h4>
                                    <p>английский язык.</p>
                                </div>
                            </div>
                            <div class="slick_items">
                                <img src="http://placehold.it/217x214" alt="crousel">
                                <div class="content_bg">
                                    <h4>Шомансуров Шоасил</h4>
                                    <p>немецкий язык.</p>
                                </div>
                            </div>
                            <div class="slick_items">
                                <img src="http://placehold.it/217x214" alt="crousel">
                                <div class="content_bg">
                                    <h4>Алаудинов Александр</h4>
                                    <p>французский язык.</p>
                                </div>
                            </div>
                            <div class="slick_items">
                                <img src="http://placehold.it/217x214" alt="crousel">
                                <div class="content_bg">
                                    <h4>Мирабдуллаев Акмаль</h4>
                                    <p>китайский язык.</p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="full_width latest_news_section">
            <div class="container">
                <div class="row row_top">
                    <div class="heading_team">
                        <h3>ПОСЛЕДНИЕ НОВОСТИ</h3>
                    </div>
                    <!--  news box start -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="latest_news_wrapper">
                            <div class="news_thumb_wrapper">
                                <img src="http://placehold.it/270x233" alt="news image" class="img-responsive">
                                <div class="latest_news_overlay">
                                    <span class="date">18<br/> May</span>
                                    <span class="icon_img"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                            <div class="latest_news_desc">
                                <h4><a href="#">Enjoy the SkyDiving</a></h4>
                                <div class="news_heading_tag"><span>steven</span><span>travel</span></div>
                                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros. </p>
                                <div class="news_read_more">
                                    <a href="#" class="read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  news box End -->

                    <!--  news box start -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="latest_news_wrapper">
                            <div class="news_thumb_wrapper">
                                <img src="http://placehold.it/270x233" alt="news image" class="img-responsive">
                                <div class="latest_news_overlay">
                                    <span class="date">6<br/>jun</span>
                                    <span class="icon_img"><i class="fa fa-film"></i></span>
                                </div>
                            </div>
                            <div class="latest_news_desc">
                                <h4><a href="#">Snowball Fight</a></h4>
                                <div class="news_heading_tag"><span>steven</span><span>travel</span></div>
                                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros. </p>
                                <div class="news_read_more">
                                    <a href="#" class="read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  news box End -->

                    <!--  news box start -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="latest_news_wrapper">
                            <div class="news_thumb_wrapper">
                                <img src="http://placehold.it/270x233" alt="news image" class="img-responsive">
                                <div class="latest_news_overlay">
                                    <span class="date">18<br/>May</span>
                                    <span class="icon_img"><i class="fa fa-picture-o"></i></span>
                                </div>
                            </div>
                            <div class="latest_news_desc">
                                <h4><a href="#">Relaxing the Vacation</a></h4>
                                <div class="news_heading_tag"><span>steven</span><span>travel</span></div>
                                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros. </p>
                                <div class="news_read_more">
                                    <a href="#" class="read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  news box End -->

                    <!--  news box start -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="latest_news_wrapper">
                            <div class="news_thumb_wrapper">
                                <img src="http://placehold.it/270x233" alt="news image" class="img-responsive">
                                <div class="latest_news_overlay">
                                    <span class="date">12<br/>aug</span>
                                    <span class="icon_img"><i class="fa fa-camera"></i></span>
                                </div>
                            </div>
                            <div class="latest_news_desc">
                                <h4><a href="#">Get Ready to Ride</a></h4>
                                <div class="news_heading_tag"><span>steven</span><span>travel</span></div>
                                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros. </p>
                                <div class="news_read_more">
                                    <a href="#" class="read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  news box End -->

                </div>
            </div>
        </div>


        <!-- subscribe section End -->
    </div>
@endsection
