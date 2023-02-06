@extends('v1.web.template.master')

@section('title')
    login
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
                            <h2 class="text-primary fw-600">Let's Get Started</h2>
                            <p class="mb-0 text-fade">Sign in to continue to EmployX.</p>
                        </div>
                        <div class="p-40">
                            <form action="index.html" method="post">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span>
                                        <input type="text" class="form-control ps-15 bg-transparent" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text  bg-transparent"><i class="text-fade ti-lock"></i></span>
                                        <input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="col-6">
                                      <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_1" >
                                        <label for="basic_checkbox_1">Remember Me</label>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                     <div class="fog-pwd text-end">
                                        <a href="javascript:void(0)" class="text-primary fw-500 hover-primary"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                      <button type="submit" class="btn btn-primary w-p100 mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-15 mb-0 text-fade">Don't have an account? <a href="{{URl('/user/register')}}" class="text-primary ms-5">Sign Up</a></p>
                            </div>

                            <div class="text-center">
                              <p class="mt-20 text-fade">- Sign With -</p>
                              <p class="gap-items-2 mb-0">
                                  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook-light" href="auth_login.html#"><i class="fa fa-facebook"></i></a>
                                  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter-light" href="auth_login.html#"><i class="fa fa-twitter"></i></a>
                                  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram-light" href="auth_login.html#"><i class="fa fa-instagram"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>


@endsection
