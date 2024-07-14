<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = "jobs_listing";
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