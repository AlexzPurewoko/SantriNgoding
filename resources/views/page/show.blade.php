@extends('layout.master')
@section('title')
  SantriNgoding - Lihat posting
@endsection
@section('konten')
<div class="content">

<div class="row">
  <div class="col-md-8">
    <h1>{{ $post->title }}</h1>
    <p class="lead">
      {{ $post->body }}
    </p>
  </div>

  <div class="col-md-4">
    <div class="well">

      <dl class="dl-horizontal">
        <label><strong>Tanggal dibuat :</strong></label>
        <p>{{ date('H:i M j, Y', strtotime($post->created_at)) }}</p>
      </dl>

      <dl class="dl-horizontal">
        <label><strong>Terakhir diperbarui :</strong></label>
        <p>{{ date('H:i M j, Y', strtotime($post->updated_at)) }}</p>
      </dl>

      <hr>

      <div class="row">
        <div class="col-md-12" style="margin-top: 10px;">
          <a href="{{ url('/') }}" class="btn btn-default btn-block">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
