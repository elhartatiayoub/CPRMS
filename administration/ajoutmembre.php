<?php

require '../model/Administrateur.php';
session_start();
if(!isset($_SESSION["admin"]))
{
	header("location:index.php");
}

$admin=$_SESSION["admin"];
@$submit=$_POST["send"];
@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$email=$_POST["email"];
@$adresse=$_POST["adresse"];
@$tel=$_POST["tel"];
@$pays=$_POST["pays"];
@$nationalite=$_POST["nationalite"];
@$laboratoire=$_POST["labo"];
@$equipe=$_POST["equipe"];


if(isset($submit)){
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
		
		$req=$pdo->prepare("insert into membrecomite values('null','".$nom."','"
			.$prenom."','".$email."','".$adresse."','".$tel
			."','".$pays."','".$nationalite."', '"
			.$laboratoire."', '".$equipe."','pass' );");
		$req->execute();

	}

	catch(PDOException $e){
		echo $e->getMessage();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	 <title>Add a member</title>

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
	<!--[if lt IE 9]>
		<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.tooltip.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.time.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.growraf.min.js"></script>
	<script type="text/javascript" src="plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>

	<script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="plugins/noty/themes/default.js"></script>

	<!-- Forms -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script>

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
	<script type="text/javascript" src="assets/js/demo/pages_calendar.js"></script>
	<script type="text/javascript" src="assets/js/demo/charts/chart_filled_blue.js"></script>
	<script type="text/javascript" src="assets/js/demo/charts/chart_simple.js"></script>
</head>
<body>

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
			</ul>
			<!-- /Top Left Menu -->
			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<div class="account-name"><strong>
					</strong>
					<div class="account-separator"></div></div><i class="icon-user"></i>
					<span class="username">
				<?php echo $admin->getNom(); ?>
				</span>
					<i class="icon-caret-down small"></i>
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
					</a>
					<ul class="dropdown-menu">
						<li><a href="pass.php"><i class="icon-user"></i> My Profile</a></li>
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
							<i class="icon-laptop"></i>
							Web Site
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#">
								<i class="icon-home"></i>
								 Francais
								</a>
							</li>
							<li>
								<a href="#">
								<i class="icon-home"></i>
								English
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="javascript:void(0);">
							<i class="icon-file"></i>
							Articles Submision
						</a>
						<ul class="sub-menu">
							<li>
								<a href="articles.php">
								<i class="icon-file"></i>
								Manage the articles
								</a>
							</li>
							<li>
								<a href="affectation.php">
								<i class="icon-file"></i>
								Affect the articles
								</a>
							</li>
							<li>
								<a href="auteur.php">
								<i class="icon-edit"></i>
								Manage the authors
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-folder-open-alt"></i>
							Revision
						</a>
						<ul class="sub-menu">
							<li>
								<a href="ajoutmembre.php">
								<i class="icon-plus-sign"></i>
								Add a comitee member
								</a>
							</li>
							<li>
								<a href="comite.php">
								<i class="icon-beaker"></i>
								  Scientific comitee
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-group"></i>
							Participations
						</a>
						<ul class="sub-menu">
							<li>
								<a href="participant.php">
								<i class="icon-group"></i>
								Display participants
								</a>
							</li>
							<li>
								<a href="ajouthotel.php">
								<i class="icon-plus-sign"></i>
								Add a hotel
								</a>
							</li>
							<li>
								<a href="hotel.php">
								<i class="icon-home"></i>
								Display hotels
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-user"></i>
							My profile
						</a>
						<ul class="sub-menu">
							<li>
								<a href="pass.php">
								<i class="icon-user"></i>
								Manage my profile
								</a>
							</li>
							<li>
								<a href="logout.php">
								<i class="icon-lock"></i>
								Logout
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
							Administration Panel
						</li>
						<li class="current">
							Add a member
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
			<div class="row">
					<!--=== Validation Example 1 ===-->
				<form class="form-horizontal row-border" action="#" method="post">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Add a comitee member</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content ">
									<div class="form-group">
										<label class="col-md-3 control-label"> Last Name </label>
										<div class="col-md-9">
                                             <input type="text" name="nom" class="form-control required" placeholder="Last name" autofocus="autofocus" data-rule-required="true">						
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">First Name</label>
										<div class="col-md-9">
											<input type="text" name="prenom" class="form-control required" placeholder="First Name" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Email</label>
										<div class="col-md-9">
											 <input type="text" name="email" class="form-control required" placeholder="aa@aa.aa" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Adresse</label>
										<div class="col-md-9">
											 <input type="text" name="adresse" class="form-control required" placeholder="575,Bv Mc Knight" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
							        <div class="form-group">
										<label class="col-md-3 control-label">Phone number </label>
										<div class="col-md-9">
											 <input type="text" name="tel" class="form-control required" placeholder="Phone number" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Country</label>
										<div class="col-md-9">
											 <input type="text" name="pays" class="form-control required" placeholder="Morocco" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Nationality</label>
										<div class="col-md-9">
											 <input type="text" name="nationalite" class="form-control required" placeholder="Moroccan" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Institution</label>
										<div class="col-md-9">
											 <input type="text" name="institut" class="form-control required" placeholder="Institution" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Laboratory</label>
										<div class="col-md-9">
											 <input type="text" name="labo" class="form-control required" placeholder="Laboratory" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Work Team</label>
										<div class="col-md-9">
											 <input type="text" name="equipe" class="form-control required" placeholder="Work Team" autofocus="autofocus" data-rule-required="true">
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" name="send" value="Validate" class="btn btn-primary pull-right">
									</div>
								
							</div>
						</div>
						<!-- /Validation Example 1 -->
					</div>
                </form>					
			</div>
		
        </div>
	</div>	
</body>
</html>