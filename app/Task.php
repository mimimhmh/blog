<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Task incomplete()
 * @mixin \Eloquent
 */
class Task extends Model
{
    //
    public static function scopeIncomplete($query){

        return $query->where('completed', 0)->get();
    }
}
