@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/ecommerce/cart'))
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
                            <h4 class="page-title">Cart</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-centered mb-0">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                        <th style="width: 50px;"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="/assets/images/product/product-1.png" alt="" class="bg-gray-300 rounded me-3" height="64">
                                                            <p class="m-0 d-inline-block align-middle fs-16">
                                                                <a href="{{$link}}" class="text-body">Product name 1</a>
                                                                <br>
                                                                <small class="text-fade me-2">Size: <span class="fw-500">Large</span> </small>
                                                                <small class="text-fade me-2">Color: <span class="fw-500">Light Green</span> </small>
                                                            </p>
                                                        </td>
                                                        <td>$148.66</td>
                                                        <td><input type="number" min="1" value="5" class="form-control" placeholder="Qty" style="width: 90px;"></td>
                                                        <td>$743.30</td>
                                                        <td><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="/assets/images/product/product-2.png" alt="" class="bg-gray-300 rounded me-3" height="64">
                                                            <p class="m-0 d-inline-block align-middle fs-16">
                                                                <a href="{{$link}}" class="text-body">Product name 2</a>
                                                                <br>
                                                                <small class="text-fade me-2">Size: <span class="fw-500">Large</span> </small>
                                                                <small class="text-fade me-2">Color: <span class="fw-500">Light Green</span> </small>
                                                            </p>
                                                        </td>
                                                        <td>$148.66</td>
                                                        <td><input type="number" min="1" value="5" class="form-control" placeholder="Qty" style="width: 90px;"></td>
                                                        <td>$743.30</td>
                                                        <td><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="/assets/images/product/product-3.png" alt="" class="bg-gray-300 rounded me-3" height="64">
                                                            <p class="m-0 d-inline-block align-middle fs-16">
                                                                <a href="{{$link}}" class="text-body">Product name 3</a>
                                                                <br>
                                                                <small class="text-fade me-2">Size: <span class="fw-500">Large</span> </small>
                                                                <small class="text-fade me-2">Color: <span class="fw-500">Light Green</span> </small>
                                                            </p>
                                                        </td>
                                                        <td>$148.66</td>
                                                        <td><input type="number" min="1" value="5" class="form-control" placeholder="Qty" style="width: 90px;"></td>
                                                        <td>$743.30</td>
                                                        <td><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="/assets/images/product/product-4.png" alt="" class="bg-gray-300 rounded me-3" height="64">
                                                            <p class="m-0 d-inline-block align-middle fs-16">
                                                                <a href="{{$link}}" class="text-body">Product name 4</a>
                                                                <br>
                                                                <small class="text-fade me-2">Size: <span class="fw-500">Large</span> </small>
                                                                <small class="text-fade me-2">Color: <span class="fw-500">Light Green</span> </small>
                                                            </p>
                                                        </td>
                                                        <td>$148.66</td>
                                                        <td><input type="number" min="1" value="5" class="form-control" placeholder="Qty" style="width: 90px;"></td>
                                                        <td>$743.30</td>
                                                        <td><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive-->

                                            <!-- Add note input-->
                                            <div class="mt-3">
                                                <label for="example-textarea" class="form-label">Add a Note:</label>
                                                <textarea class="form-control" id="example-textarea" rows="3" placeholder="Write some note.."></textarea>
                                            </div>

                                            <!-- action buttons-->
                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="{{$link}}" class="btn btn-primary-light">
                                                        <i class="mdi mdi-arrow-left"></i> Continue Shopping </a>
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-end">
                                                        <a href="{{$link}}" class="btn btn-primary"><i class="mdi mdi-cart-plus me-1"></i> Checkout </a>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-4">
                                            <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                <h4 class="header-title mb-3">Order Summary</h4>

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>Grand Total :</td>
                                                            <td class="text-fade fw-500">$1571.19</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discount : </td>
                                                            <td class="text-fade fw-500">-$157.11</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Charge :</td>
                                                            <td class="text-fade fw-500">$25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Tax : </td>
                                                            <td class="text-fade fw-500">$19.22</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total :</th>
                                                            <th>$1458.3</th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end table-responsive -->
                                            </div>

                                            <div class="alert alert-warning mt-3" role="alert">
                                                Use coupon code <strong>HYPBM</strong> and get 10% discount !
                                            </div>

                                            <div class="input-group mt-3">
                                                <input type="text" class="form-control" placeholder="Coupon code" aria-label="Recipient's username">
                                                <button class="btn btn-primary" type="button">Apply</button>
                                            </div>
                                            <div class="box mt-3 no-shadow b-1 border-light">
                                                <div class="box-header">
                                                    <h4 class="box-title">Support</h4>
                                                </div>

                                                <div class="box-body">
                                                    <h4 class="fw-500"><i class="ti-mobile"></i> +1800 123 1234 <span class="text-primary">(Toll Free)</span></h4>
                                                    <p class="text-fade">Contact us for any queries. We are avalible 24x7x365.</p>
                                                </div>
                                            </div>

                                        </div> <!-- end col -->

                                    </div> <!-- end row -->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </section>
                <!-- /.content -->
            </div>
        </div>
        @include('v1.web.template.footer')
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

@endsection

