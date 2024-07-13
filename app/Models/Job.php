<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "Blogs";
    protected $fillable = ['title', 'body'];

    public static function findBlog($id)
    {
        $hold = static::find($id);
        if ($hold) {
            return true;
        } else {
            abort(404);
        }
    }
}