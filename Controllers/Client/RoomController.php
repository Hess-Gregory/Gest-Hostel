<?php 

require_once('Models/Room.php');

//Rajout de commentaire
if(isset($_POST["comment"], $_POST["stars"],$_SESSION["login"],$_GET["roomId"])){
    $comment = $_POST["comment"];
    $stars = $_POST["stars"];
    $isApproved = 0;
    $room->insertReview($stars,$comment,$isApproved,$_SESSION["login"],$_GET["roomId"]);
}

//Affichage de base
if(isset($_GET["roomId"])){
    $id = $_GET["roomId"];
    $roomObj = $room->get($id);
    if($roomObj){
        $roomName = $roomObj["roomName"];
        $descriptionShort = $roomObj["shortDescription"];
        $description = $roomObj["longDescription"];
        $children = $roomObj["childrenCapacity"];
        $adults = $roomObj["adultCapacity"];
        $bathrooms = $roomObj["bathroomQuantity"];
        $toilets = $roomObj["toiletQuantity"];
        $balcony = $roomObj["balcony"];
        $roomType = strtoupper($room->getType($roomObj["roomTypeId"])["roomTypeName"]);
        $picturePath = $room->getPicture($id);
        if(!$picturePath){
            $picturePath = "https://image.shutterstock.com/z/stock-vector-unavailable-red-rubber-stamp-vector-isolated-1433120663.jpg";
        }
        $hostelObj = $room->getHostel($roomObj["hostelId"]);
        $hostel = $hostelObj["hostelName"];
        $hostelRue = $hostelObj["add_streetName"];
        $hostelPostCode = $hostelObj["add_postCode"];
        $hostelCountry = $hostelObj["add_country"];
        $hostelNumber = $hostelObj["add_number"];
        $hostelStars =  round($hostelObj["hostelStars"],1);
        $hostelLat = $hostelObj["coo_lat"];
        $hostelLong = $hostelObj["coo_long"];
        /*
        //recherche des dates de season pour trouver le prix
        $seasons = $room->getSeasons();
        $date = date("m/d",time());
        $seasonId = 0;
        for($i = 0; $i < count($seasons); $i++){
            //change le format jour/mois en mois/jour
            $start = explode("/",$seasons[$i]["startDate"])[1] . "/" . explode("/",$seasons[$i]["startDate"])[0];
            $end = explode("/",$seasons[$i]["endDate"])[1] . "/" . explode("/",$seasons[$i]["endDate"])[0];
            //trouve la season correspondante
            if(check_in_range($start,$end,$date)){
                $seasonId = $seasons[$i]["seasonId"];
            }
            }
            */

        //$price = $room->getPrice($roomObj["roomTypeId"],SEASON);
        $review = $room->getReview($id);
        $reviewData = "";
        $reviewStars = 0;
        for($i = 0; $i < count($review); $i++){
            $reviewData .= "<p>". ($i+1) . ". " . $review[$i]["comment"] . " " . $review[$i]["reviewStars"] ."/5 </p>";
            $reviewStars += $review[$i]["reviewStars"];
        }
        $reviewStars = round(($reviewStars / count($review)),1);
        $canReview = false;
        //Recherche l'utilisateur qui a deja reservé cette chambre
        if(isset($_SESSION["login"])){
            $userId = $_SESSION["login"];
            $res = $room->getUserReservation($userId,$id);
            if($res){
                //utilisateur a déjà reversé cette chambre, il peut donne un avis
                //verifier qu'il n'a pas deja donné son avis
                $result = $room->getUserReview($userId,$id);
                if(!$result){
                    $canReview = true;
                }
            }
        }

        require_once("Views/Room/room.php");
    }
    else{
        echo "<h2>Erreur:</h2><p>La chambre n'existe pas.</p>";
    }
}
else{
    echo "<h2>Erreur:</h2><p>La chambre n'existe pas.</p>";
}

function check_in_range($start_date, $end_date, $date_from_user)
{
  $start_ts = strtotime($start_date);
  $end_ts = strtotime($end_date);
  $user_ts = strtotime($date_from_user);

  return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
}
?>