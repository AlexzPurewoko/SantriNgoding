@extends('layout.master')
@section('title')
  SantriNgoding - Post Dashboard
@endsection
@section('konten')
  <div class="row">
    <div class="col-md-10">
      <h1 style="margin-left: 10px;">Semua posting</h1>
    </div>
    <div class="col-md-2">
      {!! Html::linkRoute('posts.create', 'Buat posting baru', [null], ['class' => 'btn btn-lg btn-block btn-warning', 'style' => 'margin-top:20px;']) !!}
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-condensed">
        <thead>
          <th> # </th>
          <th>Judul</th>
          <th>Konten</th>
          <th>Tanggal dibuat</th>
          <th></th>
        </thead>
        <tbody>
          @foreach($posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? "..." : "" }}</td>
              <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
              <td>
                <a href="{{ route('posts.destroy', $post->id) }}"  class="btn-primary btn"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn-info btn"><i class="glyphicon glyphicon-pencil"></i></a>
              </td>
            </tr>
            <tr></tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        {!! $posts->links() !!}
      </div>
    </div>
  </div>
@endsection
