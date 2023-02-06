@extends('v1.web.template.master')
@php($link=URL('/widgets/modals/components'))
@section('title')
    components
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
                            <h4 class="page-title">Modals</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Component</li>
                                        <li class="breadcrumb-item active" aria-current="page">Modals</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="callout callout-primary-light">
                        <h4>Reminder!</h4>
                        Instructions for how to use modals are available on the
                        <a href="https://getbootstrap.com/docs/5.0/components/modal/" class="text-primary">Bootstrap documentation</a>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Bootstrap Modals</h4>

                                    <p class="text-muted fs-14">
                                        A rendered modal with header, body, and set of actions in the footer.
                                    </p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="{{$link}}bs-modals-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{$link}}bs-modals-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="bs-modals-preview">

                                            <!-- Standard modal content -->
                                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h6>Text in a modal</h6>
                                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            <hr>
                                                            <h6>Overflowing text to show scroll behavior</h6>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!--  Modal content for the Large example -->
                                            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h6>Text in a modal</h6>
                                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            <hr>
                                                            <h6>Overflowing text to show scroll behavior</h6>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Full width modal content -->
                                            <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-full-width">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h6>Text in a modal</h6>
                                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            <hr>
                                                            <h6>Overflowing text to show scroll behavior</h6>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Long Content Scroll Modal -->
                                            <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="button-list">
                                                <!-- Standard  modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Standard Modal</button>
                                                <!-- Large modal -->
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Large Modal</button>
                                                <!-- Small modal -->
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">Small Modal</button>
                                                <!-- Full width modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#full-width-modal">Full width Modal</button>
                                                <!-- Scrollable modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#scrollable-modal">Scrollable Modal</button>
                                            </div>

                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="bs-modals-code">
									<pre class="mb-0">										<span>
&lt;!-- Standard modal --&gt;
&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal"&gt;Standard Modal&lt;/button&gt;
&lt;div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true"&gt;
	&lt;div class="modal-dialog"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="standard-modalLabel"&gt;Modal Heading&lt;/h4&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
			&lt;div class="modal-footer"&gt;
				&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
				&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Large modal --&gt;
&lt;button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"&gt;Large Modal&lt;/button&gt;
&lt;div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-lg"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="myLargeModalLabel"&gt;Large modal&lt;/h4&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Small modal --&gt;
&lt;button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm"&gt;Small Modal&lt;/button&gt;
&lt;div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-sm"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="mySmallModalLabel"&gt;Small modal&lt;/h4&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Full width modal --&gt;
&lt;button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#full-width-modal"&gt;Full width Modal&lt;/button&gt;
&lt;div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-full-width"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="fullWidthModalLabel"&gt;Modal Heading&lt;/h4&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
			&lt;div class="modal-footer"&gt;
				&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
				&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Scrollable modal --&gt;
