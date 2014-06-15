<div class="sidebar">
<span class="categories">Mon Espace</span>
<ul class="menu">
<li
<?php
	if($expand==1) echo "class='expand'";
?>
>
<a href="#"><span class="four-prong icon">Mes Revisions</span><span class="num">2</span></a>
<ul class="acitem">
	<li><a href="revision.php"><span class="grids icon">Listes de mes revisions</span></a></li>
	<li><a href="note.php"><span class="grids icon">Notez une revision</span></a></li>
</ul>
</li>
<li
<?php
if($expand==2) echo "class='expand'";
?>
>
<a href="#"><span class="four-prong icon">Mon Profil</span><span class="num">2</span></a>
<ul class="acitem">
<li><a href="password.php"><span class="grids icon">Modifier le mot de passe</span></a></li>
<li><a href="profil.php"><span class="grids icon">Modifier les informations</span></a></li>
</ul>
</li>
</ul>
</div>