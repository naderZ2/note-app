


<!doctype html>
<html lang="en">
    @include('layouts.head')

    <body class=" ">
    <!-- loader Start -->
@include('layouts.loader')
    <!-- loader END -->

    <x-auth-session-status class="mb-4" :status="session('status')" />

      <div class="wrapper">
       <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                     <div class="logo-detail">
                           <div class="d-flex align-items-center"><img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                     </div>
                     <h3 class="mb-2">Login In</h3>
                     <p>Login to stay connected.</p>
                     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <!-- Email Address -->
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                <x-text-input id="email" class="floating-input form-control" type="email" placeholder=" " name="email" :value="old('email')" required autofocus autocomplete="username" />
                                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                 <label>Email</label>
                              </div>
                           </div>
                           <!-- Password -->
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                <x-text-input id="password" name="password" class="floating-input form-control" type="password" placeholder=" " required autocomplete="current-password" />
                                 <x-input-error  :messages="$errors->get('password')" class="mt-2" />
                                 <label>Password</label>
                              </div>
                           </div>
                           <!-- Remember Me -->
                           <div class="col-lg-6">
                              <div class="custom-control custom-checkbox mb-3 text-left">
                                 <input  name="remember"  type="checkbox" class="custom-control-input" id="remember_me">
                                 <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
                              </div>
                           </div>
                           {{-- Forgot your password --}}

                           {{-- <div class="col-lg-6">

                            @if (Route::has('password.request'))
                            <a class="text-primary float-right underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                           </div> --}}

                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
                        <p class="mt-3 mb-0">
                           Create an Account <a href="{{ route('register') }}" class="text-primary"><b>{{ __('Sign Up') }}</b></a>
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
