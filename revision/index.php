<?php
	include('../model/MembreComite.php');
	session_start();
	@$login=$_POST["login"];
	@$pass=$_POST["pass"];
	@$submit=$_POST["go"];


	if(isset($submit)){
		try{
			$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
			//
			$req=$pdo->prepare("select * from membrecomite where email='".$login."' and pass='".$pass."' ;");
			$req->setFetchMode(PDO::FETCH_ASSOC);
			$req->execute();
			$tab=$req->fetchAll();
			if(count($tab)==0){}
			else {
				$user= new MembreComite();
				$user->setID($tab[0]["ID"]);
				$user->setNom($tab[0]["nom"]);
				$user->setPrenom($tab[0]["prenom"]);
				$user->setEmail($tab[0]["email"]);
				$user->setAdresse($tab[0]["adresse"]);
				$user->setTel($tab[0]["tel"]);
				$user->setPays($tab[0]["pays"]);
				$user->setNationalite($tab[0]["nationalite"]);
				$user->setLaboratoire($tab[0]["laboratoire"]);
			    $user->setEquipeTravail($tab[0]["equipeTravaille"]);
				$user->setPass($tab[0]["pass"]);

				$_SESSION['COMITE']=$user;

				header("location:revision.php");
			}
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
		<title>CPRMS | Panneau de Revision | Login</title>
		<meta name="description" content="">
		<link rel="shortcut icon" href="images/favicon.ico" />

		
		<link rel="stylesheet" href="css/login.css" type="text/css"
			media="screen" />
		<link rel="stylesheet"
			href="http://fonts.googleapis.com/css?family=Cuprum" />

		<script type="text/javascript"
			src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

		<script src="lib/jquery.validationEngine.js" type="text/javascript"
			charset="utf-8"></script>
		
		<script>
			jQuery(document).ready(function() {
				// binds form submission and fields to the validation engine
				jQuery("#form-login").validationEngine();
			});
		</script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

	<!-- Login -->
	<link href="assets/css/login.css" rel="stylesheet" type="text/css" />

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

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Beautiful Checkboxes -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>


	<!-- App -->
	<script type="text/javascript" src="assets/js/login.js"></script>
	<script>
	$(document).ready(function(){
		"use strict";

		Login.init(); // Init login JavaScript
	});
	</script>
</head>

<body class="login">
	<!-- Logo -->
	<div class="logo">
		<img src="assets/img/logo.png" alt="logo" />
		<strong>CALL </strong>FOR PAPER
	</div>
	<!-- /Logo -->

	<!-- Login Box -->
	<div class="box">
		<div class="content">
			<!-- Login Formular -->
			<form class="form-vertical login-form" action="index.php" method="post">
				<!-- Title -->
				<h3 class="form-title">Panneau de révision </h3>

				<!-- Error Message -->
				<div class="alert fade in alert-danger" style="display: none;">
					<i class="icon-remove close" data-dismiss="alert"></i>
				</div>

				<!-- Input Fields -->
				<div class="form-group">
					<!--<label for="username">Username:</label>-->
					<div class="input-icon">
						<i class="icon-user"></i>
						<input type="text" name="login" class="form-control" placeholder="Login" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your username." />
					</div>
				</div>
				<div class="form-group">
					<!--<label for="password">Password:</label>-->
					<div class="input-icon">
						<i class="icon-lock"></i>
						<input type="password" name="pass" class="form-control" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password." />
					</div>
				</div>
				<!-- /Input Fields -->

				<!-- Form Actions -->
				<div class="form-actions">
					<label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Remember me</label>
					<button type="submit" class="submit btn btn-primary pull-right" name="go">
						Sign In <i class="icon-angle-right"></i>
					</button>
				</div>
			</form>
			<!-- /Login Formular -->

			<!-- Register Formular (hidden by default) -->
			<form class="form-vertical register-form" action="inscription.php" method="post" style="display: none;">
				<!-- Title -->
				<h3 class="form-title">Sign Up</h3>

				<!-- Input Fields -->
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-user"></i>
						<input type="text" name="nom" class="form-control" placeholder="Nom" autofocus="autofocus" data-rule-required="true" />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-lock"></i>
						<input type="text" name="prenom" class="form-control" placeholder="Prenom"  autofocus="autofocus" data-rule-required="true" />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-envelope"></i>
						<input type="text" name="Email" class="form-control" placeholder="Email address" data-rule-required="true" data-rule-email="true" />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-ok"></i>
						<input type="adresse" name="adresse" class="form-control" placeholder="Adresse Postal" data-rule-required="true"  />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-ok"></i>
						<input type="text" name="tel" class="form-control" placeholder="Telephone" data-rule-required="true"  />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-envelope"></i>
						<input type="text" name="pays" class="form-control" placeholder="Pays" data-rule-required="true"  />
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-ok"></i>
						<input type="text" name="nationalite" class="form-control" placeholder="Nationalite" data-rule-required="true"  />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-envelope"></i>
						<input type="text" name="laboratoire" class="form-control" placeholder="Laboratoire" data-rule-required="true"  />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-ok"></i>
						<input type="text" name="equipeTravaille" class="form-control" placeholder="Equipe de travail" data-rule-required="true"  />
					</div>
				</div>
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-envelope"></i>
						<input type="password" name="pass" class="form-control" placeholder="Mot de Passe" data-rule-required="true"  />
					</div>
				</div>
				<div class="form-group spacing-top">
					<label class="checkbox"><input type="checkbox" class="uniform" name="remember" data-rule-required="true" data-msg-required="Please accept ToS first."> I agree to the <a href="javascript:void(0);">Terms of Service</a></label>
					<label for="remember" class="has-error help-block" generated="true" style="display:none;"></label>
				</div>
				<!-- /Input Fields -->

				<!-- Form Actions -->
				<div class="form-actions">
					<button type="button" class="back btn btn-default pull-left">
						<i class="icon-angle-left"></i> Retour</i>
					</button>
					<button type="submit" class="submit btn btn-primary pull-right">
						S'inscrire <i class="icon-angle-right"></i>
					</button>
				</div>
			</form>
			<!-- /Register Formular -->
		</div> <!-- /.content -->

		<!-- Forgot Password Form -->
		<div class="inner-box">
			<div class="content">
				<!-- Close Button -->
				<i class="icon-remove close hide-default"></i>

				<!-- Link as Toggle Button -->
				<a href="#" class="forgot-password-link">Mot de passe oublié?</a>

				<!-- Forgot Password Formular -->
				<form class="form-vertical forgot-password-form hide-default" action="login.html" method="post">
					<!-- Input Fields -->
					<div class="form-group">
						<!--<label for="email">Email:</label>-->
						<div class="input-icon">
							<i class="icon-envelope"></i>
							<input type="text" name="email" class="form-control" placeholder="Enter email address" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." />
						</div>
					</div>
					<!-- /Input Fields -->

					<button type="submit" class="submit btn btn-default btn-block">
						Restaurer mot de passe
					</button>
				</form>
				<!-- /Forgot Password Formular -->

				<!-- Shows up if reset-button was clicked -->
				<div class="forgot-password-done hide-default">
					<i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
					<span>Great. We have sent you an email.</span>
				</div>
			</div> <!-- /.content -->
		</div>
		<!-- /Forgot Password Form -->
	</div>
	<!-- /Login Box -->

	<!-- Single-Sign-On (SSO) -->
	<div class="single-sign-on">
		<span>or</span>

		<button class="btn btn-facebook btn-block">
			<i class="icon-facebook"></i> Sign in with Facebook
		</button>
	</div>
	<!-- /Single-Sign-On (SSO) -->

	<!-- Footer -->
	<div class="footer">
		<a href="#" class="sign-up">Don't have an account yet? <strong>Sign Up</strong></a>
	</div>
	<!-- /Footer -->
</body>
</html>