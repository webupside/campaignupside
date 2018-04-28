@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Ratings
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/starability/css/starability-all.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstraprating/css/star-rating.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/rateyo/css/jquery.rateyo.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/sweetalert/css/sweetalert2.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/ratings.css')}}">
    <!--End of Plugin styles-->
@stop
@section('content')
            <header class="head">
                <div class="main-bar row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
                            Ratings
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Forms</a>
                            </li>
                            <li class="active breadcrumb-item">Ratings</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                    Ratings
                                </div>
                                <div class="card-block">
                                    <div class="row m-t-30">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-5">
                                            <form>
                                                <h5>Default star rating:</h5>
                                                <div class="starability-basic">
                                                    <input type="radio" id="rate5" name="rating" value="5" />
                                                    <label for="rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="rate4" name="rating" value="4" />
                                                    <label for="rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="rate3" name="rating" value="3" />
                                                    <label for="rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="rate2" name="rating" value="2" />
                                                    <label for="rate2" title="Not good"  aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="rate1" name="rating" value="1" />
                                                    <label for="rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-5">
                                            <form>
                                                <h5>Slot machine rating:</h5>
                                                <div class="starability-slot">
                                                    <input type="radio" id="slot-rate5" name="rating" value="5" />
                                                    <label for="slot-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="slot-rate4" name="rating" value="4" />
                                                    <label for="slot-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="slot-rate3" name="rating" value="3" />
                                                    <label for="slot-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="slot-rate2" name="rating" value="2" />
                                                    <label for="slot-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="slot-rate1" name="rating" value="1" />
                                                    <label for="slot-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-5">
                                            <form>
                                                <h5>Growing star rating:</h5>
                                                <div class="starability-grow">
                                                    <input type="radio" id="growing-rate5" name="rating" value="5" />
                                                    <label for="growing-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="growing-rate4" name="rating" value="4" />
                                                    <label for="growing-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="growing-rate3" name="rating" value="3" />
                                                    <label for="growing-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="growing-rate2" name="rating" value="2" />
                                                    <label for="growing-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="growing-rate1" name="rating" value="1" />
                                                    <label for="growing-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-5">
                                            <form>
                                                <h5>Growing & rotating star rating:</h5>
                                                <div class="starability-growRotate">
                                                    <input type="radio" id="growing-rotating-rate5" name="rating" value="5" />
                                                    <label for="growing-rotating-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="growing-rotating-rate4" name="rating" value="4" />
                                                    <label for="growing-rotating-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="growing-rotating-rate3" name="rating" value="3" />
                                                    <label for="growing-rotating-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="growing-rotating-rate2" name="rating" value="2" />
                                                    <label for="growing-rotating-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="growing-rotating-rate1" name="rating" value="1" />
                                                    <label for="growing-rotating-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-5">
                                            <form>
                                                <h5>Fading star rating:</h5>
                                                <div class="starability-fade">
                                                    <input type="radio" id="fading-rate5" name="rating" value="5" />
                                                    <label for="fading-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="fading-rate4" name="rating" value="4" />
                                                    <label for="fading-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="fading-rate3" name="rating" value="3" />
                                                    <label for="fading-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="fading-rate2" name="rating" value="2" />
                                                    <label for="fading-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="fading-rate1" name="rating" value="1" />
                                                    <label for="fading-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-5">
                                            <form>
                                                <h5>Checkmark rating:</h5>
                                                <div class="starability-checkmark">
                                                    <input type="radio" id="checkmark-rate5" name="rating" value="5" />
                                                    <label for="checkmark-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="checkmark-rate4" name="rating" value="4" />
                                                    <label for="checkmark-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="checkmark-rate3" name="rating" value="3" />
                                                    <label for="checkmark-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="checkmark-rate2" name="rating" value="2" />
                                                    <label for="checkmark-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="checkmark-rate1" name="rating" value="1" />
                                                    <label for="checkmark-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Starability
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Hover to change and click to set</h5>
                                            <div id="rateYo"></div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Star width</h5>
                                            <div id="rateYo_width"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Normal fill</h5>
                                            <div id="rateYo_normalfill"></div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Rated fill</h5>
                                            <div id="rateYo_ratedfill"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Multi color</h5>
                                            <div id="rateYo_multicolor"></div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Number of stars</h5>
                                            <div id="rateYo_numstars"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Maximum value</h5>
                                            <div class="float-xs-left rating-container">
                                                <div id="rateYo_maxval" data-value="0.5"></div>
                                                <div class="counter"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Precission</h5>
                                            <div class="float-xs-left rating-container">
                                                <div id="rateYo_precission"></div>
                                                <div class="counter"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Rating</h5>
                                            <div class="float-xs-left rating-container">
                                                <div id="rateYo_rating"></div>
                                                <div class="counter"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Half star</h5>
                                            <div id="rateYo_halfstar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Advanced Starability
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Full star</h5>
                                            <div id="rateYo_fullstar"></div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Read only</h5>
                                            <div id="rateYo_readonly"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Spacing</h5>
                                            <div class="float-xs-left rating-container">
                                                <div id="rateYo_spacing"></div>
                                                <div class="counter"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Right to left</h5>
                                            <div class="float-xs-left rating-container">
                                                <div id="rateYo_rtl"></div>
                                                <div class="counter"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <!--<h5 class="m-t-25">On init</h5>-->
                                            <!--<div id="rateYo_oninit"></div>-->
                                            <h5 class="m-t-25">On change</h5>
                                            <div class="float-xs-left rating-container">
                                                <div id="rateYo_onchange"></div>
                                                <div class="counter"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">On set</h5>
                                            <div id="rateYo_onset"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Rating</h5>
                                            <div id="rateYo_rate"></div>
                                            <div>
                                                <button class="btn btn-primary float-xs-left get-rating m-t-15" id="get_rating">Get Rating</button>
                                                <div class="float-xs-left">&nbsp;</div>
                                                <button class="btn btn-primary float-xs-left set-rating m-t-15" id="set_rating">Set Random Rating</button>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-6 col-sm-6 m-t-10">
                                            <h5 class="m-t-25">Destroy</h5>
                                            <div class="float-xs-left rating-container">
                                                <div id="rateYo_destroy"></div>
                                                <div class="m-t-15">
                                                    <button class="btn btn-primary float-xs-left destroy" id="destroy">Destroy</button>
                                                    <div class="float-xs-left">&nbsp;</div>
                                                    <button class="btn btn-primary float-xs-left initialize" id="initialize">Initialize</button>
                                                </div>
                                            </div>
                                        </div>
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
<!--Plugin scripts-->
<script type="text/javascript" src="{{asset('assets/vendors/bootstraprating/js/star-rating.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/rateyo/js/jquery.rateyo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pages/ratings.js')}}"></script>
<!--End of Plugin scripts-->
@stop