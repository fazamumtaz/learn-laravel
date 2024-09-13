{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
   <div class="container">
      <a class="navbar-brand" href="#">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link {{ ($pageTitle == "Home") ? "active" : "" }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ ($pageTitle == "About") ? "active" : "" }}" href="/about">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ ($pageTitle == "Post") ? "active" : "" }}" href="/posts">Post</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
{{-- end navbar --}}
