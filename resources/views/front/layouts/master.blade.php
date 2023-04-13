<!DOCTYPE html>
<html lang="DE">
@include('front.layouts.header')
<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    @include('front.layouts.navbar')

   <!-- /.Header -->
    <!-- ============================
        Slider
    ============================== -->
    <div>
     @yield('section')
    </div>

    <!-- ========================
      Footer
    ========================== -->
   

  </div><!-- /.wrapper -->

 @include('front.layouts.footer')
  @yield('javascript')
 <div class="modal fade" id="popup" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
</body>

</html>