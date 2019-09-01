<?php
include('includes/conn.php');
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>FOOD DIARY SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../tablecloth/tablecloth.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/myscript.js"></script>
	<link rel="stylesheet" href="../dist/simplePagination.css" />
	<script src="../dist/jquery.simplePagination.js"></script>
	<script  src="../searchjs.js" type="text/javascript"></script>
	<script type="text/javascript" src="../tablecloth/tablecloth.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		body, html{
			 color:#6e6e6e;
		}
		li, a{
			color:#20577E;
		}
		
	</style>
	
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
			<li class="active"><a href="home.php"><span class="glyphicon glyphicon-home">Home</a></li>
			<li><a href="signup.php"><span class="glyphicon glyphicon-sign-up">Sign/Up</a></li>
			
		</ul>
	</div>
	
</div>
<hr/>




<div class="container">
	<div class="well" style="margin:auto; padding:auto; width:100%; height: 350px; background-color:white;" >

					<div class="col-md-6" id="login" style="margin-left:220px; margin-top:40px;">
					<form action="login.php" method="POST"  role="form">

					<?php
						if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
							foreach($_SESSION['ERRMSG_ARR'] as $msg) {
								echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
							}
							unset($_SESSION['ERRMSG_ARR']);
						}
						?>
							<div class="form-group">
								<legend>Login</legend>
							</div>
								<div class="form-group">
						<label class="col-md-4 control-label" for="username"><spa></span>Username</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="username" name="username" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="password">password</label>
						<div class="col-md-8">
							<input type="password" class="form-control" id="password" name="password" />
						</div>
					</div>
					
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-4">
									<input type="submit" class="btn btn-success" name="submit" value="submit">
									<input type="Reset" class="btn btn-success" name="Reset" value="Reset">
								</div>
							</div>
					</form>
				
			</div>
     </div>
    
    </div>
 <?php include('includes/footer.php');?>>
<?php include('add_modal.php'); ?>
</body>
</html>