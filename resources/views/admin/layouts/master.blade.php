


<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.header')
@if(Auth::user())
@include('admin.layouts.navbar')
@endif
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    @if(Auth::user())
    @yield('menubar')
    <!-- =========================
        Header
    =========================== -->
  

   <!-- /.Header -->
    <!-- ============================
        Slider
    ============================== -->
     <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
         @yield('navbar')
         @yield('section')
    </div>
    @else
    @yield('section')
@endif
    <!-- ========================
      Footer
    ========================== -->
   

  </div><!-- /.wrapper -->

 @include('admin.layouts.footer')
 @yield('javascript')
</body>

</html>