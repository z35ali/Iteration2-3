<?php

include "header.php";
$servername = "localhost";
$username = "a2korac";
$password = "wijTydBy";
$dbname = "a2korac";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
			echo"<style>
			table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>";
			
			echo"
<table>
  <tr>
    <th>ArtName</th>
    <th>Quantity</th>
    <th>Price</th>
	<th>Tax</th>
	<th>Shipping Cost</th>
	<th>Total Price</th>
  </tr>";
  
  
  $sql3 = "SELECT * FROM Invoice";
				
				$res = $conn->query($sql3);
				if ($res->num_rows > 0) {
					
					while($row = $res->fetch_assoc()) {
						echo "<tr>";
						echo "<td>".$row['artName'].
						"</td>";
						echo "<td>".$row['quantity'].
						"</td>";
						echo "<td>".$row['price'].
						"</td>";
						echo "<td>".$row['tax'].
						"</td>";
						echo "<td>".$row['shippingCost'].
						"</td>";
							echo "<td>".$row['totalPrice'].
						"</td>";
						echo "</tr>";
					}
				}
	
echo "</table>";

echo "<form  action=invoiceRemove.php method='post'>";
echo "<br><b>DELETE FROM TABLE</b><br><br>";
echo 'Invoice: <select name="invoice" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an Invoice</option>';
$sql1 = "SELECT * FROM Invoice";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["invoiceID"].">". $row["artName"]. "</option>";
    }
} else {
    echo "0 results";
}
echo '</select><br>';
echo "<input type='submit' name='submit'/>";
echo "</form>";

?>