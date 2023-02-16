<footer id="footer_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="widget widget_text">
                    <a href="Home_01.html"><img src="{{ asset('/front/images/Logo.png') }}" alt="footer logo" /></a>
                    <p>In 2015, We launched Travellers with the belief that other travellers would share our desire to experience authentic adventures in a responsible and sustainable manner. <br>
                        <br>
                        We've grown from a one-man show to a company of over 50 world wide, and from a handful of trips in all over the world.</p>
                    <a href="">Read More <i class="fa fa-angle-right"></i></a> </aside>
            </div>
            <div class="col-md-4">
                <aside class="widget widget_links">
                    <h4 class="widget-title">ПОЛЕЗНЫЕ ССЫЛКИ</h4>
                    {!! $menus !!}
                </aside>
            </div>
            <div class="col-md-4">
                <aside class="widget payment_method">
                    <h4 class="widget-title">ПОДДЕРЖИВАЕМЫЙ СПОСОБ ОПЛАТЫ</h4>
                    <a href=""><img src="{{asset('front/images/Payment-Images.png')}}" alt="Payment Method" /></a> </aside>
            </div>
        </div>
    </div>
    </div>
</footer>
