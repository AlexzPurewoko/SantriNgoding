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
  @if(Session::has('update'))
    <div class="alert alert-success" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      {!! Session::get('update') !!}
    </div>
  @endif
  @if(Session::has('deletemsg'))
    <div class="alert alert-success" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      {!! Session::get('deletemsg') !!}
    </div>
  @endif
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
              <td>
                <a href="{{ route('edit', $user->id) }}" class="btn-warning btn"><i class="glyphicon glyphicon-pencil"></i></a>

                <a href="{{ route('delete', $user->id) }}"  class="btn-warning btn"><i class="glyphicon glyphicon-trash"></i></a>

                {{-- <form class="" action="{{ route('delete', $user->id) }}" method="post">{{ method_field('post') }}

                 <button type="submit" class="btn-primary btn"><i class="glyphicon glyphicon-pencil"></i></button>
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                  {{ csrf_field() }}
                </form>
                <form class="potition-right" action="{{ route('delete', $user->id) }}" method="post">{{ method_field('Delete') }}
                   <input type="hidden" name="_token" value="{{ Session::token() }}">
                   {{ csrf_field() }}
                   <button type="submit" class="btn-primary btn"><i class="glyphicon glyphicon-trash"></i></button>
						    </form> --}}
              </td>
            </tr>
          </tbody>
        @endforeach
      </table>
    </div>
  </div>
@endsection
