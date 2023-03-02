<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>
  @extends('admin.admin_master')
@section('admin')

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  
  <link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/util.css')}}">
<link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
 

</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    
  
         
         


        <div class="content-wrapper">
          <div class="content">							<div class="bg-white border rounded">
								<div class="row no-gutters">
									<div class="col-lg-4 col-xl-3">
										<div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
											<div class="card text-center widget-profile px-0 border-0">
												<div class="card-img mx-auto rounded-circle">
													<img src="assets/img/user/u6.jpg" alt="user image">
												</div>
												<div class="card-body">
													<h4 class="py-2 text-dark">Albrecht Straub</h4>
													<p>Albrecht.straub@gmail.com</p>
												
												</div>
											</div>
										
											<hr class="w-100">
											<div class="contact-info pt-4">
												<h5 class="text-dark mb-1">Contact Information</h5>
												<p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
												<p>Albrecht.straub@gmail.com</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
												<p>+99 9539 2641 31</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
												<p>Nov 15, 1990</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
												<p class="pb-3 social-button">
													<a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
														<i class="mdi mdi-twitter"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
														<i class="mdi mdi-linkedin"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
														<i class="mdi mdi-facebook"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
														<i class="mdi mdi-skype"></i>
													</a>
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-xl-9">
										<div class="profile-content-right py-5">
											<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Timeline</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
												</li>
											</ul>
											
													

                      @endsection


        </div>
 

      
    

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<!-- <script src="{{asset('backend/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('backend/assets/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('backend/assets/js/sleek.j')}}s"></script>
<script src="{{asset('backend/assets/js/chart.js')}}"></script>
<script src="{{asset('backend/assets/js/date-range.js')}}"></script>
<script src="{{asset('backend/assets/js/map.js')}}"></script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script> -->




  </body>
</html>
