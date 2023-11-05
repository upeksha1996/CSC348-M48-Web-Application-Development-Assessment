 {{-- <div class="global-navbar bg-white"> --}}
 {{-- <div class="container"> --}}
 {{-- <div class="row">
             <div class="col-md-3">
                 <img src="{{ asset('assets/images/logo.png') }}" width="40px" height="40px" alt="logo" />
             </div>
             <div class="col-md-9 my-auto">
                 <div class="border text-center p-2">
                     <h5>
                         Advertise Here
                     </h5>
                 </div>
             </div>
         </div> --}}
 {{-- </div> --}}
 {{-- </div> --}}
 <div class="sticky-top">
     <nav class="navbar navbar-expand-lg navbar-dark bg-green">
         <div class="container">
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>

                     {{-- <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Dropdown
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#">Action</a></li>
                             <li><a class="dropdown-item" href="#">Another action</a></li>
                             <li>
                                 <hr class="dropdown-divider">
                             </li>
                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                     </li> --}}
                     @php
                         $categories = App\Models\Category::where('navbar_status', '0')
                             ->where('status', '0')
                             ->get();
                     @endphp
                     {{-- @foreach ($categories as $cateitem)
                         <li class="nav-item">
                             <a class="nav-link"
                                 href="{{ url('tutorial/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
                         </li>
                     @endforeach --}}
                 </ul>
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0 inner  display-contents">
                     @if (Auth::check())
                         <li>
                             <a class="nav-link btn btn-success border-0 rounded-0"
                                 href="{{ url('user/dashboard') }}">Dashboard</a>
                         </li>
                         <li>
                             <a class="nav-link btn btn-danger border-0 rounded-0" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </li>
                     @else
                         <li>
                             <a class="nav-link btn btn-primary border-0 rounded-0" href="/login">LogIn</a>

                         </li>
                         <li>
                             <a class="nav-link btn btn-secondary border-0 rounded-0" href="/register">Register</a>

                         </li>
                     @endif

                 </ul>

             </div>
         </div>
     </nav>
 </div>
