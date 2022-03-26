<?php
//database config
$servername = "localhost";
$dbname = 'Geotag';
$dbusername = "root";
$dbpassword = "";

//new connection creation
$db = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//validate connection
If  ($db->connect_error) 
{
	die("Connection failed: " . $db->connect_error);
}
?>