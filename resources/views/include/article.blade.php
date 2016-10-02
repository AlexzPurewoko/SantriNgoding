@foreach($post as $post)
 <div class="panel panel-flat">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <article>
          <h4 style="color: black;">{{ $post->title }}</h4>
            <p> Posted on <font style="color: #00BFA5">{{ date('M j, Y', strtotime($post->created_at)) }} </font></p>
          <hr>
          <h6>
            {!! substr(strip_tags($post->body), 0, 200) !!} {{ strlen(strip_tags($post->body)) > 200 ? "..." : "" }}
            @if(Auth::guest())
              <a href="{{ route('show-article', $post->id) }}">Read More &rarr;</a>
              @else
                <a href="{{ route('posts.show', $post->id) }}">Read More &rarr;</a>
            @endif
          </h6>
        </article>
      </div>
    </div>
  </div>
</div>
@endforeach
