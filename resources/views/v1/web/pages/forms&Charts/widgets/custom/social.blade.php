@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/social'))
@section('title')
    social
@endsection
@section('bodyType')light-skin sidebar-mini fixed sidebar-collapse rtl theme-success @endsection

@section('content')
    <!--content -->
    <div class="wrapper" >
        <div id="loader" ></div>
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
                            <h4 class="page-title">Social widgets</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Widgets</li>
                                        <li class="breadcrumb-item active" aria-current="page">Social widgets</li>
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
                            <div class="box bg-primary-light">
                                <div class="box-header no-border">
                                    <h4 class="box-title text-primary">Advanced User Info</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex flex-row">
                                        <div class=""><img src="/assets/images/avatar/avatar-2.png" alt="user" class="rounded-circle bg-success-light" width="100"></div>
                                        <div class="ps-20">
                                            <h4>Nil Yeager</h4>
                                            <h6 class="text-fade">Project Manager</h6>
                                            <button class="btn btn-sm btn-info-light"><i class="ti-plus"></i> Follow</button>
                                        </div>
                                    </div>
                                    <div class="row mt-40">
                                        <div class="col text-center">
                                            <h5 class="text-fade">1254</h5>
                                            <h6 class="text-fade">Photos</h6></div>
                                        <div class="col text-center">
                                            <h5 class="text-fade">1254</h5>
                                            <h6 class="text-fade">Videos</h6></div>
                                        <div class="col text-center">
                                            <h5 class="text-fade">1587</h5>
                                            <h6 class="text-fade">Tasks</h6></div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="text-center text-fade">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae.
                                    </p>
                                    <ul class="list-inline text-center text-fade">
                                        <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" class="text-fade hover-primary" data-bs-original-title="Website" aria-label="Website"><i class="fa fa-globe fs-20"></i></a></li>
                                        <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" class="text-fade hover-primary" data-bs-original-title="twitter" aria-label="twitter"><i class="fa fa-twitter fs-20"></i></a></li>
                                        <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" class="text-fade hover-primary" data-bs-original-title="Facebook" aria-label="Facebook"><i class="fa fa-facebook-square fs-20"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body text-center">
                                    <div class="mb-20 mt-20">
                                        <img src="/assets/images/avatar/avatar-12.png" width="150" class="rounded-circle bg-info-light" alt="user">
                                        <h4 class="mt-20 mb-5">Nil Yeager</h4>
                                        <a class="text-fade" href="mailto:dummy@gmail.com">dummy@gmail.com</a>
                                    </div>
                                    <div class="badge badge-info-light fs-16">Dashboard</div>
                                    <div class="badge badge-primary-light fs-16">UI</div>
                                    <div class="badge badge-danger-light fs-16">UX</div>
                                    <div class="badge badge-warning-light fs-16" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="3 more">+10</div>
                                </div>
                                <div class="p-25 mt-10 bt-1">
                                    <div class="row text-center">
                                        <div class="col-6 be-1">
                                            <a href="{{$link}}" class="link d-flex align-items-center justify-content-center font-medium">
                                                <span class="icon-Mail fs-20 me-5"></span>Message</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{$link}}" class="link d-flex align-items-center justify-content-center font-medium">
                                                <span class="icon-Code1 fs-20 me-5"><span class="path1"></span><span class="path2"></span></span>Portfolio
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="text-white box-body bg-img text-center py-50" style="background-image: url('/assets/images/gallery/creative/img-12.jpg');" data-overlay="5">
                                    <a href="{{$link}}">
                                        <img class="avatar avatar-xxl rounded-circle bg-warning-light" src="/assets/images/avatar/avatar-16.png" alt="">
                                    </a>
                                    <h3 class="mt-2 mb-0"><a class="text-white" href="{{$link}}">Nil Yeager</a></h3>
                                    <span>Manager</span>
                                </div>
                                <ul class="flexbox flex-justified text-center p-20">
                                    <li>
                                        <span class="text-muted">Followers</span><br>
                                        <span class="fs-18">6.6K</span>
                                    </li>
                                    <li class="be-1 bs-1 border-light">
                                        <span class="text-muted">Following</span><br>
                                        <span class="fs-18">5148</span>
                                    </li>
                                    <li>
                                        <span class="text-muted">Tweets</span><br>
                                        <span class="fs-18">2154</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box p-30 pt-50 text-center">
                                <div>
                                    <a class="avatar avatar-xxl status-success mb-3 bg-transparent" href="{{$link}}">
                                        <img src="/assets/images/avatar/avatar-10.png" class="rounded-circle bg-primary-light" alt="...">
                                    </a>
                                </div>
                                <h4 class="mt-5 mb-5"><a class="text-default hover-primary" href="{{$link}}">Harmani Potter</a></h4>
                                <p><small class="fs-14">Manager</small></p>
                                <p class="text-fade fs-12 mb-20">Hello everyone, I am Maryam. My designs are used in several big companies in United State and other countries.</p>
                                <div class="gap-items">
                                    <a class="text-facebook btn btn-circle btn-facebook" href="{{$link}}"><i class="fa fa-facebook"></i></a>
                                    <a class="text-instagram btn btn-circle btn-instagram" href="{{$link}}"><i class="fa fa-instagram"></i></a>
                                    <a class="text-google btn btn-circle btn-google" href="{{$link}}"><i class="fa fa-google"></i></a>
                                    <a class="text-twitter btn btn-circle btn-twitter" href="{{$link}}"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box box-widget widget-user">
                                <div class="widget-user-header bg-img" style="background: url('/assets/images/gallery/creative/img-8.jpg') center center;" data-overlay="5">
                                    <h3 class="widget-user-username text-white">Michael Jorden</h3>
                                    <h6 class="widget-user-desc text-white-70">Creative Head</h6>
                                </div>
                                <div class="widget-user-image">
                                    <img class="rounded-circle bg-warning-light" src="/assets/images/avatar/avatar-2.png" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row mt-30">
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">12K</h5>
                                                <span class="description-text text-fade">FOLLOWERS</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 be-1 bs-1">
                                            <div class="description-block">
                                                <h5 class="description-header">550</h5>
                                                <span class="description-text text-fade">FOLLOWERS</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">158</h5>
                                                <span class="description-text text-fade">TWEETS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-primary">
                                    <div class="widget-user-image">
                                        <img class="rounded-circle bg-success-light" src="/assets/images/avatar/avatar-5.png" alt="User Avatar">
                                    </div>
                                    <h3 class="widget-user-username">Amanda Clark </h3>
                                    <h6 class="widget-user-desc text-white-70">Creative Head</h6>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav d-block nav-stacked">
                                        <li class="nav-item"><a href="{{$link}}" class="nav-link">Sales <span class="pull-right badge bg-info-light">1310</span></a></li>
                                        <li class="nav-item"><a href="{{$link}}" class="nav-link">Projects <span class="pull-right badge bg-success-light">120</span></a></li>
                                        <li class="nav-item"><a href="{{$link}}" class="nav-link">Followers <span class="pull-right badge bg-warning-light">8K</span></a></li>
                                        <li class="nav-item"><a href="{{$link}}" class="nav-link">Tasks <span class="pull-right badge bg-danger-light">58</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box bg-primary-light">
                                <div class="box-header no-border">
                                    <h4 class="box-title text-primary">Minimal User Info</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-body box-hover-shadow" href="{{$link}}">
                                <div class="flexbox align-items-center">
                                    <div>
                                        <h6 class="mb-0">Natasha Clark</h6>
                                        <small class="text-fade">Creative Head</small>
                                    </div>
                                    <img class="avatar avatar-lg" src="/assets/images/avatar/1.jpg" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-body box-hover-shadow" href="{{$link}}">
                                <div class="flexbox align-items-center">
                                    <img class="avatar avatar-lg" src="/assets/images/avatar/2.jpg" alt="...">
                                    <div class="text-end">
                                        <h6 class="mb-0">Kevin Black</h6>
                                        <small class="text-fade">Project Manager</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-body box-inverse box-primary" href="{{$link}}">
                                <div class="flexbox align-items-center">
                                    <div>
                                        <h6 class="mb-0">Adom Tony</h6>
                                        <small class="text-white-70">Creative Head</small>
                                    </div>
                                    <img class="avatar avatar-lg avatar-bordered" src="/assets/images/avatar/4.jpg" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-inverse box-body bg-img" href="{{$link}}" style="background-image: url('/assets/images/gallery/thumb-sm/1.jpg')" data-overlay="4">
                                <div class="flexbox align-items-center">
                                    <img class="avatar avatar-lg avatar-bordered" src="/assets/images/avatar/3.jpg" alt="...">
                                    <div class="text-end">
                                        <h6 class="mb-0">Monty Hulk</h6>
                                        <small class="text-white-70">Project Mg.</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box bg-primary-light">
                                <div class="box-header no-border">
                                    <h4 class="box-title text-primary">User Header</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box card-inverse bg-img" style="background-image: url('/assets/images/gallery/full/2.jpg'); padding-top: 275px">
                                <div class="flexbox align-items-center px-20" data-overlay="4">
                                    <div class="flexbox align-items-center me-auto">
                                        <a href="{{$link}}">
                                            <img class="avatar avatar-xl avatar-bordered" src="/assets/images/avatar/4.jpg" alt="">
                                        </a>
                                        <div class="ps-10 d-none d-md-block">
                                            <h5 class="mb-0"><a class="hover-primary text-white" href="{{$link}}">Roben Clark</a></h5>
                                            <span>Manager</span>
                                        </div>
                                    </div>

                                    <ul class="flexbox flex-justified text-center py-20">
                                        <li class="px-10">
                                            <span class="opacity-60">Followers</span><br>
                                            <span class="fs-20">9.6K</span>
                                        </li>
                                        <li class="px-10">
                                            <span class="opacity-60">Following</span><br>
                                            <span class="fs-20">9845</span>
                                        </li>
                                        <li class="ps-10">
                                            <span class="opacity-60">Tweets</span><br>
                                            <span class="fs-20">8456</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box bg-primary-light">
                                <div class="box-header no-border">
                                    <h4 class="box-title text-primary">Social Networks Feed</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box box-inverse bg-twitter">
                                <div class="box-header no-border">
                                    <span class="fa fa-twitter fs-30"></span>
                                    <div class="box-tools pull-right">
                                        <h5 class="box-title">Latest Tweets</h5>
                                    </div>
                                </div>
                                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                    <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
                                    <div class="flexbox">
                                        <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
                                        <span><i class="fa fa-heart"></i> 45</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box box-inverse bg-facebook">
                                <div class="box-header no-border">
                                    <span class="fa fa-facebook fs-30"></span>
                                    <div class="box-tools pull-right">
                                        <h5 class="box-title">Facebook feed</h5>
                                    </div>
                                </div>

                                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                    <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
                                    <div class="flexbox">
                                        <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
                                        <span><i class="fa fa-heart"></i> 75</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box box-inverse box-carousel slide bg-twitter">
                                <div class="box-header no-border">
                                    <span class="fa fa-twitter fs-30"></span>
                                    <div class="box-tools pull-right">
                                        <h5 class="box-title">Carousel feed</h5>
                                    </div>
                                </div>
                                <div class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                                <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
                                                <div class="flexbox">
                                                    <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
                                                    <span><i class="fa fa-heart"></i> 62</span>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="carousel-item active">
                                            <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                                <p>Uniquely revolutionize leveraged catalysts for change for world-class web services. Efficiently underwhelm competitive.</p>
                                                <div class="flexbox">
                                                    <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
                                                    <span><i class="fa fa-heart"></i> 45</span>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="carousel-item">
                                            <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                                <p>Enthusiastically optimize cross-media manufactured products without process-centric web services. Conveniently.</p>
                                                <div class="flexbox">
                                                    <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
                                                    <span><i class="fa fa-heart"></i> 65</span>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse box-success">
                                <div class="box-body">
                                    <a class="avatar float-start me-20" href="javascript:void(0)">
                                        <img src="/assets/images/avatar/5.jpg" alt="">
                                    </a>
                                    <div>
                                        <small class="float-end">Today, 16:05</small>
                                        <div class="fs-18">Nil Yeager</div>
                                        <div class="fs-14 mb-10">Project Manager</div>
                                        <blockquote class="blockquote my-20 fs-16 text-white">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse box-primary">
                                <div class="box-body">
                                    <div>
                                        <blockquote class="blockquote cover-quote fs-16 text-white mt-0">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.
                                            <div class="fs-16 mt-10">Nil Yeager</div>
                                            <div class="fs-14 mb-10">Project Manager</div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse box-info">
                                <div class="box-body">
                                    <a class="avatar float-start me-20" href="javascript:void(0)">
                                        <img src="/assets/images/avatar/5.jpg" alt="">
                                    </a>
                                    <div>
                                        <small class="float-end">Today, 16:05</small>
                                        <div class="fs-18">Nil Yeager</div>
                                        <div class="fs-14 mb-10">Project Manager</div>
                                        <blockquote class="blockquote cover-quote fs-16 text-white">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box">
                                <div class="box-header no-border" style="position: absolute;width: 100%;z-index: 9;">
                                    <ul class="list-inline pull-left">
                                        <li>
                                            <a href="{{$link}}" class="text-white"><i class="fa fa-expand"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{$link}}" class="text-white"><i class="fa fa-heart-o"></i></a>
                                        </li>
                                    </ul>
                                    <span class="badge badge-dot pull-right badge-danger" data-bs-toggle="tooltip" data-bs-original-title="Label"></span>
                                </div>
                                <div class="box-body bg-img py-70 bbsr-0 bber-0" style="background-image: url('/assets/images/gallery/thumb/5.jpg')" data-overlay="5">
                                    <blockquote class="blockquote blockquote-inverse no-border no-margin">
                                        <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="box-body">
                                    <h4>volutpat metus commodo.</h4>
                                    <div class="flexbox">
                                        <div class="time text-fade">Few seconds ago</div>
                                        <ul class="flexbox">
                                            <li><a href="{{$link}}" class="text-fade">845 <i class="fa fa-comment-o"></i></a></li>
                                            <li><a href="{{$link}}" class="text-fade">85K <i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer p-0">
                                    <div class="media-list media-list-hover">
                                        <a href="{{$link}}" class="media media-single">
                                            <img class="avatar pull-left me-10" src="/assets/images/avatar/2.jpg" alt="">
                                            <div>
                                                <h5 class="mb-0">Stevan Smith</h5>
                                                <p class="text-fade fs-12 mb-0">Shared a photo on your wall</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box">
                                <div class="box-header p-0">
                                    <div class="media-list media-list-hover">
                                        <a href="{{$link}}" class="media media-single">
                                            <img class="avatar pull-left me-10" src="/assets/images/avatar/4.jpg" alt="">
                                            <div>
                                                <h5 class="mb-0">Stevan Smith</h5>
                                                <p class="text-fade fs-12 mb-0">Shared a photo on your wall</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body bg-img py-70 bar-0" style="background-image: url('/assets/images/gallery/thumb/12.jpg')" data-overlay="5">
                                    <blockquote class="blockquote blockquote-inverse no-border no-margin">
                                        <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="box-body">
                                    <h4>volutpat metus commodo.</h4>
                                    <div class="flexbox">
                                        <div class="time text-fade">Few seconds ago</div>
                                        <ul class="flexbox">
                                            <li><a href="{{$link}}" class="text-fade">845 <i class="fa fa-comment-o"></i></a></li>
                                            <li><a href="{{$link}}" class="text-fade">85K <i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box">
                                <div class="box-header p-0">
                                    <div class="media-list media-list-hover">
                                        <a href="{{$link}}" class="media media-single">
                                            <img class="avatar pull-left me-10" src="/assets/images/avatar/3.jpg" alt="">
                                            <div>
                                                <h5 class="mb-0">Stevan Smith</h5>
                                                <p class="text-fade fs-12 mb-0">Shared a photo on your wall</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flexbox">
                                        <div class="time text-fade">Few seconds ago</div>
                                        <ul class="flexbox">
                                            <li><a href="{{$link}}" class="text-fade">845 <i class="fa fa-comment-o"></i></a></li>
                                            <li><a href="{{$link}}" class="text-fade">85K <i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body bg-img py-70 btsr-0 bter-0" style="background-image: url('/assets/images/gallery/thumb/1.jpg')" data-overlay="5">
                                    <blockquote class="blockquote blockquote-inverse no-border no-margin">
                                        <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box bg-primary-light">
                                <div class="box-header no-border">
                                    <h4 class="box-title text-primary">Basic User Info</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-body text-center py-30">
                                <a href="{{$link}}">
                                    <img class="avatar avatar-xxl" src="/assets/images/avatar/avatar-1.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="hover-primary" href="{{$link}}">Mika Khalif</a></h5>
                                <p class="text-fade">Project Repotar</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-body text-center py-30 box-inverse bg-primary">
                                <a href="{{$link}}">
                                    <img class="avatar avatar-xxl" src="/assets/images/avatar/avatar-10.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="{{$link}}">Mika Khalif</a></h5>
                                <p class="text-white">Project Repotar</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-body text-center py-30 bg-img" style="background-image:url('/assets/images/gallery/creative/img-9.jpg')" data-overlay="5">
                                <a href="{{$link}}">
                                    <img class="avatar avatar-xxl" src="/assets/images/avatar/avatar-9.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="{{$link}}">Mika Khalif</a></h5>
                                <p class="text-white">Project Repotar</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box">
                                <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-user"></i> Profile</a>
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-picture-o"></i> Shots</a>
                                            <a class="dropdown-item" href="{{$link}}"><i class="ti-check"></i> Follow</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-ban"></i> Block</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body text-center pt-1 pb-15">
                                    <a href="{{$link}}">
                                        <img class="avatar avatar-xxl" src="/assets/images/avatar/avatar-8.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="hover-primary" href="{{$link}}">Rostar Joy</a></h5>
                                    <p class="text-fade">Creative Head</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-inverse bg-danger-light">
                                <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-info fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-user"></i> Profile</a>
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-picture-o"></i> Shots</a>
                                            <a class="dropdown-item" href="{{$link}}"><i class="ti-check"></i> Follow</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-ban"></i> Block</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body text-center pt-1 pb-15">
                                    <a href="{{$link}}">
                                        <img class="avatar avatar-xxl" src="/assets/images/avatar/avatar-5.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="{{$link}}">Rostar Joy</a></h5>
                                    <p class="text-danger">Creative Head</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-inverse bg-img" style="background-image:url('/assets/images/gallery/creative/img-8.jpg')" data-overlay="5">
                                <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"><i class="ti-more-alt rotate-90 text-white"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-user"></i> Profile</a>
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-picture-o"></i> Shots</a>
                                            <a class="dropdown-item" href="{{$link}}"><i class="ti-check"></i> Follow</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i class="fa fa-ban"></i> Block</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body text-center pt-1 pb-15">
                                    <a href="{{$link}}">
                                        <img class="avatar avatar-xxl" src="/assets/images/avatar/avatar-11.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="{{$link}}">Rostar Joy</a></h5>
                                    <p class="text-white ">Creative Head</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>        <!-- BEGIN MODAL -->
        <!-- Modal Add Category -->
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
@endsection
