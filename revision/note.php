<?php
	include('../model/MembreComite.php');
	session_start();
	if(!isset($_SESSION["COMITE"]))
	{
		header("location:index.php");
	}
	$user=$_SESSION['COMITE'];
	$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
	$req=$pdo->prepare("select * from revision where MembreComiteID=".$user->getID()." ;");
	$req->setFetchMode(PDO::FETCH_ASSOC);
	$req->execute();
	$membre=$req->fetchAll();
	
	@$noter=$_POST["send"];
	@$id=$_POST["article"];
	@$note0=$_POST["note0"];
	@$note1=$_POST["note1"];
	@$note2=$_POST["note2"];
	@$note3=$_POST["note3"];
	@$note4=$_POST["note4"];
	@$note5=$_POST["note5"];
	@$note6=$_POST["note6"];
	@$note7=$_POST["note7"];
	@$note8=$_POST["note8"];
	@$note9=$_POST["note9"];
	@$note10=$_POST["note10"];
	@$note11=$_POST["note11"];
	@$note12=$_POST["note12"];
	@$note13=$_POST["note13"];
	@$note14=$_POST["note14"];
	
	if(isset($noter))
	{
		$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
		$req=$pdo->prepare("update  revision set note1=".$note0.", note2=".$note1.", note3=".$note2.", note4=".$note3.", note5=".$note4.", note6=".$note5.", note7=".$note6.", note8=".$note7.", note9=".$note8.", note10=".$note9.", note11=".$note10.", note12=".$note11.", note13=".$note12.", note14=".$note13.", note15=".$note14." where SoumissionId=".$id.";");
		$req->execute();
	}
	
	$criteres = array("Adequation avec les objectifs de l'evenement","Pertinence et originalite de la contribution","Qualite scientifique","Impact","Importance de la contribution","Valeur ajout&eacutee de la contribution","Organisation generale de la contribution","Adequation du titre","Qualite du resume","Choix des mots-cles","Qualite de l'introduction et de la conclusion","Qualite de la bibliographie","Qualite de l'etat de l'art","Clarete de la redaction du document","Respect des instruction aux auteurs");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Call for Paper </title>

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
			<a class="navbar-brand" href="index.php">
				<img src="assets/img/logo.png" alt="logo" />
				<strong>Panel </strong>Comité 
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
						Home
					</a>
				</li>
				
			</ul>
			<!-- /Top Left Menu -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				

				

				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username"> <?php echo $user->getNom(); echo(" ") ;echo $user->getPrenom(); ?></span>
						<i class="icon-caret-down small"></i>
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

	</header> <!-- /.header -->
	

	<div id="container">
	

		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">

				<!-- Search Input -->
				<form class="sidebar-search">
					<div class="input-box">
						<button type="submit" class="submit">
							<i class="icon-search"></i>
						</button>
						<span>
							<input type="text" placeholder="Search...">
						</span>
					</div>
				</form>

				<!-- Search Results -->
				 <!-- /.sidebar-search-results -->

				<!--=== Navigation ===-->
				<ul id="nav">
					<li class="current">
						<a href="revision.php">
							<i class="icon-dashboard"></i>
							Panel
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Mes r&eacutevisions
							<span class="label label-info pull-right">2</span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="listeRevisions.php">
								<i class="icon-angle-right"></i>
								Liste de mes revisions
								<span></span>
								</a>
							</li>
							<li>
								<a href="note.php">
								<i class="icon-angle-right"></i>
								Notez mes revisions
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-edit"></i>
							Mon Profil
							
						</a>
						<ul class="sub-menu">
							<li>
								<a href="password.php">
								<i class="icon-angle-right"></i>
								Modofier Mot de Passe
								</a>
							</li>
							<li>
								<a href="profil.php">
								<i class="icon-angle-right"></i>
								Modifier les informations
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
				
				<!-- /Navigation -->
				
				
				

			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				

				<!--=== Page Content ===-->
				<!--=== Statboxes ===-->
			<div class="col-md-12">	
				<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Noter Un article</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
				<div class="widget-content ">
								<form class="form-horizontal row-border" id="validate-1" action="#">
									<div class="form-group">
										<label class="col-md-3 control-label">Article<span class="required">*</span></label>
										<div class="col-md-9">
											<select class="form-control required" name="article"> 
									<?php for($j=0;$j<count($membre);$j++) {
										$req=$pdo->prepare("select * from soumission where Id=".$membre[$j]["SoumissionId"]." ;");
										$req->setFetchMode(PDO::FETCH_ASSOC);
										$req->execute();
										$soumission=$req->fetchAll();?>
											<option value="<?php echo $soumission[0]["Id"]?>"><?php echo $soumission[0]["article"]?></option>
										<?php }?>
										</select> 
										</div>
										
									</div>
								
									
									<div class="form-group">
										
										<?php for($i=0;$i<15;$i++){?>
									<div class="form-group">
										<label class="col-md-3 control-label"><?php echo $criteres[$i]?> :<span class="required">*</span></label>
											<div class="col-md-9">
												<input type="text" id="note" name="note<?php echo $i ?>" class="form-control required" placeholder="note/5">
											</div>
									</div>
										<?php }?>
									</div><br>
									<input id="send" name="send" type="submit" class="button-a red" value="Noter" /> &nbsp;&nbsp;
									
									
								</form>
							</div>
					</div> <!-- /.col-md-6 -->
					<!-- /Static Table -->
				
			</div> <!-- /.row -->

		</div> <!-- /.row -->
				<!-- /Page Content -->
	</div>
			<!-- /.container -->

	</div>

</body>
</html>