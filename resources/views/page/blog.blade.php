@extends('layout.master')
@section('title')
  SantriNgoding - Blog
@endsection

@section('konten')

<div class="content">

<div class="row">
  <div class="col-md-7 col-md-offset-1">
    @include('include.article')
  </div>
  <div class="col-md-3">
    <h1>writer</h1>
  </div>
</div>
</div>
@endsection
