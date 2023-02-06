@extends('v1.web.template.master')
@php($link=URL('/Forms&Charts/apps/toDoApp'))
@section('title')
    mail box
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
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- Right Sidebar -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Left sidebar -->
                                    <div class="page-aside-left">
                                        <div class="d-grid">
                                            <a href="mailbox-compose.html" class="btn btn-danger">Compose</a>
                                        </div>

                                        <div class="email-menu-list mt-3 nav nav-tabs mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a href="mailbox.html#inbox" id="inbox-tab" data-bs-toggle="pill" aria-expanded="false" class="nav-link active show text-danger fw-bold"><i class="fa fa-inbox me-2"></i>Inbox<span class="badge badge-danger-light float-end ms-2">7</span></a>
                                            <a href="mailbox.html#starred" id="starred-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link"><i class="fa fa-star me-2"></i>Starred</a>
                                            <a href="mailbox.html#snoozed" id="snoozed-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link"><i class="fa fa-clock-o me-2"></i>Snoozed</a>
                                            <a href="mailbox.html#draft" id="draft-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link"><i class="fa fa-file me-2"></i>Draft<span class="badge badge-info-light float-end ms-2">2</span></a>
                                            <a href="mailbox.html#sentmail" id="sentmail-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link"><i class="fa fa-paper-plane-o me-2"></i>Sent Mail</a>
                                            <a href="mailbox.html#trash" id="trash-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link"><i class="fa fa-trash me-2"></i>Trash</a>
                                            <a href="mailbox.html#important" id="important-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link"><i class="fa fa-tag me-2"></i>Important</a>
                                            <a href="mailbox.html#spam" id="spam-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link"><i class="fa fa-warning me-2"></i>Spam</a>
                                        </div>

                                        <div class="mt-40">
                                            <h6 class="text-uppercase text-black">Labels</h6>
                                            <div class="email-menu-list labels-list mt-2">
                                                <a href="javascript: void(0);"><i class="mdi mdi-circle fs-13 text-info me-2"></i>Updates</a>
                                                <a href="javascript: void(0);"><i class="mdi mdi-circle fs-13 text-warning me-2"></i>Friends</a>
                                                <a href="javascript: void(0);"><i class="mdi mdi-circle fs-13 text-success me-2"></i>Family</a>
                                                <a href="javascript: void(0);"><i class="mdi mdi-circle fs-13 text-primary me-2"></i>Social</a>
                                                <a href="javascript: void(0);"><i class="mdi mdi-circle fs-13 text-danger me-2"></i>Important</a>
                                                <a href="javascript: void(0);"><i class="mdi mdi-circle fs-13 text-secondary me-2"></i>Promotions</a>
                                            </div>
                                        </div>

                                        <div class="mt-50">
                                            <h4><span class="badge rounded p-1 px-2 badge-secondary-light">FREE</span></h4>
                                            <h6 class="text-uppercase mt-3 text-black">Storage</h6>
                                            <div class="progress my-2 progress-sm">
                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-muted fs-13 mb-0">7.02 GB (46%) of 15 GB used</p>
                                        </div>

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class="page-aside-right">

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-archive fs-16"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-warning fs-16"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-trash-o fs-16"></i></button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-folder fs-16"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <span class="dropdown-header">Move to:</span>
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-tag fs-16"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <span class="dropdown-header">Label as:</span>
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle arrow-none py-10 fs-13" data-bs-toggle="dropdown" aria-expanded="false">
                                                More
                                            </button>
                                            <div class="dropdown-menu">
                                                <span class="dropdown-header">More Options :</span>
                                                <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                            </div>
                                        </div>

                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="inbox" role="tabpanel" aria-labelledby="inbox-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail1">
                                                                        <label class="form-check-label" for="mail1"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail2">
                                                                        <label class="form-check-label" for="mail2"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Last pic over my village &nbsp;–&nbsp;
                                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="email-date">5:01 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail3">
                                                                        <label class="form-check-label" for="mail3"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Andrew Zimmer</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Mochila Beta: Subscription Confirmed
                                                                    &nbsp;–&nbsp; <span>You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail4">
                                                                        <label class="form-check-label" for="mail4"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Infinity HR</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp;
                                                                    <span>Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail5">
                                                                        <label class="form-check-label" for="mail5"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Web Support Dennis</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Re: New mail settings &nbsp;–&nbsp;
                                                                    <span>Will you answer him asap?</span>
                                                                </a>
                                                                <div class="email-date">Mar 7</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail6">
                                                                        <label class="form-check-label" for="mail6"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">me, Peter (2)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Off on Thursday &nbsp;–&nbsp;
                                                                    <span>Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                                                </a>
                                                                <div class="email-date">Mar 4</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail7">
                                                                        <label class="form-check-label" for="mail7"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Medium</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">This Week's Top Stories &nbsp;–&nbsp;
                                                                    <span>Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                                </a>
                                                                <div class="email-date">Feb 28</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail8">
                                                                        <label class="form-check-label" for="mail8"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Death to Stock</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Montly High-Res Photos &nbsp;–&nbsp;
                                                                    <span>To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                                </a>
                                                                <div class="email-date">Feb 28</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail9">
                                                                        <label class="form-check-label" for="mail9"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Revibe</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Weekend on Revibe &nbsp;–&nbsp;
                                                                    <span>Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                                </a>
                                                                <div class="email-date">Feb 27</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail10">
                                                                        <label class="form-check-label" for="mail10"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Erik, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Regarding our meeting &nbsp;–&nbsp;
                                                                    <span>That's great, see you on Thursday!</span>
                                                                </a>
                                                                <div class="email-date">Feb 24</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail11">
                                                                        <label class="form-check-label" for="mail11"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">KanbanFlow</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Task assigned: Clone ARP's website
                                                                    &nbsp;–&nbsp; <span>You have been assigned a task by Alex@Work on the board Web.</span>
                                                                </a>
                                                                <div class="email-date">Feb 24</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail12">
                                                                        <label class="form-check-label" for="mail12"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Tobias Berggren</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Let's go fishing! &nbsp;–&nbsp;
                                                                    <span>Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                                </a>
                                                                <div class="email-date">Feb 23</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail13">
                                                                        <label class="form-check-label" for="mail13"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Charukaw, me (7)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Hey man &nbsp;–&nbsp; <span>Nah man sorry i don't. Should i get it?</span>
                                                                </a>
                                                                <div class="email-date">Feb 23</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail14">
                                                                        <label class="form-check-label" for="mail14"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">me, Peter (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Home again! &nbsp;–&nbsp; <span>That's just perfect! See you tomorrow.</span>
                                                                </a>
                                                                <div class="email-date">Feb 21</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail15">
                                                                        <label class="form-check-label" for="mail15"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Stack Exchange</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">1 new items in your Stackexchange inbox
                                                                    &nbsp;–&nbsp; <span>The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                                </a>
                                                                <div class="email-date">Feb 21</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail16">
                                                                        <label class="form-check-label" for="mail16"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Google Drive Team</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">You can now use your storage in Google
                                                                    Drive &nbsp;–&nbsp; <span>Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                                                </a>
                                                                <div class="email-date">Feb 20</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail17">
                                                                        <label class="form-check-label" for="mail17"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">me, Susanna (11)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Train/Bus &nbsp;–&nbsp; <span>Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</span>
                                                                </a>
                                                                <div class="email-date">Feb 19</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail18">
                                                                        <label class="form-check-label" for="mail18"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Peter, me (3)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Hello &nbsp;–&nbsp; <span>Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                                </a>
                                                                <div class="email-date">Jan 28</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail19">
                                                                        <label class="form-check-label" for="mail19"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">me, Susanna (7)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Since you asked... and i'm
                                                                    inconceivably bored at the train station &nbsp;–&nbsp;
                                                                    <span>Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                                </a>
                                                                <div class="email-date">Jan 25</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail20">
                                                                        <label class="form-check-label" for="mail20"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                                <a href="mailbox-read.html" class="email-title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Last pic over my village &nbsp;–&nbsp;
                                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="email-date">Jan 22</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- end .mt-4 -->
                                                <div class="row">
                                                    <div class="col-7 mt-1">
                                                        Showing 1 - 20 of 289
                                                    </div> <!-- end col-->
                                                    <div class="col-5">
                                                        <div class="btn-group float-end">
                                                            <button type="button" class="btn btn-primary-light btn-sm"><i class="mdi mdi-chevron-left"></i></button>
                                                            <button type="button" class="btn btn-primary-light btn-sm"><i class="mdi mdi-chevron-right"></i></button>
                                                        </div>
                                                    </div> <!-- end col-->
                                                </div>
                                                <!-- end row-->
                                            </div>
                                            <div class="tab-pane fade" id="starred" role="tabpanel" aria-labelledby="starred-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail21">
                                                                        <label class="form-check-label" for="mail21"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail22">
                                                                        <label class="form-check-label" for="mail22"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Last pic over my village &nbsp;–&nbsp;
                                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="email-date">5:01 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail23">
                                                                        <label class="form-check-label" for="mail23"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Andrew Zimmer</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Mochila Beta: Subscription Confirmed
                                                                    &nbsp;–&nbsp; <span>You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail24">
                                                                        <label class="form-check-label" for="mail24"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Infinity HR</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp;
                                                                    <span>Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail25">
                                                                        <label class="form-check-label" for="mail25"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Web Support Dennis</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Re: New mail settings &nbsp;–&nbsp;
                                                                    <span>Will you answer him asap?</span>
                                                                </a>
                                                                <div class="email-date">Mar 7</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="snoozed" role="tabpanel" aria-labelledby="snoozed-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail31">
                                                                        <label class="form-check-label" for="mail31"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail34">
                                                                        <label class="form-check-label" for="mail34"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Infinity HR</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp;
                                                                    <span>Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail35">
                                                                        <label class="form-check-label" for="mail35"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Web Support Dennis</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Re: New mail settings &nbsp;–&nbsp;
                                                                    <span>Will you answer him asap?</span>
                                                                </a>
                                                                <div class="email-date">Mar 7</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail41">
                                                                        <label class="form-check-label" for="mail41"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail432">
                                                                        <label class="form-check-label" for="mail42"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Last pic over my village &nbsp;–&nbsp;
                                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="email-date">5:01 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sentmail" role="tabpanel" aria-labelledby="sentmail-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail51">
                                                                        <label class="form-check-label" for="mail51"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail52">
                                                                        <label class="form-check-label" for="mail52"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Last pic over my village &nbsp;–&nbsp;
                                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="email-date">5:01 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail53">
                                                                        <label class="form-check-label" for="mail53"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Andrew Zimmer</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Mochila Beta: Subscription Confirmed
                                                                    &nbsp;–&nbsp; <span>You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail54">
                                                                        <label class="form-check-label" for="mail54"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Infinity HR</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp;
                                                                    <span>Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail55">
                                                                        <label class="form-check-label" for="mail55"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Web Support Dennis</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Re: New mail settings &nbsp;–&nbsp;
                                                                    <span>Will you answer him asap?</span>
                                                                </a>
                                                                <div class="email-date">Mar 7</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail61">
                                                                        <label class="form-check-label" for="mail61"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="important" role="tabpanel" aria-labelledby="important-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail71">
                                                                        <label class="form-check-label" for="mail71"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail72">
                                                                        <label class="form-check-label" for="mail72"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Last pic over my village &nbsp;–&nbsp;
                                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="email-date">5:01 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail73">
                                                                        <label class="form-check-label" for="mail73"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Andrew Zimmer</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Mochila Beta: Subscription Confirmed
                                                                    &nbsp;–&nbsp; <span>You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail74">
                                                                        <label class="form-check-label" for="mail74"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Infinity HR</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp;
                                                                    <span>Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="email-date">Mar 8</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail75">
                                                                        <label class="form-check-label" for="mail75"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Web Support Dennis</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Re: New mail settings &nbsp;–&nbsp;
                                                                    <span>Will you answer him asap?</span>
                                                                </a>
                                                                <div class="email-date">Mar 7</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="spam" role="tabpanel" aria-labelledby="spam-tab">
                                                <div class="mt-3">
                                                    <ul class="email-list">
                                                        <li class="unread">
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail81">
                                                                        <label class="form-check-label" for="mail81"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star text-warning"></span>
                                                                <a href="mailbox-read.html" class="email-title">Lucas Kriebel (via Twitter)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                                    you a direct message on Twitter! &nbsp;–&nbsp;
                                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                </a>
                                                                <div class="email-date">11:49 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="email-sender-info">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <div class="form-checkbox">
                                                                        <input type="checkbox" class="form-check-input" id="mail82">
                                                                        <label class="form-check-label" for="mail82"></label>
                                                                    </div>
                                                                </div>
                                                                <span class="star-toggle mdi mdi-star"></span>
                                                                <a href="mailbox-read.html" class="email-title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="email-content">
                                                                <a href="mailbox-read.html" class="email-subject">Last pic over my village &nbsp;–&nbsp;
                                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="email-date">5:01 am</div>
                                                            </div>
                                                            <div class="email-action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end inbox-rightbar-->
                                </div>
                                <!-- end card-body -->
                                <div class="clearfix"></div>
                            </div> <!-- end card-box -->

                        </div> <!-- end Col -->
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
    <!-- ./wrapper -->
    <!-- chatbox -->
    @include('v1.web.components.chatBox')
    <!-- Page Content overlay -->

@endsection


@section('extraAssets')

    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>

@endsection



