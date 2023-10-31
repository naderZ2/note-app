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



    {{-- content start --}}





        <div class="col-lg-10 col-md-8" id="new-note1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">
                                <h3 class="mb-3">{{$note->title}}</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><a href="{{route('index')}}"><i class="las la-times"></i></a></div>
                            </div>
                            <div class="content create-workform">
                                <p class="mb-4">{{$note->description}} </p>
                                <h4 class="mb-3">create by</h4>
                                <ul class="list-inline p-0 m-0">
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">{{$note->user->name}}</h5>
                                                    <h6 class="mb-0">{{$note->created_at->format('d M Y')}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>












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
