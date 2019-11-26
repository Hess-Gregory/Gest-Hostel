<?php 
require_once("../../../Models/Hostel.php");
$_SESSION["hostelId"] = $_GET["hostel"];

if(isset($_POST["choice"])){
	if($_POST["choice"] === "yes"){
		try
		{
			
			$con->deleteOne();		
			
			header("Location:index.php?section=ReservationSelectAll");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	else {

		header("Location:index.php?section=ReservationSelectAll");
	}
}
$p = "";
$reservations = $con->getOne($_SESSION["reservationId"]);
foreach ($reservations as $reservation) {
	$p = $hostel["reservationId"];	
}
require_once("Views/Admin/ReservartionsViews/delete.php");
 ?>