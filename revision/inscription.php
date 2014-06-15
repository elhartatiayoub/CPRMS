<?php
session_start();
if(!isset($_SESSION["COMITE"]))
{
	header("location:index.php");
}
	@$submit=$_POST["send"];
	@$nom=$_POST["nom"];
	@$prenom=$_POST["prenom"];
	@$email=$_POST["email"];
	@$adresse=$_POST["adresse"];
	@$tel=$_POST["tel"];
	@$pays=$_POST["pays"];
	@$nationalite=$_POST["nationalite"];
	@$laboratoire=$_POST["laboratoire"];
	@$equipe=$_POST["equipeTravaille"];
	@$pass=$_POST["pass"];


if(isset($submit)){
	try{
			$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
		//
		$req=$pdo->prepare("INSERT INTO auteurprincipal VALUES(null,'".$nom."','"
			.$prenom."','".$email."','".$adresse."','".$tel."','".$pays.
			"','".$nationalite."','".$laboratoire."','".$equipe."','".$pass."');");
			echo 'walo hna';
			$req->execute();
			header("location:index.php");
		}

	catch(PDOException $e){
		echo $e->getMessage();
	}
}

?>
