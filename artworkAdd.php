	<?php
	include 'artworkMaintain.php';

		$artName= $_POST['artName'];
		$description= $_POST['description'];
		$paintType= $_POST['paintType'];
		$creationDate= $_POST['creationDate'];
		$dimensions= $_POST['dimensions'];
		$location= $_POST['location'];
		$price= $_POST['price'];
			$artist= $_POST['artist'];
				$genre= $_POST['genre'];
					$museum= $_POST['museum'];
					

		

	$sql1 = "INSERT INTO Artwork(artName, description, paintType, creationDate,dimensions,location,price,artist,genre,museum)
			VALUES ('$artName','$description','$paintType','$creationDate','$dimensions','$location','$price','$artist','$genre','$museum');";
			$result = $conn->query($sql1);

	?>