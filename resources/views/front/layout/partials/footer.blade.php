<footer id="footer_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="widget widget_text">
                    <a href="Home_01.html"><img src="{{ asset('/front/images/Logo.png') }}" alt="footer logo" /></a>
                    <p> Tashkent city tour - <?php echo date('Y-m-d') ?>></p>
{{--                    <a href="">Read More <i class="fa fa-angle-right"></i>--}}
                    </a>
                </aside>
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
