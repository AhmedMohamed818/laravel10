<!DOCTYPE html>
<html>
<title>First</title>
@extends('admin.admin_master')
@section('admin')
<meta charset="UTF-8">
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
</head>


<body >
<div class="t-center">
<span class="tit2 t-center">
Modify
</span>

<h3 class="tit3 t-center m-b-35 m-t-2">
Model
</h3>
</div>
<form class="wrap-form-reservation size22 m-l-r-auto" action="{{ route('store.old')}}" method="POST">
<label class = "welcome"></label><br>
<div class="row">
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Manfucturer :
    </span>
    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Manfucturer">
    </div>
</div>
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Model :
    </span>
    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Model">
    </div>
</div>
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Year From :
    </span>
    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" min="1900" max="2099" step="1" value="2000" name = "year_from"/>
    </div>
</div>
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Year To :
    </span>

    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" min="1900" max="2099" step="1" value="2000" name = "year_to"/>
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
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder = "Car Model (Arabic)" name = "model(A)">
    </div>
</div>

<input class="btn3 flex-c-m size13 txt11 trans-0-4" type = "submit" name = "save" value = "Save">
<input class="btn3 flex-c-m size13 txt11 trans-0-4" type = "submit" name = "update" value = "Update">
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
			@php($i =1)
              @foreach($oldcars as $oldcar)
              <tr>
              <th scope="row">{{$i++}}</th>
              <td style="text-align: center;">{{$oldcar -> id}}</td>
              <td style="text-align: center;">{{$oldcar -> man_name}}</td>
              <td style="text-align: center;">{{$oldcar -> model}}</td>
              <td style="text-align: center;">{{$oldcar -> year}}</td>
              <td style="text-align: center;">{{$oldcar -> category}}</td>
              <td style="text-align: center;">{{$oldcar -> car_model_arabic}}</td>
              <td style="text-align: center;"><button class="btn btn-success" type="submit" style=" border-radius: 10px;">accept</button><button class="btn btn-success" type="onclick" style=" border-radius: 10px;width: 75px;margin-left: 10px;">reject</button></td>
              </tr>
              <td>
                <a href="{{url('oldcar/edit'.$oldcar->id)}}" class="btn btn-info">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
              @endforeach
			</tbody>
		  </table>


</form>

</body>


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

@endsection
</html>