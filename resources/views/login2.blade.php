<!DOCTYPE html>
<html>
<head>
    <title>Login 2 | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/wow/css/animate.css')}}"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/login2.css')}}"/>
</head>
<body class="login_background">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}"  style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-xl-4 push-xl-4 col-lg-6 push-lg-3 col-md-8 push-md-2 col-sm-8 push-sm-2 col-xs-10 push-xs-1">
            <div class="row">
                <div class="col-lg-10 push-lg-1 col-md-10 push-md-1 col-sm-12 login_image login_section login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-xs-center text-white">
                            <img src="{{asset('assets/img/logow2.png')}}" alt="josh logo" class="admire_logo">
                        </h3>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-xs-12">
                            <a class="text-success m-r-20 font_18">LOG IN</a>
                            <a href="register2" class="text-white font_18">SIGN UP</a>
                        </div>
                    </div>
                    <div class="m-t-15">
                        <form  id="login_validator" action="{{URL::to('index')}}" >
                            <div class="form-group">
                                <label for="email" class="form-control-label text-white"> E-mail</label>
                                <input type="text" class="form-control b_r_20" id="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-control-label text-white">Password</label>
                                <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="row m-t-15">
                                <div class="col-xs-12">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description text-white">Keep me logged in</a>
                                    </label>
                                </div>
                            </div>
                            <div class="text-xs-center login_bottom">
                                <button type="submit" class="btn btn-mint btn-block b_r_20 m-t-10 m-r-20">LOG IN</button>
                            </div>
                            <div class="m-t-15 text-xs-center">
                                <a href="{{URL::to('forgot_password2')}}" class="text-white">Forgot password ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/wow/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('assets/js/pages/login2.js')}}"></script>

</body>

</html>