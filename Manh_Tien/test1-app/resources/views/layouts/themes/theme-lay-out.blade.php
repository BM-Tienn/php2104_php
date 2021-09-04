<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Themes Layout</title>

        <!--for mobile app-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                    function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        
        <link href="{{ asset('css/mypage/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/mypage/style.css') }}" rel="stylesheet" type="text/css" media="all" />

        <!-- font-awesome icons -->
        <link href="{{ asset('css/mypage/font-awesome.css') }}" rel="stylesheet"> 
        <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
       
        <!-- js -->
        <script src="{{ asset('js/mypage/jquery-1.11.1.min.js') }}" defer></script>

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="{{ asset('js/mypage/move-top.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/mypage/easing.js') }}" defer></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
    </head>

    <body>
        @include('layouts.themes.my-navigation-header')
        
        <main>
            {{ $slot }}
        </main>
        
        @include('layouts.themes.my-navigation-footer')

        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="{{ asset('js/mypage/bootstrap.min.js') }}" defer></script>
        <!-- top-header and slider -->
        <!-- here stars scrolling icon -->
            <script type="text/javascript">
                $(document).ready(function() {
                    /*
                        var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear' 
                        };
                    */
                                        
                    $().UItoTop({ easingType: 'easeOutQuart' });
                                        
                    });
            </script>
        <!-- //here ends scrolling icon -->
        <script type="text/javascript" src="{{ asset('js/mypage/minicart.min.js') }}" defer></script>

        <script>
            // Mini Cart
            paypal.minicart.render({
                action: '#'
            });

            if (~window.location.search.indexOf('reset=true')) {
                paypal.minicart.reset();
            }
        </script>

        <!-- main slider-banner -->
        <script type="text/javascript" src="{{ asset('js/mypage/skdslider.min.js') }}" defer></script>
        <link href="{{ asset('css/mypage/skdslider.css') }}" rel="stylesheet"> 
        <script type="text/javascript">
                jQuery(document).ready(function(){
                    jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
                                
                    jQuery('#responsive').change(function(){
                    $('#responsive_wrapper').width(jQuery(this).val());
                    });

                });
        </script>	
        <!-- //main slider-banner --> 
        
    </body>
</html>