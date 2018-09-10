<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateFormRequest;
use Illuminate\Http\Request;

use App\Post;

use App\Repositories\PostRepository;



class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     *
     *
     * @param PostRepository $posts
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(PostRepository $posts)
    {
        $posts=$posts->all();
        return view('post.index',compact('posts','archives'));
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post','archives'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('post.create', compact('archives'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'

        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
    );

       return redirect('/');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->home();
    }
    public function edit(Post $post)
    {

        return view('post.edit', compact('post'));
    }
    public function update(updateFormRequest $request, Post $post)
    {
//        $pst = Post::find($post);
//        dd($post);

        $post->title = $request->title;
        $post->body = $request->body;
        $post-> user_id = auth()->user()->id;

        $post->save();

        return redirect('/');
    }


}
