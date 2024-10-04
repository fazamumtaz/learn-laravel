@extends('layouts.main')

@section('container')
   <h1 class="mb-5">{{ $title }}</h1>
   {{-- <ul>
         <li>
            <h2><a href="/categories/{{ $cont->slug }}">{{ $cont->name }}</a></h2>
         </li>
      </ul> --}}

   <div class="container">
      <div class="row">
         @foreach ($content as $cont)
            <div class="col-md-4">
               <a href="/categories/{{ $cont->name }}" class="text-decoration-none">
                  <div class="card text-bg-dark">
                     <div class="position-relative">
                        <img
                           src="https://images.unsplash.com/photo-1638029202288-451a89e0d55f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                           class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center"
                           style="background-color: rgba(0, 0, 0, 0.6);">
                           <h5 class="card-title fs-4 text-center">{{ $cont->name }}</h5>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         @endforeach
      </div>
   </div>
@endsection
