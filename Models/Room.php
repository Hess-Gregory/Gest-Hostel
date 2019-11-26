<?php 
require_once("Connection.php");
class Room extends Connection{

	public function getAll(){
		$pdo = $this->dbConnection();
		$request = "SELECT * FROM room ORDER BY hostelId";
		$objects = $pdo->query($request);
		return $objects->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getRoom($roomId){
		$pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM room WHERE roomId=?");
		$stmt->execute([$roomId]); 
		return $review = $stmt->fetch();
	}

	public function getHostels(){
		$pdo = $this->dbConnection();
		$stmt = $pdo -> prepare("SELECT * FROM hostel ORDER BY hostelId");
		$stmt->execute([]);
		return $review = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getHostel($hostelId){
		$pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM hostel WHERE hostelId=?");
		$stmt->execute([$hostelId]); 
		return $review = $stmt->fetch();
	}

	public function getRoomType($roomTypeId){
		$pdo = $this->dbConnection();
		$request = "SELECT * FROM room_type WHERE roomTypeId = ?";	
		$stmt = $pdo->prepare($request);
		$stmt->execute([$roomTypeId]);
		return $review = $stmt->fetch();
	}

	public function getRoomTypes(){
		$pdo = $this->dbConnection();
		$stmt = $pdo -> prepare("SELECT * FROM room_type ORDER BY roomTypeId");
		$stmt->execute([]);
		return $review = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getOptions(){
		$pdo = $this->dbConnection();
		$stmt = $pdo -> prepare("SELECT * FROM `option` ORDER BY optionId");
		$stmt->execute([]);
		return $review = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function addOne($roomName,$shortDescription,$longDescription,$childrenCapacity,$adultCapacity,$bathroomQuantity,$toiletQuantity,$balcony,$isDeleted,$roomTypeId,$hostelId){
		$pdo = $this->dbConnection();
		$request = "INSERT INTO room(roomName,shortDescription,longDescription,childrenCapacity,adultCapacity,bathroomQuantity,
		toiletQuantity,balcony,isDeleted,roomTypeId, hostelId) VALUES (:roomName,:shortDescription,:longDescription,:childrenCapacity,:adultCapacity,:bathroomQuantity,
		:toiletQuantity,:balcony,:isDeleted,:roomTypeId,:hostelId)";

		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'roomName'=> $roomName,
			'shortDescription'=>$shortDescription,
			'longDescription'=>$longDescription,
			'childrenCapacity'=>$childrenCapacity,
			'adultCapacity'=>$adultCapacity,
			'bathroomQuantity'=>$bathroomQuantity,
			'toiletQuantity'=>$toiletQuantity,
			'balcony'=>$balcony,
			'isDeleted'=>$isDeleted,
			'roomTypeId'=>$roomTypeId,
			'hostelId' => $hostelId
		));
	}

	public function updateOne($roomName,$shortDescription,$longDescription,$childrenCapacity,$adultCapacity,$bathroomQuantity,$toiletQuantity,$balcony,$isDeleted){
		$pdo = $this->dbConnection();
		$request = "UPDATE room SET roomName = :roomName,  shortDescription = :shortDescription, childrenCapacity= :childrenCapacity, adultCapacity= :adultCapacity,bathroomQuantity =:bathroomQuantity , toiletQuantity= :toiletQuantity, balcony= :balcony, isDeleted = :isDeleted";

		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'roomName'=> $roomName,
			'shortDescription'=>$shortDescription,
			'longDescription'=>$longDescription,
			'childrenCapacity'=>$childrenCapacity,
			'adultCapacity'=>$adultCapacity,
			'bathroomQuantity'=>$bathroomQuantity,
			'toiletQuantity'=>$toiletQuantity,
			'balcony'=>$balcony,
			'isDeleted'=>$isDeleted,
		));
	}

	public function deleteOne($isDeleted){
		$pdo = $this->dbConnection();
		//$request = "DELETE FROM hostel WHERE id = :id";
		$request = "UPDATE room SET isDeleted = true WHERE roomId = :roomId";/*cmt vas ton recuperer la variable*/
		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'roomId' => $_SESSION['roomId']
		));
	}


    public function get($roomId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM ROOM WHERE roomId=?");
        $stmt->execute([$roomId]); 
        return $room = $stmt->fetch();
    }

    public function getPicture($roomId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM PICTURE WHERE roomId=?");
        $stmt->execute([$roomId]); 
        $pic = $stmt->fetch();
        return $pic["picturePath"];
    }

    public function getType($roomTypeId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM ROOM_TYPE WHERE roomTypeId=?");
        $stmt->execute([$roomTypeId]); 
        return $type = $stmt->fetch();
    }

    public function getPrice($roomTypeId, $seasonId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM PRICE WHERE roomTypeId=? AND seasonId=?");
        $stmt->execute([$roomTypeId,$seasonId]); 
        $price = $stmt->fetch();
        return $price["value"];
    }

    public function getSeasons(){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM SEASON");
        $stmt->execute(); 
        return $season = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getReview($roomId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM REVIEW WHERE roomId=? & isApproved=1");
        $stmt->execute([$roomId]); 
        return $hostel = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserReservation($userId,$roomId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM RESERVATION WHERE userId=? AND roomId=?");
        $stmt->execute([$userId,$roomId]); 
        return $hostel = $stmt->fetch();
    }

    public function getUserReview($userId,$roomId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM REVIEW WHERE userId=? AND roomId=?");
        $stmt->execute([$userId,$roomId]); 
        return $hostel = $stmt->fetch();
    }

    public function insertReview($reviewStars,$comment,$isApproved,$userId,$roomId){
        $pdo = $this->dbConnection();
        $sql = "INSERT INTO REVIEW (reviewStars, comment, isApproved, userId, roomId) VALUES (?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$reviewStars, $comment, $isApproved, $userId, $roomId]);
        return $stmt->rowCount();
    }
}
$room = new Room();
$con = new Room();
?>
