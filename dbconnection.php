<!--database connection-->
<?php

/*$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "Geotag";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}*/

$servername = "localhost";
$dbname = 'Geotag';
$username = "root";
$password = "root";

//Connection
$db = new mysqli($servername, $username, $password, $dbname);

If  ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}

?>