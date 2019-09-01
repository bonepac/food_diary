<?php
	include('includes/conn.php');
	
	if (isset($_POST['submit'])) {

	echo $dietname=$_POST['dietname'];
	echo $cook=$_POST['howtocook'];
	echo $health=$_POST['healthbenefit'];
	echo $description=$_POST['description'];
	echo $submitted=$_POST['submittedby'];

	//process Image Uploading
	 $target_path = "images/";
	 $target_path = $target_path . basename ($_FILES['image']['name']);
	 if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){			
	 echo $image = basename($_FILES['image']['name']);
	
	$query = mysqli_query($conn,"insert into diet (dietname, howtocook, healthbenefit, description, submittedby, image) 
		         				  values ('$dietname', '$cook', '$health', '$description', '$submitted', '$image')");

	if ($query) {
		header('location:home.php');
	}else{
		echo "Error with Form submitted";
	}
	
}
	}

	
?>