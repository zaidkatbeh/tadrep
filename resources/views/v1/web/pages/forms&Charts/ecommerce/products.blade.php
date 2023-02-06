@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/ecommerce/products'))
@section('title')
    products
@endsection
@section('bodyType')light-skin sidebar-mini fixed sidebar-collapse rtl theme-success @endsection

@section('content')
    <!--content -->
    <div class="wrapper">
        <div id="loader"></div>

        @include('v1.web.template.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('v1.web.template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 411.5px;">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Products</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <form>
                                        <div class="form-group mb-30">
                                            <h3 class="fw-500 fs-15 mt-0 mb-20">Categories</h3>
                                            <div class="checkbox-list">
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_1" class="chk-col-primary">
                                                    <label for="md_checkbox_1" class="fs-13 fw-400 d-flex justify-content-between text-fade"> T-shirts
                                                        <span class="ml-auto text-fade font-600">28</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_2" class="chk-col-primary">
                                                    <label for="md_checkbox_2" class="fs-13 fw-400 d-flex justify-content-between text-fade"> Shirts
                                                        <span class="ml-auto text-fade font-600">125</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_3" class="chk-col-primary">
                                                    <label for="md_checkbox_3" class="fs-13 fw-400 d-flex justify-content-between text-fade"> Jeans
                                                        <span class="ml-auto text-fade font-600">99</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_4" class="chk-col-primary">
                                                    <label for="md_checkbox_4" class="fs-13 fw-400 d-flex justify-content-between text-fade"> Jackets
                                                        <span class="ml-auto text-fade font-600">412</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_5" class="chk-col-primary">
                                                    <label for="md_checkbox_5" class="fs-13 fw-400 d-flex justify-content-between text-fade">Electronics
                                                        <span class="ml-auto text-fade font-600">65</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-30">
                                            <h3 class="fw-500 fs-15 mt-0 mb-20">Price</h3>
                                            <div class="checkbox-list">
                                                <div class="mb-2">
                                                    <input name="group1" type="radio" id="radio_1">
                                                    <label for="radio_1" class="fs-13 fw-400 d-flex justify-content-between text-fade">All
                                                        <span class="ml-auto text-fade font-600">28</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input name="group1" type="radio" id="radio_2">
                                                    <label for="radio_2" class="fs-13 fw-400 d-flex justify-content-between text-fade">0$ - 99$
                                                        <span class="ml-auto text-fade font-600">1403</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input name="group1" type="radio" id="radio_3">
                                                    <label for="radio_3" class="fs-13 fw-400 d-flex justify-content-between text-fade">100$ - 999$
                                                        <span class="ml-auto text-fade font-600">570</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input name="group1" type="radio" id="radio_4">
                                                    <label for="radio_4" class="fs-13 fw-400 d-flex justify-content-between text-fade">100$ - 999$
                                                        <span class="ml-auto text-fade font-600">570</span>
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input name="group1" type="radio" id="radio_5">
                                                    <label for="radio_5" class="fs-13 fw-400 d-flex justify-content-between text-fade">1000$ &amp; Above
                                                        <span class="ml-auto text-fade font-600">38</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-30">
                                            <h3 class="fw-500 fs-15 mt-0 mb-20">Pricing</h3>
                                            <div class="checkbox-list">
                                                <div class="slider slider-horizontal" id="primary"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 25%;"></div><div class="slider-selection" style="left: 25%; width: 50%;"></div><div class="slider-track-high" style="right: 0px; width: 25%;"></div><div class="slider-handle min-slider-handle" role="slider" aria-valuemin="-200" aria-valuemax="200" aria-valuenow="-100" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle" role="slider" aria-valuemin="-200" aria-valuemax="200" aria-valuenow="100" tabindex="0" style="left: 75%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 50%; margin-left: -38px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 25%; margin-left: -24.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max top" role="presentation" style="left: 75%; margin-left: -22px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="primary" data-value="-100,100" style="display: none;">
                                            </div>
                                        </div>

                                        <div class="form-group mb-30">
                                            <h3 class="fw-500 mt-0 mb-20">Discount</h3>
                                            <div class="checkbox-list">
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_6" class="chk-col-primary">
                                                    <label for="md_checkbox_6" class="fs-13 fw-400 d-flex justify-content-between text-fade"> Less than 10%</label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_7" class="chk-col-primary">
                                                    <label for="md_checkbox_7" class="fs-13 fw-400 d-flex justify-content-between text-fade"> 10% or more</label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_8" class="chk-col-primary">
                                                    <label for="md_checkbox_8" class="fs-13 fw-400 d-flex justify-content-between text-fade"> 20% or more</label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_9" class="chk-col-primary">
                                                    <label for="md_checkbox_9" class="fs-13 fw-400 d-flex justify-content-between text-fade"> 30% or more</label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_10" class="chk-col-primary">
                                                    <label for="md_checkbox_10" class="fs-13 fw-400 d-flex justify-content-between text-fade">40% or more</label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="checkbox" id="md_checkbox_11" class="chk-col-primary">
                                                    <label for="md_checkbox_11" class="fs-13 fw-400 d-flex justify-content-between text-fade">50% or more</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Reset</button>
                                        <button type="reset" class="btn btn-primary-light">Setup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-12">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="overlay position-relative">
                                                <div class="position-absolute r-0"><span class="bg-primary-light avatar rounded10">-10%</span></div>
                                                <img src="/assets/images/product/product-1.png" alt="" class="img-fluid">
                                                <div class="overlay-layer">
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary me-2">Quick View</a>
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary-light">Purchase</a>
                                                </div>
                                            </div>
                                            <div class="mt-30 pro-dec text-center">
                                                <h5 class="fw-500"><a href="{{$link}}">Product Name</a></h5>
                                                <p>Lorem Ipsum Dummy Text</p>
                                                <div class="reting">
                                                    <ul class="list-inline text-center">
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-dle d-flex justify-content-center align-items-center">
                                                    <p class="fs-16 mb-0 text-fade me-10"><del>$199</del></p>
                                                    <p class="fs-16 mb-0 fw-600">$149</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="overlay position-relative">
                                                <div class="position-absolute r-0"><span class="bg-primary-light avatar rounded10">-15%</span></div>
                                                <img src="/assets/images/product/product-2.png" alt="" class="img-fluid">
                                                <div class="overlay-layer">
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary me-2">Quick View</a>
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary-light">Purchase</a>
                                                </div>
                                            </div>
                                            <div class="mt-30 pro-dec text-center">
                                                <h5 class="fw-500"><a href="{{$link}}">Product Name</a></h5>
                                                <p>Lorem Ipsum Dummy Text</p>
                                                <div class="reting">
                                                    <ul class="list-inline text-center">
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-dle d-flex justify-content-center align-items-center">
                                                    <p class="fs-16 mb-0 text-fade me-10"><del>$199</del></p>
                                                    <p class="fs-16 mb-0 fw-600">$149</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="overlay position-relative">
                                                <div class="position-absolute r-0"><span class="bg-primary-light avatar rounded10">-20%</span></div>
                                                <img src="/assets/images/product/product-3.png" alt="" class="img-fluid">
                                                <div class="overlay-layer">
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary me-2">Quick View</a>
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary-light">Purchase</a>
                                                </div>
                                            </div>
                                            <div class="mt-30 pro-dec text-center">
                                                <h5 class="fw-500"><a href="{{$link}}">Product Name</a></h5>
                                                <p>Lorem Ipsum Dummy Text</p>
                                                <div class="reting">
                                                    <ul class="list-inline text-center">
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-dle d-flex justify-content-center align-items-center">
                                                    <p class="fs-16 mb-0 text-fade me-10"><del>$199</del></p>
                                                    <p class="fs-16 mb-0 fw-600">$149</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="overlay position-relative">
                                                <div class="position-absolute r-0"><span class="bg-primary-light avatar rounded10">-50%</span></div>
                                                <img src="/assets/images/product/product-4.png" alt="" class="img-fluid">
                                                <div class="overlay-layer">
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary me-2">Quick View</a>
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary-light">Purchase</a>
                                                </div>
                                            </div>
                                            <div class="mt-30 pro-dec text-center">
                                                <h5 class="fw-500"><a href="{{$link}}">Product Name</a></h5>
                                                <p>Lorem Ipsum Dummy Text</p>
                                                <div class="reting">
                                                    <ul class="list-inline text-center">
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-dle d-flex justify-content-center align-items-center">
                                                    <p class="fs-16 mb-0 text-fade me-10"><del>$199</del></p>
                                                    <p class="fs-16 mb-0 fw-600">$149</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="overlay position-relative">
                                                <div class="position-absolute r-0"><span class="bg-primary-light avatar rounded10">-15%</span></div>
                                                <img src="/assets/images/product/product-5.png" alt="" class="img-fluid">
                                                <div class="overlay-layer">
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary me-2">Quick View</a>
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary-light">Purchase</a>
                                                </div>
                                            </div>
                                            <div class="mt-30 pro-dec text-center">
                                                <h5 class="fw-500"><a href="{{$link}}">Product Name</a></h5>
                                                <p>Lorem Ipsum Dummy Text</p>
                                                <div class="reting">
                                                    <ul class="list-inline text-center">
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-dle d-flex justify-content-center align-items-center">
                                                    <p class="fs-16 mb-0 text-fade me-10"><del>$199</del></p>
                                                    <p class="fs-16 mb-0 fw-600">$149</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="overlay position-relative">
                                                <div class="position-absolute r-0"><span class="bg-primary-light avatar rounded10">-30%</span></div>
                                                <img src="/assets/images/product/product-6.png" alt="" class="img-fluid">
                                                <div class="overlay-layer">
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary me-2">Quick View</a>
                                                    <a href="{{$link}}" class="btn btn-sm btn-primary-light">Purchase</a>
                                                </div>
                                            </div>
                                            <div class="mt-30 pro-dec text-center">
                                                <h5 class="fw-500"><a href="{{$link}}">Product Name</a></h5>
                                                <p>Lorem Ipsum Dummy Text</p>
                                                <div class="reting">
                                                    <ul class="list-inline text-center">
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                        <li class="px-0"><i class="text-warning fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-dle d-flex justify-content-center align-items-center">
                                                    <p class="fs-16 mb-0 text-fade me-10"><del>$199</del></p>
                                                    <p class="fs-16 mb-0 fw-600">$149</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>        @include('v1.web.template.footer')
        <!-- Side panel -->
        <!-- quick_user_toggle -->
        @include('v1.web.components.modelLeft')
        <!-- /quick_user_toggle -->

        <!-- Control Sidebar -->
        @include('v1.web.components.sidebarControl')




    </div>
    <!-- ./wrapper -->



    @include('v1.web.components.chatBox')

    <!-- Page Content overlay -->
@endsection

<!-- Vendor JS -->
@section('extraAssets')
    <script src="/assets/vendor_plugins/bootstrap-slider/bootstrap-slider.js"></script>
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script>$('.slider').slider()</script>

@endsection

