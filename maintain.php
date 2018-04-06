<?php
include 'header.php';
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
echo "Which Table?
<a href='artistMaintain.php' class='btn btn-default'>Artist</a>
<a href='artworkMaintain.php' class='btn btn-default'>Artwork</a>
<a href='museumMaintain.php' class='btn btn-default'>Museum</a>


";




?>