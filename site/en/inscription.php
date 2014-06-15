<?php
require 'donnee_en.php';

@$submit = $_POST["send"];
@$nom = $_POST["nom"];
@$prenom = $_POST["prenom"];
@$email = $_POST["email"];
@$adresse = $_POST["adresse"];
@$tel = $_POST["tel"];
@$pays = $_POST["pays"];
@$nationalite = $_POST["nationalite"];
@$laboratoire = $_POST["labo"];
@$equipe = $_POST["equipe"];
@$paiment = $_POST["pay"];
@$type = $_POST["type"];


if (isset($submit)) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=cfp", "root", "");
        $req = $pdo->prepare("Insert into participant VALUES('NULL', '" . $nom . "', '"
                . $prenom . "', '" . $email . "','" . $adresse . "','" . $tel
                . "', '" . $pays . "', '" . $nationalite . "', '"
                . $laboratoire . "','" . $equipe . "','','" . $paiment . "','" . $type . "' ) ;");
        $req->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Participant</title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 	

        <!-- CSS -->
        <link rel="stylesheet" href="css/base.css" />
        <link rel="stylesheet" class="alt" href="css/theme-blue.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

        <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
        </noscript>

        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script><!-- JQuery Plugin -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="js/jquery.slitslider.js"></script>    
        <script type='text/javascript' src="js/jquery.plugins.min.js"></script>
        <script type='text/javascript' src="js/bootstrap.min.js"></script>
        <script type='text/javascript' src="js/tinynav.min.js"></script>
        <script type="text/javascript" src="js/jquery.iosslider.min.js"></script>
        <script type='text/javascript' src="js/jquery.flexslider.js"></script>
        <script type='text/javascript' src="js/jquery.prettyPhoto.js"></script>
        <script type='text/javascript' src="js/superfish.js"></script>
        <script type='text/javascript' src="js/isotope.js"></script> 
        <script type='text/javascript' src="js/jquery.hoverex.min.js"></script>
        <script type="text/javascript" src="js/jquery.tweet.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>   
        <script type="text/javascript" src="js/jcarousel.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>

        <script src="assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
        <link rel="stylesheet" href="assets/plugins/revolutionslider/css/settings.css">

        <!-- JQuery Custom Plugin -->
        <script type='text/javascript' src="js/custom.js"></script>	
        <script type="text/javascript">
            $(window).bind("load", function() {
                $(document).ready(function() {
                    $('#flexslider-loader').fadeOut(800);
                });
            });
        </script>
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){
            window.scrollTo(0,1);
            }
        </script>

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
    </head>
    <body id="page5">
        <div class="main-wrapper">
            <!--==============================header=================================-->
            <?php include 'header.php'; ?>

            <!--==============================content================================-->

            <div id="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="span8">
                            <h1>Inscription Participants</h1>
                        </div>
                        <div class="span4">
                            <div class="pull-right">
                                <ul class="breadcrumb">
                                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                                    <li class="active">Inscription</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="container">
                    <div class="row">




                        <div class="span8">
                            <div class="show-grid row">

                                <form  method="post" action="inscription.php" enctype="multipart/form-data" class="form-inline">
                                    <div class="span8">
                                        <label>Nom :</span</label>
                                        <input name="nom" type="text" id="name" class="span8"/>
                                    </div>
                                    <div class="span8">
                                        <label>Last Name</label>
                                        <input type="text" class="span8" id="lastname" name="prenom">
                                    </div>
                                    <div class="span8">
                                        <label>Email</label>
                                        <input type="text" class="span8" id="email" name="email">
                                    </div>
                                    <div class="span8">
                                        <label>Adresse</label>
                                        <input type="text" class="span8" id="adresse" name="adresse">
                                    </div>
                                    <div class="span8">
                                        <label>Pays</label>
                                        <input type="text" class="span8" id="pays" name="pays">
                                    </div>
                                    <div class="span8">
                                        <label>Nationnalité</label>
                                        <input type="text" class="span8" id="nationalite" name="nationalite">
                                    </div>
                                    <div class="span8">
                                        <label>Phone</label>
                                        <input type="text" class="span8" id="phone" name="tel">
                                    </div>
                                    <div class="span8">
                                        <label>Institution</label>
                                        <input type="text" class="span8" id="institu" name="institution">
                                    </div>
                                    <div class="span8">
                                        <label>Laboratoire</label>
                                        <input type="text" class="span8" id="labo" name="laboratoire">
                                    </div>
                                    <div class="span8">
                                        <label>Equipe de travail</label>
                                        <input type="text" class="span8" id="equip" name="equip">
                                    </div>
                                    <div class="span8">
                                        <label>Mode de payement</label>
                                        <input type="text" class="span8" id="pay" name="pay">
                                    </div>
                                    <div class="span8">
                                        <label>Type de participation</label>
                                        <input type="text" class="span8" id="type" name="type">
                                    </div>

                                    <div class="span12">
                                        <input type="submit" value="Submit" class="btn send-btn">
                                    </div>
                                </form>
                            </div>                        
                        </div>





                        <br>
                        <div class="clear-fix"></div>
                        <div class="span12">
                            <div class="divider1">&nbsp;</div>
                        </div>
                    </div>
					<a href="inscriptionFB.php" > FB </a>
                </div>
				
                <!--==============================footer=================================-->
                <?php include 'footer.php'; ?>
            </div>
            <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>
