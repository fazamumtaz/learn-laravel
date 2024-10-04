@extends('layouts.main')

@section('container')
   <h1 class="mb-5">Post Category {{ $name }}</h1>
   @foreach ($posts as $post)
      <h2><a href="/post/{{ $post->slug }}">{{ $post->blogTitle }}</a></h2>
      <h5>Article by: {{ $post->user->name }}</h5>
      <p>{{ $post->content }}</p>
   @endforeach
@endsection