@extends('v1.web.template.master')
@section('title')
    under maintenance
@endsection
@section('content')	
	<section class="error-page h-p100">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center text-center">
			  <div class="col-lg-7 col-md-10 col-12">
				  <div class="rounded30 p-50">
					  <h1 class="fs-180 fw-bold text-primary"> <i class="fa fa-gear fa-spin"></i></h1>
					  <h1 class="fw-600">UNDER MAINTENANCE!</h1>
					  <h3 class="text-fade">We're sorry for the inconvenience.</h3>
					  <h4 class="text-fade">Please check back later.</h4>	
				  </div>
			  </div>				
		  </div>
		</div>
	</section>
@endsection