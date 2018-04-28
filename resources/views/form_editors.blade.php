@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Form Editors
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" media="screen" href="{{asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/summernote/css/summernote.css')}}"/>
    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/form_elements.css')}}"/>
@stop
@section('content')
            <header class="head">
                <div class="main-bar row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            Form Editors
                        </h4>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8">
                        <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Forms</a>
                            </li>
                            <li class="breadcrumb-item active">Form Editors</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                    Summernote
                                </div>
                                <div class="summernote_editor"><h4 class="m-t-10">Summernote</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in
                                    quis tellus.
                                    <h5 class="m-t-15">Editable</h5>
                                    <ul>
                                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                                        <li> Aliquam ullamcorper sapien non nisl facilisis.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 m-t-35">
                            <div class="card">
                                <div class="card-header bg-white">
                                    Air-Mode Editor
                                </div>
                                <div class="card-block">
                                    <div class="airmode m-t-20">
                                        <h5 class="m-t-20">This is an Air-mode editable area.</h5>
                                        <ul>
                                            <li>Select a text to reveal the toolbar.</li>
                                            <li>Edit rich document on-the-fly, so elastic!</li>
                                        </ul>
                                        <h5>Editable</h5>
                                        <ul>
                                            <li> <s>Lorem ipsum dolor sit amet, consectetur adipiscing</s></li>
                                            <li> Aliquam ullamcorper sapien non nisl facilisis.</li>
                                        </ul>
                                        <h4></h4>Proin nunc justo felis mollis tincidunt, risus risus pede, posuere cubilia Curae, Nullam euismod, enim. Etiam nibh ultricies dolor

                                        <p>End of air-mode area</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row summer_note_display summer_note_btn">
                        <div class="col-xs-12">
                            <div class='card m-t-35'>
                                <div class='card-header bg-white '>
                                    Bootstrap WYSIHTML5
                                    <small>Simple editor</small>
                                    <!-- tools box -->
                                    <div class="float-xs-right box-tools"></div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class='card-block pad m-t-25'>
                                    <form>
                                    <textarea class="textarea form_editors_textarea_wysihtml"
                                              placeholder="Place some text here"></textarea>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row summer_note_display">
                        <div class="col-xs-12">
                            <div class="card m-t-35 tinymce_full">
                                <div class="card-header bg-white">
                                    <i class="livicon" data-name="umbrella" data-size="16" data-loop="true"
                                       data-c="#fff"
                                       data-hc="white"></i>
                                    TinyMCE Full
                                </div>
                                <div>
                        <textarea id="tinymce_full" rows="7"><h2>TinyMCE Full</h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in
                                    quis tellus.
                                    <h4>Editable</h4>
                                    <ul>
                                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                                        <li> Aliquam ullamcorper sapien non nisl facilisis.</li>
                                    </ul>
                                    <h4></h4>Proin nunc justo felis mollis tincidunt, risus risus pede, posuere cubilia Curae, Nullam euismod, enim. Etiam nibh ultricies dolor
                        </textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row - form editors ends-->
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
@stop
@section('footer_scripts')
<!--Plugin scripts-->
<script type="text/javascript" src="{{asset('assets/vendors/tinymce/js/tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/summernote/js/summernote.min.js')}}"></script>
<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="{{asset('assets/js/pages/form_editors.js')}}"></script>
<!-- end page level scripts -->
@stop