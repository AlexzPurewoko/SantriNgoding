@extends('layout.master')
@section('title')
  SantriNgoding - Create new post
@endsection

@section('konten')
  <div class="row">
    <div class="col-md-8 col-md-offset-2 ">
      <h1>Create new Post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
        {{ Form::label('title', 'Title : ') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'required' => '']) }}

        {{ Form::label('body', 'Body : ') }}
        <div id="summernote"><p>Hello Summernote</p></div>
        <script>
          $(document).ready(function() {
              $('#summernote').summernote();
          });
        </script>
        {{ Form::submit('Create Post', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:20px;']) }}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
