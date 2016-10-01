@extends('layout.master')
  @section('title')
    SantriNgoding - Ganti foto
  @endsection
  @section('konten')
    <div class="content">
      <div class="row">

  		<div class="col-md-10 col-md-offset-1">
  			<img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px" alt="" />
  			<h2>{{ Auth::user()->nama }}'s Profil</h2>
  			<form enctype="multipart/form-data" action="/profil" method="post">
  				<label>Perbarui gambar profil</label>
  				<input type="file" name="avatar">
  				<input type="hidden" name="_token" value="{{ csrf_token() }}">
  				<input type="submit" class="pull-right btn btn-sm btn-primary">
  			</form>
  		</div>
    </div>
<hr>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
  			<img src="/uploads/cover/{{ Auth::user()->cover }}" style="width:1000px; height:400px;"/>
  			<form enctype="multipart/form-data" action="{{ route('cover') }}" method="post">
  				<label>Perbarui cover profil</label>
  				<input type="file" name="cover">
  				<input type="hidden" name="_token" value="{{ csrf_token() }}">
  				<input type="submit" class="pull-right btn btn-sm btn-primary">
  			</form>
  		</div>
    </div>
  	</div>
  @endsection
