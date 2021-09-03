<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches </title>
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

	<!--bottom-header-->
	<x-bottom_header/>
	<!--bottom-header-->

	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<img src="{{asset('images/bnr-1.jpg')}}"alt=""/>
				</li>
				<li>
					<img src="{{asset('images/bnr-2.jpg')}}" alt=""/>
				</li>
				<li>
					<img src="{{asset('images/bnr-3.jpg')}}" alt=""/>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 

	<!--Slider-Starts-Here-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		// Slideshow 4
		$("#slider4").responsiveSlides({
		auto: true,
		pager: true,
		nav: true,
		speed: 500,
		namespace: "callbacks",
		before: function () {
			$('.events').append("<li>before event fired.</li>");
		},
		after: function () {
			$('.events').append("<li>after event fired.</li>");
		}
		});

	});
	</script>
	<!--End-slider-script-->

	<!--about-starts-->
	<div class="about"> 
		<div class="container">
			<div class="about-top grid-1">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="{{asset('images/abt-1.jpg')}}" alt=""/>
						<figcaption>
							<h2>Nulla maximus nunc</h2>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>	
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="{{asset('images/abt-2.jpg')}}" alt=""/>
						<figcaption>
							<h4>Mauris erat augue</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>	
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="{{asset('images/abt-3.jpg')}}" alt=""/>
						<figcaption>
							<h4>Cras elit mauris</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>	
						</figcaption>			
					</figure>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->

	<!--product-starts-->
	<x-product_home/>
	<!--product-end-->

	<!--information-starts-->
	<x-footer_area/>
	<!--information-end-->

	<!--footer-starts-->
	<x-footer/>
	<!--footer-end-->	
</body>
</html>