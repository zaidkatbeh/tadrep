@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/emails'))
@section('title')
    emails
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
                            <h4 class="page-title">Emails</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Emails</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="box bg-primary-light">
                        <div class="box-header no-border">
                            <h4 class="box-title text-center">We included several modern account management email templates to help you communicate with your users.</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title d-block text-center">Welcome Email</h4>
                                </div>
                                <div class="box-body">
                                    <img src="/assets/images/preview/email-welcome.png" alt="welcome email page">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="d-flex justify-content-between">
                                        <a href="email_welcome_dark.html" target="_blank" class="waves-effect waves-light btn btn-dark mb-5">Dark Preview</a>
                                        <a href="email_welcome.html" target="_blank" class="waves-effect waves-light btn btn-primary mb-5">Light Preview</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title d-block text-center">Verify Emial</h4>
                                </div>
                                <div class="box-body">
                                    <img src="/assets/images/preview/email-verify-email.png" alt="Verify Emial page">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="d-flex justify-content-between">
                                        <a href="email_verify_email_dark.html" target="_blank" class="waves-effect waves-light btn btn-dark mb-5">Dark Preview</a>
                                        <a href="email_verify_email.html" target="_blank" class="waves-effect waves-light btn btn-primary mb-5">Light Preview</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title d-block text-center">Change Password</h4>
                                </div>
                                <div class="box-body">
                                    <img src="/assets/images/preview/email-change-pass.png" alt="Change Password page">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="d-flex justify-content-between">
                                        <a href="email_change_pass_dark.html" target="_blank" class="waves-effect waves-light btn btn-dark mb-5">Dark Preview</a>
                                        <a href="email_change_pass.html" target="_blank" class="waves-effect waves-light btn btn-primary mb-5">Light Preview</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title d-block text-center">User Updates</h4>
                                </div>
                                <div class="box-body">
                                    <img src="/assets/images/preview/email-update.png" alt="User Updates page">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="d-flex justify-content-between">
                                        <a href="email_update_dark.html" target="_blank" class="waves-effect waves-light btn btn-dark mb-5">Dark Preview</a>
                                        <a href="email_update.html" target="_blank" class="waves-effect waves-light btn btn-primary mb-5">Light Preview</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title d-block text-center">Expired Card</h4>
                                </div>
                                <div class="box-body">
                                    <img src="/assets/images/preview/email-expired-card.png" alt="Expired Card page">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="d-flex justify-content-between">
                                        <a href="email_expired_card_dark.html" target="_blank" class="waves-effect waves-light btn btn-dark mb-5">Dark Preview</a>
                                        <a href="email_expired_card.html" target="_blank" class="waves-effect waves-light btn btn-primary mb-5">Light Preview</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title d-block text-center">Closed Account</h4>
                                </div>
                                <div class="box-body">
                                    <img src="/assets/images/preview/email-closed-account.png" alt="Closed Account page">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="d-flex justify-content-between">
                                        <a href="email_closed_account_dark.html" target="_blank" class="waves-effect waves-light btn btn-dark mb-5">Dark Preview</a>
                                        <a href="email_closed_account.html" target="_blank" class="waves-effect waves-light btn btn-primary mb-5">Light Preview</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>

                </section>
                <!-- /.content -->
            </div>
        </div>        <!-- footer -->
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
