@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">

        <h1>Sign in</h1>
        <form method="post" action="/login">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

        </form>

        @include('layouts.errors')

    </div><!-- /.blog-main -->


@endsection