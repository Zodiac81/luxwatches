<script src="https://js.stripe.com/v3/"></script>
<script src="https://use.fontawesome.com/fc9b7797b0.js"></script>
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('assets/js/bootstrap.js')}}"> </script>
<!--start-menu-->
<script src="{{asset('assets/js/simpleCart.min.js')}}"> </script>
<script type="text/javascript" src="{{asset('assets/js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="{{asset('assets/js/jquery.easydropdown.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<!-- Payment -->
<script src="{{asset('assets/js/payment.js')}}"></script>

<!-- Drop menu -->
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

<!--Raiting-starts-->
<script type="text/javascript">
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "Armani")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
</script>

<!-- FlexSlider -->

<!-- Scripts -->
		
		<script src="{{asset('assets/js/imagezoom.js')}}"></script>
		<script defer src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
		<link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}" type="text/css" media="screen" />	

				<script>
						
					$(window).load(function() {
						$('.flexslider').flexslider({
						  animation: "slide",
						  controlNav: "thumbnails"
					    });
					});
					
				</script>		
<!-- /FlexSlider -->