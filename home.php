<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	
	
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		background-size:cover;
		height: 100vh;
		
		
	}
	*{
		margin:0;
		padding:0;
		box-sizing:border-box;
		font-family:"Poppins",sens-serif;
	}
	.col-md-9{
		margin:0;
		padding:0;
		display:flex;
		justify-content:center;
		align-items:center;
		background-image:url('Photos/IMG-20231119-WA0002.jpg');
		background-repeat:no-repeat;
		background-size:cover;
		height: 100vh;
		
		background-position:center;
	}
	.wrapper{
		
		background-size:cover;
		border-radius: 10px;
		border: 2px solid rgba(255,255,255,2);
		/* backdrop-filter:blur(20px); */
		color:#fff;
	}
	.wrapper h2{
		font-size: 36px;
		text-align:center;
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
		        <a class="nav-link" href="admin/index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="signup.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="home.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav>
	<marquee>This is library mangement system. Library opens at 9:00 AM and close at 5:00 PM</marquee>
	<div id="fullpage">
	
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
			<form action="" method="post">
				<h2>Login</h2>
				<div class="form-group">
					
					<input type="text" name="email" placeholder="Email Id" class="form-control" required>
					
				</div>
				<div class="form-group">
					
					<input type="password" placeholder="Password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button> |
				<a href="signup.php" style="color:red;"> Not registered yet ?</a>	
			</form>
			</div>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: user_dashboard.php");
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
	</div>
</body>
</html>
