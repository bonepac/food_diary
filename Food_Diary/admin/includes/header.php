<?php

require_once('includes/auth.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>FOOD DIARY SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../tablecloth/tablecloth.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="../dist/simplePagination.css" />

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../tablecloth/tablecloth.js"></script>
	<script type="text/javascript" src="../js/myscript.js"></script>
	<script type="text/javascript" src="../js/searchjs.js"></script>
	<script src="../dist/jquery.simplePagination.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div><!--img src="images/logo.png"  alt="logo"/>-->
          	    <span class="navbar-brand" style="color:#008080;">MY FOOD--DIARY</span>
          </div>
	</div>
	<div class="navbar-collapse collapse pull-right">
		<ul class="nav navbar-nav">
			<li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
			<li ><a data-toggle="modal" role="button" href="#addnew" title="">About Us    <span class="glyphicon glyphicon-plus"></span></a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="search.php">Searh Diet        <span class="glyphicon glyphicon-search"></span></a></li>
			<li><a href="index.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
		</ul>
	</div>
	
</div>
<hr/>



<div class="container">

<div style="border:2px; background-color:black; width:100%; color:white; text-align:right;">
	<?php echo date('l, F jS Y'); ?>
	<span class="pull-left"><?php echo "Welcome,  "  . $_SESSION['SESS_LAST_NAME']; ?></span>
</div>
