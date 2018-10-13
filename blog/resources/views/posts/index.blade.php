@extends('layout.default')

@section('title', 'Blog Posts')

@section('content')
<h1>
  <a href="{{url('/posts/create')}}" class="header-menu">New Post</a>
  Blog Posts
</h1>
<ul>
  @foreach ($posts as $post)
  <li>
    <a href="{{ action('PostsController@show', $post) }}">{{$post->title}}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
  </li>
  @endforeach
</ul>
@endsection
