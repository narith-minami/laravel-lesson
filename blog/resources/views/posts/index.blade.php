@extends('layout.default')

@section('title', 'My Note')

@section('content')
<h1>
  <a href="{{url('/posts/create')}}" class="header-menu">New Post</a>
  My Note
</h1>
<div>
  <div "top-category">
    <a class="home" href="{{ url('/') }}">ホーム</a>
    <a class="category-link" href="{{ action('PostsController@filter', 1) }}">日記</a>
    <a class="category-link" href="{{ action('PostsController@filter', 2) }}">プログラミング</a>
    <a class="category-link" href="{{ action('PostsController@filter', 3) }}">その他</a>
  </div>
  @foreach ($posts as $post)
  <div class="blog-item">
    @if ($post->category_id === '1')
    <p class="blog-category dairy">日記</p>
    @elseif ($post->category_id === '2')
    <p class="blog-category programing">プログラミング</p>
    @elseif ($post->category_id === '3')
    <p class="blog-category other">その他</p>
    @endif
    <p class="blog-created">{{$post->created_at}}</p>
    <a class="blog-title" href="{{ action('PostsController@show', $post) }}">{{$post->title}}</a>
    <div class="blog-body">{!! nl2br(e($post->body)) !!}</div>
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
