<?php


$connection=mysql_connect('localhost','geosmartdb','WMbDT6mAYeQ6qu9R')or die('The connection could not be done');
mysql_select_db('geosmartcity',$connection)or die('DB is not found');

$age = $_POST['age'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];
$distance = $_POST['distance'];

	if (isset($_POST['walk'])) {
		$walk = $_POST['walk'];
	}
		else{
			$walk = NULL;
			}
	if (isset($_POST['bike'])) {
		$bike = $_POST['bike'];
	}
		else{
			$bike = NULL;
			}
	if (isset($_POST['car'])) {
		$car = $_POST['car'];
	}
		else{
			$car = NULL;
			}
	if (isset($_POST['bus'])) {
		$bus = $_POST['bus'];
	}
		else{
			$bus = NULL;
			}
	if (isset($_POST['train'])) {
		$train = $_POST['train'];
	}
		else{
			$train = NULL;
			}
	if (isset($_POST['other'])) {
		$other = $_POST['other'];
	}
		else{
			$other = NULL;
			}
			
$query="INSERT INTO questionnaire (age,gender,occupation, distance, walk, bike, car, bus, train, other) VALUES ('$age','$gender','$occupation','$distance', '$walk','$bike','$car','$bus','$train','$other')";


$res=mysql_query($query);



$response="";

if ($res) {
	$response="Your answers have been saved!";
}else{
	$response="There was an error during the saving process, please try again later";
}

echo json_encode($response);