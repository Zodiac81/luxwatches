<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Cuprum');
</style>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://use.fontawesome.com/fc9b7797b0.js"></script>
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" /><link href="{{asset('assets/css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive" />
</head>
<body> 

 @yield('header')

 @yield('menu')

 @yield('breadcrumbs')

 @yield('slyder')

 <div class="prdt"> 
	<div class="container">
		<div class="prdt-top">

 @yield('sidebar')

 @yield('content')

		</div>
	</div>
</div>
 

 @yield('footer')





<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('assets/js/bootstrap.js')}}"> </script>
<!--start-menu-->
<script src="{{asset('assets/js/simpleCart.min.js')}}"> </script>
<script type="text/javascript" src="{{asset('assets/js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="{{asset('assets/js/jquery.easydropdown.js')}}"></script>
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>


			
</body>
</html>
