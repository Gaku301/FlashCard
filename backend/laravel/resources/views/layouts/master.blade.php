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
    <div id="header">
        <header-component></header-component>
    </div>

    <div id="mobileMenu">
        <mobileMenu-component></mobileMenu-component>
    </div>
 
    <div id="mainMenu">
        <mainMenu-component></mainMenu-component>
    </div>

    @yield('content')
                   

    <div id="footer">
        <footer-component></footer-component>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

    @yield('script')

</body>

</html>