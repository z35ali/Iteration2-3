<?php
include 'museumMaintain.php';

	$id= $_POST['museum'];	

$sql1 = "DELETE FROM Museum where museumID=$id;";
		$result = $conn->query($sql1);

?>