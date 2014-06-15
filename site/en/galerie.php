<?php require 'donnee_en.php'; ?>
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
    <body id="page4">
        <div class="main-wrapper">
            <!--==============================header=================================-->
            <?php include 'header.php';?>

            <!--==============================content================================-->
            
            <div id="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <h1>Galerie</h1>
                    </div>
                    <div class="span4">
                        <div class="pull-right">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a> <span class="divider">/</span></li>
                                <li class="active">Galerie</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    	
            </div>
            <div class="container">
                <div class="row">
                    <div id="content" class="light small">
                         <?php for ($i = 0; $i < count($photos); $i++) { ?>
                    <div class="span4">
                        <div class="portfolio-iteam shadow-wrapper">
                            <div class="gallery-small">                        	
                                <div class="gallery-outer">
                                    <div class="he-wrap">
                                        <a href="#"><img alt="" src="<?php echo$photos[$i][0] ?>" class="max-image"></a>
                                        <div class="he-view">
                                            <div data-animate="fadeIn" class="bg a0">
                                                <div class="center-bar">
                                                    <a data-animate="elasticInDown" rel="prettyPhoto[portfolio]" class="a0" href="<?php echo$photos[$i][0] ?>"><i class="icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>                                            
                            </div>
                            <div class="port-head">
                                <h3><?php echo $photos[$i][1] ?></h3>
                                
                            </div>
                            </div>
                        </div>
                    
                        <?php } ?>
                        </div>
           
                    </div>
                
                </div>
                        

            <!--==============================footer=================================-->
        <?php include 'footer.php';?>;
        </div>
        <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>
