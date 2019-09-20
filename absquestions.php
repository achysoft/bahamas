
<?php

include_once("config.php");
 $chkNew = ""; 
if(isset($_POST["submit"]))
{
	$user_data = array(
	$student  = $_POST['student'],
  $purpose = $_POST['purpose'],
  $research_id= $_POST['research_id'],
  $contact_person   = $_POST['contact_person'],
  $email   = $_POST['email'],
   $file1   = $_POST['file1'],
   $file2  = $_POST['file2'],
   $file3   = $_POST['file3'],
   $file4   = $_POST['file4'],
   $file5   = $_POST['file5'],
   $co_genetic  = $_POST['co_genetic'],
	$ex_genetic  = $_POST['ex_genetic'],
	$genetic_dep   = $_POST['genetic_dep'],
	$type_genetic   = $_POST['type_genetic'],
	$sp_gen  = $_POST['sp_gen'],
	$ven_gen   = $_POST['ven_gen'],
	$proj_area  = $_POST['proj_area'],
	$specify  = $_POST['specify'],
	$pac_input= $_POST['pac_input'],
	$chkbox = $_POST['chkbox'],
	);
 $query=mysql_query("insert into absquestions(student, purpose, research_id, contact_person, email, file1, file2, file3, file4, file5, co_genetic, ex_genetic, genetic_dep,type_genetic, sp_gen, ven_gen, proj_area, chkbox, specify, pac_input) VALUES 
 ('$student', '$purpose', '$research_id', '$contact_person', '$email', '$file1', '$file2', '$file3', '$file4', '$file5','$co_genetic', '$ex_genetic', '$genetic_dep', '$type_genetic', '$sp_gen', '$ven_gen', '$proj_area', '$chkNew', '$specify', '$pac_input')");
if($query)
 {
  $message = '
  <div class="alert alert-success">
  Thanks Your Form Has Been Successfully submitted
  </div>
  ';
     
  }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in in your form
  </div>
  ';
 }
    $to="info@kws.org";
 $msg= "An Application as been Sent Waiting Your approval";   
 $subject="Application Approval";
 $headers= $student.'Email:'.$email;
	
	mail($to, $subject, $message, $headers);
	$query=mysql_query("insert into email(to, subject, msg,  headers)VALUES 
 ('$to','$subject', '$msg', '$headers')");
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

 <body>
 <br />
  <div class="container box">
   <?php echo $message; ?>
   </*form method="post" id="register_form">
   <form name="insert" action="" method="post">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Personal</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Documents</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Resources</a>
     </li>
	 <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_requirement_details" style="border:1px solid #ccc">Requirements</a>
     </li>
	 <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_finish_deatails" style="border:1px solid #ccc">Finish</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">Personal</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Are you a student? *</label>
		  <select name="student" id="student" class="form-control" >
<option name="student" value="No" selected="selected">No</option>
<option name="student" value="Yes">Yes</option>
</select>
        </div>
        <div class="form-group">
         <label>Applying As:</label>
         
		  <select name="purpose" id="purpose" class="form-control" >
<option name="purpose" value="" selected="selected">Choose option</option>
<option name="purpose" value="Individual">Individual</option>
<option name="purpose" value="Academic Institution">Academic Institution</option>
<option name="purpose" value="Company/Research Program">Company/Research Program</option>
</select>
         <span id="error_password" class="text-danger"></span>
        </div>
		<div class="form-group">
         <label>Research ID</label>
         <input type="text" name="research_id" id="research_id" class="form-control" />
        </div>
		<div class="form-group">
         <label>Institutional Contact person</label>
         <input type="text" name="contact_person" id="contact_person" class="form-control" />
        </div>
		<div class="form-group">
         <label>Institution Contact person Email</label>
         <input type="text" name="email" id="email" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
            <button type="button" name="previous_btn_requirement_details" id="previous_btn_requirement_details" class="btn btn-default btn-lg" disabled>Previous</button>
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Save & Continue</button>
          <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg" disabled>Finish</button>
        </div>
        <br />
       </div>
      </div>
     </div>
       <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Documents</div>
       <div class="panel-body">
	   <table border="1" >
	   <tr>
        <div class="form-group">
         <td><label>Company Registration Document</label></td>
		 <td>A copy of the legal registration document for your organisation in your country. This may be a registration certificate, charter, statutes or equivalent <td>	
         <td><input type="file" name="file1" id="file1" class="form-control" /></td>
         <span id="error_file1" class="text-danger"></span>
        </div>
		</tr>
		<tr>
        <div class="form-group">
         <td><label>Research Proposal</label></td>
		 <td>Attach A copy of your research proposal as submitted to your funding agency or as approved by them<td>	
         <td><input type="file" name="file2" id="file2" class="form-control" /></td>
		  <span id="error_file2" class="text-danger"></span>
        </div>
		</tr>
       <tr>
        <div class="form-group">
         <td><label>Letter of Affiliation With local institution</label></td>
		 <td>All applicants for research in Kenya must have a local partner.To access a list of approved local institutions and for more information click here<td>	
         <td><input type="file" name="file3" id="file3" class="form-control" /></td>
        </div>
		</tr>
		<tr>
        <div class="form-group">
         <td><label>Research Budget </label></td>
		 <td>Copy of your Research Budget <td>	
         <td><input type="file" name="file4" id="file4" class="form-control" /></td>
        </div>
		</tr>
		<tr>
        <div class="form-group">
         <td><label>Curriculum Vitae</label></td>
		 <td> 	Copy of your Curriculum Vitae  <td>	
         <td><input type="file" name="file5" id="file5" class="form-control" /></td>
        </div>
		</tr><tr></table>
		<table>
        <br />
        <div align="right">
        <td> <tr><td><button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button></td>
         <td><button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Save & Continue</button></td></tr><td>
              <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg" disabled>Finish</button>
        </div>
        <br /></tr>
		</table>
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Resources</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Will you be Researching/Collecting a Genetic Resource,Genetic Information or Traditional Knowledge from Kenya?</label>
         <select name="co_genetic" id="co_genetic" class="form-control" >
<option name="co_genetic" value="Yes" selected="selected">Yes</option>
<option name="co_genetic" value="Yes">No</option>
</select>

        </div>
        <div class="form-group">
         <label>Will you be Exporting a Genetic Resource,Genetic Information or Traditional Knowledge from Kenya?</label>
        <select name="ex_genetic" id="ex_genetic" class="form-control" >
<option name="ex_genetic" value="No" selected="selected">No</option>
<option name="ex_genetic" value="Yes">Yes</option>
</select>
         
        </div>
		 <div class="form-group">
         <label>Where will the Genetic Resources/Material be deposited?</label>
        <input type="text" name="genetic_dep" id="genetic_dep" placeholder="Nema" class="form-control" />
         <span id="error_genetic" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Save & Continue</button>
          <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg" disabled>Finish</button>
        </div>
        <br />
       </div>
      </div>
     </div>
	<div class="tab-pane fade" id="requirement_details">
      <div class="panel panel-default">
       <div class="panel-heading">Requirements</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Type of Genetic Resource,Genetic Information or Traditional Knowledge to be collected *</label>
         <select name="type_genetic" id="type_genetic" class="form-control" >
<option name="type_genetic" value="Animalia" selected="selected">Animalia</option>
<option name="type_genetic" value="Archaea">Archaea</option>
<option name="type_genetic" value="Bacteria">Bacteria</option>
<option name="type_genetic" value="Chromista">Chromista</option>
<option name="type_genetic" value="Fungi">Fungi</option>
<option name="type_genetic" value="Plantae">Plantae</option>
<option name="type_genetic" value="Protozoa">Protozoa</option>
<option name="type_genetic" value="Viruses">Viruses</option>
<option name="type_genetic" value="Environmental Samples E.g Soil,Water, Air">Environmental Samples E.g Soil,Water, Air</option>
</select>

        </div>
        <div class="form-group">
         <label>Species name of the Genetic Resource,Genetic Information or Traditional Knowledge to be collected *:</label>
        <input type="text" name="sp_gen" id="sp_gen" placeholder="kuku" class="form-control" />
         <span id="error_sp_gen" class="text-danger"></span>
        </div>
		 <div class="form-group">
         <label>Common/vernacular name of the Genetic Resource,Genetic Information or Traditional Knowledge to be collected *:</label>
        <input type="text" name="ven_gen" id="ven_gen" placeholder="kuku" class="form-control" />
        <span id="error_ven_gen" class="text-danger"></span>
        </div>
		 <div class="form-group">
         <label>Is the project area inside a conservation area, gazetted forest or protected area? *:</label>
        <select name="proj_area" id="proj_area" class="form-control" >
<option name="proj_area" value="No" selected="selected">No</option>
<option name="proj_area" value="Yes">Yes</option>
</select>
        </div>
		<div class="form-group">
		<fieldset class="group">
<legend>Purpose of collection (Check all that apply) </legend>
<ul class="checkbox">
  <li><input type="checkbox" name="chkbox" id="chkbox" value="Species management " /><label for="cb1">Species management </label></li>
  <li><input type="checkbox" name="chkbox" id="chkbox" value=" Environmental Monitoring " /><label for="cb2"> Environmental Monitoring </label></li>
  <li><input type="checkbox" name="chkbox" id="chkbox" value="Research " /><label for="cb3">Research </label></li>
  <li><input type="checkbox" name="chkbox" id="chkbox" value="Biomonitoring " /><label for="cb4">Biomonitoring </label></li>
  <li><input type="checkbox" name="chkbox" id="chkbox" value=" Species Survey " /><label for="cb5"> Species Survey </label></li>
  <li><input type="checkbox" name="chkbox" id="chkbox" value=" Instructional " /><label for="cb6>"> Instructional </label></li>
  <li><input type="checkbox" name="chkbox" id="chkbox" value="Others " /><label for="cb6>"> Others </label></li>
</ul>
 <div class="form-group">
         <label>Specify If 'Other' Purpose of genetic resource collection *:</label>
        <input type="text" name="specify" id="specify" placeholder="Specify..." class="form-control" />
        </div>
</fieldset>
        </div>
		
        <br />
        <div align="center">
         <button type="button" name="previous_btn_requirement_details" id="previous_btn_requirement_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_requirement_details" id="btn_requirement_details" class="btn btn-success btn-lg">Save & Continue</button>
          <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg" disabled>Finish</button>
          <button type="reset" value="Reset">Reset</button>
        </div>
        <br />
       </div>
      </div>
     </div>
	 <div class="tab-pane fade" id="finish_details">
      <div class="panel panel-default">
       <div class="panel-heading">Finish</div>
       <div class="panel-body">
		 <div class="form-group"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464512.9122979937!2d-78.0073538413246!3d24.557281216118344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d69a3bb2480f3d%3A0x133eb4836ac779e5!2sThe%20Bahamas!5e0!3m2!1sen!2ske!4v1567667430073!5m2!1sen!2ske" width="1100" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<input type="text" name="pac_input" id="pac_input" placeholder="Nairobi" class="form-control" />
<span id="error_pac_input" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_finish_details" id="previous_btn_finish_details" class="btn btn-default btn-lg">Previous</button>
         <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg">Finish</button>
        </div>
        <br />
		</div>
       </div>
      </div>
     </div>
   </form>
   </div>
 </body>
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

    </body>

<!-- Mirrored from absprototype.tk/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 07:43:35 GMT -->
</html>


<script>
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_email = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
  
  /*if($.trim($('#password').val()).length == 0)
  {
   error_password = 'Password is required';
   $('#error_password').text(error_password);
   $('#password').addClass('has-error');
  }
  else
  {
   error_password = '';
   $('#error_password').text(error_password);
   $('#password').removeClass('has-error');
  }*/

  if(error_email != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_file1 = '';
  var error_file2 = '';
  
  if($.trim($('#file1').val()).length == 0)
  {
   error_file1 = 'File is Required';
   $('#error_file1').text(error_file1);
   $('#file1').addClass('has-error');
  }
  else
  {
   error_file1 = '';
   $('#error_file1').text(error_file1);
   $('#file1').removeClass('has-error');
  }
  
  if($.trim($('#file2').val()).length == 0)
  {
   error_file2 = 'File is required';
   $('#error_file2').text(error_file2);
   $('#file2').addClass('has-error');
  }
  else
  {
   error_file2 = '';
   $('#error_file2').text(error_file2);
   $('#file2').removeClass('has-error');
  }

  if(error_file1 != '' || error_file2 != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
 var error_genetic = '';
  
  if($.trim($('#genetic_dep').val()).length == 0)
  {
   error_genetic = 'Field is Required';
   $('#error_genetic').text(error_genetic);
   $('#genetic_dep').addClass('has-error');
  }
  else
  {
   error_genetic = '';
   $('#error_genetic_dep').text(error_genetic);
   $('#genetic').removeClass('has-error');
  }
  if(error_genetic != '')
  {
   return false;
  }
  else
  {
   $('#list_contact_details').removeClass('active active_tab1');
   $('#list_contact_details').removeAttr('href data-toggle');
   $('#contact_details').removeClass('active');
   $('#list_contact_details').addClass('inactive_tab1');
   $('#list_requirement_details').removeClass('inactive_tab1');
   $('#list_requirement_details').addClass('active_tab1 active');
   $('#list_requirement_details').attr('href', '#requirement_details');
   $('#list_requirement_details').attr('data-toggle', 'tab');
   $('#requirement_details').addClass('active in');
  }
 });
 
 $('#previous_btn_requirement_details').click(function(){
  $('#list_requirement_details').removeClass('active active_tab1');
  $('#list_requirement_details').removeAttr('href data-toggle');
  $('#requirement_details').removeClass('active in');
  $('#list_requirement_details').addClass('inactive_tab1');
  $('#list_contact_details').removeClass('inactive_tab1');
  $('#list_contact_details').addClass('active_tab1 active');
  $('#list_contact_details').attr('href', '#contact_details');
  $('#list_contact_details').attr('data-toggle', 'tab');
  $('#contact_details').addClass('active in');
 });
 $('#btn_requirement_details').click(function(){
  var error_sp_gen = '';
  var error_ven_gen = '';
  
  if($.trim($('#sp_gen').val()).length == 0)
  {
   error_sp_gen = 'Field Required';
   $('#error_sp_gen').text(error_sp_gen);
   $('#sp_gen').addClass('has-error');
  }
  else
  {
   error_sp_gen = '';
   $('#error_sp_gen').text(error_sp_gen);
   $('#sp_gen').removeClass('has-error');
  }
  
  if($.trim($('#ven_gen').val()).length == 0)
  {
   error_ven_gen= 'Field is required';
   $('#error_ven_gen').text(error_ven_gen);
   $('#ven_gen').addClass('has-error');
  }
  else
  {
   error_ven_gen = '';
   $('#error_ven_gen').text(error_ven_gen);
   $('#ven_gen').removeClass('has-error');
  }

  if(error_sp_gen != '' || error_ven_gen != '')
  {
   return false;
  }
  else
  {
   $('#list_requirement_details').removeClass('active active_tab1');
   $('#list_requirement_details').removeAttr('href data-toggle');
   $('#requirement_details').removeClass('active');
   $('#list_requirement_details').addClass('inactive_tab1');
   $('#list_finish_details').removeClass('inactive_tab1');
   $('#list_finish_details').addClass('active_tab1 active');
   $('#list_finish_details').attr('href', '#finish_details');
   $('#list_finish_details').attr('data-toggle', 'tab');
   $('#finish_details').addClass('active in');
  }
 });
 
 $('#previous_submit').click(function(){
  $('#list_finish_details').removeClass('active active_tab1');
  $('#list_finish_details').removeAttr('href data-toggle');
  $('#finish_details').removeClass('active in');
  $('#list_finish_details').addClass('inactive_tab1');
  $('#list_requirement_details').removeClass('inactive_tab1');
  $('#list_requirement_details').addClass('active_tab1 active');
  $('#list_requirement_details').attr('href', '#requirement_details');
  $('#list_requirement_details').attr('data-toggle', 'tab');
  $('#requirement_details').addClass('active in');
 });
 
 $('#submit').click(function(){
 var error_pac_input = '';
  
  if($.trim($('#pac_input').val()).length == 0)
  {
   error_pac_input = 'Field is Required';
   $('#error_pac_input').text(error_pac_input);
   $('#pac_input').addClass('has-error');
  }
  else
  {
   error_pac_input = '';
   $('#error_pac_input').text(error_pac-input);
   $('#pac_input').removeClass('has-error');
  }
  if(error_pac_input != '')
  {
   return false;
  }
  else
  {
   $('#submit').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
   });
});
</script>
