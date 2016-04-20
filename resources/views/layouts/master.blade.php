<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Ciudadano - @yield('title')</title>

	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<!-- BEGIN CORE CSS -->

	<link rel="stylesheet" href="{{ asset(elixir('css/style.css')) }}">
	<!-- END CORE CSS -->

	<!-- BEGIN PLUGINS CSS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="{{ asset('assets/globals/img/icons/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/globals/img/icons/apple-touch-icon.png') }}">

	<!-- END SHORTCUT AND TOUCH ICONS -->
	<script type="text/javascript" src="{{ asset('assets/globals/plugins/modernizr/modernizr.min.js') }}"></script>
	<style type="text/css">
		.radioer{
			text-align: left;
		}
		.switcher{
			text-align: center;
		}
		p.switch{
			display: inline;
		}
		small{
			font-size: 13px;
		}
		.layout-device, .layout-tablet{
			margin-top: 0;
		}
		#showHidePass{
			opacity: 0;
			padding:0;
		}
		.fileinput-filename{
			overflow:hidden; /* Escondemos la parte sobrante */
			white-space:nowrap; /* Indicamos que no realice salto de linea si no cabe en la anchura indicada */
			text-overflow: ellipsis; /* Ponemos los dos puntos */
		}
		.centerFileInput {
			display: inline;
			margin-top: 10px;
			text-align: left;
		}
		.fileinput.input-group {
			display: inline;
		}
		.btnMargin{
			margin-top:10px;
		}
		.optionnav{
			font-size: 14px;
		}
		#map{
			width: 100%;
			height: 350px;
		}
		#map:after {
			width: 22px;
			height: 40px;
			display: block;
			content: ' ';
			position: absolute;
			top: 50%; left: 50%;
			margin: -40px 0 0 -11px;
			background: url('https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png');
			background-size: 22px 40px; /* Since I used the HiDPI marker version this compensates for the 2x size */
		}

	</style>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
	<script src="http://www.google.com/jsapi?key=ABQIAAAAlJFc1lrstqhgTl3ZYo38bBQcfCcww1WgMTxEFsdaTsnOXOVOUhTplLhHcmgnaY0u87hQyd-n-kiOqQ"></script>

	<script type="text/javascript">
		var geocoder;
		function initialize() {
		      // mapCenter bettween Parque 21 de Mayo and Catedral del Sagrario de la Inmaculada
		      var mapCenter = new google.maps.LatLng(18.893784, -96.934458);
		      var mapOptions = {
		      	zoom: 17,
		      	center: mapCenter,
		      	mapTypeId: google.maps.MapTypeId.ROADMAP
		      };

		      map = new google.maps.Map(document.getElementById('map'), mapOptions);
		      geocoder = new google.maps.Geocoder;

		      var setLocation = function (latLng) {
		      	map.setCenter(latLng);
		      };

		      // Check for geolocation support
		      if (navigator.geolocation) {
		        // Get current position
		        navigator.geolocation.getCurrentPosition(function (position) {
		            // Geolocation Success!
		            setLocation(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
		        },
		        function () {
		            // Gelocation fallback: Defaults mapCenter
		            setLocation(mapCenter);
		        }
		        );
		    }
		    else {
		        // No geolocation fallback: Defaults mapCenter
		        setLocation(mapCenter);
		    }

		      // log initial center
		      logCenter();
		      // log when center changed
		      google.maps.event.addListener(map, "center_changed", function() {
		      	logCenter();
		      });
		  }

		  function logCenter() {
		  	$('#lat').val(map.getCenter().lat());
		  	$('#lng').val(map.getCenter().lng());
		  }

		  function geocodeLatLng() {
		  	geocoder.geocode({'location': map.getCenter()}, function(results, status) {
		  		if (status === google.maps.GeocoderStatus.OK) {
		  			if (results[1]) {
		            //numero
		            document.getElementById("number").value = results[0].address_components[0].long_name;
		            //calle, avenida
		            document.getElementById("route").value = results[0].address_components[1].long_name;
		            //colonia
		            document.getElementById("sublocality").value = results[0].address_components[2].long_name;
		        } else {
		        	window.alert('No se encontraron resultados.');
		        }
		    } else {
		    	window.alert('Geocoder failed due to: ' + status);
		    }
		});
		  }
		</script>
	</head>
	<body>
	
		@include('partials.menuOp')
		<div class="row">
			@yield('content')
		</div><!--.content-->

		<!-- BEGIN GLOBAL AND THEME VENDORS -->
		<script src="{{ asset('assets/globals/js/global-vendors.js') }}"></script>
		<!-- END GLOBAL AND THEME VENDORS -->

		<!-- BEGIN PLUGINS AREA -->
		<script src="{{ asset('assets/globals/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/globals/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
		<script src="{{ asset('assets/globals/plugins/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>   <!-- END PLUGINS AREA -->

		<!-- PLUGINS INITIALIZATION AND SETTINGS -->
		<script src="{{ asset('assets/globals/scripts/forms-wizard.js') }}"></script>
		<!-- END PLUGINS INITIALIZATION AND SETTINGS -->

		<!-- PLEASURE -->
		<script src="{{ asset('assets/globals/js/pleasure.js') }}"></script>
		<!-- ADMIN 1 -->
		<script src="{{ asset('assets/admin1/js/layout.js') }}"></script>

		<script>
			$(document).ready(function () {

				var countClicks = 1;

				$('#buttonChange').on('click',function(){
					if(countClicks==1){
				          //If 1st clik open modal just once and initialize the map
				          $('#defaultModal').modal('show');
				          initialize();
				          $('#agree').focus();
				          countClicks++;
				      }else{
				          //if 2nd click geocoder address, this to avoid the Query Limit problem
				          geocodeLatLng();
				      }
				  });

				var isMobile = {
					Android: function() {
						return navigator.userAgent.match(/Android/i);
					},
					BlackBerry: function() {
						return navigator.userAgent.match(/BlackBerry/i);
					},
					iOS: function() {
						return navigator.userAgent.match(/iPhone|iPad|iPod/i);
					},
					Opera: function() {
						return navigator.userAgent.match(/Opera Mini/i);
					},
					Windows: function() {
						return navigator.userAgent.match(/IEMobile/i);
					},
					any: function() {
						return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
					}
				};

				$('#checkbox1').click(function(){
					$('#contactway').toggle();
				});
				$('#checkbox2').click(function(){
					$('#password').toggle();
				});

				movePanelHeading();
				widthName();

				$('.optionnav').hover(function(){
					$(this).css('font-size','15px');
				}, function(){
					$(this).css('font-size','14px');
				});

				$('#buttonChange, #buttonBack').click(function(){
					movePanelHeading();
				});

				$(window).resize(function() {
					movePanelHeading();
					widthName();
				});

				if( isMobile.any() ) {
					$('#showHidePass').click(function(){
						if($(this).attr('action')=='hide'){
							$(this).parent().find('#password').attr('type','text');
							$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
						}else if($(this).attr('action')=='show'){
							$(this).parent().find('#password').attr('type','password');
							$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
						}
					});
				}else{
					$('#showHidePass').mousedown(function(){
						$(this).parent().find('#password').attr('type','text');
						$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
					});
					$('#showHidePass').mouseup(function(){
						$(this).parent().find('#password').attr('type','password');
						$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
					});
				}

				$('input:password').keyup(function(){
					$campo = $(this).val();
					if($campo == ''){
						$('#showHidePass').css('opacity','0');
					}else{
						$('#showHidePass').css({'opacity':'1','cursor':'pointer'});
					}
				});

				function movePanelHeading(){
					setTimeout(function() {
						if($('.panel-heading').height()>58){
							$('#mover').css('margin-top',$('.panel-heading').height()-58);
						}else{
							$('#mover').css('margin-top',0);
						}
					}, 10);
				}

				function widthName(){
					setTimeout(function() {
						$('.fileinput-filename').css('width',$('#prueba').width()-60);
					}, 100);
				}
			});
		</script>

		<!-- BEGIN INITIALIZATION-->
		<script>
			$(document).ready(function () {
				Pleasure.init();
				Layout.init();
				FormsWizard.init();
			});
		</script>

<!-- END INITIALIZATION-->
</body>
</html>