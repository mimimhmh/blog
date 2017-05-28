<?php

namespace App\Http\Controllers;


use App\Post;

class CommentsController extends Controller
{
    //add comment to a post
    public function store(Post $post)
    {
        $post->addComment();

        return back();
    }
}
