<?php

    if(isset($_POST["go2"])){
	$submit=$_POST["go2"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$email=$_POST["email"];
	$adresse=$_POST["adresse"];
	$tel=$_POST["tel"];
	$pays=$_POST["pays"];
	$nationalite=$_POST["nationalite"];
	$laboratoire=$_POST["laboratoire"];
	$equipe=$_POST["equipeTravail"];
	$institution = $_POST["institution"];
	//$username=$_POST["username"];
	$pass=$_POST["pass"];
	$confPass=$_POST["password_confirm"];
    }

if(isset($submit)){
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
		$sql = "INSERT INTO `auteurprincipal`( `nom`, `prenom`, `email`, `adresse`, `tel`, `pays`, `nationalite`, `laboratoire`, `equipeTravaille`, `pass`, `institution`) VALUES ('".$nom."','".$prenom."','".$email."','".$adresse."','".$tel."','".$pays."','".$nationalite."','".$laboratoire."','".$equipe."','".$pass."','".$institution."');";
		echo $sql;
		$req=$pdo->prepare($sql);
		$req->execute();
			header("location:index.php");
		}

	catch(PDOException $e){
		echo $e->getMessage();
	}
}

?>