&lt;button  type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#scrollable-modal"&gt;Scrollable Modal&lt;/button&gt;
&lt;div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-dialog-scrollable" role="document"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h5 class="modal-title" id="scrollableModalTitle"&gt;Modal title&lt;/h5&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
			&lt;div class="modal-footer"&gt;
				&lt;button type="button" class="btn btn-secondary" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
				&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;
										</span>
									</pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Modal with Pages</h4>
                                    <p class="text-muted fs-14">Examples of custom modals.</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="{{$link}}modal-pages-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{$link}}modal-pages-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="modal-pages-preview">
                                            <!-- Signup modal content -->
                                            <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <div class="text-center mt-2 mb-4">
                                                                <a href="index.html" class="text-success">
                                                                    <span><img src="/assets/images/logo-light-text3.png" alt="" height="30"></span>
                                                                </a>
                                                            </div>

                                                            <form class="ps-3 pe-3" action="#">

                                                                <div class="mb-3">
                                                                    <label for="username" class="form-label">Name</label>
                                                                    <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="emailaddress" class="form-label">Email address</label>
                                                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="password" class="form-label">Password</label>
                                                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="form-check ps-0">
                                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                        <label class="form-check-label" for="customCheck1">I accept <a href="{{$link}}">Terms and Conditions</a></label>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 text-center">
                                                                    <button class="btn btn-primary" type="submit">Sign Up Free</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->


                                            <!-- SignIn modal content -->
                                            <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="text-center mt-2 mb-4">
                                                                <a href="index.html" class="text-success">
                                                                    <span><img src="/assets/images/logo-light-text3.png" alt="" height="30"></span>
                                                                </a>
                                                            </div>

                                                            <form action="#" class="ps-3 pe-3">
                                                                <div class="mb-3">
                                                                    <label for="emailaddress1" class="form-label">Email address</label>
                                                                    <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="password1" class="form-label">Password</label>
                                                                    <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="form-check ps-0">
                                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                        <label class="form-check-label" for="customCheck2">Remember me</label>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 text-center">
                                                                    <button class="btn btn-primary" type="submit">Sign In</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="button-list">
                                                <!-- Sign Up modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up Modal</button>
                                                <!-- Log In modal -->
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In Modal</button>
                                            </div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="modal-pages-code">
									<pre class="mb-0">										<span>
&lt;!-- Signup modal--&gt;
&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal"&gt;Sign Up Modal&lt;/button&gt;
&lt;div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog"&gt;
		&lt;div class="modal-content"&gt;

			&lt;div class="modal-body"&gt;
				&lt;div class="text-center mt-2 mb-4"&gt;
					&lt;a href="index.html" class="text-success"&gt;
						&lt;span&gt;&lt;img src="assets/images/logo-dark.png" alt="" height="18"&gt;&lt;/span&gt;
					&lt;/a&gt;
				&lt;/div&gt;

				&lt;form class="ps-3 pe-3" action="#"&gt;

					&lt;div class="mb-3"&gt;
						&lt;label for="username" class="form-label"&gt;Name&lt;/label&gt;
						&lt;input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty"&gt;
					&lt;/div&gt;

					&lt;div class="mb-3"&gt;
						&lt;label for="emailaddress" class="form-label"&gt;Email address&lt;/label&gt;
						&lt;input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com"&gt;
					&lt;/div&gt;

					&lt;div class="mb-3"&gt;
						&lt;label for="password" class="form-label"&gt;Password&lt;/label&gt;
						&lt;input class="form-control" type="password" required="" id="password" placeholder="Enter your password"&gt;
					&lt;/div&gt;

					&lt;div class="mb-3"&gt;
						&lt;div class="form-check"&gt;
							&lt;input type="checkbox" class="form-check-input" id="customCheck1"&gt;
							&lt;label class="form-check-label" for="customCheck1"&gt;I accept &lt;a href="#"&gt;Terms and Conditions&lt;/a&gt;&lt;/label&gt;
						&lt;/div&gt;
					&lt;/div&gt;

					&lt;div class="mb-3 text-center"&gt;
						&lt;button class="btn btn-primary" type="submit"&gt;Sign Up Free&lt;/button&gt;
					&lt;/div&gt;

				&lt;/form&gt;

			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Login modal --&gt;
