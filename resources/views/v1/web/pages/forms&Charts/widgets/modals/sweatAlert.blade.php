@extends('v1.web.template.master')
@php($link=URL('/widgets/modals/sweat_alert'))
@section('title')
    sweat alert
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
                            <h4 class="page-title">Notification Alert</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Component</li>
                                        <li class="breadcrumb-item active" aria-current="page">Notification Alert</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">A Basic message</h4>
                                    <p class="m-0 text-fade">(Click on image)</p>
                                    <img src="/assets/images/alert/alert.png" alt="alert" class="model_img img-fluid" id="sa-basic">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">Title with a text under</h4>
                                    <p class="m-0 text-fade">(Click on image)</p>
                                    <img src="/assets/images/alert/alert2.png" alt="alert" class="model_img img-fluid" id="sa-title">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">Success Message</h4>
                                    <p class="m-0 text-fade">(Click on image)</p>
                                    <img src="/assets/images/alert/alert3.png" alt="alert" class="model_img img-fluid" id="sa-success">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">Warning message</h4>
                                    <p class="m-0 text-fade">(Click on image)</p>
                                    <img src="/assets/images/alert/alert4.png" alt="alert" class="model_img img-fluid" id="sa-warning">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">A Cancelled message</h4>
                                    <p class="m-0 text-fade">(Click on image)</p>
                                    <img src="/assets/images/alert/alert5.png" alt="alert" class="model_img img-fluid" id="sa-params">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">Alert with Image</h4>
                                    <p class="m-0 text-fade">(Click on image)</p>
                                    <img src="/assets/images/alert/alert7.png" alt="alert" class="model_img img-fluid" id="sa-image">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">Alert with time</h4>
                                    <p class="m-0 text-fade">(Click on image)</p>
                                    <img src="/assets/images/alert/alert6.png" alt="alert" class="model_img img-fluid" id="sa-close">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- ./row -->
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

