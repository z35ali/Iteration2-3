<?php
include 'invoice.php';

	$id= $_POST['invoice'];	

$sql1 = "DELETE FROM Invoice where invoiceID=$id;";
		$result = $conn->query($sql1);

?>