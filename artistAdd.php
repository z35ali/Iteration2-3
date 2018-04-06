<?php
include 'artistMaintain.php';

	$name= $_POST['name'];
	$description= $_POST['description'];
	$location= $_POST['location'];
	$birth= $_POST['birth'];
	$death= $_POST['death'];
	$genre= $_POST['genre'];
	

	

$sql1 = "INSERT INTO Artist(name, description, location, birth,death,genre)
		VALUES ('$name','$description','$location','$birth','$death','$genre');";
		$result = $conn->query($sql1);

?>