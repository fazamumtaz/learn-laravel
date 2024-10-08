@extends('dashboard.layouts.main')

@section('container')
   <div class="container my-5">
      <div class="row ">
         <div class="col-md-8">
            <h2 class="mb-3">{{ $post->blogTitle }}</h2>
            <h5>In category: <a class="text-decoration-none"
                  href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            {!! $post->content !!}

            <div class="show-action my-3">
               <a href="/dashboard/posts/" class="btn bg-success text-light"><i class="bi bi-arrow-bar-left"></i> Back to all my posts</a>
               <a href="" class="btn bg-warning text-light"><i class="bi bi-pen"></i> Edit</a>
               <a href="" class="btn bg-danger text-light"><i class="bi bi-trash"></i> Delete</a>
            </div>
         </div>
      </div>
   </div>
@endsection
