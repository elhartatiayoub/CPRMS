<?php require 'donnee_en.php'; ?>
<?php 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=cfp", "root", "");
        //
        $req = $pdo->prepare("SELECT * FROM `soumission` WHERE 1;");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
        $articles = $req->fetchAll();
       
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $titre1 . " " . $titre2 ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link rel="stylesheet" href="css/base.css" />
        <link rel="stylesheet" href="css/base.css" />
        <link rel="stylesheet" class="alt" href="css/theme-blue.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>

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
        <script type="text/javascript" src="js/jquery.validate.js"></script> <script>
            
            $(window).bind("load", function() {
                $(document).ready(function() {
                    $('#flexslider-loader').fadeOut(800);
                });
            });
        </script>
        <script type='text/javascript' src="js/custom.js"></script>	
    <script type="text/javascript">
		$(window).bind("load", function() {
			$(document).ready(function() {
				$('#flexslider-loader').fadeOut(800);
				$('.flexslider').flexslider({
					animation: "slide",
					controlNav: true,
					smoothHeight: true,
					directionNav: true,
					slideshowSpeed: 5000,          
					animationDuration: 5000,
					nextText:"&rsaquo;",
					prevText:"&lsaquo;",
					keyboardNav: true,
					easing: 'easeInOutBack',
					useCSS: false	
				});
			});	
		});
	</script> 
        

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->    

</head>
<body id="page2">
	<div class="main-wraper">
        <!--==============================header=================================-->
       <?php        include 'header.php'?>; 
        <!--==============================content================================-->
        <div id="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <h1>Call For Paper</h1>
                        <small>ne perdez plus vos articles </small>
                    </div>
                    <div class="span4">
                        <div class="pull-right">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a> <span class="divider">/</span></li>
                                <li class="active">CFP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    	
        </div>
                <div class="container">    
                    <div class="span12">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <div class="gallery-small">                        	
                                <div class="gallery-outer">
                                    <div class="he-wrap">
                                        <a href="#"><img alt="" src="images/3.jpg" class="max-image"></a>
                                        <div class="he-view">
                                            <div data-animate="fadeIn" class="bg a0">
                                                <div class="center-bar">
                                                    <a data-animate="rotateIn" rel="prettyPhoto[portfolio]" class="a0" href="images/3.jpg"><i class="icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                        
                        <div class="blog-head">
                            <h1><?php echo $descriptiontitre?></h1>
                                ksdksnlwdxkn,l
                                
                        </div>
                       	<div class="port-like">
                            <i class="icon-heart"></i> 105 Likes <i class="icon-tag"></i>  75 Tags
                        </div>
                        <br>
                        <p><?php echo $descriptioncfp?></p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                    
                    
                        <div class="clearfix"></div>
                        <br>
                        <br>
                    </div>

    </div>

        <!--==============================footer=================================-->
        <?php        include 'footer.php '?>;
    
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
