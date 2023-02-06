@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/sample_pages/inVoiceList2'))
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
                            <h4 class="page-title">Invoice List</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{$link}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Invoice</li>
                                        <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
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
                                    <h4 class="box-title">Invoice List</h4>
                                    <p class="mb-0 box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF &amp; Print</p>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">

                                        <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="dt-buttons btn-group">          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div><table id="example" class="text-fade table table-lg invoice-archive dataTable no-footer" role="grid" aria-describedby="example_info">
                                                <thead>
                                                <tr class="text-dark" role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Id: activate to sort column descending" style="width: 196.25px;">Invoice Id</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Issued to: activate to sort column ascending" style="width: 189.531px;">Issued to</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 246.281px;">Status</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Issue date: activate to sort column ascending" style="width: 207.188px;">Issue date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Due date: activate to sort column ascending" style="width: 303px;">Due date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 171.016px;">Amount</th><th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 167.734px;">Actions</th></tr>
                                                </thead>
                                                <tbody>

























                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">#0013</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Liam</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending" selected="">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Feb 25, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-success">Paid on Feb 15, 2021</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$985</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">#0014</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Elijah</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel" selected="">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Mar 2, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-secondary">On hold</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$985</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">#0015</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Matthew</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid" selected="">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Mar 23, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-warning">6 days</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$369</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">#0016</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Anthony</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue" selected="">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Mar 7, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-primary">15 days</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$985</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">#0017</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Daniel</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending" selected="">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        May 6, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-warning">2 days</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$687</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">#0018</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Aiden</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending" selected="">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Jun 17, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-secondary">On hold</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$358</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">#0019</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Alexander</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold" selected="">On hold</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Dec 26, 2020
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-success">Paid on Feb 25, 2021</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$958</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">#0020</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Ethan</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid" selected="">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Jan 10, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-secondary">On hold</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$985</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">#0021</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Noah</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue" selected="">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Jan 10, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-danger">- 3 days</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$845</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">#0022</td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <a href="{{$link}}" class="text-fade">Jayden</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <select name="status" class="form-select" data-placeholder="Select status">
                                                            <option value="overdue">Overdue</option>
                                                            <option value="hold">On hold</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="invalid">Invalid</option>
                                                            <option value="cancel" selected="">Canceled</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Jan 15, 2021
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-primary">12 days</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 text-dark">$458</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="{{$link}}" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="{{$link}}" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="{{$link}}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr></tbody>
                                            </table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 13 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="box box-inverse box-success">
                                        <div class="box-body">
                                            <div class="flexbox">
                                                <h5>Invoice</h5>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-list"></i> Details</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-add"></i> Add new</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-refresh"></i> Refresh</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center my-2">
                                                <div class="fs-60">2,064</div>
                                                <span>Total Invoice</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="box box-inverse box-primary">
                                        <div class="box-body">
                                            <div class="flexbox">
                                                <h5>Re Generate Invoice</h5>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-list"></i> Details</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-add"></i> Add new</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-refresh"></i> Refresh</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center my-2">
                                                <div class="fs-60">1,738</div>
                                                <span>Re Generate Invoice</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="box box-inverse box-danger">
                                        <div class="box-body">
                                            <div class="flexbox">
                                                <h5>Overdue Payment Invoice</h5>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-list"></i> Details</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-add"></i> Add new</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-refresh"></i> Refresh</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center my-2">
                                                <div class="fs-60">1100</div>
                                                <span>Overdue Payment Invoice</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="box box-inverse box-warning">
                                        <div class="box-body">
                                            <div class="flexbox">
                                                <h5>Pending Invoice</h5>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-list"></i> Details</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-add"></i> Add new</a>
                                                        <a class="dropdown-item" href="{{$link}}"><i class="ion-android-refresh"></i> Refresh</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center my-2">
                                                <div class="fs-60">964</div>
                                                <span>Pending</span>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/data-table.js"></script>
@endsection

