<header id="header_wrapper">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p><i class="fa fa-phone"></i><span> +998 99 945 13 13  +998 90 845-13-13</span></p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="top_menu">
                        <ul>
                            <li><a href=""><i class="fa fa-globe"></i> Язык</a>
                                <ul class="sub-menu">
                                    <li><a href="">English</a></li>
                                    <li><a href="">Русский</a></li>
                                </ul>
                            </li>
                            <li><a href="">Мой счет</a></li>
                            <li class="Travelite_login_alert"><a href="#">Логин</a></li>
                            <li class="Travelite_signup_alert"><a href="#">Регистрация</a></li>
                            <li><a href="">USD</a>
                                <ul class="sub-menu">
                                    <li><a href="">UZS</a></li>
                                    <li><a href="">USD</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popup form Start -->
    <div class="full_width login_wrapper">
        <div class="row">
            <div class="container">
                <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
                    <!-- login form start -->
                    <div class="popup_alert_main Travelite_login_form">
                        <div class="login_heading">
                            login
                            <span class="close_btn"><i class="fa fa-times"></i></span>
                        </div>
                        <div class="popup_inner">
                            <form>
                                <input type="email" name="emaillogin" placeholder="Email Id"   class="input_login">
                                <input type="password" name="passlogin" placeholder="Password" class="input_login">
                                <input type="checkbox" id="login_check" name="checkbox" class="checkbox_login">
                                <label for="login_check" class="remember_me">Remember me</label>
                                <a href="#" class="forgot_link">Forget password?</a>
                            </form>
                            <div class="have_an_acnt">
                                <p>Dont have an account?  <a href="#">Sign up</a></p>
                            </div>
                            <div class="or_line">
                                <span>(OR)</span>
                            </div>
                            <div class="social_links_login">
                                <ul>
                                    <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
                                    <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- login form  End -->
                    <!-- signup form start -->
                    <div class="popup_alert_main Travelite_signup_form">
                        <div class="login_heading">
                            signup
                            <span class="close_btn"><i class="fa fa-times"></i></span>
                        </div>
                        <div class="popup_inner">
                            <form class="signup_form">
                                <input type="text" name="emaillogin" placeholder="First Name" class="input_login">
                                <input type="text" name="emaillogin" placeholder="Last Name"  class="input_login">
                                <input type="email" name="emaillogin" placeholder="Email Id"   class="input_login">
                                <input type="password" name="passlogin" placeholder="Password" class="input_login">
                                <input type="password" name="conf passlogin" placeholder="Confirm Password" class="input_login">
                                <input type="checkbox" id="signup_check" name="checkbox" class="checkbox_login">
                                <label for="signup_check" class="remember_me">I agree the Terms of Service, Privacy Policy, Guest
                                    Refund Policy, and Host Guarantee Terms.</label>
                                <input type="submit" value="SIGN UP" class="sub_signup">
                            </form>
                            <div class="or_line">
                                <span>(OR)</span>
                            </div>
                            <div class="social_links_login">
                                <ul>
                                    <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
                                    <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
                                </ul>
                            </div>
                            <div class="already_member"> already member? <a href="#">login here</a></div>
                        </div>
                    </div>
                    <!-- signup form  End -->
                </div>
            </div>
        </div>
    </div>
    <!-- popup form  End -->
    @include('front.layout.partials.menu')
</header>
