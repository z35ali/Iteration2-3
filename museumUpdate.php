<?php
include 'museumMaintain.php';

$museumID = $_POST['museum'];
if (isset($_POST["museumName"])) {
	$museumName= $_POST['museumName'];	
}
if (isset($_POST["dateEST"])) {
	$dateEST= $_POST['dateEST'];	
}
if (isset($_POST["location"])) {
	$location= $_POST['location'];	
}
if (isset($_POST["address"])) {
	$address= $_POST['address'];	
}
if (isset($_POST["architect"])) {
	$architect= $_POST['architect'];	
}
if (isset($_POST["history"])) {
	$history= $_POST['history'];	
}
if (isset($_POST["famousArt"])) {
	$famousArt= $_POST['famousArt'];	
}

$sql1 = "UPDATE Museum
		SET	museumName='$museumName',
			dateEST='$dateEST',
			location='$location',
			address='$address',
			architect='$architect',
			history='$history',
			famousArt='$famousArt'
		WHERE museumID = $museumID;";
$result = $conn->query($sql1);

		
		
		
		
		
?>