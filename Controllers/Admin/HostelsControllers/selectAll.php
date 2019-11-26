<?php 
require_once("Models/Hostel.php");

try
{

	$table = "<table id='table'>";
	$table .= "<tr>
	<th>ID</th>
	<th>Nom de l'hotel</th>
	<th>Nombre Etoiles</th>
	<th>Num, Rue</th>
	<th>Code Postal</th>
	<th>Pays</th>
	<th>Modifier/Supprimer</th>
	</tr>";
	$hostels = $con->getAll();
	foreach ($hostels as $hostel) {
		$table .= '<tr class="clickable-row" data-href="http://www.google.be"><td>' . $hostel['hostelId'] . '</td>';
		$table .= '<td>' . $hostel['hostelName'] . '</td>';
		$table .= '<td>' . $hostel['hostelStars'] . '</td>';
		$table .= '<td>' .$hostel["add_number"] . ', ' .$hostel["add_streetName"] . '</td>';
		$table .= '<td>' .$hostel["add_postCode"] . '</td>';
		$table .= '<td>' .$hostel["add_country"] . '</td>';
		$table .= '<td class="td-Textcenter"><a class="btn-update" href="index.php?section=update&hostel=' . $hostel["hostelId"].'">&#9998;</a> <a class="btn-delete" href="index.php?section=delete&hostel=' . $hostel["hostelId"].'">&#128465;</a></td></tr>';
	}
	$table.="</table>";

	require_once("Views/Admin/HostelsViews/selectAll.php");

}
catch(PDOException $e)
{

	echo $e->getMessage();
}


?>