&lt;button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal"&gt;Log In Modal&lt;/button&gt;
&lt;div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-body"&gt;
				&lt;div class="text-center mt-2 mb-4"&gt;
					&lt;a href="index.html" class="text-success"&gt;
						&lt;span&gt;&lt;img src="assets/images/logo-dark.png" alt="" height="18"&gt;&lt;/span&gt;
					&lt;/a&gt;
				&lt;/div&gt;

				&lt;form action="#" class="ps-3 pe-3"&gt;

					&lt;div class="mb-3"&gt;
						&lt;label for="emailaddress1" class="form-label"&gt;Email address&lt;/label&gt;
						&lt;input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com"&gt;
					&lt;/div&gt;

					&lt;div class="mb-3"&gt;
						&lt;label for="password1" class="form-label"&gt;Password&lt;/label&gt;
						&lt;input class="form-control" type="password" required="" id="password1" placeholder="Enter your password"&gt;
					&lt;/div&gt;

					&lt;div class="mb-3"&gt;
						&lt;div class="form-check"&gt;
							&lt;input type="checkbox" class="form-check-input" id="customCheck2"&gt;
							&lt;label class="form-check-label" for="customCheck2"&gt;Remember me&lt;/label&gt;
						&lt;/div&gt;
					&lt;/div&gt;

					&lt;div class="mb-3 text-center"&gt;
						&lt;button class="btn rounded-pill btn-primary" type="submit"&gt;Sign In&lt;/button&gt;
					&lt;/div&gt;

				&lt;/form&gt;

			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;
										</span>
									</pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Modal based Alerts</h4>
                                    <p class="text-muted fs-14">Show different contexual alert messages using modal component</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="{{$link}}modal-alerts-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{$link}}modal-alerts-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="modal-alerts-preview">
                                            <!-- Success Alert Modal -->
                                            <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content modal-filled bg-success">
                                                        <div class="modal-body p-4">
                                                            <div class="text-center text-white">
                                                                <i class="fa fa-check fs-36"></i>
                                                                <h4 class="mt-2">Well Done!</h4>
                                                                <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                <button type="button" class="btn btn-success-light my-2" data-bs-dismiss="modal">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Info Alert Modal -->
                                            <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-4">
                                                            <div class="text-center">
                                                                <i class="fa fa-info-circle text-info fs-36"></i>
                                                                <h4 class="mt-2">Heads up!</h4>
                                                                <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                <button type="button" class="btn btn-info-light my-2" data-bs-dismiss="modal">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Warning Alert Modal -->
                                            <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-4">
                                                            <div class="text-center">
                                                                <i class="fa fa-warning text-warning fs-36"></i>
                                                                <h4 class="mt-2">Incorrect Information</h4>
                                                                <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                <button type="button" class="btn btn-warning-light my-2" data-bs-dismiss="modal">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Danger Alert Modal -->
                                            <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content modal-filled bg-danger">
                                                        <div class="modal-body p-4">
                                                            <div class="text-center text-white">
                                                                <i class="fa fa-times-circle-o fs-36"></i>
                                                                <h4 class="mt-2">Oh snap!</h4>
                                                                <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                <button type="button" class="btn btn-danger-light my-2" data-bs-dismiss="modal">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="button-list">
                                                <!-- Success Alert modal -->
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-alert-modal">Success Alert</button>
                                                <!-- Info Alert modal -->
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#info-alert-modal">Info Alert</button>
                                                <!-- Warning Alert modal -->
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#warning-alert-modal">Warning Alert</button>
                                                <!-- Danger Alert modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#danger-alert-modal">Danger Alert</button>
                                            </div>

                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="modal-alerts-code">
									<pre class="mb-0">										<span>
&lt;!-- Success Alert Modal --&gt;
&lt;button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-alert-modal"&gt;Success Alert&lt;/button&gt;
&lt;div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-sm"&gt;
		&lt;div class="modal-content modal-filled bg-success"&gt;
			&lt;div class="modal-body p-4"&gt;
				&lt;div class="text-center"&gt;
					&lt;i class="dripicons-checkmark h1"&gt;&lt;/i&gt;
					&lt;h4 class="mt-2"&gt;Well Done!&lt;/h4&gt;
					&lt;p class="mt-3"&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
					&lt;button type="button" class="btn btn-light my-2" data-bs-dismiss="modal"&gt;Continue&lt;/button&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Info Alert Modal --&gt;
&lt;button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#info-alert-modal"&gt;Info Alert&lt;/button&gt;
&lt;div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-sm"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-body p-4"&gt;
				&lt;div class="text-center"&gt;
					&lt;i class="dripicons-information h1 text-info"&gt;&lt;/i&gt;
					&lt;h4 class="mt-2"&gt;Heads up!&lt;/h4&gt;
					&lt;p class="mt-3"&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
					&lt;button type="button" class="btn btn-info my-2" data-bs-dismiss="modal"&gt;Continue&lt;/button&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Warning Alert Modal --&gt;
