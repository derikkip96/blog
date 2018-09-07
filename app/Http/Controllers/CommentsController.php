<?php

namespace App\Http\Controllers;


use App\Post;
use App\Comment;

class CommentsController extends Controller
{

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Post $post)
    {
        $this->validate(request(),  [
            'body' => 'required'
            ]
        );

        auth()->user()->addComment( new Comment([
                'body' => request('body'),
                'post_id' => $post->id ])
        );

        return back();
    }

}
