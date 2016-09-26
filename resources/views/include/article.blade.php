<div class="panel panel-flat">
  <div class="panel-heading">
    @foreach($post as $post)

    <h2>{{ $post->title }}</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <article>
          <p style="margin-left: 40px; margin-bottom: 40px;">
            {{ $post->body }}
          </p>
          <a href="{{ route('posts.show', $post->id ) }}">Read More &rarr;</a>
        </article>
      </div>
    </div>
  @endforeach
  </div>
</div>
