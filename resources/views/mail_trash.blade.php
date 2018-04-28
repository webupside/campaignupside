@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Trash
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/mail_box.css')}}"/>
@stop
@section('content')
            <header class="head">
                <div class="main-bar row">
                    <div class="col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-trash"></i>
                            Trash
                        </h4>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Email</a>
                            </li>
                            <li class="active breadcrumb-item">Trash</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row web-mail">
                        <div class="col-lg-3 mail_compose_list">
                            <div class="section_border">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="mail_compose">
                                            <i class="fa fa-edit"></i>
                                            Compose
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_inbox">
                                            <i class="fa fa-inbox"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_view">
                                            <i class="fa fa-eye"></i>
                                            View Mail
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_sent">
                                            <i class="fa fa-sign-out"></i>
                                            Sent
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_spam">
                                            <span class="tag tag-primary tag-pill float-xs-right">14</span>
                                            <i class="fa fa-eye-slash"></i>
                                            Spam
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_draft">
                                            <span class="tag tag-primary tag-pill float-xs-right">16</span>
                                            <i class="fa fa-recycle"></i>
                                            Draft
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-success">
                                        <a href="mail_trash" class="mail_inbox_text_col">
                                            <span class="tag tag-warning tag-pill float-xs-right">16</span>
                                            <i class="fa fa-trash"></i>
                                            Trash
                                        </a>
                                    </li>
                                    <li class="list-group-item" id="more_items">
                                        <a>
                                            <i class="fa fa-angle-down float-xs-right"></i>
                                            More
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="tag tag-primary tag-pill float-xs-right">3</span>
                                            <i class="fa fa-star"></i>
                                            Starred
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="tag tag-pill tag-primary float-xs-right">14</span>
                                            <i class="fa fa-user"></i>
                                            Personal
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="tag tag-primary tag-pill float-xs-right">26</span>
                                            <i class="fa fa-shield"></i>
                                            Client
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="tag tag-primary tag-pill float-xs-right">36</span>
                                            <i class="fa fa-briefcase "></i>
                                            Important
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mail_ul_active m-t-35">
                                <ul class="list-group">
                                    <li class="list-group-item bg-success">
                                        <a href="#" class="mail_inbox_text_col">
                                            <i class="fa fa-comments"></i>
                                            Contacts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="section_border">
                                <ul class="list-group contact_scroll">
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; John Cena
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; Peter Norton
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy m-t-10"></span>
                                            &nbsp; Marin Robbinson
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/3.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Kimy Zorda
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/4.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; Hally
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/5.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy m-t-10"></span>
                                            &nbsp; Mike J Mayor
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; David Miller
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/7.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Adela
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/8.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Sandy Chris
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/8.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; Symons
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy m-t-10"></span>
                                            &nbsp; Randy
                                            <span class="float-xs-left">
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}"
                                                 class="rounded-circle img-responsive float-xs-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card mail mail_sent_all media_max_991">
                                <div class="card-header bg-white">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12 m-t-10 dropdown_list_hover">
                                            <div class="btn-group float-xs-left table-bordereds">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all_mail">
                                                    <span class="custom-control-indicator"></span>
                                                </label>
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="select-all1">
                                                        <span>All</span>
                                                    </li>
                                                    <li id="select-none">
                                                        <span>None</span>
                                                    </li>
                                                    <li id="mail_read">
                                                        <span>Read</span>
                                                    </li>
                                                    <li id="mail_unread">
                                                        <span>UnRead</span>
                                                    </li>
                                                    <li id="mail_starred">
                                                        <span>Starred</span>
                                                    </li>
                                                    <li id="mail_unstarred">
                                                        <span>Unstarred</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group float-xs-left table-bordered text-primary" id="refresh_trash">
                                                <i class="fa fa-refresh"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group margin bottom">
                                                <input type="text" class="form-control inbox_search_height m-t-10" placeholder="Search">
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary inbox_search_height m-t-10">Search</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block reset padding padding-all">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>John Doe</td>
                                                <td>Hello friend</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Jaimie Doe</td>
                                                <td>Where are you dude?!?</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>John Cena</td>
                                                <td>Please confirm your registration</td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash starred text-danger"></i></td>
                                                <td>Office</td>
                                                <td>Reminder about the Meeting for Today</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Jonathan Fox</td>
                                                <td>Dinner tonight at Tina's</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Peter Norton</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Marin Robbinson</td>
                                                <td>Vitae esse ullam tenetur.</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Marin Robbinson</td>
                                                <td>Consectetur adipisicing elit.</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Kimy Jorda</td>
                                                <td>Impedit vero possimus dolores.</td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Marin Robbinson</td>
                                                <td>Vitae esse ullam tenetur.</td>
                                                <td></td>
                                                <td>11/04/2014 14:35 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Benny Stuart</td>
                                                <td>Velit, accusamus.</td>
                                                <td></td>
                                                <td>08/04/2014 02:00 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Sandy Chris</td>
                                                <td>Corrupti, dolorum ab nobis ex culpa.</td>
                                                <td></td>
                                                <td>08/04/2014 02:00 AM</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Mitchel Johnson</td>
                                                <td>Nesciunt aperiam praesentium blanditiis</td>
                                                <td></td>
                                                <td>08/04/2014 02:00 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Mitchel Johnson</td>
                                                <td>Illo eius porro nisi sapiente.</td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td>08/04/2014 02:00 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>David Miller</td>
                                                <td>Modi aut tempora provident ab consequatur.</td>
                                                <td></td>
                                                <td>08/04/2014 02:00 AM</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-trash text-danger"></i></td>
                                                <td>Mitchel Johnson</td>
                                                <td>Nesciunt aperiam praesentium blanditiis</td>
                                                <td></td>
                                                <td>08/04/2014 02:00 AM</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
            <!-- Modal -->
@stop
@section('footer_scripts')
    <script type="text/javascript" src="{{asset('assets/js/pages/mail_sent.js')}}"></script>
@stop