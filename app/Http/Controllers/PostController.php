<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(10);
        // $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show()
    {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(10);
        // $posts = Post::get();

        return view('posts.show', ['posts' => $posts]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only(['title', 'body']));

        $posts = Post::latest()->with(['user', 'likes'])->paginate(10);
        return view('posts.show', ['posts' => $posts]);
    }

    public function edit(Post $post){
        $this->authorize('edit', $post);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }

    public function showRanked()
    {
        $posts = Post::withCount('likes')
                     ->orderBy('likes_count', 'desc')
                     ->get();

        return view('posts.ranked', compact('posts'));
    }
}
