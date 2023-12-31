


<!doctype html>
<html lang="en">
    @include('layouts.head')

    <body class=" ">
    <!-- loader Start -->
@include('layouts.loader')
    <!-- loader END -->

      <div class="wrapper">
      <div class="container">
         <div class="row no-gutters height-self-center">
            <div class="col-sm-12 text-center align-self-center">
               <div class="iq-error position-relative">
                     <img src="../assets/images/error/404.png" class="img-fluid iq-error-img" alt="">
                     <h2 class="mb-0 mt-4">Oops! This Page is Not Found.</h2>
                     <p>The requested page dose not exist.</p>
                     <a class="btn btn-primary d-inline-flex align-items-center mt-3" href="{{ route('index') }}"><i class="ri-home-4-line"></i>Back to Home</a>
               </div>
            </div>
         </div>
   </div>
      </div>

      @include('layouts.script')
    </body>
</html>
