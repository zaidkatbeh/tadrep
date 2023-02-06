@extends('v1.web.template.master')
@section('title')
    server error
@endsection
@section('content')

	
	<section class="error-page h-p100">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center text-center">
			  <div class="col-lg-7 col-md-10 col-12">
				  <div class="rounded30 p-50">
					  <h1 class="fs-100">500</h1>
					  <h1>Uh-Ah</h1>
					  <h3 class="text-fade">Internal Server Error !</h3>
					  <div class="my-30"><a href="index.html" class="btn btn-primary">Back to dashboard</a></div>
					  <h5 class="mb-15 text-fade">-- OR --</h5>
					  <h4 class="text-fade">Please try after some time</h4>			  			  
			      </div>							  			  
			  </div>				
		  </div>
		</div>
	</section>
	


@endsection