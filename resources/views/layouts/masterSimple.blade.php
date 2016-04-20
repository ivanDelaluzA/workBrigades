<!DOCTYPE html>
<html>
<head>
	<title>contacts - @yield('title')</title>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

</head>

	<body>
		@include('partials.menuOp')
		<div class="container-fluid">
			<div class="row">

				@yield('content')
			</div>
		</div>

		<script type="text/javascript" src=" {{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/select2.full.min.js') }}"></script>



		<script type="text/javascript">
			$(document).ready(function()
			{
				$(".js-example-basic-single").select2();
			});
		</script>
	</body>
</html>