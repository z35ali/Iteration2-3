		<?php
		include 'index.php';
		$id= $_POST['artworks'];


		$sql1 = "SELECT * from Artwork where artWorkID=".$id;
		$result = $conn->query($sql1);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			   $id= $row["artWorkID"];
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
				   $image=$row["image"];
			echo "<script>
		
		

		document.getElementById('infoSmall').style.border='solid';
		document.getElementById('imgSmall').style.display='block';
		document.getElementById('infoSmall').style.display='block';
		document.getElementById('imgLarge').style.display='none';
		document.getElementById('infoLarge').style.display='none';
		document.getElementById('infoSmall').innerHTML='Name: <a href=javascript:bigArt();>$name </a> <br> Description: $description';
		document.getElementById('imgSmall').innerHTML='<img src=./images/$image class=small  alt=NoImage>  ';
		
		
		

		
		 </script>";
				
			}
		/*} else {
			echo "0 results";*/
		}
		
	echo "<script>
	function bigArt(){
			document.getElementById('imgSmall').style.display='none';
	document.getElementById('infoSmall').style.display='none';
	document.getElementById('imgLarge').style.display='block';
	document.getElementById('infoLarge').style.display='block';
	document.getElementById('infoLarge').innerHTML='Name: $name <br> Description: $description <br> PaintType: $paintType <br> Creation Date: $creationDate <br> Dimensions: $dimensions <br> Location: $location <br> Price: $price <br> Artist: $artist <br>  Genre: $genre <br> Museum: $museum';
	document.getElementById('imgLarge').innerHTML='<img src=./images/$image class=large  alt=NoImage> ';
		
		}
		
		</script>";


		
		?>
