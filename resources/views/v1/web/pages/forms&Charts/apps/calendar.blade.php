@extends('v1.web.template.master')
{{--@php())@endphp--}}
@php
    $link=URL('/Forms&Charts/apps/calendar');
@endphp
@section('title')
    calendar
@endsection
@section('bodyType')light-skin sidebar-mini fixed sidebar-collapse rtl theme-success @endsection

@section('content')
    <!-- content -->
    <div class="wrapper">
        <div id="loader"></div>
        <!--header -->
        @include('v1.web.template.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('v1.web.template.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 430.5px;">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Calendar</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="extra_calendar.html#"><i
                                                    class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Extra</li>
                                        <li class="breadcrumb-item active" aria-current="page">Calendar</li>
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
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-30 mb-xl-0">
                                                <div id="calendar"
                                                     class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap"
                                                     style="height: 761px;">
                                                    <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                                        <div class="fc-toolbar-chunk">
                                                            <div class="btn-group">
                                                                <button class="fc-prev-button btn btn-primary"
                                                                        type="button">Prev
                                                                </button>
                                                                <button class="fc-next-button btn btn-primary"
                                                                        type="button">Next
                                                                </button>
                                                            </div>
                                                            <button disabled="" class="fc-today-button btn btn-primary"
                                                                    type="button">Today
                                                            </button>
                                                        </div>
                                                        <div class="fc-toolbar-chunk"><h2 class="fc-toolbar-title">
                                                                February
                                                                2023</h2></div>
                                                        <div class="fc-toolbar-chunk">
                                                            <div class="btn-group">
                                                                <button
                                                                    class="fc-dayGridMonth-button btn btn-primary active"
                                                                    type="button">Month
                                                                </button>
                                                                <button class="fc-timeGridWeek-button btn btn-primary"
                                                                        type="button">Week
                                                                </button>
                                                                <button class="fc-timeGridDay-button btn btn-primary"
                                                                        type="button">Day
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fc-view-harness fc-view-harness-active">
                                                        <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                                            <table
                                                                class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                                                                <thead>
                                                                <tr class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                                    <td>
                                                                        <div class="fc-scroller-harness">
                                                                            <div class="fc-scroller"
                                                                                 style="overflow: hidden;">
                                                                                <table class="fc-col-header "
                                                                                       style="width: 1316px;">
                                                                                    <colgroup></colgroup>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <th class="fc-col-header-cell fc-day fc-day-sun">
                                                                                            <div
                                                                                                class="fc-scrollgrid-sync-inner">
                                                                                                <a class="fc-col-header-cell-cushion ">Sun</a>
                                                                                            </div>
                                                                                        </th>
                                                                                        <th class="fc-col-header-cell fc-day fc-day-mon">
                                                                                            <div
                                                                                                class="fc-scrollgrid-sync-inner">
                                                                                                <a class="fc-col-header-cell-cushion ">Mon</a>
                                                                                            </div>
                                                                                        </th>
                                                                                        <th class="fc-col-header-cell fc-day fc-day-tue">
                                                                                            <div
                                                                                                class="fc-scrollgrid-sync-inner">
                                                                                                <a class="fc-col-header-cell-cushion ">Tue</a>
                                                                                            </div>
                                                                                        </th>
                                                                                        <th class="fc-col-header-cell fc-day fc-day-wed">
                                                                                            <div
                                                                                                class="fc-scrollgrid-sync-inner">
                                                                                                <a class="fc-col-header-cell-cushion ">Wed</a>
                                                                                            </div>
                                                                                        </th>
                                                                                        <th class="fc-col-header-cell fc-day fc-day-thu">
                                                                                            <div
                                                                                                class="fc-scrollgrid-sync-inner">
                                                                                                <a class="fc-col-header-cell-cushion ">Thu</a>
                                                                                            </div>
                                                                                        </th>
                                                                                        <th class="fc-col-header-cell fc-day fc-day-fri">
                                                                                            <div
                                                                                                class="fc-scrollgrid-sync-inner">
                                                                                                <a class="fc-col-header-cell-cushion ">Fri</a>
                                                                                            </div>
                                                                                        </th>
                                                                                        <th class="fc-col-header-cell fc-day fc-day-sat">
                                                                                            <div
                                                                                                class="fc-scrollgrid-sync-inner">
                                                                                                <a class="fc-col-header-cell-cushion ">Sat</a>
                                                                                            </div>
                                                                                        </th>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                                    <td>
                                                                        <div
                                                                            class="fc-scroller-harness fc-scroller-harness-liquid">
                                                                            <div
                                                                                class="fc-scroller fc-scroller-liquid-absolute"
                                                                                style="overflow: hidden auto;">
                                                                                <div
                                                                                    class="fc-daygrid-body fc-daygrid-body-unbalanced "
                                                                                    style="width: 1316px;">
                                                                                    <table
                                                                                        class="fc-scrollgrid-sync-table"
                                                                                        style="width: 1316px; height: 651px;">
                                                                                        <colgroup></colgroup>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                                                data-date="2023-01-29">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">29</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                                                data-date="2023-01-30">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">30</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other"
                                                                                                data-date="2023-01-31">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">31</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                                data-date="2023-02-01">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">1</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                                data-date="2023-02-02">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">2</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-today "
                                                                                                data-date="2023-02-03">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">3</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events">
                                                                                                        <div
                                                                                                            class="fc-daygrid-event-harness">
                                                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today bg-success">
                                                                                                                <div
                                                                                                                    class="fc-daygrid-event-dot"></div>
                                                                                                                <div
                                                                                                                    class="fc-event-time">
                                                                                                                    3p
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="fc-event-title">
                                                                                                                    Your
                                                                                                                    Birthday
                                                                                                                </div>
                                                                                                            </a></div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                                                data-date="2023-02-04">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">4</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                                                data-date="2023-02-05">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">5</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events">
                                                                                                        <div
                                                                                                            class="fc-daygrid-event-harness">
                                                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-primary">
                                                                                                                <div
                                                                                                                    class="fc-daygrid-event-dot"></div>
                                                                                                                <div
                                                                                                                    class="fc-event-time">
                                                                                                                    1:40p
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="fc-event-title">
                                                                                                                    Do
                                                                                                                    Homework
                                                                                                                </div>
                                                                                                            </a></div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-event-harness">
                                                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-warning">
                                                                                                                <div
                                                                                                                    class="fc-daygrid-event-dot"></div>
                                                                                                                <div
                                                                                                                    class="fc-event-time">
                                                                                                                    4:26p
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="fc-event-title">
                                                                                                                    Lunch
                                                                                                                </div>
                                                                                                            </a></div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                                                data-date="2023-02-06">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">6</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                                                data-date="2023-02-07">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">7</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events">
                                                                                                        <div
                                                                                                            class="fc-daygrid-event-harness">
                                                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-danger">
                                                                                                                <div
                                                                                                                    class="fc-daygrid-event-dot"></div>
                                                                                                                <div
                                                                                                                    class="fc-event-time">
                                                                                                                    12:53p
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="fc-event-title">
                                                                                                                    SLEEP
                                                                                                                    TIGHT
                                                                                                                </div>
                                                                                                            </a></div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                                                data-date="2023-02-08">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">8</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                                                data-date="2023-02-09">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">9</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                                                data-date="2023-02-10">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">10</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                                                data-date="2023-02-11">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">11</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                                                data-date="2023-02-12">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">12</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                                                data-date="2023-02-13">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">13</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                                                data-date="2023-02-14">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">14</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                                                data-date="2023-02-15">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">15</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                                                data-date="2023-02-16">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">16</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                                                data-date="2023-02-17">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">17</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                                                data-date="2023-02-18">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">18</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                                                data-date="2023-02-19">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">19</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                                                data-date="2023-02-20">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">20</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                                                data-date="2023-02-21">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">21</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                                                data-date="2023-02-22">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">22</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                                                data-date="2023-02-23">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">23</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                                                data-date="2023-02-24">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">24</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                                                data-date="2023-02-25">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">25</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                                                data-date="2023-02-26">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">26</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                                                data-date="2023-02-27">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">27</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                                                data-date="2023-02-28">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">28</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other"
                                                                                                data-date="2023-03-01">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">1</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                                                data-date="2023-03-02">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">2</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                                                data-date="2023-03-03">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">3</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                                                data-date="2023-03-04">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">4</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other"
                                                                                                data-date="2023-03-05">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">5</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other"
                                                                                                data-date="2023-03-06">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">6</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other"
                                                                                                data-date="2023-03-07">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">7</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other"
                                                                                                data-date="2023-03-08">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">8</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                                                data-date="2023-03-09">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">9</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                                                data-date="2023-03-10">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">10</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                                                data-date="2023-03-11">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-top">
                                                                                                        <a class="fc-daygrid-day-number">11</a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-events"></div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bg"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="d-grid">
                                        <button class="btn btn-danger" id="btn-new-event">Create New Event</button>
                                    </div>
                                    <div id="external-events" class="mt-20">
                                        <br>
                                        <p class="text-muted">Drag and drop your event or click in the calendar
                                        </p>
                                        <div class="external-event bg-success" data-class="bg-success">
                                            <i class="mdi mdi-arrow-right me-2 vertical-middle"></i>LUNCH
                                        </div>
                                        <div class="external-event bg-primary" data-class="bg-primary">
                                            <i class="mdi mdi-arrow-right me-2 vertical-middle"></i>GO HOME
                                        </div>
                                        <div class="external-event bg-warning" data-class="bg-warning">
                                            <i class="mdi mdi-arrow-right me-2 vertical-middle"></i>DO HOMEWORK
                                        </div>
                                        <div class="external-event bg-danger" data-class="bg-danger">
                                            <i class="mdi mdi-arrow-right me-2 vertical-middle"></i>WORK ON UI DESIGN
                                        </div>
                                        <div class="external-event bg-info" data-class="bg-info">
                                            <i class="mdi mdi-arrow-right me-2 vertical-middle"></i>SLEEP TIGHT
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="event-modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                                            <div class="modal-header py-3 px-4 border-bottom-0">
                                                <h5 class="modal-title" id="modal-title">Event</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body px-4 pb-4 pt-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="control-label form-label">Event Name</label>
                                                            <input class="form-control" placeholder="Insert Event Name"
                                                                   type="text" name="title" id="event-title"
                                                                   required="">
                                                            <div class="invalid-feedback">Please provide a valid event
                                                                name
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="control-label form-label">Category</label>
                                                            <select class="form-select" name="category"
                                                                    id="event-category"
                                                                    required="">
                                                                <option value="bg-danger" selected="">Danger</option>
                                                                <option value="bg-success">Success</option>
                                                                <option value="bg-primary">Primary</option>
                                                                <option value="bg-info">Info</option>
                                                                <option value="bg-dark">Dark</option>
                                                                <option value="bg-warning">Warning</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please select a valid event
                                                                category
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger"
                                                                id="btn-delete-event">
                                                            Delete
                                                        </button>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <button type="button" class="btn btn-danger-light me-1"
                                                                data-bs-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-success"
                                                                id="btn-save-event">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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


        <!-- BEGIN MODAL -->
        <!-- Modal Add Category -->
        @include('v1.web.components.modelNonBorder')
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
c
    <!-- Page Content overlay -->
@endsection
@section('extraAssets')
    <script src="/assets/vendor_components/full-calendar/moment.js"></script>
    <script src="/assets/vendor_components/full-calendar/fullcalendar.min.js"></script>

    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/demo.calendar.js"></script>
@endsection
