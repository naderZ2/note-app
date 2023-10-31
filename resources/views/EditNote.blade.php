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



    <div class="col-md-12">
        <div class="" id="collapseMenu">
            <div class="card card-block card-stretch">
                <div class="card-body write-card">
                    <div class="container-fluid collapse-fluid">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 p-0">
                            <form action="{{route('update.note',['note'=>$note->id])}}" method="post" >
                                @csrf
                                @method('put')
                                    <input type="text" class="form-control" placeholder="title" value="{{$note->title}}" name="title" id="">

                                    <div class="card card-transparent card-block card-stretch event-note">
                                        <textarea name="description" id="editor" placeholder="{{$note->description}}"></textarea>

                                    </div>
                                </div>
                                <div class="col-lg-12 p-0 d-flex justify-content-end">
                                    <button  class="btn btn-outline-primary" ><a href="{{route('index')}}"> Close</a></button>
                                    <button  type="submit" class="btn btn-primary ml-2" >Save</button>
                                </form>
                            </div>
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
