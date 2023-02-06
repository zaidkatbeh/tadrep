@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/widgets'))
@section('title')
    widgets
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
                            <h4 class="page-title">Widgets</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Widgets</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex-grow-1 pb-15">
                                        <div class="d-flex align-items-center pe-2 mb-30">
								<span class="text-fade fw-600 fs-16 flex-grow-1">
									7 Hours Ago
								</span>
                                            <div class="bg-info-light h-50 w-50 l-h-50 rounded text-center">
                                                <img src="/assets/images/svg-icon/color-svg/001-glass.svg" class="h-30 align-self-center" alt="">
                                            </div>
                                        </div>

                                        <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-18">
                                            Lorem Ipsum is simply dummy<br>
                                            Printing
                                        </a>
                                        <p class="fs-16 mt-15 text-fade">
                                            There are many variations of passages.<br>
                                            Lorem Ipsum available<br>
                                            but the majority.
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column mt-10">
                                        <div class="d-flex">
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex-grow-1 pb-15">
                                        <div class="d-flex align-items-center pe-2 mb-30">
								<span class="text-fade fw-600 fs-16 flex-grow-1">
									7 Hours Ago
								</span>
                                            <div class="bg-danger-light h-50 w-50 l-h-50 rounded text-center">
                                                <img src="/assets/images/svg-icon/color-svg/008-python.svg" class="h-30 align-self-center" alt="">
                                            </div>
                                        </div>

                                        <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-18">
                                            Lorem Ipsum is simply dummy<br>
                                            Printing
                                        </a>
                                        <p class="fs-16 mt-15 text-fade">
                                            There are many variations of passages.<br>
                                            Lorem Ipsum available<br>
                                            but the majority.
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column mt-10">
                                        <div class="d-flex">
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-5.png" class="h-50 align-self-end" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex-grow-1 pb-15">
                                        <div class="d-flex align-items-center pe-2 mb-30">
								<span class="text-fade fw-600 fs-16 flex-grow-1">
									5 Hours Ago
								</span>
                                            <div class="bg-primary-light h-50 w-50 l-h-50 rounded text-center">
                                                <img src="/assets/images/svg-icon/color-svg/007-color-palette.svg" class="h-30 align-self-center" alt="">
                                            </div>
                                        </div>

                                        <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-18">
                                            Lorem Ipsum is simply dummy<br>
                                            Printing
                                        </a>
                                        <p class="fs-16 mt-15 text-fade">
                                            There are many variations of passages.<br>
                                            Lorem Ipsum available<br>
                                            but the majority.
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column mt-10">
                                        <div class="d-flex">
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="{{$link}}" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                <img src="/assets/images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 p-30 flex-grow-1 bg-img" style="background-position: left bottom; background-size: auto 80%; background-image: url('/assets/images/svg-icon/color-svg/custom-2.svg')">
                                        <div class="row">
                                            <div class="col-12 col-xl-7"></div>
                                            <div class="col-12 col-xl-5">
                                                <h4 class="text-primary fw-500">Join Us now to get 15% off</h4>

                                                <p class="text-fade my-10 fs-16">
                                                    Offering discounts for your online store can be a powerful weapon in to drive loyalty
                                                </p>
                                                <a href="{{$link}}" class="btn btn-primary-light">Join Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-danger p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url('/assets/images/svg-icon/color-svg/custom-3.svg')">

                                        <h4 class="fw-500">User Activity</h4>

                                        <p class="my-10 fs-16 text-white-70">
                                            Grow marketing &amp; sales<br>through product.
                                        </p>

                                        <a href="{{$link}}" class="btn btn-danger-light">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-primary p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url('/assets/images/svg-icon/color-svg/custom-4.svg')">

                                        <h4 class="fw-500">Based On</h4>

                                        <div class="mt-5">
                                            <div class="d-flex mb-10 fs-16">
                                                <span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
                                                <span class="text-white-70">Activities</span>
                                            </div>

                                            <div class="d-flex mb-10 fs-16">
                                                <span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
                                                <span class="text-white-70">Sales</span>
                                            </div>

                                            <div class="d-flex mb-10 fs-16">
                                                <span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
                                                <span class="text-white-70">Releases</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="box">
                                <div class="card-body d-flex p-0">
                                    <div class="flex-grow-1 px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: calc(100% + 0.5rem) bottom; background-size: 30% auto; background-image: url('/assets/images/svg-icon/color-svg/custom-5.svg')">

                                        <p class="text-primary py-10 fs-24 fw-500">
                                            Start with a branding<br>
                                            site design modern<br>
                                            content creation
                                        </p>

                                        <a href="{{$link}}" class="btn btn-primary-light">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-info px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: right bottom; background-size: 40% auto; background-image: url('/assets/images/svg-icon/color-svg/custom-6.svg')">
                                        <h3 class="fw-500">Start Now</h3>
                                        <p class="py-15 fs-16 text-white-70">
                                            Offering discounts for better<br>
                                            online a store can loyalty<br>
                                            weapon into driving
                                        </p>
                                        <a href="{{$link}}" class="btn btn-info-light">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-danger px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: calc(100% + 0.5rem) bottom; background-size: 30% auto; background-image: url('/assets/images/svg-icon/color-svg/custom-7.svg')">

                                        <p class="py-15 pb-5 fs-24">
                                            Start with a branding<br>
                                            site design modern<br>
                                            content creation
                                        </p>

                                        <a href="{{$link}}" class="btn btn-danger-light">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Trending Items
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                            <tr>
                                                <th class="p-0" style="width: 50px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 200px"></th>
                                                <th class="p-0" style="min-width: 40px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														65%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Phasellus venenatis nisi</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														83%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Aliquam in magna</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														47%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														71%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														50%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Trending Items
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                            <tr>
                                                <th class="p-0" style="width: 50px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 140px"></th>
                                                <th class="p-0" style="min-width: 120px"></th>
                                                <th class="p-0" style="min-width: 40px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Phasellus venenatis nisi</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Aliquam in magna</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Files
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                            <tr>
                                                <th class="p-0" style="width: 50px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 140px"></th>
                                                <th class="p-0" style="min-width: 120px"></th>
                                                <th class="p-0" style="min-width: 40px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                        <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-dark fw-600">1.24MB</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                        <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Phasellus venenatis nisi</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-dark fw-600">1.24MB</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                        <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Aliquam in magna</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-dark fw-600">1.24MB</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                        <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-dark fw-600">1.24MB</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                                        <span class="icon-Shield-user fs-24"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Generated 5 paragraphs
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-dark fw-600">1.24MB</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Trending Items
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                            <tr>
                                                <th class="p-0" style="width: 50px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 140px"></th>
                                                <th class="p-0" style="min-width: 120px"></th>
                                                <th class="p-0" style="min-width: 40px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Rating
											</span>
                                                    <ul class="list-inline mb-0">
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                    </ul>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-facebook btn-sm">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Rating
											</span>
                                                    <ul class="list-inline mb-0">
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                    </ul>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-facebook btn-sm">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Rating
											</span>
                                                    <ul class="list-inline mb-0">
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                    </ul>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-facebook btn-sm">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Rating
											</span>
                                                    <ul class="list-inline mb-0">
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                    </ul>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-facebook btn-sm">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-5.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Rating
											</span>
                                                    <ul class="list-inline mb-0">
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                        <li><i class="text-warning fa fa-star"></i></li>
                                                    </ul>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="{{$link}}" class="btn btn-social-icon btn-facebook btn-sm">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Trending Items
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                            <tr>
                                                <th class="p-0" style="width: 50px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 140px"></th>
                                                <th class="p-0" style="min-width: 120px"></th>
                                                <th class="p-0" style="min-width: 40px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-primary-light">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Phasellus venenatis nisi</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-warning-light">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Aliquam in magna</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-success-light">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-danger-light">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Duis faucibus lorem</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-warning-light">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Earnings
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                            <tr>
                                                <th class="p-0" style="width: 50px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 140px"></th>
                                                <th class="p-0" style="min-width: 120px"></th>
                                                <th class="p-0" style="min-width: 40px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade">
												45,800k
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="fw-600 text-primary">
												+28%
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade">
												$45,800k
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="fw-600 text-success">
												+28%
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade">
												$45,800k
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="fw-600 text-info">
												+28%
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade">
												$45,800k
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="fw-600 text-danger">
												+28%
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-5.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade">
												$45,800k
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="fw-600 text-warning">
												+28%
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title align-items-start flex-column">
                                        Agents Stats
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body py-0">
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <thead>
                                            <tr class="text-start">
                                                <th style="width: 50px">Authors</th>
                                                <th style="min-width: 200px"></th>
                                                <th style="min-width: 150px">Company</th>
                                                <th style="min-width: 150px">Progress</th>
                                                <th class="text-end" style="min-width: 150px">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Intertico
											</span>
                                                    <span class="text-fade d-block">
												Web, UI/UX Design
											</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														65%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Intertico
											</span>
                                                    <span class="text-fade d-block">
												Web, UI/UX Design
											</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														83%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Intertico
											</span>
                                                    <span class="text-fade d-block">
												Web, UI/UX Design
											</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														47%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                        <img src="/assets/images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Intertico
											</span>
                                                    <span class="text-fade d-block">
												Web, UI/UX Design
											</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column w-p100">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
													<span class="text-fade">
														71%
													</span>
                                                            <span class="text-fade">
														Progress
													</span>
                                                        </div>
                                                        <div class="progress progress-xs w-p100">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title align-items-start flex-column">
                                        Agents Stats
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body py-0">
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <thead>
                                            <tr class="text-start">
                                                <th class="p-0" style="width: 50px"></th>
                                                <th class="p-0" style="min-width: 200px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="p-0" style="min-width: 150px"></th>
                                                <th class="text-end p-0" style="min-width: 150px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/007-color-palette.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												45,800k
											</span>
                                                    <span class="text-fade d-block">
												Paid
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-primary-light">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												45,800k
											</span>
                                                    <span class="text-fade d-block">
												Paid
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-warning-light">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												45,800k
											</span>
                                                    <span class="text-fade d-block">
												Paid
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-success-light">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												45,800k
											</span>
                                                    <span class="text-fade d-block">
												Paid
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-danger-light">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>

                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                        <img src="/assets/images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{$link}}" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												45,800k
											</span>
                                                    <span class="text-fade d-block">
												Paid
											</span>
                                                </td>
                                                <td class="text-end">
											<span class="text-fade">
												Lacus lacinia mollis
											</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-warning-light">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>

                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title align-items-start flex-column">
                                        New Arrivals
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 250px"><span class="text-dark">products</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">pruce</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                                <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                                <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                                <th style="min-width: 120px"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="ps-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-20">
                                                            <div class="bg-img h-50 w-50" style="background-image: url('/assets/images/gallery/creative/img-1.jpg')"></div>
                                                        </div>

                                                        <div>
                                                            <a href="{{$link}}" class="text-dark fw-600 hover-primary mb-1 fs-16">Vivamus consectetur</a>
                                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45,800k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Sophia
											</span>
                                                    <span class="text-fade d-block">
												Pharetra
											</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-primary-light badge-lg">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-bookmark"></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-arrow-right"></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-20">
                                                            <div class="bg-img h-50 w-50" style="background-image: url('/assets/images/gallery/creative/img-2.jpg')"></div>
                                                        </div>

                                                        <div>
                                                            <a href="{{$link}}" class="text-dark fw-600 hover-primary mb-1 fs-16">Vivamus consectetur</a>
                                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45,800k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Sophia
											</span>
                                                    <span class="text-fade d-block">
												Pharetra
											</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-warning-light badge-lg">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-bookmark"></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-arrow-right"></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-20">
                                                            <div class="bg-img h-50 w-50" style="background-image: url('/assets/images/gallery/creative/img-3.jpg')"></div>
                                                        </div>

                                                        <div>
                                                            <a href="{{$link}}" class="text-dark fw-600 hover-primary mb-1 fs-16">Vivamus consectetur</a>
                                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45,800k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Sophia
											</span>
                                                    <span class="text-fade d-block">
												Pharetra
											</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success-light badge-lg">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-bookmark"></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-arrow-right"></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-20">
                                                            <div class="bg-img h-50 w-50" style="background-image: url('/assets/images/gallery/creative/img-4.jpg')"></div>
                                                        </div>

                                                        <div>
                                                            <a href="{{$link}}" class="text-dark fw-600 hover-primary mb-1 fs-16">Vivamus consectetur</a>
                                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45,800k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Sophia
											</span>
                                                    <span class="text-fade d-block">
												Pharetra
											</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger-light badge-lg">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-bookmark"></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-arrow-right"></span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-20">
                                                            <div class="bg-img h-50 w-50" style="background-image: url('/assets/images/gallery/creative/img-5.jpg')"></div>
                                                        </div>

                                                        <div>
                                                            <a href="{{$link}}" class="text-dark fw-600 hover-primary mb-1 fs-16">Vivamus consectetur</a>
                                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45,800k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Paid
											</span>
                                                    <span class="text-fade d-block">
												$45k
											</span>
                                                </td>
                                                <td>
											<span class="text-fade d-block">
												Sophia
											</span>
                                                    <span class="text-fade d-block">
												Pharetra
											</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-warning-light badge-lg">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-bookmark"></span></a>
                                                    <a href="{{$link}}" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="fa fa-arrow-right"></span></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">

                            <div class="box">
                                <div class="box-body bg-img bbsr-0 bber-0" style="background-image: url('/assets/images/gallery/thumb/5.jpg');" data-overlay="5">
                                    <div class="d-md-flex align-items-center text-white">
                                        <div>
                                            <h4 class="mb-0">People you may know</h4>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript: void(0)"><i class="mdi mdi-menu text-white fs-20"></i></a>
                                        </div>
                                    </div>
                                    <form class="mt-30 mb-20">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search by Email" aria-label="">
                                            <button class="btn btn-primary-light" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-body">
                                    <div class="row mb-20">
                                        <div class="col-4 text-center">
                                            <img src="/assets/images/avatar/3.jpg" alt="" class="img-fluid user-img">
                                            <h6 class="fs-12 mt-5">Nil Yeager</h6>
                                            <button class="btn btn-primary-light btn-sm">Connect</button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="/assets/images/avatar/1.jpg" alt="" class="img-fluid user-img">
                                            <h6 class="fs-12 mt-5">Miacal Doe</h6>
                                            <button class="btn btn-primary-light btn-sm">Connect</button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="/assets/images/avatar/2.jpg" alt="" class="img-fluid user-img">
                                            <h6 class="fs-12 mt-5">Akli Doe</h6>
                                            <button class="btn btn-primary-light btn-sm">Connect</button>
                                        </div>
                                    </div>
                                    <div class="row row-cols-2 g-2">
                                        <div class="col text-center">
                                            <button class="btn btn-twitter text-white">Invite from Twitter <i class="fa fa-twitter ms-10"></i></button>
                                        </div>
                                        <div class="col text-center">
                                            <button class="btn btn-facebook text-white">Invite from Facebook <i class="fa fa-facebook-f ms-10"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            <div class="box bg-img box-inverse" style="background-image: url('/assets/images/gallery/full/3.jpg');" data-overlay="5">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Latest</h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="{{$link}}"></a></li>
                                        <li><a class="box-btn-fullscreen" href="{{$link}}"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body mt-90">
                                    <span class="badge" data-overlay="5">New</span>
                                    <h2 class="fw-200 mb-0">Contrary to popular belief</h2>
                                    <p>There are many variations of passages</p>
                                    <ul class="flexbox flex-justified mt-50">
                                        <li>
                                            <p class="fs-20 text-success mb-0 fw-300"> <i class="fa fa-caret-up text-success"></i> +1.952%
                                                <small class="fs-12">41,425.81</small></p>
                                            <p> QWDR REF</p>
                                        </li>

                                        <li>
                                            <p class="fs-20 text-danger mb-0 fw-300"> <i class="fa fa-caret-down text-danger"></i> -0.952%
                                                <small class="fs-12">54,425.81</small></p>
                                            <p> WSDF THG</p>
                                        </li>

                                        <li>
                                            <p class="fs-20 text-success mb-0 fw-300"> <i class="fa fa-caret-up text-success"></i> +1.12%
                                                <small class="fs-12">85,425.81</small></p>
                                            <p> AERV HGT</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-3">
                            <div class="box bg-img box-inverse" style="background-image: url('/assets/images/gallery/thumb/14.jpg');" data-overlay="5">
                                <div class="box-header no-border">
                                    <h4><i class="fa fa-android"></i></h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="{{$link}}"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body mt-90">
                                    <span class="badge" data-overlay="5">New</span>
                                    <h2 class="fw-200 mb-0">Contrary to popular</h2>
                                    <p class="text-white-70">There are many variations of passages</p>
                                </div>
                            </div>
                            <div class="box bg-danger bg-temple-dark">
                                <div class="box-header no-border">
                                    <h4><i class="fa fa-map text-white"></i></h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close text-white" href="{{$link}}"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body mt-90">
                                    <span class="badge badge-warning">New</span>
                                    <h2 class="fw-200 mb-0">Contrary to popular</h2>
                                    <p>There are many variations of passages</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border bg-primary">
                                    <h4>Data Stats</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="{{$link}}" class="btn btn-outline btn-white px-10">Stats</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{$link}}"><i class="ti-import"></i> Import</a>
                                                <a class="dropdown-item" href="{{$link}}"><i class="ti-export"></i> Export</a>
                                                <a class="dropdown-item" href="{{$link}}"><i class="ti-printer"></i> Print</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{$link}}"><i class="ti-settings"></i> Settings</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body bg-primary bar-0">
                                    <div class="flexbox flex-justified text-center mt-50">
                                        <div class="b-1 rounded py-20">
                                            <p class="mb-0 fs-16">30%</p>
                                            <p class="mb-0 fw-400">DIRECT SALE</p>
                                        </div>
                                        <div class="b-1 rounded py-20">
                                            <p class="mb-0 fs-16">40%</p>
                                            <p class="mb-0 fw-400">WHOLE SALE</p>
                                        </div>
                                        <div class="b-1 rounded py-20">
                                            <p class="mb-0 fs-16">50%</p>
                                            <p class="mb-0 fw-400">RETAIL SALE</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">
                                        <div class="media media-single">
                                            <a href="{{$link}}">
                                                <img class="avatar avatar-lg bg-light" src="/assets/images/avatar/avatar-12.png" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="{{$link}}">Austin</a></h6>
                                                <small class="text-fade">CEO</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-primary-light btn-sm" href="{{$link}}">Contact</a>
                                            </div>
                                        </div>
                                        <div class="media media-single">
                                            <a href="{{$link}}">
                                                <img class="avatar avatar-lg bg-light" src="/assets/images/avatar/avatar-10.png" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="{{$link}}">Thomas</a></h6>
                                                <small class="text-fade">MD</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-primary-light btn-sm" href="{{$link}}">Contact</a>
                                            </div>
                                        </div>
                                        <div class="media media-single">
                                            <a href="{{$link}}">
                                                <img class="avatar avatar-lg bg-light" src="/assets/images/avatar/avatar-1.png" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="{{$link}}">Chase</a></h6>
                                                <small class="text-fade">HR</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-primary-light btn-sm" href="{{$link}}">Contact</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-12">
                            <!-- DIRECT CHAT PRIMARY -->
                            <div class="box direct-chat direct-chat-info">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Direct Chat</h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="{{$link}}"></a></li>
                                        <li><a class="box-btn-slide" href="{{$link}}"></a></li>
                                        <li><a class="box-btn-fullscreen" href="{{$link}}"></a></li>
                                        <li><a class="" data-bs-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-bs-original-title="Contacts" aria-label="Contacts"><i class="ti-comments"></i></a></li>
                                        <li><span data-bs-toggle="tooltip" title="" class="badge badge-pill badge-info" data-bs-original-title="1 New Messages">5</span></li>
                                    </ul>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 420px;"><div class="direct-chat-messages" style="overflow: hidden; width: auto; height: 420px;">
                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg mb-30">
                                                <div class="clearfix mb-15">
                                                    <span class="direct-chat-name">James Anderson</span>
                                                    <span class="direct-chat-timestamp pull-right">April 14, 2017</span>
                                                </div>
                                                <!-- /.direct-chat-info -->
                                                <img class="direct-chat-img avatar bg-light" src="/assets/images/avatar/avatar-12.png" alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    <p>Hi</p>
                                                    <p>Morbi ullamcorper mauris nec gravida molestie.</p>
                                                    <p class="direct-chat-timestamp"><time datetime="2018">23:58</time></p>
                                                </div>

                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right mb-30">
                                                <div class="clearfix mb-15">
                                                    <span class="direct-chat-name pull-right">You</span>
                                                </div>
                                                <div class="direct-chat-text">
                                                    <p>Hiii, I'm good.</p>
                                                    <p>Nunc nec lorem volutpat, placerat.</p>
                                                    <p class="direct-chat-timestamp"><time datetime="2018">00:06</time></p>
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->
                                        </div><div class="slimScrollBar" style="background: rgb(228, 230, 239); width: 4px; position: absolute; top: 0px; opacity: 0.8; display: none; border-radius: 7px; z-index: 99; right: 3px; height: 420px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 3px;"></div></div>
                                    <!--/.direct-chat-messages-->

                                    <!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <a href="{{$link}}">
                                                    <img class="contacts-list-img bg-light" src="/assets/images/avatar/avatar-10.png" alt="User Image">

                                                    <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Bryson
								  <small class="contacts-list-date pull-right">April 14, 2017</small>
								</span>
                                                        <span class="contacts-list-email">info@.multipurpose.com</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="{{$link}}">
                                                    <img class="contacts-list-img bg-light" src="/assets/images/avatar/avatar-1.png" alt="User Image">

                                                    <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Vincent
								  <small class="contacts-list-date pull-right">March 14, 2017</small>
								</span>
                                                        <span class="contacts-list-email">sonu@gmail.com</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                        </ul>
                                        <!-- /.contatcts-list -->
                                    </div>
                                    <!-- /.direct-chat-pane -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                            <div class="input-group-addon">
                                                <div class="align-self-end gap-items">
							  <span class="publisher-btn file-group">
								<i class="fa fa-paperclip file-browser"></i>
								<input type="file">
							  </span>
                                                    <a class="publisher-btn" href="{{$link}}"><i class="fa fa-smile-o"></i></a>
                                                    <a class="publisher-btn" href="{{$link}}"><i class="fa fa-paper-plane"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-footer-->
                            </div>
                            <!--/.direct-chat -->
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
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/widgets.js"></script>
@endsection
