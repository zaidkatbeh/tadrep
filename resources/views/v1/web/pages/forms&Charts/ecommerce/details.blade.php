@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/ecommerce/details'))
@section('title')
    cart
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
                            <h4 class="page-title">Details</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="box box-body b-1 text-center no-shadow">
                                                <img src="/assets/images/product/product-6.png" id="product-image" class="img-fluid" alt="">
                                            </div>
                                            <div class="pro-photos">
                                                <div class="photos-item item-active">
                                                    <img src="/assets/images/product/product-6.png" alt="">
                                                </div>
                                                <div class="photos-item">
                                                    <img src="/assets/images/product/product-7.png" alt="">
                                                </div>
                                                <div class="photos-item">
                                                    <img src="/assets/images/product/product-8.png" alt="">
                                                </div>
                                                <div class="photos-item">
                                                    <img src="/assets/images/product/product-9.png" alt="">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="col-md-8 col-sm-6">
                                            <form class="ps-lg-4">
                                                <!-- Product title -->
                                                <h3 class="mt-0">Amazing Modern Chair (Orange) <a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                                <p class="fs-16">
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                </p>

                                                <!-- Product stock -->
                                                <div class="mt-3">
                                                    <h4><span class="badge badge-success-light">Instock</span></h4>
                                                </div>

                                                <!-- Product description -->
                                                <div class="mt-4">
                                                    <h6 class="fs-15">Retail Price:</h6>
                                                    <h3> $139.58</h3>
                                                </div>

                                                <!-- Quantity -->
                                                <div class="mt-4">
                                                    <h6 class="fs-15">Quantity</h6>
                                                    <div class="d-flex">
                                                        <input type="number" min="1" value="1" class="form-control" placeholder="Qty" style="width: 90px;">
                                                        <button type="button" class="btn btn-primary ms-2"><i class="mdi mdi-cart me-1"></i> Add to cart</button>
                                                    </div>
                                                </div>

                                                <!-- Product description -->
                                                <div class="mt-4">
                                                    <h6 class="fs-15">Description:</h6>
                                                    <p class="text-fade">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                                </div>

                                                <!-- Product information -->
                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6 class="fs-15">Available Stock:</h6>
                                                            <p class="text-fade">1784</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h6 class="fs-15">Number of Orders:</h6>
                                                            <p class="text-fade">5,458</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h6 class="fs-15">Revenue:</h6>
                                                            <p class="text-fade">$8,57,014</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <h4 class="box-title mt-40">General Info</h4>
                                            <div class="table-responsive">
                                                <table class="table text-fade">
                                                    <tbody>
                                                    <tr>
                                                        <td style="width: 390px;">Brand</td>
                                                        <td> Brand Name </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Delivery Condition</td>
                                                        <td> Lorem Ipsum </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Type</td>
                                                        <td> Party Wear </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Style</td>
                                                        <td> Modern </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Product Number</td>
                                                        <td> FG1548952 </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
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
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/ecommerce_details.js"></script>

@endsection

