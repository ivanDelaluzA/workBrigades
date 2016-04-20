<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> @yield('title')</title>

	<meta name="description" content="Pleasure is responsive, material admin dashboard panel">
	<meta name="author" content="Teamfox">

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-touch-fullscreen" content="yes">

	<!-- BEGIN CORE CSS -->
	<link rel="stylesheet" href="{{ asset('assets/admin1/css/admin1.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/admin1/css/admin1.css') }}">
	<!-- END CORE CSS -->

	<!-- BEGIN PLUGINS CSS -->
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/rickshaw/rickshaw.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/globals/plugins/bxslider/jquery.bxslider.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/globals/css/plugins.css') }}">
	<!-- END PLUGINS CSS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="{{ asset('assets/globals/img/icons/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/globals/img/icons/apple-touch-icon.png') }}">
	<!-- END SHORTCUT AND TOUCH ICONS -->

	<script src="{{ asset('assets/globals/plugins/modernizr/modernizr.min.js') }}"></script>
</head>
<body class="theme-teal">
	
	@include('partials.mainMenu')

	
	<div class="content">
		<div class="page-header full-content bg-purple">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <img class="img-logo zoom" src="{{ asset('assets/globals/img/resources/atci-logo.png') }}" alt="">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <img class="img-logo zoom" src="{{ asset('assets/globals/img/resources/cordoba-solo.png') }}" alt="">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <img class="img-logo zoom" src="{{ asset('assets/globals/img/resources/escudo-cordoba.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h1 class="pull-right">Córdoba <small>Cerca de ti</small></h1>
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.page-header-->


		@yield('content')
	</div><!--.content-->

	@include('partials.hiddenMenu')

	<!-- BEGIN GLOBAL AND THEME VENDORS -->
	<script src="../../assets/globals/js/global-vendors.js"></script>
	<!-- END GLOBAL AND THEME VENDORS -->

	<!-- BEGIN PLUGINS AREA -->
	<script src="http://maps.google.com/maps/api/js?sensor=true&amp;libraries=places"></script>

	<script src="{{ asset('assets/globals/plugins/gmaps/gmaps.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/bxslider/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/audiojs/audiojs/audio.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/d3/d3.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/rickshaw/rickshaw.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/jquery-knob/excanvas.js') }}."></script>
	<script src="{{ asset('assets/globals/plugins/jquery-knob/dist/jquery.knob.min.js') }}"></script>
	<script src="{{ asset('assets/globals/plugins/gauge/gauge.min.js') }}"></script>
	<!-- END PLUGINS AREA -->

	<!-- PLEASURE -->
	<script src="{{ asset('assets/globals/js/pleasure.js') }}"></script>
	<!-- ADMIN 1 -->
	<script src="{{ asset('assets/admin1/js/layout.js') }}"></script>

	<script src="{{ asset('assets/globals/scripts/sliders.js') }}"></script>
	<script src="{{ asset('assets/globals/scripts/maps-google.js') }}"></script>
	<script src="{{ asset('assets/globals/scripts/widget-audio.js') }}"></script>
	<script src="{{ asset('assets/globals/scripts/charts-knob.js') }}"></script>
	<script src="{{ asset('assets/globals/scripts/index.js') }}"></script>
	<!-- BEGIN INITIALIZATION-->
	<script>
	$(document).ready(function () {
		Pleasure.init();
		Layout.init();

		Index.init();
		WidgetAudio.single();
		ChartsKnob.init();

	});
	</script>
	<!-- END INITIALIZATION-->

	<!-- BEGIN Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', Pleasure.settings.ga.urchin, Pleasure.settings.ga.url);
		ga('send', 'pageview');
	</script>
	<!-- END Google Analytics -->

</body>
</html>