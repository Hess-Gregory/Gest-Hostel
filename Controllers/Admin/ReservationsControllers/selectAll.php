<?php 
require_once("Models/Hostel.php");

try
{
	$table = "<table class='tableAdmin'>";
	$table .= "<tr><th></th><th>id</th><th>Réservations</th><th>Autre</th><th></th></tr>";
	$reservations = $con->getAll();
	foreach ($reservations as $reservation) {
		$table .=  '<tr><td><a class="btn-update" href="index.php?section=update&reservation=' . $reservation["reservationId"].'">&#9998;</a></td>';
		$table .= '<td class="tdTableAdmin">' . $reservation['reservationId'] . '</td>';
		$table .= '<td class="tdTableAdmin">' . $reservation['reservationName'] . '</td>';
		$table .= '<td class="tdTableAdmin">' . $reservation['reservationStars'] . '</td>';
		$table .= '<td class="tdTableAdmin">' .$reservation["add_postCode"] . '</td>';
		$table .= '<td class="tdTableAdmin">' .$reservation["add_streetName"] . '</td>';
		$table .= '<td class="tdTableAdmin">' .$reservation["add_number"] . '</td>';
		$table .= '<td class="tdTableAdmin">' .$reservation["add_country"] . '</td>';
		$table .= '<td class="tdTableAdmin"><a class="btn-delete" href="index.php?section=delete&reservation=' . $reservation["reservationId"].'">&#128465;</a></td></tr>';
	}
	$table.="</table>";

	require_once("Views/Admin/ReservationViews/selectAll.php");

}
catch(PDOException $e)
{
	echo $e->getMessage();
}


?>