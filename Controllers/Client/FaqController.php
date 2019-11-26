<?php 
require_once("Views/Faq/faq.php");
require_once("Models/FrequentlyAskedQuestions.php");

$priorityMin= 9999;
$priorityMax=0;
$array = array();
$message = "";

for ($i=0; $i < count($faq->getAll()); $i++) { 
	$dump = $faq->getAll();
	$message .= "<ul><li>".$dump[$i]["question"]."?</li></ul>";
	$message .= "<p>".$dump[$i]["answer"]."</p>";
	if($priorityMax < $dump[$i]["priority"]){
		$priorityMax = $dump[$i]["priority"];
	}
	if($priorityMin >  $dump[$i]["priority"]){
		$priorityMin =  $dump[$i]["priority"];
	}
	$array[$i]["string"] = $message;
	$array[$i]["priority"] = $dump[$i]["priority"];
	$message = "";
}

for($y = $priorityMin; $y <= $priorityMax; $y++){
	for($i = 0; $i < count($array); $i++){
		if($array[$i]["priority"] == $y){
			echo $array[$i]["string"];
		}
	}
}

 ?>
 