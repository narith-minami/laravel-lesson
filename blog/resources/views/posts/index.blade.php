@extends('layout.default')

@section('title', 'My Note')

@section('content')
<h1>
  <a href="{{url('/posts/create')}}" class="header-menu">New Post</a>
  My Note
</h1>
<div>
  <div class="top-category">
    @if ($select_category === '0')
    <a class="category-link selected" href="{{ url('/') }}">ホーム</a>
    @else
    <a class="category-link" href="{{ url('/') }}">ホーム</a>
    @endif

    @if ($select_category === '1')
    <a class="category-link selected" href="{{ action('PostsController@filter', 1) }}">日記</a>
    @else
    <a class="category-link" href="{{ action('PostsController@filter', 1) }}">日記</a>
    @endif

    @if ($select_category === '2')
    <a class="category-link selected" href="{{ action('PostsController@filter', 2) }}">プログラミング</a>
    @else
    <a class="category-link" href="{{ action('PostsController@filter', 2) }}">プログラミング</a>
    @endif

    @if ($select_category === '3')
    <a class="category-link selected" href="{{ action('PostsController@filter', 3) }}">その他</a>
    @else
    <a class="category-link" href="{{ action('PostsController@filter', 3) }}">その他</a>
    @endif
  </div>

  <blog-list v-bind:posts="{{ $posts }}"></blog-list>
</div>
<script src="/js/main.js"></script>
@endsection
