@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">

        <h1>Publish a post</h1>
        <form method="post" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Post title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>

            <div class="form-group">
                <label for="textarea">Post body</label>
                <textarea class="form-control" id="textarea" name="body" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

        </form>

        @include('layouts.errors')

    </div><!-- /.blog-main -->


@endsection