
<!DOCTYPE html>
<html>
<head>
    <title>Lock Screen2 | Admire</title>
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
    <link rel="stylesheet" href="{{asset('assets/css/pages/lockscreen2.css')}}"/>
</head>
<body>
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
        <img src="{{asset('assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row lock_section">
        <div class="col-xl-4 push-xl-4 col-lg-6 push-lg-3 col-md-8 push-md-2 col-sm-8 push-sm-2 col-xs-10 push-xs-1">
            <div class="row">
                <div class="col-lg-10 push-lg-1 col-md-10 push-md-1 col-sm-12 lock_background lock_section_top">
                    <div class="text-xs-center collapse lock_show">
                        <span class="admin_img_border">
                            <img src="{{asset('assets/img/admin.jpg')}}" alt="admin" class="rounded-circle admin_img_top">
                        </span>
                    </div>
                    <div class="row collapse lock_show m-t-30">
                        <div class="col-xs-12 text-xs-center">
                            <h3 class="text-white">Lock Screen</h3>
                        </div>
                    </div>
                    <div class="text-xs-center unlock admin_bottom">
                        <img src="{{asset('assets/img/admin.jpg')}}" alt="admin" class="rounded-circle lock_admin">
                    </div>
                    <div class="text-xs-center m-b-20">
                        <button class="btn btn-warning b_r_20 unlock">Click here to lock screen</button>
                    </div>
                    <div class="form-box collapse lock_show admin_top">
                        <form action="index"  name="screen" id="lockscreen_validator">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control b_r_20 m-t-15" placeholder="Enter Password">
                            </div>
                            <div class=" m-t-20 m-b-20">
                                <button class="btn btn-warning btn-block b_r_20" id="index" type="submit">Submit</button>
                            </div>
                           <div class="text-xs-center m-b-30">
                               <a href="login2" class="text-success">Not Micheal?</a>
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
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('assets/js/pages/lockscreen2.js')}}"></script>
<script>
    new WOW().init();
</script>
</body>

</html>