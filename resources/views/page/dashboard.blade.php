@extends('layout.master')
@section('title')
Dashboard Page
@endsection
@section('konten')
  @include('include.pageheader')
  <div class="row">
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
    <div class="col-md-12">
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

                </td>
              </tr>
            </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
