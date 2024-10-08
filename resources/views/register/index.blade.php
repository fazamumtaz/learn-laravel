@extends('layouts.main')

@section('container')
   <div class="row justify-content-center ">
      <div class="col-md-4">
         
         <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
               @csrf
               <h1 class="h3 mb-3 fw-normal text-center">Please Sign Up</h1>
               <div class="form-floating">
                  <input required type="text" value="{{ old('name') }}" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                     placeholder="Name" name="name">
                  <label for="name">Name</label>
                  @error('name')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input required type="text" class="form-control value="{{ old('username') }}" @error('username') is-invalid @enderror" id="username"
                     placeholder="username" name="username">
                  <label for="username">Username</label>
                  @error('username')
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
         </main>
      </div>
   </div>
@endsection
