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
   /*      $posts = Post::latest()->get();
        return view('posts/index', ['posts' => $posts]);
 */
        $posts = Post::all();

		return view('posts/index', [
			'posts' => $posts
        ]);
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $posts = Post::all();
        $post = Post::find($id);

        return view('posts.show', [
			'posts' => $posts, 'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts/edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'ingredience' => 'required',
            'category' => 'required',
            'cookingtime' => 'required',
        ]);

        $post->update($request->all());

        return redirect()
            ->route('posts.show', ['post' => $post])
            ->with('success', 'Working!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();

		return redirect()
			->route('posts.index')
			->with('success', 'Succesfully DELETED!');
    }
}
