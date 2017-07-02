<!--start-logo-->
	<div class="logo">
		<a href="{{ route('home') }}"><img src="{{asset('assets/images/logo_265x145.png')}}" alt="logoImg"></a>
	</div>

	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
			@if($menu)
				<div class="top-nav">
				    <ul class="memenu skyblue">

		@include('site-template.menu.customMenuItems',['items'=>$menu->roots(),])

					</ul>
				</div>

			@endif
				
			  <div class="clearfix"> </div>
			</div>
			
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->

	
