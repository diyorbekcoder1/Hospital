@extends('front.layout.app')
@section('content')
    <div id="content_wrapper">
        <div class="clearfix"></div>
        @include('front.layout.partials.slider', $sliders)

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
    </div>
@endsection
