@extends('layout.master')
@section('title')
  SantriNgoding - Blog
@endsection

@section('konten')

<div class="content">

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    @include('include.article')
  </div>
</div>
<hr>
<div class="text-center">
  {{ $post->links() }}
</div>
</div>
@endsection
