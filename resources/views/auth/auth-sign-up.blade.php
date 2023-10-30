


<!doctype html>
<html lang="en">
@include('layouts.head')

    <body class=" ">
    <!-- loader Start -->
@include('layouts.loader')
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
                     <h3 class="mb-2">Sign Up</h3>
                     <p>Create your  account.</p>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <!-- Name -->
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                <x-text-input  id="name" class="floating-input form-control"  name="name" type="text" placeholder=" " :value="old('name')"  required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                 <label>Your Name</label>
                              </div>
                           </div>
                            <!-- Email Address -->
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                <x-text-input id="email" class="floating-input form-control" type="email" placeholder=" " name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <label>Email</label>
                              </div>
                           </div>
                            <!-- Password -->
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                <x-text-input id="password" class="floating-input form-control" type="password" placeholder=" " name="password" required autocomplete="new-password" />
                                 <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                 <label>Password</label>
                              </div>
                           </div>
                           <!-- Confirm Password -->
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                <x-text-input id="password_confirmation" class="floating-input form-control" type="password" placeholder=" " name="password_confirmation" required autocomplete="new-password" />
                                 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                 <label>Confirm Password</label>
                              </div>
                           </div>

                        </div>
                        <x-primary-button type="submit" class="btn btn-primary">{{ __('Register') }}</x-primary-button>
                        <p class="mt-3 mb-0">
                           Already have an Account <a href="{{ route('login') }}" class="text-primary"><b>Sign In</b></a>
                        </p>
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
