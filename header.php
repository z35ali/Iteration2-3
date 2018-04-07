<?php 
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
echo "


<head>
<title>Online Art Store</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='styles.css'>
<meta charset='utf-8'>
</head>

<nav class='navbar navbar-default'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a href='index.php' class='navbar-brand'>Art Store</a>
    </div>
    <ul class='nav navbar-nav'>
      <li><a href='index.php'>Home</a></li>
      <li><a href='about.php'>About Us</a></li>
	  <li> <a href='maintain.php'>Maintain</a></li>
	   <li> <a href='invoice.php'>Invoice</a></li>
    </ul>
    <ul class='nav navbar-nav navbar-right'>
	<li> Search
	<form action='search.php' method='post'>
  <input type='text' name='search' >
  <input type='submit' value='Submit'>
</form> 
	
	
	
	
	</li>
      <li><a href='' data-toggle='modal' data-target='#Modal'><span class='glyphicon glyphicon-shopping-cart'></span> Shopping Cart</a></li>
	  
    </ul>
	
	
	
  </div>
</nav>

 ";

echo "
<!--modal content for the shopping cart-->
<div id='Modal' class='modal fade' role='dialog'>
	<div class='modal-dialog'>
        <div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal'>&times;</button>
				<h4 class='modal-title'>Purchase Details</h4>
			</div>
			<div class='modal-body'>
				<!-- This form asks the user for the information in order to buy and ship the artwork -->
				
				
				";

echo "<form action='shopping.php' method='post'>";
echo '</select>Choose Artwork: ';
				echo "<select name='shopping1' style='width: 150px;'>
				  <option value='' selected disabled hidden>Choose an Artwork</option>";
				$sql2 = "SELECT * FROM Artwork";
				$conn->query($sql2);
				$res = $conn->query($sql2);
				if ($res->num_rows > 0) {
					// output data of each row
					while($row = $res->fetch_assoc()) {
						echo "<option value=".$row["artWorkID"].">".$row["shippingPlan"].$row["artName"]."(".$row["price"].")".'</option>';
					}
				} else {
					echo "0 results";
				}
				echo '<br><br></select><br><br>';
				echo "Quantity: <input type='text' name='quantity' id='quantity'><br><br>
				Shipping plan: 
				<select name='shippingCost' style='width: 150px;'>
				
				  <option value='' selected disabled hidden>Choose Shipping</option>";
				$sql2 = "SELECT * FROM Shipping";
				$conn->query($sql2);
				$res = $conn->query($sql2);
				if ($res->num_rows > 0) {
					// output data of each row
					while($row = $res->fetch_assoc()) {
						echo "<option value=".$row["shippingCost"].">".$row["shippingPlan"].'('.$row["shippingCost"].')'.'</option>';
					}
				} else {
					echo "0 results";
				}
				echo "</select><br><br>";
				echo "<input type='submit' name='submit'/>";
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
?>