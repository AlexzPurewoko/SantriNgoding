@extends('layout.master')
@section('title')
  SantriNgoding - Create new post
@endsection

@section('konten')
  <div class="row">
    <div class="col-md-8 col-md-offset-2 ">
      <h1>Create new Post</h1>
      <hr>

      {{-- <form class="" action="{{ route('posts.store') }}" method="post">
        <label>Title :</label>
        <input type="text" name="text" class="form-control" value="">

        <label>Body :</label>

        <div id="summernote"></div>
        <script>
         $(document).ready(function() {
             $('#summernote').summernote();
         });
         </script>

      </form> --}}
      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
        {{ Form::label('title', 'Title : ') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'required' => '']) }}

        {{ Form::label('body', 'Body : ') }}
        {{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Write your article here...', 'required' => '','id' => 'editor-full' ]) }}

        {{ Form::submit('Create Post', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:20px;']) }}
      {!! Form::close() !!}
    </div>
  </div>



@endsection
