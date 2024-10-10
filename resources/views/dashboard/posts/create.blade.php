@extends('dashboard.layouts.main')

@section('container')
   <div class="row justify-content-start my-3">
      <div class="col-lg-8">
         <h1 class="h3 mb-3 fw-normal">Create New Post</h1>
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
               <input id="content" type="hidden" name="content">
               <trix-editor input="content"></trix-editor>
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
      </div>
   </div>

   <script>
      document.addEventListener('trix-file-accept', function(e) {
         e.preventDefault();
      })
   </script>
@endsection
