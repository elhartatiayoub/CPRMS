<?php
include('../model/AuteurPrincipal.php');
session_start();
if(!isset($_SESSION["USER"]))
{
	header("location:index.php");
}
$user=$_SESSION['USER'];
@$submit=$_POST["submit"];
@$nom=$_POST["nomp"];
@$prenom=$_POST["prenomp"];
@$email=$_POST["email"];
@$adresse=$_POST["adresse"];
@$tel=$_POST["tel"];
@$pays=$_POST["pays"];
@$nationalite=$_POST["nationalite"];
@$laboratoire=$_POST["labo"];
@$equipe=$_POST["equipe"];
@$institution=$_POST["institution"];
if(isset($_POST["pass"]))
{
@$pass=$_POST["pass"];
}else{
@$pass=$user->getPass();
}
if(isset($submit)){
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
		echo $user->getID();
		$req=$pdo->prepare("UPDATE `auteurprincipal` SET `nom`='".$nom."',`prenom`='"
			.$prenom."',`email`='".$email."',`adresse`='".$adresse."',`tel`='".$tel
			."',`pays`='".$pays."',`nationalite`='".$nationalite."',`laboratoire`='"
			.$laboratoire."',`equipeTravaille`='".$equipe."',`institution`='".$institution."',`pass`='".$pass."' WHERE  `ID`=".$user->getID());
		$req->execute();

		$user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setEmail($email);
            $user->setAdresse($adresse);
            $user->setTel($tel);
            $user->setPays($pays);
            $user->setNationalite($nationalite);
            $user->setLaboratoire($laboratoire);
            $user->setEquipeTravail($equipe);
			$user->setInstitution($institution);
            $user->setPass($pass);

            $_SESSION['USER'] = $user;

		header("location:profil.php");
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
	<title>Gestion du profil</title>

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
			   
					<div class="row">
					<div class="col-md-12">
						<!-- Tabs-->
						<div class="tabbable tabbable-custom tabbable-full-width">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_overview" data-toggle="tab">Overview</a></li>
								<li><a href="#tab_edit_account" data-toggle="tab">Edit Account</a></li>
							</ul>
							<div class="tab-content row">
							<!--=== Overview ===-->
								<div class="tab-pane active" id="tab_overview">
									<div class="col-md-3">
										<div class="list-group">
											<li class="list-group-item no-padding">
												<img src="assets/img/demo/avatar-large.jpg" alt="">
											</li>
										</div>
									</div>

									<div class="col-md-9">
										<div class="row profile-info">
											<div class="col-md-7">
												<div class="alert alert-info">You will receive all future updates for free!</div>
												<?php echo "Hello"; echo" " ;?><strong><?php echo $user->getNom(); echo" " ;echo $user->getPrenom();?></strong>

												<dl class="dl-horizontal">
													<dt>First Name</dt>
													<dd><?php echo $user->getNom(); ?>	</dd>
													<dt>Last Name</dt>
													<dd><?php echo $user->getPrenom();?> </dd>
													<dt>Email</dt>
													<dd><?php echo $user->getEmail();?> </dd>
													<dt>Adresse</dt>
													<dd><?php echo $user->getAdresse();?> </dd>
													<dt>Phone Number</dt>
													<dd><?php echo $user->getTel();?> </dd>
													<dt>Country</dt>
													<dd><?php echo $user->getPays();?> </dd>
													<dt>Nationality</dt>
													<dd><?php echo $user->getNationalite();?> </dd>
													<dt>Laboratory</dt>
													<dd><?php echo $user->getLaboratoire();?> </dd>
													<dt>Work Team</dt>
													<dd><?php echo $user->getEquipeTravail();?> </dd>
													
													
												</dl>
											</div>
										</div> <!-- /.row -->
									</div> <!-- /.col-md-9 -->
								</div>
								<!-- /Overview -->
								<!--=== Edit Account ===-->
								<div class="tab-pane" id="tab_edit_account">
									<form class="form-horizontal" action="profil.php" method="post">
										<div class="col-md-12">
											<div class="widget">
												<div class="widget-header">
													<h4>General Information</h4>
												</div>
												<div class="widget-content">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 control-label">First name:</label>
																<div class="col-md-8"><input type="text" name="nomp" class="form-control" value="<?php echo $user->getNom(); ?>"></div>
															</div>

															<div class="form-group">
																<label class="col-md-4 control-label">Last name:</label>
																<div class="col-md-8"><input type="text" name="prenomp" class="form-control" value="<?php echo $user->getPrenom(); ?>" ></div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">Email:</label>
																<div class="col-md-8"><input type="text" name="email" class="form-control" value="<?php echo $user->getEmail(); ?>" ></div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">Adresse:</label>
																<div class="col-md-8"><input type="text" name="adresse" class="form-control" value="<?php echo $user->getAdresse(); ?>" ></div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">Phone Number:</label>
																<div class="col-md-8"><input type="text" name="tel" class="form-control" value="<?php echo $user->getTel(); ?>" ></div>
															</div>
														</div>

														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 control-label">Gender:</label>
																<div class="col-md-8">
																	<select class="form-control">
																		<option value="male" selected="selected">Male</option>
																		<option value="female">Female</option>
																	</select>
																</div>
															</div>
															
															<div class="form-group">
																<label class="col-md-4 control-label">Country:</label>
																<div class="col-md-8"><input type="text" name="pays" class="form-control" value="<?php echo $user->getPays(); ?>"></div>
															</div>
															
															<div class="form-group">
																<label class="col-md-4 control-label">Nationality:</label>
																<div class="col-md-8"><input type="text" name="nationalite" class="form-control" value="<?php echo $user->getNationalite(); ?>"></div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">Laboratory:</label>
																<div class="col-md-8"><input type="text" name="labo" class="form-control" value="<?php echo $user->getLaboratoire(); ?>"></div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">Work Team:</label>
																<div class="col-md-8"><input type="text" name="equipe" class="form-control" value="<?php echo $user->getEquipeTravail(); ?>"></div>
															</div>
														</div>
													</div> <!-- /.row -->
												</div> <!-- /.widget-content -->
											</div> <!-- /.widget -->
										</div> <!-- /.col-md-12 -->

										<div class="col-md-12 form-vertical no-margin">
											<div class="widget">
												<div class="widget-header">
													<h4>Settings</h4>
												</div>
												<div class="widget-content">
													<div class="row">
														<div class="col-md-4 col-lg-2">
															<strong class="subtitle padding-top-10px">Permanent username</strong>
														</div>

														<div class="col-md-8 col-lg-10">
															<div class="form-group">
																<label class="control-label padding-top-10px">Username:</label>
																<input type="text" name="username" class="form-control" value="<?php echo $user->getNom(); echo(" ") ;echo $user->getPrenom(); ?>	" disabled="disabled">
															</div>
														</div>
													</div> <!-- /.row -->
													<div class="row">
														<div class="col-md-4 col-lg-2">
															<strong class="subtitle">Change password</strong>
															<p class="text-muted">Here you can reset your password if needed.</p>
														</div>

														<div class="col-md-8 col-lg-10">
															<div class="form-group">
																<label class="control-label">Old password:</label>
																<input type="password" name="apass" class="form-control" placeholder="Leave empty for no password-change">
															</div>

															<div class="form-group">
																<label class="control-label">New password:</label>
																<input type="password" name="pass" class="form-control" placeholder="Leave empty for no password-change">
															</div>

															<div class="form-group">
																<label class="control-label">Repeat new password:</label>
																<input type="password" name="repass" class="form-control" placeholder="Leave empty for no password-change">
															</div>
														</div>
													</div> <!-- /.row -->
												</div> <!-- /.widget-content -->
											</div> <!-- /.widget -->

											<div class="form-actions">
												<input type="submit" name="submit" value="Update Account" class="btn btn-primary pull-right">
											</div>
										</div> <!-- /.col-md-12 -->
									</form>
								</div>
								<!-- /Edit Account -->
							</div> <!-- /.tab-content -->
						</div>
						<!--END TABS-->
					</div>
				</div> <!-- /.row -->
				<!-- /Page Content -->

	      
				<!-- /Table Classes -->
				

	        </div>

        </div>
</body>
</html>