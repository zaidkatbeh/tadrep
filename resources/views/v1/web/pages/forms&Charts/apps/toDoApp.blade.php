@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/apps/toDoApp'))
@section('title')
    to do app
@endsection
@section('bodyType')light-skin sidebar-mini fixed sidebar-collapse rtl theme-success @endsection
@section('content')
    <!-- content -->
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
                        <h4 class="page-title">Task Board</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="extra_taskboard.html#"><i
                                                    class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Extra</li>
                                    <li class="breadcrumb-item active" aria-current="page">Task Board</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Upcoming</h5>

                                <div class="card-actions float-end">
                                    <div class="dropdown show">
                                        <a href="extra_taskboard.html#" data-bs-toggle="dropdown"
                                           data-bs-display="static">
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
                                            <a class="dropdown-item" href="extra_taskboard.html#">Action</a>
                                            <a class="dropdown-item" href="extra_taskboard.html#">Another action</a>
                                            <a class="dropdown-item" href="extra_taskboard.html#">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <div id="tasks-upcoming" class="tasks">
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task1">
                                                    <label class="form-check-label ps-20" for="task1"></label>
                                                </div>
                                            </div>
                                            <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet,
                                                leo. Maecenas malesuada.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-1.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-2.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-3.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task2">
                                                    <label class="form-check-label ps-20" for="task2"></label>
                                                </div>
                                            </div>
                                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet
                                                nec, imperdiet iaculis, ipsum.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-10.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-8.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-9.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task3">
                                                    <label class="form-check-label ps-20" for="task3"></label>
                                                </div>
                                            </div>
                                            <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                                sollicitudin urna dolor sagittis.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-11.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-16.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-15.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task4">
                                                    <label class="form-check-label ps-20" for="task4"></label>
                                                </div>
                                            </div>
                                            <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare
                                                lobortis. Curabitur a felis tristique.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-12.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-15.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-13.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task5">
                                                    <label class="form-check-label ps-20" for="task5"></label>
                                                </div>
                                            </div>
                                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet
                                                nec, imperdiet iaculis, ipsum.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-13.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-7.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-2.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <a href="extra_taskboard.html#" class="btn btn-primary">Add new task</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">In Progress</h5>
                                <div class="card-actions float-end">
                                    <div class="dropdown show">
                                        <a href="extra_taskboard.html#" data-bs-toggle="dropdown"
                                           data-bs-display="static">
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
                                            <a class="dropdown-item" href="extra_taskboard.html#">Action</a>
                                            <a class="dropdown-item" href="extra_taskboard.html#">Another action</a>
                                            <a class="dropdown-item" href="extra_taskboard.html#">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div id="tasks-progress" class="tasks">
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task6">
                                                    <label class="form-check-label ps-20" for="task6"></label>
                                                </div>
                                            </div>
                                            <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet,
                                                leo. Maecenas malesuada.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-15.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-3.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-4.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task7">
                                                    <label class="form-check-label ps-20" for="task7"></label>
                                                </div>
                                            </div>
                                            <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                                sollicitudin urna dolor sagittis.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-16.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-7.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-9.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task8">
                                                    <label class="form-check-label ps-20" for="task8"></label>
                                                </div>
                                            </div>
                                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet
                                                nec, imperdiet iaculis, ipsum.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-2.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-10.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-16.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <a href="extra_taskboard.html#" class="btn btn-primary">Add new task</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Completed</h5>
                                <div class="card-actions float-end">
                                    <div class="dropdown show">
                                        <a href="extra_taskboard.html#" data-bs-toggle="dropdown"
                                           data-bs-display="static">
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
                                            <a class="dropdown-item" href="extra_taskboard.html#">Action</a>
                                            <a class="dropdown-item" href="extra_taskboard.html#">Another action</a>
                                            <a class="dropdown-item" href="extra_taskboard.html#">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div id="tasks-completed" class="tasks">
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="task9">
                                                    <label class="form-check-label ps-20" for="task9"></label>
                                                </div>
                                            </div>
                                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet
                                                nec, imperdiet iaculis, ipsum.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-4.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-11.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-15.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="task10">
                                                    <label class="form-check-label ps-20" for="task10"></label>
                                                </div>
                                            </div>
                                            <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare
                                                lobortis. Curabitur a felis tristique.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-7.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-8.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-5.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="task11">
                                                    <label class="form-check-label ps-20" for="task11"></label>
                                                </div>
                                            </div>
                                            <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                                sollicitudin urna dolor sagittis.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-8.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-9.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-7.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="task12">
                                                    <label class="form-check-label ps-20" for="task12"></label>
                                                </div>
                                            </div>
                                            <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet,
                                                leo. Maecenas malesuada.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-9.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-13.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-15.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-gray-100 cursor-grab border no-shadow">
                                        <div class="card-body p-3">
                                            <div class="float-end me-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="task13">
                                                    <label class="form-check-label ps-20" for="task13"></label>
                                                </div>
                                            </div>
                                            <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                                sollicitudin urna dolor sagittis.</p>
                                            <div class="float-end d-flex">
                                                <img src="/assets/images/avatar/avatar-4.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-12.png" width="32" height="32"
                                                     class="mx-2 bg-light rounded-circle" alt="Avatar">
                                                <img src="/assets/images/avatar/avatar-10.png" width="32" height="32"
                                                     class="bg-light rounded-circle" alt="Avatar">
                                            </div>
                                            <a class="btn btn-primary-light btn-sm"
                                               href="extra_taskboard.html#">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <a href="extra_taskboard.html#" class="btn btn-primary">Add new task</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- ./wrapper -->
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



