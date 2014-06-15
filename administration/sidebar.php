<?php
?>

		<div class="sidebar">
   <span class="categories">Categories</span>
   <ul class="menu">
		<li <?php  
		if ($expand==1)
		{echo "class='expand'";}?>>
			<a href="#"><span class="four-prong icon">Site Web</span><span class="num">2</span></a>
			<ul class="acitem">
				<li><a href="./site-fr.php"><span class="dashboard icon">Francais</span></a></li>
				<li><a href="./site-en.php"><span class="dashboard icon">Anglais</span></a></li>
			</ul>
		</li>
			
		<li <?php  
		if ($expand==2)
		{echo "class='expand'";}?>
		>
		<a href="#"><span class="four-prong icon">Soumissions</span><span class="num">3</span></a>
			<ul class="acitem">
            	<li><a href="articles.php"><span class="grids icon">Gerer les articles</span></a></li>
       			<li><a href="affectation.php"><span class="grids icon">Affectez les articles</span></a></li>
                <li><a href="auteur.php"><span class="grids icon">Gerer les auteurs</span></a></li>
			</ul>
		</li>
		<li <?php  
		if ($expand==3)
		{echo "class='expand'";}?>

		>
		<a href="#"><span class="four-prong icon">Revisions</span><span class="num">2</span></a>
			<ul class="acitem">
                <li><a href="ajoutmembre.php"><span class="invoice icon">Ajouter un membre de comite</span></a></li>
                <li><a href="comite.php"><span class="invoice icon">Le comite Scientifique</span></a></li>
			</ul>
		</li>
		<li <?php  
		if ($expand==4)
		{echo "class='expand'";}?>

		>
		<a href="#"><span class="four-prong icon">Participations</span><span class="num">3</span></a>
			<ul class="acitem">
                <li><a href="participant.php"><span class="w-editor icon">Afficher les participants</span></a></li>
                <li><a href="ajouthotel.php"><span class="w-editor icon">Ajouter un hotel</span></a></li>
                <li><a href="hotel.php"><span class="w-editor icon">Afficher listes des hotels</span></a></li>
			</ul>
		</li>
		<li <?php  
		if ($expand==5)
		{echo "class='expand'";}?>
		>
		<a href="#"><span class="four-prong icon">Mon profil</span><span class="num">1</span></a>
			<ul class="acitem">
                <li><a href="pass.php"><span class="errors icon">Modifier le mot de passe</span></a></li>
			</ul>
		</li>
		
		</ul>

		</div>
