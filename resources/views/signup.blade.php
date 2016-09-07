@extends('layout.master')
@section('title')
Register Page
@endsection

@section('konten')
<!-- Basic layout-->
<!-- Advanced login -->
<form action="{{ route('signup') }}" method="post" class="col-lg12">
  <div class="panel panel-body login-form col-tengah-80">
    <div class="text-center">
      <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
      <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
    </div>

    <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

    <div class="form-group has-feedback has-feedback-left">
      <input type="text" class="form-control" placeholder="Full Name" name="nama" id="nama">
      <div class="form-control-feedback">
        <i class="icon-user-check text-muted"></i>
      </div>
    </div>

    <div class="content-divider text-muted form-group"><span>Your privacy</span></div>

    <div class="form-group has-feedback has-feedback-left">
      <input type="text" class="form-control" placeholder="Your email" name="email" id="email">
      <div class="form-control-feedback">
        <i class="icon-mention text-muted"></i>
      </div>
    </div>

    <div class="form-group has-feedback has-feedback-left">
      <input type="password" class="form-control" placeholder="Create password" name="password" id="password" >
      <div class="form-control-feedback">
        <i class="icon-user-lock text-muted"></i>
      </div>
    </div>

    <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
  </div>
  <input type="hidden" name="_token" value="{{ Session::token() }}">
    {{ csrf_field() }}
</form>
<!-- /advanced login -->
@endsection
