@extends('layouts.main')

@section('container')
   <h1 class="mb-5">{{ $title }}</h1>
   @foreach ($posts as $post)
      <article class="mb-3 border-bottom pb-5">
         <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->blogTitle }}</a></h2>
         {{-- <h5>Article by: {{ $post->author }}</h5> --}}
         <h5>By: <a href="#" class="text-decoration-none">{{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
         </h5>
         <p>{{ $post->content }}</p>

         <a href="/post/{{ $post->slug }}" class="text-decoration-none">read more..</a>
      </article>
   @endforeach
@endsection
