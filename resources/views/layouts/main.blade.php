<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches</title>
@include('layouts.htmlheaders')
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

@section('scripts')
	@include('layouts.scripts')
@show		
</body>
</html>