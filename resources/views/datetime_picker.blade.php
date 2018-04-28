@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Date time picker
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--plugin syles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/inputlimiter/css/jquery.inputlimiter.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jquery-tagsinput/css/jquery.tagsinput.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datepicker/css/bootstrap-datepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datetimepicker/css/DateTimePicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/j_timepicker/css/jquery.timepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/clockpicker/css/jquery-clockpicker.css')}}" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/colorpicker_hack.css')}}" />
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
            <header class="head">
                <div class="main-bar row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
                            Date Time Picker
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol  class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Forms</a>
                            </li>
                            <li class="active breadcrumb-item">Date Time Picker</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-light lter bg-container">
                    <!-- BEGIN DATE PICKER -->
                    <div class="row">
                        <!-- .col-lg-12 -->
                        <div class="col-xl-12">
                            <div class="card form_elements_datepicker">
                                <div class="card-header bg-white">
                                    Date Picker
                                </div>
                                <div class="card-block" id="datePickerBlock">
                                    <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Format specified via options</h5>
                                            <form>
                                                <input type="text" class="form-control" placeholder="dd-mm-yyyy" id="dp1">
                                            </form>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Format specified via data tag</h5>
                                            <form>
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-date-format="dd/mm/yyyy" id="dp2">
                                            </form>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Field with different style</h5>
                                            <form>
                                                <input type="text" class="form-control" data-field="datetime">
                                            </form>
                                            <div id="dtBox"></div>
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>As component</h5>
                                            <form>
                                                <div class="input-group input-append date" id="dp3" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" placeholder="dd-mm-yyyy">
                                                    <span class="input-group-addon add-on">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Start with years viewMode</h5>
                                            <form>
                                                <div class="input-group input-append  date" id="dpYears"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                    <input class="form-control" type="text" placeholder="yyyy-mm-dd">
                                                    <span class="input-group-addon add-on">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Months and year</h5>
                                            <form>
                                                <div class="input-group input-append  date" id="dpMonths" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                                    <input class="form-control" type="text" placeholder="mm/yyyy">
                                                    <span class="input-group-addon add-on">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- END DATE PICKER -->
                    <!-- .row -->
                    <div class="row">
                        <!-- .col-lg-12 -->
                        <div class="col-xl-12">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Date Range Picker
                                </div>
                                <div class="card-block" id="dateRangePickerBlock">
                                    <div class="row">
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Input initially empty</h5>
                                            <form>
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                    <input type="text" class="form-control" id="date_range" name="date range">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Pre-defined Ranges & Callback</h5>
                                            <form>
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                    <input type="text" class="form-control" id="reportrange" placeholder="dd/mm/yyyy-dd/mm/yyyy">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Reservation dates</h5>
                                            <form>
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                    <input type="text" name="reservation" id="reservation" class="form-control" value="01/10/2016 - 02/10/2016">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.block -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!--END DATE RANGE PICKER -->
                    <!-- BEGIN TIME PICKER -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Color Picker
                                </div>
                                <div class="card-block" id="colorPickerBlock">
                                    <div class="row m-b-20">
                                        <div class="col-lg-6 col-xs-12 input_field_sections">
                                            <h5>Picker with hexa format</h5>
                                            <form>
                                                <input type="text" class="form-control" placeholder="#8fff00" id="cp1">
                                            </form>
                                        </div>
                                        <div class="col-lg-6 col-xs-12 input_field_sections">
                                            <h5>Picker with the rgba format</h5>
                                            <form>
                                                <input type="text" class="form-control" placeholder="rgb(0,194,255,1)" id="cp-2" data-color-format="rgba">
                                            </form>
                                        </div>
                                        <div class="col-lg-6 col-xs-12 input_field_sections">
                                            <h5>As component</h5>
                                            <form>
                                                <div class="input-group color">
                                                    <input type="text" class="form-control" placeholder="#eee" data-color-format="hash" id="cp3">
                                                    <span class="input-group-addon">
                                                   <i class="fa fa-crosshairs" aria-hidden="true"></i>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 col-xs-12 input_field_sections">
                                            <h5>Using events to work with the color</h5>
                                            <form>
                                                <a href="#" class="btn btn-warning" id="cp4" data-color-format="hex">Change background color</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.BODY -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- END COLOR PICKER -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Time Picker
                                </div>
                                <div class="card-block time_picker_section">
                                    <div class="row m-b-20">
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>24hr Timepicker</h5>
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" data-field="time">
                                                    <span class="input-group-addon add-on">
                                                    <i class="fa fa-clock-o"></i>
                                            </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Set Time</h5>
                                            <form>
                                                <div class="input-group">
                                                    <input id="setTimeExample" type="text" class="time ui-timepicker-input form-control" autocomplete="off">
                                                    <span class="input-group-btn">
                                                <button class="btn btn-primary" id="setTimeButton" type="button">Set current time</button>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Default Clockpicker</h5>
                                            <form>
                                                <div class="input-group clockpicker1">
                                                    <input type="text" class="form-control" data-placement="top" data-align="top" value="10:30">
                                                    <span class="input-group-addon add-on">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Auto Close</h5>
                                            <form>
                                                <div class="input-group clockpicker2" data-align="top" data-placement="top" data-autoclose="true">
                                                    <input type="text" class="form-control" value="15:14">
                                                    <span class="input-group-addon add-on">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Align Top</h5>
                                            <form>
                                                <div class="input-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="single_input2" data-placement="top" data-align="top" value="13:14">
                                                        <span class="input-group-addon add-on">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 input_field_sections">
                                            <h5>Time Now</h5>
                                            <form>
                                                <div class="input-group">
                                                    <div class="input-group">
                                                        <input class="form-control" id="single_input1" data-placement="top" data-align="top" placeholder="Now">
                                                        <span class="input-group-btn">
                                                    	<button type="button" id="check_minutes" class="btn btn-primary">Check the minutes</button>
                                                    </span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TIME PICKER -->
                    <!-- .row -->
                </div>
                <!-- /.inner --> </div>
            <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/jquery.uniform/js/jquery.uniform.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/validval/js/jquery.validVal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/inputmask/js/jquery.inputmask.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/daterangepicker/js/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/autosize/js/jquery.autosize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jasny-bootstrap/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datetimepicker/js/DateTimePicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/j_timepicker/js/jquery.timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/clockpicker/js/jquery-clockpicker.min.js')}}"></script>
    <!--end of plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/js/form.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/datetime_piker.js')}}"></script>
    <!-- end of global scripts-->
@stop