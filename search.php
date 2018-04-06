<?php

include 'index.php';
if (isset($_POST["search"])) {
	$id= $_POST['search'];	
}



$sql1 = "SELECT * from Artwork where artName='$id'";
		$result = $conn->query($sql1);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			  
			   $name=$row["artName"];
				 $description=$row["description"];
				 $paintType=$row["paintType"];
				  $creationDate=$row["creationDate"];
				  $dimensions=$row["dimensions"];
				   $location=$row["location"];
				   $price=$row["price"];
				   $artist=$row["artist"];
				   $genre=$row["genre"];
				   $museum=$row["museum"];
			
		

		
		
		echo "<script>
		
		
		document.getElementById('search').style.border='solid';
		document.getElementById('search').style.display='block';
		document.getElementById('search').innerHTML='Name: $name <br> Description: $description <br> PaintType: $paintType <br> Creation Date: $creationDate <br> Dimensions: $dimensions <br> Location: $location <br> Price: $price <br> Artist: $artist <br>  Genre: $genre <br> Museum: $museum';

		
		
		

		
		 </script>";
				}
		}






?>