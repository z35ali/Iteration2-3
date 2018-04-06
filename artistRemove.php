<?php
include 'artistMaintain.php';

	$id= $_POST['artist'];	

$sql1 = "DELETE FROM Artist where artistID=$id;";
		$result = $conn->query($sql1);

?>