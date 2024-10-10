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
   </div>
@endsection
