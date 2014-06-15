<?php
session_start();
if(!isset($_SESSION["admin"]))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CPRMS Panel | Dashboard</title>
	<meta name="description" content="">
    
    <link rel="shortcut icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fancybox.css" media="screen"  />
    <link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" media="screen"  />
    <link rel="stylesheet" href="css/fullcalendar.css" media="screen"  />
    <link rel="stylesheet" href="lib/elfinder/css/elfinder.css" media="screen" />
    <link rel="stylesheet" href="lib/editor/jquery.wysiwyg.css" media="screen" />
    <link rel="stylesheet" href="lib/editor/default.css" media="screen" />
    <link rel="stylesheet" href="lib/player/css/style.css">
    <link rel="stylesheet" href="css/tipTip.css" media="screen" />
    <link rel="stylesheet" href="css/chosen.css" media="screen"  />
    <link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" href="css/tables.css" media="screen"  />
    <link rel="stylesheet" href="css/jquery.jgrowl.css" media="screen"  />
    
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="lib/jquery-ui-1.8.16.custom.min.js"></script>
    
    <script type="text/javascript" src="lib/ddaccordion.js"></script>
	<script type="text/javascript" src="lib/jquery.flot.min.js"></script>
    <script type="text/javascript" src="lib/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="lib/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="lib/fancybox/fancybox.js"></script>
    <script type="text/javascript" src="lib/fullcalendar.min.js"></script>
    <script src="lib/elfinder/js/elfinder.min.js" charset="utf-8"></script>
    <script src="lib/editor/jquery.wysiwyg.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.image.js" charset="utf-8"></script>
	<script src="lib/editor/default.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.link.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.table.js" charset="utf-8"></script>
    <script type="text/javascript" src="lib/player/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="lib/player/ttw-video-player-min.js"></script>
    <script src="lib/jquery.tipTip.minified.js"></script>
    <script src="lib/forms.js"></script>
    <script src="lib/chosen.jquery.min.js"></script>
    <script src="lib/autoresize.jquery.min.js"></script>
    <script type="text/javascript" src="lib/colorpicker.js"></script>
	<script type="text/javascript" src="lib/validation.js"></script>
    <script src="lib/jquery.dataTables.min.js"></script>
    <script src="lib/jquery.jgrowl_minimized.js"></script>
    <script src="lib/slidernav-min.js"></script>
    <script src="lib/jquery.alerts.js" type="text/javascript"></script>
    <script src="lib/formToWizard.js"></script><script>$(document).ready(function(){ $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' }) });</script>
    
    
    <script type="text/javascript" src="lib/functions.js"></script>
    
</head>
<body>

 <header>
	  <div class="centered">
      <!-- Logo -->
	  <h1><a href="/dashboard.html" class="logo">CPRMS Admin Panel</a></h1>
      <!-- Logo end -->
      
      <!-- Navigation -->
      <nav>             
        <ul>
            <li id="login">
                <span id="login-trigger">
                 <span id="login-triggers">
 					<span id="user-panel-check"></span>
  					<span id="user-panel-title">Mon compte</span>
                  </span>
                </span>
                <div id="login-content">
                  <ul>
                  <li><a href="#"><img src="images/setting.png" alt=""> <span>Settings</span></a></li>
                  <li><a href="#"><img src="images/help.png" alt=""><span>Help</span></a></li>
                  <li><a href="/index.html"><img src="images/logout.png" alt=""><span>Log Out</span></a></li>
                  </ul>
               </div>                     
            </li> 
        </ul>
      </nav>  
      
      <div class="account-name"><p><span class="welcome">Bienvenu,</span> <strong>Nezhari Meryem</strong></p><div class="account-separator"></div></div>
        <div class="account-name"><p>Language:</p>
       	<ul class="language">
        	<li><a href="#" class="ukraine">ukraine</a></li>
            <li class="language-active"><a href="#" class="usa">usa</a></li>
            <li><a href="#" class="europe">europe</a></li>
        </ul>
        <div class="account-separator"></div></div>
      <!-- Navigation end-->
     
       </div>
 </header>
 
  <!-- Content-->
  <section id="content" >
  <div class="centered">  

  
  <div class="main">
  		
          
        <div class="speedbar">
        <div class="speedbar-nav"> <a href="#">Panneau d'administration | CPRMS</a> &rsaquo; <a href="#">Dashboard</a></div> 
         
           <div class="search">
             <form>
              <input type="text">
             </form>   
           </div>

        </div>

        
           

   </div><!-- END MAIN-->
   
   <!-- SIDEBAR -->
   <?php $expand=1;include 'sidebar.php';?>

 	<!-- SIDEBAR -->
    
    <div class="clear"></div>
    </div>
    
  </section>
  <!-- Content end-->
  
  
  <footer>
     <div class="info-footer">
         <div id="left"><p>Copyright &copy; 2013  ENSA Marrakech.</p></div>
     </div>
  </footer>
</body>
</html>