@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/weather'))
@section('title')
    weather
@endsection
@section('bodyType')light-skin sidebar-mini fixed sidebar-collapse rtl theme-success @endsection

@section('content')
    <!--content -->
    <div class="wrapper">
        <div id="loader"></div>
        <!--header -->
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
                            <h4 class="page-title">Weather widgets</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Widgets</li>
                                        <li class="breadcrumb-item active" aria-current="page">Weather widgets</li>
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
                            <!-- Default box -->
                            <div class="box">
                                <div class="box-body">
                                    <img class="img-fluid" src="/assets/images/placeholder.jpg" alt="...">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div>
                                                        <h1><i class="wi-day-sunny"></i></h1>
                                                    </div>
                                                </div>
                                                <div class="col-8">
						  <span class="fs-40">20°
							<span class="fs-30">C</span>
						  </span>
                                                    <span class="fs-18">/</span>
                                                    <span class="fs-18">7°
							<span class="fs-16">C</span>
						  </span>
                                                    <p class="fs-14 mb-0">MONDAY 11.11.2017</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="row g-0 text-center">
                                                <div class="col-2">
                                                    <div class="weather-day vertical-align">
                                                        <div class="vertical-align-middle fs-16">
                                                            <div class="mb-10">TUE</div>
                                                            <i class="wi-day-sunny fs-24 mb-10"></i>
                                                            <div class="text-center">24°
                                                                <span class="fs-12">C</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="weather-day vertical-align">
                                                        <div class="vertical-align-middle fs-16">
                                                            <div class="mb-10">WED</div>
                                                            <i class="wi-day-cloudy fs-24 mb-10"></i>
                                                            <div class="text-center">21°
                                                                <span class="fs-12">C</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="weather-day vertical-align">
                                                        <div class="vertical-align-middle fs-16">
                                                            <div class="mb-10">THU</div>
                                                            <i class="wi-day-sunny fs-24 mb-10"></i>
                                                            <div class="text-center">25°
                                                                <span class="fs-12">C</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="weather-day vertical-align">
                                                        <div class="vertical-align-middle fs-16">
                                                            <div class="mb-10">FRI</div>
                                                            <i class="wi-day-cloudy-gusts fs-24 mb-10"></i>
                                                            <div class="text-center">20°
                                                                <span class="fs-12">C</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="weather-day vertical-align">
                                                        <div class="vertical-align-middle fs-16">
                                                            <div class="mb-10">SAT</div>
                                                            <i class="wi-day-lightning fs-24 mb-10"></i>
                                                            <div class="text-center">18°
                                                                <span class="fs-12">C</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="weather-day vertical-align">
                                                        <div class="vertical-align-middle fs-16">
                                                            <div class="mb-10">SUN</div>
                                                            <i class="wi-day-storm-showers fs-24 mb-10"></i>
                                                            <div class="text-center">14°
                                                                <span class="fs-12">C</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-footer-->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box bg-img box-inverse" style="background-image: url('/assets/images/gallery/thumb/4.jpg');" data-overlay="5">
                                <div class="box-body">
                                    <div class="p-5">
                                        <h3 class="white">
                                            <span class="fs-30">City, </span>Country
                                        </h3>
                                        <p class="weather-day-date mb-30">
                                            <span class="me-5">MONDAY</span> May 11, 2017
                                        </p>
                                        <div class="mb-30 weather-icon">
                                            <canvas class="me-40 text-top" id="icon1" width="128" height="128"></canvas>
                                            <div class="d-inline-block">
						  <span class="fs-50">29°
							<span class="fs-40">C</span>
						  </span>
                                                <p class="text-start">DAY RAIN</p>
                                            </div>
                                        </div>
                                        <div class="row no-space">
                                            <div class="col-2">
                                                <div>
                                                    <div class="mb-10">TUE</div>
                                                    <i class="wi-day-sunny fs-30 mb-10"></i>
                                                    <div>24°
                                                        <span class="fs-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <div class="mb-10">WED</div>
                                                    <i class="wi-day-cloudy fs-30 mb-10"></i>
                                                    <div>21°
                                                        <span class="fs-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <div class="mb-10">THU</div>
                                                    <i class="wi-day-sunny fs-30 mb-10"></i>
                                                    <div>25°
                                                        <span class="fs-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <div class="mb-10">FRI</div>
                                                    <i class="wi-day-cloudy-gusts fs-30 mb-10"></i>
                                                    <div>20°
                                                        <span class="fs-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <div class="mb-10">SAT</div>
                                                    <i class="wi-day-lightning fs-30 mb-10"></i>
                                                    <div>18°
                                                        <span class="fs-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <div class="mb-10">SUN</div>
                                                    <i class="wi-day-storm-showers fs-30 mb-10"></i>
                                                    <div>14°
                                                        <span class="fs-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box text-center bg-img box-inverse" style="background-image: url('/assets/images/gallery/thumb/4.jpg');" data-overlay="5">
                                <div class="box-body">
                                    <div class="p-30">
                                        <div class="weather-icon">
                                            <canvas id="icon2" width="128" height="128"></canvas>
                                        </div>
                                        <div>
					  <span class="fs-40">-4°
						<span class="fs-30">C</span>
					  </span>
                                        </div>
                                        <div>SNOWING</div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer bg-primary">
                                    <div class="p-15">
                                        <span class="fs-20">City, </span>
                                        <span class="fs-18">Country</span>
                                        <div>
                                            <span class="me-5">Today,</span> 05:12 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box text-center">
                                <div class="box-body bg-danger bbsr-0 bber-0">
                                    <div class="p-25">
                                        <div>
                                            <canvas id="icon3" width="128" height="128"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="p-30">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="white">
                                                    <i class="md-chevron-down fs-20 me-5"></i>
                                                    <span class="fs-30">8°</span>
                                                    <span class="fs-24">C</span>
                                                </div>
                                                <div>LOW</div>
                                            </div>
                                            <div class="col-6">
                                                <i class="md-chevron-up fs-20 me-5"></i>
                                                <span class="fs-30">19°</span>
                                                <span class="fs-24">C</span>
                                                <div>HIGH</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box">
                                <div class="box-header with-border bg-primary">
                                    <h3 class="box-title"><i class="ion-location"></i> City</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="fs-14">Fri 20/5</div>
                                            <div class="fs-40">
                                                27°
                                                <span class="fs-30">C</span>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <i class="wi-fog fs-50"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <!-- Default box -->
                            <div class="box">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="wi-day-sunny fs-40"></i>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="fs-40 grey-700">
                                                27°
                                                <span class="fs-30">C</span>
                                            </div>
                                            <div class="fs-14">Fri 20/5</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer bg-success">
                                    <h4 class="m-0"><i class="ion-location"></i> City</h4>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-6 col-12">

                            <!-- Default box -->
                            <div class="box bg-img box-inverse" style="background-image: url('/assets/images/gallery/thumb/9.jpg');" data-overlay="5">
                                <div class="box-body">
                                    <div class="row py-30">
                                        <div class="col-6">
                                            <div class="fs-40 grey-700">
                                                27°
                                                <span class="fs-30">C</span>
                                            </div>
                                            <div class="fs-14">Fri 20/5</div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <i class="wi-day-sunny fs-40"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>

                            <!-- /.box -->

                        </div>
                        <!-- /.col -->
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box box-inverse bg-img" style="background-image: url('/assets/images/gallery/thumb/9.jpg');" data-overlay="5">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="text-center p-45">
                                                <div class="vertical-align-middle">
                                                    <div class="fs-40">
                                                        27°
                                                        <span class="fs-24">C</span>
                                                    </div>
                                                    <div class="mt-3">City, Country</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <div class="text-center p-45 bs-1">
                                                <div class="vertical-align-middle">
                                                    <div class="fs-40">
                                                        <i class="wi-cloudy"></i>
                                                    </div>
                                                    <div class="mt-3">20.5.2017</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box box-inverse bg-img" style="background-image: url('/assets/images/gallery/thumb/7.jpg');" data-overlay="5">
                                <div class="box-body">
                                    <div class="p-5">
                                        <div class="fs-16 float-end"><i class="ion-location" aria-hidden="true"></i></div>
                                        <p class="fs-20">City, Country</p>
                                        <p class="fs-20">
                                            <i class="wi-day-cloudy me-15 fs-40"></i>
                                            <span class="fs-40 blue-600">20°
						<span class="fs-30">C</span>
					  </span>
                                            <span>/</span>
                                            <span>7°
						<span class="fs-16">C</span>
					  </span>
                                        </p>
                                        <p class="mb-5">MONDAY</p>
                                        <p class="mb-0">11.11.2017</p>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box box-inverse bg-img" style="background-image: url('/assets/images/gallery/thumb/19.jpg');" data-overlay="5">
                                <div class="box-body py-50">
                                    <div class="text-center">
                                        <div class="p-10">
                                            <i class="wi-day-sunny vertical-align-middle fs-50"></i>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-6">
                                                <i class="wi-strong-wind me-5"></i> 8 Kmph
                                            </div>
                                            <div class="col-6">
                                                <i class="wi-sprinkles me-5"></i> 40%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box text-center">
                                <div class="box-body bg-danger bbsr-0 bber-0">
                                    <div class="p-30">
                                        <div class="fs-40">
                                            27°
                                            <span class="fs-30">C</span>
                                            <i class="wi-day-cloudy-windy"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer with-border">
                                    Saturday 12 May
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box text-center bg-info">
                                <div class="box-body">
                                    <div class="p-30">
                                        <div class="fs-40">
                                            <i class="wi-day-cloudy-windy"></i>
                                            <span class="fs-40">
						27°
						<span class="fs-30">C</span>
					  </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer with-border bg-info">
                                    <div class="row no-space">
                                        <div class="col-6">
                                            <i class="wi-strong-wind me-10"></i>
                                            <span class="fw-bold">8</span>Kmph
                                        </div>
                                        <div class="col-6">
                                            <i class="wi-sprinkles me-10"></i>
                                            <span class="fw-bold">40</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-6 col-12">
                            <!-- Default box -->
                            <div class="box bg-info">
                                <div class="box-body">
                                    <div class="p-15 text-center">
                                        <div class="vertical-align-middle">
                                            <div class="fs-40">
                                                27°
                                                <span class="fs-30">C</span>
                                            </div>
                                            <div class="fs-20">City, Country</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.row -->

                </section>
                <!-- /.content -->
            </div>
        </div>        <!-- END MODAL -->
        <!-- footer -->
        @include('v1.web.template.footer')
        <!-- Side panel -->
        <!-- quick_user_toggle -->
        @include('v1.web.components.modelLeft')
        <!-- /quick_user_toggle -->
        <!-- Control Sidebar -->
        @include('v1.web.components.sidebarControl')
        <!-- /.control-sidebar -->
    </div>



    <!--chatbox -->
    @include('v1.web.components.chatBox')
    <!-- Page Content overlay -->


@endsection
@section('extraAssets')
    <script src="/assets/vendor_plugins/weather-icons/WeatherIcon.js"></script>
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/weather.js"></script>@endsection
