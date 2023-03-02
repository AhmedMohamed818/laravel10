<!DOCTYPE html>
        <html>
            <title>Photos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
            </head>
<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/util.css')}}">
<link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
@extends('admin.admin_master')
@section('admin')
        <body >
            <div class="t-center">
                <span class="tit2 t-center">
                    Modify
                </span>

                <h3 class="tit3 t-center m-b-35 m-t-2">
                    Model
                </h3>
            </div>
            <form class="wrap-form-reservation size22 m-l-r-auto" method = "POST" enctype="multipart/form-data" action="{{route('store.brand')}}">
                @csrf
                <label class = "welcome"></label><br>
                @if(session('success'))
                {{session('success')}}
                @endif
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Photos :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input id="file"  type = "file" name = "m_c_image" style="color: white;">
                            <label for="file">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
                                Select A Photo
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Enter :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input  type = "text" name = "brand_name"  class="bo-rad-10 sizefull txt10 p-l-20">

                            @error('bp')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        

                       
                    </div>

                    <div class="col-md-4">
                        

                       
                    </div>


                    
                        <!-- Name -->
                        <span class="txt9" style="padding-left: 135px;">
                            <input class="btn3 flex-c-m size13 txt11 trans-0-4" type = "submit" name = "logout" value = "Save">
                        </span>

                        
                    
                    
                   
                        @endsection
                    
                    
                </div>
            </form>
        </body>

        <!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
        <script type="text/javascript">
            $('.parallax100').parallax100();
        </script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>
        </html>