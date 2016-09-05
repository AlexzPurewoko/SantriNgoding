<!DOCTYPE html>
<html lang="en">
<head>
	@include('include.head')
</head>

<body>

	<!-- Main navbar -->
		@include('include.mainnavbar')
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
				@yield('mainsidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
					@yield('pageheader')
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						@yield('konten')

					</div>
					<!-- /main charts -->

					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">

						</div>

						<div class="col-lg-4">

						</div>
					</div>
					<!-- /dashboard content -->

					<!-- Footer -->
					@include('include.footer')
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
