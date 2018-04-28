@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Dashboard-2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
@stop
@section('content')

            <header class="head">
                <div class="main-bar row">
                    <div class="col-xs-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </h4>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">


                    <!--top section widgets-->
                    <div class="row widget_countup">
                        <div class="col-xs-12 col-sm-6 col-xl-3">

                            <div id="top_widget1">
                                <div class="front">
                                    <div class="bg-primary p-d-15 b_r_5">
                                        <div class="float-xs-right m-t-5">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="user_font">Users</div>
                                        <div id="widget_countup1">3,250</div>
                                        <div class="tag-white">
                                            <span id="percent_count1">85</span>%
                                        </div>
                                        <div class="previous_font">Yearly Users stats</div>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-xs-right m-t-5">
                                                <i class="fa fa-users text-primary"></i>
                                            </div>
                                            <div id="widget_countup12">3,250</div>
                                            <div>Users</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="visitsspark-chart"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-xl-3 media_max_573">
                            <div id="top_widget2">
                                <div class="front">
                                    <div class="bg-success p-d-15 b_r_5">
                                        <div class="float-xs-right m-t-5">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="user_font">Sales</div>
                                        <div id="widget_countup2">1,140</div>
                                        <div class="tag-white">
                                            <span id="percent_count2">60</span>%
                                        </div>
                                        <div class="previous_font">Sales per month</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-xs-right m-t-5 text-success">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div id="widget_countup22">1,140</div>
                                            <div>Sales</div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="salesspark-chart"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget3">
                                <div class="front">
                                    <div class="bg-warning p-d-15 b_r_5">
                                        <div class="float-xs-right m-t-5">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="user_font">Comments</div>
                                        <div id="widget_countup3">85</div>
                                        <div class="tag-white ">
                                            <span id="percent_count3">30</span>%
                                        </div>
                                        <div class="previous_font">Monthly comments</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-xs-right m-t-5 text-warning">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                            <div id="widget_countup32">85</div>
                                            <div>Comments</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="mousespeed"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget4">
                                <div class="front">
                                    <div class="bg-danger p-d-15 b_r_5">
                                        <div class="float-xs-right m-t-5">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="user_font">Rating</div>
                                        <div id="widget_countup4">8</div>
                                        <div class="tag-white">
                                            <span id="percent_count4">80</span>%
                                        </div>
                                        <div class="previous_font">This month ratings </div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-xs-right m-t-5 text-danger">
                                                <i class="fa fa-star-o"></i>
                                            </div>

                                            <div id="widget_countup42">8</div>
                                            <div>Rating</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="rating"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row m-t-35">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <span class="card-title">Today Stats</span>
                                    <div class="dropdown chart_drop float-xs-right">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                        <i class="fa fa-arrows-alt"></i>
                                    </div>
                                    </div>
                                <div class="card-block">
                                    <div class="demo-chartist mb-md m-t-15" id="chart1"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 m-t-35">
                            <div class="bg-white circliful_section section_border">
                                <div class="tab-content text-xs-center">
                                    <div  class="tab-pane active" id="fa-icons">
                                        <h4 class="p-t-30">Design Progress</h4>
                                        <div id="myStat"></div>
                                    </div>
                                    <div class="tab-pane" id="themify-icons">
                                        <h4 class="p-t-30">Coding Progress</h4>
                                        <div id="myStat2" ></div>
                                    </div>
                                    <div class="tab-pane" id="ionicons">
                                        <h4 class="p-t-30">Doc's Progress</h4>
                                        <div id="myStat3"></div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs m-t-35 text-xs-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#fa-icons" data-toggle="tab">
                                            <div><i class="fa fa-pie-chart"></i></div>
                                            <span>Design</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" id="themify_icon">
                                        <a class="nav-link" href="#themify-icons" data-toggle="tab">
                                            <div><i class="fa fa-check-square-o"></i></div>
                                            <span>Coding</span>
                                        </a>
                                    </li>

                                    <li class="nav-item" id="ionicons_tab">
                                        <a class="nav-link" href="#ionicons" data-toggle="tab">
                                            <div><i class="fa fa-pencil"></i></div>
                                            <span>Docs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card m-t-35 real_charts">
                                <div class="card-header bg-white">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-xs-center" href="#orders_section" role="tab" data-toggle="tab">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-xs-center" href="#sales_section" role="tab" data-toggle="tab">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-xs-center" href="#users_section" role="tab" data-toggle="tab">Users</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block">


                                    <!-- Tab panes -->
                                    <div class="tab-content m-t-20">
                                        <div role="tabpanel" class="tab-pane fade in active" id="orders_section">
                                            <div id="order_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="sales_section">
                                            <div id="sale_realtime" class="flotChart1">

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="users_section">
                                            <div id="users_realtime" class="flotChart1">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="col-lg-5 col-xs-12 m-t-35">
                            <div class="row">
                                <div class="col-xs-12 text-xs-center text-white">
                                    <div class="lorem_background">
                                        <div>
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}" alt="lorem" class="img-fluid rounded-circle lorem_img">
                                        </div>
                                        <div class="text-white font_18">Stuart</div>
                                        <!--<div>stuart@gmail.com</div>-->
                                        <div class="text-xs-center lorem_bg m-b-0">
                                            <div class="row">
                                                <div class="col-xs-3 lorem_font_icon">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                                <div class="col-xs-3 lorem_font_icon">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <div class="col-xs-3 lorem_font_icon">
                                                    <i class="fa fa-google-plus"></i>
                                                </div>
                                                <div class="col-xs-3">
                                                    <i class="fa fa-instagram"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="list-group bg-white section_border">
                                        <a href="#" class="lorem_group_item lorem_group_item_bottom">
                                            <span class="tag tag-pill tag-primary float-xs-right">224</span>
                                            <span class="p-l-10">Followers</span>
                                            <span class="float-xs-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="lorem_group_item">
                                            <span class="tag tag-pill tag-primary float-xs-right">14</span>
                                            <span class="p-l-10">Following</span>
                                            <span class="float-xs-left">
                                                <i class="fa fa-users"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-xs-12 m-t-35">
                                <div class="weather_img">
                                    <div class="row header_align">
                                        <div class="col-sm-8 col-xs-7 text-white info">
                                            <div class="city">City: Bangkok</div>
                                            <div class="night">Night - 21:17 PM</div>

                                            <div class="temp">4<sup>o</sup></div>
                                            <div class="wind">
                                                <span>28 km/h</span>
                                            </div>
                                        </div>
                                        <div class="icon col-xs-5 col-sm-4">
                                            <img src="{{asset('assets/img/weather1.png')}}" alt="weather" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="background_opacity">
                                                <div class="row header_align">
                                                    <div class="col-xs-2 border_right days_margin_top">
                                                        <div class="day text-xs-center">
                                                            <div class="day_font">Mon</div>
                                                            <div>
                                                                <img src="{{asset('assets/img/w5.png')}}" alt="weather" class="img-fluid">
                                                            </div>
                                                            <div class="day_font">30<sup>o</sup></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 border_right days_margin_top">
                                                        <div class="day text-xs-center">
                                                            <div class="day_font">Tue</div>
                                                            <div>
                                                                <img src="{{asset('assets/img/w2.png')}}" alt="weather" class="img-fluid">
                                                            </div>
                                                            <div class="day_font">29<sup>o</sup></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 border_right days_margin_top">
                                                        <div class="day text-xs-center">
                                                            <div class="day_font">Wed</div>
                                                            <div>
                                                                <img src="{{asset('assets/img/w3.png')}}" alt="weather" class="img-fluid">
                                                            </div>
                                                            <div class="day_font">34<sup>o</sup></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 border_right days_margin_top">
                                                        <div class="day text-xs-center">
                                                            <div class="day_font">Thu</div>
                                                            <div>
                                                                <img src="{{asset('assets/img/w4.png')}}" alt="weather" class="img-fluid">
                                                            </div>
                                                            <div class="day_font">32<sup>o</sup></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 border_right days_margin_top">
                                                        <div class="day text-xs-center">
                                                            <div class="day_font">Fri</div>
                                                            <div>
                                                                <img src="{{asset('assets/img/w5.png')}}" alt="weather" class="img-fluid">
                                                            </div>
                                                            <div class="day_font">35<sup>o</sup></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 days_margin_top">
                                                        <div class="day text-xs-center">
                                                            <div class="day_font">Sat</div>
                                                            <div>
                                                                <img src="{{asset('assets/img/w2.png')}}" alt="weather" class="img-fluid">
                                                            </div>
                                                            <div class="day_font">36<sup>o</sup></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card m-t-35">

                            <div class="card-block m-t-10">
                                <!--<svg id="fillgauge1"  width="100%" height="193"></svg>-->
                                <div class="row">
                                    <div class="col-lg-12">
                                <h5>Average Monthly Uploads</h5>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="test-circle">
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <br />
                                <span id="monthly_upload"></span>
                                </div>




                            </div>
                        </div>
                            </div>
                    </div>
                    <div class="col-lg-4 m-t-35">
                        <div class="social-counter text-xs-center">
                            <ul class="m-b-0">
                                <li class="facebook">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-4 text-xs-right social_icon_top"><span class="social-icon text-xs-center"><i class="fa fa-facebook"></i></span></div>
                                            <div class="col-xs-8 text-xs-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-4 text-xs-right social_icon_top"><span class="social-icon text-xs-center"><i class="fa fa-twitter"></i></span></div>
                                            <div class="col-xs-8 text-xs-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="google">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-4 text-xs-right social_icon_top"><span class="social-icon text-xs-center"><i class="fa fa-google-plus"></i></span></div>
                                            <div class="col-xs-8 text-xs-left social_fa_top"><span class="count" id="g+_count">678</span> Followers</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="instagram">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-4 text-xs-right social_icon_top"><span class="social-icon text-xs-center"><i class="fa fa-instagram"></i></span></div>
                                            <div class="col-xs-8 text-xs-left social_fa_top"><span class="count">2M</span> Followers</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-4 text-xs-right social_icon_top"><span class="social-icon text-xs-center"><i class="fa fa-linkedin"></i></span></div>
                                            <div class="col-xs-8 text-xs-left social_fa_top"><span class="count" id="in_count">124</span> Followers</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                    </div>
@stop
@section('footer_scripts')
<!--  plugin scripts -->
<script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/flip/js/jquery.flip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.sparkline.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pluginjs/chartist-tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
<!--end of plugin scripts-->

<script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>
@stop
