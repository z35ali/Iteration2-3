<?php

include 'maintain.php';


echo "<br><br>Artist was selected<br><br>";
echo "<form action=artistAdd.php method='post'>";
echo "<b>INSERT TO TABLE</b> <br><br>";
echo "Artist name: <input type='text' name='name'><br>
		Description: <input type='text' name='description'><br>
		Location: <input type='text' name='location'><br>
		Birth: <input type='text' name='birth'><br>
		Death: <input type='text' name='death'><br>
		Genre: <input type='text' name='genre'><br>";
		

echo "<input type='submit' name='submit'/>";
echo "</form>";

echo "<br><br><br>";






echo "<form action=artistRemove.php method='post'>";
echo "<b>DELETE FROM TABLE</b><br><br>";
echo 'Artist: <select name="artist" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an Artist</option>';
$sql1 = "SELECT * FROM Artist";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["artistID"].">". $row["name"]. "</option>";
    }
} else {
    echo "0 results";
}
echo '</select><br>';
echo "<input type='submit' name='submit'/>";
echo "</form>";






echo "<br><br><br>";
echo "<form action=artistUpdate.php method='post'>";
echo "<b>UPDATE TABLE</b> <br><br>";


echo 'Artist: <select name="artist" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an Artist</option>';
$sql1 = "SELECT * FROM Artist";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["artistID"].">". $row["name"]. "</option>";
    }
} else {
    echo "0 results";
}
echo '</select><br>';

echo "Artist name: <input type='text' name='name'><br>
			Description: <input type='text' name='description'><br>
		Location: <input type='text' name='location'><br>
		Birth: <input type='text' name='birth'><br>
		Death: <input type='text' name='death'><br>
		Genre: <input type='text' name='genre'><br>";

echo "<input type='submit' name='submit'/>";
echo "</form>";






?>