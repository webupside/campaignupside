@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Widgets 3
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/swiper/css/swiper.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/ihover/css/ihover.min.css')}}"/>
    <!-- end of page level styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/widgets.css')}}">
@stop
@section('content')
            <header class="head">
                <div class="main-bar row">
                    <div class="col-lg-6 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-anchor"></i>
                            Widgets 3
                        </h4>
                    </div>
                    <div class="col-lg-6 col-sm-8">
                        <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1">
                                    <i class="fa fa-home"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Widgets</a>
                            </li>
                            <li class="breadcrumb-item active">Widgets 3</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row sales_section">
                        <div class="col-xl-3 col-sm-6 col-xs-12">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-info"></span>
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-xs-right m-t-5">ORDERS</h5>
                                    <h1 class="sales_number m-t-15 text-xs-right" id="orders_countup">1,425</h1>
                                    <p class="sales_text">Total orders: 9,320
                                        <span class="pull-right"><i
                                                class="fa fa-caret-up text-mint font_18 m-r-5"></i>25.25%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-xs-12 media_max_573">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-danger"></span>
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-xs-right m-t-5">REVENUE</h5>
                                    <h1 class="sales_number m-t-15 text-xs-right">$<span id="revenue_countup">600</span>
                                    </h1>
                                    <p class="sales_text">Total revenue: 8,250
                                        <span class="pull-right"><i
                                                class="fa fa-caret-down text-danger font_18 m-r-5"></i>20%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-xs-12 media_max_1199">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-primary"></span>
                                    <i class="fa fa-cube"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-xs-right m-t-5">PRODUCTS</h5>
                                    <h1 class="sales_number m-t-15 text-xs-right" id="products_countup">
                                        2,100</h1>
                                    <p class="sales_text">Total products: 12,100
                                        <span class="pull-right"><i
                                                class="fa fa-caret-up text-primary font_18 m-r-5"></i>45%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-xs-12 media_max_1199">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-warning"></span>
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-xs-right m-t-5">SOLD</h5>
                                    <h1 class="sales_number m-t-15 text-xs-right" id="sold_countup">1,025</h1>
                                    <p class="sales_text">Total sold: 7,600
                                        <span class="pull-right"><i
                                                class="fa fa-caret-up text-warning font_18 m-r-5"></i>24.5%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-12 m-t-35">
                            <div class="bg-white b_r_5 section_border">
                                <div class="text-xs-center">
                                    <img src="{{asset('assets/img/tshirt2.png')}}" alt="tshirt" class="img-fluid tea_shirt_img m-t-15">
                                </div>
                                <div class="p-d-15 text-xs-center">
                                    <div class="font_18 text-primary"> Boys T-Shirt</div>
                                    <div>by Jungle Book</div>
                                    <div class="text-danger">&#8377; 499</div>
                                </div>
                                <div class="text-xs-center">
                                    <button class="btn btn-primary m-b-20">Purchase</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 m-t-35">
                            <div class="bg-white signin_wid">
                                <div>
                                    <span class="text-success signin_wid_font sign_in_cursor">SIGN IN</span>
                                    <span class="sign_in_cursor">SIGN UP</span>
                                </div>
                                <div class="text-xs-center">
                                    <img src="{{asset('assets/img/images.jpg')}}" alt="image" class="img-fluid rounded-circle signin_img">
                                </div>
                                <div class="m-t-15">
                                    <div class="form-group">
                                        <label for="email" class="form-control-label"> E-mail</label>
                                        <input type="text" class="form-control b_r_25" id="email" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="form-control-label">Password</label>
                                        <input type="password" class="form-control b_r_25" id="password"   name="password" placeholder="Password">
                                    </div>
                                    <label class="custom-control custom-checkbox error_color">
                                        <input type="checkbox" class="custom-control-input" name="activate" data-bv-field="activate">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Keep me login.</span>
                                        <br>
                                    </label>
                                    <div class="form-group text-xs-center">
                                        <button class="btn btn-primary b_r_25 m-t-10">SIGN IN</button>
                                        <button class="btn btn-secondary b_r_25 m-t-10">FORGOT PASSWORD</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xs-12 m-t-35">
                            <div class="section_border">
                            <div class="row">
                                <div class="col-xs-12 text-xs-center text-white">
                                    <div class="lorem_background section">
                                        <div>
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}" alt="lorem" class="img-fluid rounded-circle lorem_img">
                                        </div>
                                        <div class="text-white font_18">Stuart</div>
                                        <div>stuart@gmail.com</div>
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
                                    <div class="list-group bg-white">
                                        <a href="#" class="lorem_group_item lorem_group_item_bottom">
                                            <span class="tag tag-pill tag-primary float-xs-right">55</span>
                                            <span class="p-l-10">Recent activity</span>
                                            <span class="float-xs-left">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="lorem_group_item lorem_group_item_bottom">
                                            <span class="tag tag-pill tag-primary float-xs-right">224</span>
                                            <span class="p-l-10">Followers</span>
                                            <span class="float-xs-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="lorem_group_item">
                                            <span class="tag tag-pill tag-primary float-xs-right">14</span>
                                            <span class="p-l-10">Online</span>
                                            <span class="float-xs-left">
                                                <i class="fa fa-users"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="row user_widget">
                        <div class="col-xs-12 col-sm-6 col-xl-3 m-t-35">
                            <div class="bg-danger b_r_5 micheal_padding">
                                <div>
                                    <div class="float-xs-left m-r-15"><img src="{{asset('assets/img/admin.jpg')}}" alt="admin" class="img-fluid rounded-circle wid_img_width"></div>
                                    <div class="m-t-5">
                                        <div class="user_wid_font">Admin</div>
                                        <div class="micheal_font">Micheal</div>
                                        <div>admin@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 m-t-35">
                            <div class="bg-primary b_r_5 micheal_padding">
                                <div>
                                    <div class="float-xs-left m-r-15"><img src="{{asset('assets/img/mailbox_imgs/7.jpg')}}" alt="admin" class="img-fluid rounded-circle wid_img_width"></div>
                                    <div class="m-t-5">
                                        <div class="user_wid_font">User</div>
                                        <div class="micheal_font">Miller</div>
                                        <div>miller@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 m-t-35">
                            <div class="bg-success b_r_5 micheal_padding">
                                <div>
                                    <div class="float-xs-left m-r-15"><img src="{{asset('assets/img/mailbox_imgs/8.jpg')}}" alt="admin" class="img-fluid rounded-circle wid_img_width"></div>
                                    <div class="m-t-5">
                                        <div class="user_wid_font">User</div>
                                        <div class="micheal_font">Sandy</div>
                                        <div>sandy@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 m-t-35">
                            <div class="bg-warning b_r_5 micheal_padding">
                                <div>
                                    <div class="float-xs-left m-r-15"><img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}" alt="admin" class="img-fluid rounded-circle wid_img_width"></div>
                                    <div class="m-t-5">
                                        <div class="user_wid_font">User</div>
                                        <div class="micheal_font">Stuart</div>
                                        <div>stuart@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-12 mayor_section">
                            <div class="bg-white p-d-10 section_border">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="float-xs-left">
                                            <i class="fa fa-facebook  mayor_top_font m-t-5"></i>
                                        </div>
                                        <div class="float-xs-right">
                                            <i class="fa fa-twitter mayor_top_font"></i>
                                        </div>
                                        <div class="text-xs-center">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" alt="mayor"  class="img-fluid rounded-circle mayor_img">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs-center font_18">
                                    J.Houston
                                </div>
                                <div class="text-xs-center">
                                    Boston, United States
                                </div>
                                <div class="m-t-5 text-xs-center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                                <div class="row m-t-10">
                                    <div class="col-xl-4 col-lg-6 col-xs-4 text-xs-center">
                                        <div class="text-primary font_18 bottom_5">129</div>
                                        <div>Followers</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-xs-4 text-xs-center">
                                        <div class="text-primary font_18 bottom_5">16</div>
                                        <div>Comments</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-xs-4 text-xs-center">
                                        <div class="text-primary font_18 bottom_5">54</div>
                                        <div>Likes</div>
                                    </div>
                                </div>
                                <div class="text-xs-center m-t-5">
                                    <button class="btn btn-primary">Follow</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 m-t-35 ihover_item">
                            <div class="ih-item square colored effect1 left_and_right"><a>
                                <div class="img"><img src="{{asset('assets/img/flower3.jpg')}}" alt="img" class="img-fluid ihover_img1"></div>
                                <div class="info">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem Ipsum is simply dummy text</p>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xs-12 m-t-35">
                            <div class="bg-white section_border left_align_img">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="left_image"></div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 text-justify left_img_text">
                                        <div class="text-primary float-xs-left font_18">John Doe</div>
                                        <div class="text-xs-right font_18">
                                            <i class="fa fa-facebook"></i>
                                            <i class="fa fa-twitter m-l-10"></i>
                                            <i class="fa fa-google m-l-10"></i>
                                        </div>
                                        <h5 class="m-t-10">
                                            Lorem ipsum dolor
                                        </h5>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard.
                                        <div class="m-t-15 p-b-15 text-xs-center">
                                            <button class="btn btn-success b_r_20">Read More</button>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="float-xs-left">
                                                    <a class="text-danger" href="#"><i class="fa fa-heart m-l-5"></i>
                                                        <span class="p-l-5">150</span>
                                                    </a>
                                                </div>
                                                <div class="float-xs-right">
                                                    <a class="text-success" href="#"><i class="fa fa-comment m-l-5"></i>
                                                        <span class="p-l-5">60</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-lg-5 m-t-35">
                            <div class="bg-primary p-d-10">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="float-xs-left alex">520 Following</div>
                                        <div class="float-xs-right alex">450 Followers</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 text-xs-center">
                                        <img src="{{asset('assets/img/authors/avatar1.jpg')}}" alt="avatar" class="img-fluid rounded-circle avatar_img">
                                    </div>
                                </div>
                                <div class="text-xs-center m-t-5 alexandra">Alexandra</div>
                                <div class="text-xs-center alex_city"><i class="fa fa-map-marker"></i> Wellington, New zealand</div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="float-xs-left alex">1k Likes</div>
                                        <div class="float-xs-right alex">50 Feeds</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 m-t-35">
                            <div class="wid_signup_img p-d-15">
                                <div class="signup_text_top">
                                    <div class="row">
                                        <div class="col-xs-12 text-white text-xs-center">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 text-xs-center">
                                            <button class="btn signin_btn m-t-15">SIGN IN</button>
                                            <button class="btn signup_btn m-t-15">SIGN UP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 m-t-35">
                            <div class="row">
                                <div class="col-xs-6 text-xs-center p-r-0">
                                    <div class="bg-facebook wid_fb_font">
                                        <i class="fa fa-facebook text-white"></i>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-xs-center p-l-0">
                                    <div class="bg-twitter wid_twitter_font">
                                        <i class="fa fa-twitter text-white"></i>
                                    </div>
                                    <div class="bg-gplus wid_google_font">
                                        <i class="fa fa-google-plus text-white"></i>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-xs-center">
                                    <div class="bg-warning wid_rss_font">
                                        <i class="fa fa-rss text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
@stop
@section('footer_scripts')
<script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pages/widget3.js')}}"></script>
@stop