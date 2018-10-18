@extends('layout.default')

@section('title', 'Blog Posts')

@section('content')
<h1>
  <a href="{{url('/posts/create')}}" class="header-menu">New Post</a>
  Blog Posts
</h1>
<div>
  @foreach ($posts as $post)
  <div class="blog-item">
    <p class="blog-created">{{$post->created_at}}</p>
    <a class="blog-title" href="{{ action('PostsController@show', $post) }}">{{$post->title}}</a>
    <div class="blog-body">{{$post->body}}</div>
    <!-- <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a> -->
    <!-- <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
    <form id="form_{{ $post->id }}" method="post" action="{{ url('/posts', $post->id) }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form> -->
  </div>
  @endforeach
</div>
<script src="/js/main.js"></script>
@endsection
