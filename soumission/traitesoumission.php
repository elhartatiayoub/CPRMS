<?php
include('../model/AuteurPrincipal.php');
session_start();
if(!isset($_SESSION["USER"]))
{
	header("location:index.php");
}
$user=$_SESSION['USER'];


	$langue=$_POST['langue'];
	$titre=$_POST['titre'];
	$themep=$_POST['themep'];
	$themes=$_POST['themes'];
	$type=$_POST['type'];
	$languep=$_POST['languep'];
	$auteurs=$_POST['auteurs'];
	$nom=new ArrayObject();
	for($i=0;$i<$auteurs;$i++){
		$nom[$i]=$_POST["nom$i"];
	}
	$format=$_POST['format'];
	$fichier=$_POST['fichier'];
	$resume=$_POST['resume'];
	$mots=$_POST['mots'];
	$mailconf=$_POST['mailconf'];
	$send=$_POST['send'];
	if(isset($send)){
		try{
			$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
			//
			$req=$pdo->prepare("INSERT INTO soumission VALUES('null','".$titre."','0','".$format."','".$type."','".$languep."','".$user->getID()."');");
			$req->execute();

			$to  = $mailconf;
			$subject = 'Soumission';
			$message = 'Votre article '.$titre." a été soumit avec succès";
			$headers = 'From: admin@gmail.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
			mail($to, $subject, $message, $headers);


		}
		catch(PDOException $e){
		}
	}
	
	header("location:soumission.php");

?>