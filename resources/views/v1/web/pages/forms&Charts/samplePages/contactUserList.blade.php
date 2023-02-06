@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/sample_pages/contact_user_list'))
@section('title')
    in voice list 2
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
        <div class="content-wrapper" >
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">User list</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Contact</li>
                                        <li class="breadcrumb-item active" aria-current="page">User list</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="box">
                                <div class="media-list media-list-divided media-list-hover">
                                    <div class="media align-items-center">
                                        <span class="badge badge-dot badge-danger"></span>
                                        <a class="avatar avatar-lg status-success" href="{{$link}}">
                                            <img src="/assets/images/avatar/1.jpg" alt="...">
                                        </a>

                                        <div class="media-body">
                                            <p>
                                                <a href="{{$link}}"><strong>Aaron</strong></a>
                                                <small class="sidetitle">Online</small>
                                            </p>
                                            <p>Designer</p>

                                            <nav class="nav mt-2">
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-facebook"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-twitter"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-github"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-linkedin"></i></a>
                                            </nav>
                                        </div>

                                        <div class="media-right gap-items">
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Orders" aria-label="Orders"><i class="ti-shopping-cart"></i></a>
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Receipts" aria-label="Receipts"><i class="ti-receipt"></i></a>

                                            <div class="btn-group">
                                                <a class="media-action lead" href="{{$link}}" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-phone"></i> Call</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-remove"></i> Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="media align-items-center">

                                        <span class="badge badge-dot badge-warning"></span>

                                        <a class="avatar avatar-lg" href="{{$link}}">
                                            <img src="/assets/images/avatar/2.jpg" alt="...">
                                        </a>

                                        <div class="media-body">
                                            <p>
                                                <a href="{{$link}}"><strong>Isaiah</strong></a>
                                                <small class="sidetitle">Last seen: 2 hours ago</small>
                                            </p>
                                            <p>Full Stack Developer</p>

                                            <nav class="nav mt-2">
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-facebook"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-twitter"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-github"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-linkedin"></i></a>
                                            </nav>
                                        </div>

                                        <div class="media-right gap-items">
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Orders" aria-label="Orders"><i class="ti-shopping-cart"></i></a>
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Receipts" aria-label="Receipts"><i class="ti-receipt"></i></a>
                                            <div class="btn-group">
                                                <a class="media-action lead" href="{{$link}}" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-phone"></i> Call</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-remove"></i> Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="media align-items-center">

                                        <span class="badge badge-dot badge-success"></span>

                                        <a class="avatar avatar-lg status-warning" href="{{$link}}">
                                            <img src="/assets/images/avatar/3.jpg" alt="...">
                                        </a>

                                        <div class="media-body">
                                            <p>
                                                <a href="{{$link}}"><strong>Cameron</strong></a>
                                                <small class="sidetitle">Last seen: 12 min ago</small>
                                            </p>
                                            <p>Support Agent</p>

                                            <nav class="nav mt-2">
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-facebook"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-twitter"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-github"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-linkedin"></i></a>
                                            </nav>
                                        </div>

                                        <div class="media-right gap-items">
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Orders" aria-label="Orders"><i class="ti-shopping-cart"></i></a>
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Receipts" aria-label="Receipts"><i class="ti-receipt"></i></a>
                                            <div class="btn-group">
                                                <a class="media-action lead" href="{{$link}}" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-phone"></i> Call</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-remove"></i> Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="media align-items-center">

                                        <span class="badge badge-dot badge-danger"></span>

                                        <a class="avatar avatar-lg status-success" href="{{$link}}">
                                            <img src="/assets/images/avatar/4.jpg" alt="...">
                                        </a>

                                        <div class="media-body">
                                            <p>
                                                <a href="{{$link}}"><strong>Eli</strong></a>
                                                <small class="sidetitle">Online</small>
                                            </p>
                                            <p>Support Agent</p>

                                            <nav class="nav mt-2">
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-facebook"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-twitter"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-github"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-linkedin"></i></a>
                                            </nav>
                                        </div>

                                        <div class="media-right gap-items">
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Orders" aria-label="Orders"><i class="ti-shopping-cart"></i></a>
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Receipts" aria-label="Receipts"><i class="ti-receipt"></i></a>
                                            <div class="btn-group">
                                                <a class="media-action lead" href="{{$link}}" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-phone"></i> Call</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-remove"></i> Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="media align-items-center">

                                        <span class="badge badge-dot badge-success"></span>

                                        <a class="avatar avatar-lg status-success" href="{{$link}}">
                                            <img src="/assets/images/avatar/5.jpg" alt="...">
                                        </a>

                                        <div class="media-body">
                                            <p>
                                                <a href="{{$link}}"><strong>Charles</strong></a>
                                                <small class="sidetitle">Last seen: yesterday</small>
                                            </p>
                                            <p>Marketing Department</p>

                                            <nav class="nav mt-2">
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-facebook"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-twitter"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-github"></i></a>
                                                <a class="nav-link" href="{{$link}}"><i class="fa fa-linkedin"></i></a>
                                            </nav>
                                        </div>

                                        <div class="media-right gap-items">
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Orders" aria-label="Orders"><i class="ti-shopping-cart"></i></a>
                                            <a class="media-action lead" href="{{$link}}" data-bs-toggle="tooltip" title="" data-bs-original-title="Receipts" aria-label="Receipts"><i class="ti-receipt"></i></a>
                                            <div class="btn-group">
                                                <a class="media-action lead" href="{{$link}}" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-phone"></i> Call</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{$link}}"><i class="fa fa-fw fa-remove"></i> Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="box no-shadow">
                                <div class="box-body">
                                    <a class="btn btn-outline btn-success mb-5 d-flex justify-content-between" href="javascript:void(0)">Online <span class="pull-right">103</span></a>
                                    <a class="btn btn-outline btn-danger mb-5 d-flex justify-content-between" href="javascript:void(0)">Offline <span class="pull-right">19</span></a>
                                    <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Available <span class="pull-right">623</span></a>
                                    <a class="btn btn-outline btn-primary mb-5 d-flex justify-content-between" href="javascript:void(0)">Private <span class="pull-right">53</span></a>
                                    <a class="btn btn-warning mt-10 d-flex justify-content-between" href="javascript:void(0)">All Contacts <span class="pull-right">123</span></a>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success mt-10 d-block text-center">+ Add New Contact</a>
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
    <script src="/assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js"></script>
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/data-table.js"></script>
@endsection

