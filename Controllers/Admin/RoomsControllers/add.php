<?php 
require_once("Models/Room.php");
$error = "";
$hostelsOptions="";


$allHostels = $con->getHostels();
foreach ($allHostels as $eachHostel) {
	$hostelsOptions.= "<option value=". $con->getHostel($eachHostel['hostelId'])['hostelId'] .">". $con->getHostel($eachHostel['hostelId'])['hostelName'] . "</option>";

}
$roomTypes = $con->getRoomTypes();
$roomResult = "";
foreach ($roomTypes as $eachRoomType) {
	$roomResult.= "<option value=". $eachRoomType["roomTypeId"] .">". $eachRoomType["roomTypeName"] . "</option>";
}

$roomOptions = $con->getOptions();
$optionResult="";
foreach ($roomOptions as $eachOption) {
	$optionResult.= "<input type='checkbox' name=". $eachOption["optionName"] . "value=". $eachOption["optionName"]. "><label>".$eachOption["optionName"]."</label><br>";

}


if(isset($_POST["roomName"], 
	$_POST["shortDescription"], 
	$_POST["longDescription"],
	$_POST["bathroomQuantity"],
	$_POST["toiletQuantity"],
	$_POST["balcony"],
	$_POST["children"],
	$_POST["adults"]))
{
	if(trim($_POST["roomName"]) != "" &&
		trim($_POST["shortDescription"]) != "" && 
		trim($_POST["longDescription"]) != "" &&
		is_numeric($_POST["bathroomQuantity"]) &&
		is_numeric($_POST["toiletQuantity"]) && 
		is_numeric($_POST["balcony"]) && 
		is_numeric($_POST["children"]) &&
		is_numeric($_POST["adults"])
	)
	{
// (trim($_POST["nom"]) != "" && trim($_POST["prenom"])){		
		try
		{
			$rooms = $con->addOne($_POST["roomName"], 
				$_POST["shortDescription"],
				$_POST["longDescription"],
				$_POST["children"],
				$_POST["adults"],
				$_POST["bathroomQuantity"],
				$_POST["toiletQuantity"],
				$_POST["balcony"],
				0,
				$_POST["roomType"],
				$_POST["hotelSelect"]);



			/*$users = $con->addUser($_POST["nom"], $_POST["prenom"]);*/		
			// header("Location:index.php?section=RoomsSelectAll");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}

else {
	$error = "<p style=color:red;>Veuillez remplir correctement les champs</p>";
}


require_once("Views/Admin/RoomsViews/add.php");

?>