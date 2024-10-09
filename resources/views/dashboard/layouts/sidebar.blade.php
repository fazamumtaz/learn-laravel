<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
   <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
      aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
            aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
         <ul class="nav flex-column">
            <li class="nav-item ">
               <a class="nav-link text-dark d-flex align-items-center {{ Request::is('dashboard') ? 'active' : '' }} gap-2 active" aria-current="page"
                  href="/dashboard">
                  <svg class="bi">
                     <use xlink:href="#house-fill" />
                  </svg>
                  Dashboard
               </a>
            </li>
            <li class="nav-item">
               <a class="{{ Request::is('dashboard/posts') ? 'active' : '' }} text-dark nav-link d-flex align-items-center gap-2" href="/dashboard/posts">
                  <svg class="bi">
                     <use xlink:href="#file-earmark-text" />
                  </svg>
                  My Posts
               </a>
            </li>
            <li class="nav-item">
               <a class="{{ Request::is('dashboard/posts') ? 'active' : '' }} text-dark nav-link d-flex align-items-center gap-2" href="/dashboard/posts/create">
                  <svg class="bi">
                     <use xlink:href="#plus-circle" />
                  </svg>
                  New Post
               </a>
            </li>
         </ul>

         <hr class="my-3">

         <ul class="nav flex-column mb-auto">
            <li class="nav-item">
               <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="text-dark nav-link align-items-center gap-2"><i
                        class="bi bi-box-arrow-right text-dark"></i>  Logout</button>
               </form>
            </li>
         </ul>
      </div>
   </div>
</div>