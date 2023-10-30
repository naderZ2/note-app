


<!doctype html>
<html lang="en">
    @include('layouts.head')

    <body class=" ">
    <!-- loader Start -->
@include('layouts.loader')
    <!-- loader END -->

<!-- loader END -->

      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                     <div class="logo-detail">
                           <div class="d-flex align-items-center"><img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                     </div>
                     <h3 class="mb-2">Reset Password</h3>
                     <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>



                     <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <!-- Email Address -->
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                <x-text-input id="email"  class="floating-input form-control" type="email" placeholder=" "  name="email" :value="old('email')" required autofocus />
                                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                 <label>Email</label>
                              </div>
                           </div>
                        </div>

                        <x-primary-button type="submit" class="btn btn-primary">{{ __('Reset') }}</x-primary-button>
                     </form>


                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

      @include('layouts.script')

  </body>
</html>
