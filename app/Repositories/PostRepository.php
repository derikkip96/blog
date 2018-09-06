<?php

namespace App\Repositories;

use App\Post;

class PostRepository

{
    public function  all()
    {
        return Post::filter(request()->only(['month', 'year']))->get();;
    }
}