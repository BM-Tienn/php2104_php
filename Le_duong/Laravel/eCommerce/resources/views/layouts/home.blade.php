<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches</title>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"/>

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="{{asset('js/jquery.easydropdown.js')}}"></script>			
</head>
<body> 
	<!--top-header-->
	<x-top_header/>
	<!--top-header-->

	<!--start-logo-->
	<x-logo/>
	<!--start-logo-->

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="{{url('/')}}">Home</a></li>
					<li class="active">@yield('name')</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!-- start-content -->
	@yield('content')
	<!-- start-content -->

	<!--information-starts-->
	<x-footer_area/>
	<!--information-end-->

	<!--footer-starts-->
	<x-footer/>
	<!--footer-end-->	
</body>
</html>