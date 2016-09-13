<!-- Main navbar -->
<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo_light.png') }}" alt=""></a>

    <ul class="nav navbar-nav visible-xs-block">
      <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
      <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
    </ul>
  </div>

  <div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
					@yield('nav-right')
			</ul>
		</div>
</div>
<!-- /main navbar -->
