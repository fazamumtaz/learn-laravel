@extends('layouts.main')

@section('container')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <h2 class="mb-3">{{ $post->blogTitle }}</h2>
            <h5>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a
                  href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            {!! $post->content !!}

            <a class="d-block mt-5" href="/posts">back to posts</a>
         </div>
      </div>
   </div>
@endsection
