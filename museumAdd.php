<?php
include 'museumMaintain.php';

	$museumName= $_POST['museumName'];
	$dateEST= $_POST['dateEST'];
	$location= $_POST['location'];
	$address= $_POST['address'];
	$architect= $_POST['architect'];
	$history= $_POST['history'];
	$famousArt= $_POST['famousArt'];

	

$sql1 = "INSERT INTO Museum(museumName, dateEST, location, address,architect,history,famousArt)
		VALUES ('$museumName','$dateEST','$location','$address','$architect','$history','$famousArt');";
		$result = $conn->query($sql1);

?>