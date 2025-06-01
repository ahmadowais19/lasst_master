<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">EatWell</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="site-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
          <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
          <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
       

        @auth      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> {{-- أيقونة الشخص --}}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{ route('user.profile') }}">Edit Profile</a>
            <a class="dropdown-item" href="{{ route('user.reservations') }}">My Reservations</a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </div>
        </li>
{{--             
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"
        class="relative inline-block px-6 py-2 rounded-full bg-red-600 text-dark font-semibold cursor-pointer overflow-hidden select-none
        hover:bg-red-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        <span class="relative z-10">Log Out</span>
        <span class="absolute top-1/2 left-3 w-3 h-3 bg-white rounded-full -translate-y-1/2"></span>
    </button>
</form> --}}
@endauth   
</ul>

@if (Route::has('login'))
<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
    @auth
        @if (Auth::user()->role == 'admin')
            <a href="{{ route('dashboard') }}" 
               class="relative inline-block px-6 py-2 rounded-full bg-blue-600 text-white font-semibold cursor-pointer overflow-hidden select-none
               hover:bg-blue-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <span class="relative z-10">Dashboard</span>
                <span class="absolute top-1/2 left-3 w-3 h-3 bg-white rounded-full -translate-y-1/2"></span>
            </a>
        @endif
    @else
        <a href="{{ route('login') }}" 
           class="relative inline-block px-6 py-2 rounded-full bg-green-600 text-white font-semibold cursor-pointer overflow-hidden select-none
           hover:bg-green-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
            <span class="relative z-10">Log in</span>
            <span class="absolute top-1/2 left-3 w-3 h-3 bg-white rounded-full -translate-y-1/2"></span>
        </a>
    @endauth
</div>
@endif

    </div>
  </nav>