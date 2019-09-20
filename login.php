<?php
session_start();
include_once("config.php");
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
$ret= mysql_query("SELECT * FROM register_user WHERE email='$email' and password='$password'");
$num=mysql_fetch_array($ret);
$status=$num['status'];
if($num>0)
{	
if($status==0)
/*{
	$_SESSION['action1']="Verify  your Email Id by clicking  the link In your mailbox";
}
	else*/ {

$_SESSION['login']=$email;
$_SESSION['id']=$num['id'];
$_SESSION['first_name']=$num['first_name'];
$extra="absquestions.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
else
{
$_SESSION['action1']="Invalid username or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
 ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    
<!-- Mirrored from absprototype.tk/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 07:43:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>ABS :: Login</title>
        <meta name="description" content="ABS SYSTEM">
        <meta name="author" content="Vista Solutions">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.html">

                 <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <link href="assets/frontend/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="assets/frontend/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="assets/frontend/fonts/fontello/css/fontello.css" rel="stylesheet">

        <link href="assets/frontend/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="assets/frontend/plugins/rs-plugin/css/settings.css" rel="stylesheet">
        <link href="assets/frontend/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="assets/frontend/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="assets/frontend/plugins/hover/hover-min.css" rel="stylesheet">
        <link href="assets/frontend/css/animations.css" rel="stylesheet">
        <link href="assets/frontend/css/style.css" rel="stylesheet" >
        <link href="assets/frontend/css/skins/cool_green.css" data-style="styles-no-cookie" rel="stylesheet">
        <link href="assets/frontend/css/custom.css" rel="stylesheet">
        <link href="assets/frontend/css/academicons.min.css" rel="stylesheet">
<!--
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
-->
    </head>

    <body class="no-trans front-page  page-loader-1 ">

        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

        <div class="page-wrapper">

                         <!-- header-container start -->
            <div class="header-container">

                <!-- header-top start -->
                                <!-- header-top end -->

                <!-- header start -->
                <!-- classes:  -->
                <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
                <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
                <!-- "full-width": mandatory class for the full-width menu layout -->
                <!-- "centered": mandatory class for the centered logo layout -->
                <!-- ================ -->
                <header class="header fixed clearfix dark ">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <!-- header-left start -->
                                <!-- ================ -->
                                <div class="header-left clearfix">

                                    <!-- logo -->
                                    <div id="logo" class="logo">
                                        <a href="#"><img id="logo_img" src="assets/frontend/images/abslogo.jpg" alt="ABS"></a>
                                    </div>

                                    <!-- name-and-slogan -->
                                    <div class="site-slogan">
                                        Permit Application System
                                    </div>

                                </div>
                                <!-- header-left end -->

                            </div>
                            <div class="col-md-9">

                                <!-- header-right start -->
                                <!-- ================ -->
                                <div class="header-right clearfix">

                                <!-- main-navigation start -->
                                <!-- classes: -->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                                <!-- ================ -->
                                <div class="main-navigation  animated with-dropdown-buttons">

                                    <!-- navbar start -->
                                    <!-- ================ -->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">

                                            <!-- Toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>

                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <!-- main-menu -->
                                                <ul class="nav navbar-nav ">

<li class="active">
<a href="index.html"  >Home</a>
</li>

<li class="dropdown ">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">ABS Information</a>
<ul class="dropdown-menu">
     <li> <a href="#collapse0">Biological Resources</a> </li>
     <li> <a href="#collapse1">Appication Process</a> </li>
     <li> <a href="#collapse2">Required Documents</a> </li>
     <li> <a href="#collapse3">Approved Institutions</a> </li>
     <li> <a href="#collapse4">Lead agencies &amp; Mandate</a> </li>
     <li> <a href="#collapse5">Documents to be Uploaded</a> </li>
</ul>
</li>

<li class="dropdown ">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
<ul class="dropdown-menu">
     <li> <a href="contact/kws.html">KWS</a> </li>
     <li> <a href="contact/nema.html">NEMA</a> </li>
     <li> <a href="contact/nacosti.html">NACOSTI</a> </li>
     <li> <a href="contact/kfs.html">KFS</a> </li>
     <li> <a href="contact/kephis.html">KEPHIS</a> </li>
     <li> <a href="contact/dvs.html">DVS</a> </li>
</ul>
</li>

</ul>
                                                <!-- main-menu end -->

                                                <!-- header dropdown buttons -->
                                                <div class="header-dropdown-buttons hidden-xs ">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
                                                        <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                            <li>
                                                                <form role="search" class="search-box margin-clear">
                                                                    <div class="form-group has-feedback">
                                                                        <input type="text" class="form-control" placeholder="Search">
                                                                        <i class="icon-search form-control-feedback"></i>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <!-- header dropdown buttons end-->

                                            </div>

                                        </div>
                                    </nav>
                                    <!-- navbar end -->

                                </div>
                                <!-- main-navigation end -->
                                </div>
                                <!-- header-right end -->

                            </div>
                        </div>
                    </div>

                </header>
                <!-- header end -->
            </div>
            <!-- header-container end -->

            <div id="page-start"></div>


            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
                        <li class="active">Login</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->
			<div class="main-container dark-translucent-bg" style="background-image:url('assets/frontend/images/banner1.jpg');">
                <div class="container">
                    <div class="row">
                        <!-- main start -->
    <div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">

                            <div class="form-block center-block p-30 light-gray-bg border-clear">
                                <h2 class="title">Login</h2>
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
     <tr>
    <td colspan="2"><font color="#FF0000"><?php echo $_SESSION['action1']; ?><?php echo $_SESSION['action1']="";?></font></td>
  </tr>
  <tr>
    <th height="62" scope="row">Email</th>
    <td width="71%"><input type="email" name="email" id="email" value="Email"  class="form-control" required /></td>
  </tr>
  <tr>
    <th height="62" scope="row">Password </th>
    <td width="71%"><input type="password" name="password" id="password" value="password"  class="form-control" required /></td>
  </tr>
 <tr>
    <th height="62" scope="row"></th>
	 <td><input type="submit" name="login" value="Log In" class="btn btn-group btn-default btn-animated"> </td>
  </tr>
   <tr>
                                        
<td><a href="page-login.html">Forgot your password?</a></td>

   </tr>
</table>
 </form>
     </div>


<!--
                            <p class="text-center space-top">Don't have an account yet? <a href="signup.html">Sign up</a> Now.</p>
-->
                        </div>
	<!-- main end -->
                    </div>
                </div>
            </div>
            <!-- main-container end -->

	
  
 
    <!-- ================ -->

            <footer id="footer" class="clearfix ">

                <!-- .subfooter start -->
                <!-- ================ -->
                <div class="subfooter default-bg">
                    <div class="container">
                        <div class="subfooter-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center"><span class="  pr-10">Copyright © 2017 -  2019  ABS. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .subfooter end -->

            </footer>
            <!-- footer end -->

        </div>
        <!-- page-wrapper end -->


        <!-- Modal -->
        <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                    </div>
                    <div class="modal-body custom-scroll terms-body">

             <div id="left">

            <h1>ABS Terms of Service</h1>

            </ul>

            </div>

            <br><br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-primary" id="i-agree">
                            <i class="fa fa-check"></i> I Agree
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- JavaScript files placed at the end of the document so the pages load faster -->
               <script type="text/javascript" src="assets/frontend/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="assets/frontend/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/modernizr.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/isotope/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/jquery.countTo.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/vide/jquery.vide.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/pace/pace.min.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/jquery.browser.js"></script>
        <script type="text/javascript" src="assets/frontend/plugins/SmoothScroll.js"></script>
        <script type="text/javascript" src="assets/js/plugin/jquery-form/jquery-form.min.js"></script>
        <script type="text/javascript" src="assets/js/plugin/jquery-validate/jquery.validate.min.js"  ></script>
        <script type="text/javascript" src="assets/js/plugin/jquery-validate/additional-methods.min.js"  ></script>
        <script type="text/javascript" src="assets/js/plugin/masked-input/jquery.maskedinput.min.js" ></script>
        <script type="text/javascript" src="assets/frontend/js/template.js"></script>
        <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
        <script type="text/javascript" src="assets/js/ui.js"></script>
        <script type="text/javascript" src="assets/js/loadingoverlay.min.js"   ></script>
        <script type="text/javascript" src="assets/js/loadingoverlay_progress.min.js"   ></script>
        <script type="text/javascript" src="assets/frontend/js/custom.js"></script>

        <script>
            $(document).ready(function() {

             $(document).ajaxSend(function(event, request, settings) {
                $.LoadingOverlay("show");
             });

             $(document).ajaxStop(function(event, request, settings) {
                $.LoadingOverlay("hide");
             });

             $(document).ajaxComplete(function(event, request, settings) {
                $.LoadingOverlay("hide");
             });

            });
        </script>

        <script type="text/javascript">


            $("#i-agree").click(function(){
                $this=$("#terms");
                if($this.checked) {
                    $('#termsModal').modal('toggle');
                } else {
                    $this.prop('checked', true);
                    $('#termsModal').modal('toggle');
                }
            });

            $( document ).ready( function () {
                $("#form-signup").validate({
                    rules : {
                        firstname : {
                            required : true,
                            minlength : 2,
                            maxlength : 50
                        },
                        lastname : {
                            required : true,
                            minlength : 2,
                            maxlength : 50
                        },
                        mobile : {
                            required : true,
                            minlength : 10,
                            maxlength : 12,
                            digits: true
                        },
                        gender : {
                            required : true
                        },
                        ctncode : {
                            required : true
                        },
                        email : {
                            required : true,
                            email : true
                        },
                        password : {
                            required : true,
                            minlength : 5,
                            maxlength : 50
                        },
                        passwordconfirm : {
                            required : true,
                            minlength : 5,
                            maxlength : 50,
                            equalTo : '#password'
                        },
                        terms : {
                            required : true
                        }
                    },

                    messages : {
                        firstname : {
                            required : 'Please enter your first name',
                        },
                        lastname : {
                            required : 'Please enter your last name',
                        },
                        gender : {
                            required : 'Please select your gender',
                        },
                        ctncode : {
                            required : 'Please select your country',
                        },
                        mobile : {
                            required : 'Enter numbers only without a + prefix',
                        },
                        email : {
                            required : 'Please enter your email address',
                            email : 'Please enter a VALID email address'
                        },
                        password : {
                            required : 'Please enter your password'
                        },
                        passwordconfirm : {
                            required : 'Please enter your password one more time',
                            equalTo : 'Please enter the same password as above'
                        },
                        terms : {
                            required : 'You must agree with ABS Terms and Conditions'
                        }
                    },
                    errorElement: "em",
                    errorPlacement: function ( error, element ) {
                        error.addClass( "help-block" );
                        element.parents( ".col-sm-5" ).addClass( "has-feedback" );
                        if ( element.prop( "type" ) === "checkbox" ) {
                            error.insertAfter( element.parent( "label" ) );
                        } else {
                            error.insertAfter( element );
                        }
                        if ( !element.next( "span" )[ 0 ] ) {
                            $( "<span class='glyphicon glyphicon-remove has-error form-control-feedback'></span>" ).insertAfter( element );
                        }
                    },
                    success: function ( label, element ) {
                        if ( !$( element ).next( "span" )[ 0 ] ) {
                          $( "<span class='glyphicon glyphicon-ok no-error form-control-feedback'></span>" ).insertAfter( $( element ) );
                        }
                    },
                    highlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
                        $( element ).next( "span" ).addClass( "glyphicon-remove has-error" ).removeClass( "glyphicon-ok no-error" );
                    },
                    unhighlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".col-sm-5" ).addClass( "has-success no-error" ).removeClass( "has-error" );
                        $( element ).next( "span" ).addClass( "glyphicon-ok  no-error" ).removeClass( "glyphicon-remove  has-error" );
                    },
                    submitHandler : function(form) {
                       $(form).ajaxSubmit({
                            dataType: 'json',
                            method: 'POST',
                            success : function(data) {
                               $("#form-signup").addClass('submited');

                               if(data.success==1){
                                   swal({
                                     text: data.message,
                                     icon: "success",
                                     buttons: false,
                                     closeOnClickOutside: false,
                                     timer: 4000,
                                    }).then((state) => {
                                      $('#div-main').html('<div class="row"> <div class="col-md-12  center-blockx p-40 light-gray-bg border-clear"> <span class="alert alert-success">'+data.message+'</span></div> </div>');
                                    });

                               }else if(data.success==0){
                                  swal({
                                    text: data.message,
                                    icon: "warning",
                                  }).then((state) => {
                                    $("#form-signup").removeClass('submited');
                                  });
                               }

                            }
                        });
                    },
                });

            });
        </script>

    </body>

<!-- Mirrored from absprototype.tk/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 07:43:35 GMT -->
</html>
