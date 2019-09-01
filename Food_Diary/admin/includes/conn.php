<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","food_diary");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>