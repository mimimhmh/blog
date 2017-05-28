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
                            {{ auth()->user()->name }}
                            &nbsp; at
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;&nbsp;
                        </strong>
                        {{ $comment->body }}
                    </button>
                @endforeach
            </div>
        </div>

        @if(auth()->check())
        <div class="card">
            <div class="card-header">
                Add a comment
            </div>
            <div class="card-block">
                <form method="post" action="/posts/{{ $post->id }}/comment">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" id="textarea" name="body" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
        @endif

        @include('layouts.errors')

    </div><!-- /.blog-main -->


@endsection