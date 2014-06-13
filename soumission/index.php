<?php
include('../model/AuteurPrincipal.php');
session_start();
if (isset($_POST['go'])) {
    @$submit = $_POST["go"];
    @$login = $_POST["login"];
    @$pass = $_POST["pass"];
}
if (isset($_POST['reset'])) {
    $reset = $_POST['reset'];
    @$login = $_POST["email_reset"];
}


if (isset($submit)) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=cfp", "root", "");
        //
        $req = $pdo->prepare("select * from auteurprincipal where email='" . $login . "' and pass='" . $pass . "' ;");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
        $tab = $req->fetchAll();
        if (count($tab) == 0) {
            echo "Erreur";
        } else {
            $user = new AuteurPrincipal();
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
            $user->setInstitution($tab[0]["institution"]);
            $user->setPass($tab[0]["pass"]);

            $_SESSION['USER'] = $user;

            header("location:soumission.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
if (isset($reset)) {
    $email = $_POST['mail_reset'];
    try {

        $pdo = new PDO("mysql:host=localhost;dbname=cfp", "root", "");
        //
        $req = $pdo->prepare("select * from auteurprincipal where email='" . $email . "' ;");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
        $tab = $req->fetchAll();
        if (count($tab) == 0) {
            echo "Erreur";
        } else {
            $to = $mailconf;
        $subject = 'Reset mot de passe';
        $md5email = md5($email);
        $message = 'suite a votre requette de resifinition de mot de passe( ' . $email . " ), \r\n un lien pour la redefinition de votre mot de pass vous est envoyer\r\n ".
                ' http://localhost/CPMRS/soumission/reset_pass.php?email='.$md5email;
        $headers = 'From: admin@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        }


        
    } catch (PDOException $e) {
        
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>CPRMS | Panneau d'Administration | Login</title>

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

        <!-- Slim Progress Bars -->
        <script type="text/javascript" src="plugins/nprogress/nprogress.js"></script>

        <!-- App -->
        <script type="text/javascript" src="assets/js/login.js"></script>
        <script>
            $(document).ready(function() {
                "use strict";

                Login.init(); // Init login JavaScript
            });
        </script>
    </head>
    <body class="login">
        <!-- Logo -->
        <div class="logo">
            <img src="assets/img/logo.png" alt="logo" />
            <strong>CALL</strong>FOR PAPER
        </div>
        <!-- /Logo -->

        <!-- Login Box -->
        <div class="box">
            <div class="content">
                <!-- Login Formular -->
                <form class="form-vertical login-form" action="index.php" method="post">
                    <!-- Title -->
                    <h3 class="form-title">Sign In to your Account</h3>

                    <!-- Error Message -->
                    <div class="alert fade in alert-danger" style="display: none;">
                        <i class="icon-remove close" data-dismiss="alert"></i>
                        Enter any username and password.
                    </div>

                    <!-- Input Fields -->
                    <div class="form-group">
                        <!--<label for="username">Username:</label>-->
                        <div class="input-icon">
                            <i class="icon-envelope"></i>
                            <input type="text" name="login" class="form-control" placeholder="Email" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your email." />
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
                <!-- /Register Formular -->
            </div> <!-- /.content -->

            <!-- Forgot Password Form -->
            <div class="inner-box">
                <div class="content">
                    <!-- Close Button -->
                    <i class="icon-remove close hide-default"></i>

                    <!-- Link as Toggle Button -->
                    <a href="#" class="forgot-password-link">Forgot Password?</a>

                    <!-- Forgot Password Formular -->
                    <form class="form-vertical forgot-password-form hide-default" action="reset_pess.php" method="post" id="forgot-password"> 
                        <!-- Input Fields -->
                        <div class="form-group">
                            <!--<label for="email">Email:</label>-->
                            <div class="input-icon">
                                <i class="icon-envelope"></i>
                                <input type="text" name="email_reset" class="form-control" placeholder="Enter email address" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." />
                            </div>
                        </div>
                        <!-- /Input Fields -->

                        <button type="submit" class="submit btn btn-default btn-block" name="raset">
                            Reset your Password
                        </button>
                    </form>
                    <!-- /Forgot Password Formular -->

                    <!-- Shows up if reset-button was clicked -->
                    <div class="forgot-password-done hide-default">
                            <i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
                        <span>Great. We have sent you an email.</span>
                    </div>
                    <!-- Registeration Formular (hidden by default) -->
                    <form class="form-vertical register-form" action="inscription.php" method="post" style="display: none;">
                        <!-- Title -->
                        <h3 class="form-title">Sign Up for Free</h3>

                        <!-- Input Fields -->
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-user"></i>
                                <input type="text" name="nom" class="form-control" placeholder="First-name" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-user"></i>
                                <input type="text" name="prenom" class="form-control" placeholder="Family-name" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-phone"></i> 
                                <input type="text" name="tel" class="form-control" placeholder="Phone number" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-home"></i> 
                                <input type="text" name="adresse" class="form-control" placeholder="Adress" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-map-marker"></i>
                                <input type="text" name="pays" class="form-control" placeholder="Country" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-globe"></i>
                                <input type="text" name="nationalite" class="form-control" placeholder="Nationnality" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-book"></i>
                                <input type="text" name="institution" class="form-control" placeholder="Institution" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-beaker"></i>
                                <input type="text" name="laboratoire" class="form-control" placeholder="Laboratory" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-group"></i> 
                                <input type="text" name="equipeTravail" class="form-control" placeholder="Work Team" autofocus="autofocus" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-lock"></i>
                                <input type="password" name="pass" class="form-control" placeholder="Password" id="register_password" data-rule-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-ok"></i>
                                <input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password" data-rule-required="true" data-rule-equalTo="#register_password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon-envelope"></i>
                                <input type="text" name="email" class="form-control" placeholder="Email address" data-rule-required="true" data-rule-email="true" />
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="back btn btn-default pull-left">
                                <i class="icon-angle-left"></i> Back</i>
                            </button>
                            <button type="submit" class=" btn btn-primary pull-right" name="go2">
                                Sign Up <i class="icon-angle-right"></i>
                            </button>
                        </div>
                    </form>
                    <!-- Registration formular -->
                </div> <!-- /.content -->
            </div>
            <!-- /Forgot Password Form -->
        </div>
        <!-- /Login Box -->

        <!-- Single-Sign-On (SSO) -->
        <div class="single-sign-on">
            <span>or</span>

            <a href="inscriptionFB.php" ><button class="btn btn-facebook btn-block">
                    <i class="icon-facebook"></i> Sign in with Facebook
                </button></a>

        </div>
        <!-- /Single-Sign-On (SSO) -->
        <!-- Footer -->
        <div class="footer">
            <a href="index.php" class="sign-up">Don't have an account yet? <strong>Sign Up</strong></a>
        </div>
        <!-- /Footer -->

    </body>
</html>