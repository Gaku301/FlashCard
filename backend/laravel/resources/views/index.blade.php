<!doctype html>
<html class="no-js" lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flashcard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('green/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('green/css/font-awesome.min.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('green/css/meanmenu/meanmenu.min.css') }}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('green/css/notika-custom-icon.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('green/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('green/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('green/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div id="header">
        <header-component></header-component>
    </div>
    <!-- End Header Top Area -->

    <!-- Mobile Menu start -->
    <div id="mobileMenu">
        <mobileMenu-component></mobileMenu-component>
    </div>
    <!-- Mobile Menu end -->
 
    <!-- Main Menu area start-->
    <div id="mainMenu">
        <mainMenu-component></mainMenu-component>
    </div>
    <!-- Main Menu area End-->

    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">50,000</span></h2>
                            <p>Total Website Traffics</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">90,000</span>k</h2>
                            <p>Website Impressions</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>$<span class="counter">40,000</span></h2>
                            <p>Total Online Sales</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1,000</span></h2>
                            @foreach (range(0, count($contents->{'docs'})-1) as $num)
                                
                            <p>{{ $contents->{'docs'}[$num]->{'head'}->{'title'} }}</p>
                            @endforeach
                            <p>Total Support Tickets</p>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->

                   
    <!-- Normal Table area Start-->
    <div id="table">
        <table-component></table-component>
    </div>
    <!-- End Normal Table area -->
  
    <!-- Start Footer area-->
    <div id="footer">
        <footer-component></footer-component>
    </div>

    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('green/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('green/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('green/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('green/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('green/js/sparkline/sparkline-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('green/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('green/js/main.js') }}"></script>
    <!-- footer JS -->
    <script src="{{ asset('green/js/footerFixed.js') }}"></script>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>