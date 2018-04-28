@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Calendar
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/calendar_custom.css')}}"/>
@stop

@section('content')
            <header class="head">
                <div class="main-bar row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                            Calendar
                        </h4>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <ol  class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="active breadcrumb-item">Calendar</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-light lter bg-container cal_btn_hov">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    Draggable Events
                                    <div class="float-xs-right">
                                        <a href="#" class="btn btn-link btn-xs" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-block m-t-35">
                                    <div id='external-events'>
                                        <div class='external-event bg-warning'>Team Out <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                        <div class='external-event bg-primary'>Product Seminar <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                        <div class='external-event bg-danger'>Client Meeting <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                        <div class='external-event bg-info'>Repeating Event <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                        <div class='external-event bg-success'>Event Celebrations <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                        <p class="well no-border no-radius">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id='drop-remove'>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">remove after drop</span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">Create event</a>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-lg-9 media_max_991">
                            <div class="card">
                                <div class="card-block m-t-35">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel1">
                                        <i class="fa fa-plus"></i>
                                        Create Event
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <input type="text" id="new-event" class="form-control" placeholder="Event">
                                        <div class="input-group-btn">
                                            <button type="button" class="color-chooser-btn btn btn-default text-white dropdown-toggle" data-toggle="dropdown">
                                                Default
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu float-xs-right cal_modal_type color-chooser">
                                                <li class="bg-primary text-xs-center">
                                                    Primary
                                                </li>
                                                <li class="bg-success text-xs-center">
                                                    Success
                                                </li>
                                                <li class="bg-info text-xs-center">
                                                    Info
                                                </li>
                                                <li class="bg-warning text-xs-center">
                                                    warning
                                                </li>
                                                <li class="bg-danger text-xs-center">
                                                    Danger
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger float-xs-right" data-dismiss="modal">
                                        Close
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
            </div>


<!-- edit Modal -->
<div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-plus"></i>
                    Edit Event
                </h4>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" id="event_title" class="form-control" placeholder="Event">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default text-white dropdown-toggle color-chooser-btn" data-toggle="dropdown">
                            Default
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu float-xs-right cal_modal_type color-chooser">
                            <li class="bg-primary text-xs-center">
                                Primary
                            </li>
                            <li class="bg-success text-xs-center">
                                Success
                            </li>
                            <li class="bg-info text-xs-center">
                                Info
                            </li>
                            <li class="bg-warning text-xs-center">
                                warning
                            </li>
                            <li class="bg-danger text-xs-center">
                                Danger
                            </li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                </div>
                <!-- /input-group -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger float-xs-right" data-dismiss="modal">
                    Close
                    <i class="fa fa-times"></i>
                </button>
                <button type="button" class="btn btn-success pull-left text_save" data-dismiss="modal">
                    Update
                </button>
            </div>
        </div>
    </div>
</div>
<!-- global scripts-->
@stop
<!-- global scripts-->
@section('footer_scripts')
<!-- end of global scripts-->
<!--plugin script-->
<script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pluginjs/calendarcustom.js')}}" ></script>
<!-- end of plugin scripts -->
<script type="text/javascript" src="{{asset('assets/js/pages/calendar.js')}}"></script>

@stop