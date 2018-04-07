		<?php
		include 'index.php';
		$id= $_POST['artists'];


		$sql1 = "SELECT * from Artist where artistID=".$id;
		$result = $conn->query($sql1);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			   $id= $row["artistID"];
			   $name=$row["name"];
			   $location=$row["location"];
				 $description=$row["description"];
				  $birth=$row["birth"];
				  $death=$row["death"];
				   $genre=$row["genre"];
				   $image=$row["image"];
			echo "<script>
		
		

		document.getElementById('infoSmall').style.border='solid';
		document.getElementById('imgSmall').style.display='block';
		document.getElementById('infoSmall').style.display='block';
		document.getElementById('imgLarge').style.display='none';
		document.getElementById('infoLarge').style.display='none';
		document.getElementById('infoSmall').innerHTML='Name: <a href=javascript:bigArtist();>$name </a> <br> Description: $description';
		document.getElementById('imgSmall').innerHTML='<img src=./images/$image class=small  alt=NoImage > ';
		
		
		

		
		 </script>";
				
			}
		/*} else {
			echo "0 results";*/
		}
		
	echo "<script>
	function bigArtist(){
			document.getElementById('imgSmall').style.display='none';
	document.getElementById('infoSmall').style.display='none';
	document.getElementById('imgLarge').style.display='block';
	document.getElementById('infoLarge').style.display='block';
	document.getElementById('infoLarge').innerHTML='Name: $name <br> Description: $description  <br> Location: $location <br> Birth Date: $birth <br> Death Date: $death <br> Genre: $genre';
	document.getElementById('imgLarge').innerHTML='<img src=./images/$image class=large alt=NoImage  > ';
		
		}
		
		</script>";


		
		?>
