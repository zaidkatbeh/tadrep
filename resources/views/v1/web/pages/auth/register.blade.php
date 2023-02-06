@extends('v1.web.template.master')

@section('title')
    register
@endsection
@section('bodyType')hold-transition theme-primary bg-img rtls @endsection
@section('content')

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary fw-600">Get started with Us</h2>
								<p class="mb-0 text-fade">Register a new membership</p>
							</div>
							<div class="p-40">
								<form action="index.html" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Full Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-email"></i></span>
											<input type="email" class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Retype Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-12">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1">
											<label for="basic_checkbox_1">I agree to the <a href="auth_register.html#" class="text-primary">Terms</a></label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
											<button type="submit" class="btn btn-primary w-p100 mt-10">REGISTER</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">Already have an account?<a href="auth_login.html" class="text-primary ms-5">Sign In</a></p>
								</div>

								<div class="text-center">
								  <p class="mt-20 text-fade">- Register With -</p>
								  <p class="gap-items-2 mb-0">
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook-light" href="auth_register.html#"><i class="fa fa-facebook"></i></a>
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter-light" href="auth_register.html#"><i class="fa fa-twitter"></i></a>
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram-light" href="auth_register.html#"><i class="fa fa-instagram"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>







@endsection
