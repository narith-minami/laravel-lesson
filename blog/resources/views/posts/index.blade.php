@extends('layout.default')

@section('title', 'My Note')

@section('content')
<h1>
  <a href="{{url('/posts/create')}}" class="header-menu">New Post</a>
  My Note
</h1>
<div>
  <div class="top-category">
    <category-link v-bind:selected_category="{{ $select_category }}"></category-link>
  </div>
  <blog-list v-bind:posts="{{ $posts }}"></blog-list>
</div>
@endsection
