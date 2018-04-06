<?php

include 'maintain.php';


echo "<br><br><br><br>";
echo "<form action=artworkAdd.php method='post'>";
echo "<b>INSERT TO TABLE</b> <br><br>";
echo "Artwork name: <input type='text' name='artName'><br>
		Description: <input type='text' name='description'><br>
		Paint Type: <input type='text' name='paintType'><br>
		Creation Date: <input type='text' name='creationDate'><br>
		Dimensions: <input type='text' name='dimensions'><br>
		Location: <input type='text' name='location'><br>
		Price: <input type='text' name='price'><br>
		Artist: <input type='text' name='artist'><br>
		Genre: <input type='text' name='genre'><br>
		Museum: <input type='text' name='museum'><br>
		";

echo "<input type='submit' name='submit'/>";
echo "</form>";

echo "<br><br><br>";






echo "<form action=artworkRemove.php method='post'>";
echo "<b>DELETE FROM TABLE</b><br><br>";
echo 'Artwork: <select name="artwork" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an Artwork</option>';
$sql1 = "SELECT * FROM Artwork";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["artWorkID"].">". $row["artName"]. "</option>";
    }
} else {
    echo "0 results";
}
echo '</select><br>';
echo "<input type='submit' name='submit'/>";
echo "</form>";






echo "<br><br><br>";
echo "<form action=artworkUpdate.php method='post'>";
echo "<b>UPDATE TABLE</b> <br><br>";


echo 'Artwork: <select name="artwork" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an Artwork</option>';
$sql1 = "SELECT * FROM Artwork";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["artWorkID"].">". $row["artName"]. "</option>";
    }
} else {
    echo "0 results";
}
echo '</select><br>';

echo "Artwork name: <input type='text' name='artName'><br>
		Description: <input type='text' name='description'><br>
		Paint Type: <input type='text' name='paintType'><br>
		Creation Date: <input type='text' name='creationDate'><br>
		Dimensions: <input type='text' name='dimensions'><br>
		Location: <input type='text' name='location'><br>
		Price: <input type='text' name='price'><br>
		Artist: <input type='text' name='artist'><br>
		Genre: <input type='text' name='genre'><br>
		Museum: <input type='text' name='museum'><br>
		";

echo "<input type='submit' name='submit'/>";
echo "</form>";






?>