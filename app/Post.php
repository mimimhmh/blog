<?php

namespace App;


class Post extends Model
{

    public function comments() {

        return $this->hasMany(Comment::class);
    }

    public function addComment() {

        $this->comments()->create([
            'body' => request('body')
        ]);
    }
}
