<?php

namespace App\Models;

class Blog
{
    public static function all()
    {
        return [
            [
                'id' => 0,
                'title' => 'Blog Post 1',
                'body' => 'This is the body of the blog post 1',
            ],
            [
                'id' => 1,
                'title' => 'Blog Post 2',
                'body' => 'This is the body of the blog post 2',
            ]
        ];
    }

    public static function findBlog($id)
    {
        $blogId = [];
        foreach (static::all() as $g) {
            $blogId[] = $g['id'];
        }

        if (in_array($id, $blogId)) {
            return true;
        } else {
            abort(404);
        }
    }
}