<?php
include 'artistMaintain.php';

$artistID = $_POST['artist'];
if (isset($_POST["name"])) {
	$name= $_POST['name'];	
}
if (isset($_POST["description"])) {
	$description= $_POST['description'];	
}
if (isset($_POST["location"])) {
	$location= $_POST['location'];	
}
if (isset($_POST["birth"])) {
	$birth= $_POST['birth'];	
}
if (isset($_POST["death"])) {
	$death= $_POST['death'];	
}
if (isset($_POST["genre"])) {
	$genre= $_POST['genre'];	
}


$sql1 = "UPDATE Artist
		SET	name='$name',
			description='$description',
			location='$location',
			birth='$birth',
			death='$death',
			genre='$genre'		
		WHERE artistID = $artistID;";
$result = $conn->query($sql1);

		
		
		
		
		
?>