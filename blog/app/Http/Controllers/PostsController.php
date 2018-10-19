<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

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

    public function filter($category) {
      $posts = Post::latest()->where('category_id', $category)->get();
      return view('posts.index', ['posts'=>$posts]);
    }

    public function store(PostRequest $request) {
      $post = new Post();
      $post->title = $request->title;
      $post->body = $request->body;
      $post->category_id = $request->category_id;
      $post->save();
      return redirect('/');
    }

    public function update(PostRequest $request, Post $post) {
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }

    public function edit(Post $post) {
      return view('posts.edit', ['post'=>$post]);
    }

    public function destroy(Post $post) {
      $post->delete();
      return redirect('/');
    }
}
