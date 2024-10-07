@extends('layouts.main')

@section('container')
   <h1 class="mb-3 text-center">{{ $title }}</h1>

   {{-- Search Input --}}
   <div class="row justify-content-center">
      <div class="col-md-6">
         <form action="/posts">
            {{-- Menahan URL dari pencarian sebelumnya --}}
            @if (request('category'))
               <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
               <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            {{-- end --}}
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Search.." name="search"
                  value="{{ request('search') }}">
               <button class="btn btn-danger" type="submit">Search</button>
            </div>
         </form>
      </div>
   </div>

   {{-- Newest Post --}}
   @if ($posts->count())
      <div class="card mb-3 text-center">
         <div class="card-body">
            <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}"
                  class="text-decoration-none text-dark">{{ $posts[0]->blogTitle }}</a></h3>
            <small class="text-body-secondary">
               <p class="card-text">{{ $posts[0]->created_at->diffForHumans() }} by <a
                     href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}
                  </a>
                  in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
               <p class="card-text"><a href="/post/{{ $posts[0]->slug }}" class="btn btn-danger">Read more</a></p>
            </small>
         </div>
      </div>

      {{-- Other Posts --}}
      <div class="container">
         <div class="row">
            @foreach ($posts->skip(1) as $post)
               <div class="col-md-4">
                  <div class="card mb-3">
                     <div class="card-body">
                        <a href="/posts?category={{ $post->category->slug }}"
                           class="badge text-bg-primary mb-3 text-decoration-none p-2 ">{{ $post->category->name }}</a>
                        <h5 class="card-title mb-2">{{ $post->blogTitle }}</h5>
                        <small class=" d-block card-subtitle mb-2 text-body-secondary mb-4">By: <a
                              href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}
                           </a>{{ $post->created_at->diffForHumans() }}</small>
                        <a href="/post/{{ $post->slug }}" class="btn btn-danger">Read more</a>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
      </div>
   @else
      <p class="text-center fs-4">No post found.</p>
   @endif

   <div class="d-flex justify-content-center">
      {{ $posts->links() }}
   </div>
@endsection
