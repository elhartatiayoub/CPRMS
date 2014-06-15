<?php

try {
	$id=$_GET["id"];
	$type=$_GET["type"];
	$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
	$req=$pdo->prepare("delete from  `theme_soumission` where `SoumissionId`=".$id." ;");
	$req->execute();
	$req=$pdo->prepare("delete from  `soumission_soustheme` where  `SoumissionId`=".$id." ;");
	$req->execute();
	$req=$pdo->prepare("delete from  `motcle_soumission` where `SoumissionId`=".$id." ;");
	$req->execute();
	$req=$pdo->prepare("delete from  `auteursecondaire_soumission` where `SoumissionId`=".$id." ;");
	$req->execute();
	$req=$pdo->prepare("delete from  `soumission` where Id=".$id." ;");
	$req->execute();
	echo $id;
	header("location:auteur.php");
} catch (Exception $e) {
	echo "erreur";
}
?>