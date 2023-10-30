<!doctype html>
<html lang="en">
@include('layouts.head')

  <body class="noteplus-layout  ">






    <!-- loader Start -->
@include('layouts.loader')
    <!-- loader END -->




    <!-- Wrapper Start -->

<!-- nav Start -->
@include('layouts.nav')
<!-- nav end-->
<div class="container-fluid note-details">

    <!-- desktop header start-->
    @include('layouts.desktop-header')
    <!-- desktop header end-->

    <div class="row">

        <!-- Write Note start-->
    @include('layouts.write-note')
    <!-- Write Note end-->

    {{-- content start --}}
    @include('layouts.content')
    {{-- content end --}}

        {{-- </div> --}}
        <!-- Page end  -->
    {{-- </div> --}}
    <!-- Modal start -->
    {{-- @include('layouts.modal') --}}
    <!-- Modal end -->


    <!-- footer start -->
    @include('layouts.footer')
    <!-- footer end -->
    <!-- script start -->
    @include('layouts.script')
    <!-- script end -->
  </body>
</html>
