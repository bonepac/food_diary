<?php
	include('includes/conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from diet where diet_id='$id'");
	header('location:home.php');

?>