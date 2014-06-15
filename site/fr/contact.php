<?php require 'donnee_fr.php';
if(isset($_POST["envoyer"])){

$ToEmail = 'iob.hartt@gmail.com'; 

$EmailSubject = 'contact form'; 

$mailheader = "From: ".$_POST["email"]."\r\n"; 



$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$MESSAGE_BODY = "Name: ".$_POST["name"]."<br />"; 

$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br />"; 

$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"])."<br />"; 

mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8" />
	<title>Contact</title>
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
        <?php        include 'header.php';?>

        <!--==============================content================================-->
         <div id="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <h1>Contactez nous</h1>
                       
                    </div>
                    <div class="span4">
                        <div class="pull-right">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a> <span class="divider">/</span></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    	
        </div>
        
        <div class="container">
            <div class="row">
                <div class="span12">&nbsp;</div>
                
                <div class="span12">
                    <div class="port-outer">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108703.09881241425!2d-8.007853099999998!3d31.634621449999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakesh!5e0!3m2!1sen!2s!4v1402246105653" width="100%" scrolling="no" height="310" frameborder="0" style="border:0" marginwidth="0" marginheight="0" class="map"></iframe>
                        
                    </div>
                </div>
                <div class="span12">
                    <div class="divider1"></div>
                </div>
                
                <div class="span8">
                    <h3>Get In Touch</h3>
                    <div class="show-grid row">
                        <div class="span8">
                            <div id="sucessmessage"> envoyer avec succes </div>
                        </div>
                        <form id="contact_form" method="post" action="contact.php" >
                            <div class="span4">
                                <label>Name</label>
                                <input type="text" class="span4" id="name" name="name">
                            </div>
                            <div class="span4">
                                <label>Last Name</label>
                                <input type="text" class="span4" id="lastname" name="lastname">
                            </div>
                            <div class="span4">
                                <label>Email</label>
                                <input type="text" class="span4" id="email" name="email">
                            </div>
                            <div class="span4">
                                <label>Phone</label>
                                <input type="text" class="span4" id="phone" name="phone">
                            </div>
                            <div class="span12">
                                <label>Message</label>
                                <textarea class="span8" id="comment" name="comment"></textarea>
                            </div>
                            <div class="span12">
                                <input type="submit" value="Submit" class="btn send-btn" name="envoyer">
                            </div>
                        </form>
                        </div>                        
                </div>
                
                <div class="span4">
                    <h3>Office Address</h3>
                    <div class="office-info">
                        <div class="icon-wrap-foot">
                            <i class="icon-map-marker"></i>
                        </div>
                        <div class="office-txt">
                            <strong>Address</strong><br>
                            adresse1 
                        </div>
                    </div>
                            
                    <div class="office-info">
                        <div class="icon-wrap-foot">
                            <i class="icon-envelope-alt"></i>
                        </div>
                        <strong>Email</strong><br>
                        <a href="#">contact@conferance.com</a>
                    </div>
                            
                    <div class="office-info">
                        <div class="icon-wrap-foot">
                            <i class="icon-mobile-phone"></i>
                        </div>
                        <div class="office-txt">
                            <strong>Phone</strong><br>
                            +68 323 658
                        </div>
                    </div>                           
                </div>    
                <div class="span12">
                    <div class="divider1">&nbsp;</div>
                </div>
            </div>
        </div>

        <!--==============================footer=================================-->
        <?php        include 'footer.php';?>
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
