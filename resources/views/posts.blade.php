
@extends('layouts.main')

@section('container')
   <h1 class="mb-5">Halaman Posts</h1>
   @foreach ($posts as $post)
      <h2><a href="/post/{{ $post->slug }}">{{ $post->blogTitle }}</a></h2>
      <h5>Article by: {{ $post->author }}</h5>
      <p>{{ $post->content }}</p>
   @endforeach
@endsection