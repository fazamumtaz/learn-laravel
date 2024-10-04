@extends('layouts.main')

@section('container')
   <h1 class="mb-5">{{ $title }}</h1>
   @if ($posts->count())
      <div class="card mb-3 text-center">
         <div class="card-body">
            <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}"
                  class="text-decoration-none text-dark">{{ $posts[0]->blogTitle }}</a></h3>
            <small class="text-body-secondary">
               <p class="card-text">{{ $posts[0]->created_at->diffForHumans() }} by <a
                     href="/authors/{{ $posts[0]->user->id }}" class="text-decoration-none">{{ $posts[0]->user->name }} </a>
                  in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
               <p class="card-text"><a href="/post/{{ $posts[0]->slug }}" class="btn btn-danger">Read more</a></p>
            </small>
         </div>
      </div>
   @else
      <p class="text-center fs-4">No post found.</p>
   @endif
{{-- 
   @foreach ($posts->skip(1) as $post)
      <article class="mb-3 border-bottom pb-5">
         <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->blogTitle }}</a></h2>
         <h5>By: <a href="/authors/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }} </a> in <a
               href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
         </h5>
         <p>{{ $post->content }}</p>

         <a href="/post/{{ $post->slug }}" class="text-decoration-none">read more..</a>
      </article>
   @endforeach --}}

   <div class="container">
      <div class="row">
         @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
               <div class="card mb-3">
                  <div class="card-body">
                     <a href="/categories/{{ $post->category->name }}" class="badge text-bg-primary mb-3 text-decoration-none p-2 ">{{ $post->category->name }}</a>
                     <h5 class="card-title mb-2">{{ $post->blogTitle }}</h5>
                     <small class=" d-block card-subtitle mb-2 text-body-secondary mb-4">By: <a href="/authors/{{ $post->user->id }}"
                           class="text-decoration-none">{{ $post->user->name }} </a>{{ $post->created_at->diffForHumans() }}</small>
                     <a href="/post/{{ $post->slug }}" class="btn btn-danger">Read more</a>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
@endsection
