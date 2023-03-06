
<!DOCTYPE html>
        <html>
            <title>EDIT New Car Model</title>
@extends('admin.admin_master')
@section('admin')
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/util.css')}}">
<link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<!--===============================================================================================-->
            
        <body >
            <!-- <div class="t-center">
                <span class="tit2 t-center">
                    New Car
                </span>

                <h3 class="tit3 t-center m-b-35 m-t-2">
                    Model
                </h3>
            </div> -->
            <form class="wrap-form-reservation size22 m-l-r-auto" action="{{url('newcar/update'.$newcars->id)}}"  method="POST" >
                @csrf
                <label class = "welcome"></label><br>
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                           Car Photos :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input id="file"  type = "file" name = "m_c_image" style="color: white;" value="{{ url('$newcars->car_image')}}">
                            <label for="file">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
                                Select A Photo
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                           Man Photos :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input id="file"  type = "file" name = "m_c_image" style="color: white;" value="{{ url('$newcars->man_photo')}}">
                            <label for="file">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
                                Select A Photo
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Manfucturer :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_man" value="{{ url('$newcars->car_man')}}" placeholder = "Manfucturer"/>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Model :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_model" value="{{ url('$newcars->car_model')}}" placeholder = "Model"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Class :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_class" placeholder = "Class" value="{{ url('$newcars->car_class')}}"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car CC : 
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" value="{{ url('$newcars->cc')}}" name = "n_c_cc" placeholder = "CC">
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Warranty : (Y)
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_w_y" value="{{ url('$newcars->warranty')}}" placeholder = "Warranty years"/>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Warranty : (KM)
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_w_km" value="{{ url('$newcars->warranty')}}" placeholder = "Warranty km"/>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Hp : 
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_hp" placeholder = "Hp" value="{{ url('$newcars->hp')}}"/>
                           
                        </div>
                    </div>


                    <div class="col-md-4">
                        <!-- Time -->
                        <span class="txt9">
                            Car Transmission type :
                        </span>

                        <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <!-- Select2 -->
                            <select class="bo-rad-10 sizefull txt10 p-l-20"  name = "n_c_transmission_type" value="{{ url('$newcars->transmissiontype')}}">
                                <option value = "automatic">Auto</optioon>
                                    <option value = "manual">Manual</optioon>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Year :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" min="1900" max="2099" step="1" value="2022" name = "n_c_year" value="{{ url('$newcars->car_year')}}"/>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Time -->
                        <span class="txt9">
                            Car Category :
                        </span>

                        <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <!-- Select2 -->
                            <select class="bo-rad-10 sizefull txt10 p-l-20"  name="category" value="{{ url('$newcars->car_cat')}}">
                                <option value = "Sedan">Sedan</optioon>
                                    <option value = "SUV">SUV</optioon>
                                    <option value = "Pickup">Pickup</optioon>
                                    <option value = "Van">Van</optioon>
                                    <option value = "MiniVan">MiniVan</optioon>
                                    <option value = "4X4">4X4</optioon>
                                    <option value = "Hatchback">Hatchback</optioon>
                                    <option value = "Coupe">Coupe</optioon>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Model (Arabic) :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder = "Car Model (Arabic)" name = "modelA" value="{{ url('$newcars -> car_model_arabic')}}">
                        </div>
                    </div>


                    <div class="col-md-4">
                        

                       
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Price : 
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder = "Price" name = "price" value="{{ url('$newcars -> price')}}">
                           
                        </div>
                    </div>

                    
                    
                    <input href ="{{ url('AddNewCar/edit/'.car_info_new -> id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4"   value = "Update">
                   
                </div>
             
            </form>
            @endsection
        </body>

        <!--===============================================================================================-->
<!-- <script type="text/javascript" src="{{asset('backend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/animsition/js/animsition.min.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/select2/select2.min.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/slick-custom.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/parallax100/parallax100.js')}}"></script>
<script type="text/javascript">
$('.parallax100').parallax100();
</script>

<script type="text/javascript" src="{{asset('backend/vendor/countdowntime/countdowntime.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/lightbox2/js/lightbox.min.js')}}"></script>

<script src="{{asset('backend/js/main.js')}}"></script> -->
        </html>