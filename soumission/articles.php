<?php
include('../model/AuteurPrincipal.php');
session_start();
if(!isset($_SESSION["USER"]))
{
	header("location:index.php");
}

$user=$_SESSION['USER'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	 <title>Gestion du Profil</title>

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
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Liste of articles</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content no-padding">
								<table class="table table-hover table-striped table-bordered table-highlight-head">
									<thead>
										<tr>
											<th>Articles</th>
											<th>Status</th>
											<th>Format</th>
											<th>Participation type</th>
											<th>Language</th>
											<th >Delete</th>
										</tr>
									</thead>
									<tbody>
										
										<?php
											$pdo = new PDO("mysql:host=localhost;dbname=cfp","root","");
											$req=$pdo->prepare("select * from soumission where `AuteurPrincipalID`='".$user->getID()."' ;");
											$req->setFetchMode(PDO::FETCH_ASSOC);
											$req->execute();
											$article=$req->fetchAll();
											for($i=0;$i<count($article);$i++) {
											?>
											<tr class="item">
												<td class="subject"><?php echo $article[$i]["article"]?></td>
												<td><span class="published"><?php if($article[$i]["etat"]==0)
													echo "soumis";
											elseif ($article[$i]["etat"]==1)
												echo "en revision";
											elseif ($article[$i]["etat"]==2)
												echo "accepte conforme";
											elseif ($article[$i]["etat"]==3)
												echo "accepte non conforme";
											elseif ($article[$i]["etat"]==4)
												echo "accepte revision mineure";
											elseif ($article[$i]["etat"]==5)
												echo "accepte revision majeure";
											elseif ($article[$i]["etat"]==6)
												echo "accepte derniere revision";
											elseif ($article[$i]["etat"]==7)
												echo "accepte";
											elseif ($article[$i]["etat"]==8)
												echo "refuse";?></span></td>
												<td><?php echo $article[$i]["format"]?></td>
												<td class="name"><?php echo $article[$i]["type"]?></td>
												<td class="name"><?php echo $article[$i]["langue"]?></td>
												<td class="action"><a href='delete.php?id=<?php echo $article[$i]["Id"] ?>'><img src="images/del.png" alt="delete"></a></td>
											</tr>
										<?php }?>
										
										
				                    </tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Table Classes -->
				<!-- /Page Content -->
			</div>
			<!-- /.container -->
		</div>
		
    </div>


</body>
</html>