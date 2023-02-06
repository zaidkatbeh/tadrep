@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/sample_pages/inVoice'))
@section('title')
    iv voice
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
                <section class="invoice printableArea">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="float-end mt-3">
                                <h5 class="text-dark">Hello, Jhone Doe</h5>
                                <p class="text-muted ">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                            </div>

                        </div><!-- end col -->
                        <div class="col-sm-4 offset-sm-2">
                            <div class="mt-3 float-sm-end">
                                <p class="text-fade"><sapn class="text-dark">Order Date: </sapn> &nbsp;&nbsp;&nbsp; Jan 17, 2021</p>
                                <p class="text-fade"><sapn class="text-dark">Order Status: </sapn> <span class="badge bg-success float-end">Paid</span></p>
                                <p class="text-fade"><sapn class="text-dark">Order ID: </sapn> <span class="float-end">#123456</span></p>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row mt-4">
                        <div class="col-sm-4 text-fade">
                            <h6 class="text-dark">Billing Address</h6>
                            <address>
                                Kheby Doe<br>
                                125 Lorem Ave, Suite 512<br>
                                Miami, FL 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div> <!-- end col-->

                        <div class="col-sm-4 text-fade">
                            <h6 class="text-dark">Shipping Address</h6>
                            <address>
                                Nil Yeager<br>
                                123 Lorem Ave, Suite 845<br>
                                Miami, FL 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div> <!-- end col-->

                        <div class="col-sm-4">
                            <div class="text-sm-end">
                                <img src="/assets/images/qrcode.png" alt="barcode-image" class="w-150 img-fluid me-2">
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="text-fade table-bordered table mt-4">
                                    <thead>
                                    <tr>
                                        <th class="text-dark">#</th>
                                        <th class="text-dark">Item</th>
                                        <th class="text-dark">Quantity</th>
                                        <th class="text-dark">Unit Cost</th>
                                        <th class="text-end text-dark">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span class="text-dark">Laptop</span> <br>
                                            Brand Model VGN-TXN27N/B
                                            11.1" Notebook PC
                                        </td>
                                        <td>1</td>
                                        <td>$1799.00</td>
                                        <td class="text-end">$1799.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <span class="text-dark">Warranty</span> <br>
                                            Two Year Extended Warranty -
                                            Parts and Labor
                                        </td>
                                        <td>3</td>
                                        <td>$499.00</td>
                                        <td class="text-end">$1497.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <span class="text-dark">LED</span> <br>
                                            80cm (32) HD Ready LED TV
                                        </td>
                                        <td>2</td>
                                        <td>$412.00</td>
                                        <td class="text-end">$824.00</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6 text-fade">
                            <div class="clearfix pt-3">
                                <h5 class="text-dark">Notes:</h5>
                                <small>
                                    All accounts are to be paid within 7 days from receipt of
                                    invoice. To be paid by cheque or credit card or direct payment
                                    online. If account is not paid within 7 days the credits details
                                    supplied as confirmation of work undertaken will be charged the
                                    agreed quoted fee noted above.
                                </small>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-sm-6">
                            <div class="float-end text-fade mt-3 mt-sm-0">
                                <p><span class="text-dark">Sub-total:</span> <span class="float-end">$4120.00</span></p>
                                <p><span class="text-dark">VAT (12.5):</span> <span class="float-end">$515.00</span></p>
                                <h3>$4635.00 USD</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="d-print-none mt-4">
                        <div class="text-end">
                            <a href="javascript:window.print()" class="btn btn-primary-light me-10"><i class="mdi mdi-printer"></i> Print</a>
                            <a href="javascript: void(0);" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                    <!-- end buttons -->
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
    <script src="/assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js"></script>
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/invoice.js"></script>
@endsection

