@extends('layout.master')
@section('title')
Register Page
@endsection

@section('konten')
<!-- Basic layout-->
<div class="col-tengah-80">
  <form action="#" class="form-horizontal" method="post">
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Register</h5>
      </div>

      <div class="panel-body">
        <div class="form-group">
          <label class="col-lg-3 control-label">Nama</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Password</label>
          <div class="col-lg-9">
            <input class="form-control" type="password">
          </div>
        </div>

        <div class="text-right">
          <button type="submit" class="btn btn-primary">Register<i class="icon-arrow-right14 position-right"></i></button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- /basic layout -->
@endsection
