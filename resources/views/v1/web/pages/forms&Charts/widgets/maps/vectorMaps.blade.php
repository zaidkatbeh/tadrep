@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/maps/vector_maps'))
@section('title')
    vector maps
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
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Vector Map</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Map</li>
                                    <li class="breadcrumb-item active" aria-current="page">Vector Map</li>
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
                            <div class="box-header with-border">
                                <h4 class="box-title">World Map</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="world-map-markers" style="height: 400px"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">India</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="india" style="height: 350px"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">USA</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="usa" style="height: 350px"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Australia</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="australia" style="height: 350px"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">UK</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="uk" style="height: 350px"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col -->
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

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


<!-- Vendor JS -->
@section('extraAssets')

<script src="/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-world-mill-en.js"></script>
<script src="/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-in-mill.js"></script>
<script src="/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-us-aea-en.js"></script>
<script src="/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-uk-mill-en.js"></script>
<script src="/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-au-mill.js"></script>
<script src="/assets/vendor_components/jvectormap/lib2/jvectormap.custom.js"></script>

<!-- EmployX App -->
<script src="/assets/js/demo.js"></script>
<script src="/assets/js/template.js"></script>

@endsection

