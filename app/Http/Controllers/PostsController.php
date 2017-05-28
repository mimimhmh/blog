<?php

namespace App\Http\Controllers;

use App\Post;


class PostsController extends Controller
{

    public function __construct() {

        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        $posts = Post::latest()->filter(request(['month', 'year']))->get();

        $archives = Post::query()
            ->selectRaw('monthname(`created_at`) as month, year(`created_at`) year, COUNT(*) ')
            ->groupBy(['month', 'year'])
            ->orderByRaw('min(`created_at`) DESC')->get();

        return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post) {

        return view('posts.show', compact('post'));
    }

    public function create() {

        return view('posts.create');
    }

    public function store() {

        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);
        // \Auth::getUser()
        auth()->user()->publish(new Post(request(['title', 'body'])));

        return redirect('/');
    }

}