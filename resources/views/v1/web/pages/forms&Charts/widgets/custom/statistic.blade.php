@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/statistic'))
@section('title')
    statistics
@endsection
@section('bodyType')light-skin sidebar-mini fixed sidebar-collapse rtl theme-success @endsection

@section('content')
    <!--content -->
    <div class="wrapper" >
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
                            <h4 class="page-title">Statistic widgets</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Widgets</li>
                                        <li class="breadcrumb-item active" aria-current="page">Statistic widgets</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="box bg-img" style="background-image: url('/assets/images/abstract-1.svg');background-position: right top; background-size: 30% auto;">
                                <div class="box-body">
                                    <a href="{{$link}}" class="box-title fw-600 hover-primary fs-18">Travel Schedule</a>
                                    <div class="fw-bold text-primary mt-20 mb-10">11:30PM</div>
                                    <p class="text-fade">
                                        There is no one who loves pain<br> itself, who seeks after...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box bg-img" style="background-image: url('/assets/images/abstract-2.svg');background-position: right top; background-size: 30% auto;">
                                <div class="box-body">
                                    <a href="{{$link}}" class="box-title fw-600 hover-primary fs-18">Anuncio</a>
                                    <div class="fw-bold text-primary mt-20 mb-10">16 Jan 2019</div>
                                    <p class="text-fade">
                                        There is no one who loves pain<br> itself, who seeks after...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box bg-img" style="background-image: url('/assets/images/abstract-3.svg');background-position: right top; background-size: 30% auto;">
                                <div class="box-body">
                                    <a href="{{$link}}" class="box-title fw-600 hover-primary fs-18">New Release</a>
                                    <div class="fw-bold text-primary mt-20 mb-10">HTML</div>
                                    <p class="text-fade">
                                        There is no one who loves pain<br> itself, who seeks after...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body d-flex align-items-center pb-0">
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="{{$link}}" class="box-title fw-500 fs-18 mb-2 hover-primary">Top Agent</a>
                                        <span class="fw-500 text-fade">Most Awards Earned</span>
                                    </div>
                                    <img src="/assets/images/avatar/avatar-1.png" alt="" class="align-self-end h-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body d-flex align-items-center pb-0">
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="{{$link}}" class="box-title fw-500 fs-18 mb-2 hover-primary">New Agent</a>
                                        <span class="fw-500 text-fade">Rising Stars</span>
                                    </div>
                                    <img src="/assets/images/avatar/avatar-2.png" alt="" class="align-self-end h-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body d-flex align-items-center pb-0">
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="{{$link}}" class="box-title fw-500 fs-18 mb-2 hover-primary">Top Expert</a>
                                        <span class="fw-500 text-fade">Ask Everything You Wish </span>
                                    </div>
                                    <img src="/assets/images/avatar/avatar-4.png" alt="" class="align-self-end h-100">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="fs-18 flexbox align-items-center">
                                    <span>Users</span>
                                    <i class="fa fa-user"></i>
                                </div>

                                <div class="progress progress-xxs mt-10 mb-10">
                                    <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="fw-400 mb-5 text-fade">62,158</small>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="fs-18 flexbox align-items-center">
                                    <span>Users</span>
                                    <span>68,951</span>
                                </div>

                                <div class="progress progress-xxs mt-10 mb-10">
                                    <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="fw-400 mb-5 text-fade"><i class="fa fa-sort-down text-danger me-1"></i> %18 decrease from last month</small>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="fs-18 flexbox align-items-center">
                                    <span>Users</span>
                                    <span>15,956</span>
                                </div>

                                <div class="progress progress-xxs mt-10 mb-10">
                                    <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-end"><small class="fw-400 mb-5 text-fade"><i class="fa fa-sort-up text-success me-1"></i> %48 up</small></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="row g-0 py-2">

                                    <div class="col-12 col-lg-3">
                                        <div class="box-body be-1 border-light">
                                            <div class="flexbox mb-1">
						  <span>
							  <span class="icon-User fs-40"><span class="path1"></span><span class="path2"></span></span><br>
							New Users
						  </span>
                                                <span class="text-primary fs-40">845</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-3 hidden-down">
                                        <div class="box-body be-1 border-light">
                                            <div class="flexbox mb-1">
						  <span>
							  <span class="icon-Selected-file fs-40"><span class="path1"></span><span class="path2"></span></span><br>
							Today Invoices
						  </span>
                                                <span class="text-info fs-40">952</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-3 d-none d-lg-block">
                                        <div class="box-body be-1 border-light">
                                            <div class="flexbox mb-1">
						  <span>
							  <span class="icon-Info-circle fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span><br>
							Open Issues
						  </span>
                                                <span class="text-warning fs-40">845</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-3 d-none d-lg-block">
                                        <div class="box-body">
                                            <div class="flexbox mb-1">
						  <span>
							  <span class="icon-Group-folders fs-40"><span class="path1"></span><span class="path2"></span></span><br>
							New Projects
						  </span>
                                                <span class="text-danger fs-40">158</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6>
                                    <span class="text-uppercase">Revenue</span>
                                    <span class="float-end"><a class="btn btn-xs btn-primary-light" href="{{$link}}">View</a></span>
                                </h6>
                                <br>
                                <p class="fs-26">$845,1258</p>

                                <div class="progress progress-xxs mt-0 mb-10">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="fs-12 text-fade"><i class="ion-arrow-graph-down-right text-success me-1"></i> %18 decrease from last month</div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6>
                                    <span class="text-uppercase">ORDERS</span>
                                    <span class="float-end"><a class="btn btn-xs btn-primary-light" href="{{$link}}">View</a></span>
                                </h6>
                                <br>
                                <p class="fs-26">159,1258</p>

                                <div class="progress progress-xxs mt-0 mb-10">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="fs-12 text-fade"><i class="ion-arrow-graph-down-right text-danger me-1"></i> %95 down</div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6>
                                    <span class="text-uppercase">VISITORS</span>
                                    <span class="float-end"><a class="btn btn-xs btn-primary-light" href="{{$link}}">View</a></span>
                                </h6>
                                <br>
                                <p class="fs-26">84,9658</p>

                                <div class="progress progress-xxs mt-0 mb-10">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="flexbox fs-12 text-fade">
                                    <span><i class="ion-arrow-graph-down-right text-success me-1"></i> %54 up</span>
                                    <span>+90258</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4">
                            <a href="{{$link}}" class="box bg-danger bg-hover-danger">
                                <div class="box-body">
                                    <span class="text-white icon-Cart2 fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="text-white fw-600 fs-18 mb-2 mt-5">Shopping Cart</div>
                                    <div class="text-white-70 fs-16">Duis, Faucibus, Lorem, Vitae</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="{{$link}}" class="box bg-info bg-hover-info">
                                <div class="box-body">
                                    <span class="text-white icon-Layout-arrange fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="text-white fw-600 fs-18 mb-2 mt-5">Apartamentos</div>
                                    <div class="text-white-70 fs-16">Duis, Faucibus, Lorem, Vitae</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="{{$link}}" class="box bg-success bg-hover-success">
                                <div class="box-body">
                                    <span class="text-white icon-Equalizer fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                    <div class="text-white fw-600 fs-18 mb-2 mt-5">Sales Stats</div>
                                    <div class="text-white-70 fs-16">70% Up for 2019</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="{{$link}}" class="box bg-hover-primary-light">
                                <div class="box-body">
                                    <span class="text-primary icon-Cart2 fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="fw-600 fs-18 mb-2 mt-5">Shopping Cart</div>
                                    <div class="text-fade fs-16">Duis, Faucibus, Lorem, Vitae</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="{{$link}}" class="box bg-hover-info-light">
                                <div class="box-body">
                                    <span class="text-info icon-Layout-arrange fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="text-info fw-600 fs-18 mb-2 mt-5">Apartamentos</div>
                                    <div class="text-mute fs-16">Duis, Faucibus, Lorem, Vitae</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="{{$link}}" class="box bg-hover-warning-light">
                                <div class="box-body">
                                    <span class="text-warning icon-Equalizer fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                    <div class="text-warning fw-600 fs-18 mb-2 mt-5">Sales Stats</div>
                                    <div class="text-mute fs-16">70% Up for 2019</div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25">
                                <div class="text-center">
                                    <h1 class="countnm fs-50 m-0">158</h1>
                                    <div class="text-uppercase text-fade">counters</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25 bg-info">
                                <div class="text-center">
                                    <h1 class="countnm fs-50 m-0">-158</h1>
                                    <div class="text-uppercase text-white-70">counters</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25">
                                <div class="text-center">
                                    <div class="text-uppercase text-fade">counters</div>
                                    <h1 class="countnm fs-50 m-0">158</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25 bg-danger">
                                <div class="text-center">
                                    <div class="text-uppercase text-white-70">counters</div>
                                    <h1 class="countnm fs-50 m-0">-158</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-inverse p-25 bg-img" style="background-image: url('/assets/images/gallery/thumb/15.jpg');" data-overlay="5">
                                <div class="text-center">
                                    <div class="text-uppercase text-white-70">counters</div>
                                    <h1 class="countnm per fs-50 m-0">58</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25">
                                <div class="text-center">
                                    <h1 class="countnm per fs-50 m-0">-58</h1>
                                    <div class="text-uppercase text-fade">counters</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="box-group">
                                <div class="box overflow-hidden">
                                    <div class="vertical-align h-200">
                                        <div class="vertical-align-middle fs-30 text-center w-p100">
                                            <span class="icon-Equalizer fs-50 me-10"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                            <span class="countnm per">75</span>
                                            <div class="fs-24 mt-3 text-fade">More Profit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden bg-primary-light">
                                    <div class="vertical-align text-center p-30 h-200">
                                        <div class="vertical-align-middle fs-40">
                                            <p class="text-primary">Today</p>
                                            <p class="text-primary">Sale</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="box-group">
                                <div class="box overflow-hidden">
                                    <div class="vertical-align h-200">
                                        <div class="vertical-align-middle fs-30 text-center w-p100">
                                            <span class="icon-Chart-line fs-50 me-10"><span class="path1"></span><span class="path2"></span></span>
                                            <span class="countnm per">75</span>
                                            <div class="fs-24 mt-3 text-fade">More Profit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden box-inverse bg-img" style="background-image: url('/assets/images/gallery/full/10.jpg')" data-overlay="5">
                                    <div class="vertical-align text-center p-30 h-200">
                                        <div class="vertical-align-middle fs-40">
                                            <p>Today</p>
                                            <p>Sale</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- box -->
                            <div class="box-group">
                                <div class="box overflow-hidden">
                                    <div class="bg-warning-light vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <div class="mb-5"><span class="icon-Play"></span></div>
                                            <span class="countnm text-warning">8457</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden p-0">
                                    <div class="bg-danger vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <div class="mb-5"><span class="icon-Image"></span></div>
                                            <span class="countnm">1254</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden p-0">
                                    <div class="bg-success-light vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <div class="mb-5"><span class="icon-Active-call"><span class="path1"></span><span class="path2"></span></span></div>
                                            <span class="countnm text-success">9563</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- box -->
                            <div class="box-group">
                                <div class="box">
                                    <div class="vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <span class="countnm per">42</span>
                                            <div class="mb-5 text-info"><span class="icon-Play"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-0">
                                    <div class="vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <span class="countnm per">50</span>
                                            <div class="mb-5 text-primary"><span class="icon-Image"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-0">
                                    <div class="vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <span class="countnm per">84</span>
                                            <div class="mb-5 text-success"><span class="icon-Active-call"><span class="path1"></span><span class="path2"></span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="mt-5"><span class="icon-Shield-check fs-50"><span class="path1"></span><span class="path2"></span></span></p>
                                            <p class="fw-600">Badges</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="mt-5">
                                                <span class="icon-Incoming-mail fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
                                            </p>
                                            <p class="fw-600">Inbox</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="mt-5">
                                                <span class="icon-Cart fs-50 text-danger"><span class="path1"></span><span class="path2"></span></span>
                                            </p>
                                            <p class="fw-600">Cart</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-pop text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="fs-40">
                                                <strong>$499</strong>
                                            </p>
                                            <p class="fw-600">
                                                <span class="icon-Money me-5 text-info"><span class="path1"></span><span class="path2"></span></span>Earnings
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-pop text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="fs-40 text-success">
                                                <strong>10</strong>
                                            </p>
                                            <p class="fw-600">
                                                <span class="icon-Incoming-mail me-5 text-success"><span class="path1"></span><span class="path2"></span></span> Messages
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-pop text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="fs-40 text-danger">
                                                <strong>3</strong>
                                            </p>
                                            <p class="fw-600">
                                                <span class="icon-Cart me-5 text-danger"><span class="path1"></span><span class="path2"></span></span> Products
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                <div class="box-body py-25 bg-info-light bbsr-0 bber-0">
                                    <p class="fw-600 text-info">Badges</p>
                                </div>
                                <div class="box-body">
                                    <p class="mt-5">
                                        <span class="icon-Shield-check fs-50 text-info"><span class="path1"></span><span class="path2"></span></span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                <div class="box-body py-25 bg-success-light bbsr-0 bber-0">
                                    <p class="fw-600">Inbox</p>
                                </div>
                                <div class="box-body">
                                    <p class="mt-5">
                                        <span class="icon-Incoming-mail fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                <div class="box-body py-25 bg-danger-light bbsr-0 bber-0">
                                    <p class="fw-600">Cart</p>
                                </div>
                                <div class="box-body">
                                    <p class="mt-5">
                                        <span class="icon-Cart fs-50 text-danger"><span class="path1"></span><span class="path2"></span></span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-pop text-center" href="javascript:void(0)">
                                <div class="box-body">
                                    <p class="fs-40 text-danger">
                                        <strong>987€</strong>
                                    </p>
                                </div>
                                <div class="box-body py-25 bg-danger-light btsr-0 bter-0">
                                    <p class="fw-600">
                                        <span class="icon-Money me-5 text-danger"><span class="path1"></span><span class="path2"></span></span> Balance
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-pop text-center" href="javascript:void(0)">
                                <div class="box-body">
                                    <p class="fs-40 text-info">
                                        <strong>35</strong>
                                    </p>
                                </div>
                                <div class="box-body py-25 bg-info-light btsr-0 bter-0">
                                    <p class="fw-600">
                                        <span class="icon-Airplay-video me-5 text-info"><span class="path1"></span><span class="path2"></span></span> Videos
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-pop text-center" href="javascript:void(0)">
                                <div class="box-body">
                                    <p class="fs-40 text-warning">
                                        <strong>15</strong>
                                    </p>
                                </div>
                                <div class="box-body py-25 bg-warning-light btsr-0 bter-0">
                                    <p class="fw-600">
                                        <span class="icon-Ticket me-5 text-warning"></span> Tickets
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box box-body text-center">
                                <div class="fs-40 fw-200">280</div>
                                <div class="text-fade">Countries</div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body bg-primary">
                                <div class="flexbox">
                                    <span class="icon-User fs-50"><span class="path1"></span><span class="path2"></span></span>
                                    <span class="fs-40 fw-200">45,965</span>
                                </div>
                                <div class="text-end">Users</div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="flexbox">
                                    <span class="icon-File text-primary fs-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                    <span class="fs-40 fw-200">+859</span>
                                </div>
                                <div class="text-end text-fade">Article</div>
                            </div>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6 class="text-uppercase">Today likes</h6>
                                <div class="flexbox mt-2">
                                    <span class="icon-Heart text-danger fs-40"></span>
                                    <span class="fs-30 text-fade">85,987</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body bg-success">
                                <h6 class="text-uppercase">Today likes</h6>
                                <div class="flexbox mt-2">
                                    <span class="fs-30">75,951</span>
                                    <span class="icon-Like fs-40"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="box box-body bg-info">
                                <h6 class="text-uppercase">TODAY COMMENTS</h6>
                                <div class="flexbox mt-2">
                                    <span class="icon-Group-chat fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <span class="fs-30 text-white-70">15,845</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </section>
                <!-- /.content -->
            </div>
        </div>        <!-- Modal Add Category -->
        <!-- END MODAL -->
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

    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/statistic.js"></script>
@endsection
