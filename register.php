<?php
include_once("config.php");
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$middle_name=$_POST['middle_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
        $mobile=$_POST['mobile'];
		$gender=$_POST['gender'];
		$country=$_POST['country'];
	$status=0;
	$activationcode=md5($email.time());
	$query=mysql_query("insert into register_user(title,first_name,last_name,middle_name,email,password,mobile,gender,country,activationcode,status) values('$title','$first_name','$last_name','$middle_name','$email','$password','$mobile','$gender','$country','$activationcode','$status')");
	if($query)
	{
$to=$email;
$msg= "Thanks for new Registration.";   
$subject="Email Verification";
        $headers .= 'From:ABS <info@abs.co.ke>'."\r\n";
        
$ms.="<html></body><div><div>Dear $firs_name,</div></br></br>";
$ms.="<div style='padding-top:8px;'>Your account information is successfully updated in our server, Please click the following link For verifying and activate your account.</div>
<div style='padding-top:10px;'><a href='http://bahamas.amband.co.ke/email_verification.php?code=$activationcode'>Click Here</a></div>
<div style='padding-top:4px;'> powered by <a href='abs.co.ke'>abs.co.ke</a></div></div>
</body></html>";
mail($to,$subject,$ms,$headers);
		    	echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";
				 echo "<script>window.location = 'login.php';</script>";;
	}
	else
	{
		echo "<script>alert('Data not inserted');</script>";
	}
	/*function SendUserConfirmationEmail(&$formvars)
	{
	    $mailer = new PHPMailer();
	    $mailer->CharSet = 'utf-8';
	    $mailer->AddAddress($formvars['email'],$formvars['name']);
	    $mailer->Subject = "Your registration with ".$this->sitename;
	    $mailer->From = $this->GetFromAddress();       
	    $confirmcode = urlencode($this->MakeConfirmationMd5($formvars['email']));
	    $confirm_url = $this->GetAbsoluteURLFolder().'/confirmreg.php?code='.$confirmcode;
	    $mailer->Body ="Hello ".$formvars['name']."\r\n\r\n".
	    "Thanks for your registration with ".$this->sitename."\r\n".
	    "Please click the link below to confirm your registration.\r\n".
	    "$confirm_url\r\n".
	    "\r\n".
	    "Regards,\r\n".
	    "Webmaster\r\n".
	    $this->sitename;
	    if(!$mailer->Send())
	    {
	        $this->HandleError("Failed sending registration confirmation email.");
	        return false;
	    }
	    return true;
	}*/
}
 ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    
<!-- Mirrored from absprototype.tk/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 07:43:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>ABS</title>
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
                        <li><i class="fa fa-home pr-10"></i><a href="Home.html">Home</a></li>
                        <li class="active">Sign Up</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->

	 <!-- main-container start -->
            <!-- ================ -->
			<section id="register-main">
            <div class="main-container dark-translucent-bg" style="background-image:url('assets/frontend/images/banner1.jpg');">
                <div class="container">
                    
                        <!-- main start -->
                        <!-- ================ -->
                        <div id="div-main" class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="form-block center-block p-30 light-gray-bg border-clear">
                                <h2 class="title">ABS Sign Up</h2>

                                <hr>
                               <form name="insert" action="" method="post">
                                <div class="row">

                                     <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="titlecode">Title *</label>
                                            <select name="title" id="titlecode" class="form-control" >
<option value="" selected="selected">Choose option</option>
<option value="Mr.">Mr.</option>
<option value="Miss.">Miss.</option>
<option value="Ms.">Ms.</option>
<option value="Dr.">Dr.</option>
<option value="Prof.">Prof.</option>
</select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="lastname">First Name *</label>
                                            <input type="text" class="form-control" id="firstname" name="first_name" placeholder="First Name" >
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="midname">Middle Name *</label>
                                            <input type="text" class="form-control" id="midname" name="middle_name" placeholder="Middle Name" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="lastname">Last Name *</label>
                                            <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Last Name" >
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="gender">Gender *</label>
                                            <select name="gender" id="gender" class="form-control" >
<option value="male">Male</option>
<option value="female">female</option>
</select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="countrycode">Country *</label>
                                            <select name="country" id="ctncode" class="form-control" >
