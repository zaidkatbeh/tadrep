@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/sample_pages/inVoice'))
@section('title')
    in voice 2
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
        <div class="content-wrapper" style="min-height: 374.5px;">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Invoice</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Invoice</li>
                                        <li class="breadcrumb-item active" aria-current="page">Invoice Sample</li>
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
                            <div class="box">
                                <div class="box-body px-lg-50 px-20">
                                    <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <div>
                                                <div class="mt-1">
                                                    <div class="d-flex pb-30 justify-content-between align-items-center">
                                                        <img alt="Logo" src="/assets/images/logo-light-text3.png" class="d-light">
                                                        <img alt="Logo" src="/assets/images/logo-light-text4.png" class="d-dark">
                                                        <a href="{{$link}}" class="btn btn-primary-light">Pay Now</a>
                                                    </div>
                                                    <div class="m-0">
                                                        <div class="fw-600 fs-24 text-fade mb-30">Invoice #54125</div>
                                                        <div class="row g-5 mb-20">
                                                            <div class="col-sm-6">
                                                                <div class="fw-500 fs-14 text-gray-600 mb-3">Issue Date:</div>
                                                                <div class="fw-500 fs-13 text-gray-500">27 Sep 2021</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="fw-500 fs-14 text-gray-600 mb-3">Due Date:</div>
                                                                <div class="fw-500 fs-13 text-gray-500 d-flex align-items-center flex-wrap">
                                                                    <span class="pe-2">21 Dec 2021</span>
                                                                    <span class="fs-14 text-danger d-flex align-items-center">
															<span class="fa fa-dot-circle-o text-danger me-2"></span>Due in 4 month</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-5 mb-12">
                                                            <div class="col-sm-6">
                                                                <div class="fw-500 fs-14 text-gray-600 mb-1">Issue For:</div>
                                                                <div class="fw-600 fs-13 text-gray-500">Johendoe company</div>
                                                                <div class="fw-500 fs-14 text-gray-600">7485 Dummy City
                                                                    <br>Mimai, FL 45454</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="fw-500 fs-14 text-gray-600 mb-1">Issued By:</div>
                                                                <div class="fw-600 fs-13 text-gray-500">Mical &amp; Son</div>
                                                                <div class="fw-500 fs-14 text-gray-600">8754 Lorem City
                                                                    <br>Miami, FL 45454</div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-20 flex-grow-1">
                                                            <div class="table-responsive mb-20">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr class="fs-13 fw-600 text-dark">
                                                                        <th class="min-w-175px">Item</th>
                                                                        <th class="min-w-70px text-end">Quantity</th>
                                                                        <th class="min-w-80px text-end">Unit Cost</th>
                                                                        <th class="min-w-100px text-end">Total</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="fw-600 text-gray-600 text-end">
                                                                        <td class="text-start text-dark">Laptop</td>
                                                                        <td>1</td>
                                                                        <td>$1799.00</td>
                                                                        <td class="fw-600 text-dark">$1799.00</td>
                                                                    </tr>
                                                                    <tr class="fw-600 text-gray-600 text-end">
                                                                        <td class="text-start text-dark">iPhone 12</td>
                                                                        <td>2</td>
                                                                        <td>$499.00</td>
                                                                        <td class="fw-600 text-dark">$998.00</td>
                                                                    </tr>
                                                                    <tr class="fw-600 text-gray-600 text-end">
                                                                        <td class="text-start text-dark">LED TV</td>
                                                                        <td>2</td>
                                                                        <td>$412.00</td>
                                                                        <td class="fw-600 text-dark">$824.00</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <div class="min-w-300">
                                                                    <div class="d-flex justify-content-between mb-3">
                                                                        <div class="fw-600 pe-10 text-gray-600 fs-14">Subtotal:</div>
                                                                        <div class="text-end fw-600 text-gray-500">$4120.00</div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between mb-3">
                                                                        <div class="fw-600 pe-10 text-gray-600 fs-14">VAT 12.5%</div>
                                                                        <div class="text-end fw-600 text-gray-500">$515.00</div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between mb-3">
                                                                        <div class="fw-600 pe-10 text-gray-600 fs-14">Subtotal + VAT</div>
                                                                        <div class="text-end fw-600 text-gray-500">$4.635.00</div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="fw-600 pe-10 text-gray-600 fs-14">Total</div>
                                                                        <div class="text-end fw-600 text-gray-500">$4.635.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12 mt-30 mt-lg-0">
                                            <div class="border border-dashed border-gray-300 card-rounded h-lg-p100 min-w-md-350 p-30 bg-gray-100 invoice-data">
                                                <div class="mb-30">
                                                    <span class="badge badge-lg badge-primary-light me-2">Approved</span>
                                                    <span class="badge badge-lg badge-danger-light">Pending Payment</span>
                                                </div>
                                                <h6 class="mb-30 fw-700 text-gray-600 text-hover-primary">PAYMENT DETAILS</h6>
                                                <div class="mb-30">
                                                    <div class="fw-600 text-gray-600 fs-14"><img src="/assets/images/paypal.png" class="mb-5 max-w-100" alt=""></div>
                                                    <div class="fw-600 text-gray-600">papypalid@demo.com</div>
                                                </div>
                                                <div class="mb-30">
                                                    <div class="fw-600 text-gray-500 fs-14">Account:</div>
                                                    <div class="fw-600 text-gray-600">64465 56464 446464 LLO
                                                        <br>IOC Dummy</div>
                                                </div>
                                                <div class="mb-30">
                                                    <div class="fw-600 text-gray-500 fs-14">Coupon Code:</div>
                                                    <div class="fw-600 text-gray-600 d-flex align-items-center">FREE25 </div>
                                                </div>
                                                <h6 class="mb-30 fw-700 text-gray-600 text-hover-primary">Bill Overview</h6>
                                                <div class="mb-30">
                                                    <div class="fw-600 text-gray-500 fs-14">Item Name</div>
                                                    <div class="fw-600 text-gray-600">Laptop</div>
                                                    <div class="fw-600 text-gray-600">iPhone 12</div>
                                                    <div class="fw-600 text-gray-600">LED TV</div>
                                                </div>
                                                <div class="mb-30">
                                                    <div class="fw-600 text-gray-500 fs-14">Manufacturer By:</div>
                                                    <div class="fw-600 text-gray-600">Nil Yeager</div>
                                                </div>
                                                <div class="m-0">
                                                    <div class="fw-600 text-gray-500 fs-14">Total Item &amp; Amount:</div>
                                                    <div class="fw-600 text-gray-600 d-flex align-items-center">5 items
                                                        <span class="fs-14 text-danger d-flex align-items-center">
											<span class="fa fa-dot-circle-o text-danger mx-2"></span>$4.635.00</span></div>
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
    <script src="/assets/js/pages/invoice.js"></script>
@endsection

