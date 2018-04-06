<?php
include 'header.php';





echo "<form action='artist.php' method='post'>";
echo 'Artists: <select name="artists" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an Artist</option>';
$sql1 = "SELECT * FROM Artist";
$conn->query($sql1);
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["artistID"].">". $row["name"]. "</option>";

		// echo <option $row["artistID"];
    }
} else {
    echo "0 results";
}
echo '</select>';
echo "<input type='submit' name='submit'/>";
echo "</form>";




echo "<form action='artwork.php' method='post'>";
echo 'ArtWorks: <select name="artworks" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an ArtWork</option>';
$sql2 = "SELECT * FROM Artwork";
$conn->query($sql2);
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["artWorkID"].">". $row["artName"]. "</option>";

		// echo <option $row["artistID"];
    }
} else {
    echo "0 results";
}
echo '</select>';
echo "<input type='submit' name='submit'/>";
echo "</form>";





echo "<form action='museum.php' method='post'>";
echo 'Museums: <select name="museums" style="width: 150px;">
  <option value="" selected disabled hidden>Choose an Museum</option>';
$sql3= "SELECT * FROM Museum";
$conn->query($sql3);
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=".$row["museumID"].">". $row["museumName"]. "</option>";

		// echo <option $row["artistID"];
    }
} else {
    echo "0 results";
}
echo '</select>';
echo "<input type='submit' name='submit'/>";
echo "</form>";



echo '<!--These are the divs for the large boxes when clicking on an artwork or artist, info is added into these divs by javascript -->
<div class="container">
</select>
  <div class="row">

    <!--large image div -->
    <div class="col-md-6 imagePaneLarge" id="imgLarge">
    </div>

    <!--large text info div -->
    <div class="col-md-6 infoPaneLarge" id="infoLarge">

    </div>
  </div>
</div>

<!--These are the divs for the small boxes when clicking on an artwork or artist, info is added into these divs by javascript -->
<div class="container">
</select>
  <div class="row">

    <!--small image div -->
    <div class="col-md-6 imagePaneSmall" id="imgSmall">
    </div>

    <!--small info div -->
    <div class="col-md-6 infoPaneSmall" id="infoSmall">

    </div>
	
	 </div>
  
	 <!--search div -->
    <div class="col-md-6 searchPane" id="search">

    </div>
	

</div>
 
';

?>
