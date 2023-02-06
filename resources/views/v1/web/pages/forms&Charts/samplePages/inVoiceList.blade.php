@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/sample_pages/inVoiceList'))
@section('title')
    in voice list
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
        <div class="content-wrapper" style="min-height: 351.5px;">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Invoice List</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi"><i class="mdi mdi-home-outline"></i></a></li>
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

                                        <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="dt-buttons btn-group">          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div><div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="dt-buttons btn-group">          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div><table id="example" class="text-fade table table-lg invoice-archive dataTable no-footer" role="grid" aria-describedby="example_info">
                                                    <thead>
                                                    <tr class="text-dark" role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Invoice Id: activate to sort column descending" style="width: 227.344px;" aria-sort="ascending">Invoice Id</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Invoice Date: activate to sort column ascending" style="width: 271px;">Invoice Date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Due Date : activate to sort column ascending" style="width: 347.984px;">Due Date </th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 198.828px;">Amount</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 283.875px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 195.172px;">Actions</th></tr>
                                                    </thead>
                                                    <tbody>

























                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">#0013</td>
                                                        <td>
                                                            Feb 25, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success-light">Paid on Feb 15, 2021</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$985</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">#0014</td>
                                                        <td>
                                                            Mar 2, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info-light">On hold</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$985</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">#0015</td>
                                                        <td>
                                                            Mar 23, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-warning-light">6 days</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$369</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">#0016</td>
                                                        <td>
                                                            Mar 7, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-primary-light">15 days</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$985</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">#0017</td>
                                                        <td>
                                                            May 6, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-warning-light">2 days</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$687</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">#0018</td>
                                                        <td>
                                                            Jun 17, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info-light">On hold</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$358</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">#0019</td>
                                                        <td>
                                                            Dec 26, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success-light">Paid on Feb 25, 2021</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$958</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">#0020</td>
                                                        <td>
                                                            Jan 10, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info-light">On hold</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$985</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">#0021</td>
                                                        <td>
                                                            Jan 10, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-danger-light">- 3 days</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$845</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">#0022</td>
                                                        <td>
                                                            Jan 15, 2021
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-primary-light">12 days</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 text-dark">$458</p>
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
                                                        <td class="text-center">
                                                            <div class="list-icons d-inline-flex">
                                                                <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item me-10 text-fade hover-primary"><i class="fs-18 fa fa-eye-slash"></i></a>
                                                                <div class="list-icons-item dropdown">
                                                                    <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="list-icons-item dropdown-toggle text-fade hover-primary" data-bs-toggle="dropdown"><i class="fs-18 fa fa-file-text"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                        <a href="http://127.0.0.1:8000/Forms&amp;Charts/sample_pages/inVoiceLisi" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr></tbody>
                                                </table>

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

