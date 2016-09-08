@extends('.layout.master')
@section('title')
Dashboard Page
@endsection
@section('pageheader')
  @include('include.pageheader')
@endsection
@section('nav-right')
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      {{ Auth::user()->nama }} <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li>
        <a href="{{ route('logout') }}">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </li>
@endsection
@section('konten')
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr class="bg-blue">
            <th>Full Name</th>
            <th>Email</th>
            <th><i class="icon-gear position-left"></i>Settings</th>
          </tr>
        </thead>
        @foreach($data as $user)
          <tbody>
            <tr>
              <td>{{ $user->nama }}</td>
              <td>{{ $user->email }}</td>
            </tr>
          </tbody>
        @endforeach
      </table>
    </div>
  </div>
@endsection