&lt;button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#warning-alert-modal"&gt;Warning Alert&lt;/button&gt;
&lt;div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-sm"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-body p-4"&gt;
				&lt;div class="text-center"&gt;
					&lt;i class="dripicons-warning h1 text-warning"&gt;&lt;/i&gt;
					&lt;h4 class="mt-2"&gt;Incorrect Information&lt;/h4&gt;
					&lt;p class="mt-3"&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
					&lt;button type="button" class="btn btn-warning my-2" data-bs-dismiss="modal"&gt;Continue&lt;/button&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Danger Alert Modal --&gt;
&lt;button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"&gt;Danger Alert&lt;/button&gt;
&lt;div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-sm"&gt;
		&lt;div class="modal-content modal-filled bg-danger"&gt;
			&lt;div class="modal-body p-4"&gt;
				&lt;div class="text-center"&gt;
					&lt;i class="dripicons-wrong h1"&gt;&lt;/i&gt;
					&lt;h4 class="mt-2"&gt;Oh snap!&lt;/h4&gt;
					&lt;p class="mt-3"&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
					&lt;button type="button" class="btn btn-light my-2" data-bs-dismiss="modal"&gt;Continue&lt;/button&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;
										</span>
									</pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Modal Position</h4>
                                    <p class="text-muted fs-14">Specify the position for the modal. You can display modal at top, bottom, center or right of page by specifying classes <code>modal-top</code>, <code>modal-bottom</code>, <code>modal-dialog-centered</code> and <code>modal-right</code> respectively.</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="{{$link}}modal-position-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{$link}}modal-position-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="modal-position-preview">
                                            <!-- Top modal content -->
                                            <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-top">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Text in a modal</h5>
                                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Right modal content -->
                                            <div id="right-modal" class="modal modal-right fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal Heading</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div>
                                                                <h4 class="mt-0">Text in a modal</h4>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer modal-footer-uniform">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Bottom modal content -->
                                            <div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-bottom">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Text in a modal</h5>
                                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!-- Center modal content -->
                                            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Overflowing text to show scroll behavior</h5>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="button-list">
                                                <!-- Top modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal">Top Modal</button>
                                                <!-- Bottom modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#bottom-modal">Bottom Modal</button>
                                                <!-- Center modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Center modal</button>
                                                <!-- Right modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#right-modal">Rightbar Modal</button>
                                            </div>

                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="modal-position-code">
									<pre class="mb-0">										<span>
&lt;!-- Top modal --&gt;
&lt;button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal"&gt;Top Modal&lt;/button&gt;
&lt;div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-top"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="topModalLabel"&gt;Modal Heading&lt;/h4&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
			&lt;div class="modal-footer"&gt;
				&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
				&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Right modal --&gt;
&lt;button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#right-modal"&gt;Rightbar Modal&lt;/button&gt;
&lt;div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-sm modal-right"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header border-0"&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				&lt;div class="text-center"&gt;
					...
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Bottom modal --&gt;
&lt;button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#bottom-modal"&gt;Bottom Modal&lt;/button&gt;
&lt;div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-sm modal-bottom"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="bottomModalLabel"&gt;Modal Heading&lt;/h4&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
			&lt;div class="modal-footer"&gt;
				&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
				&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;

&lt;!-- Center modal --&gt;
&lt;button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal"&gt;Center modal&lt;/button&gt;
&lt;div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true"&gt;
	&lt;div class="modal-dialog modal-dialog-centered"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="myCenterModalLabel"&gt;Center modal&lt;/h4&gt;
				&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /.modal-content --&gt;
	&lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;
										</span>
									</pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </section>
                <!-- /.content -->
            </div>
        </div>        <!-- /.content-wrapper -->

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

