<?php 	
include('includes/conn.php');
	
$option = strtolower(trim($_GET["op"]));
if ($option === "search") {
$user = $_POST["s"];
$lookFor  = mysqli_query($conn, "SELECT * FROM diet where dietname like '%$user%'");
	
		echo "<table bg='blue' border='1' width='200'>";
		echo   "<tr>
					<td>PICTURE</td>
					<td>DIET NAME</td>
					<td>HOW TO PREPARE IT</td>
					<td>HEALTH BENEFIT</td>
					<td>Description</td>
					<td>submitted by</td>
					
				</tr>";
	while($row = mysqli_fetch_assoc($lookFor)){
		echo   "<tr>
					<td><img class='thumb' src='images/" .$row['image'] ."' alt='Image' height='200' width='290'/></td>
					<td>$row[dietname]</td>
					<td>$row[howtocook]</td>
					<td>$row[healthbenefit]</td>
					<td>$row[description]</td>
					<td>$row[submittedby]</td>
					
				</tr>";			
	}

	echo "</table>";

}else{


	header('location: home.php');
}

 ?>

 		



			