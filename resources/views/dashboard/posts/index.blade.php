@extends('dashboard.layouts.main')

@section('container')
   @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   @endif
   {{-- @if (session()->has('loginFail'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{ session('loginFail') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   @endif --}}
   {{-- end feedback --}}
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">My Posts</h1>
   </div>
   <div class="table-responsive small">
      <table class="table table-striped table-sm">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Title</th>
               <th scope="col">Category</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($posts as $post)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $post->blogTitle }}</td>
                  <td>{{ $post->category->name }}</td>
                  <td>
                     <a href="/dashboard/posts/{{ $post->slug }}" class="btn bg-info"><i
                           class="bi text-light bi-eye"></i></a>
                     <a href="" class="btn bg-warning"><i class="bi text-light bi-pen"></i></a>
                     {{-- <a href="" class="btn bg-danger"><i class="bi text-light bi-trash"></i></a> --}}
                     <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                           onclick="return confirm('Are you sure you want to delete this post?');"><i
                              class="bi text-light bi-trash"></i></button>
                     </form>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
      <div class="crt-btn d-flex me-auto justify-content-end">
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create Post
         </button>
      </div>
   </div>
   <!-- Modal -->

   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Create Post</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="blogTitle" class="form-label">Post Title</label>
                     <input type="text" name="blogTitle" class="form-control" id="blogTitle"
                        aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                     <label for="content" class="form-label">Content</label>
                     <input type="text" name="content" class="form-control" id="content">
                  </div>
                  <div class="mb-3">
                     <label for="category" class="form-label">Category</label>
                     <select class="form-select" aria-label="Default select example" id="category">
                        <option selected disabled>Choose the category</option>
                        @foreach ($category as $cate)
                           <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
