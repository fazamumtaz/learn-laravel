@extends('layouts.main')

@section('container')
   <div class="row justify-content-center ">
      <div class="col-md-4">
         <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
               @csrf
               <h1 class="h3 mb-3 fw-normal text-center">Please Sign Up</h1>
               <div class="form-floating">
                  <input type="text" class="form-control rounded-top" id="name" placeholder="Name" name="name">
                  <label for="name">Name</label>
               </div>
               <div class="form-floating">
                  <input type="text" class="form-control" id="username" placeholder="username" name="username">
                  <label for="username">Username</label>
               </div>
               <div class="form-floating">
                  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                  <label for="email">Email address</label>
               </div>
               <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  <label for="password">Password</label>
               </div>

               {{-- <div class="form-check text-start my-3">
                  <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                     Remember me
                  </label>
               </div> --}}
               <button class="btn btn-primary rounded-bottom w-100 py-2" type="submit">Sign Up</button>
               {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p> --}}
            </form>
               <small class="d-block text-center">Already have account? <a href="/login" class="text-dark">Login</a></small>
         </main>
      </div>
   </div>
@endsection
