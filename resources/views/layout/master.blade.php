<!DOCTYPE html>
<html lang="en">
<head>
	@include('include.head')
</head>

<body>
	@include('include.mainnavbar')

	<div class="container">

		@yield('pageheader')


		 @yield('konten')


	</div>
	<div class="page-container">
		@include('include.footer')
	</div>
</body>
</html>
