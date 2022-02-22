<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $posts = Post::latest()->get();
        return view('posts/index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = New Post;
        $post->title = request('title');
        $post->description = request('description');
        $post->ingredience = request('ingredience');
        $post->category = request('category');
        $post->cookingtime = request('cookingtime');
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts/show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function edit(PostController $postController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostController $postController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostController $postController)
    {
        //
    }
}
