<?php
	include('../model/AuteurPrincipal.php');
	session_start();
	if(!isset($_SESSION["USER"]))
	{
		//header("location:index.php");
	}
	$user=$_SESSION['USER'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Gestion des articles</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>

	<!-- Forms -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="plugins/fileinput/fileinput.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="plugins/validation/additional-methods.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="plugins/noty/themes/default.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/demo/form_validation.js"></script>
</head>


<body>


<!-- Header -->
<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="soumission.php">
				<img src="assets/img/logo.png" alt="logo" />
				<strong>CALL</strong>FOR PAPER
				
			</a>
			<!-- /logo -->
			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

<!-- Top Left Menu -->
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				<li>
					<a href="#">
						Dashboard
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Go to
					<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="..\site\fr\index.php"><i class="icon-home"></i> HOME</a></li>
						<li><a href="..\site\fr\programme.php"><i class="icon-calendar"></i>PROGRAMME</a></li>
						<li><a href="..\site\fr\contact.php"><i class="icon-envelope"></i> CONTACT</a></li>
					</ul>
				</li>
			</ul>
			<!-- /Top Left Menu -->
			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Notifications -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">2</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 2 new notifications</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">1 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-danger"><i class="icon-warning-sign"></i></span>
								<span class="message">High CPU load on cluster #2.</span>
								<span class="time">5 mins</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all notifications</a>
						</li>
					</ul>
				</li>
				
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<div class="account-name"><strong>
					</strong>
					<div class="account-separator"></div></div><i class="icon-user"></i>
					<span class="username">
				<?php echo $user->getNom(); echo(" ") ;echo $user->getPrenom(); ?>	
				</span>
					<i class="icon-caret-down small"></i>
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
					</a>
					<ul class="dropdown-menu">
						<li><a href="profil.php"><i class="icon-user"></i> My Profile</a></li>
						<li class="divider"></li>
						<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->
</header> 
		
	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">
		<!--=== Navigation ===-->
				<ul id="nav">
					<li class="current">
						<a href="#">
							<i class="icon-dashboard"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-edit"></i>
							My articles
						</a>
						<ul class="sub-menu">
							<li>
								<a href="soumission.php">
								<i class="icon-angle-right"></i>
								Submit an article
								</a>
							</li>
							<li>
								<a href="articles.php">
								<i class="icon-angle-right"></i>
								Submitted articles
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="javascript:void(0);">
							<i class="icon-folder-open-alt"></i>
							My account
						</a>
						<ul class="sub-menu">
							<li>
								<a href="logout.php">
								<i class="icon-lock"></i>
								Logout
								</a>
							</li>
							<li>
								<a href="profil.php">
								<i class="icon-user"></i>
								User Profile
								</a>
							</li>
						</ul>
					</li>
				</ul>
	   <div class="sidebar-widget align-center">
						<div class="btn-group" data-toggle="buttons" id="theme-switcher">
							<label class="btn active">
								<input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
							</label>
							<label class="btn">
								<input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
							</label>
						</div>
		</div>
	</div>
	<div id="divider" class="resizeable"></div>
</div>
<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							Panel Auteur
						</li>
						<li class="current">
							Soumettre un article
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				
				
					<!--=== Table Classes ===-->
					<form action="traitesoumission.php" method="post">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Submit a new article</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content ">
								<div class="form-horizontal row-border" id="validate-1" >
									<div class="form-group">
										<label class="col-md-3 control-label">Article language<span class="required">*</span></label>
										<div class="col-md-9">
											<select name="langue" class="form-control required">
												<option value=""></option>
												<option value="1">French</option>
												<option value="2">English UK</option>
												<option value="3">English USA</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Title <span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text" name="titre" class="form-control required">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Main Theme<span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text" name="themep" class="form-control required">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Secondary Theme <span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text" name="themes" class="form-control required" >
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Participation type<span class="required">*</span></label>
										<div class="col-md-9">
											<select name="type" class="form-control required">
												<option value=""></option>
												<option value="1">Short paper</option>
												<option value="2">Long paper</option>
												<option value="3">Workshop</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Preferred participation language<span class="required">*</span></label>
										<div class="col-md-9">
											<select name="languep" class="form-control required">
												<option value=""></option>
												<option value="1">French</option>
												<option value="2">OEnglish UK</option>
												<option value="3">English USA</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">N° of secondary authors <span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text" id="auteurs" name="auteurs" class="form-control required" ><br>
											<input type="button" value="Ajouter" class="btn btn-primary pull-col-md-9" onclick="autSec()">
										</div>
                        
									</div>
									
								</div>
							</div>
						</div>
						<!-- /Validation Example 1 -->	
						<script >
		function autSec(){
			var nb = document.getElementById('auteurs').value;
			nb++;
			for(i=1;i<nb;i++){
				document.getElementById('secondaire').innerHTML+=" Auteur "+i+" :  <div class='form-group'><div class='input-icon'><i class='icon-user'></i><input type='text' name='nom"+i+"' class='form-control' placeholder='First-name' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-user'></i><input type='text' name='prenom"+i+"' class='form-control' placeholder='Family-name' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-phone'></i> <input type='text' name='tel"+i+"' class='form-control' placeholder='Phone number' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-home'></i> <input type='text' name='adresse"+i+"' class='form-control' placeholder='Adress' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-map-marker'></i><input type='text' name='pays"+i+"' class='form-control' placeholder='Country' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-globe'></i><input type='text' name='nationalite"+i+"' class='form-control' placeholder='Nationnality' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-book'></i><input type='text' name='institution"+i+"' class='form-control' placeholder='Institution' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-beaker'></i><input type='text' name='laboratoire"+i+"' class='form-control' placeholder='Laboratory' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-group'></i> <input type='text' name='equipeTravail"+i+"' class='form-control' placeholder='Work Team' autofocus='autofocus' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-lock'></i><input type='password' name='pass"+i+"' class='form-control' placeholder='Password' id='register_password' data-rule-required='true' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-ok'></i><input type='password' name='password_confirm"+i+"' class='form-control' placeholder='Confirm Password' data-rule-required='true' data-rule-equalTo='#register_password' /></div></div><div class='form-group'><div class='input-icon'><i class='icon-envelope'></i><input type='text' name='email"+i+"' class='form-control' placeholder='Email address' data-rule-required='true' data-rule-email='true'/></div></div>";
			}

		}
		</script>
	<!--Start Step 2-->
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i>Submit a new article</h4>
			<div id="secondaire"></div>
		</div>
	</div>
	<!--END Step 2-->
	<!-- Start Step 3-->
	<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Manuscrit details</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content ">
								<div class="form-horizontal row-border" id="validate-1" >
									<div class="form-group">
										<label class="col-md-3 control-label">Submission format<span class="required">*</span></label>
										<div class="col-md-9">
											<select id="format" name="format"  class="chzn-select medium-select select">
												<option>pdf</option>
												<option>doc</option>
												<option>xls</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">File<span class="required">*</span></label>
										<div class="col-md-9">
											<input type="file" name="fichier" class="required" accept="image/*" data-style="fileinput" data-inputsize="medium">
											<label for="file1" class="has-error help-block" generated="true" style="display:none;"></label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Abstract<span class="required">*</span></label>
										<div class="col-md-9">
											<textarea rows="3" cols="5" name="resume" class="auto form-control"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Key Words<span class="required">*</span></label>
											<div class="col-md-9">
												<textarea  rows="3" cols="5" class="auto form-control" name="mots" ></textarea>
												<br><br>
											</div>
									</div>
								</div>
							</div>
						</div>
	</div>
		<!--END Step 3-->
		<!-- Start Step4-->
		<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Confirmation Mail</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content ">
								<div class="form-horizontal row-border" id="validate-1" >
									<div class="form-group">
										<label class="col-md-3 control-label">Confirmation Mail<span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text"  name="mailConf" class="form-control required email" >
										</div>
									</div>
									<div class="form-actions">
						<input type="submit" value="Send" name="send" class="btn btn-primary pull-right">
					</div>
								</div>
							</div>
						</div>
						
		</div>
	</form>
					<!-- /Table Classes -->
			</div>
		</div>
	</div>
</body>
</html>