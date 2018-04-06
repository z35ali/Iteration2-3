<?php
include 'artworkMaintain.php';

	$id= $_POST['artwork'];	

$sql1 = "DELETE FROM Artwork where artWorkID=$id;";
		$result = $conn->query($sql1);

?>