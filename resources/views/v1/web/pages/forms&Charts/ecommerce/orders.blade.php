@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/ecommerce/orders'))
@section('title')
    orders
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
                            <h4 class="page-title">Orders</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                                    <div class="row mb-2">
                                        <div class="col-xl-8">
                                            <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                                <div class="col-auto">
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                </div>
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center">
                                                        <label for="status-select" class="me-2">Status</label>
                                                        <select class="form-select" id="status-select">
                                                            <option selected="">Choose...</option>
                                                            <option value="1">Paid</option>
                                                            <option value="2">Awaiting Authorization</option>
                                                            <option value="3">Payment failed</option>
                                                            <option value="4">Cash On Delivery</option>
                                                            <option value="5">Fulfilled</option>
                                                            <option value="6">Unfulfilled</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="text-xl-end mt-xl-0 mt-2">
                                                <button type="button" class="btn btn-primary mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add New Order</button>
                                                <button type="button" class="btn btn-primary-light mb-2">Export</button>
                                            </div>
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead class="table-light text-fade">
                                            <tr class="text-dark">
                                                <th style="width: 20px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Payment Status</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Order Status</th>
                                                <th style="width: 125px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9708</a> </td>
                                                <td>
                                                    Aug, 05 2018 <small>10:29 PM</small>
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-success-light"><i class="mdi mdi-bitcoin"></i> Paid</span></p>
                                                </td>
                                                <td>
                                                    $176.41
                                                </td>
                                                <td>
                                                    Mastercard
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Shipped</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9707</a> </td>
                                                <td>Aug, 04 2018 <small>08:18 AM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-warning-light"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></p>
                                                </td>
                                                <td>
                                                    $1,458.65
                                                </td>
                                                <td>
                                                    Visa
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Processing</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                                        <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9706</a> </td>
                                                <td>Aug, 04 2018 <small>10:29 PM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-success-light"><i class="mdi mdi-bitcoin"></i> Paid</span></p>
                                                </td>
                                                <td>
                                                    $801.99
                                                </td>
                                                <td>
                                                    Credit Card
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Processing</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                                        <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9705</a> </td>
                                                <td>Aug, 03 2018 <small>07:56 AM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-success-light"><i class="mdi mdi-bitcoin"></i> Paid</span></p>
                                                </td>
                                                <td>
                                                    $215.35
                                                </td>
                                                <td>
                                                    Mastercard
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Delivered</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                                        <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9704</a> </td>
                                                <td>May, 22 2018 <small>07:22 PM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-danger-light"><i class="mdi mdi-cancel"></i> Payment Failed</span></p>
                                                </td>
                                                <td>
                                                    $2,514.36
                                                </td>
                                                <td>
                                                    Paypal
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Cancelled</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                                        <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9703</a> </td>
                                                <td>Apr, 02 2018 <small>03:02 AM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-success-light"><i class="mdi mdi-bitcoin"></i> Paid</span></p>
                                                </td>
                                                <td>
                                                    $183.20
                                                </td>
                                                <td>
                                                    Payoneer
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Shipped</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck8">
                                                        <label class="form-check-label" for="customCheck8">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9702</a> </td>
                                                <td>Mar, 18 2018 <small>11:19 PM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-warning-light"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></p>
                                                </td>
                                                <td>
                                                    $1,768.41
                                                </td>
                                                <td>
                                                    Visa
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Processing</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck9">
                                                        <label class="form-check-label" for="customCheck9">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9701</a> </td>
                                                <td>Feb, 01 2018 <small>07:22 AM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-info-light"><i class="mdi mdi-cash"></i> Unpaid</span></p>
                                                </td>
                                                <td>
                                                    $3,582.99
                                                </td>
                                                <td>
                                                    Paypal
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Shipped</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck10">
                                                        <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9700</a> </td>
                                                <td>Jan, 22 2018 <small>08:09 PM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-success-light"><i class="mdi mdi-bitcoin"></i> Paid</span></p>
                                                </td>
                                                <td>
                                                    $923.95
                                                </td>
                                                <td>
                                                    Credit Card
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Delivered</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck11">
                                                        <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{$link}}" class="text-body fw-500">#BM9699</a> </td>
                                                <td>Jan, 17 2018 <small>02:30 PM</small></td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-success-light"><i class="mdi mdi-bitcoin"></i> Paid</span></p>
                                                </td>
                                                <td>
                                                    $5,177.68
                                                </td>
                                                <td>
                                                    Mastercard
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="badge badge-primary-light">Shipped</span></p>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon mx-2"> <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
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
    <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/data-table.js"></script>
@endsection

