<?php 
require_once("Models/Room.php");


try
{
	$table = "<table class='tableAdmin'>";
	$table .= "<tr><th>id</th><th>Nom de la chambre</th><th>Description</th><th>Type de chambre</th><th>Hôtel</th></tr>";
	$rooms = $con->getAll();
	foreach ($rooms as $room) {
	
		$table .= '<tr><td class="tdTableAdmin">' . $room['roomId'] . '</td>';
		$table .= '<td class="tdTableAdmin">' . $room['roomName'] . '</td>';
		$table .= '<td class="tdTableAdmin" id="selectAllDescriptionArea">' . $room['shortDescription'] . '</td>';
		$table .= '<td class="tdTableAdmin">' .$con->getRoomType($room['roomTypeId'])["roomTypeName"] . '</td>';
		$table .= '<td class="tdTableAdmin">' .$con->getHostel($room['hostelId'])["hostelName"] . '</td>';
		$table .= '<td class="tdTableAdmin"><a class="btn-update" href="index.php?section=updateroom&room=' . $room["roomId"].'"><button>Modifier</button></a></td>';
		$table .= '<td class="tdTableAdmin"><a class="btn-delete" href="index.php?section=delete&room=' . $room["hostelId"].'"><button>&#128465;</button></a></td></tr>';
	}
	$table.="</table>";

	require_once("Views/Admin/RoomsViews/selectAll.php");

}
catch(PDOException $e)
{
	echo $e->getMessage();
}


?>