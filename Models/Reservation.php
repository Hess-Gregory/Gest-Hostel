<?php
require_once("Connection.php");
class Reservation extends Connection{

	public function getAll(){
		$pdo = $this->dbConnection();
		$request = "SELECT * FROM reservation ORDER BY reservationId";
		$objects = $pdo->query($request);
		return $objects->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getOne($reservationId){
		$pdo = $this->dbConnection();
		$request = "SELECT * FROM reservation WHERE reservationId = :$reservationId";
		
		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'reservationId' => $reservationId
		));
		return $objects->fetchAll(PDO::FETCH_ASSOC);
	}

	public function addOne($startDate,$endDate,$insurance,$isCancelled,$childrenQuantity,$adultQuantity,$totalPrice,$reservationId,$userId){
		$pdo = $this->dbConnection();
		$request = "INSERT INTO reservation VALUES (:startDate,:endDate,:insurance,:isCancelled,:childrenQuantity,:adultQuantity,
		:totalPrice,:reservationId,:userId)";

		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'startDate'=> $startDate,
			'endDate'=>$endDate,
			'insurance'=>$insurance,
			'isCancelled'=>$isCancelled,
			'childrenQuantity'=>$childrenQuantity,
			'adultQuantity'=>$adultQuantity,
			'totalPrice'=>$totalPrice,
			'reservationId'=>$reservationId,
			'userId'=>$userId,
			


		));
	}

	public function updateOne($startDate,$endDate,$insurance,$isCancelled,$childrenQuantity,$adultQuantity,$totalPrice,$reservationId,$userId){
		$pdo = $this->dbConnection();
		$request = "UPDATE reservation SET startDate = :startDate,  endDate = :endDate, insurance= :insurance, isCancelled= :isCancelled,childrenQuantity =:childrenQuantity , adultQuantity= :adultQuantity, totalPrice= :totalPrice, reservationId = :reservationId, userId=:userId";

		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'startDate'=> $startDate,
			'endDate'=>$endDate,
			'insurance'=>$insurance,
			'isCancelled'=>$isCancelled,
			'childrenQuantity'=>$childrenQuantity,
			'adultQuantity'=>$adultQuantity,
			'totalPrice'=>$totalPrice,
			'reservationId'=>$reservationId,
			'userId'=>$userId,
		));
	}

	public function deleteOne($isDeleted){
		$pdo = $this->dbConnection();
			//$request = "DELETE FROM hostel WHERE id = :id";
		$request = "UPDATE reservation SET isDeleted = true WHERE reservationId = :reservationId";/*cmt vas ton recuperer la variable*/
		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'reservationId' => $_SESSION['reservationId']
		));
	}

	public function getByIdUser($idUser){
		$pdo = $this->dbConnection();
		$stmt = $pdo->prepare('SELECT * FROM reservation LEFT JOIN user ON reservation.userId = user.userId  WHERE reservation.userId=?');
        $stmt->execute([$idUser]); 
        return $reservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	}

}

$reservation = new reservation();
$con = new reservation();
?>