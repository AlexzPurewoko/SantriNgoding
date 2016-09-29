<!DOCTYPE html>
<html lang="en">
<head>
	@include('include.head')
</head>

<body>
	@include('include.mainnavbar')

	<div class="container">

		@yield('pageheader')
		<div class="row" style="margin-top:10px;">
			<div class="col-md-10 col-md-offset-1">
				@include('include.message')
			</div>
		</div>

		 @yield('konten')


	</div>

	<div class="page-container">
		@include('include.footer')
	</div>

	@yield('scripts')
</body>
</html>
