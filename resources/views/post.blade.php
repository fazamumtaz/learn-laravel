@extends('layouts.main')

@section('container')
      <h2>{{ $post["blogTitle"] }}</h2>
      <h5>By: {{ $post["author"] }}</h5>
      <p>{{ $post["content"] }}</p>

   <a href="/posts">back to posts</a>
@endsection