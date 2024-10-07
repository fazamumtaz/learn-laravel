@extends('layouts.main')

@section('container')
   <div class="row justify-content-center ">
      <div class="col-md-4">
         <main class="form-signin w-100 m-auto">
            <form>
               <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

               <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
               </div>
               <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
               </div>

               {{-- <div class="form-check text-start my-3">
                  <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                     Remember me
                  </label>
               </div> --}}
               <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
               {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p> --}}
            </form>
               <small class="d-block text-center">Not registered? <a href="/register" class="text-dark">Register Now!</a></small>
         </main>
      </div>
   </div>
@endsection
