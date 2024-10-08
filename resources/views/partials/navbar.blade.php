{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
   <div class="container">
      <a class="navbar-brand" href="#">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link {{ $pageTitle == 'Home' ? 'active' : '' }}" aria-current="page"
                  href="/">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ $pageTitle == 'About' ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ $pageTitle == 'Post' ? 'active' : '' }}" href="/posts">Post</a>
            </li>
         </ul>
         <ul class="navbar-nav">
            @auth
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Welcome back, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-graph-up"></i> | Dashboard</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <form action="/logout" method="post">
                           @csrf
                           <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> | Logout</button>
                        </form>
                     </li>
                  </ul>
               </li>
            @else
               <li class="nav-item">
                  <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
               </li>
            @endauth
         </ul>
      </div>
   </div>
</nav>
{{-- end navbar --}}
