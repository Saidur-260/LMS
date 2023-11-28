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
	#main_content{
		padding: 50px;
		background-color: Seagreen;
		
	}
	#side_bar{
		background-color: MediumSeaGreen;
		padding: 50px;
		background-size:cover;
		height: 100vh;
	}
	.wrapper{
		background:;
		background-size:cover;
		border-radius: 10px;
		border: 2px solid rgba(255,255,255,2);
		backdrop-filter:blur(20px);
		color:#fff;
	}
	
	.col-md-9{
		justify-content:center;
		align-items:center;
		margin:0;
		padding:0;
		display:flex;
	}
	*{
		margin:0;
		padding:0;
		box-sizing:border-box;
		font-family:"Poppins",sens-serif;
	}
	.wrapper h3{
		font-size: 36px;
		text-align:center;
	}
	
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="admin/index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="home.php">Login</a>
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
			<h3>Registration Form</h3>
			<form action="register.php" method="post">
				<div class="form-group">
					
					<input type="text" placeholder="Full Name" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					
					<input type="text"placeholder="Email Id" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					
					<input type="password" placeholder="Password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					
					<input type="text" placeholder="Mobile" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					
					<textarea name="address" placeholder="Address" class="form-control" required></textarea> 
				</div>
				<button type="submit" class="btn btn-primary">Register</button>	
			</form>
			</div>
		</div>
	</div>
</body>
</html>