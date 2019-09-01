<?php include('includes/header.php');?>

	


	<div class="well" style="margin:auto; padding:auto; width:100%; background-color:white;">

	<!--<span style="font-size:25px; color:blue"><center><strong>PHP/MySQLi CRUD Operation using Bootstrap</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>-->
		<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
				include('includes/conn.php');
				$limit = 3;  
                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
                     $start_from = ($page-1) * $limit;  

                $sql = "SELECT * FROM diet ORDER BY diet_id ASC LIMIT $start_from, $limit";  
				$result = mysqli_query($conn, $sql); 


				while($row=mysqli_fetch_array($result)){
			?>

				<li style="margin-right:0px;">
						<img class="thumb" src="images/<?php echo $row['image']; ?>" alt="Image" height="200" width="290"/>
						<span class="price">
							<?php echo $row['dietname'];?>
						</span>
					<div class="property_details">
						<em>
							Submitted by:  <?php echo $row['submittedby']; ?>
						</em>
						<h2>:<span class="property_size"><a href="#edit<?php echo $row['diet_id']; ?>" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-detail"></span>Details</a>
							
							</h2>
					</div>
				</li>



							<?php include('button.php'); ?>
					
					
					<?php
				}
			
			?>

				</ul>
		</div>
	</section>
		<?php  
			include('includes/conn.php');
			$sql = "SELECT COUNT(diet_id) FROM diet";  
			$result = mysqli_query($conn, $sql);  
			$row = mysqli_fetch_row($result);  
			$total_records = $row[0];  
			$total_pages = ceil($total_records / $limit);  

			$pagLink = "<nav><ul class='pagination'>";  
			for ($i=1; $i<=$total_pages; $i++) {  
			             $pagLink .= "<li><a href='home.php?page=".$i."'>".$i."</a></li>";  
			};  
			echo $pagLink . "</ul></nav>";  
			?>
	</div>
	

<?php include('includes/footer.php');?>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'index.php?page='
    });
	});
</script>