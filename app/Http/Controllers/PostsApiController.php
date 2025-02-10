<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsApiController extends Controller
{
   
    public function index()
    {
        return Post::all();
    }

    public function store(Request $request)
    {
        return Post::limit(10)->get();
    }

    public function show(Post $post)
    {
        return  new PostResource($post);
    }

    public function update(Request $request, Post $post)
    {
        $post = Post::updated([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'short_content'=>$request->short_content,
            'body'=>$request->body,
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return "deleted post";
    }
}
