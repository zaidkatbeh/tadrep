@extends('v1.web.template.master')
@php($link=URL('/forms&Charts/widgets/custom/charts'))
@section('title')
    blogs
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
                        <h4 class="page-title">Chart widgets</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{$link}}"><i
                                                class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Widgets</li>
                                    <li class="breadcrumb-item active" aria-current="page">Chart widgets</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0" dir="ltr" style="position: relative;">
                                <div id="sales-spark" class="apex-charts" style="min-height: 160px;">
                                    <div id="apexchartsj2ls3xey"
                                         class="apexcharts-canvas apexchartsj2ls3xey apexcharts-theme-light"
                                         style="width: 586px; height: 160px;">
                                        <svg id="SvgjsSvg2381" width="586" height="160"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG2383" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 63)">
                                                <defs id="SvgjsDefs2382">
                                                    <clipPath id="gridRectMaskj2ls3xey">
                                                        <rect id="SvgjsRect2390" width="592" height="99" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskj2ls3xey"></clipPath>
                                                    <clipPath id="nonForecastMaskj2ls3xey"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskj2ls3xey">
                                                        <rect id="SvgjsRect2391" width="590" height="101" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient2396" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop2397" stop-opacity="0.65"
                                                              stop-color="rgba(77,124,255,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop2398" stop-opacity="0.5"
                                                              stop-color="rgba(166,190,255,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop2399" stop-opacity="0.5"
                                                              stop-color="rgba(166,190,255,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine2389" x1="0" y1="0" x2="0" y2="97" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="97" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG2402" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2403" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG2429" class="apexcharts-grid">
                                                    <g id="SvgjsG2430" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine2432" x1="0" y1="0" x2="586" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2433" x1="0" y1="9.7" x2="586" y2="9.7"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2434" x1="0" y1="19.4" x2="586" y2="19.4"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2435" x1="0" y1="29.099999999999998" x2="586"
                                                              y2="29.099999999999998" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2436" x1="0" y1="38.8" x2="586" y2="38.8"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2437" x1="0" y1="48.5" x2="586" y2="48.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2438" x1="0" y1="58.2" x2="586" y2="58.2"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2439" x1="0" y1="67.9" x2="586" y2="67.9"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2440" x1="0" y1="77.60000000000001" x2="586"
                                                              y2="77.60000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2441" x1="0" y1="87.30000000000001" x2="586"
                                                              y2="87.30000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2442" x1="0" y1="97.00000000000001" x2="586"
                                                              y2="97.00000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2431" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine2444" x1="0" y1="97" x2="586" y2="97"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine2443" x1="0" y1="1" x2="0" y2="97"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG2392"
                                                   class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG2393" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2400"
                                                              d="M 0 97L 0 47.978494623655905L 25.478260869565215 50.06451612903225L 50.95652173913043 40.6774193548387L 76.43478260869566 57.36559139784946L 101.91304347826086 38.59139784946235L 127.39130434782608 71.96774193548387L 152.8695652173913 29.204301075268802L 178.34782608695653 64.66666666666666L 203.82608695652172 58.408602150537625L 229.30434782608694 56.32258064516128L 254.78260869565216 32.333333333333314L 280.2608695652174 43.80645161290322L 305.7391304347826 60.49462365591397L 331.2173913043478 54.23655913978494L 356.69565217391306 60.49462365591397L 382.17391304347825 68.83870967741935L 407.65217391304344 -1.4210854715202004e-14L 433.1304347826087 41.72043010752687L 458.6086956521739 33.37634408602149L 484.0869565217391 68.83870967741935L 509.5652173913043 40.6774193548387L 535.0434782608695 52.15053763440859L 560.5217391304348 77.18279569892474L 586 49.021505376344074L 586 97M 586 49.021505376344074z"
                                                              fill="url(#SvgjsLinearGradient2396)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskj2ls3xey)"
                                                              pathTo="M 0 97L 0 47.978494623655905L 25.478260869565215 50.06451612903225L 50.95652173913043 40.6774193548387L 76.43478260869566 57.36559139784946L 101.91304347826086 38.59139784946235L 127.39130434782608 71.96774193548387L 152.8695652173913 29.204301075268802L 178.34782608695653 64.66666666666666L 203.82608695652172 58.408602150537625L 229.30434782608694 56.32258064516128L 254.78260869565216 32.333333333333314L 280.2608695652174 43.80645161290322L 305.7391304347826 60.49462365591397L 331.2173913043478 54.23655913978494L 356.69565217391306 60.49462365591397L 382.17391304347825 68.83870967741935L 407.65217391304344 -1.4210854715202004e-14L 433.1304347826087 41.72043010752687L 458.6086956521739 33.37634408602149L 484.0869565217391 68.83870967741935L 509.5652173913043 40.6774193548387L 535.0434782608695 52.15053763440859L 560.5217391304348 77.18279569892474L 586 49.021505376344074L 586 97M 586 49.021505376344074z"
                                                              pathFrom="M -1 97L -1 97L 25.478260869565215 97L 50.95652173913043 97L 76.43478260869566 97L 101.91304347826086 97L 127.39130434782608 97L 152.8695652173913 97L 178.34782608695653 97L 203.82608695652172 97L 229.30434782608694 97L 254.78260869565216 97L 280.2608695652174 97L 305.7391304347826 97L 331.2173913043478 97L 356.69565217391306 97L 382.17391304347825 97L 407.65217391304344 97L 433.1304347826087 97L 458.6086956521739 97L 484.0869565217391 97L 509.5652173913043 97L 535.0434782608695 97L 560.5217391304348 97L 586 97"></path>
                                                        <path id="SvgjsPath2401"
                                                              d="M 0 47.978494623655905L 25.478260869565215 50.06451612903225L 50.95652173913043 40.6774193548387L 76.43478260869566 57.36559139784946L 101.91304347826086 38.59139784946235L 127.39130434782608 71.96774193548387L 152.8695652173913 29.204301075268802L 178.34782608695653 64.66666666666666L 203.82608695652172 58.408602150537625L 229.30434782608694 56.32258064516128L 254.78260869565216 32.333333333333314L 280.2608695652174 43.80645161290322L 305.7391304347826 60.49462365591397L 331.2173913043478 54.23655913978494L 356.69565217391306 60.49462365591397L 382.17391304347825 68.83870967741935L 407.65217391304344 -1.4210854715202004e-14L 433.1304347826087 41.72043010752687L 458.6086956521739 33.37634408602149L 484.0869565217391 68.83870967741935L 509.5652173913043 40.6774193548387L 535.0434782608695 52.15053763440859L 560.5217391304348 77.18279569892474L 586 49.021505376344074"
                                                              fill="none" fill-opacity="1" stroke="#4d7cff"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskj2ls3xey)"
                                                              pathTo="M 0 47.978494623655905L 25.478260869565215 50.06451612903225L 50.95652173913043 40.6774193548387L 76.43478260869566 57.36559139784946L 101.91304347826086 38.59139784946235L 127.39130434782608 71.96774193548387L 152.8695652173913 29.204301075268802L 178.34782608695653 64.66666666666666L 203.82608695652172 58.408602150537625L 229.30434782608694 56.32258064516128L 254.78260869565216 32.333333333333314L 280.2608695652174 43.80645161290322L 305.7391304347826 60.49462365591397L 331.2173913043478 54.23655913978494L 356.69565217391306 60.49462365591397L 382.17391304347825 68.83870967741935L 407.65217391304344 -1.4210854715202004e-14L 433.1304347826087 41.72043010752687L 458.6086956521739 33.37634408602149L 484.0869565217391 68.83870967741935L 509.5652173913043 40.6774193548387L 535.0434782608695 52.15053763440859L 560.5217391304348 77.18279569892474L 586 49.021505376344074"
                                                              pathFrom="M -1 97L -1 97L 25.478260869565215 97L 50.95652173913043 97L 76.43478260869566 97L 101.91304347826086 97L 127.39130434782608 97L 152.8695652173913 97L 178.34782608695653 97L 203.82608695652172 97L 229.30434782608694 97L 254.78260869565216 97L 280.2608695652174 97L 305.7391304347826 97L 331.2173913043478 97L 356.69565217391306 97L 382.17391304347825 97L 407.65217391304344 97L 433.1304347826087 97L 458.6086956521739 97L 484.0869565217391 97L 509.5652173913043 97L 535.0434782608695 97L 560.5217391304348 97L 586 97"></path>
                                                        <g id="SvgjsG2394" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2450" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wszb5vmyk no-pointer-events"
                                                                        stroke="#ffffff" fill="#4d7cff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2395" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2445" x1="0" y1="0" x2="586" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2446" x1="0" y1="0" x2="586" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2447" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2448" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2449" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <text id="SvgjsText2385" font-family="Helvetica, Arial, sans-serif" x="30"
                                                  y="46.5" text-anchor="start" dominant-baseline="auto" font-size="24px"
                                                  font-weight="900" fill="#373d3f" class="apexcharts-title-text"
                                                  style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">
                                                $424,652
                                            </text>
                                            <text id="SvgjsText2386" font-family="Helvetica, Arial, sans-serif" x="30"
                                                  y="71.5" text-anchor="start" dominant-baseline="auto" font-size="14px"
                                                  font-weight="400" fill="#373d3f" class="apexcharts-subtitle-text"
                                                  style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Sales
                                            </text>
                                            <rect id="SvgjsRect2388" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG2428" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2384" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 80px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(77, 124, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 587px; height: 161px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4 col-lg-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0" dir="ltr" style="position: relative;">
                                <div id="profit-spark" class="apex-charts" style="min-height: 160px;">
                                    <div id="apexchartsww7j9o3k"
                                         class="apexcharts-canvas apexchartsww7j9o3k apexcharts-theme-light"
                                         style="width: 586px; height: 160px;">
                                        <svg id="SvgjsSvg2451" width="586" height="160"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG2453" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(20.889855072463767, 63)">
                                                <defs id="SvgjsDefs2452">
                                                    <linearGradient id="SvgjsLinearGradient2458" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop2459" stop-opacity="0.4"
                                                              stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop2460" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop2461" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskww7j9o3k">
                                                        <rect id="SvgjsRect2464" width="590" height="97"
                                                              x="-18.889855072463767" y="0" rx="0" ry="0" opacity="1"
                                                              stroke-width="0" stroke="none" stroke-dasharray="0"
                                                              fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskww7j9o3k"></clipPath>
                                                    <clipPath id="nonForecastMaskww7j9o3k"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskww7j9o3k">
                                                        <rect id="SvgjsRect2465" width="556.2202898550725" height="101"
                                                              x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine2463" x1="0" y1="0" x2="0" y2="97"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="97" fill="url(#SvgjsLinearGradient2458)"
                                                      filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                <g id="SvgjsG2518" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2519" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG2527" class="apexcharts-grid">
                                                    <g id="SvgjsG2528" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine2530" x1="-16.889855072463767" y1="0"
                                                              x2="569.1101449275362" y2="0" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2531" x1="-16.889855072463767" y1="9.7"
                                                              x2="569.1101449275362" y2="9.7" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2532" x1="-16.889855072463767" y1="19.4"
                                                              x2="569.1101449275362" y2="19.4" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2533" x1="-16.889855072463767"
                                                              y1="29.099999999999998" x2="569.1101449275362"
                                                              y2="29.099999999999998" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2534" x1="-16.889855072463767" y1="38.8"
                                                              x2="569.1101449275362" y2="38.8" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2535" x1="-16.889855072463767" y1="48.5"
                                                              x2="569.1101449275362" y2="48.5" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2536" x1="-16.889855072463767" y1="58.2"
                                                              x2="569.1101449275362" y2="58.2" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2537" x1="-16.889855072463767" y1="67.9"
                                                              x2="569.1101449275362" y2="67.9" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2538" x1="-16.889855072463767"
                                                              y1="77.60000000000001" x2="569.1101449275362"
                                                              y2="77.60000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2539" x1="-16.889855072463767"
                                                              y1="87.30000000000001" x2="569.1101449275362"
                                                              y2="87.30000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2540" x1="-16.889855072463767"
                                                              y1="97.00000000000001" x2="569.1101449275362"
                                                              y2="97.00000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2529" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine2542" x1="0" y1="97" x2="552.2202898550725"
                                                          y2="97" stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine2541" x1="0" y1="1" x2="0" y2="97"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG2466" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG2467" class="apexcharts-series" rel="1"
                                                       seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath2471"
                                                              d="M -8.403352236925015 97L -8.403352236925015 47.978494623655905Q -8.403352236925015 47.978494623655905 -8.403352236925015 47.978494623655905L 8.403352236925015 47.978494623655905Q 8.403352236925015 47.978494623655905 8.403352236925015 47.978494623655905L 8.403352236925015 47.978494623655905L 8.403352236925015 97L 8.403352236925015 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M -8.403352236925015 97L -8.403352236925015 47.978494623655905Q -8.403352236925015 47.978494623655905 -8.403352236925015 47.978494623655905L 8.403352236925015 47.978494623655905Q 8.403352236925015 47.978494623655905 8.403352236925015 47.978494623655905L 8.403352236925015 47.978494623655905L 8.403352236925015 97L 8.403352236925015 97z"
                                                              pathFrom="M -8.403352236925015 97L -8.403352236925015 97L 8.403352236925015 97L 8.403352236925015 97L 8.403352236925015 97L 8.403352236925015 97L 8.403352236925015 97L -8.403352236925015 97"
                                                              cy="47.978494623655905" cx="8.403352236925015" j="0"
                                                              val="47" barHeight="49.021505376344095"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2473"
                                                              d="M 15.606225582860743 97L 15.606225582860743 50.06451612903225Q 15.606225582860743 50.06451612903225 15.606225582860743 50.06451612903225L 32.41293005671077 50.06451612903225Q 32.41293005671077 50.06451612903225 32.41293005671077 50.06451612903225L 32.41293005671077 50.06451612903225L 32.41293005671077 97L 32.41293005671077 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 15.606225582860743 97L 15.606225582860743 50.06451612903225Q 15.606225582860743 50.06451612903225 15.606225582860743 50.06451612903225L 32.41293005671077 50.06451612903225Q 32.41293005671077 50.06451612903225 32.41293005671077 50.06451612903225L 32.41293005671077 50.06451612903225L 32.41293005671077 97L 32.41293005671077 97z"
                                                              pathFrom="M 15.606225582860743 97L 15.606225582860743 97L 32.41293005671077 97L 32.41293005671077 97L 32.41293005671077 97L 32.41293005671077 97L 32.41293005671077 97L 15.606225582860743 97"
                                                              cy="50.06451612903225" cx="32.41293005671077" j="1"
                                                              val="45" barHeight="46.93548387096775"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2475"
                                                              d="M 39.6158034026465 97L 39.6158034026465 40.6774193548387Q 39.6158034026465 40.6774193548387 39.6158034026465 40.6774193548387L 56.422507876496525 40.6774193548387Q 56.422507876496525 40.6774193548387 56.422507876496525 40.6774193548387L 56.422507876496525 40.6774193548387L 56.422507876496525 97L 56.422507876496525 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 39.6158034026465 97L 39.6158034026465 40.6774193548387Q 39.6158034026465 40.6774193548387 39.6158034026465 40.6774193548387L 56.422507876496525 40.6774193548387Q 56.422507876496525 40.6774193548387 56.422507876496525 40.6774193548387L 56.422507876496525 40.6774193548387L 56.422507876496525 97L 56.422507876496525 97z"
                                                              pathFrom="M 39.6158034026465 97L 39.6158034026465 97L 56.422507876496525 97L 56.422507876496525 97L 56.422507876496525 97L 56.422507876496525 97L 56.422507876496525 97L 39.6158034026465 97"
                                                              cy="40.6774193548387" cx="56.422507876496525" j="2"
                                                              val="54" barHeight="56.3225806451613"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2477"
                                                              d="M 63.62538122243225 97L 63.62538122243225 57.36559139784946Q 63.62538122243225 57.36559139784946 63.62538122243225 57.36559139784946L 80.43208569628229 57.36559139784946Q 80.43208569628229 57.36559139784946 80.43208569628229 57.36559139784946L 80.43208569628229 57.36559139784946L 80.43208569628229 97L 80.43208569628229 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 63.62538122243225 97L 63.62538122243225 57.36559139784946Q 63.62538122243225 57.36559139784946 63.62538122243225 57.36559139784946L 80.43208569628229 57.36559139784946Q 80.43208569628229 57.36559139784946 80.43208569628229 57.36559139784946L 80.43208569628229 57.36559139784946L 80.43208569628229 97L 80.43208569628229 97z"
                                                              pathFrom="M 63.62538122243225 97L 63.62538122243225 97L 80.43208569628229 97L 80.43208569628229 97L 80.43208569628229 97L 80.43208569628229 97L 80.43208569628229 97L 63.62538122243225 97"
                                                              cy="57.36559139784946" cx="80.43208569628229" j="3"
                                                              val="38" barHeight="39.63440860215054"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2479"
                                                              d="M 87.63495904221801 97L 87.63495904221801 38.59139784946235Q 87.63495904221801 38.59139784946235 87.63495904221801 38.59139784946235L 104.44166351606805 38.59139784946235Q 104.44166351606805 38.59139784946235 104.44166351606805 38.59139784946235L 104.44166351606805 38.59139784946235L 104.44166351606805 97L 104.44166351606805 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 87.63495904221801 97L 87.63495904221801 38.59139784946235Q 87.63495904221801 38.59139784946235 87.63495904221801 38.59139784946235L 104.44166351606805 38.59139784946235Q 104.44166351606805 38.59139784946235 104.44166351606805 38.59139784946235L 104.44166351606805 38.59139784946235L 104.44166351606805 97L 104.44166351606805 97z"
                                                              pathFrom="M 87.63495904221801 97L 87.63495904221801 97L 104.44166351606805 97L 104.44166351606805 97L 104.44166351606805 97L 104.44166351606805 97L 104.44166351606805 97L 87.63495904221801 97"
                                                              cy="38.59139784946235" cx="104.44166351606805" j="4"
                                                              val="56" barHeight="58.40860215053765"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2481"
                                                              d="M 111.64453686200378 97L 111.64453686200378 71.96774193548387Q 111.64453686200378 71.96774193548387 111.64453686200378 71.96774193548387L 128.4512413358538 71.96774193548387Q 128.4512413358538 71.96774193548387 128.4512413358538 71.96774193548387L 128.4512413358538 71.96774193548387L 128.4512413358538 97L 128.4512413358538 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 111.64453686200378 97L 111.64453686200378 71.96774193548387Q 111.64453686200378 71.96774193548387 111.64453686200378 71.96774193548387L 128.4512413358538 71.96774193548387Q 128.4512413358538 71.96774193548387 128.4512413358538 71.96774193548387L 128.4512413358538 71.96774193548387L 128.4512413358538 97L 128.4512413358538 97z"
                                                              pathFrom="M 111.64453686200378 97L 111.64453686200378 97L 128.4512413358538 97L 128.4512413358538 97L 128.4512413358538 97L 128.4512413358538 97L 128.4512413358538 97L 111.64453686200378 97"
                                                              cy="71.96774193548387" cx="128.4512413358538" j="5"
                                                              val="24" barHeight="25.032258064516135"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2483"
                                                              d="M 135.65411468178954 97L 135.65411468178954 29.204301075268802Q 135.65411468178954 29.204301075268802 135.65411468178954 29.204301075268802L 152.46081915563957 29.204301075268802Q 152.46081915563957 29.204301075268802 152.46081915563957 29.204301075268802L 152.46081915563957 29.204301075268802L 152.46081915563957 97L 152.46081915563957 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 135.65411468178954 97L 135.65411468178954 29.204301075268802Q 135.65411468178954 29.204301075268802 135.65411468178954 29.204301075268802L 152.46081915563957 29.204301075268802Q 152.46081915563957 29.204301075268802 152.46081915563957 29.204301075268802L 152.46081915563957 29.204301075268802L 152.46081915563957 97L 152.46081915563957 97z"
                                                              pathFrom="M 135.65411468178954 97L 135.65411468178954 97L 152.46081915563957 97L 152.46081915563957 97L 152.46081915563957 97L 152.46081915563957 97L 152.46081915563957 97L 135.65411468178954 97"
                                                              cy="29.204301075268802" cx="152.46081915563957" j="6"
                                                              val="65" barHeight="67.7956989247312"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2485"
                                                              d="M 159.6636925015753 97L 159.6636925015753 64.66666666666666Q 159.6636925015753 64.66666666666666 159.6636925015753 64.66666666666666L 176.47039697542533 64.66666666666666Q 176.47039697542533 64.66666666666666 176.47039697542533 64.66666666666666L 176.47039697542533 64.66666666666666L 176.47039697542533 97L 176.47039697542533 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 159.6636925015753 97L 159.6636925015753 64.66666666666666Q 159.6636925015753 64.66666666666666 159.6636925015753 64.66666666666666L 176.47039697542533 64.66666666666666Q 176.47039697542533 64.66666666666666 176.47039697542533 64.66666666666666L 176.47039697542533 64.66666666666666L 176.47039697542533 97L 176.47039697542533 97z"
                                                              pathFrom="M 159.6636925015753 97L 159.6636925015753 97L 176.47039697542533 97L 176.47039697542533 97L 176.47039697542533 97L 176.47039697542533 97L 176.47039697542533 97L 159.6636925015753 97"
                                                              cy="64.66666666666666" cx="176.47039697542533" j="7"
                                                              val="31" barHeight="32.33333333333334"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2487"
                                                              d="M 183.67327032136106 97L 183.67327032136106 58.408602150537625Q 183.67327032136106 58.408602150537625 183.67327032136106 58.408602150537625L 200.4799747952111 58.408602150537625Q 200.4799747952111 58.408602150537625 200.4799747952111 58.408602150537625L 200.4799747952111 58.408602150537625L 200.4799747952111 97L 200.4799747952111 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 183.67327032136106 97L 183.67327032136106 58.408602150537625Q 183.67327032136106 58.408602150537625 183.67327032136106 58.408602150537625L 200.4799747952111 58.408602150537625Q 200.4799747952111 58.408602150537625 200.4799747952111 58.408602150537625L 200.4799747952111 58.408602150537625L 200.4799747952111 97L 200.4799747952111 97z"
                                                              pathFrom="M 183.67327032136106 97L 183.67327032136106 97L 200.4799747952111 97L 200.4799747952111 97L 200.4799747952111 97L 200.4799747952111 97L 200.4799747952111 97L 183.67327032136106 97"
                                                              cy="58.408602150537625" cx="200.4799747952111" j="8"
                                                              val="37" barHeight="38.591397849462375"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2489"
                                                              d="M 207.68284814114682 97L 207.68284814114682 56.32258064516128Q 207.68284814114682 56.32258064516128 207.68284814114682 56.32258064516128L 224.48955261499685 56.32258064516128Q 224.48955261499685 56.32258064516128 224.48955261499685 56.32258064516128L 224.48955261499685 56.32258064516128L 224.48955261499685 97L 224.48955261499685 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 207.68284814114682 97L 207.68284814114682 56.32258064516128Q 207.68284814114682 56.32258064516128 207.68284814114682 56.32258064516128L 224.48955261499685 56.32258064516128Q 224.48955261499685 56.32258064516128 224.48955261499685 56.32258064516128L 224.48955261499685 56.32258064516128L 224.48955261499685 97L 224.48955261499685 97z"
                                                              pathFrom="M 207.68284814114682 97L 207.68284814114682 97L 224.48955261499685 97L 224.48955261499685 97L 224.48955261499685 97L 224.48955261499685 97L 224.48955261499685 97L 207.68284814114682 97"
                                                              cy="56.32258064516128" cx="224.48955261499685" j="9"
                                                              val="39" barHeight="40.67741935483872"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2491"
                                                              d="M 231.69242596093258 97L 231.69242596093258 32.333333333333314Q 231.69242596093258 32.333333333333314 231.69242596093258 32.333333333333314L 248.49913043478261 32.333333333333314Q 248.49913043478261 32.333333333333314 248.49913043478261 32.333333333333314L 248.49913043478261 32.333333333333314L 248.49913043478261 97L 248.49913043478261 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 231.69242596093258 97L 231.69242596093258 32.333333333333314Q 231.69242596093258 32.333333333333314 231.69242596093258 32.333333333333314L 248.49913043478261 32.333333333333314Q 248.49913043478261 32.333333333333314 248.49913043478261 32.333333333333314L 248.49913043478261 32.333333333333314L 248.49913043478261 97L 248.49913043478261 97z"
                                                              pathFrom="M 231.69242596093258 97L 231.69242596093258 97L 248.49913043478261 97L 248.49913043478261 97L 248.49913043478261 97L 248.49913043478261 97L 248.49913043478261 97L 231.69242596093258 97"
                                                              cy="32.333333333333314" cx="248.49913043478261" j="10"
                                                              val="62" barHeight="64.66666666666669"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2493"
                                                              d="M 255.70200378071831 97L 255.70200378071831 43.80645161290322Q 255.70200378071831 43.80645161290322 255.70200378071831 43.80645161290322L 272.5087082545683 43.80645161290322Q 272.5087082545683 43.80645161290322 272.5087082545683 43.80645161290322L 272.5087082545683 43.80645161290322L 272.5087082545683 97L 272.5087082545683 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 255.70200378071831 97L 255.70200378071831 43.80645161290322Q 255.70200378071831 43.80645161290322 255.70200378071831 43.80645161290322L 272.5087082545683 43.80645161290322Q 272.5087082545683 43.80645161290322 272.5087082545683 43.80645161290322L 272.5087082545683 43.80645161290322L 272.5087082545683 97L 272.5087082545683 97z"
                                                              pathFrom="M 255.70200378071831 97L 255.70200378071831 97L 272.5087082545683 97L 272.5087082545683 97L 272.5087082545683 97L 272.5087082545683 97L 272.5087082545683 97L 255.70200378071831 97"
                                                              cy="43.80645161290322" cx="272.5087082545683" j="11"
                                                              val="51" barHeight="53.19354838709678"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2495"
                                                              d="M 279.7115816005041 97L 279.7115816005041 60.49462365591397Q 279.7115816005041 60.49462365591397 279.7115816005041 60.49462365591397L 296.5182860743541 60.49462365591397Q 296.5182860743541 60.49462365591397 296.5182860743541 60.49462365591397L 296.5182860743541 60.49462365591397L 296.5182860743541 97L 296.5182860743541 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 279.7115816005041 97L 279.7115816005041 60.49462365591397Q 279.7115816005041 60.49462365591397 279.7115816005041 60.49462365591397L 296.5182860743541 60.49462365591397Q 296.5182860743541 60.49462365591397 296.5182860743541 60.49462365591397L 296.5182860743541 60.49462365591397L 296.5182860743541 97L 296.5182860743541 97z"
                                                              pathFrom="M 279.7115816005041 97L 279.7115816005041 97L 296.5182860743541 97L 296.5182860743541 97L 296.5182860743541 97L 296.5182860743541 97L 296.5182860743541 97L 279.7115816005041 97"
                                                              cy="60.49462365591397" cx="296.5182860743541" j="12"
                                                              val="35" barHeight="36.50537634408603"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2497"
                                                              d="M 303.72115942028984 97L 303.72115942028984 54.23655913978494Q 303.72115942028984 54.23655913978494 303.72115942028984 54.23655913978494L 320.52786389413984 54.23655913978494Q 320.52786389413984 54.23655913978494 320.52786389413984 54.23655913978494L 320.52786389413984 54.23655913978494L 320.52786389413984 97L 320.52786389413984 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 303.72115942028984 97L 303.72115942028984 54.23655913978494Q 303.72115942028984 54.23655913978494 303.72115942028984 54.23655913978494L 320.52786389413984 54.23655913978494Q 320.52786389413984 54.23655913978494 320.52786389413984 54.23655913978494L 320.52786389413984 54.23655913978494L 320.52786389413984 97L 320.52786389413984 97z"
                                                              pathFrom="M 303.72115942028984 97L 303.72115942028984 97L 320.52786389413984 97L 320.52786389413984 97L 320.52786389413984 97L 320.52786389413984 97L 320.52786389413984 97L 303.72115942028984 97"
                                                              cy="54.23655913978494" cx="320.52786389413984" j="13"
                                                              val="41" barHeight="42.76344086021506"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2499"
                                                              d="M 327.7307372400756 97L 327.7307372400756 60.49462365591397Q 327.7307372400756 60.49462365591397 327.7307372400756 60.49462365591397L 344.5374417139256 60.49462365591397Q 344.5374417139256 60.49462365591397 344.5374417139256 60.49462365591397L 344.5374417139256 60.49462365591397L 344.5374417139256 97L 344.5374417139256 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 327.7307372400756 97L 327.7307372400756 60.49462365591397Q 327.7307372400756 60.49462365591397 327.7307372400756 60.49462365591397L 344.5374417139256 60.49462365591397Q 344.5374417139256 60.49462365591397 344.5374417139256 60.49462365591397L 344.5374417139256 60.49462365591397L 344.5374417139256 97L 344.5374417139256 97z"
                                                              pathFrom="M 327.7307372400756 97L 327.7307372400756 97L 344.5374417139256 97L 344.5374417139256 97L 344.5374417139256 97L 344.5374417139256 97L 344.5374417139256 97L 327.7307372400756 97"
                                                              cy="60.49462365591397" cx="344.5374417139256" j="14"
                                                              val="35" barHeight="36.50537634408603"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2501"
                                                              d="M 351.74031505986136 97L 351.74031505986136 68.83870967741935Q 351.74031505986136 68.83870967741935 351.74031505986136 68.83870967741935L 368.54701953371136 68.83870967741935Q 368.54701953371136 68.83870967741935 368.54701953371136 68.83870967741935L 368.54701953371136 68.83870967741935L 368.54701953371136 97L 368.54701953371136 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 351.74031505986136 97L 351.74031505986136 68.83870967741935Q 351.74031505986136 68.83870967741935 351.74031505986136 68.83870967741935L 368.54701953371136 68.83870967741935Q 368.54701953371136 68.83870967741935 368.54701953371136 68.83870967741935L 368.54701953371136 68.83870967741935L 368.54701953371136 97L 368.54701953371136 97z"
                                                              pathFrom="M 351.74031505986136 97L 351.74031505986136 97L 368.54701953371136 97L 368.54701953371136 97L 368.54701953371136 97L 368.54701953371136 97L 368.54701953371136 97L 351.74031505986136 97"
                                                              cy="68.83870967741935" cx="368.54701953371136" j="15"
                                                              val="27" barHeight="28.16129032258065"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2503"
                                                              d="M 375.7498928796471 97L 375.7498928796471 -1.4210854715202004e-14Q 375.7498928796471 -1.4210854715202004e-14 375.7498928796471 -1.4210854715202004e-14L 392.5565973534971 -1.4210854715202004e-14Q 392.5565973534971 -1.4210854715202004e-14 392.5565973534971 -1.4210854715202004e-14L 392.5565973534971 -1.4210854715202004e-14L 392.5565973534971 97L 392.5565973534971 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 375.7498928796471 97L 375.7498928796471 -1.4210854715202004e-14Q 375.7498928796471 -1.4210854715202004e-14 375.7498928796471 -1.4210854715202004e-14L 392.5565973534971 -1.4210854715202004e-14Q 392.5565973534971 -1.4210854715202004e-14 392.5565973534971 -1.4210854715202004e-14L 392.5565973534971 -1.4210854715202004e-14L 392.5565973534971 97L 392.5565973534971 97z"
                                                              pathFrom="M 375.7498928796471 97L 375.7498928796471 97L 392.5565973534971 97L 392.5565973534971 97L 392.5565973534971 97L 392.5565973534971 97L 392.5565973534971 97L 375.7498928796471 97"
                                                              cy="-1.4210854715202004e-14" cx="392.5565973534971" j="16"
                                                              val="93" barHeight="97.00000000000001"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2505"
                                                              d="M 399.7594706994329 97L 399.7594706994329 41.72043010752687Q 399.7594706994329 41.72043010752687 399.7594706994329 41.72043010752687L 416.5661751732829 41.72043010752687Q 416.5661751732829 41.72043010752687 416.5661751732829 41.72043010752687L 416.5661751732829 41.72043010752687L 416.5661751732829 97L 416.5661751732829 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 399.7594706994329 97L 399.7594706994329 41.72043010752687Q 399.7594706994329 41.72043010752687 399.7594706994329 41.72043010752687L 416.5661751732829 41.72043010752687Q 416.5661751732829 41.72043010752687 416.5661751732829 41.72043010752687L 416.5661751732829 41.72043010752687L 416.5661751732829 97L 416.5661751732829 97z"
                                                              pathFrom="M 399.7594706994329 97L 399.7594706994329 97L 416.5661751732829 97L 416.5661751732829 97L 416.5661751732829 97L 416.5661751732829 97L 416.5661751732829 97L 399.7594706994329 97"
                                                              cy="41.72043010752687" cx="416.5661751732829" j="17"
                                                              val="53" barHeight="55.27956989247313"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2507"
                                                              d="M 423.76904851921864 97L 423.76904851921864 33.37634408602149Q 423.76904851921864 33.37634408602149 423.76904851921864 33.37634408602149L 440.57575299306865 33.37634408602149Q 440.57575299306865 33.37634408602149 440.57575299306865 33.37634408602149L 440.57575299306865 33.37634408602149L 440.57575299306865 97L 440.57575299306865 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 423.76904851921864 97L 423.76904851921864 33.37634408602149Q 423.76904851921864 33.37634408602149 423.76904851921864 33.37634408602149L 440.57575299306865 33.37634408602149Q 440.57575299306865 33.37634408602149 440.57575299306865 33.37634408602149L 440.57575299306865 33.37634408602149L 440.57575299306865 97L 440.57575299306865 97z"
                                                              pathFrom="M 423.76904851921864 97L 423.76904851921864 97L 440.57575299306865 97L 440.57575299306865 97L 440.57575299306865 97L 440.57575299306865 97L 440.57575299306865 97L 423.76904851921864 97"
                                                              cy="33.37634408602149" cx="440.57575299306865" j="18"
                                                              val="61" barHeight="63.62365591397851"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2509"
                                                              d="M 447.7786263390044 97L 447.7786263390044 68.83870967741935Q 447.7786263390044 68.83870967741935 447.7786263390044 68.83870967741935L 464.5853308128544 68.83870967741935Q 464.5853308128544 68.83870967741935 464.5853308128544 68.83870967741935L 464.5853308128544 68.83870967741935L 464.5853308128544 97L 464.5853308128544 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 447.7786263390044 97L 447.7786263390044 68.83870967741935Q 447.7786263390044 68.83870967741935 447.7786263390044 68.83870967741935L 464.5853308128544 68.83870967741935Q 464.5853308128544 68.83870967741935 464.5853308128544 68.83870967741935L 464.5853308128544 68.83870967741935L 464.5853308128544 97L 464.5853308128544 97z"
                                                              pathFrom="M 447.7786263390044 97L 447.7786263390044 97L 464.5853308128544 97L 464.5853308128544 97L 464.5853308128544 97L 464.5853308128544 97L 464.5853308128544 97L 447.7786263390044 97"
                                                              cy="68.83870967741935" cx="464.5853308128544" j="19"
                                                              val="27" barHeight="28.16129032258065"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2511"
                                                              d="M 471.78820415879017 97L 471.78820415879017 40.6774193548387Q 471.78820415879017 40.6774193548387 471.78820415879017 40.6774193548387L 488.59490863264017 40.6774193548387Q 488.59490863264017 40.6774193548387 488.59490863264017 40.6774193548387L 488.59490863264017 40.6774193548387L 488.59490863264017 97L 488.59490863264017 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 471.78820415879017 97L 471.78820415879017 40.6774193548387Q 471.78820415879017 40.6774193548387 471.78820415879017 40.6774193548387L 488.59490863264017 40.6774193548387Q 488.59490863264017 40.6774193548387 488.59490863264017 40.6774193548387L 488.59490863264017 40.6774193548387L 488.59490863264017 97L 488.59490863264017 97z"
                                                              pathFrom="M 471.78820415879017 97L 471.78820415879017 97L 488.59490863264017 97L 488.59490863264017 97L 488.59490863264017 97L 488.59490863264017 97L 488.59490863264017 97L 471.78820415879017 97"
                                                              cy="40.6774193548387" cx="488.59490863264017" j="20"
                                                              val="54" barHeight="56.3225806451613"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2513"
                                                              d="M 495.7977819785759 97L 495.7977819785759 52.15053763440859Q 495.7977819785759 52.15053763440859 495.7977819785759 52.15053763440859L 512.6044864524259 52.15053763440859Q 512.6044864524259 52.15053763440859 512.6044864524259 52.15053763440859L 512.6044864524259 52.15053763440859L 512.6044864524259 97L 512.6044864524259 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 495.7977819785759 97L 495.7977819785759 52.15053763440859Q 495.7977819785759 52.15053763440859 495.7977819785759 52.15053763440859L 512.6044864524259 52.15053763440859Q 512.6044864524259 52.15053763440859 512.6044864524259 52.15053763440859L 512.6044864524259 52.15053763440859L 512.6044864524259 97L 512.6044864524259 97z"
                                                              pathFrom="M 495.7977819785759 97L 495.7977819785759 97L 512.6044864524259 97L 512.6044864524259 97L 512.6044864524259 97L 512.6044864524259 97L 512.6044864524259 97L 495.7977819785759 97"
                                                              cy="52.15053763440859" cx="512.6044864524259" j="21"
                                                              val="43" barHeight="44.84946236559141"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2515"
                                                              d="M 519.8073597983616 97L 519.8073597983616 77.18279569892474Q 519.8073597983616 77.18279569892474 519.8073597983616 77.18279569892474L 536.6140642722116 77.18279569892474Q 536.6140642722116 77.18279569892474 536.6140642722116 77.18279569892474L 536.6140642722116 77.18279569892474L 536.6140642722116 97L 536.6140642722116 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 519.8073597983616 97L 519.8073597983616 77.18279569892474Q 519.8073597983616 77.18279569892474 519.8073597983616 77.18279569892474L 536.6140642722116 77.18279569892474Q 536.6140642722116 77.18279569892474 536.6140642722116 77.18279569892474L 536.6140642722116 77.18279569892474L 536.6140642722116 97L 536.6140642722116 97z"
                                                              pathFrom="M 519.8073597983616 97L 519.8073597983616 97L 536.6140642722116 97L 536.6140642722116 97L 536.6140642722116 97L 536.6140642722116 97L 536.6140642722116 97L 519.8073597983616 97"
                                                              cy="77.18279569892474" cx="536.6140642722116" j="22"
                                                              val="19" barHeight="19.81720430107527"
                                                              barWidth="16.80670447385003"></path>
                                                        <path id="SvgjsPath2517"
                                                              d="M 543.8169376181474 97L 543.8169376181474 49.021505376344074Q 543.8169376181474 49.021505376344074 543.8169376181474 49.021505376344074L 560.6236420919975 49.021505376344074Q 560.6236420919975 49.021505376344074 560.6236420919975 49.021505376344074L 560.6236420919975 49.021505376344074L 560.6236420919975 97L 560.6236420919975 97z"
                                                              fill="rgba(81,206,138,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskww7j9o3k)"
                                                              pathTo="M 543.8169376181474 97L 543.8169376181474 49.021505376344074Q 543.8169376181474 49.021505376344074 543.8169376181474 49.021505376344074L 560.6236420919975 49.021505376344074Q 560.6236420919975 49.021505376344074 560.6236420919975 49.021505376344074L 560.6236420919975 49.021505376344074L 560.6236420919975 97L 560.6236420919975 97z"
                                                              pathFrom="M 543.8169376181474 97L 543.8169376181474 97L 560.6236420919975 97L 560.6236420919975 97L 560.6236420919975 97L 560.6236420919975 97L 560.6236420919975 97L 543.8169376181474 97"
                                                              cy="49.021505376344074" cx="560.6236420919975" j="23"
                                                              val="46" barHeight="47.978494623655926"
                                                              barWidth="16.80670447385003"></path>
                                                        <g id="SvgjsG2469" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG2470"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2472"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2474"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2476"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2478"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2480"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2482"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2484"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2486"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2488"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2490"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2492"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2494"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2496"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2498"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2500"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2502"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2504"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2506"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2508"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2510"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2512"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2514"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG2516"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2468" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2543" x1="-16.889855072463767" y1="0"
                                                      x2="569.1101449275362" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2544" x1="-16.889855072463767" y1="0"
                                                      x2="569.1101449275362" y2="0" stroke-dasharray="0"
                                                      stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2545" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2546" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2547" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <text id="SvgjsText2455" font-family="Helvetica, Arial, sans-serif" x="30"
                                                  y="46.5" text-anchor="start" dominant-baseline="auto" font-size="24px"
                                                  font-weight="900" fill="#373d3f" class="apexcharts-title-text"
                                                  style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">
                                                $135,965
                                            </text>
                                            <text id="SvgjsText2456" font-family="Helvetica, Arial, sans-serif" x="30"
                                                  y="71.5" text-anchor="start" dominant-baseline="auto" font-size="14px"
                                                  font-weight="400" fill="#373d3f" class="apexcharts-subtitle-text"
                                                  style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Profits
                                            </text>
                                            <rect id="SvgjsRect2462" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG2526" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2454" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 80px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(81, 206, 138);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 587px; height: 161px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4 col-lg-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0" dir="ltr" style="position: relative;">
                                <div id="expenses-spark" class="apex-charts" style="min-height: 160px;">
                                    <div id="apexchartsvixg5x4s"
                                         class="apexcharts-canvas apexchartsvixg5x4s apexcharts-theme-light"
                                         style="width: 586px; height: 160px;">
                                        <svg id="SvgjsSvg2549" width="586" height="160"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG2551" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 63)">
                                                <defs id="SvgjsDefs2550">
                                                    <clipPath id="gridRectMaskvixg5x4s">
                                                        <rect id="SvgjsRect2558" width="592" height="99" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskvixg5x4s"></clipPath>
                                                    <clipPath id="nonForecastMaskvixg5x4s"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskvixg5x4s">
                                                        <rect id="SvgjsRect2559" width="590" height="101" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine2557" x1="356.19565217391306" y1="0"
                                                      x2="356.19565217391306" y2="97" stroke="#b6b6b6"
                                                      stroke-dasharray="3"
                                                      class="apexcharts-xcrosshairs apexcharts-active"
                                                      x="356.19565217391306" y="0" width="1" height="97" fill="#b1b9c4"
                                                      filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG2565" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2566" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG2592" class="apexcharts-grid">
                                                    <g id="SvgjsG2593" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine2595" x1="0" y1="0" x2="586" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2596" x1="0" y1="9.7" x2="586" y2="9.7"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2597" x1="0" y1="19.4" x2="586" y2="19.4"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2598" x1="0" y1="29.099999999999998" x2="586"
                                                              y2="29.099999999999998" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2599" x1="0" y1="38.8" x2="586" y2="38.8"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2600" x1="0" y1="48.5" x2="586" y2="48.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2601" x1="0" y1="58.2" x2="586" y2="58.2"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2602" x1="0" y1="67.9" x2="586" y2="67.9"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2603" x1="0" y1="77.60000000000001" x2="586"
                                                              y2="77.60000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2604" x1="0" y1="87.30000000000001" x2="586"
                                                              y2="87.30000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2605" x1="0" y1="97.00000000000001" x2="586"
                                                              y2="97.00000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2594" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine2607" x1="0" y1="97" x2="586" y2="97"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine2606" x1="0" y1="1" x2="0" y2="97"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG2560"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG2561" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2564"
                                                              d="M 0 47.978494623655905C 8.917391304347825 47.978494623655905 16.560869565217388 50.06451612903225 25.478260869565215 50.06451612903225C 34.39565217391304 50.06451612903225 42.03913043478261 40.6774193548387 50.95652173913043 40.6774193548387C 59.87391304347826 40.6774193548387 67.51739130434783 57.36559139784946 76.43478260869566 57.36559139784946C 85.35217391304347 57.36559139784946 92.99565217391304 38.59139784946235 101.91304347826086 38.59139784946235C 110.83043478260869 38.59139784946235 118.47391304347825 71.96774193548387 127.39130434782608 71.96774193548387C 136.30869565217392 71.96774193548387 143.95217391304348 29.204301075268802 152.8695652173913 29.204301075268802C 161.78695652173914 29.204301075268802 169.4304347826087 64.66666666666666 178.34782608695653 64.66666666666666C 187.26521739130436 64.66666666666666 194.9086956521739 58.408602150537625 203.82608695652172 58.408602150537625C 212.74347826086955 58.408602150537625 220.3869565217391 56.32258064516128 229.30434782608694 56.32258064516128C 238.22173913043477 56.32258064516128 245.86521739130433 32.333333333333314 254.78260869565216 32.333333333333314C 263.7 32.333333333333314 271.3434782608696 43.80645161290322 280.2608695652174 43.80645161290322C 289.17826086956524 43.80645161290322 296.82173913043476 60.49462365591397 305.7391304347826 60.49462365591397C 314.6565217391304 60.49462365591397 322.3 54.23655913978494 331.2173913043478 54.23655913978494C 340.1347826086957 54.23655913978494 347.7782608695652 60.49462365591397 356.69565217391306 60.49462365591397C 365.61304347826086 60.49462365591397 373.25652173913045 68.83870967741935 382.17391304347825 68.83870967741935C 391.09130434782605 68.83870967741935 398.73478260869564 -1.4210854715202004e-14 407.65217391304344 -1.4210854715202004e-14C 416.5695652173913 -1.4210854715202004e-14 424.21304347826083 41.72043010752687 433.1304347826087 41.72043010752687C 442.0478260869565 41.72043010752687 449.6913043478261 33.37634408602149 458.6086956521739 33.37634408602149C 467.52608695652174 33.37634408602149 475.16956521739127 68.83870967741935 484.0869565217391 68.83870967741935C 493.0043478260869 68.83870967741935 500.6478260869565 40.6774193548387 509.5652173913043 40.6774193548387C 518.4826086956522 40.6774193548387 526.1260869565217 52.15053763440859 535.0434782608695 52.15053763440859C 543.9608695652173 52.15053763440859 551.604347826087 77.18279569892474 560.5217391304348 77.18279569892474C 569.4391304347826 77.18279569892474 577.0826086956522 49.021505376344074 586 49.021505376344074"
                                                              fill="none" fill-opacity="1" stroke="rgba(242,66,109,1)"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMaskvixg5x4s)"
                                                              pathTo="M 0 47.978494623655905C 8.917391304347825 47.978494623655905 16.560869565217388 50.06451612903225 25.478260869565215 50.06451612903225C 34.39565217391304 50.06451612903225 42.03913043478261 40.6774193548387 50.95652173913043 40.6774193548387C 59.87391304347826 40.6774193548387 67.51739130434783 57.36559139784946 76.43478260869566 57.36559139784946C 85.35217391304347 57.36559139784946 92.99565217391304 38.59139784946235 101.91304347826086 38.59139784946235C 110.83043478260869 38.59139784946235 118.47391304347825 71.96774193548387 127.39130434782608 71.96774193548387C 136.30869565217392 71.96774193548387 143.95217391304348 29.204301075268802 152.8695652173913 29.204301075268802C 161.78695652173914 29.204301075268802 169.4304347826087 64.66666666666666 178.34782608695653 64.66666666666666C 187.26521739130436 64.66666666666666 194.9086956521739 58.408602150537625 203.82608695652172 58.408602150537625C 212.74347826086955 58.408602150537625 220.3869565217391 56.32258064516128 229.30434782608694 56.32258064516128C 238.22173913043477 56.32258064516128 245.86521739130433 32.333333333333314 254.78260869565216 32.333333333333314C 263.7 32.333333333333314 271.3434782608696 43.80645161290322 280.2608695652174 43.80645161290322C 289.17826086956524 43.80645161290322 296.82173913043476 60.49462365591397 305.7391304347826 60.49462365591397C 314.6565217391304 60.49462365591397 322.3 54.23655913978494 331.2173913043478 54.23655913978494C 340.1347826086957 54.23655913978494 347.7782608695652 60.49462365591397 356.69565217391306 60.49462365591397C 365.61304347826086 60.49462365591397 373.25652173913045 68.83870967741935 382.17391304347825 68.83870967741935C 391.09130434782605 68.83870967741935 398.73478260869564 -1.4210854715202004e-14 407.65217391304344 -1.4210854715202004e-14C 416.5695652173913 -1.4210854715202004e-14 424.21304347826083 41.72043010752687 433.1304347826087 41.72043010752687C 442.0478260869565 41.72043010752687 449.6913043478261 33.37634408602149 458.6086956521739 33.37634408602149C 467.52608695652174 33.37634408602149 475.16956521739127 68.83870967741935 484.0869565217391 68.83870967741935C 493.0043478260869 68.83870967741935 500.6478260869565 40.6774193548387 509.5652173913043 40.6774193548387C 518.4826086956522 40.6774193548387 526.1260869565217 52.15053763440859 535.0434782608695 52.15053763440859C 543.9608695652173 52.15053763440859 551.604347826087 77.18279569892474 560.5217391304348 77.18279569892474C 569.4391304347826 77.18279569892474 577.0826086956522 49.021505376344074 586 49.021505376344074"
                                                              pathFrom="M -1 97L -1 97L 25.478260869565215 97L 50.95652173913043 97L 76.43478260869566 97L 101.91304347826086 97L 127.39130434782608 97L 152.8695652173913 97L 178.34782608695653 97L 203.82608695652172 97L 229.30434782608694 97L 254.78260869565216 97L 280.2608695652174 97L 305.7391304347826 97L 331.2173913043478 97L 356.69565217391306 97L 382.17391304347825 97L 407.65217391304344 97L 433.1304347826087 97L 458.6086956521739 97L 484.0869565217391 97L 509.5652173913043 97L 535.0434782608695 97L 560.5217391304348 97L 586 97"></path>
                                                        <g id="SvgjsG2562" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2613" r="6"
                                                                        cx="356.69565217391306" cy="60.49462365591397"
                                                                        class="apexcharts-marker w513d34tm no-pointer-events"
                                                                        stroke="#ffffff" fill="#f2426d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2563" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2608" x1="0" y1="0" x2="586" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2609" x1="0" y1="0" x2="586" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2610" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2611" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2612" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <text id="SvgjsText2553" font-family="Helvetica, Arial, sans-serif" x="30"
                                                  y="46.5" text-anchor="start" dominant-baseline="auto" font-size="24px"
                                                  font-weight="900" fill="#373d3f" class="apexcharts-title-text"
                                                  style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">
                                                $235,312
                                            </text>
                                            <text id="SvgjsText2554" font-family="Helvetica, Arial, sans-serif" x="30"
                                                  y="71.5" text-anchor="start" dominant-baseline="auto" font-size="14px"
                                                  font-weight="400" fill="#373d3f" class="apexcharts-subtitle-text"
                                                  style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">
                                                Expenses
                                            </text>
                                            <rect id="SvgjsRect2556" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG2591" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2552" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 80px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light apexcharts-active"
                                             style="left: 234.977px; top: 90px;">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">15
                                            </div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                 style="order: 1; display: flex;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(242, 66, 109);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label">series-1: </span><span
                                                            class="apexcharts-tooltip-text-y-value">35</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 587px; height: 161px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Orders Overview</h4>
                                <div class="box-controls pull-right">
                                    <ul class="nav nav-pills nav-pills-sm" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab"
                                               href="{{$link}}">
                                                <span class="nav-text base-font">Month</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab"
                                               href="{{$link}}">
                                                <span class="nav-text base-font">Week</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 b-0 active" data-bs-toggle="tab"
                                               href="{{$link}}">
                                                <span class="nav-text base-font">Day</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-12" style="position: relative;">
                                        <div id="charts_widget_1_chart" style="min-height: 365px;">
                                            <div id="apexchartse0lp32wl"
                                                 class="apexcharts-canvas apexchartse0lp32wl apexcharts-theme-light"
                                                 style="width: 853px; height: 350px;">
                                                <svg id="SvgjsSvg2614" width="853" height="350"
                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                     class="apexcharts-svg apexcharts-zoomable"
                                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                     style="background: transparent;">
                                                    <g id="SvgjsG2616" class="apexcharts-inner apexcharts-graphical"
                                                       transform="translate(68.245, 30)">
                                                        <defs id="SvgjsDefs2615">
                                                            <linearGradient id="SvgjsLinearGradient2621" x1="0" y1="0"
                                                                            x2="0" y2="1">
                                                                <stop id="SvgjsStop2622" stop-opacity="0.4"
                                                                      stop-color="rgba(216,227,240,0.4)"
                                                                      offset="0"></stop>
                                                                <stop id="SvgjsStop2623" stop-opacity="0.5"
                                                                      stop-color="rgba(190,209,230,0.5)"
                                                                      offset="1"></stop>
                                                                <stop id="SvgjsStop2624" stop-opacity="0.5"
                                                                      stop-color="rgba(190,209,230,0.5)"
                                                                      offset="1"></stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMaske0lp32wl">
                                                                <rect id="SvgjsRect2634" width="803.75" height="288.2"
                                                                      x="-22.994999999999997" y="0" rx="0" ry="0"
                                                                      opacity="1" stroke-width="0" stroke="none"
                                                                      stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaske0lp32wl"></clipPath>
                                                            <clipPath id="nonForecastMaske0lp32wl"></clipPath>
                                                            <clipPath id="gridRectMarkerMaske0lp32wl">
                                                                <rect id="SvgjsRect2635" width="761.76" height="292.2"
                                                                      x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                      stroke-width="0" stroke="none"
                                                                      stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <rect id="SvgjsRect2625" width="22.732799999999997"
                                                              height="288.2" x="0" y="0" rx="0" ry="0" opacity="1"
                                                              stroke-width="0" stroke-dasharray="3"
                                                              fill="url(#SvgjsLinearGradient2621)"
                                                              class="apexcharts-xcrosshairs" y2="288.2" filter="none"
                                                              fill-opacity="0.9"></rect>
                                                        <g id="SvgjsG2653" class="apexcharts-xaxis"
                                                           transform="translate(0, 0)">
                                                            <g id="SvgjsG2654" class="apexcharts-xaxis-texts-g"
                                                               transform="translate(0, -4)">
                                                                <text id="SvgjsText2656"
                                                                      font-family="Helvetica, Arial, sans-serif" x="0"
                                                                      y="317.2" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="600" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2657">Jan '11</tspan>
                                                                    <title>Jan '11</title></text>
                                                                <text id="SvgjsText2659"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="151.552" y="317.2" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2660">02 Jan</tspan>
                                                                    <title>02 Jan</title></text>
                                                                <text id="SvgjsText2662"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="303.104" y="317.2" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2663">03 Jan</tspan>
                                                                    <title>03 Jan</title></text>
                                                                <text id="SvgjsText2665"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="454.65599999999995" y="317.2"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2666">04 Jan</tspan>
                                                                    <title>04 Jan</title></text>
                                                                <text id="SvgjsText2668"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="606.208" y="317.2" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2669">05 Jan</tspan>
                                                                    <title>05 Jan</title></text>
                                                                <text id="SvgjsText2671"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="757.76" y="317.2" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2672">06 Jan</tspan>
                                                                    <title>06 Jan</title></text>
                                                                <text id="SvgjsText2674"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="909.312" y="317.2" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2675"></tspan>
                                                                    <title></title></text>
                                                            </g>
                                                            <line id="SvgjsLine2676" x1="-20.994999999999997" y1="289.2"
                                                                  x2="778.755" y2="289.2" stroke="#e0e0e0"
                                                                  stroke-dasharray="0" stroke-width="1"></line>
                                                        </g>
                                                        <g id="SvgjsG2693" class="apexcharts-grid">
                                                            <g id="SvgjsG2694" class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine2702" x1="-20.994999999999997" y1="0"
                                                                      x2="778.755" y2="0" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2703" x1="-20.994999999999997"
                                                                      y1="48.03333333333333" x2="778.755"
                                                                      y2="48.03333333333333" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2704" x1="-20.994999999999997"
                                                                      y1="96.06666666666666" x2="778.755"
                                                                      y2="96.06666666666666" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2705" x1="-20.994999999999997"
                                                                      y1="144.1" x2="778.755" y2="144.1"
                                                                      stroke="#f7f7f7" stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2706" x1="-20.994999999999997"
                                                                      y1="192.13333333333333" x2="778.755"
                                                                      y2="192.13333333333333" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2707" x1="-20.994999999999997"
                                                                      y1="240.16666666666666" x2="778.755"
                                                                      y2="240.16666666666666" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2708" x1="-20.994999999999997"
                                                                      y1="288.2" x2="778.755" y2="288.2"
                                                                      stroke="#f7f7f7" stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2695"
                                                               class="apexcharts-gridlines-vertical"></g>
                                                            <line id="SvgjsLine2696" x1="0" y1="289.2" x2="0" y2="295.2"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2697" x1="151.552" y1="289.2"
                                                                  x2="151.552" y2="295.2" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2698" x1="303.104" y1="289.2"
                                                                  x2="303.104" y2="295.2" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2699" x1="454.65599999999995" y1="289.2"
                                                                  x2="454.65599999999995" y2="295.2" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2700" x1="606.208" y1="289.2"
                                                                  x2="606.208" y2="295.2" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2701" x1="757.76" y1="289.2" x2="757.76"
                                                                  y2="295.2" stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2710" x1="0" y1="288.2" x2="757.76"
                                                                  y2="288.2" stroke="transparent"
                                                                  stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine2709" x1="0" y1="1" x2="0" y2="288.2"
                                                                  stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG2636"
                                                           class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG2637" class="apexcharts-series"
                                                               seriesName="PRODUCTxA" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2639"
                                                                      d="M -11.366399999999999 144.1L -11.366399999999999 105.67333333333333Q -11.366399999999999 105.67333333333333 -11.366399999999999 105.67333333333333L 11.366399999999999 105.67333333333333Q 11.366399999999999 105.67333333333333 11.366399999999999 105.67333333333333L 11.366399999999999 105.67333333333333L 11.366399999999999 144.1L 11.366399999999999 144.1z"
                                                                      fill="rgba(242,66,109,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="0"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M -11.366399999999999 144.1L -11.366399999999999 105.67333333333333Q -11.366399999999999 105.67333333333333 -11.366399999999999 105.67333333333333L 11.366399999999999 105.67333333333333Q 11.366399999999999 105.67333333333333 11.366399999999999 105.67333333333333L 11.366399999999999 105.67333333333333L 11.366399999999999 144.1L 11.366399999999999 144.1z"
                                                                      pathFrom="M -11.366399999999999 144.1L -11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L -11.366399999999999 144.1"
                                                                      cy="105.67333333333333" cx="11.366399999999999"
                                                                      j="0" val="24" barHeight="38.42666666666666"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2640"
                                                                      d="M 140.1856 144.1L 140.1856 40.02777777777777Q 140.1856 40.02777777777777 140.1856 40.02777777777777L 162.9184 40.02777777777777Q 162.9184 40.02777777777777 162.9184 40.02777777777777L 162.9184 40.02777777777777L 162.9184 144.1L 162.9184 144.1z"
                                                                      fill="rgba(242,66,109,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="0"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 140.1856 144.1L 140.1856 40.02777777777777Q 140.1856 40.02777777777777 140.1856 40.02777777777777L 162.9184 40.02777777777777Q 162.9184 40.02777777777777 162.9184 40.02777777777777L 162.9184 40.02777777777777L 162.9184 144.1L 162.9184 144.1z"
                                                                      pathFrom="M 140.1856 144.1L 140.1856 144.1L 162.9184 144.1L 162.9184 144.1L 162.9184 144.1L 162.9184 144.1L 162.9184 144.1L 140.1856 144.1"
                                                                      cy="40.02777777777777" cx="162.9184" j="1"
                                                                      val="65" barHeight="104.07222222222222"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2641"
                                                                      d="M 291.7376 144.1L 291.7376 94.46555555555555Q 291.7376 94.46555555555555 291.7376 94.46555555555555L 314.4704 94.46555555555555Q 314.4704 94.46555555555555 314.4704 94.46555555555555L 314.4704 94.46555555555555L 314.4704 144.1L 314.4704 144.1z"
                                                                      fill="rgba(242,66,109,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="0"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 291.7376 144.1L 291.7376 94.46555555555555Q 291.7376 94.46555555555555 291.7376 94.46555555555555L 314.4704 94.46555555555555Q 314.4704 94.46555555555555 314.4704 94.46555555555555L 314.4704 94.46555555555555L 314.4704 144.1L 314.4704 144.1z"
                                                                      pathFrom="M 291.7376 144.1L 291.7376 144.1L 314.4704 144.1L 314.4704 144.1L 314.4704 144.1L 314.4704 144.1L 314.4704 144.1L 291.7376 144.1"
                                                                      cy="94.46555555555555" cx="314.4703999999999"
                                                                      j="2" val="31" barHeight="49.63444444444444"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2642"
                                                                      d="M 443.2896 144.1L 443.2896 84.85888888888888Q 443.2896 84.85888888888888 443.2896 84.85888888888888L 466.0224 84.85888888888888Q 466.0224 84.85888888888888 466.0224 84.85888888888888L 466.0224 84.85888888888888L 466.0224 144.1L 466.0224 144.1z"
                                                                      fill="rgba(242,66,109,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="0"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 443.2896 144.1L 443.2896 84.85888888888888Q 443.2896 84.85888888888888 443.2896 84.85888888888888L 466.0224 84.85888888888888Q 466.0224 84.85888888888888 466.0224 84.85888888888888L 466.0224 84.85888888888888L 466.0224 144.1L 466.0224 144.1z"
                                                                      pathFrom="M 443.2896 144.1L 443.2896 144.1L 466.0224 144.1L 466.0224 144.1L 466.0224 144.1L 466.0224 144.1L 466.0224 144.1L 443.2896 144.1"
                                                                      cy="84.85888888888888" cx="466.02239999999995"
                                                                      j="3" val="37" barHeight="59.24111111111111"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2643"
                                                                      d="M 594.8416 144.1L 594.8416 81.65666666666667Q 594.8416 81.65666666666667 594.8416 81.65666666666667L 617.5744 81.65666666666667Q 617.5744 81.65666666666667 617.5744 81.65666666666667L 617.5744 81.65666666666667L 617.5744 144.1L 617.5744 144.1z"
                                                                      fill="rgba(242,66,109,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="0"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 594.8416 144.1L 594.8416 81.65666666666667Q 594.8416 81.65666666666667 594.8416 81.65666666666667L 617.5744 81.65666666666667Q 617.5744 81.65666666666667 617.5744 81.65666666666667L 617.5744 81.65666666666667L 617.5744 144.1L 617.5744 144.1z"
                                                                      pathFrom="M 594.8416 144.1L 594.8416 144.1L 617.5744 144.1L 617.5744 144.1L 617.5744 144.1L 617.5744 144.1L 617.5744 144.1L 594.8416 144.1"
                                                                      cy="81.65666666666667" cx="617.5744" j="4"
                                                                      val="39" barHeight="62.44333333333333"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2644"
                                                                      d="M 746.3936 144.1L 746.3936 44.83111111111111Q 746.3936 44.83111111111111 746.3936 44.83111111111111L 769.1264 44.83111111111111Q 769.1264 44.83111111111111 769.1264 44.83111111111111L 769.1264 44.83111111111111L 769.1264 144.1L 769.1264 144.1z"
                                                                      fill="rgba(242,66,109,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="0"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 746.3936 144.1L 746.3936 44.83111111111111Q 746.3936 44.83111111111111 746.3936 44.83111111111111L 769.1264 44.83111111111111Q 769.1264 44.83111111111111 769.1264 44.83111111111111L 769.1264 44.83111111111111L 769.1264 144.1L 769.1264 144.1z"
                                                                      pathFrom="M 746.3936 144.1L 746.3936 144.1L 769.1264 144.1L 769.1264 144.1L 769.1264 144.1L 769.1264 144.1L 769.1264 144.1L 746.3936 144.1"
                                                                      cy="44.83111111111111" cx="769.1264" j="5"
                                                                      val="62" barHeight="99.26888888888888"
                                                                      barWidth="22.732799999999997"></path>
                                                            </g>
                                                            <g id="SvgjsG2645" class="apexcharts-series"
                                                               seriesName="PRODUCTxB" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath2647"
                                                                      d="M -11.366399999999999 144.1L -11.366399999999999 179.52666666666664Q -11.366399999999999 182.52666666666664 -8.366399999999999 182.52666666666664L 8.366399999999999 182.52666666666664Q 11.366399999999999 182.52666666666664 11.366399999999999 179.52666666666664L 11.366399999999999 179.52666666666664L 11.366399999999999 144.1L 11.366399999999999 144.1z"
                                                                      fill="rgba(77,124,255,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="1"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M -11.366399999999999 144.1L -11.366399999999999 179.52666666666664Q -11.366399999999999 182.52666666666664 -8.366399999999999 182.52666666666664L 8.366399999999999 182.52666666666664Q 11.366399999999999 182.52666666666664 11.366399999999999 179.52666666666664L 11.366399999999999 179.52666666666664L 11.366399999999999 144.1L 11.366399999999999 144.1z"
                                                                      pathFrom="M -11.366399999999999 144.1L -11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L 11.366399999999999 144.1L -11.366399999999999 144.1"
                                                                      cy="182.52666666666664" cx="11.366399999999999"
                                                                      j="0" val="-24" barHeight="-38.42666666666666"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2648"
                                                                      d="M 140.1856 144.1L 140.1856 245.17222222222222Q 140.1856 248.17222222222222 143.1856 248.17222222222222L 159.9184 248.17222222222222Q 162.9184 248.17222222222222 162.9184 245.17222222222222L 162.9184 245.17222222222222L 162.9184 144.1L 162.9184 144.1z"
                                                                      fill="rgba(77,124,255,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="1"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 140.1856 144.1L 140.1856 245.17222222222222Q 140.1856 248.17222222222222 143.1856 248.17222222222222L 159.9184 248.17222222222222Q 162.9184 248.17222222222222 162.9184 245.17222222222222L 162.9184 245.17222222222222L 162.9184 144.1L 162.9184 144.1z"
                                                                      pathFrom="M 140.1856 144.1L 140.1856 144.1L 162.9184 144.1L 162.9184 144.1L 162.9184 144.1L 162.9184 144.1L 162.9184 144.1L 140.1856 144.1"
                                                                      cy="248.17222222222222" cx="162.9184" j="1"
                                                                      val="-65" barHeight="-104.07222222222222"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2649"
                                                                      d="M 291.7376 144.1L 291.7376 190.73444444444442Q 291.7376 193.73444444444442 294.7376 193.73444444444442L 311.4704 193.73444444444442Q 314.4704 193.73444444444442 314.4704 190.73444444444442L 314.4704 190.73444444444442L 314.4704 144.1L 314.4704 144.1z"
                                                                      fill="rgba(77,124,255,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="1"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 291.7376 144.1L 291.7376 190.73444444444442Q 291.7376 193.73444444444442 294.7376 193.73444444444442L 311.4704 193.73444444444442Q 314.4704 193.73444444444442 314.4704 190.73444444444442L 314.4704 190.73444444444442L 314.4704 144.1L 314.4704 144.1z"
                                                                      pathFrom="M 291.7376 144.1L 291.7376 144.1L 314.4704 144.1L 314.4704 144.1L 314.4704 144.1L 314.4704 144.1L 314.4704 144.1L 291.7376 144.1"
                                                                      cy="193.73444444444442" cx="314.4703999999999"
                                                                      j="2" val="-31" barHeight="-49.63444444444444"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2650"
                                                                      d="M 443.2896 144.1L 443.2896 200.3411111111111Q 443.2896 203.3411111111111 446.2896 203.3411111111111L 463.0224 203.3411111111111Q 466.0224 203.3411111111111 466.0224 200.3411111111111L 466.0224 200.3411111111111L 466.0224 144.1L 466.0224 144.1z"
                                                                      fill="rgba(77,124,255,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="1"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 443.2896 144.1L 443.2896 200.3411111111111Q 443.2896 203.3411111111111 446.2896 203.3411111111111L 463.0224 203.3411111111111Q 466.0224 203.3411111111111 466.0224 200.3411111111111L 466.0224 200.3411111111111L 466.0224 144.1L 466.0224 144.1z"
                                                                      pathFrom="M 443.2896 144.1L 443.2896 144.1L 466.0224 144.1L 466.0224 144.1L 466.0224 144.1L 466.0224 144.1L 466.0224 144.1L 443.2896 144.1"
                                                                      cy="203.3411111111111" cx="466.02239999999995"
                                                                      j="3" val="-37" barHeight="-59.24111111111111"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2651"
                                                                      d="M 594.8416 144.1L 594.8416 203.54333333333332Q 594.8416 206.54333333333332 597.8416 206.54333333333332L 614.5744 206.54333333333332Q 617.5744 206.54333333333332 617.5744 203.54333333333332L 617.5744 203.54333333333332L 617.5744 144.1L 617.5744 144.1z"
                                                                      fill="rgba(77,124,255,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="1"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 594.8416 144.1L 594.8416 203.54333333333332Q 594.8416 206.54333333333332 597.8416 206.54333333333332L 614.5744 206.54333333333332Q 617.5744 206.54333333333332 617.5744 203.54333333333332L 617.5744 203.54333333333332L 617.5744 144.1L 617.5744 144.1z"
                                                                      pathFrom="M 594.8416 144.1L 594.8416 144.1L 617.5744 144.1L 617.5744 144.1L 617.5744 144.1L 617.5744 144.1L 617.5744 144.1L 594.8416 144.1"
                                                                      cy="206.54333333333332" cx="617.5744" j="4"
                                                                      val="-39" barHeight="-62.44333333333333"
                                                                      barWidth="22.732799999999997"></path>
                                                                <path id="SvgjsPath2652"
                                                                      d="M 746.3936 144.1L 746.3936 240.36888888888888Q 746.3936 243.36888888888888 749.3936 243.36888888888888L 766.1264 243.36888888888888Q 769.1264 243.36888888888888 769.1264 240.36888888888888L 769.1264 240.36888888888888L 769.1264 144.1L 769.1264 144.1z"
                                                                      fill="rgba(77,124,255,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="round"
                                                                      stroke-width="0" stroke-dasharray="0"
                                                                      class="apexcharts-bar-area" index="1"
                                                                      clip-path="url(#gridRectMaske0lp32wl)"
                                                                      pathTo="M 746.3936 144.1L 746.3936 240.36888888888888Q 746.3936 243.36888888888888 749.3936 243.36888888888888L 766.1264 243.36888888888888Q 769.1264 243.36888888888888 769.1264 240.36888888888888L 769.1264 240.36888888888888L 769.1264 144.1L 769.1264 144.1z"
                                                                      pathFrom="M 746.3936 144.1L 746.3936 144.1L 769.1264 144.1L 769.1264 144.1L 769.1264 144.1L 769.1264 144.1L 769.1264 144.1L 746.3936 144.1"
                                                                      cy="243.36888888888888" cx="769.1264" j="5"
                                                                      val="-62" barHeight="-99.26888888888888"
                                                                      barWidth="22.732799999999997"></path>
                                                            </g>
                                                            <g id="SvgjsG2638" class="apexcharts-datalabels"
                                                               data:realIndex="0"></g>
                                                            <g id="SvgjsG2646" class="apexcharts-datalabels"
                                                               data:realIndex="1"></g>
                                                        </g>
                                                        <line id="SvgjsLine2711" x1="-20.994999999999997" y1="0"
                                                              x2="778.755" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                              stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2712" x1="-20.994999999999997" y1="0"
                                                              x2="778.755" y2="0" stroke-dasharray="0" stroke-width="0"
                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2713" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2714" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2715" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect2716" width="0" height="0" x="0" y="0" rx="0"
                                                              ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fefefe"
                                                              class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect2717" width="0" height="0" x="0" y="0" rx="0"
                                                              ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fefefe"
                                                              class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <g id="SvgjsG2677" class="apexcharts-yaxis" rel="0"
                                                       transform="translate(13.25, 0)">
                                                        <g id="SvgjsG2678" class="apexcharts-yaxis-texts-g">
                                                            <text id="SvgjsText2679"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="31.6" text-anchor="end" dominant-baseline="auto"
                                                                  font-size="11px" font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2680">90</tspan>
                                                                <title>90</title></text>
                                                            <text id="SvgjsText2681"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="79.63333333333333" text-anchor="end"
                                                                  dominant-baseline="auto" font-size="11px"
                                                                  font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2682">60</tspan>
                                                                <title>60</title></text>
                                                            <text id="SvgjsText2683"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="127.66666666666666" text-anchor="end"
                                                                  dominant-baseline="auto" font-size="11px"
                                                                  font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2684">30</tspan>
                                                                <title>30</title></text>
                                                            <text id="SvgjsText2685"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="175.7" text-anchor="end" dominant-baseline="auto"
                                                                  font-size="11px" font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2686">0</tspan>
                                                                <title>0</title></text>
                                                            <text id="SvgjsText2687"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="223.73333333333332" text-anchor="end"
                                                                  dominant-baseline="auto" font-size="11px"
                                                                  font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2688">-30</tspan>
                                                                <title>-30</title></text>
                                                            <text id="SvgjsText2689"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="271.76666666666665" text-anchor="end"
                                                                  dominant-baseline="auto" font-size="11px"
                                                                  font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2690">-60</tspan>
                                                                <title>-60</title></text>
                                                            <text id="SvgjsText2691"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="319.79999999999995" text-anchor="end"
                                                                  dominant-baseline="auto" font-size="11px"
                                                                  font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2692">-90</tspan>
                                                                <title>-90</title></text>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2617" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(242, 66, 109);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(77, 124, 255);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 874px; height: 366px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column">
                                        <div class="flex-grow-1 bg-primary p-30 flex-grow-1 bg-img"
                                             style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url('/assets/images/svg-icon/color-svg/custom-15.svg')">
                                            <h4 class="fw-500">User Confidence</h4>
                                            <p class="my-10">
                                                Boost marketing &amp; sales through product confidence.
                                            </p>
                                            <a href="{{$link}}" class="btn btn-warning py-2 px-6">Learn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Profit
                                </h4>
                                <div class="box-controls pull-right">
                                    <ul class="nav nav-pills nav-pills-sm" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab"
                                               href="{{$link}}">
                                                <span class="nav-text base-font">Month</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab"
                                               href="{{$link}}">
                                                <span class="nav-text base-font">Week</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 b-0 active" data-bs-toggle="tab"
                                               href="{{$link}}">
                                                <span class="nav-text base-font">Day</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-12" style="position: relative;">
                                        <div id="charts_widget_2_chart" style="min-height: 365px;">
                                            <div id="apexchartsca9seevj"
                                                 class="apexcharts-canvas apexchartsca9seevj apexcharts-theme-light"
                                                 style="width: 853px; height: 350px;">
                                                <svg id="SvgjsSvg2718" width="853" height="350"
                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                     style="background: transparent;">
                                                    <g id="SvgjsG2720" class="apexcharts-inner apexcharts-graphical"
                                                       transform="translate(47.2353515625, 30)">
                                                        <defs id="SvgjsDefs2719">
                                                            <clipPath id="gridRectMaskca9seevj">
                                                                <rect id="SvgjsRect2726" width="802.7646484375"
                                                                      height="285.348" x="-3.5" y="-1.5" rx="0" ry="0"
                                                                      opacity="1" stroke-width="0" stroke="none"
                                                                      stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskca9seevj"></clipPath>
                                                            <clipPath id="nonForecastMaskca9seevj"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskca9seevj">
                                                                <rect id="SvgjsRect2727" width="819.7646484375"
                                                                      height="306.348" x="-12" y="-12" rx="0" ry="0"
                                                                      opacity="1" stroke-width="0" stroke="none"
                                                                      stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient2751" x1="0" y1="0"
                                                                            x2="0" y2="1">
                                                                <stop id="SvgjsStop2752" stop-opacity="0.01"
                                                                      stop-color="rgba(81,206,138,0.01)"
                                                                      offset="0"></stop>
                                                                <stop id="SvgjsStop2753" stop-opacity="1"
                                                                      stop-color="rgba(255,255,255,1)"
                                                                      offset="0.9"></stop>
                                                                <stop id="SvgjsStop2754" stop-opacity="1"
                                                                      stop-color="rgba(255,255,255,1)"
                                                                      offset="1"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line id="SvgjsLine2725" x1="264.7548828125" y1="0"
                                                              x2="264.7548828125" y2="282.348" stroke="#b6b6b6"
                                                              stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                              x="264.7548828125" y="0" width="1" height="282.348"
                                                              fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                              stroke-width="1"></line>
                                                        <g id="SvgjsG2757" class="apexcharts-xaxis"
                                                           transform="translate(0, 0)">
                                                            <g id="SvgjsG2758" class="apexcharts-xaxis-texts-g"
                                                               transform="translate(0, -4)">
                                                                <text id="SvgjsText2760"
                                                                      font-family="Helvetica, Arial, sans-serif" x="0"
                                                                      y="311.348" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2761">Jan</tspan>
                                                                    <title>Jan</title></text>
                                                                <text id="SvgjsText2763"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="88.41829427083334" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2764">Feb</tspan>
                                                                    <title>Feb</title></text>
                                                                <text id="SvgjsText2766"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="176.83658854166666" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2767">Mar</tspan>
                                                                    <title>Mar</title></text>
                                                                <text id="SvgjsText2769"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="265.25488281249994" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2770">Apr</tspan>
                                                                    <title>Apr</title></text>
                                                                <text id="SvgjsText2772"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="353.67317708333326" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2773">May</tspan>
                                                                    <title>May</title></text>
                                                                <text id="SvgjsText2775"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="442.0914713541666" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2776">Jun</tspan>
                                                                    <title>Jun</title></text>
                                                                <text id="SvgjsText2778"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="530.509765625" y="311.348" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="12px"
                                                                      font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2779">Jul</tspan>
                                                                    <title>Jul</title></text>
                                                                <text id="SvgjsText2781"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="618.9280598958334" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2782">Aug</tspan>
                                                                    <title>Aug</title></text>
                                                                <text id="SvgjsText2784"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="707.3463541666667" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2785">Sep</tspan>
                                                                    <title>Sep</title></text>
                                                                <text id="SvgjsText2787"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="795.7646484375001" y="311.348"
                                                                      text-anchor="middle" dominant-baseline="auto"
                                                                      font-size="12px" font-weight="400" fill="#bac0c7"
                                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2788">Oct</tspan>
                                                                    <title>Oct</title></text>
                                                            </g>
                                                            <line id="SvgjsLine2789" x1="0" y1="283.348"
                                                                  x2="795.7646484375" y2="283.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0" stroke-width="1"></line>
                                                        </g>
                                                        <g id="SvgjsG2802" class="apexcharts-grid">
                                                            <g id="SvgjsG2803" class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine2815" x1="0" y1="0"
                                                                      x2="795.7646484375" y2="0" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2816" x1="0" y1="70.587"
                                                                      x2="795.7646484375" y2="70.587" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2817" x1="0" y1="141.174"
                                                                      x2="795.7646484375" y2="141.174" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2818" x1="0" y1="211.76100000000002"
                                                                      x2="795.7646484375" y2="211.76100000000002"
                                                                      stroke="#f7f7f7" stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2819" x1="0" y1="282.348"
                                                                      x2="795.7646484375" y2="282.348" stroke="#f7f7f7"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2804"
                                                               class="apexcharts-gridlines-vertical"></g>
                                                            <line id="SvgjsLine2805" x1="0" y1="283.348" x2="0"
                                                                  y2="289.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2806" x1="88.41829427083333" y1="283.348"
                                                                  x2="88.41829427083333" y2="289.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2807" x1="176.83658854166666"
                                                                  y1="283.348" x2="176.83658854166666" y2="289.348"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2808" x1="265.2548828125" y1="283.348"
                                                                  x2="265.2548828125" y2="289.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2809" x1="353.6731770833333" y1="283.348"
                                                                  x2="353.6731770833333" y2="289.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2810" x1="442.09147135416663"
                                                                  y1="283.348" x2="442.09147135416663" y2="289.348"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2811" x1="530.509765625" y1="283.348"
                                                                  x2="530.509765625" y2="289.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2812" x1="618.9280598958334" y1="283.348"
                                                                  x2="618.9280598958334" y2="289.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2813" x1="707.3463541666667" y1="283.348"
                                                                  x2="707.3463541666667" y2="289.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine2814" x1="795.7646484375001" y1="283.348"
                                                                  x2="795.7646484375001" y2="289.348" stroke="#e0e0e0"
                                                                  stroke-dasharray="0"
                                                                  class="apexcharts-xaxis-tick"></line>
                                                            <rect id="SvgjsRect2820" width="795.7646484375"
                                                                  height="70.587" x="0" y="0" rx="0" ry="0" opacity="0"
                                                                  stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                  fill="transparent"
                                                                  clip-path="url(#gridRectMaskca9seevj)"
                                                                  class="apexcharts-grid-row"></rect>
                                                            <rect id="SvgjsRect2821" width="795.7646484375"
                                                                  height="70.587" x="0" y="70.587" rx="0" ry="0"
                                                                  opacity="0" stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0" fill="transparent"
                                                                  clip-path="url(#gridRectMaskca9seevj)"
                                                                  class="apexcharts-grid-row"></rect>
                                                            <rect id="SvgjsRect2822" width="795.7646484375"
                                                                  height="70.587" x="0" y="141.174" rx="0" ry="0"
                                                                  opacity="0" stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0" fill="transparent"
                                                                  clip-path="url(#gridRectMaskca9seevj)"
                                                                  class="apexcharts-grid-row"></rect>
                                                            <rect id="SvgjsRect2823" width="795.7646484375"
                                                                  height="70.587" x="0" y="211.76100000000002" rx="0"
                                                                  ry="0" opacity="0" stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0" fill="transparent"
                                                                  clip-path="url(#gridRectMaskca9seevj)"
                                                                  class="apexcharts-grid-row"></rect>
                                                            <line id="SvgjsLine2825" x1="0" y1="282.348"
                                                                  x2="795.7646484375" y2="282.348" stroke="transparent"
                                                                  stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine2824" x1="0" y1="1" x2="0" y2="282.348"
                                                                  stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG2728"
                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2729" class="apexcharts-series"
                                                               seriesName="Profit" data:longestSeries="true" rel="1"
                                                               data:realIndex="0">
                                                                <path id="SvgjsPath2755"
                                                                      d="M 0 282.348L 0 282.348C 30.94640299479166 282.348 57.47189127604167 172.93815 88.41829427083333 172.93815C 119.36469726562498 172.93815 145.890185546875 91.76310000000001 176.83658854166666 91.76310000000001C 207.78299153645833 91.76310000000001 234.30847981770833 148.2327 265.2548828125 148.2327C 296.20128580729164 148.2327 322.7267740885417 84.70439999999999 353.6731770833333 84.70439999999999C 384.619580078125 84.70439999999999 411.145068359375 197.6436 442.0914713541667 197.6436C 473.0378743489583 197.6436 499.56336263020836 52.94024999999999 530.509765625 52.94024999999999C 561.4561686197917 52.94024999999999 587.9816569010417 123.52725000000001 618.9280598958334 123.52725000000001C 649.874462890625 123.52725000000001 676.399951171875 151.76205000000002 707.3463541666666 151.76205000000002C 738.2927571614583 151.76205000000002 764.8182454427083 144.70335 795.7646484375 144.70335C 795.7646484375 144.70335 795.7646484375 144.70335 795.7646484375 282.348M 795.7646484375 144.70335z"
                                                                      fill="url(#SvgjsLinearGradient2751)"
                                                                      fill-opacity="1" stroke-opacity="1"
                                                                      stroke-linecap="butt" stroke-width="0"
                                                                      stroke-dasharray="0" class="apexcharts-area"
                                                                      index="0" clip-path="url(#gridRectMaskca9seevj)"
                                                                      pathTo="M 0 282.348L 0 282.348C 30.94640299479166 282.348 57.47189127604167 172.93815 88.41829427083333 172.93815C 119.36469726562498 172.93815 145.890185546875 91.76310000000001 176.83658854166666 91.76310000000001C 207.78299153645833 91.76310000000001 234.30847981770833 148.2327 265.2548828125 148.2327C 296.20128580729164 148.2327 322.7267740885417 84.70439999999999 353.6731770833333 84.70439999999999C 384.619580078125 84.70439999999999 411.145068359375 197.6436 442.0914713541667 197.6436C 473.0378743489583 197.6436 499.56336263020836 52.94024999999999 530.509765625 52.94024999999999C 561.4561686197917 52.94024999999999 587.9816569010417 123.52725000000001 618.9280598958334 123.52725000000001C 649.874462890625 123.52725000000001 676.399951171875 151.76205000000002 707.3463541666666 151.76205000000002C 738.2927571614583 151.76205000000002 764.8182454427083 144.70335 795.7646484375 144.70335C 795.7646484375 144.70335 795.7646484375 144.70335 795.7646484375 282.348M 795.7646484375 144.70335z"
                                                                      pathFrom="M -1 282.348L -1 282.348L 88.41829427083333 282.348L 176.83658854166666 282.348L 265.2548828125 282.348L 353.6731770833333 282.348L 442.0914713541667 282.348L 530.509765625 282.348L 618.9280598958334 282.348L 707.3463541666666 282.348L 795.7646484375 282.348"></path>
                                                                <path id="SvgjsPath2756"
                                                                      d="M 0 282.348C 30.94640299479166 282.348 57.47189127604167 172.93815 88.41829427083333 172.93815C 119.36469726562498 172.93815 145.890185546875 91.76310000000001 176.83658854166666 91.76310000000001C 207.78299153645833 91.76310000000001 234.30847981770833 148.2327 265.2548828125 148.2327C 296.20128580729164 148.2327 322.7267740885417 84.70439999999999 353.6731770833333 84.70439999999999C 384.619580078125 84.70439999999999 411.145068359375 197.6436 442.0914713541667 197.6436C 473.0378743489583 197.6436 499.56336263020836 52.94024999999999 530.509765625 52.94024999999999C 561.4561686197917 52.94024999999999 587.9816569010417 123.52725000000001 618.9280598958334 123.52725000000001C 649.874462890625 123.52725000000001 676.399951171875 151.76205000000002 707.3463541666666 151.76205000000002C 738.2927571614583 151.76205000000002 764.8182454427083 144.70335 795.7646484375 144.70335"
                                                                      fill="none" fill-opacity="1" stroke="#51ce8a"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="3" stroke-dasharray="0"
                                                                      class="apexcharts-area" index="0"
                                                                      clip-path="url(#gridRectMaskca9seevj)"
                                                                      pathTo="M 0 282.348C 30.94640299479166 282.348 57.47189127604167 172.93815 88.41829427083333 172.93815C 119.36469726562498 172.93815 145.890185546875 91.76310000000001 176.83658854166666 91.76310000000001C 207.78299153645833 91.76310000000001 234.30847981770833 148.2327 265.2548828125 148.2327C 296.20128580729164 148.2327 322.7267740885417 84.70439999999999 353.6731770833333 84.70439999999999C 384.619580078125 84.70439999999999 411.145068359375 197.6436 442.0914713541667 197.6436C 473.0378743489583 197.6436 499.56336263020836 52.94024999999999 530.509765625 52.94024999999999C 561.4561686197917 52.94024999999999 587.9816569010417 123.52725000000001 618.9280598958334 123.52725000000001C 649.874462890625 123.52725000000001 676.399951171875 151.76205000000002 707.3463541666666 151.76205000000002C 738.2927571614583 151.76205000000002 764.8182454427083 144.70335 795.7646484375 144.70335"
                                                                      pathFrom="M -1 282.348L -1 282.348L 88.41829427083333 282.348L 176.83658854166666 282.348L 265.2548828125 282.348L 353.6731770833333 282.348L 442.0914713541667 282.348L 530.509765625 282.348L 618.9280598958334 282.348L 707.3463541666666 282.348L 795.7646484375 282.348"></path>
                                                                <g id="SvgjsG2730"
                                                                   class="apexcharts-series-markers-wrap"
                                                                   data:realIndex="0">
                                                                    <g id="SvgjsG2732" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2733" r="5" cx="0"
                                                                                cy="282.348"
                                                                                class="apexcharts-marker no-pointer-events wr6qc8md1"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="0" j="0"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                        <circle id="SvgjsCircle2734" r="5"
                                                                                cx="88.41829427083333" cy="172.93815"
                                                                                class="apexcharts-marker no-pointer-events wi1csfxhx"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="1" j="1"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2735" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2736" r="5"
                                                                                cx="176.83658854166666"
                                                                                cy="91.76310000000001"
                                                                                class="apexcharts-marker no-pointer-events wovvqe6ee"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="2" j="2"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2737" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2738" r="5"
                                                                                cx="265.2548828125" cy="148.2327"
                                                                                class="apexcharts-marker no-pointer-events wdlhnppki"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="3" j="3"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2739" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2740" r="5"
                                                                                cx="353.6731770833333"
                                                                                cy="84.70439999999999"
                                                                                class="apexcharts-marker no-pointer-events wxvrgrdx9"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="4" j="4"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2741" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2742" r="5"
                                                                                cx="442.0914713541667" cy="197.6436"
                                                                                class="apexcharts-marker no-pointer-events w4b5d5aea"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="5" j="5"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2743" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2744" r="5"
                                                                                cx="530.509765625"
                                                                                cy="52.94024999999999"
                                                                                class="apexcharts-marker no-pointer-events wquin0e5q"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="6" j="6"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2745" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2746" r="5"
                                                                                cx="618.9280598958334"
                                                                                cy="123.52725000000001"
                                                                                class="apexcharts-marker no-pointer-events wr1th0xoik"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="7" j="7"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2747" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2748" r="5"
                                                                                cx="707.3463541666666"
                                                                                cy="151.76205000000002"
                                                                                class="apexcharts-marker no-pointer-events wj3tk2oot"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="8" j="8"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG2749" class="apexcharts-series-markers"
                                                                       clip-path="url(#gridRectMarkerMaskca9seevj)">
                                                                        <circle id="SvgjsCircle2750" r="5"
                                                                                cx="795.7646484375" cy="144.70335"
                                                                                class="apexcharts-marker no-pointer-events w7cuibdqlf"
                                                                                stroke="#ffffff" fill="#51ce8a"
                                                                                fill-opacity="1" stroke-width="3"
                                                                                stroke-opacity="0.9" rel="9" j="9"
                                                                                index="0"
                                                                                default-marker-size="5"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2731" class="apexcharts-datalabels"
                                                               data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2826" x1="0" y1="0" x2="795.7646484375"
                                                              y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                              stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2827" x1="0" y1="0" x2="795.7646484375"
                                                              y2="0" stroke-dasharray="0" stroke-width="0"
                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2828" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2829" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2830" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect2724" width="0" height="0" x="0" y="0" rx="0"
                                                          ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG2790" class="apexcharts-yaxis" rel="0"
                                                       transform="translate(17.2353515625, 0)">
                                                        <g id="SvgjsG2791" class="apexcharts-yaxis-texts-g">
                                                            <text id="SvgjsText2792"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="31.4" text-anchor="end" dominant-baseline="auto"
                                                                  font-size="11px" font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2793">80K</tspan>
                                                                <title>80K</title></text>
                                                            <text id="SvgjsText2794"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="101.98700000000001" text-anchor="end"
                                                                  dominant-baseline="auto" font-size="11px"
                                                                  font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2795">60K</tspan>
                                                                <title>60K</title></text>
                                                            <text id="SvgjsText2796"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="172.574" text-anchor="end" dominant-baseline="auto"
                                                                  font-size="11px" font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2797">40K</tspan>
                                                                <title>40K</title></text>
                                                            <text id="SvgjsText2798"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="243.16100000000003" text-anchor="end"
                                                                  dominant-baseline="auto" font-size="11px"
                                                                  font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2799">20K</tspan>
                                                                <title>20K</title></text>
                                                            <text id="SvgjsText2800"
                                                                  font-family="Helvetica, Arial, sans-serif" x="20"
                                                                  y="313.748" text-anchor="end" dominant-baseline="auto"
                                                                  font-size="11px" font-weight="400" fill="#bac0c7"
                                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2801">0K</tspan>
                                                                <title>0K</title></text>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2721" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                                     style="left: 325.49px; top: 152.233px;">
                                                    <div class="apexcharts-tooltip-title"
                                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        Apr
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                         style="order: 1; display: flex;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(81, 206, 138);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Profit: </span><span
                                                                    class="apexcharts-tooltip-text-y-value">38K</span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                                    style="left: 290.045px; top: 314.348px;">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 21.9009px;">
                                                        Apr
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                                    <div class="apexcharts-menu-icon" title="Menu">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                            <path
                                                                d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="apexcharts-menu">
                                                        <div class="apexcharts-menu-item exportSVG"
                                                             title="Download SVG">Download SVG
                                                        </div>
                                                        <div class="apexcharts-menu-item exportPNG"
                                                             title="Download PNG">Download PNG
                                                        </div>
                                                        <div class="apexcharts-menu-item exportCSV"
                                                             title="Download CSV">Download CSV
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 874px; height: 366px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-lg-flex bg-info p-30">
                                            <div class="d-flex align-items-start me-15 mb-lg-0 mb-30">
                                                <div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
                                                    <span class="icon-Library fs-18 text-success"><span
                                                            class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="{{$link}}"
                                                       class="text-white hover-primary fs-16">$800</a>
                                                    <span class="text-white-70">Duis faucibus</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start me-15 mb-lg-0 mb-30">
                                                <div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
                                                    <span class="icon-Write fs-18 text-warning"><span
                                                            class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="{{$link}}" class="text-white hover-danger fs-16">$400</a>
                                                    <span class="text-white-70">Sed quis</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start me-15 mb-lg-0 mb-30">
                                                <div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
                                                    <span class="icon-Group-chat fs-18 text-primary"><span
                                                            class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="{{$link}}"
                                                       class="text-white hover-success fs-16">$900</a>
                                                    <span class="text-white-70">Phasellus</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-lg-0 mb-30">
                                                <div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
                                                    <span class="icon-Attachment1 fs-18 text-info"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="{{$link}}" class="text-white hover-info fs-16">$80</a>
                                                    <span class="text-white-70">Aliquam</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="text-muted fw-normal mt-0 text-muted" title="Campaign Sent">Campaign
                                            Sent</h5>
                                        <h3 class="my-2 py-1">9,184</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end" style="position: relative;">
                                            <div id="campaign-sent-chart" style="min-height: 70px;">
                                                <div id="apexchartsqgwtxfh2l"
                                                     class="apexcharts-canvas apexchartsqgwtxfh2l apexcharts-theme-light"
                                                     style="width: 100px; height: 70px;">
                                                    <svg id="SvgjsSvg2831" width="100" height="70"
                                                         xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                         style="background: transparent;">
                                                        <g id="SvgjsG2833" class="apexcharts-inner apexcharts-graphical"
                                                           transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs2832">
                                                                <linearGradient id="SvgjsLinearGradient2837" x1="0"
                                                                                y1="0" x2="0" y2="1">
                                                                    <stop id="SvgjsStop2838" stop-opacity="0.4"
                                                                          stop-color="rgba(216,227,240,0.4)"
                                                                          offset="0"></stop>
                                                                    <stop id="SvgjsStop2839" stop-opacity="0.5"
                                                                          stop-color="rgba(190,209,230,0.5)"
                                                                          offset="1"></stop>
                                                                    <stop id="SvgjsStop2840" stop-opacity="0.5"
                                                                          stop-color="rgba(190,209,230,0.5)"
                                                                          offset="1"></stop>
                                                                </linearGradient>
                                                                <clipPath id="gridRectMaskqgwtxfh2l">
                                                                    <rect id="SvgjsRect2843" width="104" height="70"
                                                                          x="-2" y="0" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskqgwtxfh2l"></clipPath>
                                                                <clipPath id="nonForecastMaskqgwtxfh2l"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskqgwtxfh2l">
                                                                    <rect id="SvgjsRect2844" width="104" height="74"
                                                                          x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <line id="SvgjsLine2842" x1="0" y1="0" x2="0" y2="70"
                                                                  stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                                  x="0" y="0" width="1" height="70"
                                                                  fill="url(#SvgjsLinearGradient2837)" filter="none"
                                                                  fill-opacity="0.9" stroke-width="0"></line>
                                                            <g id="SvgjsG2871" class="apexcharts-xaxis"
                                                               transform="translate(0, 0)">
                                                                <g id="SvgjsG2872" class="apexcharts-xaxis-texts-g"
                                                                   transform="translate(0, 2.75)"></g>
                                                            </g>
                                                            <g id="SvgjsG2885" class="apexcharts-grid">
                                                                <g id="SvgjsG2886"
                                                                   class="apexcharts-gridlines-horizontal"
                                                                   style="display: none;">
                                                                    <line id="SvgjsLine2888" x1="0" y1="0" x2="100"
                                                                          y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2889" x1="0" y1="14" x2="100"
                                                                          y2="14" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2890" x1="0" y1="28" x2="100"
                                                                          y2="28" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2891" x1="0" y1="42" x2="100"
                                                                          y2="42" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2892" x1="0" y1="56" x2="100"
                                                                          y2="56" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2893" x1="0" y1="70" x2="100"
                                                                          y2="70" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2887" class="apexcharts-gridlines-vertical"
                                                                   style="display: none;"></g>
                                                                <line id="SvgjsLine2895" x1="0" y1="70" x2="100" y2="70"
                                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine2894" x1="0" y1="1" x2="0" y2="70"
                                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG2845"
                                                               class="apexcharts-bar-series apexcharts-plot-series">
                                                                <g id="SvgjsG2846" class="apexcharts-series" rel="1"
                                                                   seriesName="seriesx1" data:realIndex="0">
                                                                    <path id="SvgjsPath2850"
                                                                          d="M 0.9090909090909092 70L 0.9090909090909092 52.5Q 0.9090909090909092 52.5 0.9090909090909092 52.5L 8.181818181818183 52.5Q 8.181818181818183 52.5 8.181818181818183 52.5L 8.181818181818183 52.5L 8.181818181818183 70L 8.181818181818183 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 0.9090909090909092 70L 0.9090909090909092 52.5Q 0.9090909090909092 52.5 0.9090909090909092 52.5L 8.181818181818183 52.5Q 8.181818181818183 52.5 8.181818181818183 52.5L 8.181818181818183 52.5L 8.181818181818183 70L 8.181818181818183 70z"
                                                                          pathFrom="M 0.9090909090909092 70L 0.9090909090909092 70L 8.181818181818183 70L 8.181818181818183 70L 8.181818181818183 70L 8.181818181818183 70L 8.181818181818183 70L 0.9090909090909092 70"
                                                                          cy="52.5" cx="10" j="0" val="25"
                                                                          barHeight="17.5"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2852"
                                                                          d="M 10 70L 10 23.800000000000004Q 10 23.800000000000004 10 23.800000000000004L 17.272727272727273 23.800000000000004Q 17.272727272727273 23.800000000000004 17.272727272727273 23.800000000000004L 17.272727272727273 23.800000000000004L 17.272727272727273 70L 17.272727272727273 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 10 70L 10 23.800000000000004Q 10 23.800000000000004 10 23.800000000000004L 17.272727272727273 23.800000000000004Q 17.272727272727273 23.800000000000004 17.272727272727273 23.800000000000004L 17.272727272727273 23.800000000000004L 17.272727272727273 70L 17.272727272727273 70z"
                                                                          pathFrom="M 10 70L 10 70L 17.272727272727273 70L 17.272727272727273 70L 17.272727272727273 70L 17.272727272727273 70L 17.272727272727273 70L 10 70"
                                                                          cy="23.800000000000004"
                                                                          cx="19.090909090909093" j="1" val="66"
                                                                          barHeight="46.199999999999996"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2854"
                                                                          d="M 19.090909090909093 70L 19.090909090909093 41.3Q 19.090909090909093 41.3 19.090909090909093 41.3L 26.363636363636367 41.3Q 26.363636363636367 41.3 26.363636363636367 41.3L 26.363636363636367 41.3L 26.363636363636367 70L 26.363636363636367 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 19.090909090909093 70L 19.090909090909093 41.3Q 19.090909090909093 41.3 19.090909090909093 41.3L 26.363636363636367 41.3Q 26.363636363636367 41.3 26.363636363636367 41.3L 26.363636363636367 41.3L 26.363636363636367 70L 26.363636363636367 70z"
                                                                          pathFrom="M 19.090909090909093 70L 19.090909090909093 70L 26.363636363636367 70L 26.363636363636367 70L 26.363636363636367 70L 26.363636363636367 70L 26.363636363636367 70L 19.090909090909093 70"
                                                                          cy="41.3" cx="28.181818181818187" j="2"
                                                                          val="41" barHeight="28.7"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2856"
                                                                          d="M 28.181818181818187 70L 28.181818181818187 7.700000000000003Q 28.181818181818187 7.700000000000003 28.181818181818187 7.700000000000003L 35.45454545454546 7.700000000000003Q 35.45454545454546 7.700000000000003 35.45454545454546 7.700000000000003L 35.45454545454546 7.700000000000003L 35.45454545454546 70L 35.45454545454546 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 28.181818181818187 70L 28.181818181818187 7.700000000000003Q 28.181818181818187 7.700000000000003 28.181818181818187 7.700000000000003L 35.45454545454546 7.700000000000003Q 35.45454545454546 7.700000000000003 35.45454545454546 7.700000000000003L 35.45454545454546 7.700000000000003L 35.45454545454546 70L 35.45454545454546 70z"
                                                                          pathFrom="M 28.181818181818187 70L 28.181818181818187 70L 35.45454545454546 70L 35.45454545454546 70L 35.45454545454546 70L 35.45454545454546 70L 35.45454545454546 70L 28.181818181818187 70"
                                                                          cy="7.700000000000003" cx="37.27272727272728"
                                                                          j="3" val="89" barHeight="62.3"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2858"
                                                                          d="M 37.27272727272728 70L 37.27272727272728 25.9Q 37.27272727272728 25.9 37.27272727272728 25.9L 44.545454545454554 25.9Q 44.545454545454554 25.9 44.545454545454554 25.9L 44.545454545454554 25.9L 44.545454545454554 70L 44.545454545454554 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 37.27272727272728 70L 37.27272727272728 25.9Q 37.27272727272728 25.9 37.27272727272728 25.9L 44.545454545454554 25.9Q 44.545454545454554 25.9 44.545454545454554 25.9L 44.545454545454554 25.9L 44.545454545454554 70L 44.545454545454554 70z"
                                                                          pathFrom="M 37.27272727272728 70L 37.27272727272728 70L 44.545454545454554 70L 44.545454545454554 70L 44.545454545454554 70L 44.545454545454554 70L 44.545454545454554 70L 37.27272727272728 70"
                                                                          cy="25.9" cx="46.363636363636374" j="4"
                                                                          val="63" barHeight="44.1"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2860"
                                                                          d="M 46.363636363636374 70L 46.363636363636374 52.5Q 46.363636363636374 52.5 46.363636363636374 52.5L 53.63636363636365 52.5Q 53.63636363636365 52.5 53.63636363636365 52.5L 53.63636363636365 52.5L 53.63636363636365 70L 53.63636363636365 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 46.363636363636374 70L 46.363636363636374 52.5Q 46.363636363636374 52.5 46.363636363636374 52.5L 53.63636363636365 52.5Q 53.63636363636365 52.5 53.63636363636365 52.5L 53.63636363636365 52.5L 53.63636363636365 70L 53.63636363636365 70z"
                                                                          pathFrom="M 46.363636363636374 70L 46.363636363636374 70L 53.63636363636365 70L 53.63636363636365 70L 53.63636363636365 70L 53.63636363636365 70L 53.63636363636365 70L 46.363636363636374 70"
                                                                          cy="52.5" cx="55.45454545454547" j="5"
                                                                          val="25" barHeight="17.5"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2862"
                                                                          d="M 55.45454545454547 70L 55.45454545454547 39.2Q 55.45454545454547 39.2 55.45454545454547 39.2L 62.72727272727274 39.2Q 62.72727272727274 39.2 62.72727272727274 39.2L 62.72727272727274 39.2L 62.72727272727274 70L 62.72727272727274 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 55.45454545454547 70L 55.45454545454547 39.2Q 55.45454545454547 39.2 55.45454545454547 39.2L 62.72727272727274 39.2Q 62.72727272727274 39.2 62.72727272727274 39.2L 62.72727272727274 39.2L 62.72727272727274 70L 62.72727272727274 70z"
                                                                          pathFrom="M 55.45454545454547 70L 55.45454545454547 70L 62.72727272727274 70L 62.72727272727274 70L 62.72727272727274 70L 62.72727272727274 70L 62.72727272727274 70L 55.45454545454547 70"
                                                                          cy="39.2" cx="64.54545454545456" j="6"
                                                                          val="44" barHeight="30.8"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2864"
                                                                          d="M 64.54545454545456 70L 64.54545454545456 61.6Q 64.54545454545456 61.6 64.54545454545456 61.6L 71.81818181818184 61.6Q 71.81818181818184 61.6 71.81818181818184 61.6L 71.81818181818184 61.6L 71.81818181818184 70L 71.81818181818184 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 64.54545454545456 70L 64.54545454545456 61.6Q 64.54545454545456 61.6 64.54545454545456 61.6L 71.81818181818184 61.6Q 71.81818181818184 61.6 71.81818181818184 61.6L 71.81818181818184 61.6L 71.81818181818184 70L 71.81818181818184 70z"
                                                                          pathFrom="M 64.54545454545456 70L 64.54545454545456 70L 71.81818181818184 70L 71.81818181818184 70L 71.81818181818184 70L 71.81818181818184 70L 71.81818181818184 70L 64.54545454545456 70"
                                                                          cy="61.6" cx="73.63636363636365" j="7"
                                                                          val="12" barHeight="8.4"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2866"
                                                                          d="M 73.63636363636365 70L 73.63636363636365 44.8Q 73.63636363636365 44.8 73.63636363636365 44.8L 80.90909090909093 44.8Q 80.90909090909093 44.8 80.90909090909093 44.8L 80.90909090909093 44.8L 80.90909090909093 70L 80.90909090909093 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 73.63636363636365 70L 73.63636363636365 44.8Q 73.63636363636365 44.8 73.63636363636365 44.8L 80.90909090909093 44.8Q 80.90909090909093 44.8 80.90909090909093 44.8L 80.90909090909093 44.8L 80.90909090909093 70L 80.90909090909093 70z"
                                                                          pathFrom="M 73.63636363636365 70L 73.63636363636365 70L 80.90909090909093 70L 80.90909090909093 70L 80.90909090909093 70L 80.90909090909093 70L 80.90909090909093 70L 73.63636363636365 70"
                                                                          cy="44.8" cx="82.72727272727275" j="8"
                                                                          val="36" barHeight="25.2"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2868"
                                                                          d="M 82.72727272727275 70L 82.72727272727275 63.7Q 82.72727272727275 63.7 82.72727272727275 63.7L 90.00000000000003 63.7Q 90.00000000000003 63.7 90.00000000000003 63.7L 90.00000000000003 63.7L 90.00000000000003 70L 90.00000000000003 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 82.72727272727275 70L 82.72727272727275 63.7Q 82.72727272727275 63.7 82.72727272727275 63.7L 90.00000000000003 63.7Q 90.00000000000003 63.7 90.00000000000003 63.7L 90.00000000000003 63.7L 90.00000000000003 70L 90.00000000000003 70z"
                                                                          pathFrom="M 82.72727272727275 70L 82.72727272727275 70L 90.00000000000003 70L 90.00000000000003 70L 90.00000000000003 70L 90.00000000000003 70L 90.00000000000003 70L 82.72727272727275 70"
                                                                          cy="63.7" cx="91.81818181818184" j="9" val="9"
                                                                          barHeight="6.3"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <path id="SvgjsPath2870"
                                                                          d="M 91.81818181818184 70L 91.81818181818184 32.2Q 91.81818181818184 32.2 91.81818181818184 32.2L 99.09090909090912 32.2Q 99.09090909090912 32.2 99.09090909090912 32.2L 99.09090909090912 32.2L 99.09090909090912 70L 99.09090909090912 70z"
                                                                          fill="rgba(77,124,255,0.85)" fill-opacity="1"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="0" stroke-dasharray="0"
                                                                          class="apexcharts-bar-area" index="0"
                                                                          clip-path="url(#gridRectMaskqgwtxfh2l)"
                                                                          pathTo="M 91.81818181818184 70L 91.81818181818184 32.2Q 91.81818181818184 32.2 91.81818181818184 32.2L 99.09090909090912 32.2Q 99.09090909090912 32.2 99.09090909090912 32.2L 99.09090909090912 32.2L 99.09090909090912 70L 99.09090909090912 70z"
                                                                          pathFrom="M 91.81818181818184 70L 91.81818181818184 70L 99.09090909090912 70L 99.09090909090912 70L 99.09090909090912 70L 99.09090909090912 70L 99.09090909090912 70L 91.81818181818184 70"
                                                                          cy="32.2" cx="100.90909090909093" j="10"
                                                                          val="54" barHeight="37.8"
                                                                          barWidth="7.272727272727273"></path>
                                                                    <g id="SvgjsG2848"
                                                                       class="apexcharts-bar-goals-markers"
                                                                       style="pointer-events: none">
                                                                        <g id="SvgjsG2849"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2851"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2853"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2855"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2857"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2859"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2861"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2863"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2865"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2867"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                        <g id="SvgjsG2869"
                                                                           className="apexcharts-bar-goals-groups"></g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2847" class="apexcharts-datalabels"
                                                                   data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2896" x1="0" y1="0" x2="100" y2="0"
                                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                  class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2897" x1="0" y1="0" x2="100" y2="0"
                                                                  stroke-dasharray="0" stroke-width="0"
                                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2898" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG2899" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG2900" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                        <rect id="SvgjsRect2841" width="0" height="0" x="0" y="0" rx="0"
                                                              ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2884" class="apexcharts-yaxis" rel="0"
                                                           transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2834" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 35px;"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                  style="background-color: rgb(77, 124, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 189px; height: 71px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="text-muted fw-normal mt-0 text-muted" title="New Leads">New
                                            Leads</h5>
                                        <h3 class="my-2 py-1">3,254</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.38%</span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end" style="position: relative;">
                                            <div id="new-leads-chart" style="min-height: 70px;">
                                                <div id="apexchartse0fofpfm"
                                                     class="apexcharts-canvas apexchartse0fofpfm apexcharts-theme-light"
                                                     style="width: 100px; height: 70px;">
                                                    <svg id="SvgjsSvg2902" width="100" height="70"
                                                         xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                         style="background: transparent;">
                                                        <g id="SvgjsG2904" class="apexcharts-inner apexcharts-graphical"
                                                           transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs2903">
                                                                <clipPath id="gridRectMaske0fofpfm">
                                                                    <rect id="SvgjsRect2910" width="106" height="72"
                                                                          x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaske0fofpfm"></clipPath>
                                                                <clipPath id="nonForecastMaske0fofpfm"></clipPath>
                                                                <clipPath id="gridRectMarkerMaske0fofpfm">
                                                                    <rect id="SvgjsRect2911" width="104" height="74"
                                                                          x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <line id="SvgjsLine2909" x1="0" y1="0" x2="0" y2="70"
                                                                  stroke="#b6b6b6" stroke-dasharray="3"
                                                                  class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                                  height="70" fill="#b1b9c4" filter="none"
                                                                  fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG2917" class="apexcharts-xaxis"
                                                               transform="translate(0, 0)">
                                                                <g id="SvgjsG2918" class="apexcharts-xaxis-texts-g"
                                                                   transform="translate(0, 2.75)"></g>
                                                            </g>
                                                            <g id="SvgjsG2931" class="apexcharts-grid">
                                                                <g id="SvgjsG2932"
                                                                   class="apexcharts-gridlines-horizontal"
                                                                   style="display: none;">
                                                                    <line id="SvgjsLine2934" x1="0" y1="0" x2="100"
                                                                          y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2935" x1="0" y1="14" x2="100"
                                                                          y2="14" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2936" x1="0" y1="28" x2="100"
                                                                          y2="28" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2937" x1="0" y1="42" x2="100"
                                                                          y2="42" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2938" x1="0" y1="56" x2="100"
                                                                          y2="56" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2939" x1="0" y1="70" x2="100"
                                                                          y2="70" stroke="#e0e0e0" stroke-dasharray="0"
                                                                          class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2933" class="apexcharts-gridlines-vertical"
                                                                   style="display: none;"></g>
                                                                <line id="SvgjsLine2941" x1="0" y1="70" x2="100" y2="70"
                                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine2940" x1="0" y1="1" x2="0" y2="70"
                                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG2912"
                                                               class="apexcharts-line-series apexcharts-plot-series">
                                                                <g id="SvgjsG2913" class="apexcharts-series"
                                                                   seriesName="seriesx1" data:longestSeries="true"
                                                                   rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath2916"
                                                                          d="M 0 52.5C 3.5 52.5 6.5 23.800000000000004 10 23.800000000000004C 13.5 23.800000000000004 16.5 41.3 20 41.3C 23.5 41.3 26.5 7.700000000000003 30 7.700000000000003C 33.5 7.700000000000003 36.5 25.9 40 25.9C 43.5 25.9 46.5 52.5 50 52.5C 53.5 52.5 56.5 39.2 60 39.2C 63.5 39.2 66.5 61.6 70 61.6C 73.5 61.6 76.5 44.8 80 44.8C 83.5 44.8 86.5 63.7 90 63.7C 93.5 63.7 96.5 32.2 100 32.2"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(81,206,138,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="2" stroke-dasharray="0"
                                                                          class="apexcharts-line" index="0"
                                                                          clip-path="url(#gridRectMaske0fofpfm)"
                                                                          pathTo="M 0 52.5C 3.5 52.5 6.5 23.800000000000004 10 23.800000000000004C 13.5 23.800000000000004 16.5 41.3 20 41.3C 23.5 41.3 26.5 7.700000000000003 30 7.700000000000003C 33.5 7.700000000000003 36.5 25.9 40 25.9C 43.5 25.9 46.5 52.5 50 52.5C 53.5 52.5 56.5 39.2 60 39.2C 63.5 39.2 66.5 61.6 70 61.6C 73.5 61.6 76.5 44.8 80 44.8C 83.5 44.8 86.5 63.7 90 63.7C 93.5 63.7 96.5 32.2 100 32.2"
                                                                          pathFrom="M -1 70L -1 70L 10 70L 20 70L 30 70L 40 70L 50 70L 60 70L 70 70L 80 70L 90 70L 100 70"></path>
                                                                    <g id="SvgjsG2914"
                                                                       class="apexcharts-series-markers-wrap"
                                                                       data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2947" r="0" cx="0"
                                                                                    cy="0"
                                                                                    class="apexcharts-marker w9xjdxlmcl no-pointer-events"
                                                                                    stroke="#ffffff" fill="#51ce8a"
                                                                                    fill-opacity="1" stroke-width="2"
                                                                                    stroke-opacity="0.9"
                                                                                    default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2915" class="apexcharts-datalabels"
                                                                   data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2942" x1="0" y1="0" x2="100" y2="0"
                                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                  class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2943" x1="0" y1="0" x2="100" y2="0"
                                                                  stroke-dasharray="0" stroke-width="0"
                                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2944" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG2945" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG2946" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                        <rect id="SvgjsRect2908" width="0" height="0" x="0" y="0" rx="0"
                                                              ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2930" class="apexcharts-yaxis" rel="0"
                                                           transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2905" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 35px;"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                  style="background-color: rgb(81, 206, 138);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 189px; height: 71px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="text-muted fw-normal mt-0 text-muted" title="Deals">Deals</h5>
                                        <h3 class="my-2 py-1">861</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end" style="position: relative;">
                                            <div id="deals-chart" style="min-height: 78.95px;">
                                                <div id="apexcharts6nbj1b6ck"
                                                     class="apexcharts-canvas apexcharts6nbj1b6ck apexcharts-theme-light"
                                                     style="width: 80px; height: 78.95px;">
                                                    <svg id="SvgjsSvg2948" width="80" height="78.95"
                                                         xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                         style="background: transparent;">
                                                        <g id="SvgjsG2950" class="apexcharts-inner apexcharts-graphical"
                                                           transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs2949">
                                                                <clipPath id="gridRectMask6nbj1b6ck">
                                                                    <rect id="SvgjsRect2952" width="85" height="81"
                                                                          x="-2.5" y="-0.5" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask6nbj1b6ck"></clipPath>
                                                                <clipPath id="nonForecastMask6nbj1b6ck"></clipPath>
                                                                <clipPath id="gridRectMarkerMask6nbj1b6ck">
                                                                    <rect id="SvgjsRect2953" width="84" height="84"
                                                                          x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG2954" class="apexcharts-pie">
                                                                <g id="SvgjsG2955" transform="translate(0, 0) scale(1)">
                                                                    <g id="SvgjsG2956" class="apexcharts-slices">
                                                                        <g id="SvgjsG2957"
                                                                           class="apexcharts-series apexcharts-pie-series"
                                                                           seriesName="seriesx1" rel="1"
                                                                           data:realIndex="0">
                                                                            <path id="SvgjsPath2958"
                                                                                  d="M 40 1.9756097560975547 A 38.024390243902445 38.024390243902445 0 0 1 52.22253966847875 76.00644077763098 L 40 40 L 40 1.9756097560975547"
                                                                                  fill="rgba(77,124,255,1)"
                                                                                  fill-opacity="1" stroke-opacity="1"
                                                                                  stroke-linecap="butt" stroke-width="1"
                                                                                  stroke-dasharray="0"
                                                                                  class="apexcharts-pie-area apexcharts-pie-slice-0"
                                                                                  index="0" j="0" data:angle="161.25"
                                                                                  data:startAngle="0"
                                                                                  data:strokeWidth="1" data:value="43"
                                                                                  data:pathOrig="M 40 1.9756097560975547 A 38.024390243902445 38.024390243902445 0 0 1 52.22253966847875 76.00644077763098 L 40 40 L 40 1.9756097560975547"
                                                                                  stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG2959"
                                                                           class="apexcharts-series apexcharts-pie-series"
                                                                           seriesName="seriesx2" rel="2"
                                                                           data:realIndex="1">
                                                                            <path id="SvgjsPath2960"
                                                                                  d="M 52.22253966847875 76.00644077763098 A 38.024390243902445 38.024390243902445 0 0 1 2.7062377524722763 32.58180946285016 L 40 40 L 52.22253966847875 76.00644077763098"
                                                                                  fill="rgba(81,206,138,1)"
                                                                                  fill-opacity="1" stroke-opacity="1"
                                                                                  stroke-linecap="butt" stroke-width="1"
                                                                                  stroke-dasharray="0"
                                                                                  class="apexcharts-pie-area apexcharts-pie-slice-1"
                                                                                  index="0" j="1" data:angle="120"
                                                                                  data:startAngle="161.25"
                                                                                  data:strokeWidth="1" data:value="32"
                                                                                  data:pathOrig="M 52.22253966847875 76.00644077763098 A 38.024390243902445 38.024390243902445 0 0 1 2.7062377524722763 32.58180946285016 L 40 40 L 52.22253966847875 76.00644077763098"
                                                                                  stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG2961"
                                                                           class="apexcharts-series apexcharts-pie-series"
                                                                           seriesName="seriesx3" rel="3"
                                                                           data:realIndex="2">
                                                                            <path id="SvgjsPath2962"
                                                                                  d="M 2.7062377524722763 32.58180946285016 A 38.024390243902445 38.024390243902445 0 0 1 18.8747806517668 8.383874985861766 L 40 40 L 2.7062377524722763 32.58180946285016"
                                                                                  fill="rgba(115,58,235,1)"
                                                                                  fill-opacity="1" stroke-opacity="1"
                                                                                  stroke-linecap="butt" stroke-width="1"
                                                                                  stroke-dasharray="0"
                                                                                  class="apexcharts-pie-area apexcharts-pie-slice-2"
                                                                                  index="0" j="2" data:angle="45"
                                                                                  data:startAngle="281.25"
                                                                                  data:strokeWidth="1" data:value="12"
                                                                                  data:pathOrig="M 2.7062377524722763 32.58180946285016 A 38.024390243902445 38.024390243902445 0 0 1 18.8747806517668 8.383874985861766 L 40 40 L 2.7062377524722763 32.58180946285016"
                                                                                  stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG2963"
                                                                           class="apexcharts-series apexcharts-pie-series"
                                                                           seriesName="seriesx4" rel="4"
                                                                           data:realIndex="3">
                                                                            <path id="SvgjsPath2964"
                                                                                  d="M 18.8747806517668 8.383874985861766 A 38.024390243902445 38.024390243902445 0 0 1 39.993363491975494 1.9756103352421306 L 40 40 L 18.8747806517668 8.383874985861766"
                                                                                  fill="rgba(242,66,109,1)"
                                                                                  fill-opacity="1" stroke-opacity="1"
                                                                                  stroke-linecap="butt" stroke-width="1"
                                                                                  stroke-dasharray="0"
                                                                                  class="apexcharts-pie-area apexcharts-pie-slice-3"
                                                                                  index="0" j="3" data:angle="33.75"
                                                                                  data:startAngle="326.25"
                                                                                  data:strokeWidth="1" data:value="9"
                                                                                  data:pathOrig="M 18.8747806517668 8.383874985861766 A 38.024390243902445 38.024390243902445 0 0 1 39.993363491975494 1.9756103352421306 L 40 40 L 18.8747806517668 8.383874985861766"
                                                                                  stroke="#ffffff"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine2965" x1="0" y1="0" x2="80" y2="0"
                                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                  class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2966" x1="0" y1="0" x2="80" y2="0"
                                                                  stroke-dasharray="0" stroke-width="0"
                                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG2951" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                  style="background-color: rgb(77, 124, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                  style="background-color: rgb(81, 206, 138);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                  style="background-color: rgb(115, 58, 235);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group" style="order: 4;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                  style="background-color: rgb(242, 66, 109);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 189px; height: 80px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="text-muted fw-normal mt-0 text-muted" title="Booked Revenue">Booked
                                            Revenue</h5>
                                        <h3 class="my-2 py-1">$253k</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end" style="position: relative;">
                                            <div id="booked-revenue-chart" style="min-height: 81px;">
                                                <div id="apexchartsen243x9ml"
                                                     class="apexcharts-canvas apexchartsen243x9ml apexcharts-theme-light"
                                                     style="width: 80px; height: 81px;">
                                                    <svg id="SvgjsSvg2967" width="80" height="81"
                                                         xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                         style="background: transparent;">
                                                        <g id="SvgjsG2969" class="apexcharts-inner apexcharts-graphical"
                                                           transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs2968">
                                                                <clipPath id="gridRectMasken243x9ml">
                                                                    <rect id="SvgjsRect2971" width="86" height="82"
                                                                          x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMasken243x9ml"></clipPath>
                                                                <clipPath id="nonForecastMasken243x9ml"></clipPath>
                                                                <clipPath id="gridRectMarkerMasken243x9ml">
                                                                    <rect id="SvgjsRect2972" width="84" height="84"
                                                                          x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG2973" class="apexcharts-radialbar">
                                                                <g id="SvgjsG2974">
                                                                    <g id="SvgjsG2975" class="apexcharts-tracks">
                                                                        <g id="SvgjsG2976"
                                                                           class="apexcharts-radialbar-track apexcharts-track"
                                                                           rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0"
                                                                                  d="M 40 15.609756097560968 A 24.390243902439032 24.390243902439032 0 1 1 39.99574309940699 15.609756469045625"
                                                                                  fill="none" fill-opacity="1"
                                                                                  stroke="rgba(242,242,242,0.85)"
                                                                                  stroke-opacity="1"
                                                                                  stroke-linecap="butt"
                                                                                  stroke-width="9.463414634146343"
                                                                                  stroke-dasharray="0"
                                                                                  class="apexcharts-radialbar-area"
                                                                                  data:pathOrig="M 40 15.609756097560968 A 24.390243902439032 24.390243902439032 0 1 1 39.99574309940699 15.609756469045625"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG2978">
                                                                        <g id="SvgjsG2980"
                                                                           class="apexcharts-series apexcharts-radial-series"
                                                                           seriesName="seriesx1" rel="1"
                                                                           data:realIndex="0">
                                                                            <path id="SvgjsPath2981"
                                                                                  d="M 40 15.609756097560968 A 24.390243902439032 24.390243902439032 0 0 1 47.5369998628036 63.196500397442776"
                                                                                  fill="none" fill-opacity="0.85"
                                                                                  stroke="rgba(77,124,255,0.85)"
                                                                                  stroke-opacity="1"
                                                                                  stroke-linecap="butt"
                                                                                  stroke-width="9.756097560975611"
                                                                                  stroke-dasharray="0"
                                                                                  class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                  data:angle="162" data:value="45"
                                                                                  index="0" j="0"
                                                                                  data:pathOrig="M 40 15.609756097560968 A 24.390243902439032 24.390243902439032 0 0 1 47.5369998628036 63.196500397442776"></path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle2979"
                                                                                r="19.65853658536586" cx="40" cy="40"
                                                                                class="apexcharts-radialbar-hollow"
                                                                                fill="transparent"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine2982" x1="0" y1="0" x2="80" y2="0"
                                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                  class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2983" x1="0" y1="0" x2="80" y2="0"
                                                                  stroke-dasharray="0" stroke-width="0"
                                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG2970" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 189px; height: 82px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card widget-flat">
                            <div class="card-body" style="position: relative;">
                                <div class="float-end">
                                    <button type="button" class="btn btn-sm btn-primary-light">View</button>
                                </div>
                                <h6 class="text-muted text-uppercase mt-0" title="Revenue">Sales Summary</h6>
                                <h3 class="mb-4 mt-2">748</h3>
                                <div id="spark1" class="apex-charts mb-3" style="min-height: 100px;">
                                    <div id="apexchartsaj5ckp03f"
                                         class="apexcharts-canvas apexchartsaj5ckp03f apexcharts-theme-light"
                                         style="width: 395px; height: 100px;">
                                        <svg id="SvgjsSvg2985" width="395" height="100"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG2987" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 0)">
                                                <defs id="SvgjsDefs2986">
                                                    <clipPath id="gridRectMaskaj5ckp03f">
                                                        <rect id="SvgjsRect2992" width="403" height="104" x="-4" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskaj5ckp03f"></clipPath>
                                                    <clipPath id="nonForecastMaskaj5ckp03f"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskaj5ckp03f">
                                                        <rect id="SvgjsRect2993" width="399" height="104" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine2991" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="100" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG2999" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3000" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3012" class="apexcharts-grid">
                                                    <g id="SvgjsG3013" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3015" x1="0" y1="0" x2="395" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3016" x1="0" y1="14.285714285714286" x2="395"
                                                              y2="14.285714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3017" x1="0" y1="28.571428571428573" x2="395"
                                                              y2="28.571428571428573" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3018" x1="0" y1="42.85714285714286" x2="395"
                                                              y2="42.85714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3019" x1="0" y1="57.142857142857146" x2="395"
                                                              y2="57.142857142857146" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3020" x1="0" y1="71.42857142857143" x2="395"
                                                              y2="71.42857142857143" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3021" x1="0" y1="85.71428571428572" x2="395"
                                                              y2="85.71428571428572" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3022" x1="0" y1="100.00000000000001" x2="395"
                                                              y2="100.00000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3014" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3024" x1="0" y1="100" x2="395" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3023" x1="0" y1="1" x2="0" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG2994"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG2995" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2998"
                                                              d="M 0 64.28571428571428C 15.361111111111109 64.28571428571428 28.52777777777778 5.714285714285708 43.888888888888886 5.714285714285708C 59.24999999999999 5.714285714285708 72.41666666666666 41.42857142857142 87.77777777777777 41.42857142857142C 103.13888888888889 41.42857142857142 116.30555555555554 15.714285714285708 131.66666666666666 15.714285714285708C 147.02777777777777 15.714285714285708 160.19444444444443 64.28571428571428 175.55555555555554 64.28571428571428C 190.91666666666666 64.28571428571428 204.08333333333334 37.14285714285714 219.44444444444446 37.14285714285714C 234.80555555555554 37.14285714285714 247.97222222222223 82.85714285714286 263.3333333333333 82.85714285714286C 278.69444444444446 82.85714285714286 291.8611111111111 48.57142857142857 307.22222222222223 48.57142857142857C 322.5833333333333 48.57142857142857 335.75 87.14285714285714 351.1111111111111 87.14285714285714C 366.47222222222223 87.14285714285714 379.63888888888886 70 395 70"
                                                              fill="none" fill-opacity="1" stroke="rgba(77,124,255,1)"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                              stroke-dasharray="0" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMaskaj5ckp03f)"
                                                              pathTo="M 0 64.28571428571428C 15.361111111111109 64.28571428571428 28.52777777777778 5.714285714285708 43.888888888888886 5.714285714285708C 59.24999999999999 5.714285714285708 72.41666666666666 41.42857142857142 87.77777777777777 41.42857142857142C 103.13888888888889 41.42857142857142 116.30555555555554 15.714285714285708 131.66666666666666 15.714285714285708C 147.02777777777777 15.714285714285708 160.19444444444443 64.28571428571428 175.55555555555554 64.28571428571428C 190.91666666666666 64.28571428571428 204.08333333333334 37.14285714285714 219.44444444444446 37.14285714285714C 234.80555555555554 37.14285714285714 247.97222222222223 82.85714285714286 263.3333333333333 82.85714285714286C 278.69444444444446 82.85714285714286 291.8611111111111 48.57142857142857 307.22222222222223 48.57142857142857C 322.5833333333333 48.57142857142857 335.75 87.14285714285714 351.1111111111111 87.14285714285714C 366.47222222222223 87.14285714285714 379.63888888888886 70 395 70"
                                                              pathFrom="M -1 100L -1 100L 43.888888888888886 100L 87.77777777777777 100L 131.66666666666666 100L 175.55555555555554 100L 219.44444444444446 100L 263.3333333333333 100L 307.22222222222223 100L 351.1111111111111 100L 395 100"></path>
                                                        <g id="SvgjsG2996" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3030" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wzetosmad no-pointer-events"
                                                                        stroke="#ffffff" fill="#4d7cff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2997" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3025" x1="0" y1="0" x2="395" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3026" x1="0" y1="0" x2="395" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3027" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3028" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3029" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect2990" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3011" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2988" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 50px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(77, 124, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-6">
                                        <h6 class="text-muted d-block">Last Month</h6>
                                        <p class="fs-18 mb-0">412</p>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted d-block">Current Month</h6>
                                        <p class="fs-18 mb-0">235</p>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 435px; height: 278px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card widget-flat">
                            <div class="card-body" style="position: relative;">
                                <div class="float-end">
                                    <button type="button" class="btn btn-sm btn-primary-light">View</button>
                                </div>
                                <h6 class="text-muted text-uppercase mt-0" title="Revenue">Revenue</h6>
                                <h3 class="mb-4 mt-2">$4,745</h3>
                                <div id="spark2" class="apex-charts mb-3" style="min-height: 100px;">
                                    <div id="apexchartsj1ygt9qs"
                                         class="apexcharts-canvas apexchartsj1ygt9qs apexcharts-theme-light"
                                         style="width: 395px; height: 100px;">
                                        <svg id="SvgjsSvg3031" width="395" height="100"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3033" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(29.48148148148148, 0)">
                                                <defs id="SvgjsDefs3032">
                                                    <linearGradient id="SvgjsLinearGradient3036" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop3037" stop-opacity="0.4"
                                                              stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop3038" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3039" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskj1ygt9qs">
                                                        <rect id="SvgjsRect3041" width="402" height="103"
                                                              x="-28.98148148148148" y="-1.5" rx="0" ry="0" opacity="1"
                                                              stroke-width="0" stroke="none" stroke-dasharray="0"
                                                              fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskj1ygt9qs"></clipPath>
                                                    <clipPath id="nonForecastMaskj1ygt9qs"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskj1ygt9qs">
                                                        <rect id="SvgjsRect3042" width="348.03703703703707" height="104"
                                                              x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect3040" width="26.75843621399177" height="100" x="0"
                                                      y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke-dasharray="3" fill="url(#SvgjsLinearGradient3036)"
                                                      class="apexcharts-xcrosshairs" y2="100" filter="none"
                                                      fill-opacity="0.9"></rect>
                                                <g id="SvgjsG3067" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3068" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3076" class="apexcharts-grid">
                                                    <g id="SvgjsG3077" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3079" x1="-25.48148148148148" y1="0"
                                                              x2="369.51851851851853" y2="0" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3080" x1="-25.48148148148148" y1="25"
                                                              x2="369.51851851851853" y2="25" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3081" x1="-25.48148148148148" y1="50"
                                                              x2="369.51851851851853" y2="50" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3082" x1="-25.48148148148148" y1="75"
                                                              x2="369.51851851851853" y2="75" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3083" x1="-25.48148148148148" y1="100"
                                                              x2="369.51851851851853" y2="100" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3078" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3085" x1="0" y1="100" x2="344.03703703703707"
                                                          y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3084" x1="0" y1="1" x2="0" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3043" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG3044" class="apexcharts-series" rel="1"
                                                       seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath3048"
                                                              d="M -13.379218106995886 100L -13.379218106995886 85Q -13.379218106995886 85 -13.379218106995886 85L 10.379218106995886 85Q 10.379218106995886 85 10.379218106995886 85L 10.379218106995886 85L 10.379218106995886 100L 10.379218106995886 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M -13.379218106995886 100L -13.379218106995886 85Q -13.379218106995886 85 -13.379218106995886 85L 10.379218106995886 85Q 10.379218106995886 85 10.379218106995886 85L 10.379218106995886 85L 10.379218106995886 100L 10.379218106995886 100z"
                                                              pathFrom="M -13.379218106995886 100L -13.379218106995886 100L 10.379218106995886 100L 10.379218106995886 100L 10.379218106995886 100L 10.379218106995886 100L 10.379218106995886 100L -13.379218106995886 100"
                                                              cy="85" cx="11.879218106995886" j="0" val="12"
                                                              barHeight="15" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3050"
                                                              d="M 24.84711934156379 100L 24.84711934156379 82.5Q 24.84711934156379 82.5 24.84711934156379 82.5L 48.60555555555556 82.5Q 48.60555555555556 82.5 48.60555555555556 82.5L 48.60555555555556 82.5L 48.60555555555556 100L 48.60555555555556 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 24.84711934156379 100L 24.84711934156379 82.5Q 24.84711934156379 82.5 24.84711934156379 82.5L 48.60555555555556 82.5Q 48.60555555555556 82.5 48.60555555555556 82.5L 48.60555555555556 82.5L 48.60555555555556 100L 48.60555555555556 100z"
                                                              pathFrom="M 24.84711934156379 100L 24.84711934156379 100L 48.60555555555556 100L 48.60555555555556 100L 48.60555555555556 100L 48.60555555555556 100L 48.60555555555556 100L 24.84711934156379 100"
                                                              cy="82.5" cx="50.10555555555556" j="1" val="14"
                                                              barHeight="17.5" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3052"
                                                              d="M 63.073456790123466 100L 63.073456790123466 97.5Q 63.073456790123466 97.5 63.073456790123466 97.5L 86.83189300411524 97.5Q 86.83189300411524 97.5 86.83189300411524 97.5L 86.83189300411524 97.5L 86.83189300411524 100L 86.83189300411524 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 63.073456790123466 100L 63.073456790123466 97.5Q 63.073456790123466 97.5 63.073456790123466 97.5L 86.83189300411524 97.5Q 86.83189300411524 97.5 86.83189300411524 97.5L 86.83189300411524 97.5L 86.83189300411524 100L 86.83189300411524 100z"
                                                              pathFrom="M 63.073456790123466 100L 63.073456790123466 100L 86.83189300411524 100L 86.83189300411524 100L 86.83189300411524 100L 86.83189300411524 100L 86.83189300411524 100L 63.073456790123466 100"
                                                              cy="97.5" cx="88.33189300411524" j="2" val="2"
                                                              barHeight="2.5" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3054"
                                                              d="M 101.29979423868312 100L 101.29979423868312 41.25Q 101.29979423868312 41.25 101.29979423868312 41.25L 125.05823045267488 41.25Q 125.05823045267488 41.25 125.05823045267488 41.25L 125.05823045267488 41.25L 125.05823045267488 100L 125.05823045267488 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 101.29979423868312 100L 101.29979423868312 41.25Q 101.29979423868312 41.25 101.29979423868312 41.25L 125.05823045267488 41.25Q 125.05823045267488 41.25 125.05823045267488 41.25L 125.05823045267488 41.25L 125.05823045267488 100L 125.05823045267488 100z"
                                                              pathFrom="M 101.29979423868312 100L 101.29979423868312 100L 125.05823045267488 100L 125.05823045267488 100L 125.05823045267488 100L 125.05823045267488 100L 125.05823045267488 100L 101.29979423868312 100"
                                                              cy="41.25" cx="126.55823045267488" j="3" val="47"
                                                              barHeight="58.75" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3056"
                                                              d="M 139.5261316872428 100L 139.5261316872428 60Q 139.5261316872428 60 139.5261316872428 60L 163.2845679012346 60Q 163.2845679012346 60 163.2845679012346 60L 163.2845679012346 60L 163.2845679012346 100L 163.2845679012346 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 139.5261316872428 100L 139.5261316872428 60Q 139.5261316872428 60 139.5261316872428 60L 163.2845679012346 60Q 163.2845679012346 60 163.2845679012346 60L 163.2845679012346 60L 163.2845679012346 100L 163.2845679012346 100z"
                                                              pathFrom="M 139.5261316872428 100L 139.5261316872428 100L 163.2845679012346 100L 163.2845679012346 100L 163.2845679012346 100L 163.2845679012346 100L 163.2845679012346 100L 139.5261316872428 100"
                                                              cy="60" cx="164.7845679012346" j="4" val="32"
                                                              barHeight="40" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3058"
                                                              d="M 177.75246913580247 100L 177.75246913580247 45Q 177.75246913580247 45 177.75246913580247 45L 201.51090534979426 45Q 201.51090534979426 45 201.51090534979426 45L 201.51090534979426 45L 201.51090534979426 100L 201.51090534979426 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 177.75246913580247 100L 177.75246913580247 45Q 177.75246913580247 45 177.75246913580247 45L 201.51090534979426 45Q 201.51090534979426 45 201.51090534979426 45L 201.51090534979426 45L 201.51090534979426 100L 201.51090534979426 100z"
                                                              pathFrom="M 177.75246913580247 100L 177.75246913580247 100L 201.51090534979426 100L 201.51090534979426 100L 201.51090534979426 100L 201.51090534979426 100L 201.51090534979426 100L 177.75246913580247 100"
                                                              cy="45" cx="203.01090534979426" j="5" val="44"
                                                              barHeight="55" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3060"
                                                              d="M 215.97880658436213 100L 215.97880658436213 82.5Q 215.97880658436213 82.5 215.97880658436213 82.5L 239.73724279835392 82.5Q 239.73724279835392 82.5 239.73724279835392 82.5L 239.73724279835392 82.5L 239.73724279835392 100L 239.73724279835392 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 215.97880658436213 100L 215.97880658436213 82.5Q 215.97880658436213 82.5 215.97880658436213 82.5L 239.73724279835392 82.5Q 239.73724279835392 82.5 239.73724279835392 82.5L 239.73724279835392 82.5L 239.73724279835392 100L 239.73724279835392 100z"
                                                              pathFrom="M 215.97880658436213 100L 215.97880658436213 100L 239.73724279835392 100L 239.73724279835392 100L 239.73724279835392 100L 239.73724279835392 100L 239.73724279835392 100L 215.97880658436213 100"
                                                              cy="82.5" cx="241.23724279835392" j="6" val="14"
                                                              barHeight="17.5" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3062"
                                                              d="M 254.2051440329218 100L 254.2051440329218 31.25Q 254.2051440329218 31.25 254.2051440329218 31.25L 277.9635802469136 31.25Q 277.9635802469136 31.25 277.9635802469136 31.25L 277.9635802469136 31.25L 277.9635802469136 100L 277.9635802469136 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 254.2051440329218 100L 254.2051440329218 31.25Q 254.2051440329218 31.25 254.2051440329218 31.25L 277.9635802469136 31.25Q 277.9635802469136 31.25 277.9635802469136 31.25L 277.9635802469136 31.25L 277.9635802469136 100L 277.9635802469136 100z"
                                                              pathFrom="M 254.2051440329218 100L 254.2051440329218 100L 277.9635802469136 100L 277.9635802469136 100L 277.9635802469136 100L 277.9635802469136 100L 277.9635802469136 100L 254.2051440329218 100"
                                                              cy="31.25" cx="279.4635802469136" j="7" val="55"
                                                              barHeight="68.75" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3064"
                                                              d="M 292.4314814814815 100L 292.4314814814815 48.75Q 292.4314814814815 48.75 292.4314814814815 48.75L 316.1899176954733 48.75Q 316.1899176954733 48.75 316.1899176954733 48.75L 316.1899176954733 48.75L 316.1899176954733 100L 316.1899176954733 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 292.4314814814815 100L 292.4314814814815 48.75Q 292.4314814814815 48.75 292.4314814814815 48.75L 316.1899176954733 48.75Q 316.1899176954733 48.75 316.1899176954733 48.75L 316.1899176954733 48.75L 316.1899176954733 100L 316.1899176954733 100z"
                                                              pathFrom="M 292.4314814814815 100L 292.4314814814815 100L 316.1899176954733 100L 316.1899176954733 100L 316.1899176954733 100L 316.1899176954733 100L 316.1899176954733 100L 292.4314814814815 100"
                                                              cy="48.75" cx="317.6899176954733" j="8" val="41"
                                                              barHeight="51.25" barWidth="26.75843621399177"></path>
                                                        <path id="SvgjsPath3066"
                                                              d="M 330.6578189300412 100L 330.6578189300412 13.75Q 330.6578189300412 13.75 330.6578189300412 13.75L 354.41625514403296 13.75Q 354.41625514403296 13.75 354.41625514403296 13.75L 354.41625514403296 13.75L 354.41625514403296 100L 354.41625514403296 100z"
                                                              fill="rgba(115,58,235,1)" fill-opacity="1"
                                                              stroke="#733aeb" stroke-opacity="1" stroke-linecap="round"
                                                              stroke-width="3" stroke-dasharray="0"
                                                              class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskj1ygt9qs)"
                                                              pathTo="M 330.6578189300412 100L 330.6578189300412 13.75Q 330.6578189300412 13.75 330.6578189300412 13.75L 354.41625514403296 13.75Q 354.41625514403296 13.75 354.41625514403296 13.75L 354.41625514403296 13.75L 354.41625514403296 100L 354.41625514403296 100z"
                                                              pathFrom="M 330.6578189300412 100L 330.6578189300412 100L 354.41625514403296 100L 354.41625514403296 100L 354.41625514403296 100L 354.41625514403296 100L 354.41625514403296 100L 330.6578189300412 100"
                                                              cy="13.75" cx="355.91625514403296" j="9" val="69"
                                                              barHeight="86.25" barWidth="26.75843621399177"></path>
                                                        <g id="SvgjsG3046" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG3047"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3049"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3051"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3053"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3055"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3057"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3059"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3061"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3063"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3065"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3045" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3086" x1="-25.48148148148148" y1="0"
                                                      x2="369.51851851851853" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3087" x1="-25.48148148148148" y1="0"
                                                      x2="369.51851851851853" y2="0" stroke-dasharray="0"
                                                      stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3088" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3089" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3090" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG3075" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3034" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 50px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(115, 58, 235);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-6">
                                        <h6 class="text-muted d-block">Last Month</h6>
                                        <p class="fs-18 mb-0">$415.12</p>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted d-block">Current Month</h6>
                                        <p class="fs-18 mb-0">$125.2</p>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 435px; height: 278px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card widget-flat">
                            <div class="card-body" style="position: relative;">
                                <div class="float-end">
                                    <button type="button" class="btn btn-sm btn-primary-light">View</button>
                                </div>
                                <h6 class="text-muted text-uppercase mt-0" title="Revenue">Active Users</h6>
                                <h3 class="mb-4 mt-2">412</h3>
                                <div id="spark3" class="apex-charts mb-3" style="min-height: 100px;">
                                    <div id="apexchartscqxt69o9i"
                                         class="apexcharts-canvas apexchartscqxt69o9i apexcharts-theme-light"
                                         style="width: 395px; height: 100px;">
                                        <svg id="SvgjsSvg3103" width="395" height="100"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3105" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 0)">
                                                <defs id="SvgjsDefs3104">
                                                    <clipPath id="gridRectMaskcqxt69o9i">
                                                        <rect id="SvgjsRect3110" width="403" height="104" x="-4" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskcqxt69o9i"></clipPath>
                                                    <clipPath id="nonForecastMaskcqxt69o9i"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskcqxt69o9i">
                                                        <rect id="SvgjsRect3111" width="399" height="104" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine3109" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="100" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3117" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3118" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3130" class="apexcharts-grid">
                                                    <g id="SvgjsG3131" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3133" x1="0" y1="0" x2="395" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3134" x1="0" y1="25" x2="395" y2="25"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3135" x1="0" y1="50" x2="395" y2="50"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3136" x1="0" y1="75" x2="395" y2="75"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3137" x1="0" y1="100" x2="395" y2="100"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3132" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3139" x1="0" y1="100" x2="395" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3138" x1="0" y1="1" x2="0" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3112"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG3113" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3116"
                                                              d="M 0 41.25C 15.361111111111109 41.25 28.52777777777778 43.75 43.888888888888886 43.75C 59.24999999999999 43.75 72.41666666666666 7.5 87.77777777777777 7.5C 103.13888888888889 7.5 116.30555555555554 60 131.66666666666666 60C 147.02777777777777 60 160.19444444444443 30 175.55555555555554 30C 190.91666666666666 30 204.08333333333334 61.25 219.44444444444446 61.25C 234.80555555555554 61.25 247.97222222222223 45 263.3333333333333 45C 278.69444444444446 45 291.8611111111111 58.75 307.22222222222223 58.75C 322.5833333333333 58.75 335.75 43.75 351.1111111111111 43.75C 366.47222222222223 43.75 379.63888888888886 76.25 395 76.25"
                                                              fill="none" fill-opacity="1" stroke="rgba(242,66,109,1)"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                              stroke-dasharray="0" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMaskcqxt69o9i)"
                                                              pathTo="M 0 41.25C 15.361111111111109 41.25 28.52777777777778 43.75 43.888888888888886 43.75C 59.24999999999999 43.75 72.41666666666666 7.5 87.77777777777777 7.5C 103.13888888888889 7.5 116.30555555555554 60 131.66666666666666 60C 147.02777777777777 60 160.19444444444443 30 175.55555555555554 30C 190.91666666666666 30 204.08333333333334 61.25 219.44444444444446 61.25C 234.80555555555554 61.25 247.97222222222223 45 263.3333333333333 45C 278.69444444444446 45 291.8611111111111 58.75 307.22222222222223 58.75C 322.5833333333333 58.75 335.75 43.75 351.1111111111111 43.75C 366.47222222222223 43.75 379.63888888888886 76.25 395 76.25"
                                                              pathFrom="M -1 100L -1 100L 43.888888888888886 100L 87.77777777777777 100L 131.66666666666666 100L 175.55555555555554 100L 219.44444444444446 100L 263.3333333333333 100L 307.22222222222223 100L 351.1111111111111 100L 395 100"></path>
                                                        <g id="SvgjsG3114" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3145" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wd2ltc2yo no-pointer-events"
                                                                        stroke="#ffffff" fill="#f2426d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3115" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3140" x1="0" y1="0" x2="395" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3141" x1="0" y1="0" x2="395" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3142" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3143" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3144" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3108" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3129" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3106" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 50px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(242, 66, 109);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-6">
                                        <h6 class="text-muted  d-block">Last Month</h6>
                                        <p class="fs-18 mb-0 text-success">+23%</p>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted d-block">Current Month</h6>
                                        <p class="fs-18 mb-0 text-danger">-9.02%</p>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 435px; height: 278px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card widget-flat">
                            <div class="card-body" style="position: relative;">
                                <div class="float-end">
                                    <button type="button" class="btn btn-sm btn-primary-light">View</button>
                                </div>
                                <h6 class="text-muted text-uppercase mt-0" title="Revenue">Expense Summary</h6>
                                <h3 class="mb-4 mt-2">$7,412.1</h3>
                                <div id="spark4" class="apex-charts mb-3" style="min-height: 101px;">
                                    <div id="apexchartsv95xdbxa"
                                         class="apexcharts-canvas apexchartsv95xdbxa apexcharts-theme-light"
                                         style="width: 100px; height: 101px;">
                                        <svg id="SvgjsSvg3147" width="100" height="100.99999999999999"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3149" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 0)">
                                                <defs id="SvgjsDefs3148">
                                                    <clipPath id="gridRectMaskv95xdbxa">
                                                        <rect id="SvgjsRect3151" width="106" height="102" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskv95xdbxa"></clipPath>
                                                    <clipPath id="nonForecastMaskv95xdbxa"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskv95xdbxa">
                                                        <rect id="SvgjsRect3152" width="104" height="104" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG3153" class="apexcharts-radialbar">
                                                    <g id="SvgjsG3154">
                                                        <g id="SvgjsG3155" class="apexcharts-tracks">
                                                            <g id="SvgjsG3156"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                      d="M 50 12.914634146341463 A 37.08536585365854 37.08536585365854 0 1 1 49.993527382648324 12.91463471118388"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="butt"
                                                                      stroke-width="6.9161788617886195"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 50 12.914634146341463 A 37.08536585365854 37.08536585365854 0 1 1 49.993527382648324 12.91463471118388"></path>
                                                            </g>
                                                            <g id="SvgjsG3158"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="2">
                                                                <path id="apexcharts-radialbarTrack-1"
                                                                      d="M 50 21.044715447154474 A 28.955284552845526 28.955284552845526 0 1 1 49.99494634951266 21.044715888168675"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="butt"
                                                                      stroke-width="6.9161788617886195"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 50 21.044715447154474 A 28.955284552845526 28.955284552845526 0 1 1 49.99494634951266 21.044715888168675"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3160">
                                                            <g id="SvgjsG3162"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath3163"
                                                                      d="M 50 12.914634146341463 A 37.08536585365854 37.08536585365854 0 1 1 42.9237785982918 86.40400323005301"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(254,200,1,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="butt"
                                                                      stroke-width="7.130081300813009"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                      data:angle="191" data:value="53" index="0" j="0"
                                                                      data:pathOrig="M 50 12.914634146341463 A 37.08536585365854 37.08536585365854 0 1 1 42.9237785982918 86.40400323005301"></path>
                                                            </g>
                                                            <g id="SvgjsG3164"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="seriesx2" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath3165"
                                                                      d="M 50 21.044715447154474 A 28.955284552845526 28.955284552845526 0 1 1 24.675137504252376 64.03780050818968"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(115,58,235,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="butt"
                                                                      stroke-width="7.130081300813009"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-1"
                                                                      data:angle="241" data:value="67" index="0" j="1"
                                                                      data:pathOrig="M 50 21.044715447154474 A 28.955284552845526 28.955284552845526 0 1 1 24.675137504252376 64.03780050818968"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle3161" r="25.497195121951222" cx="50"
                                                                    cy="50" class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3166" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3167" x1="0" y1="0" x2="100" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG3150" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-6">
                                        <h6 class="text-muted d-block">Last Month</h6>
                                        <p class="text-muted fs-18 mb-0">$4512</p>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted d-block">Current Month</h6>
                                        <p class="text-muted fs-18 mb-0">$2356.8</p>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 435px; height: 279px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border bg-danger">
                                <h4 class="box-title text-white">Sales Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-danger-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body px-0 bg-danger rounded-0" style="position: relative;">
                                <div id="spark5" class="text-dark" style="min-height: 200px;">
                                    <div id="apexchartsspark1"
                                         class="apexcharts-canvas apexchartsspark1 apexcharts-theme-light"
                                         style="width: 588px; height: 200px;">
                                        <svg id="SvgjsSvg3169" width="588" height="200"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3171" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 50)">
                                                <defs id="SvgjsDefs3170">
                                                    <clipPath id="gridRectMask4oer6cbgi">
                                                        <rect id="SvgjsRect3176" width="591" height="105" x="-4.5"
                                                              y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask4oer6cbgi"></clipPath>
                                                    <clipPath id="nonForecastMask4oer6cbgi"></clipPath>
                                                    <clipPath id="gridRectMarkerMask4oer6cbgi">
                                                        <rect id="SvgjsRect3177" width="586" height="104" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter3183" filterUnits="userSpaceOnUse"
                                                            width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood3184" flood-color="#000000"
                                                                 flood-opacity="0.1" result="SvgjsFeFlood3184Out"
                                                                 in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite3185" in="SvgjsFeFlood3184Out"
                                                                     in2="SourceAlpha" operator="in"
                                                                     result="SvgjsFeComposite3185Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset3186" dx="1" dy="5"
                                                                  result="SvgjsFeOffset3186Out"
                                                                  in="SvgjsFeComposite3185Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur3187" stdDeviation="5 "
                                                                        result="SvgjsFeGaussianBlur3187Out"
                                                                        in="SvgjsFeOffset3186Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge3188" result="SvgjsFeMerge3188Out"
                                                                 in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode3189"
                                                                         in="SvgjsFeGaussianBlur3187Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode3190"
                                                                         in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend3191" in="SourceGraphic"
                                                                 in2="SvgjsFeMerge3188Out" mode="normal"
                                                                 result="SvgjsFeBlend3191Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine3175" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="100" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3192" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3193" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3205" class="apexcharts-grid">
                                                    <g id="SvgjsG3206" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3208" x1="0" y1="0" x2="582" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3209" x1="0" y1="14.285714285714286" x2="582"
                                                              y2="14.285714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3210" x1="0" y1="28.571428571428573" x2="582"
                                                              y2="28.571428571428573" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3211" x1="0" y1="42.85714285714286" x2="582"
                                                              y2="42.85714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3212" x1="0" y1="57.142857142857146" x2="582"
                                                              y2="57.142857142857146" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3213" x1="0" y1="71.42857142857143" x2="582"
                                                              y2="71.42857142857143" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3214" x1="0" y1="85.71428571428572" x2="582"
                                                              y2="85.71428571428572" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3215" x1="0" y1="100.00000000000001" x2="582"
                                                              y2="100.00000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3207" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3217" x1="0" y1="100" x2="582" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3216" x1="0" y1="1" x2="0" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3178"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG3179" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3182"
                                                              d="M 0 64.28571428571428C 22.63333333333333 64.28571428571428 42.03333333333333 5.714285714285708 64.66666666666666 5.714285714285708C 87.29999999999998 5.714285714285708 106.69999999999999 41.42857142857142 129.33333333333331 41.42857142857142C 151.96666666666664 41.42857142857142 171.36666666666667 15.714285714285708 194 15.714285714285708C 216.63333333333333 15.714285714285708 236.0333333333333 64.28571428571428 258.66666666666663 64.28571428571428C 281.29999999999995 64.28571428571428 300.7 37.14285714285714 323.3333333333333 37.14285714285714C 345.96666666666664 37.14285714285714 365.3666666666667 82.85714285714286 388 82.85714285714286C 410.6333333333333 82.85714285714286 430.0333333333333 48.57142857142857 452.66666666666663 48.57142857142857C 475.29999999999995 48.57142857142857 494.69999999999993 87.14285714285714 517.3333333333333 87.14285714285714C 539.9666666666666 87.14285714285714 559.3666666666667 70 582 70"
                                                              fill="none" fill-opacity="1"
                                                              stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                              stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMask4oer6cbgi)"
                                                              filter="url(#SvgjsFilter3183)"
                                                              pathTo="M 0 64.28571428571428C 22.63333333333333 64.28571428571428 42.03333333333333 5.714285714285708 64.66666666666666 5.714285714285708C 87.29999999999998 5.714285714285708 106.69999999999999 41.42857142857142 129.33333333333331 41.42857142857142C 151.96666666666664 41.42857142857142 171.36666666666667 15.714285714285708 194 15.714285714285708C 216.63333333333333 15.714285714285708 236.0333333333333 64.28571428571428 258.66666666666663 64.28571428571428C 281.29999999999995 64.28571428571428 300.7 37.14285714285714 323.3333333333333 37.14285714285714C 345.96666666666664 37.14285714285714 365.3666666666667 82.85714285714286 388 82.85714285714286C 410.6333333333333 82.85714285714286 430.0333333333333 48.57142857142857 452.66666666666663 48.57142857142857C 475.29999999999995 48.57142857142857 494.69999999999993 87.14285714285714 517.3333333333333 87.14285714285714C 539.9666666666666 87.14285714285714 559.3666666666667 70 582 70"
                                                              pathFrom="M -1 100L -1 100L 64.66666666666666 100L 129.33333333333331 100L 194 100L 258.66666666666663 100L 323.3333333333333 100L 388 100L 452.66666666666663 100L 517.3333333333333 100L 582 100"></path>
                                                        <g id="SvgjsG3180" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3223" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wsg4zcx6g no-pointer-events"
                                                                        stroke="#ffffff" fill="#ffffff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3181" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3218" x1="0" y1="0" x2="582" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3219" x1="0" y1="0" x2="582" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3220" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3221" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3222" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3174" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3204" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3172" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 255, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 240px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body up-mar60 pb-0">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-warning-light px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Equalizer d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></span>
                                            <a href="{{$link}}" class="text-warning fw-500 fs-18">
                                                Monthly Overview
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-primary-light px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Add-user d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span></span>
                                            <a href="{{$link}}" class="text-primary fw-500 fs-18">
                                                Total Visiter
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-danger-light px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Cart2 d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span></span>
                                            <a href="{{$link}}" class="text-danger fw-500 fs-18">
                                                Product Sale
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-success-light px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Mail-opened d-block fs-40"><span
                                                    class="path1"></span><span class="path2"></span></span>
                                            <a href="{{$link}}" class="text-success fw-500 fs-18">
                                                Order Overview
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border bg-primary">
                                <h4 class="box-title text-white">Sales Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-primary-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body px-0 bg-primary rounded-0" style="position: relative;">
                                <div id="spark6" class="text-dark" style="min-height: 200px;">
                                    <div id="apexchartsspark2"
                                         class="apexcharts-canvas apexchartsspark2 apexcharts-theme-light"
                                         style="width: 588px; height: 200px;">
                                        <svg id="SvgjsSvg3225" width="588" height="200"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3227" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 50)">
                                                <defs id="SvgjsDefs3226">
                                                    <clipPath id="gridRectMaskpo30snqo">
                                                        <rect id="SvgjsRect3232" width="591" height="105" x="-4.5"
                                                              y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskpo30snqo"></clipPath>
                                                    <clipPath id="nonForecastMaskpo30snqo"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskpo30snqo">
                                                        <rect id="SvgjsRect3233" width="586" height="104" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter3239" filterUnits="userSpaceOnUse"
                                                            width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood3240" flood-color="#000000"
                                                                 flood-opacity="0.1" result="SvgjsFeFlood3240Out"
                                                                 in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite3241" in="SvgjsFeFlood3240Out"
                                                                     in2="SourceAlpha" operator="in"
                                                                     result="SvgjsFeComposite3241Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset3242" dx="1" dy="5"
                                                                  result="SvgjsFeOffset3242Out"
                                                                  in="SvgjsFeComposite3241Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur3243" stdDeviation="5 "
                                                                        result="SvgjsFeGaussianBlur3243Out"
                                                                        in="SvgjsFeOffset3242Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge3244" result="SvgjsFeMerge3244Out"
                                                                 in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode3245"
                                                                         in="SvgjsFeGaussianBlur3243Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode3246"
                                                                         in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend3247" in="SourceGraphic"
                                                                 in2="SvgjsFeMerge3244Out" mode="normal"
                                                                 result="SvgjsFeBlend3247Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine3231" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="100" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3248" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3249" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3261" class="apexcharts-grid">
                                                    <g id="SvgjsG3262" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3264" x1="0" y1="0" x2="582" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3265" x1="0" y1="14.285714285714286" x2="582"
                                                              y2="14.285714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3266" x1="0" y1="28.571428571428573" x2="582"
                                                              y2="28.571428571428573" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3267" x1="0" y1="42.85714285714286" x2="582"
                                                              y2="42.85714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3268" x1="0" y1="57.142857142857146" x2="582"
                                                              y2="57.142857142857146" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3269" x1="0" y1="71.42857142857143" x2="582"
                                                              y2="71.42857142857143" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3270" x1="0" y1="85.71428571428572" x2="582"
                                                              y2="85.71428571428572" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3271" x1="0" y1="100.00000000000001" x2="582"
                                                              y2="100.00000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3263" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3273" x1="0" y1="100" x2="582" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3272" x1="0" y1="1" x2="0" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3234"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG3235" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3238"
                                                              d="M 0 64.28571428571428C 22.63333333333333 64.28571428571428 42.03333333333333 5.714285714285708 64.66666666666666 5.714285714285708C 87.29999999999998 5.714285714285708 106.69999999999999 41.42857142857142 129.33333333333331 41.42857142857142C 151.96666666666664 41.42857142857142 171.36666666666667 15.714285714285708 194 15.714285714285708C 216.63333333333333 15.714285714285708 236.0333333333333 64.28571428571428 258.66666666666663 64.28571428571428C 281.29999999999995 64.28571428571428 300.7 37.14285714285714 323.3333333333333 37.14285714285714C 345.96666666666664 37.14285714285714 365.3666666666667 82.85714285714286 388 82.85714285714286C 410.6333333333333 82.85714285714286 430.0333333333333 48.57142857142857 452.66666666666663 48.57142857142857C 475.29999999999995 48.57142857142857 494.69999999999993 87.14285714285714 517.3333333333333 87.14285714285714C 539.9666666666666 87.14285714285714 559.3666666666667 70 582 70"
                                                              fill="none" fill-opacity="1"
                                                              stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                              stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMaskpo30snqo)"
                                                              filter="url(#SvgjsFilter3239)"
                                                              pathTo="M 0 64.28571428571428C 22.63333333333333 64.28571428571428 42.03333333333333 5.714285714285708 64.66666666666666 5.714285714285708C 87.29999999999998 5.714285714285708 106.69999999999999 41.42857142857142 129.33333333333331 41.42857142857142C 151.96666666666664 41.42857142857142 171.36666666666667 15.714285714285708 194 15.714285714285708C 216.63333333333333 15.714285714285708 236.0333333333333 64.28571428571428 258.66666666666663 64.28571428571428C 281.29999999999995 64.28571428571428 300.7 37.14285714285714 323.3333333333333 37.14285714285714C 345.96666666666664 37.14285714285714 365.3666666666667 82.85714285714286 388 82.85714285714286C 410.6333333333333 82.85714285714286 430.0333333333333 48.57142857142857 452.66666666666663 48.57142857142857C 475.29999999999995 48.57142857142857 494.69999999999993 87.14285714285714 517.3333333333333 87.14285714285714C 539.9666666666666 87.14285714285714 559.3666666666667 70 582 70"
                                                              pathFrom="M -1 100L -1 100L 64.66666666666666 100L 129.33333333333331 100L 194 100L 258.66666666666663 100L 323.3333333333333 100L 388 100L 452.66666666666663 100L 517.3333333333333 100L 582 100"></path>
                                                        <g id="SvgjsG3236" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3279" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wtx1gazst no-pointer-events"
                                                                        stroke="#ffffff" fill="#ffffff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3237" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3274" x1="0" y1="0" x2="582" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3275" x1="0" y1="0" x2="582" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3276" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3277" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3278" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3230" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3260" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3228" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 255, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 240px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body up-mar60 pb-0">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Equalizer d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></span>
                                            <a href="{{$link}}" class="text-warning fw-500 fs-18">
                                                Monthly Overview
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Add-user d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span></span>
                                            <a href="{{$link}}" class="text-primary fw-500 fs-18">
                                                Total Visiter
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Cart2 d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span></span>
                                            <a href="{{$link}}" class="text-danger fw-500 fs-18">
                                                Product Sale
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Mail-opened d-block fs-40"><span
                                                    class="path1"></span><span class="path2"></span></span>
                                            <a href="{{$link}}" class="text-success fw-500 fs-18">
                                                Order Overview
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border bg-success">
                                <h4 class="box-title text-white">Sales Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-success-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body px-0 bg-success rounded-0" style="position: relative;">
                                <div id="spark7" class="text-dark" style="min-height: 200px;">
                                    <div id="apexchartsspark3"
                                         class="apexcharts-canvas apexchartsspark3 apexcharts-theme-light"
                                         style="width: 588px; height: 200px;">
                                        <svg id="SvgjsSvg3281" width="588" height="200"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3283" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 50)">
                                                <defs id="SvgjsDefs3282">
                                                    <clipPath id="gridRectMaskgsdaql5v">
                                                        <rect id="SvgjsRect3288" width="591" height="105" x="-4.5"
                                                              y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskgsdaql5v"></clipPath>
                                                    <clipPath id="nonForecastMaskgsdaql5v"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskgsdaql5v">
                                                        <rect id="SvgjsRect3289" width="586" height="104" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter3295" filterUnits="userSpaceOnUse"
                                                            width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood3296" flood-color="#000000"
                                                                 flood-opacity="0.1" result="SvgjsFeFlood3296Out"
                                                                 in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite3297" in="SvgjsFeFlood3296Out"
                                                                     in2="SourceAlpha" operator="in"
                                                                     result="SvgjsFeComposite3297Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset3298" dx="1" dy="5"
                                                                  result="SvgjsFeOffset3298Out"
                                                                  in="SvgjsFeComposite3297Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur3299" stdDeviation="5 "
                                                                        result="SvgjsFeGaussianBlur3299Out"
                                                                        in="SvgjsFeOffset3298Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge3300" result="SvgjsFeMerge3300Out"
                                                                 in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode3301"
                                                                         in="SvgjsFeGaussianBlur3299Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode3302"
                                                                         in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend3303" in="SourceGraphic"
                                                                 in2="SvgjsFeMerge3300Out" mode="normal"
                                                                 result="SvgjsFeBlend3303Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine3287" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="100" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3304" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3305" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3317" class="apexcharts-grid">
                                                    <g id="SvgjsG3318" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3320" x1="0" y1="0" x2="582" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3321" x1="0" y1="14.285714285714286" x2="582"
                                                              y2="14.285714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3322" x1="0" y1="28.571428571428573" x2="582"
                                                              y2="28.571428571428573" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3323" x1="0" y1="42.85714285714286" x2="582"
                                                              y2="42.85714285714286" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3324" x1="0" y1="57.142857142857146" x2="582"
                                                              y2="57.142857142857146" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3325" x1="0" y1="71.42857142857143" x2="582"
                                                              y2="71.42857142857143" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3326" x1="0" y1="85.71428571428572" x2="582"
                                                              y2="85.71428571428572" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3327" x1="0" y1="100.00000000000001" x2="582"
                                                              y2="100.00000000000001" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3319" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3329" x1="0" y1="100" x2="582" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3328" x1="0" y1="1" x2="0" y2="100"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3290"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG3291" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3294"
                                                              d="M 0 64.28571428571428C 22.63333333333333 64.28571428571428 42.03333333333333 5.714285714285708 64.66666666666666 5.714285714285708C 87.29999999999998 5.714285714285708 106.69999999999999 41.42857142857142 129.33333333333331 41.42857142857142C 151.96666666666664 41.42857142857142 171.36666666666667 15.714285714285708 194 15.714285714285708C 216.63333333333333 15.714285714285708 236.0333333333333 64.28571428571428 258.66666666666663 64.28571428571428C 281.29999999999995 64.28571428571428 300.7 37.14285714285714 323.3333333333333 37.14285714285714C 345.96666666666664 37.14285714285714 365.3666666666667 82.85714285714286 388 82.85714285714286C 410.6333333333333 82.85714285714286 430.0333333333333 48.57142857142857 452.66666666666663 48.57142857142857C 475.29999999999995 48.57142857142857 494.69999999999993 87.14285714285714 517.3333333333333 87.14285714285714C 539.9666666666666 87.14285714285714 559.3666666666667 70 582 70"
                                                              fill="none" fill-opacity="1"
                                                              stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                              stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMaskgsdaql5v)"
                                                              filter="url(#SvgjsFilter3295)"
                                                              pathTo="M 0 64.28571428571428C 22.63333333333333 64.28571428571428 42.03333333333333 5.714285714285708 64.66666666666666 5.714285714285708C 87.29999999999998 5.714285714285708 106.69999999999999 41.42857142857142 129.33333333333331 41.42857142857142C 151.96666666666664 41.42857142857142 171.36666666666667 15.714285714285708 194 15.714285714285708C 216.63333333333333 15.714285714285708 236.0333333333333 64.28571428571428 258.66666666666663 64.28571428571428C 281.29999999999995 64.28571428571428 300.7 37.14285714285714 323.3333333333333 37.14285714285714C 345.96666666666664 37.14285714285714 365.3666666666667 82.85714285714286 388 82.85714285714286C 410.6333333333333 82.85714285714286 430.0333333333333 48.57142857142857 452.66666666666663 48.57142857142857C 475.29999999999995 48.57142857142857 494.69999999999993 87.14285714285714 517.3333333333333 87.14285714285714C 539.9666666666666 87.14285714285714 559.3666666666667 70 582 70"
                                                              pathFrom="M -1 100L -1 100L 64.66666666666666 100L 129.33333333333331 100L 194 100L 258.66666666666663 100L 323.3333333333333 100L 388 100L 452.66666666666663 100L 517.3333333333333 100L 582 100"></path>
                                                        <g id="SvgjsG3292" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3335" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wtyd4i67ti no-pointer-events"
                                                                        stroke="#ffffff" fill="#ffffff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3293" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3330" x1="0" y1="0" x2="582" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3331" x1="0" y1="0" x2="582" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3332" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3333" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3334" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3286" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3316" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3284" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 255, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 240px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body up-mar60 pb-0">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Equalizer d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></span>
                                            <a href="{{$link}}" class="fw-500 fs-18">
                                                Monthly Overview
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Add-user d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span></span>
                                            <a href="{{$link}}" class="fw-500 fs-18">
                                                Total Visiter
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Cart2 d-block fs-40"><span class="path1"></span><span
                                                    class="path2"></span></span>
                                            <a href="{{$link}}" class="fw-500 fs-18">
                                                Product Sale
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                            <span class="icon-Mail-opened d-block fs-40"><span
                                                    class="path1"></span><span class="path2"></span></span>
                                            <a href="{{$link}}" class="fw-500 fs-18">
                                                Order Overview
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">Revenue Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-success-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body py-0">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="py-10">
                                            <div class="fw-500">Average Profit</div>
                                            <div class="text-fade fs-18">$150K</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="py-10">
                                            <div class="fw-500">Revenue</div>
                                            <div class="text-fade fs-18">$15,250k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="py-10">
                                            <div class="fw-500">Taxes</div>
                                            <div class="text-fade fs-18">$50k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="py-10">
                                            <div class="fw-500">Yearly Income</div>
                                            <div class="text-fade fs-18">$44,850k</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body p-0" style="position: relative;">
                                <div id="revenue4" class="text-dark" style="min-height: 290px;">
                                    <div id="apexchartsw32wgb9l"
                                         class="apexcharts-canvas apexchartsw32wgb9l apexcharts-theme-light"
                                         style="width: 588px; height: 275px;">
                                        <svg id="SvgjsSvg3337" width="588" height="275"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3339" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 30)">
                                                <defs id="SvgjsDefs3338">
                                                    <clipPath id="gridRectMaskw32wgb9l">
                                                        <rect id="SvgjsRect3344" width="590" height="254" x="-4" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskw32wgb9l"></clipPath>
                                                    <clipPath id="nonForecastMaskw32wgb9l"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskw32wgb9l">
                                                        <rect id="SvgjsRect3345" width="586" height="254" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient3350" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop3351" stop-opacity="0.65"
                                                              stop-color="rgba(242,66,109,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop3352" stop-opacity="0.5"
                                                              stop-color="rgba(249,161,182,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3353" stop-opacity="0.5"
                                                              stop-color="rgba(249,161,182,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine3343" x1="0" y1="0" x2="0" y2="250" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="250" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3356" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3357" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3369" class="apexcharts-grid">
                                                    <g id="SvgjsG3370" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3372" x1="0" y1="0" x2="582" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3373" x1="0" y1="41.666666666666664" x2="582"
                                                              y2="41.666666666666664" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3374" x1="0" y1="83.33333333333333" x2="582"
                                                              y2="83.33333333333333" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3375" x1="0" y1="125" x2="582" y2="125"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3376" x1="0" y1="166.66666666666666" x2="582"
                                                              y2="166.66666666666666" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3377" x1="0" y1="208.33333333333331" x2="582"
                                                              y2="208.33333333333331" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3378" x1="0" y1="249.99999999999997" x2="582"
                                                              y2="249.99999999999997" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3371" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3380" x1="0" y1="250" x2="582" y2="250"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3379" x1="0" y1="1" x2="0" y2="250"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3346"
                                                   class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG3347" class="apexcharts-series" seriesName="Revenue"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3354"
                                                              d="M 0 250L 0 104.16666666666669C 25.4625 104.16666666666669 47.2875 143.75 72.75 143.75C 98.2125 143.75 120.0375 156.25 145.5 156.25C 170.9625 156.25 192.7875 102.08333333333334 218.25 102.08333333333334C 243.7125 102.08333333333334 265.5375 208.33333333333334 291 208.33333333333334C 316.4625 208.33333333333334 338.2875 58.33333333333334 363.75 58.33333333333334C 389.2125 58.33333333333334 411.0375 85.41666666666669 436.5 85.41666666666669C 461.9625 85.41666666666669 483.7875 185.41666666666669 509.25 185.41666666666669C 534.7125 185.41666666666669 556.5375 25 582 25C 582 25 582 25 582 250M 582 25z"
                                                              fill="url(#SvgjsLinearGradient3350)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskw32wgb9l)"
                                                              pathTo="M 0 250L 0 104.16666666666669C 25.4625 104.16666666666669 47.2875 143.75 72.75 143.75C 98.2125 143.75 120.0375 156.25 145.5 156.25C 170.9625 156.25 192.7875 102.08333333333334 218.25 102.08333333333334C 243.7125 102.08333333333334 265.5375 208.33333333333334 291 208.33333333333334C 316.4625 208.33333333333334 338.2875 58.33333333333334 363.75 58.33333333333334C 389.2125 58.33333333333334 411.0375 85.41666666666669 436.5 85.41666666666669C 461.9625 85.41666666666669 483.7875 185.41666666666669 509.25 185.41666666666669C 534.7125 185.41666666666669 556.5375 25 582 25C 582 25 582 25 582 250M 582 25z"
                                                              pathFrom="M -1 291.6666666666667L -1 291.6666666666667L 72.75 291.6666666666667L 145.5 291.6666666666667L 218.25 291.6666666666667L 291 291.6666666666667L 363.75 291.6666666666667L 436.5 291.6666666666667L 509.25 291.6666666666667L 582 291.6666666666667"></path>
                                                        <path id="SvgjsPath3355"
                                                              d="M 0 104.16666666666669C 25.4625 104.16666666666669 47.2875 143.75 72.75 143.75C 98.2125 143.75 120.0375 156.25 145.5 156.25C 170.9625 156.25 192.7875 102.08333333333334 218.25 102.08333333333334C 243.7125 102.08333333333334 265.5375 208.33333333333334 291 208.33333333333334C 316.4625 208.33333333333334 338.2875 58.33333333333334 363.75 58.33333333333334C 389.2125 58.33333333333334 411.0375 85.41666666666669 436.5 85.41666666666669C 461.9625 85.41666666666669 483.7875 185.41666666666669 509.25 185.41666666666669C 534.7125 185.41666666666669 556.5375 25 582 25"
                                                              fill="none" fill-opacity="1" stroke="#f2426d"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskw32wgb9l)"
                                                              pathTo="M 0 104.16666666666669C 25.4625 104.16666666666669 47.2875 143.75 72.75 143.75C 98.2125 143.75 120.0375 156.25 145.5 156.25C 170.9625 156.25 192.7875 102.08333333333334 218.25 102.08333333333334C 243.7125 102.08333333333334 265.5375 208.33333333333334 291 208.33333333333334C 316.4625 208.33333333333334 338.2875 58.33333333333334 363.75 58.33333333333334C 389.2125 58.33333333333334 411.0375 85.41666666666669 436.5 85.41666666666669C 461.9625 85.41666666666669 483.7875 185.41666666666669 509.25 185.41666666666669C 534.7125 185.41666666666669 556.5375 25 582 25"
                                                              pathFrom="M -1 291.6666666666667L -1 291.6666666666667L 72.75 291.6666666666667L 145.5 291.6666666666667L 218.25 291.6666666666667L 291 291.6666666666667L 363.75 291.6666666666667L 436.5 291.6666666666667L 509.25 291.6666666666667L 582 291.6666666666667"></path>
                                                        <g id="SvgjsG3348" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3386" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wt8enqcot no-pointer-events"
                                                                        stroke="#ffffff" fill="#f2426d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3349" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3381" x1="0" y1="0" x2="582" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3382" x1="0" y1="0" x2="582" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3383" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3384" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3385" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3342" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3367" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-8, 0)">
                                                <g id="SvgjsG3368" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG3340" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 137.5px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(242, 66, 109);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 291px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">Revenue Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-success-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body" style="position: relative;">

                                <div id="revenue5" class="text-dark" style="min-height: 223.7px;">
                                    <div id="apexchartsftljt137"
                                         class="apexcharts-canvas apexchartsftljt137 apexcharts-theme-light"
                                         style="width: 549px; height: 223.7px;">
                                        <svg id="SvgjsSvg3387" width="549" height="223.7"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3389" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(165, 0)">
                                                <defs id="SvgjsDefs3388">
                                                    <clipPath id="gridRectMaskftljt137">
                                                        <rect id="SvgjsRect3391" width="227" height="245" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskftljt137"></clipPath>
                                                    <clipPath id="nonForecastMaskftljt137"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskftljt137">
                                                        <rect id="SvgjsRect3392" width="225" height="247" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG3393" class="apexcharts-radialbar">
                                                    <g id="SvgjsG3394">
                                                        <g id="SvgjsG3395" class="apexcharts-tracks">
                                                            <g id="SvgjsG3396"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                      d="M 110.5 29.101219512195115 A 81.39878048780488 81.39878048780488 0 1 1 110.4857932328059 29.101220751969436"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="9.962609756097564"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 110.5 29.101219512195115 A 81.39878048780488 81.39878048780488 0 1 1 110.4857932328059 29.101220751969436"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3398">
                                                            <g id="SvgjsG3402"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="Progress" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath3403"
                                                                      d="M 110.5 29.101219512195115 A 81.39878048780488 81.39878048780488 0 1 1 39.30702244825213 149.96291185680764"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(115,58,235,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="10.270731707317076"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                      data:angle="241" data:value="67" index="0" j="0"
                                                                      data:pathOrig="M 110.5 29.101219512195115 A 81.39878048780488 81.39878048780488 0 1 1 39.30702244825213 149.96291185680764"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle3399" r="61.41747560975611"
                                                                    cx="110.5" cy="110.5"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            <g id="SvgjsG3400" class="apexcharts-datalabels-group"
                                                               transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                                <text id="SvgjsText3401"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="110.5" y="126.5" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="30px"
                                                                      font-weight="400" fill="#111111"
                                                                      class="apexcharts-text apexcharts-datalabel-value"
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    67%
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3404" x1="0" y1="0" x2="221" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3405" x1="0" y1="0" x2="221" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG3390" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>

                                <p class="text-center text-fade fs-16 pb-20">
                                    Notes: There are many variations of passages <br>
                                    of Lorem Ipsum available.
                                </p>
                                <a href="{{$link}}" class="btn btn-info w-p100">Generate Report</a>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 384px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">Revenue Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-success-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body pt-0" style="position: relative;">

                                <div id="revenue6" class="text-dark" style="min-height: 215px;">
                                    <div id="apexchartsh2vceegx"
                                         class="apexcharts-canvas apexchartsh2vceegx apexcharts-theme-light"
                                         style="width: 549px; height: 200px;">
                                        <svg id="SvgjsSvg3407" width="549" height="200"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3409" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(2, 30)">
                                                <defs id="SvgjsDefs3408">
                                                    <clipPath id="gridRectMaskh2vceegx">
                                                        <rect id="SvgjsRect3414" width="545" height="149" x="-4" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskh2vceegx"></clipPath>
                                                    <clipPath id="nonForecastMaskh2vceegx"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskh2vceegx">
                                                        <rect id="SvgjsRect3415" width="541" height="149" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient3420" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop3421" stop-opacity="0.65"
                                                              stop-color="rgba(81,206,138,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop3422" stop-opacity="0.5"
                                                              stop-color="rgba(168,231,197,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3423" stop-opacity="0.5"
                                                              stop-color="rgba(168,231,197,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine3413" x1="0" y1="0" x2="0" y2="145" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="145" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3426" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3427" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3439" class="apexcharts-grid">
                                                    <g id="SvgjsG3440" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3442" x1="0" y1="0" x2="537" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3443" x1="0" y1="24.166666666666668" x2="537"
                                                              y2="24.166666666666668" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3444" x1="0" y1="48.333333333333336" x2="537"
                                                              y2="48.333333333333336" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3445" x1="0" y1="72.5" x2="537" y2="72.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3446" x1="0" y1="96.66666666666667" x2="537"
                                                              y2="96.66666666666667" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3447" x1="0" y1="120.83333333333334" x2="537"
                                                              y2="120.83333333333334" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3448" x1="0" y1="145" x2="537" y2="145"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3441" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3450" x1="0" y1="145" x2="537" y2="145"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3449" x1="0" y1="1" x2="0" y2="145"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3416"
                                                   class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG3417" class="apexcharts-series" seriesName="Revenue"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3424"
                                                              d="M 0 145L 0 60.41666666666666C 23.49375 60.41666666666666 43.63125 83.37499999999999 67.125 83.37499999999999C 90.61875 83.37499999999999 110.75625 90.62499999999999 134.25 90.62499999999999C 157.74375 90.62499999999999 177.88125 59.20833333333333 201.375 59.20833333333333C 224.86875 59.20833333333333 245.00625 120.83333333333331 268.5 120.83333333333331C 291.99375 120.83333333333331 312.13125 33.833333333333314 335.625 33.833333333333314C 359.11875 33.833333333333314 379.25625 49.54166666666666 402.75 49.54166666666666C 426.24375 49.54166666666666 446.38125 107.54166666666666 469.875 107.54166666666666C 493.36875 107.54166666666666 513.50625 14.5 537 14.5C 537 14.5 537 14.5 537 145M 537 14.5z"
                                                              fill="url(#SvgjsLinearGradient3420)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskh2vceegx)"
                                                              pathTo="M 0 145L 0 60.41666666666666C 23.49375 60.41666666666666 43.63125 83.37499999999999 67.125 83.37499999999999C 90.61875 83.37499999999999 110.75625 90.62499999999999 134.25 90.62499999999999C 157.74375 90.62499999999999 177.88125 59.20833333333333 201.375 59.20833333333333C 224.86875 59.20833333333333 245.00625 120.83333333333331 268.5 120.83333333333331C 291.99375 120.83333333333331 312.13125 33.833333333333314 335.625 33.833333333333314C 359.11875 33.833333333333314 379.25625 49.54166666666666 402.75 49.54166666666666C 426.24375 49.54166666666666 446.38125 107.54166666666666 469.875 107.54166666666666C 493.36875 107.54166666666666 513.50625 14.5 537 14.5C 537 14.5 537 14.5 537 145M 537 14.5z"
                                                              pathFrom="M -1 169.16666666666666L -1 169.16666666666666L 67.125 169.16666666666666L 134.25 169.16666666666666L 201.375 169.16666666666666L 268.5 169.16666666666666L 335.625 169.16666666666666L 402.75 169.16666666666666L 469.875 169.16666666666666L 537 169.16666666666666"></path>
                                                        <path id="SvgjsPath3425"
                                                              d="M 0 60.41666666666666C 23.49375 60.41666666666666 43.63125 83.37499999999999 67.125 83.37499999999999C 90.61875 83.37499999999999 110.75625 90.62499999999999 134.25 90.62499999999999C 157.74375 90.62499999999999 177.88125 59.20833333333333 201.375 59.20833333333333C 224.86875 59.20833333333333 245.00625 120.83333333333331 268.5 120.83333333333331C 291.99375 120.83333333333331 312.13125 33.833333333333314 335.625 33.833333333333314C 359.11875 33.833333333333314 379.25625 49.54166666666666 402.75 49.54166666666666C 426.24375 49.54166666666666 446.38125 107.54166666666666 469.875 107.54166666666666C 493.36875 107.54166666666666 513.50625 14.5 537 14.5"
                                                              fill="none" fill-opacity="1" stroke="#51ce8a"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskh2vceegx)"
                                                              pathTo="M 0 60.41666666666666C 23.49375 60.41666666666666 43.63125 83.37499999999999 67.125 83.37499999999999C 90.61875 83.37499999999999 110.75625 90.62499999999999 134.25 90.62499999999999C 157.74375 90.62499999999999 177.88125 59.20833333333333 201.375 59.20833333333333C 224.86875 59.20833333333333 245.00625 120.83333333333331 268.5 120.83333333333331C 291.99375 120.83333333333331 312.13125 33.833333333333314 335.625 33.833333333333314C 359.11875 33.833333333333314 379.25625 49.54166666666666 402.75 49.54166666666666C 426.24375 49.54166666666666 446.38125 107.54166666666666 469.875 107.54166666666666C 493.36875 107.54166666666666 513.50625 14.5 537 14.5"
                                                              pathFrom="M -1 169.16666666666666L -1 169.16666666666666L 67.125 169.16666666666666L 134.25 169.16666666666666L 201.375 169.16666666666666L 268.5 169.16666666666666L 335.625 169.16666666666666L 402.75 169.16666666666666L 469.875 169.16666666666666L 537 169.16666666666666"></path>
                                                        <g id="SvgjsG3418" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3456" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wpfkfep86 no-pointer-events"
                                                                        stroke="#ffffff" fill="#51ce8a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3419" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3451" x1="0" y1="0" x2="537" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3452" x1="0" y1="0" x2="537" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3453" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3454" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3455" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3412" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3437" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-8, 0)">
                                                <g id="SvgjsG3438" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG3410" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(81, 206, 138);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-20">
                                    <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                        <img src="/assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                        <a href="{{$link}}" class="text-dark hover-primary mb-1 fs-16">Duis
                                            faucibus lorem</a>
                                        <span class="text-fade">Pharetra, Nulla , Nec, Aliquet</span>
                                    </div>
                                    <span class="badge badge-xl badge-primary-light"><span
                                            class="fw-600">+125$</span></span>
                                </div>
                                <div class="d-flex align-items-center mb-20">
                                    <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                        <img src="/assets/images/svg-icon/color-svg/002-google.svg" class="h-30"
                                             alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                        <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Mauris
                                            varius augue</a>
                                        <span class="text-fade">Pharetra, Nulla , Nec, Aliquet</span>
                                    </div>
                                    <span class="badge badge-xl badge-primary-light"><span
                                            class="fw-600">+125$</span></span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                        <img src="/assets/images/svg-icon/color-svg/003-settings.svg" class="h-30"
                                             alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                        <a href="{{$link}}" class="text-dark hover-success mb-1 fs-16">Aliquam
                                            in magna</a>
                                        <span class="text-fade">Pharetra, Nulla , Nec, Aliquet</span>
                                    </div>
                                    <span class="badge badge-xl badge-primary-light"><span
                                            class="fw-600">+125$</span></span>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 426px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-success-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body" style="position: relative;">
                                <div id="revenue7" class="text-dark" style="min-height: 303.7px;">
                                    <div id="apexchartswrj6wblv"
                                         class="apexcharts-canvas apexchartswrj6wblv apexcharts-theme-light"
                                         style="width: 549px; height: 303.7px;">
                                        <svg id="SvgjsSvg3457" width="549" height="303.7"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3459" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(125, 0)">
                                                <defs id="SvgjsDefs3458">
                                                    <clipPath id="gridRectMaskwrj6wblv">
                                                        <rect id="SvgjsRect3461" width="307" height="325" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskwrj6wblv"></clipPath>
                                                    <clipPath id="nonForecastMaskwrj6wblv"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskwrj6wblv">
                                                        <rect id="SvgjsRect3462" width="305" height="327" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG3463" class="apexcharts-radialbar">
                                                    <g id="SvgjsG3464">
                                                        <g id="SvgjsG3465" class="apexcharts-tracks">
                                                            <g id="SvgjsG3466"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                      d="M 150.5 28.295121951219485 A 122.20487804878051 122.20487804878051 0 1 1 150.47867122526878 28.295123812506205"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="8.810439024390245"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 150.5 28.295121951219485 A 122.20487804878051 122.20487804878051 0 1 1 150.47867122526878 28.295123812506205"></path>
                                                            </g>
                                                            <g id="SvgjsG3468"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="2">
                                                                <path id="apexcharts-radialbarTrack-1"
                                                                      d="M 150.5 42.378048780487774 A 108.12195121951223 108.12195121951223 0 1 1 150.48112915967118 42.37805042727925"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="8.810439024390245"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 150.5 42.378048780487774 A 108.12195121951223 108.12195121951223 0 1 1 150.48112915967118 42.37805042727925"></path>
                                                            </g>
                                                            <g id="SvgjsG3470"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="3">
                                                                <path id="apexcharts-radialbarTrack-2"
                                                                      d="M 150.5 56.46097560975606 A 94.03902439024394 94.03902439024394 0 1 1 150.48358709407358 56.460977042052306"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="8.810439024390245"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 150.5 56.46097560975606 A 94.03902439024394 94.03902439024394 0 1 1 150.48358709407358 56.460977042052306"></path>
                                                            </g>
                                                            <g id="SvgjsG3472"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="4">
                                                                <path id="apexcharts-radialbarTrack-3"
                                                                      d="M 150.5 70.54390243902435 A 79.95609756097565 79.95609756097565 0 1 1 150.48604502847598 70.54390365682535"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="8.810439024390245"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 150.5 70.54390243902435 A 79.95609756097565 79.95609756097565 0 1 1 150.48604502847598 70.54390365682535"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3474">
                                                            <g id="SvgjsG3478"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="Apples" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath3479"
                                                                      d="M 150.5 28.295121951219485 A 122.20487804878051 122.20487804878051 0 0 1 196.27875306466063 263.80638987613247"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(115,58,235,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="9.082926829268294"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                      data:angle="158" data:value="44" index="0" j="0"
                                                                      data:pathOrig="M 150.5 28.295121951219485 A 122.20487804878051 122.20487804878051 0 0 1 196.27875306466063 263.80638987613247"></path>
                                                            </g>
                                                            <g id="SvgjsG3480"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="Oranges" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath3481"
                                                                      d="M 150.5 42.378048780487774 A 108.12195121951223 108.12195121951223 0 1 1 117.08847960819166 253.33008626186384"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(242,66,109,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="9.082926829268294"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-1"
                                                                      data:angle="198" data:value="55" index="0" j="1"
                                                                      data:pathOrig="M 150.5 42.378048780487774 A 108.12195121951223 108.12195121951223 0 1 1 117.08847960819166 253.33008626186384"></path>
                                                            </g>
                                                            <g id="SvgjsG3482"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="Bananas" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath3483"
                                                                      d="M 150.5 56.46097560975606 A 94.03902439024394 94.03902439024394 0 1 1 68.25161602813036 196.0910237029702"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(81,206,138,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="9.082926829268294"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-2"
                                                                      data:angle="241" data:value="67" index="0" j="2"
                                                                      data:pathOrig="M 150.5 56.46097560975606 A 94.03902439024394 94.03902439024394 0 1 1 68.25161602813036 196.0910237029702"></path>
                                                            </g>
                                                            <g id="SvgjsG3484"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="Berries" rel="4" data:realIndex="3">
                                                                <path id="SvgjsPath3485"
                                                                      d="M 150.5 70.54390243902435 A 79.95609756097565 79.95609756097565 0 1 1 80.56882136721052 111.73651470508432"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(77,124,255,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="9.082926829268294"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-3"
                                                                      data:angle="299" data:value="83" index="0" j="3"
                                                                      data:pathOrig="M 150.5 70.54390243902435 A 79.95609756097565 79.95609756097565 0 1 1 80.56882136721052 111.73651470508432"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle3475" r="70.5508780487805" cx="150.5"
                                                                    cy="150.5" class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            <g id="SvgjsG3476" class="apexcharts-datalabels-group"
                                                               transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                                <text id="SvgjsText3477"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="150.5" y="166.5" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="30px"
                                                                      font-weight="400" fill="#373d3f"
                                                                      class="apexcharts-text apexcharts-datalabel-value"
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    249
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3486" x1="0" y1="0" x2="301" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3487" x1="0" y1="0" x2="301" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG3460" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 344px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body py-0">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Library fs-24"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}"
                                                   class="text-dark hover-primary mb-1 fs-16">Project Briefing</a>
                                                <span class="text-fade fs-12">Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Write fs-24"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Concept
                                                    Design</a>
                                                <span class="text-fade fs-12">Art Director</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Group-chat fs-24"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}"
                                                   class="text-dark hover-success mb-1 fs-16">Functional Logics</a>
                                                <span class="text-fade fs-12">Sales Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Attachment1 fs-24"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}" class="text-dark hover-info mb-1 fs-16">Development</a>
                                                <span class="text-fade fs-12">Creative Head</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-success-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div class="row pt-50">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Library fs-24"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}"
                                                   class="text-dark hover-primary mb-1 fs-16">Project Briefing</a>
                                                <span class="text-fade fs-12">Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Write fs-24"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Concept
                                                    Design</a>
                                                <span class="text-fade fs-12">Art Director</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Group-chat fs-24"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}"
                                                   class="text-dark hover-success mb-1 fs-16">Functional Logics</a>
                                                <span class="text-fade fs-12">Sales Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Attachment1 fs-24"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="{{$link}}" class="text-dark hover-info mb-1 fs-16">Development</a>
                                                <span class="text-fade fs-12">Creative Head</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body p-0" style="position: relative;">
                                <div id="revenue8" class="text-dark" style="min-height: 260px;">
                                    <div id="apexcharts2kjfem0w"
                                         class="apexcharts-canvas apexcharts2kjfem0w apexcharts-theme-light"
                                         style="width: 588px; height: 245px;">
                                        <svg id="SvgjsSvg3489" width="588" height="245"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3491" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 30)">
                                                <defs id="SvgjsDefs3490">
                                                    <clipPath id="gridRectMask2kjfem0w">
                                                        <rect id="SvgjsRect3496" width="590" height="224" x="-4" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask2kjfem0w"></clipPath>
                                                    <clipPath id="nonForecastMask2kjfem0w"></clipPath>
                                                    <clipPath id="gridRectMarkerMask2kjfem0w">
                                                        <rect id="SvgjsRect3497" width="586" height="224" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient3502" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop3503" stop-opacity="0.65"
                                                              stop-color="rgba(242,66,109,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop3504" stop-opacity="0.5"
                                                              stop-color="rgba(249,161,182,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3505" stop-opacity="0.5"
                                                              stop-color="rgba(249,161,182,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine3495" x1="0" y1="0" x2="0" y2="220" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="220" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3508" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3509" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3521" class="apexcharts-grid">
                                                    <g id="SvgjsG3522" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3524" x1="0" y1="0" x2="582" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3525" x1="0" y1="36.666666666666664" x2="582"
                                                              y2="36.666666666666664" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3526" x1="0" y1="73.33333333333333" x2="582"
                                                              y2="73.33333333333333" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3527" x1="0" y1="110" x2="582" y2="110"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3528" x1="0" y1="146.66666666666666" x2="582"
                                                              y2="146.66666666666666" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3529" x1="0" y1="183.33333333333331" x2="582"
                                                              y2="183.33333333333331" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3530" x1="0" y1="219.99999999999997" x2="582"
                                                              y2="219.99999999999997" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3523" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3532" x1="0" y1="220" x2="582" y2="220"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3531" x1="0" y1="1" x2="0" y2="220"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3498"
                                                   class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG3499" class="apexcharts-series" seriesName="Revenue"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3506"
                                                              d="M 0 220L 0 91.66666666666669C 25.4625 91.66666666666669 47.2875 126.5 72.75 126.5C 98.2125 126.5 120.0375 137.5 145.5 137.5C 170.9625 137.5 192.7875 89.83333333333334 218.25 89.83333333333334C 243.7125 89.83333333333334 265.5375 183.33333333333334 291 183.33333333333334C 316.4625 183.33333333333334 338.2875 51.33333333333334 363.75 51.33333333333334C 389.2125 51.33333333333334 411.0375 75.16666666666669 436.5 75.16666666666669C 461.9625 75.16666666666669 483.7875 163.16666666666669 509.25 163.16666666666669C 534.7125 163.16666666666669 556.5375 22 582 22C 582 22 582 22 582 220M 582 22z"
                                                              fill="url(#SvgjsLinearGradient3502)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMask2kjfem0w)"
                                                              pathTo="M 0 220L 0 91.66666666666669C 25.4625 91.66666666666669 47.2875 126.5 72.75 126.5C 98.2125 126.5 120.0375 137.5 145.5 137.5C 170.9625 137.5 192.7875 89.83333333333334 218.25 89.83333333333334C 243.7125 89.83333333333334 265.5375 183.33333333333334 291 183.33333333333334C 316.4625 183.33333333333334 338.2875 51.33333333333334 363.75 51.33333333333334C 389.2125 51.33333333333334 411.0375 75.16666666666669 436.5 75.16666666666669C 461.9625 75.16666666666669 483.7875 163.16666666666669 509.25 163.16666666666669C 534.7125 163.16666666666669 556.5375 22 582 22C 582 22 582 22 582 220M 582 22z"
                                                              pathFrom="M -1 256.6666666666667L -1 256.6666666666667L 72.75 256.6666666666667L 145.5 256.6666666666667L 218.25 256.6666666666667L 291 256.6666666666667L 363.75 256.6666666666667L 436.5 256.6666666666667L 509.25 256.6666666666667L 582 256.6666666666667"></path>
                                                        <path id="SvgjsPath3507"
                                                              d="M 0 91.66666666666669C 25.4625 91.66666666666669 47.2875 126.5 72.75 126.5C 98.2125 126.5 120.0375 137.5 145.5 137.5C 170.9625 137.5 192.7875 89.83333333333334 218.25 89.83333333333334C 243.7125 89.83333333333334 265.5375 183.33333333333334 291 183.33333333333334C 316.4625 183.33333333333334 338.2875 51.33333333333334 363.75 51.33333333333334C 389.2125 51.33333333333334 411.0375 75.16666666666669 436.5 75.16666666666669C 461.9625 75.16666666666669 483.7875 163.16666666666669 509.25 163.16666666666669C 534.7125 163.16666666666669 556.5375 22 582 22"
                                                              fill="none" fill-opacity="1" stroke="#f2426d"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMask2kjfem0w)"
                                                              pathTo="M 0 91.66666666666669C 25.4625 91.66666666666669 47.2875 126.5 72.75 126.5C 98.2125 126.5 120.0375 137.5 145.5 137.5C 170.9625 137.5 192.7875 89.83333333333334 218.25 89.83333333333334C 243.7125 89.83333333333334 265.5375 183.33333333333334 291 183.33333333333334C 316.4625 183.33333333333334 338.2875 51.33333333333334 363.75 51.33333333333334C 389.2125 51.33333333333334 411.0375 75.16666666666669 436.5 75.16666666666669C 461.9625 75.16666666666669 483.7875 163.16666666666669 509.25 163.16666666666669C 534.7125 163.16666666666669 556.5375 22 582 22"
                                                              pathFrom="M -1 256.6666666666667L -1 256.6666666666667L 72.75 256.6666666666667L 145.5 256.6666666666667L 218.25 256.6666666666667L 291 256.6666666666667L 363.75 256.6666666666667L 436.5 256.6666666666667L 509.25 256.6666666666667L 582 256.6666666666667"></path>
                                                        <g id="SvgjsG3500" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3538" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wpznh4u3b no-pointer-events"
                                                                        stroke="#ffffff" fill="#f2426d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3501" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3533" x1="0" y1="0" x2="582" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3534" x1="0" y1="0" x2="582" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3535" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3536" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3537" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3494" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG3519" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-8, 0)">
                                                <g id="SvgjsG3520" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG3492" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 122.5px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(242, 66, 109);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 261px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-success-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body" style="position: relative;">
                                <div id="revenue9" class="text-dark" style="min-height: 219.75px;">
                                    <div id="apexcharts5oe65feb"
                                         class="apexcharts-canvas apexcharts5oe65feb apexcharts-theme-light"
                                         style="width: 549px; height: 219.75px;">
                                        <svg id="SvgjsSvg3805" width="549" height="219.75"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, -20)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3807" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(45.75, -10)">
                                                <defs id="SvgjsDefs3806">
                                                    <clipPath id="gridRectMask5oe65feb">
                                                        <rect id="SvgjsRect3809" width="463.5" height="469.5" x="-3"
                                                              y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask5oe65feb"></clipPath>
                                                    <clipPath id="nonForecastMask5oe65feb"></clipPath>
                                                    <clipPath id="gridRectMarkerMask5oe65feb">
                                                        <rect id="SvgjsRect3810" width="461.5" height="471.5" x="-2"
                                                              y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG3811" class="apexcharts-radialbar">
                                                    <g id="SvgjsG3812">
                                                        <g id="SvgjsG3813" class="apexcharts-tracks">
                                                            <g id="SvgjsG3814"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                      d="M 86.76829268292681 228.74999999999997 A 141.9817073170732 141.9817073170732 0 0 1 370.7317073170732 228.75"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(231,231,231,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="49.268902439024394"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 86.76829268292681 228.74999999999997 A 141.9817073170732 141.9817073170732 0 0 1 370.7317073170732 228.75"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3816">
                                                            <g id="SvgjsG3820"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="AveragexResults" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath3821"
                                                                      d="M 86.76829268292681 228.74999999999997 A 141.9817073170732 141.9817073170732 0 0 1 332.58884720855116 131.91870845088243"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="rgba(0,143,251,0.85)" stroke-opacity="1"
                                                                      stroke-linecap="round"
                                                                      stroke-width="50.79268292682927"
                                                                      stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                      data:angle="137" data:value="76" index="0" j="0"
                                                                      data:pathOrig="M 86.76829268292681 228.74999999999997 A 141.9817073170732 141.9817073170732 0 0 1 332.58884720855116 131.91870845088243"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle3817" r="112.34725609756099"
                                                                    cx="228.75" cy="228.75"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            <g id="SvgjsG3818" class="apexcharts-datalabels-group"
                                                               transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                                <text id="SvgjsText3819"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="228.75" y="208.75" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="30px"
                                                                      font-weight="400" fill="#373d3f"
                                                                      class="apexcharts-text apexcharts-datalabel-value"
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    76%
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3822" x1="0" y1="0" x2="457.5" y2="0"
                                                      stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3823" x1="0" y1="0" x2="457.5" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG3808" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 260px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15 bg-lightest h-50 w-50 l-h-60 rounded100 text-center">
                                        <span class="icon-Library fs-24"><span class="path1"></span><span
                                                class="path2"></span></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="{{$link}}" class="text-dark hover-primary mb-1 fs-16">Project
                                            Briefing</a>
                                        <span class="text-fade fs-12">Project Manager</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15 bg-lightest h-50 w-50 l-h-60 rounded100 text-center">
                                        <span class="icon-Write fs-24"><span class="path1"></span><span
                                                class="path2"></span></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="{{$link}}" class="text-dark hover-danger mb-1 fs-16">Concept
                                            Design</a>
                                        <span class="text-fade fs-12">Art Director</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15 bg-lightest h-50 w-50 l-h-60 rounded100 text-center">
                                        <span class="icon-Group-chat fs-24"><span class="path1"></span><span
                                                class="path2"></span></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="{{$link}}" class="text-dark hover-success mb-1 fs-16">Functional
                                            Logics</a>
                                        <span class="text-fade fs-12">Sales Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="box chart-widget">
                            <div class="box-header no-border bg-danger">
                                <h4 class="box-title text-white">Revenue Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-danger-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body px-0 py-0 bg-danger rounded-0" style="position: relative;">
                                <div id="revenue1" class="text-dark" style="min-height: 265px;">
                                    <div id="apexchartscwfmsgq4"
                                         class="apexcharts-canvas apexchartscwfmsgq4 apexcharts-theme-light"
                                         style="width: 598px; height: 250px;">
                                        <svg id="SvgjsSvg3558" width="598" height="250"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3560" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(30, 30)">
                                                <defs id="SvgjsDefs3559">
                                                    <linearGradient id="SvgjsLinearGradient3563" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop3564" stop-opacity="0.4"
                                                              stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop3565" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3566" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskcwfmsgq4">
                                                        <rect id="SvgjsRect3568" width="544" height="207" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskcwfmsgq4"></clipPath>
                                                    <clipPath id="nonForecastMaskcwfmsgq4"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskcwfmsgq4">
                                                        <rect id="SvgjsRect3569" width="542" height="209" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect3567" width="11.528571428571428" height="205" x="0"
                                                      y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke-dasharray="3" fill="url(#SvgjsLinearGradient3563)"
                                                      class="apexcharts-xcrosshairs" y2="205" filter="none"
                                                      fill-opacity="0.9"></rect>
                                                <g id="SvgjsG3605" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3606" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3616" class="apexcharts-grid">
                                                    <g id="SvgjsG3617" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3619" x1="0" y1="0" x2="538" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3620" x1="0" y1="51.25" x2="538" y2="51.25"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3621" x1="0" y1="102.5" x2="538" y2="102.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3622" x1="0" y1="153.75" x2="538" y2="153.75"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3623" x1="0" y1="205" x2="538" y2="205"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3618" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3625" x1="0" y1="205" x2="538" y2="205"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3624" x1="0" y1="1" x2="0" y2="205"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3570" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG3571" class="apexcharts-series" rel="1"
                                                       seriesName="NetxProfit" data:realIndex="0">
                                                        <path id="SvgjsPath3575"
                                                              d="M 26.900000000000002 205L 26.900000000000002 132.83333333333331Q 26.900000000000002 129.83333333333331 29.900000000000002 129.83333333333331L 33.42857142857143 129.83333333333331Q 36.42857142857143 129.83333333333331 36.42857142857143 132.83333333333331L 36.42857142857143 132.83333333333331L 36.42857142857143 205L 36.42857142857143 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 26.900000000000002 205L 26.900000000000002 132.83333333333331Q 26.900000000000002 129.83333333333331 29.900000000000002 129.83333333333331L 33.42857142857143 129.83333333333331Q 36.42857142857143 129.83333333333331 36.42857142857143 132.83333333333331L 36.42857142857143 132.83333333333331L 36.42857142857143 205L 36.42857142857143 205z"
                                                              pathFrom="M 26.900000000000002 205L 26.900000000000002 205L 36.42857142857143 205L 36.42857142857143 205L 36.42857142857143 205L 36.42857142857143 205L 36.42857142857143 205L 26.900000000000002 205"
                                                              cy="129.83333333333331" cx="102.75714285714287" j="0"
                                                              val="44" barHeight="75.16666666666667"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3577"
                                                              d="M 103.75714285714287 205L 103.75714285714287 114.04166666666666Q 103.75714285714287 111.04166666666666 106.75714285714287 111.04166666666666L 110.28571428571429 111.04166666666666Q 113.28571428571429 111.04166666666666 113.28571428571429 114.04166666666666L 113.28571428571429 114.04166666666666L 113.28571428571429 205L 113.28571428571429 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 103.75714285714287 205L 103.75714285714287 114.04166666666666Q 103.75714285714287 111.04166666666666 106.75714285714287 111.04166666666666L 110.28571428571429 111.04166666666666Q 113.28571428571429 111.04166666666666 113.28571428571429 114.04166666666666L 113.28571428571429 114.04166666666666L 113.28571428571429 205L 113.28571428571429 205z"
                                                              pathFrom="M 103.75714285714287 205L 103.75714285714287 205L 113.28571428571429 205L 113.28571428571429 205L 113.28571428571429 205L 113.28571428571429 205L 113.28571428571429 205L 103.75714285714287 205"
                                                              cy="111.04166666666666" cx="179.61428571428573" j="1"
                                                              val="55" barHeight="93.95833333333334"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3579"
                                                              d="M 180.61428571428573 205L 180.61428571428573 110.625Q 180.61428571428573 107.625 183.61428571428573 107.625L 187.14285714285717 107.625Q 190.14285714285717 107.625 190.14285714285717 110.625L 190.14285714285717 110.625L 190.14285714285717 205L 190.14285714285717 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 180.61428571428573 205L 180.61428571428573 110.625Q 180.61428571428573 107.625 183.61428571428573 107.625L 187.14285714285717 107.625Q 190.14285714285717 107.625 190.14285714285717 110.625L 190.14285714285717 110.625L 190.14285714285717 205L 190.14285714285717 205z"
                                                              pathFrom="M 180.61428571428573 205L 180.61428571428573 205L 190.14285714285717 205L 190.14285714285717 205L 190.14285714285717 205L 190.14285714285717 205L 190.14285714285717 205L 180.61428571428573 205"
                                                              cy="107.625" cx="256.4714285714286" j="2" val="57"
                                                              barHeight="97.375" barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3581"
                                                              d="M 257.4714285714286 205L 257.4714285714286 112.33333333333333Q 257.4714285714286 109.33333333333333 260.4714285714286 109.33333333333333L 264 109.33333333333333Q 267 109.33333333333333 267 112.33333333333333L 267 112.33333333333333L 267 205L 267 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 257.4714285714286 205L 257.4714285714286 112.33333333333333Q 257.4714285714286 109.33333333333333 260.4714285714286 109.33333333333333L 264 109.33333333333333Q 267 109.33333333333333 267 112.33333333333333L 267 112.33333333333333L 267 205L 267 205z"
                                                              pathFrom="M 257.4714285714286 205L 257.4714285714286 205L 267 205L 267 205L 267 205L 267 205L 267 205L 257.4714285714286 205"
                                                              cy="109.33333333333333" cx="333.3285714285714" j="3"
                                                              val="56" barHeight="95.66666666666667"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3583"
                                                              d="M 334.3285714285714 205L 334.3285714285714 103.79166666666666Q 334.3285714285714 100.79166666666666 337.3285714285714 100.79166666666666L 340.85714285714283 100.79166666666666Q 343.85714285714283 100.79166666666666 343.85714285714283 103.79166666666666L 343.85714285714283 103.79166666666666L 343.85714285714283 205L 343.85714285714283 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 334.3285714285714 205L 334.3285714285714 103.79166666666666Q 334.3285714285714 100.79166666666666 337.3285714285714 100.79166666666666L 340.85714285714283 100.79166666666666Q 343.85714285714283 100.79166666666666 343.85714285714283 103.79166666666666L 343.85714285714283 103.79166666666666L 343.85714285714283 205L 343.85714285714283 205z"
                                                              pathFrom="M 334.3285714285714 205L 334.3285714285714 205L 343.85714285714283 205L 343.85714285714283 205L 343.85714285714283 205L 343.85714285714283 205L 343.85714285714283 205L 334.3285714285714 205"
                                                              cy="100.79166666666666" cx="410.1857142857143" j="4"
                                                              val="61" barHeight="104.20833333333334"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3585"
                                                              d="M 411.1857142857143 205L 411.1857142857143 108.91666666666666Q 411.1857142857143 105.91666666666666 414.1857142857143 105.91666666666666L 417.7142857142857 105.91666666666666Q 420.7142857142857 105.91666666666666 420.7142857142857 108.91666666666666L 420.7142857142857 108.91666666666666L 420.7142857142857 205L 420.7142857142857 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 411.1857142857143 205L 411.1857142857143 108.91666666666666Q 411.1857142857143 105.91666666666666 414.1857142857143 105.91666666666666L 417.7142857142857 105.91666666666666Q 420.7142857142857 105.91666666666666 420.7142857142857 108.91666666666666L 420.7142857142857 108.91666666666666L 420.7142857142857 205L 420.7142857142857 205z"
                                                              pathFrom="M 411.1857142857143 205L 411.1857142857143 205L 420.7142857142857 205L 420.7142857142857 205L 420.7142857142857 205L 420.7142857142857 205L 420.7142857142857 205L 411.1857142857143 205"
                                                              cy="105.91666666666666" cx="487.0428571428572" j="5"
                                                              val="58" barHeight="99.08333333333334"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3587"
                                                              d="M 488.0428571428572 205L 488.0428571428572 100.375Q 488.0428571428572 97.375 491.0428571428572 97.375L 494.5714285714286 97.375Q 497.5714285714286 97.375 497.5714285714286 100.375L 497.5714285714286 100.375L 497.5714285714286 205L 497.5714285714286 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 488.0428571428572 205L 488.0428571428572 100.375Q 488.0428571428572 97.375 491.0428571428572 97.375L 494.5714285714286 97.375Q 497.5714285714286 97.375 497.5714285714286 100.375L 497.5714285714286 100.375L 497.5714285714286 205L 497.5714285714286 205z"
                                                              pathFrom="M 488.0428571428572 205L 488.0428571428572 205L 497.5714285714286 205L 497.5714285714286 205L 497.5714285714286 205L 497.5714285714286 205L 497.5714285714286 205L 488.0428571428572 205"
                                                              cy="97.375" cx="563.9000000000001" j="6" val="63"
                                                              barHeight="107.625" barWidth="11.528571428571428"></path>
                                                        <g id="SvgjsG3573" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG3574"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3576"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3578"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3580"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3582"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3584"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3586"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3588" class="apexcharts-series" rel="2"
                                                       seriesName="Revenue" data:realIndex="1">
                                                        <path id="SvgjsPath3592"
                                                              d="M 38.42857142857143 205L 38.42857142857143 78.16666666666666Q 38.42857142857143 75.16666666666666 41.42857142857143 75.16666666666666L 44.957142857142856 75.16666666666666Q 47.957142857142856 75.16666666666666 47.957142857142856 78.16666666666666L 47.957142857142856 78.16666666666666L 47.957142857142856 205L 47.957142857142856 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 38.42857142857143 205L 38.42857142857143 78.16666666666666Q 38.42857142857143 75.16666666666666 41.42857142857143 75.16666666666666L 44.957142857142856 75.16666666666666Q 47.957142857142856 75.16666666666666 47.957142857142856 78.16666666666666L 47.957142857142856 78.16666666666666L 47.957142857142856 205L 47.957142857142856 205z"
                                                              pathFrom="M 38.42857142857143 205L 38.42857142857143 205L 47.957142857142856 205L 47.957142857142856 205L 47.957142857142856 205L 47.957142857142856 205L 47.957142857142856 205L 38.42857142857143 205"
                                                              cy="75.16666666666666" cx="114.28571428571429" j="0"
                                                              val="76" barHeight="129.83333333333334"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3594"
                                                              d="M 115.28571428571429 205L 115.28571428571429 62.79166666666666Q 115.28571428571429 59.79166666666666 118.28571428571429 59.79166666666666L 121.81428571428572 59.79166666666666Q 124.81428571428572 59.79166666666666 124.81428571428572 62.79166666666666L 124.81428571428572 62.79166666666666L 124.81428571428572 205L 124.81428571428572 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 115.28571428571429 205L 115.28571428571429 62.79166666666666Q 115.28571428571429 59.79166666666666 118.28571428571429 59.79166666666666L 121.81428571428572 59.79166666666666Q 124.81428571428572 59.79166666666666 124.81428571428572 62.79166666666666L 124.81428571428572 62.79166666666666L 124.81428571428572 205L 124.81428571428572 205z"
                                                              pathFrom="M 115.28571428571429 205L 115.28571428571429 205L 124.81428571428572 205L 124.81428571428572 205L 124.81428571428572 205L 124.81428571428572 205L 124.81428571428572 205L 115.28571428571429 205"
                                                              cy="59.79166666666666" cx="191.14285714285717" j="1"
                                                              val="85" barHeight="145.20833333333334"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3596"
                                                              d="M 192.14285714285717 205L 192.14285714285717 35.458333333333314Q 192.14285714285717 32.458333333333314 195.14285714285717 32.458333333333314L 198.6714285714286 32.458333333333314Q 201.6714285714286 32.458333333333314 201.6714285714286 35.458333333333314L 201.6714285714286 35.458333333333314L 201.6714285714286 205L 201.6714285714286 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 192.14285714285717 205L 192.14285714285717 35.458333333333314Q 192.14285714285717 32.458333333333314 195.14285714285717 32.458333333333314L 198.6714285714286 32.458333333333314Q 201.6714285714286 32.458333333333314 201.6714285714286 35.458333333333314L 201.6714285714286 35.458333333333314L 201.6714285714286 205L 201.6714285714286 205z"
                                                              pathFrom="M 192.14285714285717 205L 192.14285714285717 205L 201.6714285714286 205L 201.6714285714286 205L 201.6714285714286 205L 201.6714285714286 205L 201.6714285714286 205L 192.14285714285717 205"
                                                              cy="32.458333333333314" cx="268" j="2" val="101"
                                                              barHeight="172.54166666666669"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3598"
                                                              d="M 269 205L 269 40.583333333333314Q 269 37.583333333333314 272 37.583333333333314L 275.5285714285714 37.583333333333314Q 278.5285714285714 37.583333333333314 278.5285714285714 40.583333333333314L 278.5285714285714 40.583333333333314L 278.5285714285714 205L 278.5285714285714 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 269 205L 269 40.583333333333314Q 269 37.583333333333314 272 37.583333333333314L 275.5285714285714 37.583333333333314Q 278.5285714285714 37.583333333333314 278.5285714285714 40.583333333333314L 278.5285714285714 40.583333333333314L 278.5285714285714 205L 278.5285714285714 205z"
                                                              pathFrom="M 269 205L 269 205L 278.5285714285714 205L 278.5285714285714 205L 278.5285714285714 205L 278.5285714285714 205L 278.5285714285714 205L 269 205"
                                                              cy="37.583333333333314" cx="344.85714285714283" j="3"
                                                              val="98" barHeight="167.41666666666669"
                                                              barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3600"
                                                              d="M 345.85714285714283 205L 345.85714285714283 59.375Q 345.85714285714283 56.375 348.85714285714283 56.375L 352.38571428571424 56.375Q 355.38571428571424 56.375 355.38571428571424 59.375L 355.38571428571424 59.375L 355.38571428571424 205L 355.38571428571424 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 345.85714285714283 205L 345.85714285714283 59.375Q 345.85714285714283 56.375 348.85714285714283 56.375L 352.38571428571424 56.375Q 355.38571428571424 56.375 355.38571428571424 59.375L 355.38571428571424 59.375L 355.38571428571424 205L 355.38571428571424 205z"
                                                              pathFrom="M 345.85714285714283 205L 345.85714285714283 205L 355.38571428571424 205L 355.38571428571424 205L 355.38571428571424 205L 355.38571428571424 205L 355.38571428571424 205L 345.85714285714283 205"
                                                              cy="56.375" cx="421.7142857142857" j="4" val="87"
                                                              barHeight="148.625" barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3602"
                                                              d="M 422.7142857142857 205L 422.7142857142857 28.625Q 422.7142857142857 25.625 425.7142857142857 25.625L 429.24285714285713 25.625Q 432.24285714285713 25.625 432.24285714285713 28.625L 432.24285714285713 28.625L 432.24285714285713 205L 432.24285714285713 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 422.7142857142857 205L 422.7142857142857 28.625Q 422.7142857142857 25.625 425.7142857142857 25.625L 429.24285714285713 25.625Q 432.24285714285713 25.625 432.24285714285713 28.625L 432.24285714285713 28.625L 432.24285714285713 205L 432.24285714285713 205z"
                                                              pathFrom="M 422.7142857142857 205L 422.7142857142857 205L 432.24285714285713 205L 432.24285714285713 205L 432.24285714285713 205L 432.24285714285713 205L 432.24285714285713 205L 422.7142857142857 205"
                                                              cy="25.625" cx="498.5714285714286" j="5" val="105"
                                                              barHeight="179.375" barWidth="11.528571428571428"></path>
                                                        <path id="SvgjsPath3604"
                                                              d="M 499.5714285714286 205L 499.5714285714286 52.54166666666666Q 499.5714285714286 49.54166666666666 502.5714285714286 49.54166666666666L 506.1 49.54166666666666Q 509.1 49.54166666666666 509.1 52.54166666666666L 509.1 52.54166666666666L 509.1 205L 509.1 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskcwfmsgq4)"
                                                              pathTo="M 499.5714285714286 205L 499.5714285714286 52.54166666666666Q 499.5714285714286 49.54166666666666 502.5714285714286 49.54166666666666L 506.1 49.54166666666666Q 509.1 49.54166666666666 509.1 52.54166666666666L 509.1 52.54166666666666L 509.1 205L 509.1 205z"
                                                              pathFrom="M 499.5714285714286 205L 499.5714285714286 205L 509.1 205L 509.1 205L 509.1 205L 509.1 205L 509.1 205L 499.5714285714286 205"
                                                              cy="49.54166666666666" cx="575.4285714285716" j="6"
                                                              val="91" barHeight="155.45833333333334"
                                                              barWidth="11.528571428571428"></path>
                                                        <g id="SvgjsG3590" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG3591"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3593"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3595"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3597"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3599"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3601"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3603"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3572" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                    <g id="SvgjsG3589" class="apexcharts-datalabels"
                                                       data:realIndex="1"></g>
                                                </g>
                                                <line id="SvgjsLine3626" x1="0" y1="0" x2="538" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3627" x1="0" y1="0" x2="538" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3628" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3629" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3630" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG3614" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-8, 0)">
                                                <g id="SvgjsG3615" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG3561" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(255, 255, 255, 0.25);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(247, 247, 247);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 266px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body up-mar40 bg-white position-relative">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Average Profit</div>
                                            <div class="fs-18 fw-500">$150K</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Revenue</div>
                                            <div class="fs-18 fw-500">$15,250k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Taxes</div>
                                            <div class="fs-18 fw-500">$50k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Yearly Income</div>
                                            <div class="fs-18 fw-500">$44,850k</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box chart-widget">
                            <div class="box-header no-border bg-info">
                                <h4 class="box-title text-white">Revenue Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-info-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body px-0 py-0 bg-info rounded-0" style="position: relative;">
                                <div id="revenue2" class="text-dark" style="min-height: 265px;">
                                    <div id="apexcharts4op6fwr5"
                                         class="apexcharts-canvas apexcharts4op6fwr5 apexcharts-theme-light"
                                         style="width: 618px; height: 250px;">
                                        <svg id="SvgjsSvg3631" width="618" height="250"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3633" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(30, 30)">
                                                <defs id="SvgjsDefs3632">
                                                    <linearGradient id="SvgjsLinearGradient3636" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop3637" stop-opacity="0.4"
                                                              stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop3638" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3639" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask4op6fwr5">
                                                        <rect id="SvgjsRect3641" width="564" height="207" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask4op6fwr5"></clipPath>
                                                    <clipPath id="nonForecastMask4op6fwr5"></clipPath>
                                                    <clipPath id="gridRectMarkerMask4op6fwr5">
                                                        <rect id="SvgjsRect3642" width="562" height="209" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect3640" width="11.957142857142856" height="205" x="0"
                                                      y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke-dasharray="3" fill="url(#SvgjsLinearGradient3636)"
                                                      class="apexcharts-xcrosshairs" y2="205" filter="none"
                                                      fill-opacity="0.9"></rect>
                                                <g id="SvgjsG3678" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3679" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3689" class="apexcharts-grid">
                                                    <g id="SvgjsG3690" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3692" x1="0" y1="0" x2="558" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3693" x1="0" y1="51.25" x2="558" y2="51.25"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3694" x1="0" y1="102.5" x2="558" y2="102.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3695" x1="0" y1="153.75" x2="558" y2="153.75"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3696" x1="0" y1="205" x2="558" y2="205"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3691" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3698" x1="0" y1="205" x2="558" y2="205"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3697" x1="0" y1="1" x2="0" y2="205"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3643" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG3644" class="apexcharts-series" rel="1"
                                                       seriesName="NetxProfit" data:realIndex="0">
                                                        <path id="SvgjsPath3648"
                                                              d="M 27.9 205L 27.9 132.83333333333331Q 27.9 129.83333333333331 30.9 129.83333333333331L 34.857142857142854 129.83333333333331Q 37.857142857142854 129.83333333333331 37.857142857142854 132.83333333333331L 37.857142857142854 132.83333333333331L 37.857142857142854 205L 37.857142857142854 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 27.9 205L 27.9 132.83333333333331Q 27.9 129.83333333333331 30.9 129.83333333333331L 34.857142857142854 129.83333333333331Q 37.857142857142854 129.83333333333331 37.857142857142854 132.83333333333331L 37.857142857142854 132.83333333333331L 37.857142857142854 205L 37.857142857142854 205z"
                                                              pathFrom="M 27.9 205L 27.9 205L 37.857142857142854 205L 37.857142857142854 205L 37.857142857142854 205L 37.857142857142854 205L 37.857142857142854 205L 27.9 205"
                                                              cy="129.83333333333331" cx="106.6142857142857" j="0"
                                                              val="44" barHeight="75.16666666666667"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3650"
                                                              d="M 107.6142857142857 205L 107.6142857142857 114.04166666666666Q 107.6142857142857 111.04166666666666 110.6142857142857 111.04166666666666L 114.57142857142856 111.04166666666666Q 117.57142857142856 111.04166666666666 117.57142857142856 114.04166666666666L 117.57142857142856 114.04166666666666L 117.57142857142856 205L 117.57142857142856 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 107.6142857142857 205L 107.6142857142857 114.04166666666666Q 107.6142857142857 111.04166666666666 110.6142857142857 111.04166666666666L 114.57142857142856 111.04166666666666Q 117.57142857142856 111.04166666666666 117.57142857142856 114.04166666666666L 117.57142857142856 114.04166666666666L 117.57142857142856 205L 117.57142857142856 205z"
                                                              pathFrom="M 107.6142857142857 205L 107.6142857142857 205L 117.57142857142856 205L 117.57142857142856 205L 117.57142857142856 205L 117.57142857142856 205L 117.57142857142856 205L 107.6142857142857 205"
                                                              cy="111.04166666666666" cx="186.32857142857142" j="1"
                                                              val="55" barHeight="93.95833333333334"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3652"
                                                              d="M 187.32857142857142 205L 187.32857142857142 110.625Q 187.32857142857142 107.625 190.32857142857142 107.625L 194.28571428571428 107.625Q 197.28571428571428 107.625 197.28571428571428 110.625L 197.28571428571428 110.625L 197.28571428571428 205L 197.28571428571428 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 187.32857142857142 205L 187.32857142857142 110.625Q 187.32857142857142 107.625 190.32857142857142 107.625L 194.28571428571428 107.625Q 197.28571428571428 107.625 197.28571428571428 110.625L 197.28571428571428 110.625L 197.28571428571428 205L 197.28571428571428 205z"
                                                              pathFrom="M 187.32857142857142 205L 187.32857142857142 205L 197.28571428571428 205L 197.28571428571428 205L 197.28571428571428 205L 197.28571428571428 205L 197.28571428571428 205L 187.32857142857142 205"
                                                              cy="107.625" cx="266.04285714285714" j="2" val="57"
                                                              barHeight="97.375" barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3654"
                                                              d="M 267.04285714285714 205L 267.04285714285714 112.33333333333333Q 267.04285714285714 109.33333333333333 270.04285714285714 109.33333333333333L 274 109.33333333333333Q 277 109.33333333333333 277 112.33333333333333L 277 112.33333333333333L 277 205L 277 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 267.04285714285714 205L 267.04285714285714 112.33333333333333Q 267.04285714285714 109.33333333333333 270.04285714285714 109.33333333333333L 274 109.33333333333333Q 277 109.33333333333333 277 112.33333333333333L 277 112.33333333333333L 277 205L 277 205z"
                                                              pathFrom="M 267.04285714285714 205L 267.04285714285714 205L 277 205L 277 205L 277 205L 277 205L 277 205L 267.04285714285714 205"
                                                              cy="109.33333333333333" cx="345.75714285714287" j="3"
                                                              val="56" barHeight="95.66666666666667"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3656"
                                                              d="M 346.75714285714287 205L 346.75714285714287 103.79166666666666Q 346.75714285714287 100.79166666666666 349.75714285714287 100.79166666666666L 353.7142857142857 100.79166666666666Q 356.7142857142857 100.79166666666666 356.7142857142857 103.79166666666666L 356.7142857142857 103.79166666666666L 356.7142857142857 205L 356.7142857142857 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 346.75714285714287 205L 346.75714285714287 103.79166666666666Q 346.75714285714287 100.79166666666666 349.75714285714287 100.79166666666666L 353.7142857142857 100.79166666666666Q 356.7142857142857 100.79166666666666 356.7142857142857 103.79166666666666L 356.7142857142857 103.79166666666666L 356.7142857142857 205L 356.7142857142857 205z"
                                                              pathFrom="M 346.75714285714287 205L 346.75714285714287 205L 356.7142857142857 205L 356.7142857142857 205L 356.7142857142857 205L 356.7142857142857 205L 356.7142857142857 205L 346.75714285714287 205"
                                                              cy="100.79166666666666" cx="425.4714285714286" j="4"
                                                              val="61" barHeight="104.20833333333334"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3658"
                                                              d="M 426.4714285714286 205L 426.4714285714286 108.91666666666666Q 426.4714285714286 105.91666666666666 429.4714285714286 105.91666666666666L 433.42857142857144 105.91666666666666Q 436.42857142857144 105.91666666666666 436.42857142857144 108.91666666666666L 436.42857142857144 108.91666666666666L 436.42857142857144 205L 436.42857142857144 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 426.4714285714286 205L 426.4714285714286 108.91666666666666Q 426.4714285714286 105.91666666666666 429.4714285714286 105.91666666666666L 433.42857142857144 105.91666666666666Q 436.42857142857144 105.91666666666666 436.42857142857144 108.91666666666666L 436.42857142857144 108.91666666666666L 436.42857142857144 205L 436.42857142857144 205z"
                                                              pathFrom="M 426.4714285714286 205L 426.4714285714286 205L 436.42857142857144 205L 436.42857142857144 205L 436.42857142857144 205L 436.42857142857144 205L 436.42857142857144 205L 426.4714285714286 205"
                                                              cy="105.91666666666666" cx="505.1857142857143" j="5"
                                                              val="58" barHeight="99.08333333333334"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3660"
                                                              d="M 506.1857142857143 205L 506.1857142857143 100.375Q 506.1857142857143 97.375 509.1857142857143 97.375L 513.1428571428571 97.375Q 516.1428571428571 97.375 516.1428571428571 100.375L 516.1428571428571 100.375L 516.1428571428571 205L 516.1428571428571 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 506.1857142857143 205L 506.1857142857143 100.375Q 506.1857142857143 97.375 509.1857142857143 97.375L 513.1428571428571 97.375Q 516.1428571428571 97.375 516.1428571428571 100.375L 516.1428571428571 100.375L 516.1428571428571 205L 516.1428571428571 205z"
                                                              pathFrom="M 506.1857142857143 205L 506.1857142857143 205L 516.1428571428571 205L 516.1428571428571 205L 516.1428571428571 205L 516.1428571428571 205L 516.1428571428571 205L 506.1857142857143 205"
                                                              cy="97.375" cx="584.9" j="6" val="63" barHeight="107.625"
                                                              barWidth="11.957142857142856"></path>
                                                        <g id="SvgjsG3646" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG3647"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3649"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3651"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3653"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3655"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3657"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3659"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3661" class="apexcharts-series" rel="2"
                                                       seriesName="Revenue" data:realIndex="1">
                                                        <path id="SvgjsPath3665"
                                                              d="M 39.857142857142854 205L 39.857142857142854 78.16666666666666Q 39.857142857142854 75.16666666666666 42.857142857142854 75.16666666666666L 46.81428571428571 75.16666666666666Q 49.81428571428571 75.16666666666666 49.81428571428571 78.16666666666666L 49.81428571428571 78.16666666666666L 49.81428571428571 205L 49.81428571428571 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 39.857142857142854 205L 39.857142857142854 78.16666666666666Q 39.857142857142854 75.16666666666666 42.857142857142854 75.16666666666666L 46.81428571428571 75.16666666666666Q 49.81428571428571 75.16666666666666 49.81428571428571 78.16666666666666L 49.81428571428571 78.16666666666666L 49.81428571428571 205L 49.81428571428571 205z"
                                                              pathFrom="M 39.857142857142854 205L 39.857142857142854 205L 49.81428571428571 205L 49.81428571428571 205L 49.81428571428571 205L 49.81428571428571 205L 49.81428571428571 205L 39.857142857142854 205"
                                                              cy="75.16666666666666" cx="118.57142857142856" j="0"
                                                              val="76" barHeight="129.83333333333334"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3667"
                                                              d="M 119.57142857142856 205L 119.57142857142856 62.79166666666666Q 119.57142857142856 59.79166666666666 122.57142857142856 59.79166666666666L 126.52857142857141 59.79166666666666Q 129.5285714285714 59.79166666666666 129.5285714285714 62.79166666666666L 129.5285714285714 62.79166666666666L 129.5285714285714 205L 129.5285714285714 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 119.57142857142856 205L 119.57142857142856 62.79166666666666Q 119.57142857142856 59.79166666666666 122.57142857142856 59.79166666666666L 126.52857142857141 59.79166666666666Q 129.5285714285714 59.79166666666666 129.5285714285714 62.79166666666666L 129.5285714285714 62.79166666666666L 129.5285714285714 205L 129.5285714285714 205z"
                                                              pathFrom="M 119.57142857142856 205L 119.57142857142856 205L 129.5285714285714 205L 129.5285714285714 205L 129.5285714285714 205L 129.5285714285714 205L 129.5285714285714 205L 119.57142857142856 205"
                                                              cy="59.79166666666666" cx="198.28571428571428" j="1"
                                                              val="85" barHeight="145.20833333333334"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3669"
                                                              d="M 199.28571428571428 205L 199.28571428571428 35.458333333333314Q 199.28571428571428 32.458333333333314 202.28571428571428 32.458333333333314L 206.24285714285713 32.458333333333314Q 209.24285714285713 32.458333333333314 209.24285714285713 35.458333333333314L 209.24285714285713 35.458333333333314L 209.24285714285713 205L 209.24285714285713 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 199.28571428571428 205L 199.28571428571428 35.458333333333314Q 199.28571428571428 32.458333333333314 202.28571428571428 32.458333333333314L 206.24285714285713 32.458333333333314Q 209.24285714285713 32.458333333333314 209.24285714285713 35.458333333333314L 209.24285714285713 35.458333333333314L 209.24285714285713 205L 209.24285714285713 205z"
                                                              pathFrom="M 199.28571428571428 205L 199.28571428571428 205L 209.24285714285713 205L 209.24285714285713 205L 209.24285714285713 205L 209.24285714285713 205L 209.24285714285713 205L 199.28571428571428 205"
                                                              cy="32.458333333333314" cx="278" j="2" val="101"
                                                              barHeight="172.54166666666669"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3671"
                                                              d="M 279 205L 279 40.583333333333314Q 279 37.583333333333314 282 37.583333333333314L 285.95714285714286 37.583333333333314Q 288.95714285714286 37.583333333333314 288.95714285714286 40.583333333333314L 288.95714285714286 40.583333333333314L 288.95714285714286 205L 288.95714285714286 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 279 205L 279 40.583333333333314Q 279 37.583333333333314 282 37.583333333333314L 285.95714285714286 37.583333333333314Q 288.95714285714286 37.583333333333314 288.95714285714286 40.583333333333314L 288.95714285714286 40.583333333333314L 288.95714285714286 205L 288.95714285714286 205z"
                                                              pathFrom="M 279 205L 279 205L 288.95714285714286 205L 288.95714285714286 205L 288.95714285714286 205L 288.95714285714286 205L 288.95714285714286 205L 279 205"
                                                              cy="37.583333333333314" cx="357.7142857142857" j="3"
                                                              val="98" barHeight="167.41666666666669"
                                                              barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3673"
                                                              d="M 358.7142857142857 205L 358.7142857142857 59.375Q 358.7142857142857 56.375 361.7142857142857 56.375L 365.6714285714286 56.375Q 368.6714285714286 56.375 368.6714285714286 59.375L 368.6714285714286 59.375L 368.6714285714286 205L 368.6714285714286 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 358.7142857142857 205L 358.7142857142857 59.375Q 358.7142857142857 56.375 361.7142857142857 56.375L 365.6714285714286 56.375Q 368.6714285714286 56.375 368.6714285714286 59.375L 368.6714285714286 59.375L 368.6714285714286 205L 368.6714285714286 205z"
                                                              pathFrom="M 358.7142857142857 205L 358.7142857142857 205L 368.6714285714286 205L 368.6714285714286 205L 368.6714285714286 205L 368.6714285714286 205L 368.6714285714286 205L 358.7142857142857 205"
                                                              cy="56.375" cx="437.42857142857144" j="4" val="87"
                                                              barHeight="148.625" barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3675"
                                                              d="M 438.42857142857144 205L 438.42857142857144 28.625Q 438.42857142857144 25.625 441.42857142857144 25.625L 445.3857142857143 25.625Q 448.3857142857143 25.625 448.3857142857143 28.625L 448.3857142857143 28.625L 448.3857142857143 205L 448.3857142857143 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 438.42857142857144 205L 438.42857142857144 28.625Q 438.42857142857144 25.625 441.42857142857144 25.625L 445.3857142857143 25.625Q 448.3857142857143 25.625 448.3857142857143 28.625L 448.3857142857143 28.625L 448.3857142857143 205L 448.3857142857143 205z"
                                                              pathFrom="M 438.42857142857144 205L 438.42857142857144 205L 448.3857142857143 205L 448.3857142857143 205L 448.3857142857143 205L 448.3857142857143 205L 448.3857142857143 205L 438.42857142857144 205"
                                                              cy="25.625" cx="517.1428571428571" j="5" val="105"
                                                              barHeight="179.375" barWidth="11.957142857142856"></path>
                                                        <path id="SvgjsPath3677"
                                                              d="M 518.1428571428571 205L 518.1428571428571 52.54166666666666Q 518.1428571428571 49.54166666666666 521.1428571428571 49.54166666666666L 525.0999999999999 49.54166666666666Q 528.0999999999999 49.54166666666666 528.0999999999999 52.54166666666666L 528.0999999999999 52.54166666666666L 528.0999999999999 205L 528.0999999999999 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask4op6fwr5)"
                                                              pathTo="M 518.1428571428571 205L 518.1428571428571 52.54166666666666Q 518.1428571428571 49.54166666666666 521.1428571428571 49.54166666666666L 525.0999999999999 49.54166666666666Q 528.0999999999999 49.54166666666666 528.0999999999999 52.54166666666666L 528.0999999999999 52.54166666666666L 528.0999999999999 205L 528.0999999999999 205z"
                                                              pathFrom="M 518.1428571428571 205L 518.1428571428571 205L 528.0999999999999 205L 528.0999999999999 205L 528.0999999999999 205L 528.0999999999999 205L 528.0999999999999 205L 518.1428571428571 205"
                                                              cy="49.54166666666666" cx="596.8571428571429" j="6"
                                                              val="91" barHeight="155.45833333333334"
                                                              barWidth="11.957142857142856"></path>
                                                        <g id="SvgjsG3663" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG3664"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3666"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3668"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3670"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3672"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3674"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3676"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3645" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                    <g id="SvgjsG3662" class="apexcharts-datalabels"
                                                       data:realIndex="1"></g>
                                                </g>
                                                <line id="SvgjsLine3699" x1="0" y1="0" x2="558" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3700" x1="0" y1="0" x2="558" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3701" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3702" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3703" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG3687" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-8, 0)">
                                                <g id="SvgjsG3688" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG3634" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(255, 255, 255, 0.25);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(247, 247, 247);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 266px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body up-mar40 bg-white position-relative">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Average Profit</div>
                                            <div class="fs-18 fw-500">$150K</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Revenue</div>
                                            <div class="fs-18 fw-500">$15,250k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Taxes</div>
                                            <div class="fs-18 fw-500">$50k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Yearly Income</div>
                                            <div class="fs-18 fw-500">$44,850k</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="box chart-widget">
                            <div class="box-header no-border bg-primary">
                                <h4 class="box-title text-white">Revenue Overview</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="{{$link}}"
                                           class="btn btn-primary-light px-10 base-font">Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{$link}}"><i
                                                    class="ti-settings"></i> Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body px-0 py-0 bg-primary rounded-0" style="position: relative;">
                                <div id="revenue3" class="text-dark" style="min-height: 265px;">
                                    <div id="apexchartst3fu3qfp"
                                         class="apexcharts-canvas apexchartst3fu3qfp apexcharts-theme-light"
                                         style="width: 616px; height: 250px;">
                                        <svg id="SvgjsSvg3704" width="616" height="250"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG3706" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(30, 30)">
                                                <defs id="SvgjsDefs3705">
                                                    <linearGradient id="SvgjsLinearGradient3709" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop3710" stop-opacity="0.4"
                                                              stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop3711" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3712" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskt3fu3qfp">
                                                        <rect id="SvgjsRect3714" width="562" height="207" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskt3fu3qfp"></clipPath>
                                                    <clipPath id="nonForecastMaskt3fu3qfp"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskt3fu3qfp">
                                                        <rect id="SvgjsRect3715" width="560" height="209" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect3713" width="11.914285714285716" height="205" x="0"
                                                      y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke-dasharray="3" fill="url(#SvgjsLinearGradient3709)"
                                                      class="apexcharts-xcrosshairs" y2="205" filter="none"
                                                      fill-opacity="0.9"></rect>
                                                <g id="SvgjsG3751" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3752" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG3762" class="apexcharts-grid">
                                                    <g id="SvgjsG3763" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine3765" x1="0" y1="0" x2="556" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3766" x1="0" y1="51.25" x2="556" y2="51.25"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3767" x1="0" y1="102.5" x2="556" y2="102.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3768" x1="0" y1="153.75" x2="556" y2="153.75"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3769" x1="0" y1="205" x2="556" y2="205"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3764" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine3771" x1="0" y1="205" x2="556" y2="205"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3770" x1="0" y1="1" x2="0" y2="205"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3716" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG3717" class="apexcharts-series" rel="1"
                                                       seriesName="NetxProfit" data:realIndex="0">
                                                        <path id="SvgjsPath3721"
                                                              d="M 27.799999999999997 205L 27.799999999999997 132.83333333333331Q 27.799999999999997 129.83333333333331 30.799999999999997 129.83333333333331L 34.714285714285715 129.83333333333331Q 37.714285714285715 129.83333333333331 37.714285714285715 132.83333333333331L 37.714285714285715 132.83333333333331L 37.714285714285715 205L 37.714285714285715 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 27.799999999999997 205L 27.799999999999997 132.83333333333331Q 27.799999999999997 129.83333333333331 30.799999999999997 129.83333333333331L 34.714285714285715 129.83333333333331Q 37.714285714285715 129.83333333333331 37.714285714285715 132.83333333333331L 37.714285714285715 132.83333333333331L 37.714285714285715 205L 37.714285714285715 205z"
                                                              pathFrom="M 27.799999999999997 205L 27.799999999999997 205L 37.714285714285715 205L 37.714285714285715 205L 37.714285714285715 205L 37.714285714285715 205L 37.714285714285715 205L 27.799999999999997 205"
                                                              cy="129.83333333333331" cx="106.22857142857143" j="0"
                                                              val="44" barHeight="75.16666666666667"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3723"
                                                              d="M 107.22857142857143 205L 107.22857142857143 114.04166666666666Q 107.22857142857143 111.04166666666666 110.22857142857143 111.04166666666666L 114.14285714285714 111.04166666666666Q 117.14285714285714 111.04166666666666 117.14285714285714 114.04166666666666L 117.14285714285714 114.04166666666666L 117.14285714285714 205L 117.14285714285714 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 107.22857142857143 205L 107.22857142857143 114.04166666666666Q 107.22857142857143 111.04166666666666 110.22857142857143 111.04166666666666L 114.14285714285714 111.04166666666666Q 117.14285714285714 111.04166666666666 117.14285714285714 114.04166666666666L 117.14285714285714 114.04166666666666L 117.14285714285714 205L 117.14285714285714 205z"
                                                              pathFrom="M 107.22857142857143 205L 107.22857142857143 205L 117.14285714285714 205L 117.14285714285714 205L 117.14285714285714 205L 117.14285714285714 205L 117.14285714285714 205L 107.22857142857143 205"
                                                              cy="111.04166666666666" cx="185.65714285714284" j="1"
                                                              val="55" barHeight="93.95833333333334"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3725"
                                                              d="M 186.65714285714284 205L 186.65714285714284 110.625Q 186.65714285714284 107.625 189.65714285714284 107.625L 193.57142857142856 107.625Q 196.57142857142856 107.625 196.57142857142856 110.625L 196.57142857142856 110.625L 196.57142857142856 205L 196.57142857142856 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 186.65714285714284 205L 186.65714285714284 110.625Q 186.65714285714284 107.625 189.65714285714284 107.625L 193.57142857142856 107.625Q 196.57142857142856 107.625 196.57142857142856 110.625L 196.57142857142856 110.625L 196.57142857142856 205L 196.57142857142856 205z"
                                                              pathFrom="M 186.65714285714284 205L 186.65714285714284 205L 196.57142857142856 205L 196.57142857142856 205L 196.57142857142856 205L 196.57142857142856 205L 196.57142857142856 205L 186.65714285714284 205"
                                                              cy="107.625" cx="265.0857142857143" j="2" val="57"
                                                              barHeight="97.375" barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3727"
                                                              d="M 266.0857142857143 205L 266.0857142857143 112.33333333333333Q 266.0857142857143 109.33333333333333 269.0857142857143 109.33333333333333L 273 109.33333333333333Q 276 109.33333333333333 276 112.33333333333333L 276 112.33333333333333L 276 205L 276 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 266.0857142857143 205L 266.0857142857143 112.33333333333333Q 266.0857142857143 109.33333333333333 269.0857142857143 109.33333333333333L 273 109.33333333333333Q 276 109.33333333333333 276 112.33333333333333L 276 112.33333333333333L 276 205L 276 205z"
                                                              pathFrom="M 266.0857142857143 205L 266.0857142857143 205L 276 205L 276 205L 276 205L 276 205L 276 205L 266.0857142857143 205"
                                                              cy="109.33333333333333" cx="344.51428571428573" j="3"
                                                              val="56" barHeight="95.66666666666667"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3729"
                                                              d="M 345.51428571428573 205L 345.51428571428573 103.79166666666666Q 345.51428571428573 100.79166666666666 348.51428571428573 100.79166666666666L 352.42857142857144 100.79166666666666Q 355.42857142857144 100.79166666666666 355.42857142857144 103.79166666666666L 355.42857142857144 103.79166666666666L 355.42857142857144 205L 355.42857142857144 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 345.51428571428573 205L 345.51428571428573 103.79166666666666Q 345.51428571428573 100.79166666666666 348.51428571428573 100.79166666666666L 352.42857142857144 100.79166666666666Q 355.42857142857144 100.79166666666666 355.42857142857144 103.79166666666666L 355.42857142857144 103.79166666666666L 355.42857142857144 205L 355.42857142857144 205z"
                                                              pathFrom="M 345.51428571428573 205L 345.51428571428573 205L 355.42857142857144 205L 355.42857142857144 205L 355.42857142857144 205L 355.42857142857144 205L 355.42857142857144 205L 345.51428571428573 205"
                                                              cy="100.79166666666666" cx="423.9428571428572" j="4"
                                                              val="61" barHeight="104.20833333333334"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3731"
                                                              d="M 424.9428571428572 205L 424.9428571428572 108.91666666666666Q 424.9428571428572 105.91666666666666 427.9428571428572 105.91666666666666L 431.8571428571429 105.91666666666666Q 434.8571428571429 105.91666666666666 434.8571428571429 108.91666666666666L 434.8571428571429 108.91666666666666L 434.8571428571429 205L 434.8571428571429 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 424.9428571428572 205L 424.9428571428572 108.91666666666666Q 424.9428571428572 105.91666666666666 427.9428571428572 105.91666666666666L 431.8571428571429 105.91666666666666Q 434.8571428571429 105.91666666666666 434.8571428571429 108.91666666666666L 434.8571428571429 108.91666666666666L 434.8571428571429 205L 434.8571428571429 205z"
                                                              pathFrom="M 424.9428571428572 205L 424.9428571428572 205L 434.8571428571429 205L 434.8571428571429 205L 434.8571428571429 205L 434.8571428571429 205L 434.8571428571429 205L 424.9428571428572 205"
                                                              cy="105.91666666666666" cx="503.3714285714286" j="5"
                                                              val="58" barHeight="99.08333333333334"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3733"
                                                              d="M 504.3714285714286 205L 504.3714285714286 100.375Q 504.3714285714286 97.375 507.3714285714286 97.375L 511.28571428571433 97.375Q 514.2857142857143 97.375 514.2857142857143 100.375L 514.2857142857143 100.375L 514.2857142857143 205L 514.2857142857143 205z"
                                                              fill="rgba(255, 255, 255, 0.25)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 504.3714285714286 205L 504.3714285714286 100.375Q 504.3714285714286 97.375 507.3714285714286 97.375L 511.28571428571433 97.375Q 514.2857142857143 97.375 514.2857142857143 100.375L 514.2857142857143 100.375L 514.2857142857143 205L 514.2857142857143 205z"
                                                              pathFrom="M 504.3714285714286 205L 504.3714285714286 205L 514.2857142857143 205L 514.2857142857143 205L 514.2857142857143 205L 514.2857142857143 205L 514.2857142857143 205L 504.3714285714286 205"
                                                              cy="97.375" cx="582.8000000000001" j="6" val="63"
                                                              barHeight="107.625" barWidth="11.914285714285716"></path>
                                                        <g id="SvgjsG3719" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG3720"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3722"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3724"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3726"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3728"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3730"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3732"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3734" class="apexcharts-series" rel="2"
                                                       seriesName="Revenue" data:realIndex="1">
                                                        <path id="SvgjsPath3738"
                                                              d="M 39.714285714285715 205L 39.714285714285715 78.16666666666666Q 39.714285714285715 75.16666666666666 42.714285714285715 75.16666666666666L 46.62857142857143 75.16666666666666Q 49.62857142857143 75.16666666666666 49.62857142857143 78.16666666666666L 49.62857142857143 78.16666666666666L 49.62857142857143 205L 49.62857142857143 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 39.714285714285715 205L 39.714285714285715 78.16666666666666Q 39.714285714285715 75.16666666666666 42.714285714285715 75.16666666666666L 46.62857142857143 75.16666666666666Q 49.62857142857143 75.16666666666666 49.62857142857143 78.16666666666666L 49.62857142857143 78.16666666666666L 49.62857142857143 205L 49.62857142857143 205z"
                                                              pathFrom="M 39.714285714285715 205L 39.714285714285715 205L 49.62857142857143 205L 49.62857142857143 205L 49.62857142857143 205L 49.62857142857143 205L 49.62857142857143 205L 39.714285714285715 205"
                                                              cy="75.16666666666666" cx="118.14285714285714" j="0"
                                                              val="76" barHeight="129.83333333333334"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3740"
                                                              d="M 119.14285714285714 205L 119.14285714285714 62.79166666666666Q 119.14285714285714 59.79166666666666 122.14285714285714 59.79166666666666L 126.05714285714285 59.79166666666666Q 129.05714285714285 59.79166666666666 129.05714285714285 62.79166666666666L 129.05714285714285 62.79166666666666L 129.05714285714285 205L 129.05714285714285 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 119.14285714285714 205L 119.14285714285714 62.79166666666666Q 119.14285714285714 59.79166666666666 122.14285714285714 59.79166666666666L 126.05714285714285 59.79166666666666Q 129.05714285714285 59.79166666666666 129.05714285714285 62.79166666666666L 129.05714285714285 62.79166666666666L 129.05714285714285 205L 129.05714285714285 205z"
                                                              pathFrom="M 119.14285714285714 205L 119.14285714285714 205L 129.05714285714285 205L 129.05714285714285 205L 129.05714285714285 205L 129.05714285714285 205L 129.05714285714285 205L 119.14285714285714 205"
                                                              cy="59.79166666666666" cx="197.57142857142856" j="1"
                                                              val="85" barHeight="145.20833333333334"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3742"
                                                              d="M 198.57142857142856 205L 198.57142857142856 35.458333333333314Q 198.57142857142856 32.458333333333314 201.57142857142856 32.458333333333314L 205.48571428571427 32.458333333333314Q 208.48571428571427 32.458333333333314 208.48571428571427 35.458333333333314L 208.48571428571427 35.458333333333314L 208.48571428571427 205L 208.48571428571427 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 198.57142857142856 205L 198.57142857142856 35.458333333333314Q 198.57142857142856 32.458333333333314 201.57142857142856 32.458333333333314L 205.48571428571427 32.458333333333314Q 208.48571428571427 32.458333333333314 208.48571428571427 35.458333333333314L 208.48571428571427 35.458333333333314L 208.48571428571427 205L 208.48571428571427 205z"
                                                              pathFrom="M 198.57142857142856 205L 198.57142857142856 205L 208.48571428571427 205L 208.48571428571427 205L 208.48571428571427 205L 208.48571428571427 205L 208.48571428571427 205L 198.57142857142856 205"
                                                              cy="32.458333333333314" cx="277" j="2" val="101"
                                                              barHeight="172.54166666666669"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3744"
                                                              d="M 278 205L 278 40.583333333333314Q 278 37.583333333333314 281 37.583333333333314L 284.9142857142857 37.583333333333314Q 287.9142857142857 37.583333333333314 287.9142857142857 40.583333333333314L 287.9142857142857 40.583333333333314L 287.9142857142857 205L 287.9142857142857 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 278 205L 278 40.583333333333314Q 278 37.583333333333314 281 37.583333333333314L 284.9142857142857 37.583333333333314Q 287.9142857142857 37.583333333333314 287.9142857142857 40.583333333333314L 287.9142857142857 40.583333333333314L 287.9142857142857 205L 287.9142857142857 205z"
                                                              pathFrom="M 278 205L 278 205L 287.9142857142857 205L 287.9142857142857 205L 287.9142857142857 205L 287.9142857142857 205L 287.9142857142857 205L 278 205"
                                                              cy="37.583333333333314" cx="356.42857142857144" j="3"
                                                              val="98" barHeight="167.41666666666669"
                                                              barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3746"
                                                              d="M 357.42857142857144 205L 357.42857142857144 59.375Q 357.42857142857144 56.375 360.42857142857144 56.375L 364.34285714285716 56.375Q 367.34285714285716 56.375 367.34285714285716 59.375L 367.34285714285716 59.375L 367.34285714285716 205L 367.34285714285716 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 357.42857142857144 205L 357.42857142857144 59.375Q 357.42857142857144 56.375 360.42857142857144 56.375L 364.34285714285716 56.375Q 367.34285714285716 56.375 367.34285714285716 59.375L 367.34285714285716 59.375L 367.34285714285716 205L 367.34285714285716 205z"
                                                              pathFrom="M 357.42857142857144 205L 357.42857142857144 205L 367.34285714285716 205L 367.34285714285716 205L 367.34285714285716 205L 367.34285714285716 205L 367.34285714285716 205L 357.42857142857144 205"
                                                              cy="56.375" cx="435.8571428571429" j="4" val="87"
                                                              barHeight="148.625" barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3748"
                                                              d="M 436.8571428571429 205L 436.8571428571429 28.625Q 436.8571428571429 25.625 439.8571428571429 25.625L 443.7714285714286 25.625Q 446.7714285714286 25.625 446.7714285714286 28.625L 446.7714285714286 28.625L 446.7714285714286 205L 446.7714285714286 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 436.8571428571429 205L 436.8571428571429 28.625Q 436.8571428571429 25.625 439.8571428571429 25.625L 443.7714285714286 25.625Q 446.7714285714286 25.625 446.7714285714286 28.625L 446.7714285714286 28.625L 446.7714285714286 205L 446.7714285714286 205z"
                                                              pathFrom="M 436.8571428571429 205L 436.8571428571429 205L 446.7714285714286 205L 446.7714285714286 205L 446.7714285714286 205L 446.7714285714286 205L 446.7714285714286 205L 436.8571428571429 205"
                                                              cy="25.625" cx="515.2857142857143" j="5" val="105"
                                                              barHeight="179.375" barWidth="11.914285714285716"></path>
                                                        <path id="SvgjsPath3750"
                                                              d="M 516.2857142857143 205L 516.2857142857143 52.54166666666666Q 516.2857142857143 49.54166666666666 519.2857142857143 49.54166666666666L 523.2 49.54166666666666Q 526.2 49.54166666666666 526.2 52.54166666666666L 526.2 52.54166666666666L 526.2 205L 526.2 205z"
                                                              fill="rgba(247,247,247,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="round" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMaskt3fu3qfp)"
                                                              pathTo="M 516.2857142857143 205L 516.2857142857143 52.54166666666666Q 516.2857142857143 49.54166666666666 519.2857142857143 49.54166666666666L 523.2 49.54166666666666Q 526.2 49.54166666666666 526.2 52.54166666666666L 526.2 52.54166666666666L 526.2 205L 526.2 205z"
                                                              pathFrom="M 516.2857142857143 205L 516.2857142857143 205L 526.2 205L 526.2 205L 526.2 205L 526.2 205L 526.2 205L 516.2857142857143 205"
                                                              cy="49.54166666666666" cx="594.7142857142858" j="6"
                                                              val="91" barHeight="155.45833333333334"
                                                              barWidth="11.914285714285716"></path>
                                                        <g id="SvgjsG3736" class="apexcharts-bar-goals-markers"
                                                           style="pointer-events: none">
                                                            <g id="SvgjsG3737"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3739"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3741"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3743"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3745"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3747"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG3749"
                                                               className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3718" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                    <g id="SvgjsG3735" class="apexcharts-datalabels"
                                                       data:realIndex="1"></g>
                                                </g>
                                                <line id="SvgjsLine3772" x1="0" y1="0" x2="556" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3773" x1="0" y1="0" x2="556" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3774" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3775" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3776" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG3760" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-8, 0)">
                                                <g id="SvgjsG3761" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG3707" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(255, 255, 255, 0.25);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(247, 247, 247);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 589px; height: 266px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="box-body up-mar40 bg-white position-relative">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Average Profit</div>
                                            <div class="fs-18 fw-500">$150K</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Revenue</div>
                                            <div class="fs-18 fw-500">$15,250k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Taxes</div>
                                            <div class="fs-18 fw-500">$50k</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="px-30 py-20">
                                            <div class="text-fade">Yearly Income</div>
                                            <div class="fs-18 fw-500">$44,850k</div>
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

    <!-- BEGIN MODAL -->
    <!-- Modal Add Category -->
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
    @include('v1.web.components.chatBox')
    <!-- Page Content overlay -->


@endsection
@section('extraAssets')
    <script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

    <!-- EmployX App -->
    <script src="/assets/js/demo.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/chart-widgets.js"></script>
@endsection
