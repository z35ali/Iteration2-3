<?php

include 'maintain.php';


echo "<br><br>Museum was selected<br><br>";
echo "<form action=museumAdd.php method='post'>";
echo "<b>INSERT TO TABLE</b> <br><br>";
echo "Museum name: <input type='text' name='museumName'><br>
		Date established: <input type='text' name='dateEST'><br>
		Location: <input type='text' name='location'><br>
		Address: <input type='text' name='address'><br>
		Architect: <input type='text' name='architect'><br>
		History: <input type='text' name='history'><br>
		Famous art: <input type='text' name='famousArt'><br>";

echo "<input type='submit' name='submit'/>";
echo "</form>";

echo "<br><br><br>";






echo "<form action=museumRemove.php method='post'>";
echo "<b>DELETE FROM TABLE</b><br><br>";
echo 'Museum: <select name="museum" style="width: 150px;">
  <option value="" selected disabled hidden>Choose a Museum</option>';
$sql1 = "SELECT * FROM Museum";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["museumID"].">". $row["museumName"]. "</option>";
    }
} else {
    echo "0 results";
}
echo '</select><br>';
echo "<input type='submit' name='submit'/>";
echo "</form>";






echo "<br><br><br>";
echo "<form action=museumUpdate.php method='post'>";
echo "<b>UPDATE TABLE</b> <br><br>";


echo 'Museum: <select name="museum" style="width: 150px;">
  <option value="" selected disabled hidden>Choose a Museum</option>';
$sql1 = "SELECT * FROM Museum";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["museumID"].">". $row["museumName"]. "</option>";
    }
} else {
    echo "0 results";
}
echo '</select><br>';

echo "Museum name: <input type='text' name='museumName'><br>
		Date established: <input type='text' name='dateEST'><br>
		Location: <input type='text' name='location'><br>
		Address: <input type='text' name='address'><br>
		Architect: <input type='text' name='architect'><br>
		History: <input type='text' name='history'><br>
		Famous art: <input type='text' name='famousArt'><br>";

echo "<input type='submit' name='submit'/>";
echo "</form>";






?>