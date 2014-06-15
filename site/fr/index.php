<?php require 'donnee_fr.php'; ?>
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
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURxLbar(){
            window.scrollTo(0,1);
            }
        </script>

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->    

    </head>
    <body id="page1">
        <div class="main-wrapper">
            <!--==============================header=================================-->
           <?php            include 'header.php'?>;

            
            
            
        <div class="service-wrap">
            <div class="container">
                <div class="row">
                    <div class="span12">
                    	<h2>Articles recents</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="service-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="portfolio-skin-carousel">
                        <div class="jcarousel-container jcarousel-container-horizontal">
                          <div class="jcarousel-clip jcarousel-clip-horizontal">
                            <ul class="portfolio-carousel jcarousel-list jcarousel-list-horizontal">
                                <?php for ($i = 0; $i < count($articles); $i++) { ?>
                                <li class="span4">
                                    <div class="portfolio-iteam">
                                        <div class="gallery-small">                        	
                                            <div class="gallery-outer">
                                                <div class="he-wrap">
                                                    <a href="#"><img alt="" src="images/image_<?php echo ($i+1)%5;?>.jpg" class="max-image"></a>
                                                    <div class="he-view">
                                                        <div data-animate="fadeIn" class="bg a0">
                                                            <div class="center-bar">
                                                                <a data-animate="elasticInDown" rel="prettyPhoto[portfolio]" class="a0" href="images/image_<?php echo ($i+1)%5;?>.jpg"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>                                    
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="port-head">
                                            <h3><?php echo $articles[$i]["article"] ?> <span><?php echo $articles[$i]["type"] ?></span><?php echo $articles[$i]["langue"];?></h3>
                                            <div class="port-like">
                                            	<div class="pull-left"><i class="icon-heart"></i> 105 Likes <i class="icon-tag"></i>  75 views</div>
                                                <div class="pull-right"><a href="#">Read More</a></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                              
                              </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!--==============================footer================================= a refaire   -->
            
       <?php        include 'footer.php'?>;
        </div>
    </body>
</html>
