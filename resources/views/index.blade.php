@include('include.top_home')
    
   @include('include.nav_home')
    <!-- END nav -->
{{-- //home --}}
    @yield('content')
    <!-- END section -->
    

    {{-- aboutus --}}
   {{-- @yield('content') --}}
    <!-- END section -->
    
{{-- offer --}}
   {{-- @yield('content') --}}
    <!-- END section -->

    {{-- Menu --}}
  {{-- @yield('content') --}}
    <!-- END section -->


    {{-- News --}}
    {{-- @yield('content') --}}
    <!-- END section -->


    {{-- Gallery --}}
    {{-- @yield('content') --}}
    <!-- END section -->

  


          {{-- countact --}}
        {{-- @yield('content') --}}
          
    <!-- END section -->
    

    {{-- footer --}}
   @include('include.footer_home')

    
    

    {{-- <!-- Modal -->  forme --}}
    @include('include.form_home')

    <!-- END Modal -->

    <!-- loader -->
@include('include.bottom_home')
    