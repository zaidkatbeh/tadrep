@extends('v1.web.template.master')
@section('title')
    not found
@endsection
@section('content')
	
	<section class="error-page h-p100">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center text-center">
			  <div class="col-lg-7 col-md-10 col-12">
				  <div class="rounded10 p-50">
					  <h1 class="fs-100">404</h1>
					  <h1>Page Not Found !</h1>
					  <h3 class="text-fade">looks like, page doesn't exist</h3>
					  <div class="my-30"><a href="index.html" class="btn btn-primary">Back to dashboard</a></div>				  

					  <form class="search-form mx-auto mt-30 w-p75">
						<div class="input-group rounded5 overflow-h">
						  <input type="text" name="search" class="form-control bg-white" placeholder="Search">
						  <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
						</div>
						<!-- /.input-group -->
					  </form>
				  </div>
			  </div>				
		  </div>
		</div>
	</section>



@endsection