<?php 
require_once('Models/Room_type.php');
require_once('Models/Hostel.php');
try {
	$getRoomType = $room_type->getAll();
	$result='';
	foreach($getRoomType as $roomType){
		$result .= '<option value="'.$roomType['roomTypeName'].'">'.$roomType['roomTypeName'].'</option>' ;
	}	
	$getHostel = $hostel->getAll();
	$country='';
	foreach($getHostel as $hostel){
		$country .= '<option value="'.$hostel['add_country'].'">'.$hostel['add_country'].'</option>' ;
	}

} 
catch (Exception $e) {
	
}

require_once("Views/Home/home.php");

 ?>
 