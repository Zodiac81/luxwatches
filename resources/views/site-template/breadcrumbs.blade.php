<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li class="active"><a href="{{route('home')}}">Главная</a></li>
				@if( $breadcrumbs )	
					<li>{{ $breadcrumbs }}</li>
				@endif
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->