<option value="" selected="selected">Choose option</option>
<option value="AD">Andorra</option>
<option value="AE">United Arab Emirates</option>
<option value="AF">Afghanistan</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AI">Anguilla</option>
<option value="AL">Albania</option>
<option value="AM">Armenia</option>
<option value="AO">Angola</option>
<option value="AQ">Antarctica</option>
<option value="AR">Argentina</option>
<option value="AS">American Samoa</option>
<option value="AT">Austria</option>
<option value="AU">Australia</option>
<option value="AW">Aruba</option>
<option value="AX">land Islands</option>
<option value="AZ">Azerbaijan</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BB">Barbados</option>
<option value="BD">Bangladesh</option>
<option value="BE">Belgium</option>
<option value="BF">Burkina Faso</option>
<option value="BG">Bulgaria</option>
<option value="BH">Bahrain</option>
<option value="BI">Burundi</option>
<option value="BJ">Benin</option>
<option value="BL">Saint Barth`lemy</option>
<option value="BM">Bermuda</option>
<option value="BN">Brunei</option>
<option value="BO">Bolivia</option>
<option value="BQ">Caribbean Netherlands</option>
<option value="BR">Brazil</option>
<option value="BS">Bahamas</option>
<option value="BT">Bhutan</option>
<option value="BV">Bouvet Island</option>
<option value="BW">Botswana</option>
<option value="BY">Belarus</option>
<option value="BZ">Belize</option>
<option value="CA">Canada</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CD">Democratic Republic of the Congo</option>
<option value="CF">Central African Republic</option>
<option value="CG">Congo (Republic of)</option>
<option value="CH">Switzerland</option>
<option value="CK">Cook Islands</option>
<option value="CL">Chile</option>
<option value="CM">Cameroon</option>
<option value="CN">China</option>
<option value="CO">Colombia</option>
<option value="CR">Costa Rica</option>
<option value="CU">Cuba</option>
<option value="CV">Cape Verde</option>
<option value="CW">Cura`ao</option>
<option value="CX">Christmas Island</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DE">Germany</option>
<option value="DJ">Djibouti</option>
<option value="DK">Denmark</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="DZ">Algeria</option>
<option value="EC">Ecuador</option>
<option value="EE">Estonia</option>
<option value="EG">Egypt</option>
<option value="EH">Western Saharan</option>
<option value="ER">Eritrea</option>
<option value="ES">Spain</option>
<option value="ET">Ethiopia</option>
<option value="FI">Finland</option>
<option value="FJ">Fiji</option>
<option value="FK">Falkland Islands</option>
<option value="FM">Micronesia</option>
<option value="FO">Faroe Islands</option>
<option value="FR">France</option>
<option value="GA">Gabon</option>
<option value="GB">United Kingdom</option>
<option value="GD">Grenada</option>
<option value="GE">Georgia</option>
<option value="GF">French Guiana</option>
<option value="GG">Guernsey</option>
<option value="GH">Ghana</option>
<option value="GI">Gibralter</option>
<option value="GL">Greenland</option>
<option value="GM">Gambia</option>
<option value="GN">Guinea</option>
<option value="GP">Guadeloupe</option>
<option value="GQ">Equatorial Guinea</option>
<option value="GR">Greece</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="GT">Guatemala</option>
<option value="GU">Guam</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HK">Hong Kong</option>
<option value="HM">Heard and McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HR">Croatia</option>
<option value="HT">Haiti</option>
<option value="HU">Hungary</option>
<option value="ID">Indonesia</option>
<option value="IE">Ireland</option>
<option value="IL">Israel</option>
<option value="IM">Isle of Man</option>
<option value="IN">India</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="IQ">Iraq</option>
<option value="IR">Iran</option>
<option value="IS">Iceland</option>
<option value="IT">Italy</option>
<option value="JE">Jersey</option>
<option value="JM">Jamaica</option>
<option value="JO">Jordan</option>
<option value="JP">Japan</option>
<option value="KE">Kenya</option>
<option value="KG">Kyrgyzstan</option>
<option value="KH">Cambodia</option>
<option value="KI">Kiribati</option>
<option value="KM">Comoros</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="KP">North Korea</option>
<option value="KR">South Korea</option>
<option value="KW">Kuwait</option>
<option value="KY">Cayman Islands</option>
<option value="KZ">Kazakhstan</option>
<option value="LA">Laos</option>
<option value="LB">Lebanon</option>
<option value="LC">Saint Lucia</option>
<option value="LI">Liechtenstein</option>
<option value="LK">Sri Lanka</option>
<option value="LR">Liberia</option>
<option value="LS">Lesotho</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="LV">Latvia</option>
<option value="LY">Libya</option>
<option value="MA">Morocco</option>
<option value="MC">Monaco</option>
<option value="MD">Moldova</option>
<option value="ME">Montenegro</option>
<option value="MF">Saint Martin (France)</option>
<option value="MG">Madagascar</option>
<option value="MH">Marshall Islands</option>
<option value="MK">Macedonia</option>
<option value="ML">Mali</option>
<option value="MM">Burma (Republic of the Union of Myanmar)</option>
<option value="MN">Mongolia</option>
<option value="MO">Macau</option>
<option value="MP">Northern Mariana Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MS">Montserrat</option>
<option value="MT">Malta</option>
<option value="MU">Mauritius</option>
<option value="MV">Maldives</option>
<option value="MW">Malawi</option>
<option value="MX">Mexico</option>
<option value="MY">Malaysia</option>
<option value="MZ">Mozambique</option>
<option value="NA">Namibia</option>
<option value="NC">New Caledonia</option>
<option value="NE">Niger</option>
<option value="NF">Norfolk Island</option>
<option value="NG">Nigeria</option>
<option value="NI">Nicaragua</option>
<option value="NL">Netherlands</option>
<option value="NO">Norway</option>
<option value="NP">Nepal</option>
<option value="NR">Nauru</option>
<option value="NU">Niue</option>
<option value="NZ">New Zealand</option>
<option value="OM">Oman</option>
<option value="PA">Panama</option>
<option value="PE">Peru</option>
<option value="PF">French Polynesia</option>
<option value="PG">Papua New Guinea</option>
<option value="PH">Philippines</option>
<option value="PK">Pakistan</option>
<option value="PL">Poland</option>
<option value="PM">St. Pierre and Miquelon</option>
<option value="PN">Pitcairn</option>
<option value="PR">Puerto Rico</option>
<option value="PS">Palestine</option>
<option value="PT">Portugal</option>
<option value="PW">Palau</option>
<option value="PY">Paraguay</option>
<option value="QA">Qatar</option>
<option value="RE">R union</option>
<option value="RO">Romania</option>
<option value="RS">Serbia</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="SA">Saudi Arabia</option>
<option value="SB">Solomon Islands</option>
<option value="SC">Seychelles</option>
<option value="SD">Sudan</option>
<option value="SE">Sweden</option>
<option value="SG">Singapore</option>
<option value="SH">Saint Helena</option>
<option value="SI">Slovenia</option>
<option value="US">United States of America</option>
<option value="TZ">Tanzania</option>
<option value="UG">Uganda</option>
<option value="SO">Somalia</option>
</select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="email">Email *</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="mobile">Mobile *</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" >
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="password">Password *</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group   has-feedback">
                                            <label class="control-label" for="passwordconfirm">Confirm Password *</label>
                                            <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" placeholder="" >
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label>
                                                <input type="checkbox" name="terms" id="terms">
                                                <i></i>I agree with the <a href="#" data-toggle="modal" data-target="#termsModal"> Terms and Conditions </a></label>
                                                </label>
                                            </div>
                                        </div>
                                </div>

                                <div class="row">
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="submit" type="submit" value="Sign Up" class="btn btn-group btn-default btn-animated"><i class="fa fa-check"></i>
                                                </label>
                                            </div>
                                        </div>
                                </div>

                              </form>
                            </div>
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
                        first_name : {
                            required : 'Please enter your first name',
                        },
                        last_name : {
                            required : 'Please enter your last name',
                        },
                        gender : {
                            required : 'Please select your gender',
                        },
                        country : {
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
