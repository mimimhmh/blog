<?php

namespace App\Http\Controllers;


use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag) {

        $posts = $tag->posts()->paginate(5);

        return view('posts.index', compact('posts'));
    }
}
