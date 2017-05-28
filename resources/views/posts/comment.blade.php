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