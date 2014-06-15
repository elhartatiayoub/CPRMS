<?php ?>
<div class='centered'>
<!-- Logo -->
<h1><a href='/dashboard.html' class='logo'>CPRMS Admin Panel</a></h1>
<!-- Logo end -->

<!-- Navigation -->
<nav>
<ul>
<li id='login'>
<span id='login-trigger'>
<span id='login-triggers'>
<span id='user-panel-check'></span>
<span id='user-panel-title'>Mon compte</span>
</span>
</span>
		<div id='login-content'>
		<ul>
		<li><a href='#'><img src='images/setting.png' alt=''> <span>Settings</span></a></li>
		<li><a href='#'><img src='images/help.png' alt=''><span>Help</span></a></li>
		<li><a href='/index.html'><img src='images/logout.png' alt=''><span>Log Out</span></a></li>
		</ul>
		</div>
            </li>
            </ul>
            </nav>

            <div class='account-name'><p><span class='welcome'>Bienvenu,</span> <strong><?php echo $admin->getNom(); ?></strong></p><div class='account-separator'></div></div>
            
            		<!-- Navigation end-->
   
            				</div>
