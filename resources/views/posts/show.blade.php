@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>

            <p class="blog-post-meta">
                {{ $post->created_at->toFormattedDateString()}}
                by <a href="#">Mark</a></p>
            <p>
                {{ $post->body }}
            </p>
            <hr>
            <div class="list-group">
                @foreach($post->comments as $comment)
                    <button type="button" class="list-group-item list-group-item-action">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;&nbsp;
                        </strong>
                        {{ $comment->body }}
                    </button>
                @endforeach
            </div>
        </div>


    </div><!-- /.blog-main -->


@endsection