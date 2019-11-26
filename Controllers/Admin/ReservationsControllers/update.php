<?php
require_once("Models/Hostel.php");

$error = "";

if(isset($_POST["nom"], $_POST["prenom"], $_POST["id"]







)){
	if(trim($_POST["nom"]) != "" && trim($_POST["prenom"]) && trim($_POST["id"] != "")){
		try
		{
			$users = $con->updateUser($_POST["id"],$_POST["nom"], $_POST["prenom"]);	
			
			header("Location:index.php?section=selectAll");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	else {
		$error = "<p style=color:red;>Veuillez remplir correctement les champs</p>";
		header("Location:index.php?section=update&user=2");
	}
}
else if(isset($_GET["user"])){
	
		
		try
		{
			$users = $con->getUser($_GET['user']);
		
			foreach ($users as $user) {
				$nom = $user['nom'];
				$prenom = $user["prenom"];
				$id = $user["id"];		
			}

			
			require_once("view/pages/update.php");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
}
else {
	require_once("view/pages/notfound.php");
}





 ?>