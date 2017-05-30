@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>

            <p class="blog-post-meta">
                {{ $post->created_at->toFormattedDateString()}}
                by <a href="#">{{ $post->user->name }}</a>
            </p>

            @if(count($post->tags))
            <ul>
                @foreach($post->tags as $tag)
                <li>
                    <a href="/posts/tags/{{ $tag->name }}">
                        {{ $tag->name }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif

            <p>
                {{ $post->body }}
            </p>
            <hr>
            <div class="list-group">
                @foreach($post->comments as $comment)
                    <button type="button" class="list-group-item list-group-item-action">
                        <strong>
                            {{ $comment->user->name }}
                            &nbsp; at
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;&nbsp;
                        </strong>
                        {{ $comment->body }}
                    </button>
                @endforeach
            </div>
        </div>
        @include('posts.comment')

        @include('layouts.errors')

    </div><!-- /.blog-main -->


@endsection