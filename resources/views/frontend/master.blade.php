
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shop</title>

	{{-- style start --}}
		@include('frontend.includes.style')
	{{-- style end --}}
</head>
<body>
	
	<!--PreLoader-->
  @include('frontend.includes.loader')
    <!--PreLoader Ends-->
	
	<!-- header -->
	@include('frontend.includes.header')
	<!-- end header -->

	<!-- search area -->
	@include('frontend.includes.search')
	<!-- end search arewa -->
	
	{{-- content start --}}

		@yield('content')
	
	{{-- content end --}}

	<!-- footer -->
	@include('frontend.includes.fotter')
	<!-- end footer -->
	
	<!-- copyright -->
	@include('frontend.includes.copyright')
	<!-- end copyright -->
	
	{{-- Script Start --}}
	@include('frontend.includes.script')
	{{-- Script End --}}

</body>
</html>