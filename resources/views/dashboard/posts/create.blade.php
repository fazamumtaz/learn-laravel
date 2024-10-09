@extends('layouts.main')

@section('container')
   <div class="row justify-content-center ">
      <div class="col-md-4">
         <h1 class="h3 mb-3 fw-normal text-center">Create New Post</h1>
         <form action="/dashboard/posts" method="POST">
            @csrf
            @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
            @endif
            <div class="mb-3">
               <label for="title" class="form-label">Title</label>
               <input type="text" name="blogTitle" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
               <label for="content" class="form-label">Content</label>
               <input type="text" name="content" class="form-control" id="content">
            </div>
            <div class="mb-3">
               <label for="select" class="form-label">Category</label>
               <select id="disabledSelect" name="category_id" class="form-select">
                  <option selected disabled>Choose category</option>
                  @foreach ($category as $catg)
                     <option value="{{ $catg->id }}">{{ $catg->name }}</option>
                  @endforeach
               </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>

         {{-- <main class="form-registration w-100 m-auto">
            <form action="/create" method="POST">
               @csrf
               <h1 class="h3 mb-3 fw-normal text-center">Create New Post</h1>
               <div class="form-floating">
                  <input required type="text" value="{{ old('blogTitle') }}" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                     placeholder="Title" name="blogTitle">
                  <label for="name">Post Title</label>
                  @error('blogTitle')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input required type="text" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}" id="content"
                     placeholder="content" name="content">
                  <label for="content">Post Content</label>
                  @error('content')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input required type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                     id="email" placeholder="name@example.com">
                  <label for="email">Email address</label>
                  @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input required type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                     id="password" placeholder="Password">
                  <label for="password">Password</label>
                  @error('password')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <button class="btn btn-primary rounded-bottom w-100 py-2" type="submit">Sign Up</button>
            </form>
            <small class="d-block text-center">Already have account? <a href="/login" class="text-dark">Login</a></small>
         </main> --}}
      </div>
   </div>
@endsection
