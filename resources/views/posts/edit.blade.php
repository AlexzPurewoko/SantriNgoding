@extends('layout.master')
@section('title')
  SantriNgoding - Edit posting 
@endsection
@section('konten')
<div class="content">
    <div class="row">
    {!! Form::model($posts, ['route' => ['posts.update', $posts->id], 'method' => 'PUT' ]) !!}
    <div class="col-md-8">
      {{ Form::label('title', 'Judul') }}
      {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

      {{ Form::label('slug', 'Slug', ['class' => 'form-spacing-top']) }}
      {{ Form::text('slug', null, ['class' => 'form-control']) }}

      {{ Form::label('body', 'Konten', ['class' => 'form-spacing-top']) }}
      {{ Form::textarea('body', null, ['class' => 'form-control']) }}


    </div>
    <div class="col-md-4" style="margin-top: 25px;">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Tanggal dibuat :</dt>
          <dd>{{ date('H:i M j, Y', strtotime($posts->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Terakhir diperbarui :</dt>
          <dd>{{ date('H:i M j, Y', strtotime($posts->updated_at)) }}</dd>
        </dl>

        <hr>
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'Batal', [$posts->id], ['class' => 'btn btn-danger btn-block']) !!}
          </div>

          <div class="col-sm-6">
            {{ Form::submit('Simpan perubahan', ['class' => 'btn btn-success btn-block']) }}
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div> <!-- end of .row -->
</div>
@endsection
