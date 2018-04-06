<?php
include 'artworkMaintain.php';

$artWorkID = $_POST['artwork'];
if (isset($_POST["artName"])) {
	$artName= $_POST['artName'];	
}
if (isset($_POST["description"])) {
	$description= $_POST['description'];	
}
if (isset($_POST["paintType"])) {
	$paintType= $_POST['paintType'];	
}
if (isset($_POST["creationDate"])) {
	$creationDate= $_POST['creationDate'];	
}
if (isset($_POST["dimensions"])) {
	$dimensions= $_POST['dimensions'];	
}
if (isset($_POST["location"])) {
	$location= $_POST['location'];	
}
if (isset($_POST["price"])) {
	$price= $_POST['price'];	
}
if (isset($_POST["artist"])) {
	$artist= $_POST['artist'];	
}
if (isset($_POST["genre"])) {
	$genre= $_POST['genre'];	
}
if (isset($_POST["museum"])) {
	$museum= $_POST['museum'];	
}



$sql1 = "UPDATE Artwork
		SET	artName='$artName',
			description='$description',
			paintType='$paintType',
			creationDate='$creationDate',
			dimensions='$dimensions',
			location='$location',
			price='$price',
			artist='$artist',
			genre='$genre',
			museum='$museum'
		WHERE artWorkID = $artWorkID;";
$result = $conn->query($sql1);

		
		
		
		
		
?>