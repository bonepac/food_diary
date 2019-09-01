<?php 	
include('includes/conn.php');
	
$option = strtolower(trim($_GET["op"]));
if ($option === "search") {
$user = $_POST["s"];
$lookFor  = mysqli_query($conn, "SELECT * FROM diet where dietname like '%$user%'");
	
		echo "<table bg='blue' border='1' width='200'>";
		echo   "<tr>
					<td>DIET NAME</td>
					<td>HOW TO PREPARE IT</td>
					<td>HEALTH BENEFIT</td>
					<td>Description</td>
					<td>submitted by</td>
					<td>Action</td>
				</tr>";
	while($row = mysqli_fetch_assoc($lookFor)){
		echo   "<tr>
					
					<td>$row[dietname]</td>
					<td>$row[howtocook]</td>
					<td>$row[healthbenefit]</td>
					<td>$row[description]</td>
					<td>$row[submittedby]</td>
					<td>
					<a href='home.php?id=". $row['diet_id'] ." '>Edit</a>
					</td>
				</tr>";			
	}

	echo "</table>";

}else{


	header('location: home.php');
}

 ?>

 		



			