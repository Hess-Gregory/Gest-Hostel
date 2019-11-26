<?php 
session_start();
require_once("Views/Pages/header.php");
require_once("Controllers/navigation.php");
if(isset($_GET["section"])){
	switch ($_GET["section"]) {
		case 'admin':
			require_once("Controllers/Admin/Admin.php");
			break;
		case 'accueil': 
			require_once("Controllers/Client/HomeController.php");
			break;
		case 'forum':
			require_once("Controllers/Client/ForumController.php");
			break;
		case 'faq':
			require_once("Controllers/Client/FaqController.php");
			break;
		case 'contact':
			require_once("Controllers/Client/ContactController.php");
			break;
		case 'login':
			require_once("Controllers/Client/LoginController.php");
			break;
		case 'profil':
			require_once("Controllers/Client/UserProfileController.php");
			break;
		case 'historique':
			require_once("Controllers/Client/HistoricUserController.php");
			break;
		case 'deconnexion':
			require_once("Controllers/Client/LogoutController.php");
			break;
		case "room": 
			require_once("Controllers/Client/RoomController.php");
			break;
		case 'delete':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/HostelsControllers/delete.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case 'updateroom':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/RoomsControllers/update.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case 'addroom':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/RoomsControllers/add.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case 'updatehostel':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/HostelsControllers/update.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case'hostelsselectall':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/HostelsControllers/selectall.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case'reviewsselectall':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/ReviewsControllers/selectall.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case'roomsselectall':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/RoomsControllers/selectall.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case 'addhostel':
			if($_SESSION["roleId"] == 2){
				require_once("Controllers/Admin/HostelsControllers/add.php");
			}
			else{
				require_once("Controllers/Client/ErrorController.php");
			}
			break;
		case "subject":
			require_once("Controllers/Client/SubjectController.php");
			break;
		case "messages":
			require_once("Controllers/Client/MessageController.php");
			break;
	}
}
else {
	require_once("Controllers/Client/HomeController.php");
}


require_once("Views/Pages/footer.php");


?>
