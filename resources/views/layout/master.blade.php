<!DOCTYPE html>
<html lang="en">
<head>
	@include('include.head')
</head>

<body>
	@include('include.mainnavbar')

	<div class="container">

		@yield('pageheader')
		@include('include.message')
		
		 @yield('konten')


	</div>

	<div class="page-container">
		@include('include.footer')
	</div>

	@yield('scripts')
</body>
</html>
