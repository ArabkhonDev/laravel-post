<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Support\Facades\DB as FacadesDB;

class PostController extends Controller
{
    public function index()
    {
        
        // $posts = DB::table('posts')->latest()->paginate(9); //
        $posts = Post::latest()->paginate(6);

        return view('posts.index')->with([
            "posts" => $posts,
           
        ]);
    }

    public function create()
    {
        return view('posts.create')->with([
            'categories'=> Category::all(),
            'tags'=> Tag::all(),

        ]);
    }

    public function store(StorePostRequest $request)
    {
        // dd($request);
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);
        }
   
        $post = Post::create([
            'title' => $request->title,
            'user_id'=> 1,
            'tags'=> [],
            'category_id'=>$request->category_id,
            'short_content' => $request->short_content,
            'body' => $request->body,
            'photo' => $path ?? null,
        ]);

        if(isset($request->tags)){
            foreach ($request->tags as $tag ) {
                $post->tags()->sync($tag);
                dd($tag);
                
            }
        }

        return to_route('posts.index');
    }

    public function show(Post $post)
    {
        // $post = Post::find($id);
        return view('posts.show', [
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(3),
            'categories'=> Category::all(),
            'tags'=> Tag::all(),
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(StorePostRequest $request, Post $post)

    {
        if ($request->hasFile('photo')) {
            if (isset($post->photo)) {
                Storage::delete($post->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);
        }

        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'body' => $request->body,
            'photo' => $path ?? $post->photo,
        ]);

        // dd($post);
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy(Post $post)
    {
        if ($post->photo) {
            Storage::delete($post->photo);
        }
        $post->delete();
        return to_route('posts.index');
    }
}
