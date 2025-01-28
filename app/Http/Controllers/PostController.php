<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Support\Facades\DB as FacadesDB;

class PostController extends Controller
{
    public function index()
    {

        // $posts = DB::table('post')->get(); //
        $posts = Post::all();

        return view('posts.index')->with([
            "posts"=>$posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {

        if($request->hasFile('photo')){
            $name = $request->file('photo')->getClientOriginalName();
            $path= $request->file('photo')->storeAs('post-photos', $name);
        }
        // dd($path);
        $post = Post::create([
            'title'=> $request->title,
            'short_content'=> $request->short_content,
            'body'=> $request->body,
            'photo'=> $path,
        ]);

        return to_route('posts.index');
    }

    public function show(Post $post)
    {
        // $post = Post::find($id);
        // dd($post);
        return view('posts.show')->with(['post'=>$post]);
    }

    public function edit(Post $post)
    {
        // dd($post);
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(StorePostRequest $request, Post $post)

    {
        if($request->hasFile('photo')){
            if(isset($post->photo)){
                Storage::delete($post->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path= $request->file('photo')->storeAs('post-photos', $name);
        }

        $post->update([
            'title'=> $request->title,
            'short_content'=> $request->short_content,
            'body'=> $request->body,
            'photo'=> $path ?? $post->photo,
        ]);

        // dd($post);
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy(Post $post)
    {
        dd($post);
        return to_route('posts.index');
    }
}
