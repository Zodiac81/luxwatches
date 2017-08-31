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
					<ul class="memenu skyblue">
						<li class="grid">
							<a href="{{route('home')}}">Главная</a>
						</li>
						<li class="grid">
							<a href="{{route('')}}">Каталог</a>
						</li>
						<li class="grid">
							<a href="{{route('home')}}">Блог</a>
						</li>
						<li class="grid">
							<a href="{{route('contact')}}">Обратная связь</a>
						</li>
					</ul>
			{{--@if($menu)
				<div class="top-nav">
				    <ul class="memenu skyblue">

		@include('site-template.menu.customMenuItems',['items'=>$menu->roots(),])

					</ul>
				</div>

			@endif--}}
				
			  <div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->

	
