<html lang="en" style="height: auto; min-height: 100%;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assets/images/favicon.ico">

    <title>EmployX - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="/assets/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/skin_color.css">

    <style type="text/css">.apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }


        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }


        .apexcharts-inner {
            position: relative;
        }

        .apexcharts-text tspan {
            font-family: inherit;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }


        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex;
        }
        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-box, .apexcharts-custom-tooltip {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse;
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-box span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_boundingRect, .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
        }
        .apexcharts-selection-rect + g .svg_select_boundingRect,
        .apexcharts-selection-rect + g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect + g .svg_select_points_l,
        .apexcharts-selection-rect + g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2;
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon,
        .apexcharts-reset-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }

        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
            fill: #008FFB;
        }

        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabels,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-annotation-rect,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line,
        .apexcharts-zoom-rect,
        .apexcharts-toolbar svg,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }


        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }


        /* Resize generated styles */

        @keyframes resizeanim {
            from {
                opacity: 0;
            }
            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="light-skin sidebar-mini fixed sidebar-collapse rtl theme-success" style="height: auto; min-height: 100%;">

<div class="wrapper" style="height: auto; min-height: 100%;">
    <div id="loader" style="opacity: 0.05; display: none;"></div>

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <!-- logo-->
                <div class="logo-mini w-40">
                    <span class="light-logo"><img src="/assets/images/logo-letter.png" alt="logo"></span>
                    <span class="dark-logo"><img src="/assets/images/logo-letter-white.png" alt="logo"></span>
                </div>
                <div class="logo-lg">
                    <span class="light-logo"><img src="/assets/images/logo-light-text.png" alt="logo"></span>
                    <span class="dark-logo"><img src="/assets/images/logo-light-text.png" alt="logo"></span>
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item">
                        <a href="index.html#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </a>
                    </li>
                    <li class="btn-group d-lg-inline-flex d-none">
                        <div class="app-menu">
                            <div class="search-bx mx-5">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group d-md-inline-flex d-none">
                        <label class="switch">
				  	<span class="waves-effect skin-toggle waves-light">
							<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
							<span class="switch-on"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></span>
							<span class="switch-off"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></span>
						</span>
                        </label>
                    </li>
                    <li class="dropdown notifications-menu btn-group ">
                        <a href="index.html#" class="waves-effect waves-light btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="Notifications">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg>
                            <div class="pulse-wave"></div>
                        </a>
                        <ul class="dropdown-menu animated bounceIn">
                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="index.html#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="menu sm-scrol" style="overflow: hidden; width: auto; height: 250px;">
                                        <li>
                                            <a href="index.html#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul><div class="slimScrollBar" style="background: rgb(228, 230, 239); width: 4px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 7px; z-index: 99; right: 3px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 3px;"></div></div>
                            </li>
                            <li class="footer">
                                <a href="component_notification.html">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="btn-group nav-item d-xl-inline-flex d-none">
                        <a href="index.html#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </a>
                    </li>

                    <li class="btn-group d-xl-inline-flex d-none">
                        <a href="index.html#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded" src="/assets/images/svg-icon/usa.svg" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item my-5" href="index.html#"><img class="w-20 rounded me-10" src="/assets/images/svg-icon/usa.svg" alt=""> English</a>
                            <a class="dropdown-item my-5" href="index.html#"><img class="w-20 rounded me-10" src="/assets/images/svg-icon/spain.svg" alt=""> Spanish</a>
                            <a class="dropdown-item my-5" href="index.html#"><img class="w-20 rounded me-10" src="/assets/images/svg-icon/ger.svg" alt=""> German</a>
                            <a class="dropdown-item my-5" href="index.html#"><img class="w-20 rounded me-10" src="/assets/images/svg-icon/jap.svg" alt=""> Japanese</a>
                            <a class="dropdown-item my-5" href="index.html#"><img class="w-20 rounded me-10" src="/assets/images/svg-icon/fra.svg" alt=""> French</a>
                        </div>
                    </li>

                    <li class="btn-group nav-item d-xl-inline-flex d-none">
                        <a href="index.html#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                        </a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li class="btn-group nav-item d-xl-inline-flex d-none">
                        <a href="index.html#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                        </a>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="index.html#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
                            <img src="/assets/images/avatar/avatar-13.png" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="">
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll ps" style="height: 97%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu tree" data-widget="tree">
                        <li class="active">
                            <a href="index.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                <span>Jobs</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="jobs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Jobs List</a></li>
                                <li><a href="jobs_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Jobs Details</a></li>
                                <li><a href="applications.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Applications</a></li>
                                <li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Profile</a></li>
                                <li><a href="billing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Billing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="candidates.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                <span>Candidates</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-headphones"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
                                <span>Support</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
                                <li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
                            </ul>
                        </li>

                        <li class="header">Components</li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
                                <span>Features</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
                                        <li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
                                        <li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
                                        <li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
                                        <li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>BS UI
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
                                        <li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
                                        <li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
                                        <li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>
                                        <li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
                                        <li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
                                        <li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
                                        <li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
                                        <li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
                                        <li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>
                                        <li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
                                        <li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
                                        <li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
                                        <li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
                                        <li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom UI
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
                                        <li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
                                        <li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
                                        <li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
                                        <li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
                                        <li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
                                        <li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
                                        <li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
                                        <li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
                                        <li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
                                        <li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
                                        <li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
                                        <li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
                                        <li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
                                        <li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                                <span>Forms &amp; Charts</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
                                        <li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
                                        <li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>
                                        <li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
                                        <li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
                                        <li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
                                        <li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
                                        <li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
                                        <li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
                                        <li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="treeview">
                                            <a href="index.html#">
                                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts
                                                <span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
                                                <li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
                                                <li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
                                                <li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
                                                <li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
                                                <li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="charts_apex.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apex Chart</a></li>
                                        <li class="treeview">
                                            <a href="index.html#">
                                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>C3 Charts
                                                <span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
                                                <li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
                                                <li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
                                                <li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview">
                                            <a href="index.html#">
                                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>eCharts
                                                <span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
                                                <li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
                                                <li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie Chart</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                <span>Tables</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
                                <li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
                                <li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
                                <li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                                <span>Apps &amp; Widgets</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
                                        <li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
                                        <li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
                                        <li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="treeview">
                                            <a href="index.html#">
                                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom
                                                <span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
                                                <li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
                                                <li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
                                                <li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
                                                <li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
                                                <li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
                                                <li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
                                                <li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview">
                                            <a href="index.html#">
                                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
                                                <span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
                                                <li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview">
                                            <a href="index.html#">
                                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
                                                <span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
                                                <li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
                                                <li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ecommerce
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
                                        <li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
                                        <li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
                                        <li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
                                        <li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
                                        <li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="index.html#">
                                        <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sample Pages
                                        <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
                                        <li><a href="invoice_2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice 2</a></li>
                                        <li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>
                                        <li><a href="invoicelist_2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List 2</a></li>
                                        <li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>
                                        <li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
                                        <li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
                                        <li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
                                        <li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
                                        <li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
                                        <li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
                                        <li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span>Authentication</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="auth_login.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a>
                                    <a href="auth_login_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a>
                                </li>
                                <li>
                                    <a href="auth_register.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a>
                                    <a href="auth_register_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a>
                                </li>
                                <li>
                                    <a href="auth_lockscreen.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a>
                                    <a href="auth_lockscreen_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a>
                                </li>
                                <li>
                                    <a href="auth_user_pass.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a>
                                    <a href="auth_user_pass_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                <span>Miscellaneous</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="error_404.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a>
                                    <a href="error_404_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a>
                                </li>
                                <li>
                                    <a href="error_500.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a>
                                    <a href="error_500_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a>
                                </li>
                                <li>
                                    <a href="error_maintenance.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a>
                                    <a href="error_maintenance_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="sidebar-widgets">
                        <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                            <div class="text-center">
                                <img src="/assets/images/svg-icon/color-svg/custom-30.svg" class="sideimg p-5" alt="">
                                <h4 class="title-bx text-primary">Best Job portal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 57px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 389.5px;">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-8 col-12 order-xl-1 order-2">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="box overflow-h">
                                    <div class="box-body" style="height:18rem;">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="me-10 mb-0 fw-600">Jobs for Me</h4>
                                            <img src="/assets/images/svg-icon/img-1.png" class="img-fluid max-w-150 image-1" alt="">
                                        </div>
                                        <div>
                                            <a href="jobs.html" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
                                                <span class="text-overflow pe-5"><i class="fa fa-file-text me-10"></i><span class="fw-600">10</span> new jobs for you</span>
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box overflow-h">
                                    <div class="box-body" style="height:18rem;">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="me-10 mb-0 fw-600">My Learning</h4>
                                            <img src="/assets/images/svg-icon/img-2.png" class="img-fluid max-w-150 image-1" alt="">
                                        </div>
                                        <div>
                                            <a href="jobs.html" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
                                                <span class="text-overflow pe-5"><i class="fa fa-refresh me-10"></i><span class="fw-600">3</span> essential courses</span>
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box overflow-h">
                                    <div class="box-body" style="height:18rem;">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="me-10 mb-0 fw-600">My Social Story</h4>
                                            <img src="/assets/images/svg-icon/img-3.png" class="img-fluid max-w-150 image-1" alt="">
                                        </div>
                                        <div>
                                            <a href="mailbox.html" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
                                                <span class="text-overflow pe-5"><i class="fa fa-commenting-o me-10"></i><span class="fw-600">4</span> New Messages </span>
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12 order-xl-2 order-1">
                        <div class="box" style="height:18rem;">
                            <div class="box-body bb-1">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img src="/assets/images/avatar/avatar-15.png" class="me-10 avatar avatar-lg bg-primary-light" alt="">
                                        <div>
                                            <h4 class="fw-500 mb-0">Nil Yeager</h4>
                                            <a href="extra_profile.html">View Profile</a>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="badge badge-lg badge-warning-light me-10"><i class="me-5 fa fa-server"></i> 50</div>
                                        <div class="badge badge-lg badge-primary-light"><a href="mailbox.html"><i class="fa fa-envelope"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <p class="fw-500">Your Profile is complate for 50%</p>
                                <div class="progress bg-primary-light">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>
                            <div class="box-footer py-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-12 mb-0 text-overflow">Next: Add your Experience</p>
                                    <a href="extra_profile.html" class="waves-effect waves-light btn btn-primary">Finish Your Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-12">
                        <div class="row">
                            <div class="col-xl-6 col-12">
                                <div class="box">
                                    <div class="box-header d-flex justify-content-between">
                                        <h4 class="box-title">Total Employees</h4>
                                        <h4 class="box-title fw-500">590</h4>
                                    </div>
                                    <div class="box-body">
                                        <div id="donut-chart"><svg height="342" version="1.1" width="549.328" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.546875px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#4d7cff" d="M274.664,278.3333333333333A107.33333333333333,107.33333333333333,0,1,0,167.36037223118893,168.47494314977175" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#4d7cff" stroke="#ffffff" d="M274.664,281.3333333333333A110.33333333333333,110.33333333333333,0,1,0,164.36120251094266,168.40436702662873L113.7085583467834,167.21241472465763A161,161,0,1,1,274.664,332Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#51ce8a" d="M167.36037223118893,168.47494314977175A107.33333333333333,107.33333333333333,0,0,0,274.63028023940615,278.3333280366457" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#51ce8a" stroke="#ffffff" d="M164.36120251094266,168.40436702662873A110.33333333333333,110.33333333333333,0,0,0,274.62933776162555,281.3333278886016L274.61499115541017,326.99999230170863A156,156,0,0,1,118.70717454719386,167.33004159656267Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="274.664" y="161" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(4.8788,0,0,4.8788,-1066.1892,-645.8182)" stroke-width="0.20496894409937888"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Male</tspan></text><text x="274.664" y="181" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(3.2525,0,0,3.2525,-619.1792,-395.3182)" stroke-width="0.3074534161490683"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text></svg></div>
                                    </div>
                                    <div class="box-footer no-border">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="b-1 rounded text-center p-10 me-10 w-p100"><span class="me-10 badge badge-xl badge-dot badge-primary"></span> Male</div>
                                            <div class="b-1 rounded text-center p-10 ms-10 w-p100"><span class="me-10 badge badge-xl badge-dot badge-success"></span> FeMale</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="box">
                                    <div class="box-header d-flex justify-content-between">
                                        <h4 class="box-title">Total Projects</h4>
                                        <h4 class="box-title fw-500">87</h4>
                                    </div>
                                    <div class="box-body ps-0 pb-0" style="position: relative;">
                                        <div class="ps-20 d-flex align-items-center justify-content-between">
                                            <div>
                                                <h5 class="mb-0 text-fade">Ongoing <span class="text-primary">24 Projects</span></h5>
                                            </div>
                                            <div class="bg-primary-light px-3 py-2 text-primary text-center rounded">
                                                <script> document.write(new Date().toLocaleDateString()); </script>2/4/2023
                                            </div>
                                        </div>

                                        <div id="project-chart" style="min-height: 329px;"><div id="apexchartssag0hd6m" class="apexcharts-canvas apexchartssag0hd6m apexcharts-theme-light" style="width: 588px; height: 314px;"><svg id="SvgjsSvg1669" width="588" height="314" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1671" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs1670"><linearGradient id="SvgjsLinearGradient1675" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1676" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1677" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1678" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasksag0hd6m"><rect id="SvgjsRect1680" width="536.640625" height="246.348" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasksag0hd6m"></clipPath><clipPath id="nonForecastMasksag0hd6m"></clipPath><clipPath id="gridRectMarkerMasksag0hd6m"><rect id="SvgjsRect1681" width="536.640625" height="250.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1679" width="11.0966796875" height="246.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1675)" class="apexcharts-xcrosshairs" y2="246.348" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1725" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1726" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1728" font-family="Helvetica, Arial, sans-serif" x="22.193359375" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1729">Jan</tspan><title>Jan</title></text><text id="SvgjsText1731" font-family="Helvetica, Arial, sans-serif" x="66.580078125" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1732">Feb</tspan><title>Feb</title></text><text id="SvgjsText1734" font-family="Helvetica, Arial, sans-serif" x="110.966796875" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1735">Mar</tspan><title>Mar</title></text><text id="SvgjsText1737" font-family="Helvetica, Arial, sans-serif" x="155.353515625" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1738">Apr</tspan><title>Apr</title></text><text id="SvgjsText1740" font-family="Helvetica, Arial, sans-serif" x="199.740234375" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1741">May</tspan><title>May</title></text><text id="SvgjsText1743" font-family="Helvetica, Arial, sans-serif" x="244.126953125" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1744">Jun</tspan><title>Jun</title></text><text id="SvgjsText1746" font-family="Helvetica, Arial, sans-serif" x="288.513671875" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1747">Jul</tspan><title>Jul</title></text><text id="SvgjsText1749" font-family="Helvetica, Arial, sans-serif" x="332.900390625" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1750">Aug</tspan><title>Aug</title></text><text id="SvgjsText1752" font-family="Helvetica, Arial, sans-serif" x="377.287109375" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1753">Sep</tspan><title>Sep</title></text><text id="SvgjsText1755" font-family="Helvetica, Arial, sans-serif" x="421.673828125" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1756">Oct</tspan><title>Oct</title></text><text id="SvgjsText1758" font-family="Helvetica, Arial, sans-serif" x="466.060546875" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1759">Nov</tspan><title>Nov</title></text><text id="SvgjsText1761" font-family="Helvetica, Arial, sans-serif" x="510.447265625" y="275.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1762">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine1763" x1="0" y1="247.348" x2="532.640625" y2="247.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1778" class="apexcharts-grid"><g id="SvgjsG1779" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1794" x1="0" y1="0" x2="532.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="7" class="apexcharts-gridline"></line><line id="SvgjsLine1795" x1="0" y1="49.269600000000004" x2="532.640625" y2="49.269600000000004" stroke="#e0e0e0" stroke-dasharray="7" class="apexcharts-gridline"></line><line id="SvgjsLine1796" x1="0" y1="98.53920000000001" x2="532.640625" y2="98.53920000000001" stroke="#e0e0e0" stroke-dasharray="7" class="apexcharts-gridline"></line><line id="SvgjsLine1797" x1="0" y1="147.80880000000002" x2="532.640625" y2="147.80880000000002" stroke="#e0e0e0" stroke-dasharray="7" class="apexcharts-gridline"></line><line id="SvgjsLine1798" x1="0" y1="197.07840000000002" x2="532.640625" y2="197.07840000000002" stroke="#e0e0e0" stroke-dasharray="7" class="apexcharts-gridline"></line><line id="SvgjsLine1799" x1="0" y1="246.348" x2="532.640625" y2="246.348" stroke="#e0e0e0" stroke-dasharray="7" class="apexcharts-gridline"></line></g><g id="SvgjsG1780" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1781" x1="0" y1="247.348" x2="0" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1782" x1="44.38671875" y1="247.348" x2="44.38671875" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1783" x1="88.7734375" y1="247.348" x2="88.7734375" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1784" x1="133.16015625" y1="247.348" x2="133.16015625" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1785" x1="177.546875" y1="247.348" x2="177.546875" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1786" x1="221.93359375" y1="247.348" x2="221.93359375" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1787" x1="266.3203125" y1="247.348" x2="266.3203125" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1788" x1="310.70703125" y1="247.348" x2="310.70703125" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1789" x1="355.09375" y1="247.348" x2="355.09375" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1790" x1="399.48046875" y1="247.348" x2="399.48046875" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1791" x1="443.8671875" y1="247.348" x2="443.8671875" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1792" x1="488.25390625" y1="247.348" x2="488.25390625" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1793" x1="532.640625" y1="247.348" x2="532.640625" y2="253.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1801" x1="0" y1="246.348" x2="532.640625" y2="246.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1800" x1="0" y1="1" x2="0" y2="246.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1682" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1683" class="apexcharts-series" seriesName="Upcoming" rel="1" data:realIndex="0"><path id="SvgjsPath1685" d="M 16.64501953125 246.348L 16.64501953125 216.78624000000002Q 16.64501953125 216.78624000000002 16.64501953125 216.78624000000002L 27.74169921875 216.78624000000002Q 27.74169921875 216.78624000000002 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002L 27.74169921875 246.348L 27.74169921875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 16.64501953125 246.348L 16.64501953125 216.78624000000002Q 16.64501953125 216.78624000000002 16.64501953125 216.78624000000002L 27.74169921875 216.78624000000002Q 27.74169921875 216.78624000000002 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002L 27.74169921875 246.348L 27.74169921875 246.348z" pathFrom="M 16.64501953125 246.348L 16.64501953125 246.348L 27.74169921875 246.348L 27.74169921875 246.348L 27.74169921875 246.348L 27.74169921875 246.348L 27.74169921875 246.348L 16.64501953125 246.348" cy="216.78624000000002" cx="61.03173828125" j="0" val="12" barHeight="29.561760000000003" barWidth="11.0966796875"></path><path id="SvgjsPath1686" d="M 61.03173828125 246.348L 61.03173828125 209.3958Q 61.03173828125 209.3958 61.03173828125 209.3958L 72.12841796875 209.3958Q 72.12841796875 209.3958 72.12841796875 209.3958L 72.12841796875 209.3958L 72.12841796875 246.348L 72.12841796875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 61.03173828125 246.348L 61.03173828125 209.3958Q 61.03173828125 209.3958 61.03173828125 209.3958L 72.12841796875 209.3958Q 72.12841796875 209.3958 72.12841796875 209.3958L 72.12841796875 209.3958L 72.12841796875 246.348L 72.12841796875 246.348z" pathFrom="M 61.03173828125 246.348L 61.03173828125 246.348L 72.12841796875 246.348L 72.12841796875 246.348L 72.12841796875 246.348L 72.12841796875 246.348L 72.12841796875 246.348L 61.03173828125 246.348" cy="209.3958" cx="105.41845703125" j="1" val="15" barHeight="36.952200000000005" barWidth="11.0966796875"></path><path id="SvgjsPath1687" d="M 105.41845703125 246.348L 105.41845703125 204.46884Q 105.41845703125 204.46884 105.41845703125 204.46884L 116.51513671875 204.46884Q 116.51513671875 204.46884 116.51513671875 204.46884L 116.51513671875 204.46884L 116.51513671875 246.348L 116.51513671875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 105.41845703125 246.348L 105.41845703125 204.46884Q 105.41845703125 204.46884 105.41845703125 204.46884L 116.51513671875 204.46884Q 116.51513671875 204.46884 116.51513671875 204.46884L 116.51513671875 204.46884L 116.51513671875 246.348L 116.51513671875 246.348z" pathFrom="M 105.41845703125 246.348L 105.41845703125 246.348L 116.51513671875 246.348L 116.51513671875 246.348L 116.51513671875 246.348L 116.51513671875 246.348L 116.51513671875 246.348L 105.41845703125 246.348" cy="204.46884" cx="149.80517578125" j="2" val="17" barHeight="41.87916" barWidth="11.0966796875"></path><path id="SvgjsPath1688" d="M 149.80517578125 246.348L 149.80517578125 221.7132Q 149.80517578125 221.7132 149.80517578125 221.7132L 160.90185546875 221.7132Q 160.90185546875 221.7132 160.90185546875 221.7132L 160.90185546875 221.7132L 160.90185546875 246.348L 160.90185546875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 149.80517578125 246.348L 149.80517578125 221.7132Q 149.80517578125 221.7132 149.80517578125 221.7132L 160.90185546875 221.7132Q 160.90185546875 221.7132 160.90185546875 221.7132L 160.90185546875 221.7132L 160.90185546875 246.348L 160.90185546875 246.348z" pathFrom="M 149.80517578125 246.348L 149.80517578125 246.348L 160.90185546875 246.348L 160.90185546875 246.348L 160.90185546875 246.348L 160.90185546875 246.348L 160.90185546875 246.348L 149.80517578125 246.348" cy="221.7132" cx="194.19189453125" j="3" val="10" barHeight="24.634800000000002" barWidth="11.0966796875"></path><path id="SvgjsPath1689" d="M 194.19189453125 246.348L 194.19189453125 169.98012Q 194.19189453125 169.98012 194.19189453125 169.98012L 205.28857421875 169.98012Q 205.28857421875 169.98012 205.28857421875 169.98012L 205.28857421875 169.98012L 205.28857421875 246.348L 205.28857421875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 194.19189453125 246.348L 194.19189453125 169.98012Q 194.19189453125 169.98012 194.19189453125 169.98012L 205.28857421875 169.98012Q 205.28857421875 169.98012 205.28857421875 169.98012L 205.28857421875 169.98012L 205.28857421875 246.348L 205.28857421875 246.348z" pathFrom="M 194.19189453125 246.348L 194.19189453125 246.348L 205.28857421875 246.348L 205.28857421875 246.348L 205.28857421875 246.348L 205.28857421875 246.348L 205.28857421875 246.348L 194.19189453125 246.348" cy="169.98012" cx="238.57861328125" j="4" val="31" barHeight="76.36788" barWidth="11.0966796875"></path><path id="SvgjsPath1690" d="M 238.57861328125 246.348L 238.57861328125 197.07840000000002Q 238.57861328125 197.07840000000002 238.57861328125 197.07840000000002L 249.67529296875 197.07840000000002Q 249.67529296875 197.07840000000002 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002L 249.67529296875 246.348L 249.67529296875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 238.57861328125 246.348L 238.57861328125 197.07840000000002Q 238.57861328125 197.07840000000002 238.57861328125 197.07840000000002L 249.67529296875 197.07840000000002Q 249.67529296875 197.07840000000002 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002L 249.67529296875 246.348L 249.67529296875 246.348z" pathFrom="M 238.57861328125 246.348L 238.57861328125 246.348L 249.67529296875 246.348L 249.67529296875 246.348L 249.67529296875 246.348L 249.67529296875 246.348L 249.67529296875 246.348L 238.57861328125 246.348" cy="197.07840000000002" cx="282.96533203125" j="5" val="20" barHeight="49.269600000000004" barWidth="11.0966796875"></path><path id="SvgjsPath1691" d="M 282.96533203125 246.348L 282.96533203125 209.3958Q 282.96533203125 209.3958 282.96533203125 209.3958L 294.06201171875 209.3958Q 294.06201171875 209.3958 294.06201171875 209.3958L 294.06201171875 209.3958L 294.06201171875 246.348L 294.06201171875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 282.96533203125 246.348L 282.96533203125 209.3958Q 282.96533203125 209.3958 282.96533203125 209.3958L 294.06201171875 209.3958Q 294.06201171875 209.3958 294.06201171875 209.3958L 294.06201171875 209.3958L 294.06201171875 246.348L 294.06201171875 246.348z" pathFrom="M 282.96533203125 246.348L 282.96533203125 246.348L 294.06201171875 246.348L 294.06201171875 246.348L 294.06201171875 246.348L 294.06201171875 246.348L 294.06201171875 246.348L 282.96533203125 246.348" cy="209.3958" cx="327.35205078125" j="6" val="15" barHeight="36.952200000000005" barWidth="11.0966796875"></path><path id="SvgjsPath1692" d="M 327.35205078125 246.348L 327.35205078125 187.22448Q 327.35205078125 187.22448 327.35205078125 187.22448L 338.44873046875 187.22448Q 338.44873046875 187.22448 338.44873046875 187.22448L 338.44873046875 187.22448L 338.44873046875 246.348L 338.44873046875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 327.35205078125 246.348L 327.35205078125 187.22448Q 327.35205078125 187.22448 327.35205078125 187.22448L 338.44873046875 187.22448Q 338.44873046875 187.22448 338.44873046875 187.22448L 338.44873046875 187.22448L 338.44873046875 246.348L 338.44873046875 246.348z" pathFrom="M 327.35205078125 246.348L 327.35205078125 246.348L 338.44873046875 246.348L 338.44873046875 246.348L 338.44873046875 246.348L 338.44873046875 246.348L 338.44873046875 246.348L 327.35205078125 246.348" cy="187.22448" cx="371.73876953125" j="7" val="24" barHeight="59.123520000000006" barWidth="11.0966796875"></path><path id="SvgjsPath1693" d="M 371.73876953125 246.348L 371.73876953125 177.37056Q 371.73876953125 177.37056 371.73876953125 177.37056L 382.83544921875 177.37056Q 382.83544921875 177.37056 382.83544921875 177.37056L 382.83544921875 177.37056L 382.83544921875 246.348L 382.83544921875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 371.73876953125 246.348L 371.73876953125 177.37056Q 371.73876953125 177.37056 371.73876953125 177.37056L 382.83544921875 177.37056Q 382.83544921875 177.37056 382.83544921875 177.37056L 382.83544921875 177.37056L 382.83544921875 246.348L 382.83544921875 246.348z" pathFrom="M 371.73876953125 246.348L 371.73876953125 246.348L 382.83544921875 246.348L 382.83544921875 246.348L 382.83544921875 246.348L 382.83544921875 246.348L 382.83544921875 246.348L 371.73876953125 246.348" cy="177.37056" cx="416.12548828125" j="8" val="28" barHeight="68.97744" barWidth="11.0966796875"></path><path id="SvgjsPath1694" d="M 416.12548828125 246.348L 416.12548828125 172.4436Q 416.12548828125 172.4436 416.12548828125 172.4436L 427.22216796875 172.4436Q 427.22216796875 172.4436 427.22216796875 172.4436L 427.22216796875 172.4436L 427.22216796875 246.348L 427.22216796875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 416.12548828125 246.348L 416.12548828125 172.4436Q 416.12548828125 172.4436 416.12548828125 172.4436L 427.22216796875 172.4436Q 427.22216796875 172.4436 427.22216796875 172.4436L 427.22216796875 172.4436L 427.22216796875 246.348L 427.22216796875 246.348z" pathFrom="M 416.12548828125 246.348L 416.12548828125 246.348L 427.22216796875 246.348L 427.22216796875 246.348L 427.22216796875 246.348L 427.22216796875 246.348L 427.22216796875 246.348L 416.12548828125 246.348" cy="172.4436" cx="460.51220703125" j="9" val="30" barHeight="73.90440000000001" barWidth="11.0966796875"></path><path id="SvgjsPath1695" d="M 460.51220703125 246.348L 460.51220703125 202.00536Q 460.51220703125 202.00536 460.51220703125 202.00536L 471.60888671875 202.00536Q 471.60888671875 202.00536 471.60888671875 202.00536L 471.60888671875 202.00536L 471.60888671875 246.348L 471.60888671875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 460.51220703125 246.348L 460.51220703125 202.00536Q 460.51220703125 202.00536 460.51220703125 202.00536L 471.60888671875 202.00536Q 471.60888671875 202.00536 471.60888671875 202.00536L 471.60888671875 202.00536L 471.60888671875 246.348L 471.60888671875 246.348z" pathFrom="M 460.51220703125 246.348L 460.51220703125 246.348L 471.60888671875 246.348L 471.60888671875 246.348L 471.60888671875 246.348L 471.60888671875 246.348L 471.60888671875 246.348L 460.51220703125 246.348" cy="202.00536" cx="504.89892578125" j="10" val="18" barHeight="44.34264" barWidth="11.0966796875"></path><path id="SvgjsPath1696" d="M 504.89892578125 246.348L 504.89892578125 216.78624000000002Q 504.89892578125 216.78624000000002 504.89892578125 216.78624000000002L 515.99560546875 216.78624000000002Q 515.99560546875 216.78624000000002 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002L 515.99560546875 246.348L 515.99560546875 246.348z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 504.89892578125 246.348L 504.89892578125 216.78624000000002Q 504.89892578125 216.78624000000002 504.89892578125 216.78624000000002L 515.99560546875 216.78624000000002Q 515.99560546875 216.78624000000002 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002L 515.99560546875 246.348L 515.99560546875 246.348z" pathFrom="M 504.89892578125 246.348L 504.89892578125 246.348L 515.99560546875 246.348L 515.99560546875 246.348L 515.99560546875 246.348L 515.99560546875 246.348L 515.99560546875 246.348L 504.89892578125 246.348" cy="216.78624000000002" cx="549.28564453125" j="11" val="12" barHeight="29.561760000000003" barWidth="11.0966796875"></path></g><g id="SvgjsG1697" class="apexcharts-series" seriesName="InxProgress" rel="2" data:realIndex="1"><path id="SvgjsPath1699" d="M 16.64501953125 216.78624000000002L 16.64501953125 179.83404000000002Q 16.64501953125 179.83404000000002 16.64501953125 179.83404000000002L 27.74169921875 179.83404000000002Q 27.74169921875 179.83404000000002 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002L 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 16.64501953125 216.78624000000002L 16.64501953125 179.83404000000002Q 16.64501953125 179.83404000000002 16.64501953125 179.83404000000002L 27.74169921875 179.83404000000002Q 27.74169921875 179.83404000000002 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002L 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002z" pathFrom="M 16.64501953125 216.78624000000002L 16.64501953125 216.78624000000002L 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002L 27.74169921875 216.78624000000002L 16.64501953125 216.78624000000002" cy="179.83404000000002" cx="61.03173828125" j="0" val="15" barHeight="36.952200000000005" barWidth="11.0966796875"></path><path id="SvgjsPath1700" d="M 61.03173828125 209.3958L 61.03173828125 147.80880000000002Q 61.03173828125 147.80880000000002 61.03173828125 147.80880000000002L 72.12841796875 147.80880000000002Q 72.12841796875 147.80880000000002 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002L 72.12841796875 209.3958L 72.12841796875 209.3958z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 61.03173828125 209.3958L 61.03173828125 147.80880000000002Q 61.03173828125 147.80880000000002 61.03173828125 147.80880000000002L 72.12841796875 147.80880000000002Q 72.12841796875 147.80880000000002 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002L 72.12841796875 209.3958L 72.12841796875 209.3958z" pathFrom="M 61.03173828125 209.3958L 61.03173828125 209.3958L 72.12841796875 209.3958L 72.12841796875 209.3958L 72.12841796875 209.3958L 72.12841796875 209.3958L 72.12841796875 209.3958L 61.03173828125 209.3958" cy="147.80880000000002" cx="105.41845703125" j="1" val="25" barHeight="61.587" barWidth="11.0966796875"></path><path id="SvgjsPath1701" d="M 105.41845703125 204.46884L 105.41845703125 128.10096Q 105.41845703125 128.10096 105.41845703125 128.10096L 116.51513671875 128.10096Q 116.51513671875 128.10096 116.51513671875 128.10096L 116.51513671875 128.10096L 116.51513671875 204.46884L 116.51513671875 204.46884z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 105.41845703125 204.46884L 105.41845703125 128.10096Q 105.41845703125 128.10096 105.41845703125 128.10096L 116.51513671875 128.10096Q 116.51513671875 128.10096 116.51513671875 128.10096L 116.51513671875 128.10096L 116.51513671875 204.46884L 116.51513671875 204.46884z" pathFrom="M 105.41845703125 204.46884L 105.41845703125 204.46884L 116.51513671875 204.46884L 116.51513671875 204.46884L 116.51513671875 204.46884L 116.51513671875 204.46884L 116.51513671875 204.46884L 105.41845703125 204.46884" cy="128.10096" cx="149.80517578125" j="2" val="31" barHeight="76.36788" barWidth="11.0966796875"></path><path id="SvgjsPath1702" d="M 149.80517578125 221.7132L 149.80517578125 147.8088Q 149.80517578125 147.8088 149.80517578125 147.8088L 160.90185546875 147.8088Q 160.90185546875 147.8088 160.90185546875 147.8088L 160.90185546875 147.8088L 160.90185546875 221.7132L 160.90185546875 221.7132z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 149.80517578125 221.7132L 149.80517578125 147.8088Q 149.80517578125 147.8088 149.80517578125 147.8088L 160.90185546875 147.8088Q 160.90185546875 147.8088 160.90185546875 147.8088L 160.90185546875 147.8088L 160.90185546875 221.7132L 160.90185546875 221.7132z" pathFrom="M 149.80517578125 221.7132L 149.80517578125 221.7132L 160.90185546875 221.7132L 160.90185546875 221.7132L 160.90185546875 221.7132L 160.90185546875 221.7132L 160.90185546875 221.7132L 149.80517578125 221.7132" cy="147.8088" cx="194.19189453125" j="3" val="30" barHeight="73.90440000000001" barWidth="11.0966796875"></path><path id="SvgjsPath1703" d="M 194.19189453125 169.98012L 194.19189453125 105.92963999999999Q 194.19189453125 105.92963999999999 194.19189453125 105.92963999999999L 205.28857421875 105.92963999999999Q 205.28857421875 105.92963999999999 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999L 205.28857421875 169.98012L 205.28857421875 169.98012z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 194.19189453125 169.98012L 194.19189453125 105.92963999999999Q 194.19189453125 105.92963999999999 194.19189453125 105.92963999999999L 205.28857421875 105.92963999999999Q 205.28857421875 105.92963999999999 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999L 205.28857421875 169.98012L 205.28857421875 169.98012z" pathFrom="M 194.19189453125 169.98012L 194.19189453125 169.98012L 205.28857421875 169.98012L 205.28857421875 169.98012L 205.28857421875 169.98012L 205.28857421875 169.98012L 205.28857421875 169.98012L 194.19189453125 169.98012" cy="105.92963999999999" cx="238.57861328125" j="4" val="26" barHeight="64.05048000000001" barWidth="11.0966796875"></path><path id="SvgjsPath1704" d="M 238.57861328125 197.07840000000002L 238.57861328125 147.80880000000002Q 238.57861328125 147.80880000000002 238.57861328125 147.80880000000002L 249.67529296875 147.80880000000002Q 249.67529296875 147.80880000000002 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002L 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 238.57861328125 197.07840000000002L 238.57861328125 147.80880000000002Q 238.57861328125 147.80880000000002 238.57861328125 147.80880000000002L 249.67529296875 147.80880000000002Q 249.67529296875 147.80880000000002 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002L 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002z" pathFrom="M 238.57861328125 197.07840000000002L 238.57861328125 197.07840000000002L 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002L 249.67529296875 197.07840000000002L 238.57861328125 197.07840000000002" cy="147.80880000000002" cx="282.96533203125" j="5" val="20" barHeight="49.269600000000004" barWidth="11.0966796875"></path><path id="SvgjsPath1705" d="M 282.96533203125 209.3958L 282.96533203125 147.80880000000002Q 282.96533203125 147.80880000000002 282.96533203125 147.80880000000002L 294.06201171875 147.80880000000002Q 294.06201171875 147.80880000000002 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002L 294.06201171875 209.3958L 294.06201171875 209.3958z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 282.96533203125 209.3958L 282.96533203125 147.80880000000002Q 282.96533203125 147.80880000000002 282.96533203125 147.80880000000002L 294.06201171875 147.80880000000002Q 294.06201171875 147.80880000000002 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002L 294.06201171875 209.3958L 294.06201171875 209.3958z" pathFrom="M 282.96533203125 209.3958L 282.96533203125 209.3958L 294.06201171875 209.3958L 294.06201171875 209.3958L 294.06201171875 209.3958L 294.06201171875 209.3958L 294.06201171875 209.3958L 282.96533203125 209.3958" cy="147.80880000000002" cx="327.35205078125" j="6" val="25" barHeight="61.587" barWidth="11.0966796875"></path><path id="SvgjsPath1706" d="M 327.35205078125 187.22448L 327.35205078125 137.95488Q 327.35205078125 137.95488 327.35205078125 137.95488L 338.44873046875 137.95488Q 338.44873046875 137.95488 338.44873046875 137.95488L 338.44873046875 137.95488L 338.44873046875 187.22448L 338.44873046875 187.22448z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 327.35205078125 187.22448L 327.35205078125 137.95488Q 327.35205078125 137.95488 327.35205078125 137.95488L 338.44873046875 137.95488Q 338.44873046875 137.95488 338.44873046875 137.95488L 338.44873046875 137.95488L 338.44873046875 187.22448L 338.44873046875 187.22448z" pathFrom="M 327.35205078125 187.22448L 327.35205078125 187.22448L 338.44873046875 187.22448L 338.44873046875 187.22448L 338.44873046875 187.22448L 338.44873046875 187.22448L 338.44873046875 187.22448L 327.35205078125 187.22448" cy="137.95488" cx="371.73876953125" j="7" val="20" barHeight="49.269600000000004" barWidth="11.0966796875"></path><path id="SvgjsPath1707" d="M 371.73876953125 177.37056L 371.73876953125 133.02792Q 371.73876953125 133.02792 371.73876953125 133.02792L 382.83544921875 133.02792Q 382.83544921875 133.02792 382.83544921875 133.02792L 382.83544921875 133.02792L 382.83544921875 177.37056L 382.83544921875 177.37056z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 371.73876953125 177.37056L 371.73876953125 133.02792Q 371.73876953125 133.02792 371.73876953125 133.02792L 382.83544921875 133.02792Q 382.83544921875 133.02792 382.83544921875 133.02792L 382.83544921875 133.02792L 382.83544921875 177.37056L 382.83544921875 177.37056z" pathFrom="M 371.73876953125 177.37056L 371.73876953125 177.37056L 382.83544921875 177.37056L 382.83544921875 177.37056L 382.83544921875 177.37056L 382.83544921875 177.37056L 382.83544921875 177.37056L 371.73876953125 177.37056" cy="133.02792" cx="416.12548828125" j="8" val="18" barHeight="44.34264" barWidth="11.0966796875"></path><path id="SvgjsPath1708" d="M 416.12548828125 172.4436L 416.12548828125 108.39312Q 416.12548828125 108.39312 416.12548828125 108.39312L 427.22216796875 108.39312Q 427.22216796875 108.39312 427.22216796875 108.39312L 427.22216796875 108.39312L 427.22216796875 172.4436L 427.22216796875 172.4436z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 416.12548828125 172.4436L 416.12548828125 108.39312Q 416.12548828125 108.39312 416.12548828125 108.39312L 427.22216796875 108.39312Q 427.22216796875 108.39312 427.22216796875 108.39312L 427.22216796875 108.39312L 427.22216796875 172.4436L 427.22216796875 172.4436z" pathFrom="M 416.12548828125 172.4436L 416.12548828125 172.4436L 427.22216796875 172.4436L 427.22216796875 172.4436L 427.22216796875 172.4436L 427.22216796875 172.4436L 427.22216796875 172.4436L 416.12548828125 172.4436" cy="108.39312" cx="460.51220703125" j="9" val="26" barHeight="64.05048000000001" barWidth="11.0966796875"></path><path id="SvgjsPath1709" d="M 460.51220703125 202.00536L 460.51220703125 142.88183999999998Q 460.51220703125 142.88183999999998 460.51220703125 142.88183999999998L 471.60888671875 142.88183999999998Q 471.60888671875 142.88183999999998 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998L 471.60888671875 202.00536L 471.60888671875 202.00536z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 460.51220703125 202.00536L 460.51220703125 142.88183999999998Q 460.51220703125 142.88183999999998 460.51220703125 142.88183999999998L 471.60888671875 142.88183999999998Q 471.60888671875 142.88183999999998 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998L 471.60888671875 202.00536L 471.60888671875 202.00536z" pathFrom="M 460.51220703125 202.00536L 460.51220703125 202.00536L 471.60888671875 202.00536L 471.60888671875 202.00536L 471.60888671875 202.00536L 471.60888671875 202.00536L 471.60888671875 202.00536L 460.51220703125 202.00536" cy="142.88183999999998" cx="504.89892578125" j="10" val="24" barHeight="59.123520000000006" barWidth="11.0966796875"></path><path id="SvgjsPath1710" d="M 504.89892578125 216.78624000000002L 504.89892578125 150.27228000000002Q 504.89892578125 150.27228000000002 504.89892578125 150.27228000000002L 515.99560546875 150.27228000000002Q 515.99560546875 150.27228000000002 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002L 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 504.89892578125 216.78624000000002L 504.89892578125 150.27228000000002Q 504.89892578125 150.27228000000002 504.89892578125 150.27228000000002L 515.99560546875 150.27228000000002Q 515.99560546875 150.27228000000002 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002L 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002z" pathFrom="M 504.89892578125 216.78624000000002L 504.89892578125 216.78624000000002L 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002L 515.99560546875 216.78624000000002L 504.89892578125 216.78624000000002" cy="150.27228000000002" cx="549.28564453125" j="11" val="27" barHeight="66.51396" barWidth="11.0966796875"></path></g><g id="SvgjsG1711" class="apexcharts-series" seriesName="Complate" rel="3" data:realIndex="2"><path id="SvgjsPath1713" d="M 16.64501953125 179.83404000000002L 16.64501953125 147.80880000000002Q 16.64501953125 147.80880000000002 16.64501953125 147.80880000000002L 27.74169921875 147.80880000000002Q 27.74169921875 147.80880000000002 27.74169921875 147.80880000000002L 27.74169921875 147.80880000000002L 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 16.64501953125 179.83404000000002L 16.64501953125 147.80880000000002Q 16.64501953125 147.80880000000002 16.64501953125 147.80880000000002L 27.74169921875 147.80880000000002Q 27.74169921875 147.80880000000002 27.74169921875 147.80880000000002L 27.74169921875 147.80880000000002L 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002z" pathFrom="M 16.64501953125 179.83404000000002L 16.64501953125 179.83404000000002L 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002L 27.74169921875 179.83404000000002L 16.64501953125 179.83404000000002" cy="147.80880000000002" cx="61.03173828125" j="0" val="13" barHeight="32.025240000000004" barWidth="11.0966796875"></path><path id="SvgjsPath1714" d="M 61.03173828125 147.80880000000002L 61.03173828125 135.49140000000003Q 61.03173828125 135.49140000000003 61.03173828125 135.49140000000003L 72.12841796875 135.49140000000003Q 72.12841796875 135.49140000000003 72.12841796875 135.49140000000003L 72.12841796875 135.49140000000003L 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 61.03173828125 147.80880000000002L 61.03173828125 135.49140000000003Q 61.03173828125 135.49140000000003 61.03173828125 135.49140000000003L 72.12841796875 135.49140000000003Q 72.12841796875 135.49140000000003 72.12841796875 135.49140000000003L 72.12841796875 135.49140000000003L 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002z" pathFrom="M 61.03173828125 147.80880000000002L 61.03173828125 147.80880000000002L 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002L 72.12841796875 147.80880000000002L 61.03173828125 147.80880000000002" cy="135.49140000000003" cx="105.41845703125" j="1" val="5" barHeight="12.317400000000001" barWidth="11.0966796875"></path><path id="SvgjsPath1715" d="M 105.41845703125 128.10096L 105.41845703125 108.39311999999998Q 105.41845703125 108.39311999999998 105.41845703125 108.39311999999998L 116.51513671875 108.39311999999998Q 116.51513671875 108.39311999999998 116.51513671875 108.39311999999998L 116.51513671875 108.39311999999998L 116.51513671875 128.10096L 116.51513671875 128.10096z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 105.41845703125 128.10096L 105.41845703125 108.39311999999998Q 105.41845703125 108.39311999999998 105.41845703125 108.39311999999998L 116.51513671875 108.39311999999998Q 116.51513671875 108.39311999999998 116.51513671875 108.39311999999998L 116.51513671875 108.39311999999998L 116.51513671875 128.10096L 116.51513671875 128.10096z" pathFrom="M 105.41845703125 128.10096L 105.41845703125 128.10096L 116.51513671875 128.10096L 116.51513671875 128.10096L 116.51513671875 128.10096L 116.51513671875 128.10096L 116.51513671875 128.10096L 105.41845703125 128.10096" cy="108.39311999999998" cx="149.80517578125" j="2" val="8" barHeight="19.70784" barWidth="11.0966796875"></path><path id="SvgjsPath1716" d="M 149.80517578125 147.8088L 149.80517578125 103.46615999999999Q 149.80517578125 103.46615999999999 149.80517578125 103.46615999999999L 160.90185546875 103.46615999999999Q 160.90185546875 103.46615999999999 160.90185546875 103.46615999999999L 160.90185546875 103.46615999999999L 160.90185546875 147.8088L 160.90185546875 147.8088z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 149.80517578125 147.8088L 149.80517578125 103.46615999999999Q 149.80517578125 103.46615999999999 149.80517578125 103.46615999999999L 160.90185546875 103.46615999999999Q 160.90185546875 103.46615999999999 160.90185546875 103.46615999999999L 160.90185546875 103.46615999999999L 160.90185546875 147.8088L 160.90185546875 147.8088z" pathFrom="M 149.80517578125 147.8088L 149.80517578125 147.8088L 160.90185546875 147.8088L 160.90185546875 147.8088L 160.90185546875 147.8088L 160.90185546875 147.8088L 160.90185546875 147.8088L 149.80517578125 147.8088" cy="103.46615999999999" cx="194.19189453125" j="3" val="18" barHeight="44.34264" barWidth="11.0966796875"></path><path id="SvgjsPath1717" d="M 194.19189453125 105.92963999999999L 194.19189453125 86.22179999999999Q 194.19189453125 86.22179999999999 194.19189453125 86.22179999999999L 205.28857421875 86.22179999999999Q 205.28857421875 86.22179999999999 205.28857421875 86.22179999999999L 205.28857421875 86.22179999999999L 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 194.19189453125 105.92963999999999L 194.19189453125 86.22179999999999Q 194.19189453125 86.22179999999999 194.19189453125 86.22179999999999L 205.28857421875 86.22179999999999Q 205.28857421875 86.22179999999999 205.28857421875 86.22179999999999L 205.28857421875 86.22179999999999L 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999z" pathFrom="M 194.19189453125 105.92963999999999L 194.19189453125 105.92963999999999L 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999L 205.28857421875 105.92963999999999L 194.19189453125 105.92963999999999" cy="86.22179999999999" cx="238.57861328125" j="4" val="8" barHeight="19.70784" barWidth="11.0966796875"></path><path id="SvgjsPath1718" d="M 238.57861328125 147.80880000000002L 238.57861328125 103.46616000000002Q 238.57861328125 103.46616000000002 238.57861328125 103.46616000000002L 249.67529296875 103.46616000000002Q 249.67529296875 103.46616000000002 249.67529296875 103.46616000000002L 249.67529296875 103.46616000000002L 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 238.57861328125 147.80880000000002L 238.57861328125 103.46616000000002Q 238.57861328125 103.46616000000002 238.57861328125 103.46616000000002L 249.67529296875 103.46616000000002Q 249.67529296875 103.46616000000002 249.67529296875 103.46616000000002L 249.67529296875 103.46616000000002L 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002z" pathFrom="M 238.57861328125 147.80880000000002L 238.57861328125 147.80880000000002L 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002L 249.67529296875 147.80880000000002L 238.57861328125 147.80880000000002" cy="103.46616000000002" cx="282.96533203125" j="5" val="18" barHeight="44.34264" barWidth="11.0966796875"></path><path id="SvgjsPath1719" d="M 282.96533203125 147.80880000000002L 282.96533203125 66.51396000000001Q 282.96533203125 66.51396000000001 282.96533203125 66.51396000000001L 294.06201171875 66.51396000000001Q 294.06201171875 66.51396000000001 294.06201171875 66.51396000000001L 294.06201171875 66.51396000000001L 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 282.96533203125 147.80880000000002L 282.96533203125 66.51396000000001Q 282.96533203125 66.51396000000001 282.96533203125 66.51396000000001L 294.06201171875 66.51396000000001Q 294.06201171875 66.51396000000001 294.06201171875 66.51396000000001L 294.06201171875 66.51396000000001L 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002z" pathFrom="M 282.96533203125 147.80880000000002L 282.96533203125 147.80880000000002L 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002L 294.06201171875 147.80880000000002L 282.96533203125 147.80880000000002" cy="66.51396000000001" cx="327.35205078125" j="6" val="33" barHeight="81.29484000000001" barWidth="11.0966796875"></path><path id="SvgjsPath1720" d="M 327.35205078125 137.95488L 327.35205078125 59.12352Q 327.35205078125 59.12352 327.35205078125 59.12352L 338.44873046875 59.12352Q 338.44873046875 59.12352 338.44873046875 59.12352L 338.44873046875 59.12352L 338.44873046875 137.95488L 338.44873046875 137.95488z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 327.35205078125 137.95488L 327.35205078125 59.12352Q 327.35205078125 59.12352 327.35205078125 59.12352L 338.44873046875 59.12352Q 338.44873046875 59.12352 338.44873046875 59.12352L 338.44873046875 59.12352L 338.44873046875 137.95488L 338.44873046875 137.95488z" pathFrom="M 327.35205078125 137.95488L 327.35205078125 137.95488L 338.44873046875 137.95488L 338.44873046875 137.95488L 338.44873046875 137.95488L 338.44873046875 137.95488L 338.44873046875 137.95488L 327.35205078125 137.95488" cy="59.12352" cx="371.73876953125" j="7" val="32" barHeight="78.83136" barWidth="11.0966796875"></path><path id="SvgjsPath1721" d="M 371.73876953125 133.02792L 371.73876953125 49.2696Q 371.73876953125 49.2696 371.73876953125 49.2696L 382.83544921875 49.2696Q 382.83544921875 49.2696 382.83544921875 49.2696L 382.83544921875 49.2696L 382.83544921875 133.02792L 382.83544921875 133.02792z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 371.73876953125 133.02792L 371.73876953125 49.2696Q 371.73876953125 49.2696 371.73876953125 49.2696L 382.83544921875 49.2696Q 382.83544921875 49.2696 382.83544921875 49.2696L 382.83544921875 49.2696L 382.83544921875 133.02792L 382.83544921875 133.02792z" pathFrom="M 371.73876953125 133.02792L 371.73876953125 133.02792L 382.83544921875 133.02792L 382.83544921875 133.02792L 382.83544921875 133.02792L 382.83544921875 133.02792L 382.83544921875 133.02792L 371.73876953125 133.02792" cy="49.2696" cx="416.12548828125" j="8" val="34" barHeight="83.75832" barWidth="11.0966796875"></path><path id="SvgjsPath1722" d="M 416.12548828125 108.39312L 416.12548828125 36.95219999999999Q 416.12548828125 36.95219999999999 416.12548828125 36.95219999999999L 427.22216796875 36.95219999999999Q 427.22216796875 36.95219999999999 427.22216796875 36.95219999999999L 427.22216796875 36.95219999999999L 427.22216796875 108.39312L 427.22216796875 108.39312z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 416.12548828125 108.39312L 416.12548828125 36.95219999999999Q 416.12548828125 36.95219999999999 416.12548828125 36.95219999999999L 427.22216796875 36.95219999999999Q 427.22216796875 36.95219999999999 427.22216796875 36.95219999999999L 427.22216796875 36.95219999999999L 427.22216796875 108.39312L 427.22216796875 108.39312z" pathFrom="M 416.12548828125 108.39312L 416.12548828125 108.39312L 427.22216796875 108.39312L 427.22216796875 108.39312L 427.22216796875 108.39312L 427.22216796875 108.39312L 427.22216796875 108.39312L 416.12548828125 108.39312" cy="36.95219999999999" cx="460.51220703125" j="9" val="29" barHeight="71.44092" barWidth="11.0966796875"></path><path id="SvgjsPath1723" d="M 460.51220703125 142.88183999999998L 460.51220703125 24.63479999999997Q 460.51220703125 24.63479999999997 460.51220703125 24.63479999999997L 471.60888671875 24.63479999999997Q 471.60888671875 24.63479999999997 471.60888671875 24.63479999999997L 471.60888671875 24.63479999999997L 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 460.51220703125 142.88183999999998L 460.51220703125 24.63479999999997Q 460.51220703125 24.63479999999997 460.51220703125 24.63479999999997L 471.60888671875 24.63479999999997Q 471.60888671875 24.63479999999997 471.60888671875 24.63479999999997L 471.60888671875 24.63479999999997L 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998z" pathFrom="M 460.51220703125 142.88183999999998L 460.51220703125 142.88183999999998L 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998L 471.60888671875 142.88183999999998L 460.51220703125 142.88183999999998" cy="24.63479999999997" cx="504.89892578125" j="10" val="48" barHeight="118.24704000000001" barWidth="11.0966796875"></path><path id="SvgjsPath1724" d="M 504.89892578125 150.27228000000002L 504.89892578125 12.31740000000002Q 504.89892578125 12.31740000000002 504.89892578125 12.31740000000002L 515.99560546875 12.31740000000002Q 515.99560546875 12.31740000000002 515.99560546875 12.31740000000002L 515.99560546875 12.31740000000002L 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002z" fill="rgba(182,182,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasksag0hd6m)" pathTo="M 504.89892578125 150.27228000000002L 504.89892578125 12.31740000000002Q 504.89892578125 12.31740000000002 504.89892578125 12.31740000000002L 515.99560546875 12.31740000000002Q 515.99560546875 12.31740000000002 515.99560546875 12.31740000000002L 515.99560546875 12.31740000000002L 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002z" pathFrom="M 504.89892578125 150.27228000000002L 504.89892578125 150.27228000000002L 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002L 515.99560546875 150.27228000000002L 504.89892578125 150.27228000000002" cy="12.31740000000002" cx="549.28564453125" j="11" val="56" barHeight="137.95488" barWidth="11.0966796875"></path></g><g id="SvgjsG1684" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1698" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1712" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1802" x1="0" y1="0" x2="532.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1803" x1="0" y1="0" x2="532.640625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1804" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1805" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1806" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1764" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG1765" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1766" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1767">100</tspan><title>100</title></text><text id="SvgjsText1768" font-family="Helvetica, Arial, sans-serif" x="20" y="80.7696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1769">80</tspan><title>80</title></text><text id="SvgjsText1770" font-family="Helvetica, Arial, sans-serif" x="20" y="130.0392" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1771">60</tspan><title>60</title></text><text id="SvgjsText1772" font-family="Helvetica, Arial, sans-serif" x="20" y="179.3088" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1773">40</tspan><title>40</title></text><text id="SvgjsText1774" font-family="Helvetica, Arial, sans-serif" x="20" y="228.5784" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1775">20</tspan><title>20</title></text><text id="SvgjsText1776" font-family="Helvetica, Arial, sans-serif" x="20" y="277.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1777">0</tspan><title>0</title></text></g></g><g id="SvgjsG1672" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 157px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(77, 124, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 206, 138);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(182, 182, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 589px; height: 382px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="box-footer no-border">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="b-1 rounded text-center pb-10 mb-10 w-p100 text-overflow"><span class="badge badge-xl badge-dot badge-primary"></span> Upcoming</div>
                                            <div class="b-1 rounded text-center pb-10 mb-10 w-p100 text-overflow"><span class="badge badge-xl badge-dot badge-success"></span> In Progress</div>
                                            <div class="b-1 rounded text-center pb-10 mb-10 w-p100 text-overflow"><span class="badge badge-xl badge-dot badge-light"></span> Complate</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="box" style="height: 10rem;">
                                    <div class="box-bod py-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div style="margin-right: 18px; ">
                                                <h5 class="text-fade">Applications</h5>
                                                <h2 class="fw-500 mb-0">132.0K</h2>
                                            </div>
                                            <div class="box-1" style="margin-left: -18px; position: relative;">
                                                <div id="revenue1" style="padding-top: 3px; min-height: 128.7px;"><div id="apexcharts0dcqev04" class="apexcharts-canvas apexcharts0dcqev04 apexcharts-theme-light" style="width: 150px; height: 128.7px;"><svg id="SvgjsSvg1807" width="150" height="128.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1809" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs1808"><clipPath id="gridRectMask0dcqev04"><rect id="SvgjsRect1811" width="132" height="150" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0dcqev04"></clipPath><clipPath id="nonForecastMask0dcqev04"></clipPath><clipPath id="gridRectMarkerMask0dcqev04"><rect id="SvgjsRect1812" width="130" height="152" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1813" class="apexcharts-radialbar"><g id="SvgjsG1814"><g id="SvgjsG1815" class="apexcharts-tracks"><g id="SvgjsG1816" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 62.992787533325256 21.675610385504008" fill="none" fill-opacity="1" stroke="rgba(230,240,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="5.909902439024393" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 62.992787533325256 21.675610385504008"></path></g></g><g id="SvgjsG1818"><g id="SvgjsG1822" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1823" d="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 38.71013285465519 96.43213398949936" fill="none" fill-opacity="0.85" stroke="rgba(77,124,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="6.092682926829271" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="216" data:value="60" index="0" j="0" data:pathOrig="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 38.71013285465519 96.43213398949936"></path></g><circle id="SvgjsCircle1819" r="38.369439024390246" cx="63" cy="63" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1820" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1821" font-family="Helvetica, Arial, sans-serif" x="63" y="63" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#111111" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">60%</text></g></g></g></g><line id="SvgjsLine1824" x1="0" y1="0" x2="126" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1825" x1="0" y1="0" x2="126" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1810" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 141px; height: 133px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box" style="height: 10rem;">
                                    <div class="box-body py-0 box-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="text-fade">Shortlisted</h5>
                                                <h2 class="fw-500 mb-0">10.9k</h2>
                                            </div>
                                            <div style="position: relative;">
                                                <div id="revenue2" style="padding-top: 3px; min-height: 128.7px;"><div id="apexchartskuyip633f" class="apexcharts-canvas apexchartskuyip633f apexcharts-theme-light" style="width: 150px; height: 128.7px;"><svg id="SvgjsSvg1826" width="150" height="128.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1828" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs1827"><clipPath id="gridRectMaskkuyip633f"><rect id="SvgjsRect1830" width="132" height="150" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkuyip633f"></clipPath><clipPath id="nonForecastMaskkuyip633f"></clipPath><clipPath id="gridRectMarkerMaskkuyip633f"><rect id="SvgjsRect1831" width="130" height="152" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1832" class="apexcharts-radialbar"><g id="SvgjsG1833"><g id="SvgjsG1834" class="apexcharts-tracks"><g id="SvgjsG1835" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 62.992787533325256 21.675610385504008" fill="none" fill-opacity="1" stroke="rgba(222,253,237,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="5.909902439024393" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 62.992787533325256 21.675610385504008"></path></g></g><g id="SvgjsG1837"><g id="SvgjsG1841" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1842" d="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 0 1 63 104.32439024390244" fill="none" fill-opacity="0.85" stroke="rgba(81,206,138,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="6.092682926829271" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="180" data:value="50" index="0" j="0" data:pathOrig="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 0 1 63 104.32439024390244"></path></g><circle id="SvgjsCircle1838" r="38.369439024390246" cx="63" cy="63" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1839" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1840" font-family="Helvetica, Arial, sans-serif" x="63" y="63" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#111111" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">50%</text></g></g></g></g><line id="SvgjsLine1843" x1="0" y1="0" x2="126" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1844" x1="0" y1="0" x2="126" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1829" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 121px; height: 133px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box" style="height: 10rem;">
                                    <div class="box-body py-0 box-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="text-fade">On Hold</h5>
                                                <h2 class="fw-500 mb-0">03.1k</h2>
                                            </div>
                                            <div style="margin-left: 26px; position: relative;">
                                                <div id="revenue3" style="padding-top: 3px; min-height: 128.7px;"><div id="apexchartskiy2pge2" class="apexcharts-canvas apexchartskiy2pge2 apexcharts-theme-light" style="width: 150px; height: 128.7px;"><svg id="SvgjsSvg1845" width="150" height="128.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1847" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs1846"><clipPath id="gridRectMaskkiy2pge2"><rect id="SvgjsRect1849" width="132" height="150" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkiy2pge2"></clipPath><clipPath id="nonForecastMaskkiy2pge2"></clipPath><clipPath id="gridRectMarkerMaskkiy2pge2"><rect id="SvgjsRect1850" width="130" height="152" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1851" class="apexcharts-radialbar"><g id="SvgjsG1852"><g id="SvgjsG1853" class="apexcharts-tracks"><g id="SvgjsG1854" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 62.992787533325256 21.675610385504008" fill="none" fill-opacity="1" stroke="rgba(244,239,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="5.909902439024393" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 1 1 62.992787533325256 21.675610385504008"></path></g></g><g id="SvgjsG1856"><g id="SvgjsG1860" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1861" d="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 0 1 98.04507047116664 84.89859047293461" fill="none" fill-opacity="0.85" stroke="rgba(115,58,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="6.092682926829271" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="122" data:value="34" index="0" j="0" data:pathOrig="M 63 21.675609756097558 A 41.32439024390244 41.32439024390244 0 0 1 98.04507047116664 84.89859047293461"></path></g><circle id="SvgjsCircle1857" r="38.369439024390246" cx="63" cy="63" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1858" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1859" font-family="Helvetica, Arial, sans-serif" x="63" y="63" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#111111" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">34%</text></g></g></g></g><line id="SvgjsLine1862" x1="0" y1="0" x2="126" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1863" x1="0" y1="0" x2="126" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1848" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 123px; height: 133px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header d-flex justify-content-between">
                                <h4 class="box-title">Top Active Jobs</h4>
                                <h6 class="box-title text-primary">Last month</h6>
                            </div>
                            <div class="box-body ps-0 pb-0" style="position: relative;">
                                <div class="ps-20">
                                    <div class="chart-switch legend d-flex align-items-center justify-content-start">
                                        <div class="d-flex me-15">
                                            <label class="switch switch-border switch-success">
                                                <input type="checkbox" checked="" onclick="toggleSeries(this)" value="Applications">
                                                <span class="switch-indicator"></span>
                                                <span class="switch-description"></span>
                                                <span class="ps-5">Applications</span>
                                            </label>
                                        </div>
                                        <div class="d-flex me-15">
                                            <label class="switch switch-border switch-info">
                                                <input type="checkbox" checked="" onclick="toggleSeries(this)" value="Shortlisted">
                                                <span class="switch-indicator"></span>
                                                <span class="switch-description"></span>
                                                <span class="ps-5">Shortlisted</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div id="active-jobs-chart" class="apex-charts-spark" style="min-height: 350px;"><div id="apexcharts8wxh5zjx" class="apexcharts-canvas apexcharts8wxh5zjx apexcharts-theme-light" style="width: 588px; height: 335px;"><svg id="SvgjsSvg1581" width="588" height="335" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1583" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs1582"><clipPath id="gridRectMask8wxh5zjx"><rect id="SvgjsRect1589" width="540.640625" height="271.348" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8wxh5zjx"></clipPath><clipPath id="nonForecastMask8wxh5zjx"></clipPath><clipPath id="gridRectMarkerMask8wxh5zjx"><rect id="SvgjsRect1590" width="536.640625" height="271.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1595" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1596" stop-opacity="0.65" stop-color="rgba(81,206,138,0.65)" offset="0"></stop><stop id="SvgjsStop1597" stop-opacity="0.5" stop-color="rgba(168,231,197,0.5)" offset="1"></stop><stop id="SvgjsStop1598" stop-opacity="0.5" stop-color="rgba(168,231,197,0.5)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1604" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1605" stop-opacity="0.65" stop-color="rgba(115,58,235,0.65)" offset="0"></stop><stop id="SvgjsStop1606" stop-opacity="0.5" stop-color="rgba(185,157,245,0.5)" offset="1"></stop><stop id="SvgjsStop1607" stop-opacity="0.5" stop-color="rgba(185,157,245,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1588" x1="0" y1="0" x2="0" y2="267.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="267.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1610" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1611" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1613" font-family="Helvetica, Arial, sans-serif" x="0" y="296.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1614">Jan</tspan><title>Jan</title></text><text id="SvgjsText1616" font-family="Helvetica, Arial, sans-serif" x="106.52812500000002" y="296.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1617">Feb</tspan><title>Feb</title></text><text id="SvgjsText1619" font-family="Helvetica, Arial, sans-serif" x="213.05625" y="296.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1620">Mar</tspan><title>Mar</title></text><text id="SvgjsText1622" font-family="Helvetica, Arial, sans-serif" x="319.58437499999997" y="296.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1623">Apr</tspan><title>Apr</title></text><text id="SvgjsText1625" font-family="Helvetica, Arial, sans-serif" x="426.11249999999995" y="296.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1626">May</tspan><title>May</title></text><text id="SvgjsText1628" font-family="Helvetica, Arial, sans-serif" x="532.640625" y="296.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1629">Jun</tspan><title>Jun</title></text></g><line id="SvgjsLine1630" x1="0" y1="268.348" x2="532.640625" y2="268.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1645" class="apexcharts-grid"><g id="SvgjsG1646" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1654" x1="0" y1="0" x2="532.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1655" x1="0" y1="53.4696" x2="532.640625" y2="53.4696" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1656" x1="0" y1="106.9392" x2="532.640625" y2="106.9392" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1657" x1="0" y1="160.40879999999999" x2="532.640625" y2="160.40879999999999" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1658" x1="0" y1="213.8784" x2="532.640625" y2="213.8784" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1659" x1="0" y1="267.348" x2="532.640625" y2="267.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1647" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1648" x1="0" y1="268.348" x2="0" y2="274.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1649" x1="106.528125" y1="268.348" x2="106.528125" y2="274.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1650" x1="213.05625" y1="268.348" x2="213.05625" y2="274.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1651" x1="319.584375" y1="268.348" x2="319.584375" y2="274.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1652" x1="426.1125" y1="268.348" x2="426.1125" y2="274.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1653" x1="532.640625" y1="268.348" x2="532.640625" y2="274.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1661" x1="0" y1="267.348" x2="532.640625" y2="267.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1660" x1="0" y1="1" x2="0" y2="267.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1591" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1592" class="apexcharts-series" seriesName="Applications" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1599" d="M 0 267.348L 0 227.2458C 37.28484375 227.2458 69.24328125 173.77620000000002 106.528125 173.77620000000002C 143.81296875 173.77620000000002 175.77140625 133.674 213.05625 133.674C 250.34109375 133.674 282.29953125000003 205.85796000000002 319.584375 205.85796000000002C 356.86921875 205.85796000000002 388.82765625 187.1436 426.1125 187.1436C 463.39734375 187.1436 495.35578125 26.734800000000007 532.640625 26.734800000000007C 532.640625 26.734800000000007 532.640625 26.734800000000007 532.640625 267.348M 532.640625 26.734800000000007z" fill="url(#SvgjsLinearGradient1595)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8wxh5zjx)" pathTo="M 0 267.348L 0 227.2458C 37.28484375 227.2458 69.24328125 173.77620000000002 106.528125 173.77620000000002C 143.81296875 173.77620000000002 175.77140625 133.674 213.05625 133.674C 250.34109375 133.674 282.29953125000003 205.85796000000002 319.584375 205.85796000000002C 356.86921875 205.85796000000002 388.82765625 187.1436 426.1125 187.1436C 463.39734375 187.1436 495.35578125 26.734800000000007 532.640625 26.734800000000007C 532.640625 26.734800000000007 532.640625 26.734800000000007 532.640625 267.348M 532.640625 26.734800000000007z" pathFrom="M -1 267.348L -1 267.348L 106.528125 267.348L 213.05625 267.348L 319.584375 267.348L 426.1125 267.348L 532.640625 267.348"></path><path id="SvgjsPath1600" d="M 0 227.2458C 37.28484375 227.2458 69.24328125 173.77620000000002 106.528125 173.77620000000002C 143.81296875 173.77620000000002 175.77140625 133.674 213.05625 133.674C 250.34109375 133.674 282.29953125000003 205.85796000000002 319.584375 205.85796000000002C 356.86921875 205.85796000000002 388.82765625 187.1436 426.1125 187.1436C 463.39734375 187.1436 495.35578125 26.734800000000007 532.640625 26.734800000000007" fill="none" fill-opacity="1" stroke="#51ce8a" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8wxh5zjx)" pathTo="M 0 227.2458C 37.28484375 227.2458 69.24328125 173.77620000000002 106.528125 173.77620000000002C 143.81296875 173.77620000000002 175.77140625 133.674 213.05625 133.674C 250.34109375 133.674 282.29953125000003 205.85796000000002 319.584375 205.85796000000002C 356.86921875 205.85796000000002 388.82765625 187.1436 426.1125 187.1436C 463.39734375 187.1436 495.35578125 26.734800000000007 532.640625 26.734800000000007" pathFrom="M -1 267.348L -1 267.348L 106.528125 267.348L 213.05625 267.348L 319.584375 267.348L 426.1125 267.348L 532.640625 267.348"></path><g id="SvgjsG1593" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1667" r="0" cx="0" cy="0" class="apexcharts-marker w302gxp1s no-pointer-events" stroke="#ffffff" fill="#51ce8a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1601" class="apexcharts-series" seriesName="Shortlisted" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1608" d="M 0 267.348L 0 267.348C 37.28484375 267.348 69.24328125 139.02096 106.528125 139.02096C 143.81296875 139.02096 175.77140625 66.83700000000002 213.05625 66.83700000000002C 250.34109375 66.83700000000002 282.29953125000003 173.77620000000002 319.584375 173.77620000000002C 356.86921875 173.77620000000002 388.82765625 171.10272 426.1125 171.10272C 463.39734375 171.10272 495.35578125 80.20440000000002 532.640625 80.20440000000002C 532.640625 80.20440000000002 532.640625 80.20440000000002 532.640625 267.348M 532.640625 80.20440000000002z" fill="url(#SvgjsLinearGradient1604)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask8wxh5zjx)" pathTo="M 0 267.348L 0 267.348C 37.28484375 267.348 69.24328125 139.02096 106.528125 139.02096C 143.81296875 139.02096 175.77140625 66.83700000000002 213.05625 66.83700000000002C 250.34109375 66.83700000000002 282.29953125000003 173.77620000000002 319.584375 173.77620000000002C 356.86921875 173.77620000000002 388.82765625 171.10272 426.1125 171.10272C 463.39734375 171.10272 495.35578125 80.20440000000002 532.640625 80.20440000000002C 532.640625 80.20440000000002 532.640625 80.20440000000002 532.640625 267.348M 532.640625 80.20440000000002z" pathFrom="M -1 267.348L -1 267.348L 106.528125 267.348L 213.05625 267.348L 319.584375 267.348L 426.1125 267.348L 532.640625 267.348"></path><path id="SvgjsPath1609" d="M 0 267.348C 37.28484375 267.348 69.24328125 139.02096 106.528125 139.02096C 143.81296875 139.02096 175.77140625 66.83700000000002 213.05625 66.83700000000002C 250.34109375 66.83700000000002 282.29953125000003 173.77620000000002 319.584375 173.77620000000002C 356.86921875 173.77620000000002 388.82765625 171.10272 426.1125 171.10272C 463.39734375 171.10272 495.35578125 80.20440000000002 532.640625 80.20440000000002" fill="none" fill-opacity="1" stroke="#733aeb" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask8wxh5zjx)" pathTo="M 0 267.348C 37.28484375 267.348 69.24328125 139.02096 106.528125 139.02096C 143.81296875 139.02096 175.77140625 66.83700000000002 213.05625 66.83700000000002C 250.34109375 66.83700000000002 282.29953125000003 173.77620000000002 319.584375 173.77620000000002C 356.86921875 173.77620000000002 388.82765625 171.10272 426.1125 171.10272C 463.39734375 171.10272 495.35578125 80.20440000000002 532.640625 80.20440000000002" pathFrom="M -1 267.348L -1 267.348L 106.528125 267.348L 213.05625 267.348L 319.584375 267.348L 426.1125 267.348L 532.640625 267.348"></path><g id="SvgjsG1602" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1668" r="0" cx="0" cy="0" class="apexcharts-marker w38e1oqcm no-pointer-events" stroke="#ffffff" fill="#733aeb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1594" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1603" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1662" x1="0" y1="0" x2="532.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1663" x1="0" y1="0" x2="532.640625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1664" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1665" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1666" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1587" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1631" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG1632" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1633" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1634">100</tspan><title>100</title></text><text id="SvgjsText1635" font-family="Helvetica, Arial, sans-serif" x="20" y="84.9696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1636">80</tspan><title>80</title></text><text id="SvgjsText1637" font-family="Helvetica, Arial, sans-serif" x="20" y="138.4392" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1638">60</tspan><title>60</title></text><text id="SvgjsText1639" font-family="Helvetica, Arial, sans-serif" x="20" y="191.90879999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1640">40</tspan><title>40</title></text><text id="SvgjsText1641" font-family="Helvetica, Arial, sans-serif" x="20" y="245.3784" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1642">20</tspan><title>20</title></text><text id="SvgjsText1643" font-family="Helvetica, Arial, sans-serif" x="20" y="298.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1644">0</tspan><title>0</title></text></g></g><g id="SvgjsG1584" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 167.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 206, 138);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 58, 235);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 589px; height: 400px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="box-body">
                                <div class="bb-1 d-flex justify-content-between">
                                    <h5>Job title</h5>
                                    <h5>Applications</h5>
                                </div>
                                <div class="d-flex justify-content-between my-15">
                                    <p class="mb-0 text-fade">Project Manager</p>
                                    <p class="mb-0">
                                        <strong>325</strong>
                                        <a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                            <i class="fa fa-line-chart"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between my-15">
                                    <p class="mb-0 text-fade">Sales Manager</p>
                                    <p class="mb-0">
                                        <strong>154</strong>
                                        <a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                            <i class="fa fa-line-chart"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between my-15">
                                    <p class="mb-0 text-fade">Machine Instrument</p>
                                    <p class="mb-0">
                                        <strong>412</strong>
                                        <a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                            <i class="fa fa-line-chart"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between mt-15">
                                    <p class="mb-0 text-fade">Operation Manager</p>
                                    <p class="mb-0">
                                        <strong>412</strong>
                                        <a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                            <i class="fa fa-line-chart"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="row">
                            <div class="col-xl-6 col-12">
                                <div class="box overflow-hidden">
                                    <div class="box-header no-border">
                                        <h4 class="box-title text-overflow">
                                            Total Followers <small class="subtitle">Last  5 days</small>
                                        </h4>
                                    </div>
                                    <div class="box-body p-0" style="position: relative;">
                                        <h1 class="mt-0 ps-20 pt-0 fw-500 text-success">215,5K</h1>
                                        <div id="followers-spark" class="apex-charts-spark" style="min-height: 100px;"><div id="apexchartst2jqcpqa" class="apexcharts-canvas apexchartst2jqcpqa apexcharts-theme-light" style="width: 436px; height: 100px;"><svg id="SvgjsSvg1865" width="436" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1867" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1866"><clipPath id="gridRectMaskt2jqcpqa"><rect id="SvgjsRect1872" width="442" height="102" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskt2jqcpqa"></clipPath><clipPath id="nonForecastMaskt2jqcpqa"></clipPath><clipPath id="gridRectMarkerMaskt2jqcpqa"><rect id="SvgjsRect1873" width="440" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1878" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1879" stop-opacity="0.65" stop-color="rgba(81,206,138,0.65)" offset="0"></stop><stop id="SvgjsStop1880" stop-opacity="0.5" stop-color="rgba(168,231,197,0.5)" offset="1"></stop><stop id="SvgjsStop1881" stop-opacity="0.5" stop-color="rgba(168,231,197,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1871" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1884" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1885" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1911" class="apexcharts-grid"><g id="SvgjsG1912" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1914" x1="0" y1="0" x2="436" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1915" x1="0" y1="10" x2="436" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1916" x1="0" y1="20" x2="436" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1917" x1="0" y1="30" x2="436" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1918" x1="0" y1="40" x2="436" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1919" x1="0" y1="50" x2="436" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1920" x1="0" y1="60" x2="436" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1921" x1="0" y1="70" x2="436" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1922" x1="0" y1="80" x2="436" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1923" x1="0" y1="90" x2="436" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1924" x1="0" y1="100" x2="436" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1913" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1926" x1="0" y1="100" x2="436" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1925" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1874" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1875" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1882" d="M 0 100L 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 41.93548387096773 37.91304347826087 41.93548387096773C 44.54782608695652 41.93548387096773 50.23478260869565 59.13978494623655 56.869565217391305 59.13978494623655C 63.504347826086956 59.13978494623655 69.19130434782609 39.78494623655913 75.82608695652173 39.78494623655913C 82.4608695652174 39.78494623655913 88.14782608695651 74.19354838709677 94.78260869565217 74.19354838709677C 101.41739130434783 74.19354838709677 107.10434782608695 30.107526881720418 113.73913043478261 30.107526881720418C 120.37391304347825 30.107526881720418 126.06086956521739 66.66666666666666 132.69565217391303 66.66666666666666C 139.33043478260868 66.66666666666666 145.01739130434783 60.21505376344085 151.65217391304347 60.21505376344085C 158.2869565217391 60.21505376344085 163.97391304347826 58.06451612903225 170.6086956521739 58.06451612903225C 177.24347826086955 58.06451612903225 182.9304347826087 33.333333333333314 189.56521739130434 33.333333333333314C 196.2 33.333333333333314 201.88695652173914 45.16129032258063 208.52173913043478 45.16129032258063C 215.15652173913043 45.16129032258063 220.84347826086957 62.36559139784946 227.47826086956522 62.36559139784946C 234.11304347826086 62.36559139784946 239.79999999999998 55.91397849462365 246.43478260869563 55.91397849462365C 253.06956521739127 55.91397849462365 258.7565217391304 62.36559139784946 265.39130434782606 62.36559139784946C 272.02608695652174 62.36559139784946 277.71304347826083 70.96774193548387 284.3478260869565 70.96774193548387C 290.9826086956522 70.96774193548387 296.66956521739127 -1.4210854715202004e-14 303.30434782608694 -1.4210854715202004e-14C 309.9391304347826 -1.4210854715202004e-14 315.6260869565217 43.01075268817203 322.2608695652174 43.01075268817203C 328.89565217391305 43.01075268817203 334.58260869565214 34.40860215053762 341.2173913043478 34.40860215053762C 347.8521739130435 34.40860215053762 353.5391304347826 70.96774193548387 360.17391304347825 70.96774193548387C 366.8086956521739 70.96774193548387 372.495652173913 41.93548387096773 379.1304347826087 41.93548387096773C 385.76521739130436 41.93548387096773 391.45217391304345 53.76344086021505 398.0869565217391 53.76344086021505C 404.7217391304348 53.76344086021505 410.4086956521739 79.56989247311827 417.04347826086956 79.56989247311827C 423.67826086956524 79.56989247311827 429.3652173913043 50.537634408602145 436 50.537634408602145C 436 50.537634408602145 436 50.537634408602145 436 100M 436 50.537634408602145z" fill="url(#SvgjsLinearGradient1878)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskt2jqcpqa)" pathTo="M 0 100L 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 41.93548387096773 37.91304347826087 41.93548387096773C 44.54782608695652 41.93548387096773 50.23478260869565 59.13978494623655 56.869565217391305 59.13978494623655C 63.504347826086956 59.13978494623655 69.19130434782609 39.78494623655913 75.82608695652173 39.78494623655913C 82.4608695652174 39.78494623655913 88.14782608695651 74.19354838709677 94.78260869565217 74.19354838709677C 101.41739130434783 74.19354838709677 107.10434782608695 30.107526881720418 113.73913043478261 30.107526881720418C 120.37391304347825 30.107526881720418 126.06086956521739 66.66666666666666 132.69565217391303 66.66666666666666C 139.33043478260868 66.66666666666666 145.01739130434783 60.21505376344085 151.65217391304347 60.21505376344085C 158.2869565217391 60.21505376344085 163.97391304347826 58.06451612903225 170.6086956521739 58.06451612903225C 177.24347826086955 58.06451612903225 182.9304347826087 33.333333333333314 189.56521739130434 33.333333333333314C 196.2 33.333333333333314 201.88695652173914 45.16129032258063 208.52173913043478 45.16129032258063C 215.15652173913043 45.16129032258063 220.84347826086957 62.36559139784946 227.47826086956522 62.36559139784946C 234.11304347826086 62.36559139784946 239.79999999999998 55.91397849462365 246.43478260869563 55.91397849462365C 253.06956521739127 55.91397849462365 258.7565217391304 62.36559139784946 265.39130434782606 62.36559139784946C 272.02608695652174 62.36559139784946 277.71304347826083 70.96774193548387 284.3478260869565 70.96774193548387C 290.9826086956522 70.96774193548387 296.66956521739127 -1.4210854715202004e-14 303.30434782608694 -1.4210854715202004e-14C 309.9391304347826 -1.4210854715202004e-14 315.6260869565217 43.01075268817203 322.2608695652174 43.01075268817203C 328.89565217391305 43.01075268817203 334.58260869565214 34.40860215053762 341.2173913043478 34.40860215053762C 347.8521739130435 34.40860215053762 353.5391304347826 70.96774193548387 360.17391304347825 70.96774193548387C 366.8086956521739 70.96774193548387 372.495652173913 41.93548387096773 379.1304347826087 41.93548387096773C 385.76521739130436 41.93548387096773 391.45217391304345 53.76344086021505 398.0869565217391 53.76344086021505C 404.7217391304348 53.76344086021505 410.4086956521739 79.56989247311827 417.04347826086956 79.56989247311827C 423.67826086956524 79.56989247311827 429.3652173913043 50.537634408602145 436 50.537634408602145C 436 50.537634408602145 436 50.537634408602145 436 100M 436 50.537634408602145z" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><path id="SvgjsPath1883" d="M 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 41.93548387096773 37.91304347826087 41.93548387096773C 44.54782608695652 41.93548387096773 50.23478260869565 59.13978494623655 56.869565217391305 59.13978494623655C 63.504347826086956 59.13978494623655 69.19130434782609 39.78494623655913 75.82608695652173 39.78494623655913C 82.4608695652174 39.78494623655913 88.14782608695651 74.19354838709677 94.78260869565217 74.19354838709677C 101.41739130434783 74.19354838709677 107.10434782608695 30.107526881720418 113.73913043478261 30.107526881720418C 120.37391304347825 30.107526881720418 126.06086956521739 66.66666666666666 132.69565217391303 66.66666666666666C 139.33043478260868 66.66666666666666 145.01739130434783 60.21505376344085 151.65217391304347 60.21505376344085C 158.2869565217391 60.21505376344085 163.97391304347826 58.06451612903225 170.6086956521739 58.06451612903225C 177.24347826086955 58.06451612903225 182.9304347826087 33.333333333333314 189.56521739130434 33.333333333333314C 196.2 33.333333333333314 201.88695652173914 45.16129032258063 208.52173913043478 45.16129032258063C 215.15652173913043 45.16129032258063 220.84347826086957 62.36559139784946 227.47826086956522 62.36559139784946C 234.11304347826086 62.36559139784946 239.79999999999998 55.91397849462365 246.43478260869563 55.91397849462365C 253.06956521739127 55.91397849462365 258.7565217391304 62.36559139784946 265.39130434782606 62.36559139784946C 272.02608695652174 62.36559139784946 277.71304347826083 70.96774193548387 284.3478260869565 70.96774193548387C 290.9826086956522 70.96774193548387 296.66956521739127 -1.4210854715202004e-14 303.30434782608694 -1.4210854715202004e-14C 309.9391304347826 -1.4210854715202004e-14 315.6260869565217 43.01075268817203 322.2608695652174 43.01075268817203C 328.89565217391305 43.01075268817203 334.58260869565214 34.40860215053762 341.2173913043478 34.40860215053762C 347.8521739130435 34.40860215053762 353.5391304347826 70.96774193548387 360.17391304347825 70.96774193548387C 366.8086956521739 70.96774193548387 372.495652173913 41.93548387096773 379.1304347826087 41.93548387096773C 385.76521739130436 41.93548387096773 391.45217391304345 53.76344086021505 398.0869565217391 53.76344086021505C 404.7217391304348 53.76344086021505 410.4086956521739 79.56989247311827 417.04347826086956 79.56989247311827C 423.67826086956524 79.56989247311827 429.3652173913043 50.537634408602145 436 50.537634408602145" fill="none" fill-opacity="1" stroke="#51ce8a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskt2jqcpqa)" pathTo="M 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 41.93548387096773 37.91304347826087 41.93548387096773C 44.54782608695652 41.93548387096773 50.23478260869565 59.13978494623655 56.869565217391305 59.13978494623655C 63.504347826086956 59.13978494623655 69.19130434782609 39.78494623655913 75.82608695652173 39.78494623655913C 82.4608695652174 39.78494623655913 88.14782608695651 74.19354838709677 94.78260869565217 74.19354838709677C 101.41739130434783 74.19354838709677 107.10434782608695 30.107526881720418 113.73913043478261 30.107526881720418C 120.37391304347825 30.107526881720418 126.06086956521739 66.66666666666666 132.69565217391303 66.66666666666666C 139.33043478260868 66.66666666666666 145.01739130434783 60.21505376344085 151.65217391304347 60.21505376344085C 158.2869565217391 60.21505376344085 163.97391304347826 58.06451612903225 170.6086956521739 58.06451612903225C 177.24347826086955 58.06451612903225 182.9304347826087 33.333333333333314 189.56521739130434 33.333333333333314C 196.2 33.333333333333314 201.88695652173914 45.16129032258063 208.52173913043478 45.16129032258063C 215.15652173913043 45.16129032258063 220.84347826086957 62.36559139784946 227.47826086956522 62.36559139784946C 234.11304347826086 62.36559139784946 239.79999999999998 55.91397849462365 246.43478260869563 55.91397849462365C 253.06956521739127 55.91397849462365 258.7565217391304 62.36559139784946 265.39130434782606 62.36559139784946C 272.02608695652174 62.36559139784946 277.71304347826083 70.96774193548387 284.3478260869565 70.96774193548387C 290.9826086956522 70.96774193548387 296.66956521739127 -1.4210854715202004e-14 303.30434782608694 -1.4210854715202004e-14C 309.9391304347826 -1.4210854715202004e-14 315.6260869565217 43.01075268817203 322.2608695652174 43.01075268817203C 328.89565217391305 43.01075268817203 334.58260869565214 34.40860215053762 341.2173913043478 34.40860215053762C 347.8521739130435 34.40860215053762 353.5391304347826 70.96774193548387 360.17391304347825 70.96774193548387C 366.8086956521739 70.96774193548387 372.495652173913 41.93548387096773 379.1304347826087 41.93548387096773C 385.76521739130436 41.93548387096773 391.45217391304345 53.76344086021505 398.0869565217391 53.76344086021505C 404.7217391304348 53.76344086021505 410.4086956521739 79.56989247311827 417.04347826086956 79.56989247311827C 423.67826086956524 79.56989247311827 429.3652173913043 50.537634408602145 436 50.537634408602145" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><g id="SvgjsG1876" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1932" r="0" cx="0" cy="0" class="apexcharts-marker waecik7z0l no-pointer-events" stroke="#ffffff" fill="#51ce8a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1877" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1927" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1928" x1="0" y1="0" x2="436" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1929" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1930" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1931" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1870" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1910" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1868" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 206, 138);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 437px; height: 141px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="box overflow-hidden">
                                    <div class="box-header no-border">
                                        <h4 class="box-title text-overflow">
                                            Growth of total folower <small class="subtitle">Last  5 days</small>
                                        </h4>
                                    </div>
                                    <div class="box-body p-0" style="position: relative;">
                                        <h1 class="mt-0 ps-20 pt-0 fw-500 text-primary">815</h1>
                                        <div id="growth-spark" class="apex-charts-spark" style="min-height: 100px;"><div id="apexcharts29847rjj" class="apexcharts-canvas apexcharts29847rjj apexcharts-theme-light" style="width: 436px; height: 100px;"><svg id="SvgjsSvg1934" width="436" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1936" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1935"><clipPath id="gridRectMask29847rjj"><rect id="SvgjsRect1941" width="442" height="102" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask29847rjj"></clipPath><clipPath id="nonForecastMask29847rjj"></clipPath><clipPath id="gridRectMarkerMask29847rjj"><rect id="SvgjsRect1942" width="440" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1947" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1948" stop-opacity="0.65" stop-color="rgba(77,124,255,0.65)" offset="0"></stop><stop id="SvgjsStop1949" stop-opacity="0.5" stop-color="rgba(166,190,255,0.5)" offset="1"></stop><stop id="SvgjsStop1950" stop-opacity="0.5" stop-color="rgba(166,190,255,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1940" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1953" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1954" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1980" class="apexcharts-grid"><g id="SvgjsG1981" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1983" x1="0" y1="0" x2="436" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1984" x1="0" y1="10" x2="436" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1985" x1="0" y1="20" x2="436" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1986" x1="0" y1="30" x2="436" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1987" x1="0" y1="40" x2="436" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1988" x1="0" y1="50" x2="436" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1989" x1="0" y1="60" x2="436" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1990" x1="0" y1="70" x2="436" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1991" x1="0" y1="80" x2="436" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1992" x1="0" y1="90" x2="436" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1993" x1="0" y1="100" x2="436" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1982" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1995" x1="0" y1="100" x2="436" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1994" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1943" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1944" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1951" d="M 0 100L 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 -1.4210854715202004e-14 94.78260869565217 -1.4210854715202004e-14C 101.41739130434783 -1.4210854715202004e-14 107.10434782608695 43.01075268817203 113.73913043478261 43.01075268817203C 120.37391304347825 43.01075268817203 126.06086956521739 34.40860215053762 132.69565217391303 34.40860215053762C 139.33043478260868 34.40860215053762 145.01739130434783 70.96774193548387 151.65217391304347 70.96774193548387C 158.2869565217391 70.96774193548387 163.97391304347826 41.93548387096773 170.6086956521739 41.93548387096773C 177.24347826086955 41.93548387096773 182.9304347826087 53.76344086021505 189.56521739130434 53.76344086021505C 196.2 53.76344086021505 201.88695652173914 79.56989247311827 208.52173913043478 79.56989247311827C 215.15652173913043 79.56989247311827 220.84347826086957 50.537634408602145 227.47826086956522 50.537634408602145C 234.11304347826086 50.537634408602145 239.79999999999998 49.46236559139784 246.43478260869563 49.46236559139784C 253.06956521739127 49.46236559139784 258.7565217391304 51.61290322580644 265.39130434782606 51.61290322580644C 272.02608695652174 51.61290322580644 277.71304347826083 41.93548387096773 284.3478260869565 41.93548387096773C 290.9826086956522 41.93548387096773 296.66956521739127 59.13978494623655 303.30434782608694 59.13978494623655C 309.9391304347826 59.13978494623655 315.6260869565217 39.78494623655913 322.2608695652174 39.78494623655913C 328.89565217391305 39.78494623655913 334.58260869565214 74.19354838709677 341.2173913043478 74.19354838709677C 347.8521739130435 74.19354838709677 353.5391304347826 30.107526881720418 360.17391304347825 30.107526881720418C 366.8086956521739 30.107526881720418 372.495652173913 66.66666666666666 379.1304347826087 66.66666666666666C 385.76521739130436 66.66666666666666 391.45217391304345 60.21505376344085 398.0869565217391 60.21505376344085C 404.7217391304348 60.21505376344085 410.4086956521739 58.06451612903225 417.04347826086956 58.06451612903225C 423.67826086956524 58.06451612903225 429.3652173913043 33.333333333333314 436 33.333333333333314C 436 33.333333333333314 436 33.333333333333314 436 100M 436 33.333333333333314z" fill="url(#SvgjsLinearGradient1947)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask29847rjj)" pathTo="M 0 100L 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 -1.4210854715202004e-14 94.78260869565217 -1.4210854715202004e-14C 101.41739130434783 -1.4210854715202004e-14 107.10434782608695 43.01075268817203 113.73913043478261 43.01075268817203C 120.37391304347825 43.01075268817203 126.06086956521739 34.40860215053762 132.69565217391303 34.40860215053762C 139.33043478260868 34.40860215053762 145.01739130434783 70.96774193548387 151.65217391304347 70.96774193548387C 158.2869565217391 70.96774193548387 163.97391304347826 41.93548387096773 170.6086956521739 41.93548387096773C 177.24347826086955 41.93548387096773 182.9304347826087 53.76344086021505 189.56521739130434 53.76344086021505C 196.2 53.76344086021505 201.88695652173914 79.56989247311827 208.52173913043478 79.56989247311827C 215.15652173913043 79.56989247311827 220.84347826086957 50.537634408602145 227.47826086956522 50.537634408602145C 234.11304347826086 50.537634408602145 239.79999999999998 49.46236559139784 246.43478260869563 49.46236559139784C 253.06956521739127 49.46236559139784 258.7565217391304 51.61290322580644 265.39130434782606 51.61290322580644C 272.02608695652174 51.61290322580644 277.71304347826083 41.93548387096773 284.3478260869565 41.93548387096773C 290.9826086956522 41.93548387096773 296.66956521739127 59.13978494623655 303.30434782608694 59.13978494623655C 309.9391304347826 59.13978494623655 315.6260869565217 39.78494623655913 322.2608695652174 39.78494623655913C 328.89565217391305 39.78494623655913 334.58260869565214 74.19354838709677 341.2173913043478 74.19354838709677C 347.8521739130435 74.19354838709677 353.5391304347826 30.107526881720418 360.17391304347825 30.107526881720418C 366.8086956521739 30.107526881720418 372.495652173913 66.66666666666666 379.1304347826087 66.66666666666666C 385.76521739130436 66.66666666666666 391.45217391304345 60.21505376344085 398.0869565217391 60.21505376344085C 404.7217391304348 60.21505376344085 410.4086956521739 58.06451612903225 417.04347826086956 58.06451612903225C 423.67826086956524 58.06451612903225 429.3652173913043 33.333333333333314 436 33.333333333333314C 436 33.333333333333314 436 33.333333333333314 436 100M 436 33.333333333333314z" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><path id="SvgjsPath1952" d="M 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 -1.4210854715202004e-14 94.78260869565217 -1.4210854715202004e-14C 101.41739130434783 -1.4210854715202004e-14 107.10434782608695 43.01075268817203 113.73913043478261 43.01075268817203C 120.37391304347825 43.01075268817203 126.06086956521739 34.40860215053762 132.69565217391303 34.40860215053762C 139.33043478260868 34.40860215053762 145.01739130434783 70.96774193548387 151.65217391304347 70.96774193548387C 158.2869565217391 70.96774193548387 163.97391304347826 41.93548387096773 170.6086956521739 41.93548387096773C 177.24347826086955 41.93548387096773 182.9304347826087 53.76344086021505 189.56521739130434 53.76344086021505C 196.2 53.76344086021505 201.88695652173914 79.56989247311827 208.52173913043478 79.56989247311827C 215.15652173913043 79.56989247311827 220.84347826086957 50.537634408602145 227.47826086956522 50.537634408602145C 234.11304347826086 50.537634408602145 239.79999999999998 49.46236559139784 246.43478260869563 49.46236559139784C 253.06956521739127 49.46236559139784 258.7565217391304 51.61290322580644 265.39130434782606 51.61290322580644C 272.02608695652174 51.61290322580644 277.71304347826083 41.93548387096773 284.3478260869565 41.93548387096773C 290.9826086956522 41.93548387096773 296.66956521739127 59.13978494623655 303.30434782608694 59.13978494623655C 309.9391304347826 59.13978494623655 315.6260869565217 39.78494623655913 322.2608695652174 39.78494623655913C 328.89565217391305 39.78494623655913 334.58260869565214 74.19354838709677 341.2173913043478 74.19354838709677C 347.8521739130435 74.19354838709677 353.5391304347826 30.107526881720418 360.17391304347825 30.107526881720418C 366.8086956521739 30.107526881720418 372.495652173913 66.66666666666666 379.1304347826087 66.66666666666666C 385.76521739130436 66.66666666666666 391.45217391304345 60.21505376344085 398.0869565217391 60.21505376344085C 404.7217391304348 60.21505376344085 410.4086956521739 58.06451612903225 417.04347826086956 58.06451612903225C 423.67826086956524 58.06451612903225 429.3652173913043 33.333333333333314 436 33.333333333333314" fill="none" fill-opacity="1" stroke="#4d7cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask29847rjj)" pathTo="M 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 -1.4210854715202004e-14 94.78260869565217 -1.4210854715202004e-14C 101.41739130434783 -1.4210854715202004e-14 107.10434782608695 43.01075268817203 113.73913043478261 43.01075268817203C 120.37391304347825 43.01075268817203 126.06086956521739 34.40860215053762 132.69565217391303 34.40860215053762C 139.33043478260868 34.40860215053762 145.01739130434783 70.96774193548387 151.65217391304347 70.96774193548387C 158.2869565217391 70.96774193548387 163.97391304347826 41.93548387096773 170.6086956521739 41.93548387096773C 177.24347826086955 41.93548387096773 182.9304347826087 53.76344086021505 189.56521739130434 53.76344086021505C 196.2 53.76344086021505 201.88695652173914 79.56989247311827 208.52173913043478 79.56989247311827C 215.15652173913043 79.56989247311827 220.84347826086957 50.537634408602145 227.47826086956522 50.537634408602145C 234.11304347826086 50.537634408602145 239.79999999999998 49.46236559139784 246.43478260869563 49.46236559139784C 253.06956521739127 49.46236559139784 258.7565217391304 51.61290322580644 265.39130434782606 51.61290322580644C 272.02608695652174 51.61290322580644 277.71304347826083 41.93548387096773 284.3478260869565 41.93548387096773C 290.9826086956522 41.93548387096773 296.66956521739127 59.13978494623655 303.30434782608694 59.13978494623655C 309.9391304347826 59.13978494623655 315.6260869565217 39.78494623655913 322.2608695652174 39.78494623655913C 328.89565217391305 39.78494623655913 334.58260869565214 74.19354838709677 341.2173913043478 74.19354838709677C 347.8521739130435 74.19354838709677 353.5391304347826 30.107526881720418 360.17391304347825 30.107526881720418C 366.8086956521739 30.107526881720418 372.495652173913 66.66666666666666 379.1304347826087 66.66666666666666C 385.76521739130436 66.66666666666666 391.45217391304345 60.21505376344085 398.0869565217391 60.21505376344085C 404.7217391304348 60.21505376344085 410.4086956521739 58.06451612903225 417.04347826086956 58.06451612903225C 423.67826086956524 58.06451612903225 429.3652173913043 33.333333333333314 436 33.333333333333314" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><g id="SvgjsG1945" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2001" r="0" cx="0" cy="0" class="apexcharts-marker wnaop8oqz no-pointer-events" stroke="#ffffff" fill="#4d7cff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1946" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1996" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1997" x1="0" y1="0" x2="436" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1998" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1999" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2000" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1939" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1979" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1937" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(77, 124, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 437px; height: 141px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="box overflow-hidden">
                                    <div class="box-header no-border">
                                        <h4 class="box-title text-overflow">
                                            Number of posts <small class="subtitle">Last  5 days</small>
                                        </h4>
                                    </div>
                                    <div class="box-body p-0" style="position: relative;">
                                        <h1 class="mt-0 ps-20 pt-0 fw-500 text-info">153</h1>
                                        <div id="post-spark" class="apex-charts-spark" style="min-height: 100px;"><div id="apexchartspy5w4aov" class="apexcharts-canvas apexchartspy5w4aov apexcharts-theme-light" style="width: 436px; height: 100px;"><svg id="SvgjsSvg2003" width="436" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2005" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2004"><clipPath id="gridRectMaskpy5w4aov"><rect id="SvgjsRect2010" width="442" height="102" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskpy5w4aov"></clipPath><clipPath id="nonForecastMaskpy5w4aov"></clipPath><clipPath id="gridRectMarkerMaskpy5w4aov"><rect id="SvgjsRect2011" width="440" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2016" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2017" stop-opacity="0.65" stop-color="rgba(115,58,235,0.65)" offset="0"></stop><stop id="SvgjsStop2018" stop-opacity="0.5" stop-color="rgba(185,157,245,0.5)" offset="1"></stop><stop id="SvgjsStop2019" stop-opacity="0.5" stop-color="rgba(185,157,245,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2009" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2022" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2023" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2049" class="apexcharts-grid"><g id="SvgjsG2050" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2052" x1="0" y1="0" x2="436" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2053" x1="0" y1="10" x2="436" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2054" x1="0" y1="20" x2="436" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2055" x1="0" y1="30" x2="436" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2056" x1="0" y1="40" x2="436" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2057" x1="0" y1="50" x2="436" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2058" x1="0" y1="60" x2="436" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2059" x1="0" y1="70" x2="436" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2060" x1="0" y1="80" x2="436" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2061" x1="0" y1="90" x2="436" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2062" x1="0" y1="100" x2="436" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2051" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2064" x1="0" y1="100" x2="436" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2063" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2012" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2013" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2020" d="M 0 100L 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 70.96774193548387 37.91304347826087 70.96774193548387C 44.54782608695652 70.96774193548387 50.23478260869565 -1.4210854715202004e-14 56.869565217391305 -1.4210854715202004e-14C 63.504347826086956 -1.4210854715202004e-14 69.19130434782609 43.01075268817203 75.82608695652173 43.01075268817203C 82.4608695652174 43.01075268817203 88.14782608695651 34.40860215053762 94.78260869565217 34.40860215053762C 101.41739130434783 34.40860215053762 107.10434782608695 70.96774193548387 113.73913043478261 70.96774193548387C 120.37391304347825 70.96774193548387 126.06086956521739 41.93548387096773 132.69565217391303 41.93548387096773C 139.33043478260868 41.93548387096773 145.01739130434783 53.76344086021505 151.65217391304347 53.76344086021505C 158.2869565217391 53.76344086021505 163.97391304347826 79.56989247311827 170.6086956521739 79.56989247311827C 177.24347826086955 79.56989247311827 182.9304347826087 50.537634408602145 189.56521739130434 50.537634408602145C 196.2 50.537634408602145 201.88695652173914 41.93548387096773 208.52173913043478 41.93548387096773C 215.15652173913043 41.93548387096773 220.84347826086957 59.13978494623655 227.47826086956522 59.13978494623655C 234.11304347826086 59.13978494623655 239.79999999999998 39.78494623655913 246.43478260869563 39.78494623655913C 253.06956521739127 39.78494623655913 258.7565217391304 74.19354838709677 265.39130434782606 74.19354838709677C 272.02608695652174 74.19354838709677 277.71304347826083 30.107526881720418 284.3478260869565 30.107526881720418C 290.9826086956522 30.107526881720418 296.66956521739127 66.66666666666666 303.30434782608694 66.66666666666666C 309.9391304347826 66.66666666666666 315.6260869565217 60.21505376344085 322.2608695652174 60.21505376344085C 328.89565217391305 60.21505376344085 334.58260869565214 58.06451612903225 341.2173913043478 58.06451612903225C 347.8521739130435 58.06451612903225 353.5391304347826 33.333333333333314 360.17391304347825 33.333333333333314C 366.8086956521739 33.333333333333314 372.495652173913 45.16129032258063 379.1304347826087 45.16129032258063C 385.76521739130436 45.16129032258063 391.45217391304345 62.36559139784946 398.0869565217391 62.36559139784946C 404.7217391304348 62.36559139784946 410.4086956521739 55.91397849462365 417.04347826086956 55.91397849462365C 423.67826086956524 55.91397849462365 429.3652173913043 62.36559139784946 436 62.36559139784946C 436 62.36559139784946 436 62.36559139784946 436 100M 436 62.36559139784946z" fill="url(#SvgjsLinearGradient2016)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpy5w4aov)" pathTo="M 0 100L 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 70.96774193548387 37.91304347826087 70.96774193548387C 44.54782608695652 70.96774193548387 50.23478260869565 -1.4210854715202004e-14 56.869565217391305 -1.4210854715202004e-14C 63.504347826086956 -1.4210854715202004e-14 69.19130434782609 43.01075268817203 75.82608695652173 43.01075268817203C 82.4608695652174 43.01075268817203 88.14782608695651 34.40860215053762 94.78260869565217 34.40860215053762C 101.41739130434783 34.40860215053762 107.10434782608695 70.96774193548387 113.73913043478261 70.96774193548387C 120.37391304347825 70.96774193548387 126.06086956521739 41.93548387096773 132.69565217391303 41.93548387096773C 139.33043478260868 41.93548387096773 145.01739130434783 53.76344086021505 151.65217391304347 53.76344086021505C 158.2869565217391 53.76344086021505 163.97391304347826 79.56989247311827 170.6086956521739 79.56989247311827C 177.24347826086955 79.56989247311827 182.9304347826087 50.537634408602145 189.56521739130434 50.537634408602145C 196.2 50.537634408602145 201.88695652173914 41.93548387096773 208.52173913043478 41.93548387096773C 215.15652173913043 41.93548387096773 220.84347826086957 59.13978494623655 227.47826086956522 59.13978494623655C 234.11304347826086 59.13978494623655 239.79999999999998 39.78494623655913 246.43478260869563 39.78494623655913C 253.06956521739127 39.78494623655913 258.7565217391304 74.19354838709677 265.39130434782606 74.19354838709677C 272.02608695652174 74.19354838709677 277.71304347826083 30.107526881720418 284.3478260869565 30.107526881720418C 290.9826086956522 30.107526881720418 296.66956521739127 66.66666666666666 303.30434782608694 66.66666666666666C 309.9391304347826 66.66666666666666 315.6260869565217 60.21505376344085 322.2608695652174 60.21505376344085C 328.89565217391305 60.21505376344085 334.58260869565214 58.06451612903225 341.2173913043478 58.06451612903225C 347.8521739130435 58.06451612903225 353.5391304347826 33.333333333333314 360.17391304347825 33.333333333333314C 366.8086956521739 33.333333333333314 372.495652173913 45.16129032258063 379.1304347826087 45.16129032258063C 385.76521739130436 45.16129032258063 391.45217391304345 62.36559139784946 398.0869565217391 62.36559139784946C 404.7217391304348 62.36559139784946 410.4086956521739 55.91397849462365 417.04347826086956 55.91397849462365C 423.67826086956524 55.91397849462365 429.3652173913043 62.36559139784946 436 62.36559139784946C 436 62.36559139784946 436 62.36559139784946 436 100M 436 62.36559139784946z" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><path id="SvgjsPath2021" d="M 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 70.96774193548387 37.91304347826087 70.96774193548387C 44.54782608695652 70.96774193548387 50.23478260869565 -1.4210854715202004e-14 56.869565217391305 -1.4210854715202004e-14C 63.504347826086956 -1.4210854715202004e-14 69.19130434782609 43.01075268817203 75.82608695652173 43.01075268817203C 82.4608695652174 43.01075268817203 88.14782608695651 34.40860215053762 94.78260869565217 34.40860215053762C 101.41739130434783 34.40860215053762 107.10434782608695 70.96774193548387 113.73913043478261 70.96774193548387C 120.37391304347825 70.96774193548387 126.06086956521739 41.93548387096773 132.69565217391303 41.93548387096773C 139.33043478260868 41.93548387096773 145.01739130434783 53.76344086021505 151.65217391304347 53.76344086021505C 158.2869565217391 53.76344086021505 163.97391304347826 79.56989247311827 170.6086956521739 79.56989247311827C 177.24347826086955 79.56989247311827 182.9304347826087 50.537634408602145 189.56521739130434 50.537634408602145C 196.2 50.537634408602145 201.88695652173914 41.93548387096773 208.52173913043478 41.93548387096773C 215.15652173913043 41.93548387096773 220.84347826086957 59.13978494623655 227.47826086956522 59.13978494623655C 234.11304347826086 59.13978494623655 239.79999999999998 39.78494623655913 246.43478260869563 39.78494623655913C 253.06956521739127 39.78494623655913 258.7565217391304 74.19354838709677 265.39130434782606 74.19354838709677C 272.02608695652174 74.19354838709677 277.71304347826083 30.107526881720418 284.3478260869565 30.107526881720418C 290.9826086956522 30.107526881720418 296.66956521739127 66.66666666666666 303.30434782608694 66.66666666666666C 309.9391304347826 66.66666666666666 315.6260869565217 60.21505376344085 322.2608695652174 60.21505376344085C 328.89565217391305 60.21505376344085 334.58260869565214 58.06451612903225 341.2173913043478 58.06451612903225C 347.8521739130435 58.06451612903225 353.5391304347826 33.333333333333314 360.17391304347825 33.333333333333314C 366.8086956521739 33.333333333333314 372.495652173913 45.16129032258063 379.1304347826087 45.16129032258063C 385.76521739130436 45.16129032258063 391.45217391304345 62.36559139784946 398.0869565217391 62.36559139784946C 404.7217391304348 62.36559139784946 410.4086956521739 55.91397849462365 417.04347826086956 55.91397849462365C 423.67826086956524 55.91397849462365 429.3652173913043 62.36559139784946 436 62.36559139784946" fill="none" fill-opacity="1" stroke="#733aeb" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpy5w4aov)" pathTo="M 0 49.46236559139784C 6.634782608695652 49.46236559139784 12.321739130434782 51.61290322580644 18.956521739130434 51.61290322580644C 25.591304347826085 51.61290322580644 31.278260869565216 70.96774193548387 37.91304347826087 70.96774193548387C 44.54782608695652 70.96774193548387 50.23478260869565 -1.4210854715202004e-14 56.869565217391305 -1.4210854715202004e-14C 63.504347826086956 -1.4210854715202004e-14 69.19130434782609 43.01075268817203 75.82608695652173 43.01075268817203C 82.4608695652174 43.01075268817203 88.14782608695651 34.40860215053762 94.78260869565217 34.40860215053762C 101.41739130434783 34.40860215053762 107.10434782608695 70.96774193548387 113.73913043478261 70.96774193548387C 120.37391304347825 70.96774193548387 126.06086956521739 41.93548387096773 132.69565217391303 41.93548387096773C 139.33043478260868 41.93548387096773 145.01739130434783 53.76344086021505 151.65217391304347 53.76344086021505C 158.2869565217391 53.76344086021505 163.97391304347826 79.56989247311827 170.6086956521739 79.56989247311827C 177.24347826086955 79.56989247311827 182.9304347826087 50.537634408602145 189.56521739130434 50.537634408602145C 196.2 50.537634408602145 201.88695652173914 41.93548387096773 208.52173913043478 41.93548387096773C 215.15652173913043 41.93548387096773 220.84347826086957 59.13978494623655 227.47826086956522 59.13978494623655C 234.11304347826086 59.13978494623655 239.79999999999998 39.78494623655913 246.43478260869563 39.78494623655913C 253.06956521739127 39.78494623655913 258.7565217391304 74.19354838709677 265.39130434782606 74.19354838709677C 272.02608695652174 74.19354838709677 277.71304347826083 30.107526881720418 284.3478260869565 30.107526881720418C 290.9826086956522 30.107526881720418 296.66956521739127 66.66666666666666 303.30434782608694 66.66666666666666C 309.9391304347826 66.66666666666666 315.6260869565217 60.21505376344085 322.2608695652174 60.21505376344085C 328.89565217391305 60.21505376344085 334.58260869565214 58.06451612903225 341.2173913043478 58.06451612903225C 347.8521739130435 58.06451612903225 353.5391304347826 33.333333333333314 360.17391304347825 33.333333333333314C 366.8086956521739 33.333333333333314 372.495652173913 45.16129032258063 379.1304347826087 45.16129032258063C 385.76521739130436 45.16129032258063 391.45217391304345 62.36559139784946 398.0869565217391 62.36559139784946C 404.7217391304348 62.36559139784946 410.4086956521739 55.91397849462365 417.04347826086956 55.91397849462365C 423.67826086956524 55.91397849462365 429.3652173913043 62.36559139784946 436 62.36559139784946" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><g id="SvgjsG2014" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2070" r="0" cx="0" cy="0" class="apexcharts-marker wt90tgqze no-pointer-events" stroke="#ffffff" fill="#733aeb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2015" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2065" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2066" x1="0" y1="0" x2="436" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2067" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2068" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2069" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2008" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2048" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2006" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 58, 235);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 437px; height: 141px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="box overflow-hidden">
                                    <div class="box-header no-border">
                                        <h4 class="box-title text-overflow">
                                            Interactions <small class="subtitle">Last  5 days</small>
                                        </h4>
                                    </div>
                                    <div class="box-body p-0" style="position: relative;">
                                        <h1 class="mt-0 ps-20 pt-0 fw-500 text-warning">2154</h1>
                                        <div id="interactions-spark" class="apex-charts-spark" style="min-height: 100px;"><div id="apexchartszsua3dgs" class="apexcharts-canvas apexchartszsua3dgs apexcharts-theme-light" style="width: 436px; height: 100px;"><svg id="SvgjsSvg2072" width="436" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2074" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2073"><clipPath id="gridRectMaskzsua3dgs"><rect id="SvgjsRect2079" width="442" height="102" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzsua3dgs"></clipPath><clipPath id="nonForecastMaskzsua3dgs"></clipPath><clipPath id="gridRectMarkerMaskzsua3dgs"><rect id="SvgjsRect2080" width="440" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2085" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2086" stop-opacity="0.65" stop-color="rgba(254,200,1,0.65)" offset="0"></stop><stop id="SvgjsStop2087" stop-opacity="0.5" stop-color="rgba(255,228,128,0.5)" offset="1"></stop><stop id="SvgjsStop2088" stop-opacity="0.5" stop-color="rgba(255,228,128,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2078" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2091" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2092" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2118" class="apexcharts-grid"><g id="SvgjsG2119" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2121" x1="0" y1="0" x2="436" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2122" x1="0" y1="10" x2="436" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2123" x1="0" y1="20" x2="436" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2124" x1="0" y1="30" x2="436" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2125" x1="0" y1="40" x2="436" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2126" x1="0" y1="50" x2="436" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2127" x1="0" y1="60" x2="436" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2128" x1="0" y1="70" x2="436" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2129" x1="0" y1="80" x2="436" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2130" x1="0" y1="90" x2="436" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2131" x1="0" y1="100" x2="436" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2120" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2133" x1="0" y1="100" x2="436" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2132" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2081" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2082" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2089" d="M 0 100L 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 51.61290322580644 94.78260869565217 51.61290322580644C 101.41739130434783 51.61290322580644 107.10434782608695 41.93548387096773 113.73913043478261 41.93548387096773C 120.37391304347825 41.93548387096773 126.06086956521739 59.13978494623655 132.69565217391303 59.13978494623655C 139.33043478260868 59.13978494623655 145.01739130434783 39.78494623655913 151.65217391304347 39.78494623655913C 158.2869565217391 39.78494623655913 163.97391304347826 74.19354838709677 170.6086956521739 74.19354838709677C 177.24347826086955 74.19354838709677 182.9304347826087 30.107526881720418 189.56521739130434 30.107526881720418C 196.2 30.107526881720418 201.88695652173914 66.66666666666666 208.52173913043478 66.66666666666666C 215.15652173913043 66.66666666666666 220.84347826086957 60.21505376344085 227.47826086956522 60.21505376344085C 234.11304347826086 60.21505376344085 239.79999999999998 58.06451612903225 246.43478260869563 58.06451612903225C 253.06956521739127 58.06451612903225 258.7565217391304 33.333333333333314 265.39130434782606 33.333333333333314C 272.02608695652174 33.333333333333314 277.71304347826083 -1.4210854715202004e-14 284.3478260869565 -1.4210854715202004e-14C 290.9826086956522 -1.4210854715202004e-14 296.66956521739127 43.01075268817203 303.30434782608694 43.01075268817203C 309.9391304347826 43.01075268817203 315.6260869565217 34.40860215053762 322.2608695652174 34.40860215053762C 328.89565217391305 34.40860215053762 334.58260869565214 70.96774193548387 341.2173913043478 70.96774193548387C 347.8521739130435 70.96774193548387 353.5391304347826 41.93548387096773 360.17391304347825 41.93548387096773C 366.8086956521739 41.93548387096773 372.495652173913 53.76344086021505 379.1304347826087 53.76344086021505C 385.76521739130436 53.76344086021505 391.45217391304345 79.56989247311827 398.0869565217391 79.56989247311827C 404.7217391304348 79.56989247311827 410.4086956521739 50.537634408602145 417.04347826086956 50.537634408602145C 423.67826086956524 50.537634408602145 429.3652173913043 49.46236559139784 436 49.46236559139784C 436 49.46236559139784 436 49.46236559139784 436 100M 436 49.46236559139784z" fill="url(#SvgjsLinearGradient2085)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzsua3dgs)" pathTo="M 0 100L 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 51.61290322580644 94.78260869565217 51.61290322580644C 101.41739130434783 51.61290322580644 107.10434782608695 41.93548387096773 113.73913043478261 41.93548387096773C 120.37391304347825 41.93548387096773 126.06086956521739 59.13978494623655 132.69565217391303 59.13978494623655C 139.33043478260868 59.13978494623655 145.01739130434783 39.78494623655913 151.65217391304347 39.78494623655913C 158.2869565217391 39.78494623655913 163.97391304347826 74.19354838709677 170.6086956521739 74.19354838709677C 177.24347826086955 74.19354838709677 182.9304347826087 30.107526881720418 189.56521739130434 30.107526881720418C 196.2 30.107526881720418 201.88695652173914 66.66666666666666 208.52173913043478 66.66666666666666C 215.15652173913043 66.66666666666666 220.84347826086957 60.21505376344085 227.47826086956522 60.21505376344085C 234.11304347826086 60.21505376344085 239.79999999999998 58.06451612903225 246.43478260869563 58.06451612903225C 253.06956521739127 58.06451612903225 258.7565217391304 33.333333333333314 265.39130434782606 33.333333333333314C 272.02608695652174 33.333333333333314 277.71304347826083 -1.4210854715202004e-14 284.3478260869565 -1.4210854715202004e-14C 290.9826086956522 -1.4210854715202004e-14 296.66956521739127 43.01075268817203 303.30434782608694 43.01075268817203C 309.9391304347826 43.01075268817203 315.6260869565217 34.40860215053762 322.2608695652174 34.40860215053762C 328.89565217391305 34.40860215053762 334.58260869565214 70.96774193548387 341.2173913043478 70.96774193548387C 347.8521739130435 70.96774193548387 353.5391304347826 41.93548387096773 360.17391304347825 41.93548387096773C 366.8086956521739 41.93548387096773 372.495652173913 53.76344086021505 379.1304347826087 53.76344086021505C 385.76521739130436 53.76344086021505 391.45217391304345 79.56989247311827 398.0869565217391 79.56989247311827C 404.7217391304348 79.56989247311827 410.4086956521739 50.537634408602145 417.04347826086956 50.537634408602145C 423.67826086956524 50.537634408602145 429.3652173913043 49.46236559139784 436 49.46236559139784C 436 49.46236559139784 436 49.46236559139784 436 100M 436 49.46236559139784z" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><path id="SvgjsPath2090" d="M 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 51.61290322580644 94.78260869565217 51.61290322580644C 101.41739130434783 51.61290322580644 107.10434782608695 41.93548387096773 113.73913043478261 41.93548387096773C 120.37391304347825 41.93548387096773 126.06086956521739 59.13978494623655 132.69565217391303 59.13978494623655C 139.33043478260868 59.13978494623655 145.01739130434783 39.78494623655913 151.65217391304347 39.78494623655913C 158.2869565217391 39.78494623655913 163.97391304347826 74.19354838709677 170.6086956521739 74.19354838709677C 177.24347826086955 74.19354838709677 182.9304347826087 30.107526881720418 189.56521739130434 30.107526881720418C 196.2 30.107526881720418 201.88695652173914 66.66666666666666 208.52173913043478 66.66666666666666C 215.15652173913043 66.66666666666666 220.84347826086957 60.21505376344085 227.47826086956522 60.21505376344085C 234.11304347826086 60.21505376344085 239.79999999999998 58.06451612903225 246.43478260869563 58.06451612903225C 253.06956521739127 58.06451612903225 258.7565217391304 33.333333333333314 265.39130434782606 33.333333333333314C 272.02608695652174 33.333333333333314 277.71304347826083 -1.4210854715202004e-14 284.3478260869565 -1.4210854715202004e-14C 290.9826086956522 -1.4210854715202004e-14 296.66956521739127 43.01075268817203 303.30434782608694 43.01075268817203C 309.9391304347826 43.01075268817203 315.6260869565217 34.40860215053762 322.2608695652174 34.40860215053762C 328.89565217391305 34.40860215053762 334.58260869565214 70.96774193548387 341.2173913043478 70.96774193548387C 347.8521739130435 70.96774193548387 353.5391304347826 41.93548387096773 360.17391304347825 41.93548387096773C 366.8086956521739 41.93548387096773 372.495652173913 53.76344086021505 379.1304347826087 53.76344086021505C 385.76521739130436 53.76344086021505 391.45217391304345 79.56989247311827 398.0869565217391 79.56989247311827C 404.7217391304348 79.56989247311827 410.4086956521739 50.537634408602145 417.04347826086956 50.537634408602145C 423.67826086956524 50.537634408602145 429.3652173913043 49.46236559139784 436 49.46236559139784" fill="none" fill-opacity="1" stroke="#fec801" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzsua3dgs)" pathTo="M 0 45.16129032258063C 6.634782608695652 45.16129032258063 12.321739130434782 62.36559139784946 18.956521739130434 62.36559139784946C 25.591304347826085 62.36559139784946 31.278260869565216 55.91397849462365 37.91304347826087 55.91397849462365C 44.54782608695652 55.91397849462365 50.23478260869565 62.36559139784946 56.869565217391305 62.36559139784946C 63.504347826086956 62.36559139784946 69.19130434782609 70.96774193548387 75.82608695652173 70.96774193548387C 82.4608695652174 70.96774193548387 88.14782608695651 51.61290322580644 94.78260869565217 51.61290322580644C 101.41739130434783 51.61290322580644 107.10434782608695 41.93548387096773 113.73913043478261 41.93548387096773C 120.37391304347825 41.93548387096773 126.06086956521739 59.13978494623655 132.69565217391303 59.13978494623655C 139.33043478260868 59.13978494623655 145.01739130434783 39.78494623655913 151.65217391304347 39.78494623655913C 158.2869565217391 39.78494623655913 163.97391304347826 74.19354838709677 170.6086956521739 74.19354838709677C 177.24347826086955 74.19354838709677 182.9304347826087 30.107526881720418 189.56521739130434 30.107526881720418C 196.2 30.107526881720418 201.88695652173914 66.66666666666666 208.52173913043478 66.66666666666666C 215.15652173913043 66.66666666666666 220.84347826086957 60.21505376344085 227.47826086956522 60.21505376344085C 234.11304347826086 60.21505376344085 239.79999999999998 58.06451612903225 246.43478260869563 58.06451612903225C 253.06956521739127 58.06451612903225 258.7565217391304 33.333333333333314 265.39130434782606 33.333333333333314C 272.02608695652174 33.333333333333314 277.71304347826083 -1.4210854715202004e-14 284.3478260869565 -1.4210854715202004e-14C 290.9826086956522 -1.4210854715202004e-14 296.66956521739127 43.01075268817203 303.30434782608694 43.01075268817203C 309.9391304347826 43.01075268817203 315.6260869565217 34.40860215053762 322.2608695652174 34.40860215053762C 328.89565217391305 34.40860215053762 334.58260869565214 70.96774193548387 341.2173913043478 70.96774193548387C 347.8521739130435 70.96774193548387 353.5391304347826 41.93548387096773 360.17391304347825 41.93548387096773C 366.8086956521739 41.93548387096773 372.495652173913 53.76344086021505 379.1304347826087 53.76344086021505C 385.76521739130436 53.76344086021505 391.45217391304345 79.56989247311827 398.0869565217391 79.56989247311827C 404.7217391304348 79.56989247311827 410.4086956521739 50.537634408602145 417.04347826086956 50.537634408602145C 423.67826086956524 50.537634408602145 429.3652173913043 49.46236559139784 436 49.46236559139784" pathFrom="M -1 100L -1 100L 18.956521739130434 100L 37.91304347826087 100L 56.869565217391305 100L 75.82608695652173 100L 94.78260869565217 100L 113.73913043478261 100L 132.69565217391303 100L 151.65217391304347 100L 170.6086956521739 100L 189.56521739130434 100L 208.52173913043478 100L 227.47826086956522 100L 246.43478260869563 100L 265.39130434782606 100L 284.3478260869565 100L 303.30434782608694 100L 322.2608695652174 100L 341.2173913043478 100L 360.17391304347825 100L 379.1304347826087 100L 398.0869565217391 100L 417.04347826086956 100L 436 100"></path><g id="SvgjsG2083" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2139" r="0" cx="0" cy="0" class="apexcharts-marker wby9yvk27 no-pointer-events" stroke="#ffffff" fill="#fec801" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2084" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2134" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2135" x1="0" y1="0" x2="436" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2136" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2137" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2138" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2077" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2117" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2075" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(254, 200, 1);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 437px; height: 141px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="box" style="height: 37.2rem;">
                            <div class="box-body px-0" style="min-height: 268px; position: relative;">
                                <div id="revenue7" class="text-dark" style="min-height: 228.7px;"><div id="apexchartsgb6builx" class="apexcharts-canvas apexchartsgb6builx apexcharts-theme-light" style="width: 300px; height: 228.7px;"><svg id="SvgjsSvg2140" width="300" height="228.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2142" class="apexcharts-inner apexcharts-graphical" transform="translate(38, 0)"><defs id="SvgjsDefs2141"><clipPath id="gridRectMaskgb6builx"><rect id="SvgjsRect2144" width="232" height="250" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskgb6builx"></clipPath><clipPath id="nonForecastMaskgb6builx"></clipPath><clipPath id="gridRectMarkerMaskgb6builx"><rect id="SvgjsRect2145" width="230" height="252" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2146" class="apexcharts-pie"><g id="SvgjsG2147" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle2148" r="67.75853658536586" cx="113" cy="113" fill="transparent"></circle><g id="SvgjsG2149" class="apexcharts-slices"><g id="SvgjsG2150" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2151" d="M 113 8.756097560975604 A 104.2439024390244 104.2439024390244 0 1 1 73.62624772483548 209.5220121396711 L 87.40706102114306 175.73930789078622 A 67.75853658536586 67.75853658536586 0 1 0 113 45.24146341463414 L 113 8.756097560975604 z" fill="rgba(77,124,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="202.1917808219178" data:startAngle="0" data:strokeWidth="2" data:value="41" data:pathOrig="M 113 8.756097560975604 A 104.2439024390244 104.2439024390244 0 1 1 73.62624772483548 209.5220121396711 L 87.40706102114306 175.73930789078622 A 67.75853658536586 67.75853658536586 0 1 0 113 45.24146341463414 L 113 8.756097560975604 z" stroke="#ffffff"></path></g><g id="SvgjsG2152" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx2" rel="2" data:realIndex="1"><path id="SvgjsPath2153" d="M 73.62624772483548 209.5220121396711 A 104.2439024390244 104.2439024390244 0 0 1 12.808080578775261 84.21857407271756 L 47.87525237620392 94.29207314726641 A 67.75853658536586 67.75853658536586 0 0 0 87.40706102114306 175.73930789078622 L 73.62624772483548 209.5220121396711 z" fill="rgba(81,206,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="83.83561643835617" data:startAngle="202.1917808219178" data:strokeWidth="2" data:value="17" data:pathOrig="M 73.62624772483548 209.5220121396711 A 104.2439024390244 104.2439024390244 0 0 1 12.808080578775261 84.21857407271756 L 47.87525237620392 94.29207314726641 A 67.75853658536586 67.75853658536586 0 0 0 87.40706102114306 175.73930789078622 L 73.62624772483548 209.5220121396711 z" stroke="#ffffff"></path></g><g id="SvgjsG2154" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx3" rel="3" data:realIndex="2"><path id="SvgjsPath2155" d="M 12.808080578775261 84.21857407271756 A 104.2439024390244 104.2439024390244 0 0 1 112.98180600686547 8.756099148701026 L 112.98817390446256 45.24146444665567 A 67.75853658536586 67.75853658536586 0 0 0 47.87525237620392 94.29207314726641 L 12.808080578775261 84.21857407271756 z" fill="rgba(115,58,235,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="73.97260273972603" data:startAngle="286.027397260274" data:strokeWidth="2" data:value="15" data:pathOrig="M 12.808080578775261 84.21857407271756 A 104.2439024390244 104.2439024390244 0 0 1 112.98180600686547 8.756099148701026 L 112.98817390446256 45.24146444665567 A 67.75853658536586 67.75853658536586 0 0 0 47.87525237620392 94.29207314726641 L 12.808080578775261 84.21857407271756 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine2156" x1="0" y1="0" x2="226" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2157" x1="0" y1="0" x2="226" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2143" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(77, 124, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 206, 138);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 58, 235);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 437px; height: 281px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="box-body pt-0">
                                <h4 class="text-overflow mb-3">Where do my Likes come.</h4>
                                <div class="mb-10 bg-lightest p-10 rounded d-flex align-items-center justify-content-between">
                                    <h5 class="my-0 text-fade">Like (1st Level)  <span class="fw-500 text-primary">(63%)</span></h5>
                                    <h5 class="my-0 fw-500 text-primary">1,234</h5>
                                </div>
                                <div class="mb-10 bg-lightest p-10 rounded d-flex align-items-center justify-content-between">
                                    <h5 class="my-0 text-fade">Like (2ed Level)  <span class="fw-500 text-success">(19%)</span></h5>
                                    <h5 class="my-0 fw-500 text-success">745</h5>
                                </div>
                                <div class="bg-lightest p-10 rounded d-flex align-items-center justify-content-between">
                                    <h5 class="my-0 text-fade">Like (3rd Level)  <span class="fw-500 text-info">(12%)</span></h5>
                                    <h5 class="my-0 fw-500 text-info">265</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">New Applications</h4>
                            </div>
                            <div class="box-body">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 382px;"><div class="application-bx" style="overflow: hidden; width: auto; height: 382px;">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 w-60">
                                                <img src="/assets/images/avatar/avatar-1.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
                                                <a href="extra_profile.html" class="hover-primary mb-1 fs-16">Sophia Doe</a>
                                                <span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Advertising Intern</span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Inbox</span>
                                                        <span class="badge badge-pill badge-info">5</span>
                                                    </a>
                                                    <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
                                                    <a class="dropdown-item" href="mailbox-read.html">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Draft</span>
                                                        <span class="badge badge-pill badge-default">1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 w-60">
                                                <img src="/assets/images/avatar/avatar-10.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
                                                <a href="extra_profile.html" class="hover-danger mb-1 fs-16">Mason Clark</a>
                                                <span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Project Coordinator</span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Inbox</span>
                                                        <span class="badge badge-pill badge-info">5</span>
                                                    </a>
                                                    <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
                                                    <a class="dropdown-item" href="mailbox-read.html">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Draft</span>
                                                        <span class="badge badge-pill badge-default">1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 w-60">
                                                <img src="/assets/images/avatar/avatar-11.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
                                                <a href="extra_profile.html" class="hover-success mb-1 fs-16">Emily Paton</a>
                                                <span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Layout Expert</span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Inbox</span>
                                                        <span class="badge badge-pill badge-info">5</span>
                                                    </a>
                                                    <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
                                                    <a class="dropdown-item" href="mailbox-read.html">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Draft</span>
                                                        <span class="badge badge-pill badge-default">1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 w-60">
                                                <img src="/assets/images/avatar/avatar-12.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
                                                <a href="extra_profile.html" class="hover-info mb-1 fs-16">Daniel Breth</a>
                                                <span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Interior Architect</span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Inbox</span>
                                                        <span class="badge badge-pill badge-info">5</span>
                                                    </a>
                                                    <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
                                                    <a class="dropdown-item" href="mailbox-read.html">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Draft</span>
                                                        <span class="badge badge-pill badge-default">1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 w-60">
                                                <img src="/assets/images/avatar/avatar-5.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
                                                <a href="extra_profile.html" class="hover-primary mb-1 fs-16">Theron Trump</a>
                                                <span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Advertising Intern</span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Inbox</span>
                                                        <span class="badge badge-pill badge-info">5</span>
                                                    </a>
                                                    <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
                                                    <a class="dropdown-item" href="mailbox-read.html">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Draft</span>
                                                        <span class="badge badge-pill badge-default">1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 w-60">
                                                <img src="/assets/images/avatar/avatar-6.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
                                                <a href="extra_profile.html" class="hover-danger mb-1 fs-16">Nil Yeager</a>
                                                <span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Project Coordinator</span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Inbox</span>
                                                        <span class="badge badge-pill badge-info">5</span>
                                                    </a>
                                                    <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
                                                    <a class="dropdown-item" href="mailbox-read.html">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Draft</span>
                                                        <span class="badge badge-pill badge-default">1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 w-60">
                                                <img src="/assets/images/avatar/avatar-7.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
                                                <a href="extra_profile.html" class="hover-success mb-1 fs-16">Tyler Mark</a>
                                                <span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Layout Expert</span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Inbox</span>
                                                        <span class="badge badge-pill badge-info">5</span>
                                                    </a>
                                                    <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
                                                    <a class="dropdown-item" href="mailbox-read.html">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item flexbox" href="mailbox.html">
                                                        <span>Draft</span>
                                                        <span class="badge badge-pill badge-default">1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(228, 230, 239); width: 4px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 7px; z-index: 99; right: 3px; height: 282.798px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 3px;"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="index.html#" target="_blank">Purchase Now</a>
                </li>
            </ul>
        </div>
        © <script>document.write(new Date().getFullYear())</script>2023 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
    </footer>
    <!-- Side panel -->
    <!-- quick_user_toggle -->
    <div class="modal modal-left fade" id="quick_user_toggle" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content slim-scroll3 ps">
                <div class="modal-body p-30 bg-white">
                    <div class="d-flex align-items-center justify-content-between pb-30">
                        <h4 class="m-0">User Profile
                            <small class="text-fade fs-12 ms-5">12 messages</small></h4>
                        <a href="index.html#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                            <span class="fa fa-close"></span>
                        </a>
                    </div>
                    <div>
                        <div class="d-flex flex-row">
                            <div class=""><img src="/assets/images/avatar/avatar-13.png" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
                            <div class="ps-20">
                                <h5 class="mb-0">Nil Yeager</h5>
                                <p class="my-5 text-fade">Manager</p>
                                <a href="mailto:dummy@gmail.com"><span class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span class="path2"></span></span> dummy@gmail.com</a>
                                <button class="btn btn-success-light btn-sm mt-5"><i class="ti-plus"></i> Follow</button>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider my-30"></div>
                    <div>
                        <div class="d-flex align-items-center mb-30">
                            <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">My Profile</a>
                                <span class="text-fade">Account settings and more</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-30">
                            <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="mailbox.html" class="text-dark hover-danger mb-1 fs-16">My Messages</a>
                                <span class="text-fade">Inbox and tasks</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-30">
                            <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="setting.html" class="text-dark hover-success mb-1 fs-16">Settings</a>
                                <span class="text-fade">Accout Settings</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-30">
                            <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="extra_taskboard.html" class="text-dark hover-info mb-1 fs-16">Project</a>
                                <span class="text-fade">latest tasks and projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider my-30"></div>
                    <div>
                        <div class="media-list">
                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">10:10</h4>
                                <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">08:40</h4>
                                <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">07:10</h4>
                                <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">01:15</h4>
                                <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">23:12</h4>
                                <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                </div>
                            </a>
                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">10:10</h4>
                                <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">08:40</h4>
                                <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">07:10</h4>
                                <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">01:15</h4>
                                <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                </div>
                            </a>

                            <a class="media media-single px-0" href="index.html#">
                                <h4 class="w-50 text-gray fw-500">23:12</h4>
                                <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: -3px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
    </div>
    <!-- /quick_user_toggle -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar">

        <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
        <ul class="nav nav-tabs control-sidebar-tabs">
            <li class="nav-item"><a href="index.html#control-sidebar-home-tab" data-bs-toggle="tab"><i class="mdi mdi-message-text"></i></a></li>
            <li class="nav-item"><a href="index.html#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Users</p>
                    <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
                </div>
                <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                    <input type="text" name="s" placeholder="Search" class="w-p100">
                </div>
                <div class="media-list media-list-hover mt-20">
                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="index.html#">
                            <img src="/assets/images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="index.html#">
                            <img src="/assets/images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="index.html#">
                            <img src="/assets/images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="index.html#">
                            <img src="/assets/images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="index.html#">
                            <img src="/assets/images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="index.html#">
                            <img src="/assets/images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="index.html#">
                            <img src="/assets/images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="index.html#">
                            <img src="/assets/images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="index.html#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                </div>

            </div><div id="control-sidebar-theme-demo-options-tab" class="tab-pane active"><div><h4 class="control-sidebar-heading p-0"></h4><div class="flexbox mb-10 pb-10 bb-1 light-on-off"><label for="toggle_left_sidebar_skin" class="control-sidebar-subheading">Dark or Light Skin</label><label class="switch"><input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin"><span class="switch-on fs-30"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></span><span class="switch-off fs-30"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></span></label></div><h4 class="control-sidebar-heading p-0"></h4><div class="flexbox mb-10 pb-10 bb-1"><label for="rtl" class="control-sidebar-subheading">Turn RTL/LTR</label><label class="switch switch-border switch-danger"><input type="checkbox" data-layout="rtl" id="rtl" checked="checked"><span class="switch-indicator"></span><span class="switch-description"></span></label></div><h4 class="control-sidebar-heading p-0"></h4><div class="flexbox mb-10"><label for="toggle_sidebar" class="control-sidebar-subheading">Toggle Sidebar</label><label class="switch switch-border switch-danger"><input type="checkbox" data-layout="sidebar-collapse" id="toggle_sidebar" checked="checked"><span class="switch-indicator"></span><span class="switch-description"></span></label></div><div class="flexbox mb-10"><label for="toggle_right_sidebar" class="control-sidebar-subheading">Toggle Right Sidebar Slide</label><label class="switch switch-border switch-danger"><input type="checkbox" data-controlsidebar="control-sidebar-open" id="toggle_right_sidebar"><span class="switch-indicator"></span><span class="switch-description"></span></label></div><h4 class="control-sidebar-heading">Skin Colors</h4><ul class="list-unstyled clearfix theme-switch"><li style="padding: 5px;"><a href="javascript:void(0)" data-theme="theme-primary" style="background: #4d7cff; display: block;vertical-align: middle;" class="clearfix rounded w-p100 h-30 mb-5" title="Theme primary"></a></li><li style="padding: 5px;"><a href="javascript:void(0)" data-theme="theme-info" style="background: #733aeb; display: block;vertical-align: middle;" class="clearfix rounded w-p100 h-30 mb-5" title="Theme info"></a></li><li style="padding: 5px;"><a href="javascript:void(0)" data-theme="theme-success" style="background: #51ce8a; display: block;vertical-align: middle;" class="clearfix rounded w-p100 h-30 mb-5" title="Theme success"></a></li><li style="padding: 5px;"><a href="javascript:void(0)" data-theme="theme-danger" style="background: #f2426d; display: block;vertical-align: middle;" class="clearfix rounded w-p100 h-30 mb-5" title="Theme danger"></a></li><li style="padding: 5px;"><a href="javascript:void(0)" data-theme="theme-warning" style="background: #fec801; display: block;vertical-align: middle;" class="clearfix rounded w-p100 h-30 mb-5" title="Theme warning"></a></li></ul></div></div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Todo List</p>
                    <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
                </div>
                <ul class="todo-list mt-20">
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                        <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                        <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                        <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                        <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                        <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                        <span class="text-line">Maecenas scelerisque</span>
                        <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                        <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                        <span class="text-line">Vivamus nec orci</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                        <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                        <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                        <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                        <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



<div id="chat-box-body">
    <div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
        <div id="chat-overlay"></div>
        <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
    </div>

    <div class="chat-box">
        <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-50" type="button" data-bs-toggle="dropdown">
                    <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                </button>
                <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="index.html#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="index.html#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="index.html#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="index.html#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="index.html#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item fs-16" href="index.html#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
                    <a class="dropdown-item fs-16" href="index.html#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span>
                        Privacy</a>
                </div>
            </div>
            <div class="text-center flex-grow-1">
                <div class="text-dark fs-18">Mayra Sibley</div>
                <div>
                    <span class="badge badge-sm badge-dot badge-primary"></span>
                    <span class="text-muted fs-12">Active</span>
                </div>
            </div>
            <div class="chat-box-toggle">
                <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-50" type="button">
                    <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                </button>
            </div>
        </div>
        <div class="chat-box-body">
            <div class="chat-box-overlay">
            </div>
            <div class="chat-logs">
                <div class="chat-msg user">
                    <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="/assets/images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        <div class="mx-10">
                            <a href="index.html#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                            <p class="text-muted fs-12 mb-0">2 Hours</p>
                        </div>
                    </div>
                    <div class="cm-msg-text">
                        Hi there, I'm Jesse and you?
                    </div>
                </div>
                <div class="chat-msg self">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="mx-10">
                            <a href="index.html#" class="text-dark hover-primary fw-bold">You</a>
                            <p class="text-muted fs-12 mb-0">3 minutes</p>
                        </div>
                        <span class="msg-avatar">
                                <img src="/assets/images/avatar/3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                    </div>
                    <div class="cm-msg-text">
                        My name is Anne Clarc.
                    </div>
                </div>
                <div class="chat-msg user">
                    <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="/assets/images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        <div class="mx-10">
                            <a href="index.html#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                            <p class="text-muted fs-12 mb-0">40 seconds</p>
                        </div>
                    </div>
                    <div class="cm-msg-text">
                        Nice to meet you Anne.<br>How can i help you?
                    </div>
                </div>
            </div><!--chat-log -->
        </div>
        <div class="chat-input">
            <form>
                <input type="text" id="chat-input" placeholder="Send a message...">
                <button type="submit" class="chat-submit" id="chat-submit">
                    <span class="icon-Send fs-22"></span>
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Page Content overlay -->


<!-- Vendor JS -->
<script src="/assets/js/vendors.min.js"></script>
<script src="/assets/js/pages/chat-popup.js"></script>
<script src="assets/icons/feather-icons/feather.min.js"></script>

<script src="/assets/vendor_components/raphael/raphael.min.js"></script>
<script src="/assets/vendor_components/morris.js/morris.min.js"></script>
<script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

<!-- EmployX App -->
<script src="/assets/js/demo.js"></script>
<script src="/assets/js/template.js"></script>
<script src="/assets/js/pages/dashboard.js"></script>



<svg id="SvgjsSvg1089" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1090"></defs><polyline id="SvgjsPolyline1091" points="0,0"></polyline><path id="SvgjsPath1092" d="M-1 100L-1 100C-1 100 19.17391304347826 100 19.17391304347826 100C19.17391304347826 100 38.34782608695652 100 38.34782608695652 100C38.34782608695652 100 57.52173913043478 100 57.52173913043478 100C57.52173913043478 100 76.69565217391305 100 76.69565217391305 100C76.69565217391305 100 95.8695652173913 100 95.8695652173913 100C95.8695652173913 100 115.04347826086956 100 115.04347826086956 100C115.04347826086956 100 134.2173913043478 100 134.2173913043478 100C134.2173913043478 100 153.3913043478261 100 153.3913043478261 100C153.3913043478261 100 172.56521739130434 100 172.56521739130434 100C172.56521739130434 100 191.7391304347826 100 191.7391304347826 100C191.7391304347826 100 210.91304347826087 100 210.91304347826087 100C210.91304347826087 100 230.08695652173913 100 230.08695652173913 100C230.08695652173913 100 249.2608695652174 100 249.2608695652174 100C249.2608695652174 100 268.4347826086956 100 268.4347826086956 100C268.4347826086956 100 287.60869565217394 100 287.60869565217394 100C287.60869565217394 100 306.7826086956522 100 306.7826086956522 100C306.7826086956522 100 325.95652173913044 100 325.95652173913044 100C325.95652173913044 100 345.1304347826087 100 345.1304347826087 100C345.1304347826087 100 364.30434782608694 100 364.30434782608694 100C364.30434782608694 100 383.4782608695652 100 383.4782608695652 100C383.4782608695652 100 402.6521739130435 100 402.6521739130435 100C402.6521739130435 100 421.82608695652175 100 421.82608695652175 100C421.82608695652175 100 441 100 441 100C441 100 441 100 441 100 "></path></svg></body></html>
