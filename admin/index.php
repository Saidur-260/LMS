<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS | Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		background-size:cover;
		height: 100vh;
	}
	.col-md-9{
		margin:0;
		padding:0;
		display:flex;
		justify-content:center;
		align-items:center;
		background-image:url('../Photos/IMG_20231126_130810.jpg');
		/* background-color: blue; */
		background-repeat:no-repeat;
		background-size:fit;
		height: 100vh;
		
		background-position:center;
	}
	.wrapper h3{
		font-size: 36px;
		text-align:center;
		
	}
	.wrapper{
		
		background-size:cover;
		border-radius: 10px;
		border: 2px solid rgba(255,255,255,2);
		/* backdrop-filter:blur(20px); */
		
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="home.php">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="home.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../signup.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../home.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav>
	<span><marquee>This is library mangement system. Library opens at 9:00 AM and close at 5:00 PM</marquee></span>
	<div class="row">
		<div class="col-md-3" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening: 9:00 AM</li>
				<li>Closing: 5:00 PM</li>
				<li>(Sunday Off)</li>
			</ul>
			<h5>What We provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>
		<div class="col-md-9" id="main_content">
			<div class="wrapper"> 
			<h3>Admin Login Form</h3>
			<form action="" method="post">
				<div class="form-group">
					
					<input type="text" placeholder="Email Id" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					
					<input type="password" placeholder="Password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>	
			</form>
			</div>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
