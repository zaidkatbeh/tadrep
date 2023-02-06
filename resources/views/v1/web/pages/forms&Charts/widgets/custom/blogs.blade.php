@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/blogs'))
@section('title')
    blogs
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
                        <h4 class="page-title">Blog widgets</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{$link}}"><i
                                                    class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">widgets</li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog widgets</li>
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
                                <h4 class="box-title text-primary">Blog With Slider</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="news-slider owl-carousel owl-loaded owl-drag" data-nav-dots="false"
                             data-autoplay="true" data-items="4" data-md-items="2" data-sm-items="1" data-xs-items="1"
                             data-xx-items="1">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-1824px, 0px, 0px); transition: all 0.25s ease 0s; width: 5928px;">
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/2.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/3.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/4.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/5.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/1.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/2.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/3.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/4.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/5.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/1.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/2.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/3.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 436px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="blog-post rounded overflow-hidden">
                                                <div class="entry-image clearfix">
                                                    <img class="img-fluid" src="/assets/images/gallery/thumb-sm/4.jpg"
                                                         alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a href="{{$link}}">Blog Post With Image</a>
                                                    </div>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-folder-open-o"></i> Design</a>
                                                            </li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="{{$link}}"
                                                                   class="text-mute hover-primary"><i
                                                                            class="fa fa-calendar-o"></i> 12 Aug
                                                                    2020</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Possimus fuga laborum totam itaque
                                                            architecto! Laudantium sed delectus assumenda, doloribus
                                                            non.</p>
                                                    </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{$link}}"
                                                               class="btn btn-primary-light btn-sm">Read more</a>
                                                        </div>
                                                        <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{$link}}"
                                                                       class="text-mute hover-primary"> <i
                                                                                class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"><i class="fa fa-angle-left fa-2x"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right fa-2x"></i></div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="box bg-primary-light">
                            <div class="box-header no-border">
                                <h4 class="box-title text-primary">Blog Style</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="entry-image clearfix">
                                <div class="owl-carousel bottom-dots-center owl-theme owl-loaded owl-drag"
                                     data-nav-dots="true" data-autoplay="true" data-items="1" data-md-items="1"
                                     data-sm-items="1" data-xs-items="1" data-xx-items="1">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                             style="transform: translate3d(-1824px, 0px, 0px); transition: all 0.25s ease 0s; width: 4259px;">
                                            <div class="owl-item cloned" style="width: 588.328px; margin-right: 20px;">
                                                <div class="item">
                                                    <img src="/assets/images/gallery/thumb-sm/3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 588.328px; margin-right: 20px;">
                                                <div class="item">
                                                    <img src="/assets/images/gallery/thumb-sm/4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 588.328px; margin-right: 20px;">
                                                <div class="item">
                                                    <img src="/assets/images/gallery/thumb-sm/2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 588.328px; margin-right: 20px;">
                                                <div class="item">
                                                    <img src="/assets/images/gallery/thumb-sm/3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 588.328px; margin-right: 20px;">
                                                <div class="item">
                                                    <img src="/assets/images/gallery/thumb-sm/4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 588.328px; margin-right: 20px;">
                                                <div class="item">
                                                    <img src="/assets/images/gallery/thumb-sm/2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 588.328px; margin-right: 20px;">
                                                <div class="item">
                                                    <img src="/assets/images/gallery/thumb-sm/3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev"><i class="fa fa-angle-left fa-2x"></i></div>
                                        <div class="owl-next"><i class="fa fa-angle-right fa-2x"></i></div>
                                    </div>
                                    <div class="owl-dots">
                                        <button role="button" class="owl-dot"><span></span></button>
                                        <button role="button" class="owl-dot active"><span></span></button>
                                        <button role="button" class="owl-dot"><span></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blog Post With Image Slider</a>
                                </div>

                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="entry-image clearfix">
                                <ul class="grid-post list-unstyled">
                                    <li>
                                        <img class="img-fluid" src="/assets/images/gallery/thumb-sm/4.jpg" alt="">
                                    </li>
                                    <li>
                                        <img class="img-fluid" src="/assets/images/gallery/thumb-sm/7.jpg" alt="">
                                    </li>
                                    <li>
                                        <img class="img-fluid" src="/assets/images/gallery/thumb-sm/9.jpg" alt="">
                                    </li>
                                    <li>
                                        <img class="img-fluid" src="/assets/images/gallery/thumb-sm/5.jpg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blogpost With Image Grid Gallery</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="entry-image clearfix">
                                <div class="blog-p-post-you-tube">
                                    <div class="cs-video [youtube, widescreen]">
                                        <iframe src="https://player.vimeo.com/video/69437399" width="640" height="360"
                                                frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                                allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blogpost With Vemio Embeded Video</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="entry-image clearfix">
                                <div class="blog-p-post-you-tube">
                                    <div class="cs-video [youtube, widescreen]">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/34fOZgy4TqI"
                                                frameborder="0" allow="autoplay; encrypted-media"
                                                allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blogpost With youtube Embeded Video</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="entry-image clearfix">
                                <div class="blockquote clearfix">
                                    <blockquote class="blockquote">
                                        The trouble with programmers is that you can never tell what a programmer is
                                        doing until it's too late. The future belongs to a different kind of person with
                                        a different kind of mind: artists, inventors, storytellers-creative and holistic
                                        ‘right-brain’ thinkers whose abilities mark the fault line between who gets
                                        ahead and who doesn’t.
                                        <cite class="text-white"> – Daniel Pink</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blogpost Quote</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="blog-entry-html-video clearfix">
                                <video style="width:100%;height:100%;" id="player1"
                                       poster="/assets/images/gallery/thumb-sm/9.jpg" controls="" preload="none">
                                    <source type="video/mp4" src="video/video.mp4">
                                    <source type="video/webm" src="video/video.webm">
                                    <source type="video/ogg" src="video/video.ogv">
                                </video>
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blogpost With HTML video</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="entry-image clearfix">
                                <iframe style="height: auto; width: 100%;"
                                        src="https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/118951274&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blogpost With Soundcloud Audio</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-post rounded overflow-hidden">
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{$link}}">Blogpost Without image</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul class="list-unstyled">
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-folder-open-o"></i> Design</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="{{$link}}" class="text-mute hover-primary"><i
                                                        class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Possimus fuga laborum totam itaque architecto! Laudantium sed delectus
                                        assumenda, doloribus non.</p>
                                </div>
                                <div class="entry-share d-flex justify-content-between align-items-center">
                                    <div class="entry-button">
                                        <a href="{{$link}}" class="btn btn-primary-light btn-sm">Read more</a>
                                    </div>
                                    <div class="social">
                                        <strong>Share : </strong>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="{{$link}}" class="text-mute hover-primary"> <i
                                                            class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-12 h-p100">
                        <div class="box card-inverse bg-img text-center py-80"
                             style="background-image: url('/assets/images/gallery/thumb/12.jpg')" data-overlay="5">
                            <div class="card-body">
                                <span class="bb-1 opacity-80 pb-2">22 October, 2019</span>
                                <br><br>
                                <h3>Aenean venenatis arcu quis ante porttitor bibendum.</h3>
                                <br><br>
                                <a class="btn btn-primary-light" href="{{$link}}">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="box overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="box-body">
                                        <h4><a href="{{$link}}">Aenean venenatis arcu quis ante porttitor
                                                bibendum.</a></h4>
                                        <p class="text-mute">October 19, 2019</p>

                                        <p class="text-gray-600">Vestibulum volutpat, ante sit amet dignissim imperdiet,
                                            diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc,
                                            ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget
                                            justo lacinia rutrum sed at mi.</p>

                                        <div class="flexbox align-items-center mt-3">
                                            <a class="btn btn-sm btn-primary" href="{{$link}}">Read more</a>

                                            <div class="gap-items-4">
                                                <a class="text-muted" href="{{$link}}">
                                                    <i class="fa fa-heart me-1"></i> 25
                                                </a>
                                                <a class="text-muted" href="{{$link}}">
                                                    <i class="fa fa-comment me-1"></i> 23
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-block">
                                    <div class="bg-img h-p100 bar-0"
                                         style="background-image: url('/assets/images/gallery/thumb/13.jpg')"></div>
                                </div>
                            </div>
                        </div>

                        <div class="box overflow-hidden">
                            <div class="row g-0">
                                <div class="col-4 d-none d-md-block">
                                    <div class="bg-img h-p100 bar-0"
                                         style="background-image: url('/assets/images/gallery/thumb/9.jpg')"></div>
                                </div>
                                <div class="col-md-8">
                                    <div class="box-body">
                                        <h4><a href="{{$link}}">Aenean venenatis arcu quis ante porttitor
                                                bibendum.</a></h4>
                                        <hr class="w-50 ms-0 bt-2">
                                        <p class="text-gray-600">Vestibulum volutpat, ante sit amet dignissim imperdiet,
                                            diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc,
                                            ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget
                                            justo lacinia rutrum sed at mi.</p>
                                        <div class="flexbox align-items-center mt-3">
                                            <a class="text-gray" href="{{$link}}">
                                                <img class="avatar avatar-sm" src="/assets/images/avatar/1.jpg"
                                                     alt="...">
                                                <span class="ms-2">Samuel</span>
                                            </a>
                                            <a href="{{$link}}">
                                                <i class="ion-heart text-danger fs-11"></i>
                                                <span class="fs-11 text-fade ms-1">895</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-body p-0">
                                <h4 class="media-heading mt-15 px-30"><a href="{{$link}}">Aenean venenatis arcu
                                        quis ante porttitor bibendum.</a></h4>
                                <p class="mt-0 mb-5 px-30 py-10 bg-gray-300 text-mute">
                                    <i class="fa fa-user"></i> by <a href="{{$link}}"
                                                                     class="text-mute">John</a>
                                    | <i class="fa fa-calendar"></i> Sept 16th, 2018
                                    | <i class="fa fa-comment"></i> <a href="{{$link}}" class="text-mute">3
                                        Comments</a>
                                    | <i class="fa fa-share"></i> <a href="{{$link}}" class="text-mute">39
                                        Shares</a>
                                </p>
                                <div class="media">
                                    <img class="align-self-start w-160" src="/assets/images/gallery/thumb-sm/5.jpg"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue,
                                            molestie tincidunt condimentum vitae, gravida a libero.</p>
                                        <a class="btn btn-sm btn-bold btn-primary mt-15" href="{{$link}}">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box overflow-hidden">
                            <div class="box-body p-0">
                                <h4 class="media-heading mt-15 mb-0 px-30"><a href="{{$link}}">Aenean venenatis
                                        arcu quis ante porttitor bibendum.</a></h4>
                                <div class="media">
                                    <img class="align-self-start w-160" src="/assets/images/gallery/thumb-sm/5.jpg"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue,
                                            molestie tincidunt condimentum vitae, gravida a libero.</p>
                                        <a class="btn btn-sm btn-bold btn-primary mt-15" href="{{$link}}">Read
                                            more</a>
                                    </div>
                                </div>
                                <p class="mt-0 px-30 pt-10 bg-gray-300 text-mute">
                                    <i class="fa fa-user"></i> by <a href="{{$link}}"
                                                                     class="text-mute">John</a>
                                    | <i class="fa fa-calendar"></i> Sept 16th, 2018
                                    | <i class="fa fa-comment"></i> <a href="{{$link}}" class="text-mute">3
                                        Comments</a>
                                    | <i class="fa fa-share"></i> <a href="{{$link}}" class="text-mute">39
                                        Shares</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box overflow-hidden">
                            <div class="box-body p-0">
                                <h4 class="media-heading mt-15 mb-0 px-30"><a href="{{$link}}">Aenean venenatis
                                        arcu quis ante porttitor bibendum.</a></h4>
                                <p class="mt-10 mb-0 px-30 by-1 py-10 text-mute">
                                    <i class="fa fa-user"></i> by <a href="{{$link}}"
                                                                     class="text-mute">John</a>
                                    | <i class="fa fa-calendar"></i> Sept 16th, 2018
                                    | <i class="fa fa-comment"></i> <a href="{{$link}}" class="text-mute">3
                                        Comments</a>
                                    | <i class="fa fa-share"></i> <a href="{{$link}}" class="text-mute">39
                                        Shares</a>
                                </p>
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue,
                                            molestie tincidunt condimentum vitae, gravida a libero.</p>
                                        <a class="btn btn-sm btn-bold btn-primary mt-15" href="{{$link}}">Read
                                            more</a>
                                    </div>
                                    <img class="align-self-start w-160" src="/assets/images/gallery/thumb-sm/5.jpg"
                                         alt="Generic placeholder image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box overflow-hidden">
                            <div class="box-body p-0">
                                <h4 class="media-heading mt-15 mb-0 px-30"><a href="{{$link}}">Aenean venenatis
                                        arcu quis ante porttitor bibendum.</a></h4>
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue,
                                            molestie tincidunt condimentum vitae, gravida a libero.</p>
                                        <a class="btn btn-sm btn-bold btn-primary mt-15" href="{{$link}}">Read
                                            more</a>
                                    </div>
                                    <img class="align-self-start w-160" src="/assets/images/gallery/thumb-sm/5.jpg"
                                         alt="Generic placeholder image">
                                </div>
                                <p class="mt-10 mb-0 px-30 by-1 py-10 text-mute">
                                    <i class="fa fa-user"></i> by <a href="{{$link}}"
                                                                     class="text-mute">John</a>
                                    | <i class="fa fa-calendar"></i> Sept 16th, 2018
                                    | <i class="fa fa-comment"></i> <a href="{{$link}}" class="text-mute">3
                                        Comments</a>
                                    | <i class="fa fa-share"></i> <a href="{{$link}}" class="text-mute">39
                                        Shares</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-body">
                                <h4><a href="{{$link}}">Lorem ipsum dolor sit amet</a></h4>
                                <p class="text-mute">October 19, 2019</p>

                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    condimentum eget nunc quis semper. Nunc pellentesque nec libero sed viverra. Donec
                                    turpis velit, suscipit sit amet mauris quis, viverra ornare massa. Morbi tellus
                                    eros, fringilla eu sodales id, ultricies ut sapien. Duis et tristique enim, vitae
                                    mattis neque. Aliquam efficitur, dui id laoreet blandit, lorem […]</p>

                                <div class="flexbox align-items-center mt-3">
                                    <div class="btn-group">
                                        <a class="btn btn-xs btn-facebook" href="{{$link}}"
                                           data-bs-toggle="tooltip" title="" data-bs-original-title="Share Facebook"><i
                                                    class="fa fa-facebook"></i></a>
                                        <a class="btn btn-xs btn-twitter" href="{{$link}}"
                                           data-bs-toggle="tooltip" title="" data-bs-original-title="Share Twitter"><i
                                                    class="fa fa-twitter"></i></a>
                                        <a class="btn btn-xs btn-google" href="{{$link}}"
                                           data-bs-toggle="tooltip" title="" data-bs-original-title="Share Google"><i
                                                    class="fa fa-google"></i></a>
                                    </div>

                                    <a class="btn btn-sm btn-bold btn-primary" href="{{$link}}">Read more</a>
                                </div>
                            </div>
                        </div>


                        <div class="box">
                            <div class="box-body">

                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    condimentum eget nunc quis semper. Nunc pellentesque nec libero sed viverra. Donec
                                    turpis velit, suscipit sit amet mauris quis, viverra ornare massa. Morbi tellus
                                    eros, fringilla eu sodales id, ultricies ut sapien. Duis et tristique enim, vitae
                                    mattis neque. Aliquam efficitur, dui id laoreet blandit, lorem […]</p>

                                <div class="flexbox align-items-center mt-3">
                                    <div class="btn-group">
                                        <a class="btn btn-xs" href="{{$link}}" data-bs-toggle="tooltip"
                                           title="" data-bs-original-title="Share Facebook"><i
                                                    class="fa fa-facebook"></i></a>
                                        <a class="btn btn-xs" href="{{$link}}" data-bs-toggle="tooltip"
                                           title="" data-bs-original-title="Share Twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-xs" href="{{$link}}" data-bs-toggle="tooltip"
                                           title="" data-bs-original-title="Share Google"><i
                                                    class="fa fa-google"></i></a>
                                    </div>

                                    <a class="btn btn-sm btn-bold btn-outline" href="{{$link}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <div class="card-body bg-img py-70"
                                 style="background-image: url('/assets/images/gallery/thumb/5.jpg')" data-overlay="5">
                                <blockquote class="blockquote blockquote-inverse no-border no-margin">
                                    <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>

                            <div class="box-body">
                                <h4><a href="{{$link}}">Aenean venenatis arcu quis ante porttitor bibendum.</a>
                                </h4>
                                <p class="text-mute">October 19, 2019</p>

                                <p class="text-gray-600">Vestibulum volutpat, ante sit amet dignissim imperdiet, diam
                                    diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac
                                    dignissim et, dignissim nec lacus. Praesent euismod.</p>

                                <div class="flexbox align-items-center mt-3">
                                    <a class="btn btn-sm btn-bold btn-primary" href="{{$link}}">Read more</a>

                                    <div class="gap-items-4">
                                        <a class="text-muted" href="{{$link}}">
                                            <i class="fa fa-heart me-1"></i> 15
                                        </a>
                                        <a class="text-muted" href="{{$link}}">
                                            <i class="fa fa-comment me-1"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>    <!-- /.content-wrapper -->
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




    @section('extraAssets')
        <script src="/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
        <!-- EmployX App -->
        <script src="/assets/js/demo.js"></script>
        <script src="/assets/js/template.js"></script>
        <script src="/assets/js/pages/widget-blog.js"></script>
    @endsection

@endsection
