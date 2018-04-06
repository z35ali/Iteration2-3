			<?php
			include 'index.php';
			$id= $_POST['museums'];


			$sql1 = "SELECT * from Museum where museumID=".$id;
			$result = $conn->query($sql1);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				   $id= $row["museumID"];
				   $name=$row["museumName"];
					$dateEST=$row["dateEST"];
				   $location=$row["location"];
					  $address=$row["address"];
					  $architect=$row["architect"];
					   $history=$row["history"];
					   $famousArt=$row["famousArt"];
						$image=$row["image"];
				echo "<script>
			
			

			document.getElementById('infoSmall').style.border='solid';
			document.getElementById('imgSmall').style.display='block';
			document.getElementById('infoSmall').style.display='block';
			document.getElementById('imgLarge').style.display='none';
			document.getElementById('infoLarge').style.display='none';
			document.getElementById('infoSmall').innerHTML='Name: <a href=javascript:bigMuseum();>$name </a> <br> Location: $location';
			document.getElementById('imgSmall').innerHTML='<img src=./images/$image class=small>';
			
			

			
			 </script>";
					
				}
			/*} else {
				echo "0 results";*/
			}
			
		echo "<script>
		function bigMuseum(){
				document.getElementById('imgSmall').style.display='none';
		document.getElementById('infoSmall').style.display='none';
		document.getElementById('imgLarge').style.display='block';
		document.getElementById('infoLarge').style.display='block';
		document.getElementById('infoLarge').innerHTML='Name: $name <br> Location: $location  <br> DateEST: $dateEST <br> Address: $address <br> Architects: $architect <br> History: $history <br> Famous Art: $famousArt';
		document.getElementById('imgLarge').innerHTML='<img src=./images/$image class=large>';
			
			}
			
			</script>";


			
			?>
