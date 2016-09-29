<div class="navbar navbar-inverse">
  <div class="navbar-header">
    @if (Auth::guest())
    <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('assets/images/logo_light.png') }}" alt=""></a>
    @else
    <a class="navbar-brand" href="{{ route('blog') }}"><img src="{{ asset('assets/images/logo_light.png') }}" alt=""></a>
    <ul class="nav navbar-nav">
        <li class="{{ Request::is('/about') ? "active" : "" }}"><a href="{{ route('about')}}">Tentang</a></li>
        <li class="{{ Request::is('/contact') ? "active" : "" }}"><a href="{{ route('contact') }}">Kontak</a></li>
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
          <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; potision:absolute; top:10px; margin-right:5px;  border-radius:50%;"/>
          {{ Auth::user()->nama }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('profil') }}">Profil</a></li>
          <li><a href="#">Dashboard</a></li>
          <li><a href="{{ route('posts.index') }}">Posting</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ route('edit', Auth::user()->id) }}">Pengaturan</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ route('logout') }}">Keluar</a></li>
        </ul>
      </li>
	  </ul>
	</div>
  @endif
</div>
</div>
