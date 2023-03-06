
<!DOCTYPE html>
        <html>
            <title>New Car Model</title>
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
            <form class="wrap-form-reservation size22 m-l-r-auto" action="{{route('store.new')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class = "welcome"></label><br>
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                           Car Photos :
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
                           Man Photos :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input id="file"  type = "file" name = "m_c_image1" style="color: white;">
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
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_man" value = "HYUNDAI" placeholder = "Manfucturer"/>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Model :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_model" value = "bayon" placeholder = "Model"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Class :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_class" placeholder = "Class"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car CC : 
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" value = "1400" name = "n_c_cc" placeholder = "CC">
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Warranty : (Y)
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_w_y" value = "3"  placeholder = "Warranty years"/>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Warranty : (KM)
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_w_km" value = "100000" placeholder = "Warranty km"/>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Car Hp : 
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name = "n_c_hp" placeholder = "Hp" value = "100"/>
                           
                        </div>
                    </div>


                    <div class="col-md-4">
                        <!-- Time -->
                        <span class="txt9">
                            Car Transmission type :
                        </span>

                        <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <!-- Select2 -->
                            <select class="bo-rad-10 sizefull txt10 p-l-20"  name = "n_c_transmission_type">
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
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" min="1900" max="2099" step="1" value="2022" name = "n_c_year"/>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Time -->
                        <span class="txt9">
                            Car Category :
                        </span>

                        <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <!-- Select2 -->
                            <select class="bo-rad-10 sizefull txt10 p-l-20"  name="category">
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
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder = "Car Model (Arabic)" name = "modelA">
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
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder = "Price" name = "price">
                           
                        </div>
                    </div>

                    



                    <button class="btn3 flex-c-m size13 txt11 trans-0-4" type = "submit" >Save</button>
                    <button href ="{{ url('AddNewCar/edit/'.car_info_new -> id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4"   >update</button>
                    <input class="btn3 flex-c-m size13 txt11 trans-0-4" type = "submit" name = "logout" value = "Logout">
                </div>
                <table class="table" style="color: white;">
			<thead>
			  <tr>
				<th scope="col">#</th>
				<th scope="col" style="text-align: center;">report</th>
				<th scope="col" style="text-align: center;">details</th>
                <th scope="col" style="text-align: center;">details</th>
                <th scope="col" style="text-align: center;">details</th>
                <th scope="col" style="text-align: center;">Action</th>
			  </tr>
			</thead>
			<tbody>
			<!-- @php($i =1) -->
              @foreach($newcars as $newcar)
              <tr>
              <th scope="row">{{$newcars->firstIten()+$loop->index}}</th>
              <td style="text-align: center;">{{$newcar -> id}}</td>
              <td style="text-align: center;"><img src="{{asset($newcars->car_image"></td>
              <td style="text-align: center;"><img src="{{asset($newcars->man_photo"></td>
              <td style="text-align: center;">{{$newcar -> car_man}}</td>
              <td style="text-align: center;">{{$newcar -> car_model}}</td>
              <td style="text-align: center;">{{$newcar -> car_year}}</td>
              <td style="text-align: center;">{{$newcar -> car_cat}}</td>
              <td style="text-align: center;">{{$newcar -> car_model_arabic}}</td>
              <td style="text-align: center;">{{$newcar -> car_class}}</td>
              <td style="text-align: center;">{{$newcar -> warranty}}</td>
              <td style="text-align: center;">{{$newcar -> warranty}}</td>
              <td style="text-align: center;">{{$newcar -> cc}}</td>
              <td style="text-align: center;">{{$newcar -> hp}}</td>
              <td style="text-align: center;">{{$newcar -> transmissiontype}}</td>
              <td style="text-align: center;">{{$newcar -> price}}</td>
             
              <td style="text-align: center;">
              <button class="btn btn-success" type="submit" style=" border-radius: 10px;">accept</button>
              <button class="btn btn-success" type="onclick" style=" border-radius: 10px;width: 75px;margin-left: 10px;">reject</button>
            </td>
              </tr>
              <td>
                <a href="{{ url('newcar/edit/'$newcar->id)}}" class="btn btn-info">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
              @endforeach
			</tbody>
		  </table>
          {{$newcars->links() }}





<!-- trachlis -->


          <table class="table" style="color: white;">
			<thead>
			  <tr>
				<th scope="col">#</th>
				<th scope="col" style="text-align: center;">report</th>
				<th scope="col" style="text-align: center;">details</th>
                <th scope="col" style="text-align: center;">details</th>
                <th scope="col" style="text-align: center;">details</th>
                <th scope="col" style="text-align: center;">Action</th>
			  </tr>
			</thead>
			<tbody>
			@php($i =1)
              @foreach($trachnew as $newcar)
              <tr>
              <th scope="row">{{$newcars->firstIten()+$loop->index}}</th>
              <td style="text-align: center;">{{$newcar -> id}}</td>
              <td style="text-align: center;">{{$newcar -> car_image}}</td>
              <td style="text-align: center;">{{$newcar -> man_photo}}</td>
              <td style="text-align: center;">{{$newcar -> car_man}}</td>
              <td style="text-align: center;">{{$newcar -> car_model}}</td>
              <td style="text-align: center;">{{$newcar -> car_year}}</td>
              <td style="text-align: center;">{{$newcar -> car_cat}}</td>
              <td style="text-align: center;">{{$newcar -> car_model_arabic}}</td>
              <td style="text-align: center;">{{$newcar -> car_class}}</td>
              <td style="text-align: center;">{{$newcar -> warranty}}</td>
              <td style="text-align: center;">{{$newcar -> warranty}}</td>
              <td style="text-align: center;">{{$newcar -> cc}}</td>
              <td style="text-align: center;">{{$newcar -> hp}}</td>
              <td style="text-align: center;">{{$newcar -> transmissiontype}}</td>
              <td style="text-align: center;">{{$newcar -> price}}</td>
             
              <td style="text-align: center;"><button class="btn btn-success" type="submit" style=" border-radius: 10px;">accept</button><button class="btn btn-success" type="onclick" style=" border-radius: 10px;width: 75px;margin-left: 10px;">reject</button></td>
              </tr>
              <td>
                <a href="{{ url('newcar/edit/'$newcar->id)}}" class="btn btn-info">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
              @endforeach
			</tbody>
		  </table>
          {{$newcars->links() }}





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