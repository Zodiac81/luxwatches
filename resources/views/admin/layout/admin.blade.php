<!DOCTYPE html>
<html>
<head>
    <title>Панель администратора</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css') }}">
	
	<style>
	.bg-img{
		background-image:url('/public/assets/images/05.png');
	}
	</style>
</head>
<body>
@include('admin.layout.includes.header')
<div class="page-content bg-img">
    @include('layouts.messages')
    <div class="row">
        @include('admin.layout.includes.sidenav')
        <div class="col-md-9 display-area">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{asset('assets/images/logo_265x145.png')}}" alt="logoImg"></a>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"> </script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"> </script>
<script src="{{asset('assets/js/dataTables.bootstrap.min.js')}}"> </script>
<script src="{{asset('assets/js/dataTables.responsive.min.js')}}"> </script>
<script src="{{asset('assets/js/dataTables.foundation.js')}}"> </script>
<script src="{{asset('assets/js/responsive.bootstrap.min.js')}}"> </script> 
{{-- <script src="https://code.jquery.com/jquery.js"></script>
{{-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> --}}
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>
<!-- DataTab -->
<script>

	$(document).ready(function () {
        $('#tbproduct').DataTable(
            {"bPaginate": true});
    });
	
	$(document).ready(function () {
        $('#tbmessage').DataTable(
            {"bPaginate": true});
    });

</script>

 <script>

    $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
		e.preventDefault();
		var $form=$(this);
		$('#confirm').modal({ backdrop: 'static', keyboard: false })
			.on('click', '#delete-btn', function(){
            $form.submit();
        });
	});

</script>

<script>

	$('table[data-form="tbmessage"]').on('click', '.message-delete', function(e){
		e.preventDefault();
		var $form=$(this);
		$('#deleteMess').modal({ backdrop: 'static', keyboard: false })
			.on('click', '#deleteMess-btn', function(){
				$form.submit();
			});
	});

</script>

<script>

//Mail

    $(".readMessage").on('click', function(){
	    $('#message').modal({ backdrop: 'static', keyboard: false })
    });

</script>


</body>
</html>