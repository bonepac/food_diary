<?php
	include('includes/conn.php');
	
	$id=$_GET['id'];
	
	 $dietname=$_POST['dietname'];
	 $cook=$_POST['howtocook'];
     $health=$_POST['healthbenefit'];
	 $description=$_POST['description'];
	$submitted=$_POST['submittedby'];

	$target_path = "images/";
	$target_path = $target_path . basename ($_FILES['image']['name']);
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){			
	$image = basename($_FILES['image']['name']);

		$query = mysqli_query($conn,"update diet set dietname='$dietname', 
											     howtocook='$cook', 
											     healthbenefit='$health', 
											     description='$description', 
											     submittedby='$submitted', 
											     image='$image' 
											     where diet_id='$id'");

	if ($query) {
		header('location:home.php');
	}else{
		echo "Error with Form submitted";
	}
}
?>