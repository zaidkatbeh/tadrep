@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/apps/contact_app'))
@section('title')
    contact app
@endsection
@section('bodyType')light-skin sidebar-mini fixed sidebar-collapse rtl theme-success @endsection

@section('content')
    <!-- content-->
    <div class="wrapper">
        <div id="loader"></div>
        <!-- header-->
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
                        <h4 class="page-title">Contact List</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="contact_app.html#"><i
                                                    class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Apps</li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Clients</h5>
                                <div class="card-actions float-end">
                                    <div class="dropdown show">
                                        <a href="contact_app.html#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-horizontal align-middle">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="contact_app.html#">Action</a>
                                            <a class="dropdown-item" href="contact_app.html#">Another action</a>
                                            <a class="dropdown-item" href="contact_app.html#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="example2_wrapper"
                                         class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6"></div>
                                            <div class="col-sm-12 col-md-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example2" class="table dataTable no-footer"
                                                       style="width:100%" role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1" aria-sort="ascending"
                                                            aria-label="#: activate to sort column descending">#
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Name: activate to sort column ascending">Name
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Company: activate to sort column ascending">
                                                            Company
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Email: activate to sort column ascending">Email
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Status: activate to sort column ascending">
                                                            Status
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="text-fade">


                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-2.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Garrett Winters</td>
                                                        <td>Good Guys</td>
                                                        <td>garrett@winters.com</td>
                                                        <td><span class="badge bg-success-light">Active</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-1.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Ashton Cox</td>
                                                        <td>Levitz Furniture</td>
                                                        <td>ashton@cox.com</td>
                                                        <td><span class="badge bg-success-light">Active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-8.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Sonya Frost</td>
                                                        <td>Child World</td>
                                                        <td>sonya@frost.com</td>
                                                        <td><span class="badge bg-danger-light">Deleted</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-4.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Jena Gaines</td>
                                                        <td>Helping Hand</td>
                                                        <td>jena@gaines.com</td>
                                                        <td><span class="badge bg-warning-light">Inactive</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-15.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Quinn Flynn</td>
                                                        <td>Good Guys</td>
                                                        <td>quinn@flynn.com</td>
                                                        <td><span class="badge bg-success-light">Active</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-12.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Charde Marshall</td>
                                                        <td>Price Savers</td>
                                                        <td>charde@marshall.com</td>
                                                        <td><span class="badge bg-success-light">Active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-10.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Haley Kennedy</td>
                                                        <td>Helping Hand</td>
                                                        <td>haley@kennedy.com</td>
                                                        <td><span class="badge bg-danger-light">Deleted</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-9.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Good Guys</td>
                                                        <td>tatyana@fitzpatrick.com</td>
                                                        <td><span class="badge bg-success-light">Active</span></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-8.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Michael Silva</td>
                                                        <td>Red Robin Stores</td>
                                                        <td>michael@silva.com</td>
                                                        <td><span class="badge bg-success-light">Active</span></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1"><img
                                                                    src="/assets/images/avatar/avatar-7.png" width="32"
                                                                    height="32" class="bg-light rounded-circle my-n1"
                                                                    alt="Avatar"></td>
                                                        <td>Yuri Berry</td>
                                                        <td>The Wiz</td>
                                                        <td>yuri@berry.com</td>
                                                        <td><span class="badge bg-danger-light">Deleted</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="example2_info" role="status"
                                                     aria-live="polite">Showing 1 to 10 of 20 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                     id="example2_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="example2_previous"><a href="#" aria-controls="example2"
                                                                                      data-dt-idx="0" tabindex="0"
                                                                                      class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                                                        aria-controls="example2"
                                                                                                        data-dt-idx="1"
                                                                                                        tabindex="0"
                                                                                                        class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                                                  aria-controls="example2"
                                                                                                  data-dt-idx="2"
                                                                                                  tabindex="0"
                                                                                                  class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item next" id="example2_next"><a
                                                                    href="#" aria-controls="example2" data-dt-idx="3"
                                                                    tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Angelica Ramos</h5>
                                <div class="card-actions float-end">
                                    <div class="dropdown show">
                                        <a href="contact_app.html#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-horizontal align-middle">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="contact_app.html#">Action</a>
                                            <a class="dropdown-item" href="contact_app.html#">Another action</a>
                                            <a class="dropdown-item" href="contact_app.html#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                        <img src="/assets/images/avatar/avatar-3.png" width="64" height="64"
                                             class="bg-light rounded-circle mt-2" alt="Angelica Ramos">
                                    </div>
                                    <div class="col-sm-9 col-xl-12 col-xxl-9">
                                        <strong>About me</strong>
                                        <p class="text-fade">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <table class="table my-2">
                                    <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td class="text-fade">Angelica Ramos</td>
                                    </tr>
                                    <tr>
                                        <th>Company</th>
                                        <td class="text-fade">The Wiz</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td class="text-fade">angelica@ramos.com</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td class="text-fade">+1234123123123</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><span class="badge bg-success-light">Active</span></td>
                                    </tr>
                                    </tbody>
                                </table>


                                <strong class="my-20 d-block">Activity</strong>

                                <div class="slimScrollDiv"
                                     style="position: relative; overflow: hidden; width: auto; height: 310px;">
                                    <div class="activity-div" style="overflow: hidden; width: auto; height: 310px;">
                                        <div class="timeline-label">
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">09:47</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-warning fs-14"></i>
                                                </div>
                                                <div class="timeline-content text-muted ps-3">Lorem ipsum dolor sit
                                                    amet, consectetur.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">10:10</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-success fs-14"></i>
                                                </div>
                                                <div class="timeline-content d-flex">
                                                    <span class="fw-500 ps-3">Etiam luctus</span>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">12:37</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-14"></i>
                                                </div>
                                                <div class="timeline-content fw-500 ps-3">Sed volutpat
                                                    <a href="contact_app.html#" class="text-primary">USD 845</a>. to ASC
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">14:50</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-primary fs-14"></i>
                                                </div>
                                                <div class="timeline-content text-muted ps-3">Praesent non neque a ante
                                                    hendrerit porta.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">11:03</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-14"></i>
                                                </div>
                                                <div class="timeline-content fw-500 ps-3">Donec sit
                                                    <a href="contact_app.html#" class="text-primary">#84-8456</a>.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">17:50</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-primary fs-14"></i>
                                                </div>
                                                <div class="timeline-content text-muted ps-3">Proin finibus nisl vitae
                                                    viverra pretium.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">11:03</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-14"></i>
                                                </div>
                                                <div class="timeline-content fw-500 ps-3">Nullam in orci porta
                                                    <a href="contact_app.html#" class="text-primary">#84-8965</a>.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">11:30</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-success fs-14"></i>
                                                </div>
                                                <div class="timeline-content text-muted ps-3">Aenean vel odio varius mi
                                                    luctus porttitor.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">17:37</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-14"></i>
                                                </div>
                                                <div class="timeline-content fw-500 ps-3">Praesent congue
                                                    <a href="contact_app.html#" class="text-primary">USD 845</a>. to ACF
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">13:50</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-primary fs-14"></i>
                                                </div>
                                                <div class="timeline-content text-muted ps-3">Aenean congue felis quis
                                                    rhoncus eleifend.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">23:03</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-14"></i>
                                                </div>
                                                <div class="timeline-content fw-500 ps-3">Suspendisse
                                                    <a href="contact_app.html#" class="text-primary">#84-7548</a>.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-500 fs-16">19:50</div>
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-primary fs-14"></i>
                                                </div>
                                                <div class="timeline-content text-muted ps-3">Maecenas vel lacus sed
                                                    tellus tristique porttitor.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slimScrollBar"
                                         style="background: rgb(228, 230, 239); width: 4px; position: absolute; top: 0px; opacity: 0.8; display: none; border-radius: 7px; z-index: 99; right: 3px; height: 180.979px;"></div>
                                    <div class="slimScrollRail"
                                         style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 3px;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- footer -->
    @include('v1.web.template.footer')
    <!-- Side panel -->
    <!-- quick_user_toggle -->
    @include('v1.web.components.modelLeft')
    <!-- /quick_user_toggle -->

    <!-- Control Sidebar -->
    @include('v1.web.components.sidebarControl')
    <!-- /.control-sidebar -->



    <!-- ./wrapper -->
    </div>

    <!-- chatbox -->
    @include('v1.web.components.chatBox')
    <!-- Page Content overlay -->

@endsection


@section('extraAssets')
    <!-- extra assets -->
    <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/app-contact.js"></script>

@endsection



