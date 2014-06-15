<?php

	$article=$_POST["article"];
	$membre=$_POST["membre"];

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=cfp","root","");
		$req=$pdo->prepare("insert into revision values('','','','','','','','','','','','','','','','','".$article."','".$membre."');");
		$req->execute();
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


	header("location:affectation.php");
?>