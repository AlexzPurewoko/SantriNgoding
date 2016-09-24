<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="{{ route('blog') }}"><img src="{{ asset('assets/images/logo_light.png') }}" alt=""></a>
    @if (Auth::guest())
    @else
    <ul class="nav navbar-nav">
        <li class="{{ Request::is('/about') ? "active" : "" }}"><a href="{{ route('about')}}">About</a></li>
        <li class="{{ Request::is('/contact') ? "active" : "" }}"><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav visible-xs-block">
      <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
      <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
    </ul>
   </div>

  <div class="navbar-collapse collapse" id="navbar-mobile">
	  <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          {{ Auth::user()->nama }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Profil</a></li>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Posts</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Settings</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </li>
	  </ul>
	</div>
  @endif
</div>
</div>
