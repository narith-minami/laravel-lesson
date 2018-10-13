<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
      $posts = Post::latest()->get();
      // dd($post->toArray());
      return view('posts.index', ['posts'=>$posts]);
    }

    // public function show($id) {
    //   $post = Post::findOrFail($id);
    //   return view('posts.show', ['post'=>$post]);
    // }

    public function show(Post $post) {
      return view('posts.show', ['post'=>$post]);
    }

    public function create() {
      return view('posts.create');
    }

    public function store(Request $request) {
      $this->validate($request, [
        'title'=>'required|min:3',
        'body'=>'required'
      ]);
      $post = new Post();
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }

    public function edit(Post $post) {
      return view('posts.edit', ['post'=>$post]);
    }
}
