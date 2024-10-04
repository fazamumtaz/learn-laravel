@extends('layouts.main')

@section('container')
      <h2 class="mb-3">{{ $post->blogTitle }}</h2>
      <h5>By: {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
      {!! $post->content !!}

   <a class="d-block mt-5" href="/posts">back to posts</a>
@endsection