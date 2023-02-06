@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/ecommerce/edit'))
@section('title')
    cart
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
                            <h4 class="page-title">Edit</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                    <h4 class="box-title">About Product</h4>
                                </div>
                                <div class="box-body">
                                    <form action="#">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Product Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Sub text</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Category</label>
                                                        <select class="form-select" data-placeholder="Choose a Category" tabindex="1">
                                                            <option value="Category 1">Category 1</option>
                                                            <option value="Category 2">Category 2</option>
                                                            <option value="Category 3">Category 5</option>
                                                            <option value="Category 4">Category 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <div class="radio-list">
                                                            <div class="radio-inline p-0 me-10">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio1" value="option1">
                                                                    <label for="radio1">Published</label>
                                                                </div>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio2" value="option2">
                                                                    <label for="radio2">Draft</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Price</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-money"></i></div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Discount</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Product Description</label>
                                                        <textarea class="form-control p-15" rows="4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Meta Title</label>
                                                        <input type="text" class="form-control"> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Meta Keyword</label>
                                                        <input type="text" class="form-control"> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <h4 class="box-title mt-20">Upload Image</h4>
                                                    <div class="product-img text-start">
                                                        <img src="/assets/images/product/product-9.png" alt="">
                                                        <div class="input-group my-3">
                                                            <label class="btn btn-primary" for="inputGroupFile01">Upload Anonther Image</label>
                                                            <input type="file" class="form-control" id="inputGroupFile01">
                                                        </div>
                                                        <button class="btn btn-primary">Edit</button>
                                                        <button class="btn btn-light">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="box-title mt-40">General Info</h4>
                                                    <div class="table-responsive">
                                                        <table class="table no-border td-padding">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Brand">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Sellar">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Delivery Condition">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Knock Down">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Color">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Gift Pack">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions mt-10">
                                            <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
                                            <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                    </form>
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
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>

@endsection

