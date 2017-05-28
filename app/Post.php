<?php

namespace App;


class Post extends Model
{

    public function comments() {

        return $this->hasMany(Comment::class);
    }

    public function addComment() {

        $this->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);
    }

    public function user() {

        return $this->belongsTo(User::class);
    }
}
