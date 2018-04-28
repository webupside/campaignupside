@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Notifications
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/toastr/css/toastr.min.css')}}" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/toastr.css')}}" />
    <!-- end of page level styles -->
@stop
@section('content')
                <header class="head">
                    <div class="main-bar row">
                        <div class="col-sm-4">
                            <h4 class="nav_top_align">
                                <i class="fa fa-anchor"></i>
                                Notifications
                            </h4>
                        </div>
                        <div class="col-sm-8">
                            <ol  class="breadcrumb float-xs-right nav_breadcrumb_top_align notifications_text_hover">
                                <li class="breadcrumb-item">
                                    <a href="index1" >
                                        <i class="fa fa-home" data-pack="default"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Components</a>
                                </li>
                                <li class="active breadcrumb-item">Notifications</li>
                            </ol>
                        </div>
                    </div>
                </header>
                <div class="outer notifications_page">
                    <div class="inner row bg-container">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white text-primary">
                                    Notifications
                                </div>
                                <div class="card-block basic_notifications">
                                    <div id="layouts">
                                        <div class="row">
                                            <div class="col-lg-12 text-xs-center">
                                                <p class="m-t-25">
                                                    <span class="lay-title">Top</span>
                                                    <span class="runner btn-outline-success" data-layout="top" data-type="success">Success</span>
                                                    <span class="runner btn-outline-danger" data-layout="top" data-type="error">Error</span>
                                                    <span class="runner btn-outline-primary" data-layout="top" data-type="confirm">Confirm</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Top Left</span>
                                                    <span class="runner btn-outline-danger" data-layout="topLeft" data-type="error">Error</span>
                                                    <span class="runner btn-outline-warning" data-layout="topLeft" data-type="warning">Warning</span>
                                                    <span class="runner btn-outline-primary" data-layout="topLeft" data-type="confirm">Confirm</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Top Center</span>
                                                    <span class="runner btn-outline-success" data-layout="topCenter" data-type="success">Success</span>
                                                    <span class="runner btn-outline-danger" data-layout="topCenter" data-type="error">Error</span>
                                                    <span class="runner btn-outline-warning" data-layout="topCenter" data-type="warning">Warning</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Top Right</span>
                                                    <span class="runner btn-outline-warning" data-layout="topRight" data-type="warning">Warning</span>
                                                    <span class="runner btn-outline-info" data-layout="topRight" data-type="information">Information</span>
                                                    <span class="runner btn-outline-primary" data-layout="topRight" data-type="confirm">Confirm</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Center Left</span>
                                                    <span class="runner btn-outline-info" data-layout="centerLeft" data-type="information">Information</span>
                                                    <span class="runner btn-outline-success" data-layout="centerLeft" data-type="success">Success</span>
                                                    <span class="runner btn-outline-warning" data-layout="centerLeft" data-type="warning">Warning</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Center</span>
                                                    <span class="runner btn-outline-warning" data-layout="center" data-type="warning">Warning</span>
                                                    <span class="runner btn-outline-info" data-layout="center" data-type="information">Information</span>
                                                    <span class="runner btn-outline-primary" data-layout="center" data-type="confirm">Confirm</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Center Right</span>
                                                    <span class="runner btn-outline-primary" data-layout="centerRight" data-type="alert">Alert</span>
                                                    <span class="runner btn-outline-success" data-layout="centerRight" data-type="success">Success</span>
                                                    <span class="runner btn-outline-primary" data-layout="centerRight" data-type="confirm">Confirm</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Bottom Left</span>
                                                    <span class="runner btn-outline-success" data-layout="bottomLeft" data-type="success">Success</span>
                                                    <span class="runner btn-outline-warning" data-layout="bottomLeft" data-type="warning">Warning</span>
                                                    <span class="runner btn-outline-primary" data-layout="bottomLeft" data-type="confirm">Confirm</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Bottom Center</span>
                                                    <span class="runner btn-outline-primary" data-layout="bottomCenter" data-type="alert">Alert</span>
                                                    <span class="runner btn-outline-danger" data-layout="bottomCenter" data-type="error">Error</span>
                                                    <span class="runner btn-outline-info" data-layout="bottomCenter" data-type="information">Information</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Bottom Right</span>
                                                    <span class="runner btn-outline-primary" data-layout="bottomRight" data-type="alert">Alert</span>
                                                    <span class="runner btn-outline-success" data-layout="bottomRight" data-type="success">Success</span>
                                                    <span class="runner btn-outline-danger" data-layout="bottomRight" data-type="error">Error</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-xs-center">
                                                <p class="m-t-10">
                                                    <span class="lay-title">Bottom</span>
                                                    <span class="runner btn-outline-primary" data-layout="bottom" data-type="alert">Alert</span>
                                                    <span class="runner btn-outline-success" data-layout="bottom" data-type="success">Success</span>
                                                    <span class="runner btn-outline-warning" data-layout="bottom" data-type="warning">Warning</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end of notifications-->


                        <div class="col-lg-12">
                            <div class="card m-t-35">
                                <div class="card-header bg-white text-info">
                                    <i class="livicon" data-name="bell" data-c="#fff" data-hc="white" data-size="18" data-loop="true"></i>
                                    Toastr Notification
                                </div>
                                <div class="card-block m-t-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5> <span class="text-info"><i class="fa fa-info-circle"> </i> </span> If you want to change the position of notification, click on clear toast</h5>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group m-t-20">
                                                <label class="form-control-label" for="title">Title</label>
                                                <input id="title" type="text" class="form-control" value="Toastr Notifications" placeholder="Enter a title ...">
                                            </div>
                                            <div class="form-group m-t-25">
                                                <label class="form-control-label" for="message">Message</label>
                                                <textarea class="form-control resize_vertical" id="message" rows="3" placeholder="Enter a message ...">Gnome &amp; Growl type non-blocking notifications</textarea>
                                            </div>
                                            <div class="form-group m-t-25">
                                                <div class="checkbox-list">
                                                    <div>
                                                        <label class="custom-control custom-checkbox" for="closeButton">
                                                            <input id="closeButton" type="checkbox" value="checked" checked="" class="input-small custom-checkbox custom-control-input"> Close Button
                                                            <span class="custom-control-indicator checker" id="uniform-closeButton"> </span>
                                                        </label></div><div>
                                                    <label class="custom-control custom-checkbox" for="addBehaviorOnToastClick">
                                                        <input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-small custom-checkbox custom-control-input">Add behavior on toast click
                                                        <span class="custom-control-indicator checker" id="uniform-addBehaviorOnToastClick"></span>
                                                    </label></div><div>
                                                    <label class="custom-control custom-checkbox" for="debugInfo">
                                                        <input id="debugInfo" type="checkbox" value="checked" class="custom-control-input input-small custom-checkbox"> Debug
                                                        <span class="custom-control-indicator checker" id="uniform-debugInfo"> </span>
                                                    </label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group m-t-20" id="toastTypeGroup">
                                                <label class="form-control-label toast-type">Toast Type</label>
                                                <div class="radio-list padding-right10">
                                                    <div>
                                                        <label class="custom-control custom-radio">
                                                            <input type="radio" name="toasts" class="custom-control-input custom-radio" value="success"
                                                                   checked="">
                                                            <span class="custom-control-indicator checked"></span> Success
                                                        </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="toasts" class="custom-control-input custom-radio" value="info">
                                                        <span class="custom-control-indicator checked"></span> Info
                                                    </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="toasts" class="custom-control-input custom-radio" value="warning">
                                                        <span class="custom-control-indicator checked"></span>Warning
                                                    </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="toasts" class="custom-control-input custom-radio" value="error">
                                                        <span class="custom-control-indicator checked"> </span> Error
                                                    </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group m-t-25" id="positionGroup">
                                                <label class="form-control-label position-type">Position</label>
                                                <div class="radio-list">
                                                    <div>
                                                        <label class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-top-left">
                                                            <span class="custom-control-indicator checked"></span> Top Left
                                                        </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-top-right" checked="">
                                                        <span class="custom-control-indicator checked"></span> Top Right
                                                    </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-top-full-width">
                                                        <span class="custom-control-indicator checked"></span> Top Full Width
                                                    </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-bottom-left">
                                                        <span class="custom-control-indicator checked"></span> Bottom Left
                                                    </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-bottom-right">
                                                        <span class="custom-control-indicator checked"></span> Bottom Right
                                                    </label></div><div>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-bottom-full-width">
                                                        <span class="custom-control-indicator checked"></span> Bottom Full Width
                                                    </label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="controls">
                                                <div class="form-group m-t-20">
                                                    <label class="form-control-label" for="showEasing">Show Easing</label>
                                                    <select class="form-control input-small" id="showEasing">
                                                        <option>swing</option>
                                                        <option>linear</option>
                                                    </select>
                                                </div>
                                                <div class="form-group m-t-25">
                                                    <label class="form-control-label" for="hideEasing">Hide Easing</label>
                                                    <select id="hideEasing" class="form-control input-small">
                                                        <option>swing</option>
                                                        <option>linear</option>
                                                    </select>
                                                </div>
                                                <div class="form-group m-t-25">
                                                    <label class="form-control-label" for="showMethod">Show Method</label>
                                                    <select id="showMethod" class="form-control input-small">
                                                        <option value="show">show</option>
                                                        <option value="fadeIn">fadeIn</option>
                                                        <option value="slideDown">slideDown</option>
                                                    </select>
                                                </div>
                                                <div class="form-group m-t-25">
                                                    <label class="form-control-label" for="hideMethod">Hide Method</label>
                                                    <select class="form-control input-small" id="hideMethod">
                                                        <option value="">hide</option>
                                                        <option value="fadeOut">fadeOut</option>
                                                        <option value="slideUp">slideUp</option>
                                                        <option value="show">show</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="controls">
                                                <div class="form-group m-t-20">
                                                    <label class="form-control-label" for="showDuration">Show Duration</label>
                                                    <input id="showDuration" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                                </div>
                                                <div class="form-group m-t-25">
                                                    <label class="form-control-label" for="hideDuration">Hide Duration</label>
                                                    <input id="hideDuration" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                                </div>
                                                <div class="form-group m-t-25">
                                                    <label class="form-control-label" for="timeOut">Time out</label>
                                                    <input id="timeOut" type="text" placeholder="ms" class="form-control input-small" value="5000">
                                                </div>
                                                <div class="form-group m-t-25">
                                                    <label class="form-control-label" for="timeOut">Extended time out</label>
                                                    <input id="extendedTimeOut" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 m-t-20">
                                            <button type="button" class="btn btn-mint btn-raised toastrshow" id="showtoast">
                                                Show Toast
                                            </button>
                                            <button type="button" class="btn btn-warning btn-raised toastrshow" id="cleartoasts">
                                                Clear Toasts
                                            </button>
                                            <button type="button" class="btn btn-primary btn-raised toastrshow" id="clearlasttoast">Clear Last Toast
                                            </button>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row margin-top-10">
                                        <div class="col-lg-12">
                                            <pre id="toastrOptions" class="code_section"></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of taost notifications-->

                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
@stop
@section('footer_scripts')
<!-- Plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/noty/js/jquery.noty.packaged.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/toastr/js/toastr.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/toastr_notifications.js')}}"></script>
<!-- end of page level scripts-->

@stop