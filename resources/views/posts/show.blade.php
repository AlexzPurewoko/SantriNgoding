@extends('layout.master')

@section('title')
  SantriNgoding -
@endsection
@section('konten')

<div class="col-md-8">

  <h2>{{ $post->title }}</h2>
  <p class="lead">
  {{ $post->body }}
    </p>
</div>

@endsection
