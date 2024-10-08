@extends('layouts.main')

@section('container')
   <div class="row justify-content-center ">
      <div class="col-md-4">
         @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         @if (session()->has('loginFail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               {{ session('loginFail') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         <main class="form-signin w-100 m-auto">
            <form action="/login" method="POST">
               @csrf
               <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

               <div class="form-floating">
                  <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autofocus required name="email" id="email" placeholder="name@example.com">
                  <label for="email">Email address</label>
                  @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required id="password" placeholder="Password">
                  <label for="password">Password</label>
                  @error('password')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
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
            <small class="d-block text-center">Not registered? <a href="/register" class="text-dark">Register
                  Now!</a></small>
         </main>
      </div>
   </div>
@endsection
