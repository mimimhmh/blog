<?php

namespace App\Repositories;


use App\Post;

class Posts
{

    public function all() {

        //Can be injected to Controller.
        return Post::all();
    }
}