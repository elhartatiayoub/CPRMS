
<div class="centered">
	  <h1><a href="revision.php" class="logo">Panel de soumission</a></h1>

      <nav>
        <ul>
            <li id="login">
                <span id="login-trigger">
                 <span id="login-triggers">
 					<span id="user-panel-check"></span>
  					<span id="user-panel-title">Mon Compte</span>
                  </span>
                </span>
                <div id="login-content">
                  <ul>
                  <li><a href="./profil.php"><img src="images/setting.png" alt=""> <span>Profil</span></a></li>
                  <li><a href="./logout.php"><img src="images/logout.png" alt=""><span>Log Out</span></a></li>
                  </ul>
               </div>
            </li>
        </ul>
      </nav>

      <div class="account-name"><p><span class="welcome">Bienvenue,</span> <strong><?php echo $user->getNom(); echo(" ") ;echo $user->getPrenom(); ?></strong></p><div class="account-separator"></div></div>
      <!-- Navigation end-->

       </div>