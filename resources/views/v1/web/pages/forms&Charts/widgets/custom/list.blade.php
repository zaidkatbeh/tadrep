@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/list'))
@section('title')
    list
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
                            <h4 class="page-title">List widgets</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Widgets</li>
                                        <li class="breadcrumb-item active" aria-current="page">List widgets</li>
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
                                <div class="box-header with-border">
                                    <h4 class="box-title">Tasks Overview <small class="subtitle">Pending 10 tasks</small></h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="{{$link}}" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
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
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{$link}}" class="text-dark hover-primary mb-1 fs-16">Project Briefing</a>
                                            <span class="text-fade fs-12">Project Manager</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Concept Design</a>
                                            <span class="text-fade fs-12">Art Director</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{$link}}" class="text-dark hover-success mb-1 fs-16">Functional Logics</a>
                                            <span class="text-fade fs-12">Sales Manager</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{$link}}" class="text-dark hover-info mb-1 fs-16">Development</a>
                                            <span class="text-fade fs-12">Creative Head</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Shield-user fs-24"></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{$link}}" class="text-dark hover-warning mb-1 fs-16">Testing</a>
                                            <span class="text-fade fs-12">QA Managers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">People</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="{{$link}}" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
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
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-1.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-primary mb-1 fs-16">Sophia</a>
                                            <span class="text-mute fs-12">Project Manager</span>
                                        </div>
                                        <div>
                                            <a href="{{$link}}" class="btn btn-sm btn-primary-light">Contact</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-2.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Mason</a>
                                            <span class="text-mute fs-12">Art Director</span>
                                        </div>
                                        <div>
                                            <a href="{{$link}}" class="btn btn-sm btn-primary-light">Contact</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-3.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-success mb-1 fs-16">Emily</a>
                                            <span class="text-mute fs-12">Sales Manager</span>
                                        </div>
                                        <div>
                                            <a href="{{$link}}" class="btn btn-sm btn-primary-light">Contact</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-4.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-info mb-1 fs-16">Daniel</a>
                                            <span class="text-mute fs-12">Creative Head</span>
                                        </div>
                                        <div>
                                            <a href="{{$link}}" class="btn btn-sm btn-primary-light">Contact</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-5.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-warning mb-1 fs-16">Natalie</a>
                                            <span class="text-mute fs-12">QA Managers</span>
                                        </div>
                                        <div>
                                            <a href="{{$link}}" class="btn btn-sm btn-primary-light">Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Authors</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle px-10 " data-bs-toggle="dropdown" href="#">Create</button>
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
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-1.png" class="avatar avatar-lg rounded-circle bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-primary mb-1 fs-16">Sophia</a>
                                            <span class="text-fade fs-12">Product Manager</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Inbox</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">Sent</a>
                                                <a class="dropdown-item" href="{{$link}}">Spam</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Draft</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-10.png" class="avatar avatar-lg rounded-circle bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Mason</a>
                                            <span class="text-fade fs-12">Product Manager</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Inbox</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">Sent</a>
                                                <a class="dropdown-item" href="{{$link}}">Spam</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Draft</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-11.png" class="avatar avatar-lg rounded-circle bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-success mb-1 fs-16">Emily</a>
                                            <span class="text-fade fs-12">Product Manager</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Inbox</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">Sent</a>
                                                <a class="dropdown-item" href="{{$link}}">Spam</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Draft</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-12.png" class="avatar avatar-lg rounded-circle bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-info mb-1 fs-16">Daniel</a>
                                            <span class="text-fade fs-12">Product Manager</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Inbox</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">Sent</a>
                                                <a class="dropdown-item" href="{{$link}}">Spam</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Draft</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-15">
                                            <img src="/assets/images/avatar/avatar-15.png" class="avatar avatar-lg rounded-circle bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-warning mb-1 fs-16">Natalie</a>
                                            <span class="text-fade fs-12">Product Manager</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Inbox</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">Sent</a>
                                                <a class="dropdown-item" href="{{$link}}">Spam</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Draft</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Todo</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle px-10 " data-bs-toggle="dropdown" href="#">Create</button>
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
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-success">
                                            <label for="md_checkbox_21" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-success fs-16">
                                                Create FireStone Logo
                                            </a>
                                            <span class="text-fade fs-12">
									Due in 2 Days
								</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">Choose Label:</h6>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span class="badge badge-primary-light">Customer</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-danger-light">Partner</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-success-light">Suplier</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-info-light">Member</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Add New</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-primary">
                                            <label for="md_checkbox_22" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-primary fs-16">
                                                Lorem ipsum dolor sit amet
                                            </a>
                                            <span class="text-fade fs-12">
									Due in 2 Days
								</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">Choose Label:</h6>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span class="badge badge-primary-light">Customer</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-danger-light">Partner</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-success-light">Suplier</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-info-light">Member</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Add New</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-danger">
                                            <label for="md_checkbox_23" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-danger fs-16">
                                                Vivamus consectetur urna
                                            </a>
                                            <span class="text-fade fs-12">
									Due in 2 Days
								</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">Choose Label:</h6>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span class="badge badge-primary-light">Customer</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-danger-light">Partner</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-success-light">Suplier</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-info-light">Member</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Add New</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-info align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-info">
                                            <label for="md_checkbox_24" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-info fs-16">
                                                Sed quis augue sed augue
                                            </a>
                                            <span class="text-fade fs-12">
									Due in 2 Days
								</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">Choose Label:</h6>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span class="badge badge-primary-light">Customer</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-danger-light">Partner</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-success-light">Suplier</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-info-light">Member</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Add New</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-warning">
                                            <label for="md_checkbox_25" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="{{$link}}" class="text-dark hover-warning fs-16">
                                                Aliquam in magna
                                            </a>
                                            <span class="text-fade fs-12">
									Due in 2 Days
								</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="{{$link}}" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">Choose Label:</h6>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span class="badge badge-primary-light">Customer</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-danger-light">Partner</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-success-light">Suplier</span>
                                                </a>
                                                <a class="dropdown-item" href="{{$link}}">
                                                    <span class="badge badge-info-light">Member</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="{{$link}}">
                                                    <span>Add New</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Trends</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="{{$link}}" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
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
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="/assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2">
                                            <a href="{{$link}}" class="text-dark hover-primary mb-1 fs-16">Duis faucibus lorem</a>
                                            <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                        <span class="badge badge-xl badge-primary-light"><span class="fw-600">+125$</span></span>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="/assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2">
                                            <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Mauris varius augue</a>
                                            <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                        <span class="badge badge-xl badge-primary-light"><span class="fw-600">+125$</span></span>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="/assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2">
                                            <a href="{{$link}}" class="text-dark hover-success mb-1 fs-16">Aliquam in magna</a>
                                            <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                        <span class="badge badge-xl badge-primary-light"><span class="fw-600">+125$</span></span>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="/assets/images/svg-icon/color-svg/004-dad.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2">
                                            <a href="{{$link}}" class="text-dark hover-info mb-1 fs-16">Phasellus venenatis nisi</a>
                                            <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                        <span class="badge badge-xl badge-primary-light"><span class="fw-600">+125$</span></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="/assets/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2">
                                            <a href="{{$link}}" class="text-dark hover-warning mb-1 fs-16">Vivamus consectetur</a>
                                            <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                        <span class="badge badge-xl badge-primary-light"><span class="fw-600">+125$</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Trends</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="{{$link}}" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
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
                                <div class="box-body">
                                    <div class="mb-30">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="/assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2">
                                                <a href="{{$link}}" class="text-dark hover-primary mb-1 fs-16">Duis faucibus lorem</a>
                                                <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-0 pt-10">
                                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                                        </p>
                                    </div>
                                    <div class="mb-30">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="/assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2">
                                                <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Mauris varius augue</a>
                                                <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-0 pt-10">
                                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                                        </p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="/assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2">
                                                <a href="{{$link}}" class="text-dark hover-success mb-1 fs-16">Aliquam in magna</a>
                                                <span class="text-fade fs-12">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-0 pt-10">
                                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Support Tickets</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list bb-1 bb-dashed border-light">
                                        <div class="media align-items-center">
                                            <a class="avatar avatar-lg status-success" href="{{$link}}">
                                                <img src="/assets/images/avatar/avatar-10.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="{{$link}}">Theron Trump</a>
                                                </p>
                                                <span class="text-fade fs-12">2 day ago</span>
                                            </div>
                                            <div class="media-right">
                                                <span class="badge badge-warning-light">Pending</span>
                                            </div>
                                        </div>
                                        <div class="media pt-0">
                                            <p class="text-mute">Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.</p>
                                        </div>
                                    </div>
                                    <div class="media-list bb-1 bb-dashed border-light">
                                        <div class="media align-items-center">
                                            <a class="avatar avatar-lg status-success" href="{{$link}}">
                                                <img src="/assets/images/avatar/avatar-3.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="{{$link}}">Nil Yeager</a>
                                                </p>
                                                <span class="text-fade fs-12">5 day ago</span>
                                            </div>
                                            <div class="media-right">
                                                <span class="badge badge-success-light">Open</span>
                                            </div>
                                        </div>
                                        <div class="media pt-0">
                                            <p class="text-mute">Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.</p>
                                        </div>
                                    </div>
                                    <div class="media-list">
                                        <div class="media align-items-center">
                                            <a class="avatar avatar-lg status-success" href="{{$link}}">
                                                <img src="/assets/images/avatar/avatar-4.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="{{$link}}">Tyler Mark</a>
                                                </p>
                                                <span class="text-fade fs-12">7 day ago</span>
                                            </div>
                                            <div class="media-right">
                                                <span class="badge badge-danger-light">Close</span>
                                            </div>
                                        </div>
                                        <div class="media pt-0">
                                            <p class="text-mute">Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Branches list</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">
                                        <a class="media media-single" href="{{$link}}">
                                            <i class="fs-18 me-0 flag-icon flag-icon-us"></i>
                                            <span class="title text-mute">USA </span>
                                            <span class="badge badge-pill badge-secondary-light">125</span>
                                        </a>

                                        <a class="media media-single" href="{{$link}}">
                                            <i class="fs-18 me-0 flag-icon flag-icon-ba"></i>
                                            <span class="title text-mute">Bahrain</span>
                                            <span class="badge badge-pill badge-primary-light">124</span>
                                        </a>

                                        <a class="media media-single" href="{{$link}}">
                                            <i class="fs-18 me-0 flag-icon flag-icon-ch"></i>
                                            <span class="title text-mute">China</span>
                                            <span class="badge badge-pill badge-info-light">425</span>
                                        </a>

                                        <a class="media media-single" href="{{$link}}">
                                            <i class="fs-18 me-0 flag-icon flag-icon-de"></i>
                                            <span class="title text-mute">Denmark</span>
                                            <span class="badge badge-pill badge-success-light">321</span>
                                        </a>

                                        <a class="media media-single" href="{{$link}}">
                                            <i class="fs-18 me-0 flag-icon flag-icon-fr"></i>
                                            <span class="title text-mute">France</span>
                                            <span class="badge badge-pill badge-danger-light">159</span>
                                        </a>

                                        <a class="media media-single" href="{{$link}}">
                                            <i class="fs-18 me-0 flag-icon flag-icon-ga"></i>
                                            <span class="title text-mute">Greece</span>
                                            <span class="badge badge-pill badge-warning-light">452</span>
                                        </a>

                                        <a class="media media-single" href="{{$link}}">
                                            <i class="fs-18 me-0 flag-icon flag-icon-us"></i>
                                            <span class="title text-mute">USA</span>
                                            <span class="badge badge-pill badge-secondary-light">125</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Download Files</h4>
                                    <div class="dropdown pull-right">
                                        <h6 class="dropdown-toggle mb-0" data-bs-toggle="dropdown">Today</h6>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item active" href="{{$link}}">Today</a>
                                            <a class="dropdown-item" href="{{$link}}">Yesterday</a>
                                            <a class="dropdown-item" href="{{$link}}">Last week</a>
                                            <a class="dropdown-item" href="{{$link}}">Last month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body pt-0">
                                    <div class="media-list media-list-divided">
                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-success-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-success"><i class="fa fa-file-pdf-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16 text-mute">Deeveloper Manual</span>
                                            <a class="fs-18 text-gray hover-info" href="{{$link}}"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-primary-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-primary"><i class="fa fa-file-text"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16 text-mute">Documentation</span>
                                            <a class="fs-18 text-gray hover-info" href="{{$link}}"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-warning-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-warning"><i class="fa fa-file-excel-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16 text-mute">Download Excel version</span>
                                            <a class="fs-18 text-gray hover-info" href="{{$link}}"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-danger-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-danger"><i class="fa fa-file-zip-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16 text-mute">Download Ziped version</span>
                                            <a class="fs-18 text-gray hover-info" href="{{$link}}"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-info-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-info"><i class="fa fa-file-word-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16 text-mute">Download Word version</span>
                                            <a class="fs-18 text-gray hover-info" href="{{$link}}"><i class="fa fa-download"></i></a>
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
        </div>
        <!-- BEGIN MODAL -->
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
    <script src="/assets/js/pages/list.js"></script>
@endsection
